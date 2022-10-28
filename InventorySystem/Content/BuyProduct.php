<html>
<head>
	<?php require("HeaderNav.php"); 
		  require("../SQL/Payment.php"); 

	?>
		
	</head>

	<body>
		<div class="container bgColor">
			<main role="main" class="pb-3">
				<?php error_reporting(0)?>
				<div style = "position:relative; top:55px; background-color: #F3F3F3; width:340px; height:400px; border-radius:10px;">

					<img  src   ="../img/materials.jpg"  width="300" height="245" style = "position:relative; left:20px; top:17px; padding: 10px; background-color:black; border-radius:10px">
					<p style="text-align:center; position: relative; top:20px;">This is £6.99 sale</p>
				</div>

				<div class = "row; col-6;"> 

					<section style   = " position:relative; left:545px; bottom:350px; background-color:#F3F3F3; height:650px; width:450px; border-radius:20px; text-align: Center; box-shadow:0 18px 16px 0 rgba(1,1,1,0.2), 0 10px 20px 0 rgba(1,1,1,2);">

						<form  method  = "post"><br>

							<div  class="form-group col-md-6" style = "position:relative; left:100px;">
								<input class="form-control" type="text" placeholder= "Item" name ="Item">
								<span  class="text-danger">  <?php echo $Item; ?></span>
							</div><br>

							<div class="form-group col-md-6" style = "position:relative; left:100px;">
								<input class="form-control" type="text" placeholder= "Amount" name ="Amount">
								<span  class="text-danger">  <?php echo $Amount; ?></span>
							</div><br>

							<div   class="form-group col-md-6"  style = "position:relative; left:100px;">
								<input class="form-control" type="text" placeholder= "Card_Number" name ="Card_Number">
								<span  class="text-danger">  <?php echo $CardNumber; ?></span>
							</div><br>

							<div   class="form-group col-md-6" style = "position:relative; left:100px;">
								<input class="form-control" type="text" placeholder= "Sort_Code" name="Sort_Code">
								<span  class="text-danger">  <?php echo $SortCode; ?></span>
							</div><br>

							<div   class="form-group col-md-6" style = "position:relative; left:100px;">
								<input class="form-control" type="text" placeholder= "Account_Number" name="Account_Number">
								<span  class="text-danger">  <?php echo $AccountNumber; ?></span>
							</div><br>

							<div   class="form-group col-md-6" style = "position:relative; left:100px;">
								<input class="form-control" type="text" placeholder= "Expiry_Date" name="Expiry_Date">
								<span  class="text-danger">  <?php echo $ExpiryDate; ?></span>
							</div><br>

							<div   class="form-group col-md-6" style = "position:relative; left:100px;">
								<input class="form-control" type="text" placeholder= "CVC_number" name="CVC_number">
								<span  class="text-danger">  <?php echo $CVCnumber; ?></span>
							</div><br>

							<div class="form-group col-md-4" style = "position:relative; left:100px;">
								<input class="btn btn-primary" type="submit" value="Create User" name ="submit">
							</div><br>
						</form>
					</section>
				</main>
			</div>
</body>
<?php require("Footer.php");?>
</html>
