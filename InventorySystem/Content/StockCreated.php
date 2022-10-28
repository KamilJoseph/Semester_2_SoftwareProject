<html>
    <head>
    <?php require("HeaderNav.php");?>
    <?php
    include ("../SQL/InventoryForm.php");
    
    // recieves functionvfrom Sign Up page 
    $result = $_GET['createStocks']; 
    ?>
    <link rel="stylesheet" href="../CSS/site.css">

</head>

<body>
<div class="container pb-5">
        <main role="main" class="pb-3">
        <h2>Stock Updated</h2><br>
        <?php error_reporting(0)?>
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
            <div><a href="InventorySystem.php">Back</a></div>
        </div>
</div>
</body>

<?php require("Footer.php");?>
</html>
