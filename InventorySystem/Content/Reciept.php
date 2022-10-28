<!DOCTYPE html>
<html>
<head>
    <?php 
    require("HeaderNav.php"); 
    include("../SQL/Payment.php");
    $result = $_GET['reciept'];

    $db = new SQLITE3 ('C:/xampp/Data/InventorySystem.db');
    $sql= "SELECT*FROM Payment";
    $stmt= $db ->prepare($sql);
    $answer= $stmt ->execute();
    $data= [];
    while($row= $answer->fetchArray()){
        $data[]=$row;
    }
?>
    
</head>

<body>
    <div class="container bgColor">
        <main role="main" class="pb-3">
            <div style= "color:white; font-size:30px;" ><b>
                <?php error_reporting(0)?>

                <?php
                if($result){echo "Your Payment is successfully created";
                }else{echo "Error";
                }?><br>

                <div style = "position:relative; top:10px;"><a href="BuyProduct.php">Back</a></div>
                      </b>
                </div>
                <br>

                <div class = "row">

                    <div class = "col">
                        <table class="table table-striped table-dark" style = "position:relative; left:400px; top:120px; width:250px; border-radius: 20px;">

                            <!-- Title for each row -->

                            <thead class = "table-dark" >
                                <th scope = "col;" style = "border-radius: 20px;">ID </th>    
                                <th scope = "col" >Item</th>
                                <th scope = "col" >Amount</th>
                                <th scope = "col" style = "border-radius: 10px;">Delete</th>               
                            </thead>

                            <!-- The code below loops untile it finds the data from the list below provided from SQL statement -->
                            <?php for ($i=0; $i<count($data); $i++): ?>

                                <tr>
                                    <td><?php echo $data[$i] ['ID'];?></td>
                                    <td><?php echo $data[$i] ['Item'];?></td>
                                    <td><?php echo $data[$i] ['Amount'];?></td>
                                    <td><a href="Cancel.php?uid=<?php echo $data[$i]['ID'];?>">Delete</a></td>
                                </tr>
                            <?php endfor;?>

                        </table>
                    </div>
                </div>
            </main>
        </div>
    </body>
<?php require("Footer.php");?>
</html>