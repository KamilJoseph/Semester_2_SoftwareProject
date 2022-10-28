<!DOCTYPE html>
<html>
<head>
    <?php require("HeaderNav.php");?> 
    <link rel="stylesheet" src="../CSS/site.css">
</head>
<body>
    <div class="container bgColor">
        <main role="main" class="pb-3">
            <?php error_reporting(0)?>

            <h2 style="font-family:'Courier New'; color:white;"><u> Staff Login </u></h2><br>

            <section style= "position:relative; left:370px; top:200px; background-color: #F3F3F3; width:450px;  height:350px; border-radius:10px;">

                <a class="nav-link text-dark" href="http://localhost/InventorySystem/Content/Login.php"style="font-family:'Courier New'; color:white; position:relative; left:80px;" ><u>Admin Login/</u></a>

                <a class="nav-link text-dark" href="http://localhost/InventorySystem/Content/ManagerLogin.php"style="font-family:'Courier New'; color:white; position:relative; left:200px; bottom:40px;"><u>Manager Login</u></a>

                <form method="post"><br>
                    <input style= "position:relative; left:100px; top: 20px; width:250px;" type="text" name="UID" placeholder="UserName"><br></br>

                    <input style="position:relative; left:100px; top:20px; width:250px;" type="text" name="pwd" placeholder="Password"><br></br>

                    <div style="position:relative; top:15px; left:85px;"class="form-group col-md-4">

                        <input class= "btn btn-primary" type="submit" value="submit" name ="submit">
                    </div>

                    <?php

                    if(isset($_POST['submit'])){
                        $db= new SQLite3("C:/xampp/Data/InventorySystem.db"); 
                        $sql= "SELECT UserName, Password FROM Users WHERE UserName=:UID AND Password=:pwd ";
                        $stmt= $db->prepare($sql);
                        $stmt->bindParam(':UID',$_POST['UID'],SQLITE3_TEXT);
                        $stmt->bindParam(':pwd',$_POST['pwd'], SQLITE3_TEXT);
                        $result=$stmt->execute(); 
                        $data= [];
                        while($row= $result->fetchArray()){ 
                            $data[]=$row; } 

                            if($data[0][0]==$_POST['UID'] && $data[0][1] == $_POST['pwd']){
                                header("Location:Manager.php"); } else{echo "Incorrect Login "; }
                            }
                            ?>
                </form>
            </section>
        </main>
    </div>
</body>
<?php require("Footer.php");?>
</html>