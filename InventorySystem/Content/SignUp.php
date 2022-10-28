<!DOCTYPE html>
<html>
<head>
	<?php require("HeaderNav.php"); 
				include("../SQL/Controller.php");
			?> 
			<link rel="stylesheet" src="../CSS/site.css">
		</head>

		<body>
			<div class= "container bgColor">
				<main role="main" class="pb-3">
					<?php error_reporting(0)?>
					<h2 style= "color:white;"><u>Welcome new user</u></h2>

					<section style="position:relative; left:650px; background-color: #F3F3F3; width:450px;  height:300px; border-radius:10px; box-shadow:0 18px 16px 0 rgba(1,1,1,0.2), 0 10px 20px 0 rgba(1,1,1,2);">

						<form method= "post"><br>
							<input style= "position:relative; left:100px; top: 20px; width:250px;" type="text" name="UID" placeholder="UserName"><br>

							<input style= "position:relative; left:100px; top:20px; width:250px;"type="text" name="pwd" placeholder="Password"><br></br>

							<div style= "position:relative; top:15px; left:85px;"class="form-group col-md-4">
								<input class= "btn btn-primary" type="submit" value="submit" name ="submit">
							</div>

							<?php
							if(isset($_POST['submit'])){
								$db= new SQLite3("C:/xampp/Data/InventorySystem.db"); 
                $sql= "SELECT UserName, Password FROM SignUp WHERE UserName=:UID AND Password=:pwd ";

                $stmt= $db->prepare($sql);
                $stmt->bindParam(':UID',  $_POST['UID'],  SQLITE3_TEXT);
                $stmt->bindParam(':pwd',  $_POST['pwd'],  SQLITE3_TEXT);
                $result=$stmt->execute(); 
                $data= [];
                while($row= $result->fetchArray()){
                	$data[]=$row;
                        } 
                        if($data[0][0]==$_POST['UID'] && $data[0][1] == $_POST['pwd']){

                        	header("Location:ViewProducts.php");
                        }else{
                        	echo "Incorrect Login ";
                        }
                      }
                      ?>
            </form>
          </section>

          <!--------------------------// Sign Up as new User--------->

          <div class= "row; col-6;"> 

          	<section style = " position:relative; bottom:300px; background-color:#F3F3F3; height:600px; width:450px; border-radius:20px; text-align: Center; box-shadow:0 18px 16px 0 rgba(1,1,1,0.2), 0 10px 20px 0 rgba(1,1,1,2);">

          		<form method  = "post"><br>

          			<div class="form-group col-md-6" style = "position:relative; left:100px;">
          				<input class="form-control" type="text" placeholder= "FullName" name ="FullName">
          				<span class="text-danger"><?php echo $errorfname; ?></span>
          			</div><br>

          			<div class="form-group col-md-6" style = "position:relative; left:100px;">
          				<input class="form-control" type="text" placeholder= "UserName" name="UserName">
          				<span class="text-danger"><?php echo $erroruname; ?></span>
          			</div><br>

          			<div class="form-group col-md-6" style = "position:relative; left:100px;">
          				<input class="form-control" type="text" placeholder= "Password" name="Password">
          				<span class="text-danger"><?php echo $errorpwd; ?></span>
          			</div><br>

          			<div  class="form-group col-md-6" style = "position:relative; left:100px;">
          				<input class="form-control" type="text" placeholder= "ConfirmPassword" name="ConfirmPassword">
          				<span class="text-danger"><?php echo $errorcpd; ?></span>
          			</div><br>

          			<div class="form-group col-md-6" style = "position:relative; left:100px;">
          				<input class="form-control" type="text" placeholder= "Postcode" name="Postcode">
          				<span class="text-danger"> <?php echo $errorpostcode; ?></span>
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