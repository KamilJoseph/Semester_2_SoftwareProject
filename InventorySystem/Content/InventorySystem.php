<DOCTYPE html>
  <html>
  <head>

    <?php require("HeaderNav.php");  include("../SQL/InventoryForm.php");?>
    <link rel="stylesheet" href="../CSS/site.css"></link>

    <?php 
    $db = new SQLITE3 ('C:/xampp/Data/InventorySystem.db');
    $sql= "SELECT*FROM ManagementSystem";
    $stmt= $db ->prepare($sql);
    $result= $stmt ->execute();
    $stock= [];

    while($row= $result->fetchArray()){
      $stock[]=$row;
    }
    ?>
  </head>

  <body>
    <div class="container bgColor ">
      <main role="main" class="pb-3 ">
        <?php error_reporting(0)?>
        <!--------------------- // Creates register form below. -------------------->

        <div class  = "row; col-6;"> 
          <section style = "background-color:#F3F3F3; height:470px; width:450px; border-radius:20px; text-align: Center; float: center;">

            <form  method = "post"> <br>
              <div class="form-group col-md-6">
                <input class="form-control" type="text"  placeholder="Item" name="Item">
                <span class="text-danger"><?php echo $Item; ?></span>
              </div><br>

              <div class="form-group col-md-6">
                <input class="form-control" type="text" placeholder="InStock" name="InStock">
                <span class="text-danger"><?php echo $InStock ; ?></span>
              </div><br>

              <div class="form-group col-md-6">
                <input class="form-control" type="text"  placeholder="Out_Of_Stock"name="Out_Of_Stock">
                <span  class="text-danger"><?php echo $Out_Of_Stock ; ?></span>
              </div><br>

              <div  class="form-group col-md-6">
                <input class="form-control" type="text"  placeholder="Delivered" name="Delivered">
                <span  class="text-danger"><?php echo $Delivered ; ?></span>
              </div><br>

              <div class="form-group col-md-4">
                <input class="btn btn-primary" type="submit" value="AddStocks" name ="submit">
              </div>
            </form>
          </section>

          <!-----------------// View Inventory System ------------->

          <div class = "row">
            <div  class = "col">
              <table class="table table-striped table-dark" style = "position:relative; left:500px; bottom:468px; width:250px; border-radius: 20px;">

                <!------------------//Title for each row------------------------>

                <thead class = "table-dark" >   
                  <th scope = "col" >Item</th>
                  <th scope = "col" >Instock</th>
                  <th scope = "col" >OutofStock</th>
                  <th scope = "col" >Delivered</th>    
                  <th scope = "col" >Update</th>
                  <th scope = "col" style = "border-radius: 10px;">Delete</th>               
                </thead>

                <!-- The code below loops untile it finds the data from the list below provided from SQL statement -->
                <?php for ($i=0; $i<count($stock); $i++): ?>
                  <tr>
                    <td><?php echo $stock[$i] ['Item'];  ?></td>
                    <td><?php echo $stock[$i] ['InStock'];  ?></td>
                    <td><?php echo $stock[$i] ['Out_Of_Stock'];  ?></td>
                    <td><?php echo $stock[$i] ['Delivered'];  ?></td>
                    <td><a href="UpdateStock.php?uid=<?php echo $stock[$i]['ID']; ?>">Update</a></td>
                    <td><a href="DeleteStock.php?uid=<?php echo $stock[$i]['ID']; ?>">Delete</a></td>
                  </tr>
                <?php endfor; ?>
              </table>
            </main>
          </div>
        </body>
 <?php require("Footer.php");?>
</html>