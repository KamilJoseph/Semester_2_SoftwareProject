
<<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<head> <?php include("HeaderNav.php"); include_once("../SQL/Controller.php");?> </head> 
</head>
<body>
	<div class ="container pb-5">
		<main role  ="main" class="pb-3">
			<?php error_reporting(0)?>

			<h2 style ="color:white;"> <u>Delete User</u></h2><br>
			<h2 style ="color:white;"> <u>Delete User for <?php echo $_GET['uid'];?></u></h2><br>
			<h4 style ="color:white;"> <u>Are you sure want to delete this user?</u></h4><br>


			<div class ="row">
				<div class ="col-md-2 f" style= "background-color: #F3F3F3;">
					<label style ="font-size: 20px; color:black; font-weight: bold;">ID</label>
				</div>

				<div class ="col-md-6">
					<label style ="font-size: 20px; color:white;"><?php echo $arrayResult[0][0] ?></label>
				</div>
			</div>

			<div class ="row">
				<div class ="col-md-2 f" style= "background-color: #F3F3F3;">
					<label  style ="font-size: 20px; color:black; font-weight: bold;">Fullname</label>
				</div>

				<div class ="col-md-6">
					<label  style ="font-size: 20px; color:white;"><?php echo $arrayResult[0][1] ?></label>
				</div>
			</div>

			<div class ="row">
				<div class ="col-md-2 f" style= "background-color: #F3F3F3;">
					<label style ="font-size: 20px; color:black; font-weight: bold;">UserName</label>
				</div>
				<div class ="col-md-6">
					<label style ="font-size: 20px; color:white;"><?php echo $arrayResult[0][2] ?></label>
				</div>
			</div>

			<div class ="row">
				<div class ="col-md-2 f" style= "background-color: #F3F3F3;">
					<label  style ="font-size: 20px; color:black;font-weight: bold;">Postcode</label>
				</div>
				<div class ="col-md-6">
					<label style ="font-size: 20px; color:white;"><?php echo $arrayResult[0][3] ?></label>
				</div>
			</div>

			<div class ="row">
				<div class ="col-5">
					<form  method="post">
						<input type="hidden" name="uid" value = "<?php echo $_GET['uid'] ?>"><br>
						<input  type="submit" value="Delete" class="btn btn-danger" name="delete"><a href="ViewUsers.php" style="font-weight: bold; padding-left: 30px;">Back</a>
					</form>
				</div>
			</div>

		</main>
	</div>
</body>
<?php include("Footer.php");?>
</html>
