<?php
//-----------------------------------------------Update InventorySystem--------------------------//
function loggedUser(){

    $created = false;  //variable is used to check if creation is successfull or not
    $db = new SQLite3("C:/xampp/Data/InventorySystem.db"); // db connection 
    $sql = "INSERT INTO Logs VALUES (:ID,:Week,:Date,:Month)";
    $stmt = $db->prepare($sql);//prepare the sql statement
                                                                      
    $stmt->bindParam(':ID',    $_POST['ID'],    SQLITE3_TEXT); //give the values for the parameters 
    $stmt->bindParam(':Week',  $_POST['Week'],  SQLITE3_TEXT);
    $stmt->bindParam(':Date',  $_POST['Date'],  SQLITE3_TEXT);
    $stmt->bindParam(':Month', $_POST['Month'], SQLITE3_TEXT);

    $stmt->execute(); //execute the sql statement

    if($stmt){ //the logic
        $created = true;
    }

    return $created;
}
 //----------------------- Error Messages inside PHP area.---------------------------------------------------
	    $Week = $Date = $Month ="";
		$allFields = "yes";
		if (isset($_POST['submit'])){
			
			if($_POST['Week']==""){
				$Week = "Please ensure that all Month/Date/Week/ Are inputed correctly"; $allFields  = "no";
			}

			if($_POST['Date']==""){
				$Date= "Please ensure that all Month/Date/Week/ Are inputed correctly"; $allFields  = "no";
			}

			if($_POST['Month']==""){
				$Month= "Please ensure that all Month/Date/Week/ Are inputed correctly"; $allFields  = "no";
			}
			
		

			if($allFields == "yes")
			{
				$loggedUser = loggedUser();
				header('Location:../Content/Admin.php?logs='.$loggedUser);
			}
		}