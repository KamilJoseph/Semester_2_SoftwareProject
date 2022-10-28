<?php include "HeaderNav.php"; require "../SQL/Controller.php";

//------------Update User SQL---------------------------
$uID = $_GET['uid'];

$db = new SQLite3('C:/xampp/Data/InventorySystem.db');
$sql = "SELECT * FROM SignUp WHERE ID=:uid";
$stmt = $db->prepare($sql);
$stmt->bindParam(':uid', $_GET['uid'], SQLITE3_TEXT);
$result= $stmt->execute();
$arrayResult = [];

while($row=$result->fetchArray(SQLITE3_NUM)){
    $arrayResult [] = $row;
}

if (isset($_POST['submit'])){

     $db = new SQLite3('C:/xampp/Data/InventorySystem.db');
     $sql = "UPDATE SignUp SET ID = :uid, FullName = :FullName, Postcode = :Postcode, UserName = :uname WHERE ID = :uid";
     $stmt = $db->prepare($sql);
     
     $stmt->bindParam(':uid',	  $_POST['uid'], 	  SQLITE3_TEXT);
     $stmt->bindParam(':FullName',$_POST['FullName'], SQLITE3_TEXT);
     $stmt->bindParam(':Postcode',$_POST['Postcode'], SQLITE3_TEXT);
	 $stmt->bindParam(':uname',	  $_POST['uname'], 	  SQLITE3_TEXT);
 
     $stmt->execute();
 
     header('Location: ViewUsers.php');
 }



?>

	<div class="container bgColor">
    <main role="main" class="pb-3">
        <?php error_reporting(0)?>
    <div class="row">
    <div class="col-11">

    <form method="post" style = "background-color: #F3F3F3; width:450px; border-radius:10px ">

        <div   class="form-group"   style= "position:relative; left:140px; width:130px;" >
        <label class="control-label labelFont">ID</label>
        <input class="form-control" type="text" name = "uid" value="<?php echo $arrayResult[0][0]; ?>">
        </div>

        <div   class="form-group"   style= "position:relative; left:140px;  width:130px;">
        <label class="control-label labelFont">FullName</label>
        <input class="form-control" type="text" name = "FullName" value="<?php echo $arrayResult[0][1]; ?>">
        </div>

        <div   class="form-group"   style= "position:relative; left:140px;   width:130px;">
        <label class="control-label labelFont">Postcode</label>
        <input class="form-control" type="text" name = "Postcode" value="<?php echo $arrayResult[0][4]; ?>">
        </div>

        <div   class="form-group"   style= "position:relative; left:140px;   width:130px;">
        <label class="control-label labelFont">UserName</label>
        <input class="form-control" type="text" name = "UserName" value="<?php echo $arrayResult[0][5]; ?>">
        </div>

        <div   class="form-group col-md-3" style= "position:relative; left:127px; ">
        <input type="submit" name="submit" value="Update" class="btn btn-primary">
        </div>
                   
        <div class="form-group col-md-3"><a href="ViewUsers.php">Back</a></div>
        </form> 
     
        <div style = "position:relative; left:545px; bottom:415px; background-color: #F3F3F3; width:340px; height:400px; border-radius:10px;">
	    <p style = "text-align:center; color:blue;"><b>Are you sure you want to update?</b></p>
        </div>

        </div>
        </div>

</main>
</div>

<?php  include("Footer.php");?>