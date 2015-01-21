Running the script

Step 1: Installing WebServer like Apache and PHP
			You can directly download and install from their 
		respective sites or you can install integrated package 
		application like XAMPP.

Step 2: Run the Apache Server
			If you are using XAMPP you can directly run the Apache Server
		using XAMPP Control Center.
		
		Note: Apache need Port 80 free to start the server. If it doesnot start
		make sure you turn of services using the port 80.
		
Step 3: Running the Script
			For XAMPP User they can create a folder in the xampp/htdocs/MyWeb and put 
		their files in it and run the scripts.php in any browser as 
					localhost/MyWeb/scripts.php
			
			You can also run the scripts from the command line as
				php scripts.php
		
		Note: For using command line make sure to setup environmental variables
				Go to PC/Computer Properties
				Go to Advanced System Settings
				Select Environmental Variables
				Create New Local Variable Named PATH or add php installation path 
					in System Variable like
					
					C:\xampp\php for XAMPP users

About the Script
It includes a function named CreateCSV and take two input parameters childFile and parentFile.
It evaluates and saves the file in the working directory.

Another function named EvaluateCSV take file input and calculates the amount and displays it.
					
					
