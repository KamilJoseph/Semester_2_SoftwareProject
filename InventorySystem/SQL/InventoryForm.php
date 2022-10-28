<?php
//-----------------------------------------------Update InventorySystem--------------------------//
function createStocks(){

    $created = false;  //variable is used to check if creation is successfull or not
    $db = new SQLite3("C:/xampp/Data/InventorySystem.db"); // db connection 
    $sql = "INSERT INTO ManagementSystem VALUES (:ID,:Item,:InStock,:Out_Of_Stock, :Delivered)";
    $stmt = $db->prepare($sql);//prepare the sql statement
                                                                      
    $stmt->bindParam(':ID',              $_POST['ID'],           SQLITE3_TEXT); //give the values for the parameters 
    $stmt->bindParam(':Item',        	 $_POST['Item'],       	 SQLITE3_TEXT);
    $stmt->bindParam(':InStock',         $_POST['InStock'],      SQLITE3_TEXT);
    $stmt->bindParam(':Out_Of_Stock',    $_POST['Out_Of_Stock'], SQLITE3_TEXT);
    $stmt->bindParam(':Delivered',       $_POST['Delivered'],    SQLITE3_TEXT);
    
    $stmt->execute(); //execute the sql statement

    if($stmt){ //the logic
        $created = true;
    }

    return $created;
}
 //----------------------- Error Messages inside PHP area.---------------------------------------------------
	    $Item = $InStock = $Out_Of_Stock = $Delivered="";
		$allFields = "yes";
		if (isset($_POST['submit'])){

			
			if($_POST['Item']==""){
				$Item = "Please ensure Item is correct ";
				$allFields  = "no";
			}
			
			if($_POST['InStock']==""){
				$InStock = "Check if the item is in Stock";
				$allFields  = "no";
			}

			if($_POST['Out_Of_Stock']==""){
				$Out_Of_Stock = "Need more supplies!";
				$allFields  = "no";
			}

			if($_POST['Delivered']==""){
				$Delivered = "Item Has Been Delivered";
				$allFields  = "no";
			}
			
		

			if($allFields == "yes")
			{
				$createUser = createStocks();
				header('Location:StockCreated.php?createStocks='.$createStocks);
			}
		}
		