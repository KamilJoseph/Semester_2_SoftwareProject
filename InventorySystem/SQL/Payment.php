<?php
//-----------------------------------------------Update InventorySystem--------------------------//
function payment(){

    $created = false;  //variable is used to check if creation is successfull or not
    $db = new SQLite3("C:/xampp/Data/InventorySystem.db"); // db connection 
    $sql = "INSERT INTO Payment VALUES (:ID,:Item,:Amount,:Card_Number,:Sort_Code,:Account_Number,:Expiry_Date,:CVC_number)";
    $stmt = $db->prepare($sql);//prepare the sql statement
                                                                      
    $stmt->bindParam(':ID',              $_POST['ID'],             SQLITE3_TEXT);//give the values for the parameters 
    $stmt->bindParam(':Item',    		 $_POST['Item'],    	   SQLITE3_TEXT);
    $stmt->bindParam(':Amount',    		 $_POST['Amount'],    	   SQLITE3_TEXT);
    $stmt->bindParam(':Card_Number',     $_POST['Card_Number'],    SQLITE3_TEXT);
    $stmt->bindParam(':Sort_Code',       $_POST['Sort_Code'],      SQLITE3_TEXT);
    $stmt->bindParam(':Account_Number',  $_POST['Account_Number'], SQLITE3_TEXT);
    $stmt->bindParam(':Expiry_Date',     $_POST['Expiry_Date'],    SQLITE3_TEXT);
    $stmt->bindParam(':CVC_number',      $_POST['CVC_number'],     SQLITE3_TEXT);

    $stmt->execute(); //execute the sql statement

    if($stmt){ //the logic
        $created = true;
    }

    return $created;
}
 //----------------------- Error Messages inside PHP area.---------------------------------------------------
 $Item = $Amount= $CardNumber = $SortCode = $AccountNumber = $ExpiryDate= $CVCnumber="";
		$allFields = "yes";
		if (isset($_POST['submit'])){

			
			if($_POST['Item']		   ==""){$Item     	  	= "Item is Mandatory "; 				 	  $allFields  = "no";}
			
			if($_POST['Amount']		   ==""){$Amount 	  	= "Item is Mandatory ";					      $allFields  = "no";}

			if($_POST['Card_Number']   ==""){$CardNumber  	= "Please ensure CardNumber is correct";      $allFields  = "no";}

			if($_POST['Sort_Code']     ==""){$SortCode 		= "Please ensure Expiry Date is correct";	  $allFields  = "no";}

            if($_POST['Account_Number']==""){$AccountNumber = "Please ensure your CVC Number is correct"; $allFields  = "no";}

			if($_POST['Expiry_Date']   ==""){$ExpiryDate 	= "Please ensure your CVC Number is correct"; $allFields  = "no";}
			
			if($_POST['CVC_number']	   ==""){$CVCnumber 	= "Please ensure your CVC Number is correct"; $allFields  = "no";}
		
			if($allFields == "yes") 		{$payment		= payment(); header('Location:Reciept.php?reciept='.$payment);}
		}

?>
<?php
//------------------------------------------DeleteUserSQL-------------------------------------------------
$db = new SQLite3('C:/xampp/Data/InventorySystem.db');
$sql = "SELECT ID, Item, Amount, Card_Number, Sort_Code, Account_Number, Expiry_Date, CVC_number   FROM Payment WHERE ID=:uid";
$stmt = $db->prepare($sql);
$stmt->bindParam(':uid', $_GET['uid'], SQLITE3_TEXT);
$result= $stmt->execute();
$arrayResult = [];

while($row=$result->fetchArray(SQLITE3_NUM)){ $arrayResult [] = $row;
}if (isset($_POST['delete'])){
$db = new SQLite3('C:/xampp/Data/InventorySystem.db');
$stmt = "DELETE FROM Payment WHERE ID = :uid";
$sql = $db->prepare($stmt);
$sql->bindParam(':uid', $_POST['uid'], SQLITE3_TEXT);
$sql->execute();
header("Location:Reciept.php?deleted=true");
}

?>