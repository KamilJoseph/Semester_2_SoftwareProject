<?php
//--------------------- The formula below Creates User SQL------------------------------------------------------ 
function createUser(){

	//variable is used to check if creation is successfull or not
    $created = false;

	// Following code allows the table to display data from SQLITE Database onto the web. 
    $db = new SQLite3("C:/xampp/Data/InventorySystem.db"); 
    $sql = "INSERT INTO SignUp VALUES (:ID,:FullName,:Password,:ConfirmPassword,:Postcode,:UserName)";
    
	//prepare the sql statement
    $stmt = $db->prepare($sql);
     
	//give the values for the parameters
    $stmt->bindParam(':ID',              $_POST['ID'],              SQLITE3_TEXT);  
    $stmt->bindParam(':FullName',        $_POST['FullName'],        SQLITE3_TEXT);
    $stmt->bindParam(':Password',        $_POST['Password'],        SQLITE3_TEXT);
    $stmt->bindParam(':ConfirmPassword', $_POST['ConfirmPassword'], SQLITE3_TEXT);
    $stmt->bindParam(':Postcode',        $_POST['Postcode'],        SQLITE3_TEXT);
    $stmt->bindParam(':UserName',        $_POST['UserName'],        SQLITE3_TEXT); 
    
    //execute the sql statement
    $stmt->execute(); 

	//the boolean logic once the condition is true
    if($stmt){$created = true;}

    return $created;
}
 //----------------------- Error Messages inside PHP area.---------------------------------------------------
		$errorfname = $erroruname = $errorpwd = $errorcpd = $errorpostcode="";
		$allFields = "yes";
		if (isset($_POST['submit'])){

			if($_POST['FullName']==""){  		$errorfname = "firstname is mandatory"; 		  $allFields = "no"; }

			if( $_POST['Password']==""){		$errorpwd   = "Password is mandatory"; 	 		  $allFields = "no"; }
			
			if( $_POST['ConfirmPassword']==""){ $errorcpd   = "Confirming Password is mandatory"; $allFields  = "no";}

			if( $_POST['Postcode']==""){ 		$errorpwd 	= "Postcode is mandatory"; 			  $allFields= "no";  }
		
			if( $_POST['UserName']==""){ 		$erroruname = "Username is mandatory"; 			  $allFields  = "no";}

			if($allFields == "yes") {$createUser = createUser(); header('Location:userCreationSummary.php?createUser='.$createUser);}

		}
    

?>
<?php
//------------------------------------------DeleteUserSQL-------------------------------------------------
$db   = new SQLite3('C:/xampp/Data/InventorySystem.db');

$sql  ="SELECT ID, Fullname, UserName, Postcode FROM SignUp WHERE ID=:uid";
$stmt = $db->prepare($sql);
$stmt->bindParam(':uid', $_GET['uid'], SQLITE3_TEXT);
$result= $stmt->execute();
$arrayResult = [];

while($row=$result->fetchArray(SQLITE3_NUM)){ $arrayResult [] = $row;}

if (isset($_POST['delete'])){

	$db = new SQLite3('C:/xampp/Data/InventorySystem.db');
    $stmt = "DELETE FROM SignUp WHERE ID = :uid";
    $sql = $db->prepare($stmt);
    $sql->bindParam(':uid', $_POST['uid'], SQLITE3_TEXT);
    $sql->execute();
    header("Location:ViewUsers.php?deleted=true");
}

?>

