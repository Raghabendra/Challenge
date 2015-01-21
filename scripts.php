<?php
function CreateCSV($childFile, $parentFile) 
{
	$RowChild=1;
	if (($handle = fopen($childFile, "r")) !== FALSE) {
		while (($ChildData[$RowChild] = fgetcsv($handle, 1000, ",")) !== FALSE) {
			$RowChild++;
		}
		fclose($handle);
	}

	$fp = fopen('final.csv', 'w');

	$RowParent=1;
	if (($handle = fopen($parentFile, "r")) !== FALSE){
		while (($ParentData[$RowParent] = fgetcsv($handle, 1000, ",")) !== FALSE){
			$final = $ParentData[$RowParent];
			 for($d=1;$d<$RowChild;$d++){
				if(strtoupper($ParentData[$RowParent][0]) == strtoupper($ChildData[$d][0])){
					$num = count($ChildData[$d]);
					for($p=1;$p<$num;$p++)
						array_push($final,$ChildData[$d][$p]);
				}	
			}
			$RowParent++;
			fputcsv($fp, $final);
		}
		fclose($fp);
		fclose($handle);
	}
}
function EvaluateCSV($File)
{
	$Row=1;
	$sum =0;
	$index = -1;
	if (($handle = fopen($File, "r")) !== FALSE) {
		while (($Data[$Row] = fgetcsv($handle, 1000, ",")) !== FALSE) {
			if($Row==1){
				$num = count($Data[$Row]);
				for($i=0;$i<$num;$i++){
					if(strtoupper($Data[$Row][$i])==strtoupper("Amount"))
						$index = $i;
				}
			}
			if($index!==-1){
				if(strtoupper($Data[$Row][1])==strtoupper("current")){
					if(count($Data[$Row])>=$index){
						$sum += intval($Data[$Row][$index]);
					}
				}
			}
			$Row++;
		}
		fclose($handle);
	}
	
	echo "Total Amount of current contracts:"; echo $sum;
}

CreateCSV("awards.csv","contracts.csv");
EvaluateCSV("final.csv");
?>
