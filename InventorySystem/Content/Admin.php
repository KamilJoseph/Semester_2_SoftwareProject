<html>

<head> 

    <?php include("NavigationBar.php"); require("../SQL/Logs.php")?>

    <?php  $db = new SQLITE3 ('C:/xampp/Data/InventorySystem.db'); 

    $sql= "SELECT*FROM Logs";
    $stmt= $db ->prepare($sql);
    $result= $stmt ->execute();
    $log= [];
    while($row= $result->fetchArray()){$log[]=$row; }?>
        
    </head>
    <body>

        <div  class ="container bgColor">
            <main role  ="main" class="pb-3">
                <?php error_reporting(0)?>
                <!---------------------------------------------//Boxes for Style------->
                <h1 style  = "text-align:center; color:white;"><b><u>Welcome Admin</u></b></h1>

                <div  style  = "position:relative; left:160px;  background-color: #F3F3F3; width:343px; height:100px; border-radius:10px;">

                    <a style  = "position:relative; left:110px; color:black; font-size:25px;" href="http://localhost/InventorySystem/Content/ViewUsers.php"><b>ViewUsers</b></a>
                </div>

                <div  style  = "position:relative; left:570px; bottom:100px; background-color: #F3F3F3; width:330px; height:100px; border-radius:10px;">

                    <a style  = "text-align:center;  color:black; position:relative;left:55px; font-size:23px;" href="http://localhost/InventorySystem/Content/InventorySystemLogin.php"><b>InventorySystem Login</b></a>

                    <p style  = "position:relative; left:10px; bottom:10px;"><u>Password: 1234</u></p>
                </div>

                <!-------------------------------//Form to Log the use of Inventory System----------------->

                <section style = "background-color:#F3F3F3; height:470px; width:600px; border-radius:20px; text-align: Center; position:relative; left:155px;">

                    <h2>Inventory System Used</h2>

                    <form  method = "post"><br>

                        <div   class  ="form-group col-md-6">
                            <input class  ="form-control" type="text"placeholder="Week" name="Week">
                            <span  class  ="text-danger"><?php echo  $Week; // Error Messages ?></span>
                        </div><br>

                        <div   class  ="form-group col-md-6">
                            <input class  ="form-control" type="text"placeholder="Date"  name="Date">
                            <span  class  ="text-danger"><?php echo  $Date ; ?></span>
                        </div><br>

                        <div   class  ="form-group col-md-6">
                            <input class  ="form-control" type="text" placeholder="Month"  name="Month">
                            <span  class  ="text-danger"><?php echo   $Month; ?></span>
                        </div><br>

                        <div   class  ="form-group col-md-4">
                            <input class  ="btn btn-primary" type="submit" value="logs" name ="submit">
                        </div>
                    </form><br>

                                <!----------------------------------------------// View Log System ------------------->

                    <div   class = "row">
                        <div  class = "col">

                            <table class="table table-striped table-dark" style = "position:relative; left:700px; bottom:390px; width:250px; border-radius: 10px;">

                                <!------------//Title for each row-------------------------------------->

                                <thead class = "table-dark" >
                                    <th scope = "col" style= "border-radius: 20px;" >ID</th>
                                    <th scope = "col" >Week</th>
                                    <th scope = "col" >Date</th>
                                    <th scope = "col" style= "border-radius: 20px;" >Month</th>                  
                                </thead>

                                <!--//The code below loops untile it finds the data from the list below provided from SQL statement---------->
                                <?php for ($i=0; $i<count($log); $i++): ?>

                                    <tr>
                                        <td><?php echo $log[$i] ['ID'];  ?></td>
                                        <td><?php echo $log[$i] ['Week'];  ?></td>
                                        <td><?php echo $log[$i] ['Date'];  ?></td>
                                        <td><?php echo $log[$i] ['Month'];  ?></td>
                                        </tr>
                                    <?php endfor; ?>
                                </table>

                                <!---------// Log successful message------------------------->

                                <div style = "position:relative; left:1px;">

                                    <?php if($loggedUser){
                                        echo "A user successfully created"; 
                                    } else{echo "Error"; 
                                } ?>
                                    
                                </div>
                            </section>
                        </main>
                    </div>
    </body>
<?php require("Footer.php")?>
</html>