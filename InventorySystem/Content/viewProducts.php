<html>
<head>
	
<?php include("HeaderNav.php"); require("../SQL/CostumerFeedback.php")?>
<link rel="stylesheet" href="../CSS/site.css">

</head>
<body> 
		<div class="container: bgColor;">
		<main role="main" class="pb-3">
<?php error_reporting(0)?>
			<div   style = "position:relative; left:145px; background-color: #F3F3F3; width:340px; height:400px; border-radius:10px;">
			<img   src   ="../img/materials.jpg" 	 width="300" height="245" style = "position:relative; left:20px; top:17px; padding: 10px; background-color:black; border-radius:10px">
			<a style = "position:relative; left:145px; top:20px;" href= http://localhost/InventorySystem/Content/BuyProduct.php> Buy material</a>
			<p style="text-align:center; position: relative; top:20px;">This is £6.99 sale</p>
		  	</div>

			<div   style = "position:relative; left:555px; bottom:399px; background-color: #F3F3F3; width:340px; height:400px; border-radius:10px;">
			<img   src   ="../img/pipes.jpg" width="300" height="245" style = "position:relative; left:20px; top:17px; padding: 10px; background-color:black; border-radius:10px" >
			<p style = "position:relative; top:50px; text-align:center; ">This is £5.99 sale</p>
			</div>

			<div   style = "position:relative; left:970px; bottom:799px; background-color: #F3F3F3; width:340px; height:400px; border-radius:10px;">
			<img   src	 ="../img/buildingsupps.jpg" width="300" height="245" style = "position:relative; left:20px; top:17px; padding: 10px; background-color:black; border-radius:10px" >
			<p style = "position:relative; top:50px; text-align:center; ">This is £20.99 </p>
			</div>

			<div   style = "position:relative; left:145px; bottom:600px; background-color: #F3F3F3; width:340px; height:400px; border-radius:10px;">
			<img   src	 ="../img/Steels.webp." 	 width="300" height="245" style = "position:relative; left:20px; top:17px; padding: 10px; background-color:black; border-radius:10px" >
			<p style = "position:relative; top:50px; text-align:center; "> £15.99 </p>
			</div>

			<div   style = "position:relative; left:560px; bottom:999px; background-color: #F3F3F3; width:340px; height:400px; border-radius:10px;">
			<img   src	 ="../img/Tools.jpg" 	 	 width="300" height="245" style = "position:relative; left:20px; top:17px; padding: 10px; background-color:black; border-radius:10px">
			<p style = "position:relative; top:50px; text-align:center; "> £10</p>
		    </div>

			<div   style = "position:relative; left:970px; bottom:1402px; background-color: #F3F3F3; width:340px; height:400px; border-radius:10px;">
			<img   src	 ="../img/Concrete.jpg" 	 width="300" height="245" style = "position:relative; left:20px; top:17px; padding: 10px; background-color:black; border-radius:10px" >
			<p style = "text-align:center; position: relative; top:50px;"> £17.99</p>
			</div>


<!---------------------------------------------------//Costumer Feedback-------------------------------------------------------------------------------------------------------->
			<div   style  ="position:relative; left:1400px; bottom:2402px; background-color: #58DDE8; width:440px; height:1000px; border-radius:10px;">
			<div   style  ="width:10px;"><br></br>
            
			<p     style  ="position:relative; left:20px; font-size:20px;"><b>Costumer-feedback</b></p> <br>
            
			<div>
			<input style  ="width:100px; position:relative; left:20px;" type ="number" name="customer_satisfaction" min="0" max="10">
            <span  class="text-danger"><?php echo $errorrate; ?></span>
			</div>

			</div><br><br></br>

			<p     style  ="position:relative; left:20px; font-family:sans-serif; font-size:19px;">comments</p><br>
			
			<div>
			<textarea name="comments" id="comments" style="position:relative; left:20px; font-family:sans-serif; font-size:19px; "></textarea> <br> 
			<span  class="text-danger"><?php echo $errorcomments; ?></span>
			</div>

			<div    class ="form-group">
            <input  style = "background-color: lightyellow; position:relative; top:20px; left:20px;  " class="btn btn-main" type='submit' value='submit'  name='submit'>
            </div>
	
		</div>
	</main>	
</div>
</body>
<?php require("Footer.php");?>
</html>
