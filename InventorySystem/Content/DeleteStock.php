<?php include("HeaderNav.php"); require("../SQL/InventoryForm.php") ?>
<link rel="stylesheet" href="../CSS/site.css"></link>

<?php
//------------------------------------------DeleteUserSQL-------------------------------------------------
$db = new SQLite3('C:/xampp/Data/InventorySystem.db');
$sql = "SELECT ID, Item, InStock, Out_Of_Stock FROM ManagementSystem WHERE ID=:uid";
$stmt = $db->prepare($sql);
$stmt->bindParam(':uid', $_GET['uid'], SQLITE3_TEXT);
$result= $stmt->execute();
$stock = [];
while($row=$result->fetchArray(SQLITE3_NUM)){ $stock [] = $row;
}if (isset($_POST['delete'])){
$db = new SQLite3('C:/xampp/Data/InventorySystem.db');
$stmt = "DELETE FROM ManagementSystem WHERE ID = :uid";
$sql = $db->prepare($stmt);
$sql->bindParam(':uid', $_POST['uid'], SQLITE3_TEXT);
$sql->execute();
header("Location:InventorySystem.php?deleted=true");
}
?>
		<div   class="container pb-5">
			<main  role="main" class="pb-3">
				<?php error_reporting(0)?>

				<h2    style="color:white;"> <u>Delete Stock</u></h2><br>
				<h2    style="color:white;"> <u>Delete Stock for <?php echo $_GET['uid'];?></u></h2><br>
				<h4    style="color:white;"> <u>Are you sure want to delete stocks?</u></h4><br>

				<div class="row">
					<div   class="col-md-2 f" style= "background-color: #F3F3F3;">
						<label style="font-size: 20px; color:black; font-weight: bold;">Item</label>
					</div>

					<div  class="col-md-6">
						<label style="font-size: 20px; color:white;"><?php echo $stock[0][1] ?></label>
					</div>
				</div>


				<div  class="row">
					<div   class="col-md-2 f" style= "background-color: #F3F3F3;">
						<label style="font-size: 20px; color:black; font-weight: bold;">InStock</label>
					</div>
					<div class="col-md-6">
						<label style="font-size: 20px; color:white;"><?php echo  $stock[0][2] ?></label>
					</div>
				</div>

				<div class="row">
					<div class="col-md-2 f" style= "background-color: #F3F3F3;">
						<label style="font-size: 20px; color:black;font-weight: bold;">Delivered</label>
					</div>
					<div class="col-md-6">
						<label style="font-size: 20px; color:white;"><?php echo $stock[0][3] ?></label>
					</div>
				</div>

				<div class="row">
					<div class="col-5">
						<form  method="post">
							<input type="hidden" name="uid" value = "<?php echo $_GET['uid'] ?>"><br>
							<input type="submit" value="Delete" class="btn btn-danger" name="delete"><a href="../Content/InventorySystem.php" style="font-weight: bold; padding-left: 30px;">Back</a>

						</form>
					</div>
				</div>
			</main>
</div>
<?php include("Footer.php");?>
</html>