<html>
    <head>
    <?php require("HeaderNav.php");?>
    <?php
    include ("../SQL/Controller.php");
    
    // recieves functionvfrom Sign Up page 
    $result = $_GET['createUser']; 
    ?>
    <link rel="stylesheet" href="../CSS/site.css">

</head>

<body>
<div class="container pb-5">
        <main role="main" class="pb-3">
            <?php error_reporting(0)?>
        <h2>User Creation Result</h2><br>

        <!-- // Functions below once user created is successfull -->
        <div>
            <?php
                if($result){
                    echo "A user successfully created";
                }
                else{
                    echo "Error";
                }
            ?>
            <div><a href="SignUp.php">Back</a></div>
        </div>
</div>
</body>

<?php require("Footer.php");?>
</html>
