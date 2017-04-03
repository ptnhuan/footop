



<!DOCTYPE html>
<html>
    <header>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
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
           <img src="image/<?php echo $obj['image'] ?>" alt="" width="100" height="100"/>
       </div>

        <?php endforeach;?>
            </div>
        </div>
    </body>

</html>