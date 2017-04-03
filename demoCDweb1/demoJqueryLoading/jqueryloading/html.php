



<!DOCTYPE html>
<html>
    <header>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
    </header>
    <body>
        
        <div class ="container">
            <div class="row">
        
   <?php  

       require './custom.php';
        $obj = gethinh();
        foreach ($obj as $obj):
       ?>
       <div class="col-md-6">
           <img src="image/<?php echo $obj['image'] ?>" alt="" width="500" height="500"/>
       </div>

        <?php endforeach;?>
            </div>
        </div>
		


    </body>

</html>