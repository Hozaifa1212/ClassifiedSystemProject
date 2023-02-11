<?php
session_start();


	   //Get form data
	  
	   $formdata = array(
	      'name'=> $_POST["name"],
	      'email'=> $_POST["email"],
          'comment'=>$_POST["comment"]
          
	   );

	   
		$existingdata = file_get_contents('../File/ManagerToAdmin.json');
		$tempJSONdata = json_decode($existingdata);
		$tempJSONdata[]=$formdata;
		//Convert updated array to JSON
		$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
		
		//write json data into data.json file
		if(file_put_contents("../File/ManagerToAdmin.json", $jsondata)) {
			header("Location: ../View/ManagerPage.php"); 
		 }

        
		
 
   
       

    

?>
