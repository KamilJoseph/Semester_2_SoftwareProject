<html>
<head> 
<?php include("NavigationBar.php"); include("../SQL/Controller.php");

//----------------Collecting specific information from the database ------------------
            $db = new SQLITE3 ('C:/xampp/Data/InventorySystem.db');
            $sql= "SELECT*FROM SignUp";
            $stmt= $db ->prepare($sql);
            $result= $stmt ->execute();
            $data= [];
            while($row= $result->fetchArray()){
            $data[]=$row;
            }

            ?>
</head>
<body>
<h1 style = "text-align: center;"><b><u>Viewuser</u></b></h1>
<?php error_reporting(0)?>
<div class = "row">
            <div   class = "col">
            <table class="table table-striped table-dark" style = "position:relative; left:400px; top:120px; width:250px; border-radius: 20px;">

            <!-- Title for each row -->
            <thead class = "table-dark" >
            <th scope = "col;" style = "border-radius: 20px;">ID </th>    
            <th scope = "col" >FullName</th>
            <th scope = "col" >UserName</th>
            <th scope = "col" >Postcode</th>  
            <th scope = "col" >Update</th>
            <th scope = "col" style = "border-radius: 10px;">Delete</th>               
            </thead>

            <!-- The code below loops untile it finds the data from the list below provided from SQL statement -->
            <?php for ($i=0; $i<count($data); $i++): ?>
            <tr>
            <td><?php echo $data[$i] ['ID'];        ?></td>
            <td><?php echo $data[$i] ['FullName'];  ?></td>
            <td><?php echo $data[$i] ['UserName'];  ?></td>
            <td><?php echo $data[$i] ['Postcode'];  ?></td>
            <td><a href="updateUser.php?uid=<?php echo $data[$i]['ID']; ?>">Update</a></td>
            <td><a href="deleteUser.php?uid=<?php echo $data[$i]['ID']; ?>">Delete</a></td>
            </tr>
            <?php endfor;  ?>
            </table>    
            
        </div>
    </div>
</body>
<?php require("Footer.php");?>
</html>
