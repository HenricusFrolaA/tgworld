<!DOCTYPE html>
<html>

<head>
    <title>submit proposal</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid ">
        
        <div class="row thumbnail" >
            <div class="well well-sm col-xs-12" style="border: 1px solid gray;">
                
                    <center><h4>WELCOME MANAGER REGISTER YOUR RESTAURANT HERE</h4></center>
                
            </div>
            <div class="col-xs-12" style="border:1px solid gray; background-color: #eee;padding-top: 10px;">
               
            <form method="post" action="uploadFile.php" enctype="multipart/form-data">
           
           <div class="form-group">
                <label for="restaurantName" class="col-form-label">restaurant Name</label>
               <input type="text" name="restaurantName" class="form-control fo" id="restaurantName" placeholder="Enter name of your resstaurant" required>
           </div>
          
           <div class="form-group">
               <label for="restlocation" class=" col-form-label">Restaurant Location</label>
               <input type="text" name="restlocation" class="form-control" id="restlocation" placeholder="Enter location of your restaurant" required>
           </div>
           
            <div class="form-group">
                        <label for="file" class="col-form-label">upload photo of your restaurant</label>
                        <input type="file" class="form-control"  name="file" id="file-to-upload"/><br/>
                        <img id="preview" src="" alt="your image" heigt="200px" width="200px"/>
                    </div>
           <div class="form-group col-xs-2 col-xs-offset-9">
               <br>
               <input type="submit" name="submit" class="btn btn-primary" id="submit" onclick=" return Validate()">
           <br>
           <br>
           </div>
       </form>
                </form>
            </div>
        </div>
    </div>


<script>
var file = document.getElementById('file-to-upload'); 
var preview = document.getElementById('preview'); 
file.addEventListener('change', function() {   
  preview.src = URL.createObjectURL(this.files[0]); 
}, false); 
</script>

</body>

</html>