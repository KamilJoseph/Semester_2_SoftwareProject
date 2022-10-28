<?php
//--------------------- The formula below Creates User SQL------------------------------------------------------ 
function createUser(){

	//variable is used to check if creation is successfull or not
    $created = false;

	// Following code allows the table to display data from SQLITE Database onto the web. 
    $db = new SQLite3("C:/xampp/Data/InventorySystem.db"); 
    $sql = "INSERT INTO Suppliers VALUES (:ID,:Suppliers_Name,:Cost,:Item,:Damaged_Item,:Amount)";
    
	//prepare the sql statement
    $stmt = $db->prepare($sql);
     
	//give the values for the parameters
    $stmt->bindParam(':ID',              $_POST['ID'],            SQLITE3_TEXT);  
    $stmt->bindParam(':Suppliers_Name',  $_POST['Suppliers_Name'],SQLITE3_TEXT);
	$stmt->bindParam(':Cost',            $_POST['Cost'],            SQLITE3_TEXT); 
    $stmt->bindParam(':Item',            $_POST['Item'],          SQLITE3_TEXT);
    $stmt->bindParam(':Damaged_Item',    $_POST['Damaged_Item'],  SQLITE3_TEXT);
    $stmt->bindParam(':Amount',          $_POST['Amount'],        SQLITE3_TEXT);
   
    
    //execute the sql statement
    $stmt->execute(); 

	//the boolean logic once the condition is true
    if($stmt){$created = true;}

    return $created;
}
 //----------------------- Error Messages inside PHP area.---------------------------------------------------
		$errorSN = $errorItem = $errorDT= $errorCost= $errorAmount ="";

		$allFields = "yes";
		if (isset($_POST['submit'])){

			if($_POST['Suppliers_Name']=="") {$errorSN    = "Please Enter Suppliers Name"; 		 $allFields = "no";}

			if( $_POST['Cost']=="")          {$errorCost  = "Please Enter Cost Amount Name"; 	 $allFields = "no";}

			if( $_POST['Item']=="")          {$errorItem  = "Please Enter Item Name"; 	 		 $allFields = "no";}
			
			if( $_POST['Damaged_Item']=="")  {$errorDT    = "Please Enter the Damaged Item";     $allFields = "no";}

			if( $_POST['Amount']=="")        {$errorAmount= "Please Enter the amount you want?"; $allFields = "no";}
		
			if($allFields == "yes")          {$Supplies = createUser(); header('Location:Suppliers.php?createUser='.$Supplies);}

		}
    

?>