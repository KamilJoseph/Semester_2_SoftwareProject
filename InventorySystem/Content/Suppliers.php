<html>
<head>
<?php include("HeaderNav.php");
      require("../SQL/Suppliers.php");

$db       = new SQLITE3 ('C:/xampp/Data/InventorySystem.db'); 
$sql      = "SELECT*FROM Suppliers";
$stmt     = $db ->prepare($sql);
$result   = $stmt ->execute();
$Suppliers= [];
while($row= $result->fetchArray()){$Suppliers[]=$row; }

?>  
</head>
<body>

<div class="container bgColor">
<main role="main" class="pb-3">
    <?php error_reporting(0)?>
<section style = "background-color:#F3F3F3; height:470px; width:750px; border-radius:20px; text-align: Center; position:relative; left:155px;">
	
<h2>Suppliers</h2>

<form  method = "post"><br>

<div   class  ="form-group col-md-6">
<input class  ="form-control" type="text"placeholder="Suppliers_Name" name="Suppliers_Name">
<span  class  ="text-danger"><?php echo  $errorSN; // Error Messages ?></span>
</div><br>

<div   class  ="form-group col-md-6">
<input class  ="form-control" type="text"placeholder="Cost"  name="Cost">
<span  class  ="text-danger"><?php echo  $errorCost; ?></span>
</div><br>

<div   class  ="form-group col-md-6">
<input class  ="form-control" type="text"placeholder="Item"  name="Item">
<span  class  ="text-danger"><?php echo  $errorItem; ?></span>
</div><br>

<div   class  ="form-group col-md-6">
<input class  ="form-control" type="text" placeholder="Damaged_Item"  name="Damaged_Item">
<span  class  ="text-danger"><?php echo   $errorDT ?></span>
</div><br>

<div   class  ="form-group col-md-6">
<input class  ="form-control" type="text" placeholder="Amount"  name="Amount">
<span  class  ="text-danger"><?php echo  $errorAmount ?></span>
</div><br>

<div   class  ="form-group col-md-4" style = "position:relative; left:270px; bottom:79px;">
<input class  ="btn btn-primary" type="submit" value="logs" name ="submit">
</div>
</form><br>

<!----------------------------------------------// View Log System ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

</section>

<div   class = "row">
<div   class = "col">
<table class="table table-striped table-dark" style = "position:relative; left:400px; bottom:290px; width:250px; border-radius: 10px;">
    
<!--------------------------------------------//Title for each row--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<table class="table table-striped table-dark" style = "width:500px; position:relative; left:200px; border-radius:20px;">
<thead class = "table-dark">   
<th scope = "col" >ID</th>
<th scope = "col" >Suppliers</th>
<th scope = "col" >Cost</th>
<th scope = "col" >Item</th>
<th scope = "col" >Damaged Amount</th>
<th scope = "col" >Amount</th>                  
</thead>

<?php for ($i=0; $i<count($Suppliers); $i++): ?>
 <!--------------------------------------------//The code below loops untile it finds the data from the list below provided from SQL statement-------------------------------------------------------------------------------------------------------->

<tr>
<td><?php echo $Suppliers[$i] ['ID'];              ?></td>
<td><?php echo $Suppliers[$i] ['Suppliers_Name'];  ?></td>
<td><?php echo $Suppliers[$i] ['Cost'];              ?></td>
<td><?php echo $Suppliers[$i] ['Item'];              ?></td>
<td><?php echo $Suppliers[$i] ['Damaged_Item'];    ?></td>
<td><?php echo $Suppliers[$i] ['Amount'];          ?></td>
</tr>

<?php endfor; ?>
<div style= "position:relative; left:600px; bottom:100px;">
<?php
                if($result){
                    echo "A user successfully created";
                }
                else{
                    echo "Error";
                }
            ?>
</div>
</table>


</main>
</div>

</body>
<?php require("Footer.php");?>
</html>

