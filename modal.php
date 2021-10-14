 
  


    <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


  
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">upload file
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Servicing Report Upload</h4>
        </div>
       

        <form action="simple-upload.php?id=<?php echo $Register_LessonID; ?>" method="post" enctype="multipart/form-data">
        
      <input class="modal-body" type="file" name="file-upload" id="file-upload">


      <div class="modal-footer">
          <button type="submit" name="submit" class="btn btn-default" data-dismiss="modal">upload</button>
        </div>

      
    </form>
        
      </div>
      
    </div>
  </div>
  


</body>
</html>
