<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link type="text/css" rel="stylesheet" href="style.css">
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    />
    <meta
      http-equiv="X-UA-Compatible"
      content="ie=edge"
    />
    
    
    <title>
      upload file
    </title>
    <center>
    <h1>WELLOCOME TO UPLOAD FILE</h1></center>
  </head>
  <body>
    <?php
    //$dbname= "tg";
    $conn = mysqli_connect("localhost", "root", "" , "tg");
    if (!$conn)
    {
    die ("could not connect: " . mysql_error());
    }
    $sql_type = "SELECT * FROM  type";
    $sql_price = "SELECT * FROM  price";
    // $manufacture= mysqli_query ($conn, $sql_manufacturer) ; 
    // $model= mysqli_query ($conn, $sql_model ) ; 
    $type= mysqli_query ($conn, $sql_type) ; 
    // $year= mysqli_query ($conn, $sql_year) ; 
    // $stock= mysqli_query ($conn, $sql_stock );
    $price= mysqli_query ($conn, $sql_price );
    
    ?> 
    
    
    <div class="form">
      <form
        action="upload_action.php"
        enctype="multipart/form-data"
        method="POST"
        target="_blank"
      >
        <div
          class="form-group"
        >
          <!-- <input
            type="text"
            name="id"
            placeholder="id"
          /> -->
        </div>
        <div
          class="form-group"
        >
          <!-- <input
            type="type"
            name="type"
            placeholder="type"
          /> -->
           <select data-default-text="type"  name="type_id" >
                    <?php
                       foreach ($type as $t)
                          {
                           ?>
                          <option value=<?php echo $t['id']; ?>><?php echo $t['name']; ?></option>
   
                          <?php
                           }
                           ?>
                      
  
                    </select>
        </div>
        <!-- <input type="price" 
        name="price"
        placeholder="price"
        
      /> -->
      <select data-default-text="Price" name="price_id">
                    <?php
                       foreach ($price as $p)
                          {
                           ?>
                          <option value=<?php echo $p['id']; ?>><?php echo $p['name']; ?></option>
   
                          <?php
                           }
                           ?>
                      
  
                    </select>
    </div>
      <center>
    <input
          type="file"
          name="file"
        />
        <button type="submit">
          Send
        </center>
          <center><a href="car_list.php" style="text-decoration: none;"></a></center>

        </button>
      </form>
    </div>
  </body>
</html>
