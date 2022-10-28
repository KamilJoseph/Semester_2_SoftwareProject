<?php
//--------------------- The formula below Creates User SQL------------------------------------------------------ 
function createUser(){

	//variable is used to check if creation is successfull or not
    $created = false;

	// Following code allows the table to display data from SQLITE Database onto the web. 
    $db = new SQLite3("C:/xampp/Data/InventorySystem.db"); 
    $sql = "INSERT INTO Cosutmers_Feedback VALUES (:ID,:costumer_satisfaction,:Comments)";
    
	//prepare the sql statement
    $stmt = $db->prepare($sql);
     
	//give the values for the parameters
    $stmt->bindParam(':ID',                     $_POST['ID'],SQLITE3_TEXT);  
    $stmt->bindParam(':costumer_satisfaction',  $_POST['costumer_satisfaction'],SQLITE3_TEXT);
    $stmt->bindParam(':Comments',               $_POST['Comments'],SQLITE3_TEXT);
    
    //execute the sql statement
    $stmt->execute(); 

	//the boolean logic once the condition is true
    if($stmt){$created = true;}

    return $created;
}
 //----------------------- Error Messages inside PHP area.---------------------------------------------------
 $errorrate = $errorcomments="";
 $allFields = "yes";
 
 if (isset($_POST['submit'])){

     if($_POST['FullName']==""){$errorrate     = "Please rate the costumer";$allFields = "no"; }
     if($_POST['Password']==""){$errorcomments = "Please provide comments"; $allFields = "no"; }
	 if($allFields == "yes");
		}
    

