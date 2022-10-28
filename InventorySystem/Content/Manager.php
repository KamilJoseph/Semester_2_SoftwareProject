<DOCTYPE>
	<html>
	<head> 
		<?php require("NavigationBar.php");?> 
	</head>

	<body>
		<div class="container bgColor">
			<main role="main" class="pb-3">
				<?php error_reporting(0)?>
				<h1 style= "text-align:center; color:white;"><b><u>Welcome Manager</u></b></h1>

				<div style= "position:relative; left:5px; top:105px; background-color: #F3F3F3; width:330px; height:100px; border-radius:10px;">

					<a style= "position:relative; left:100px; color:black; font-size:25px;" href="http://localhost/InventorySystem/Content/Suppliers.php"><b>Suppliers</b></a>
				</div>

				<div style= "position:relative; left:400px; top:05px; background-color: #F3F3F3; width:330px; height:100px; border-radius:10px;">

					<a style= "text-align:center; position:relative; color:black; left:55px; font-size:23px;" href="http://localhost/InventorySystem/Content/InventorySystemLogin.php"><b>InventorySystem Login</b></a>
				</div>


				<div  style  = "position:relative; left:780px;  background-color: #F3F3F3; width:343px; bottom:95px; height:100px; border-radius:10px;">

                    <a style  = "position:relative; left:110px; color:black; font-size:25px;" href="http://localhost/InventorySystem/Content/ViewUsers.php"><b>ViewUsers</b></a>
                </div>

			</main>
		</div>
	</body>
<?php require("Footer.php");?>
</html>

