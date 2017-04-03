



<!DOCTYPE html>
<html>
    <head>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <div class ="container">
            <div class="row">
        
   <?php  
           
require './image.php';
       require './custom.php';
        $width = 100;
        $heght = 100;

        $obj = gethinh();
        foreach ($obj as $obj):
           
          
            
          $tring = $obj['image'];
        $chuoi = "image/$tring ";
         $resize = new ResizeImage($chuoi);
        $resize->resizeTo($width, $heght, 'exact');
        $image_resize =  "images/resize_$tring";
          
        $resize->saveImage($image_resize);

       ?>
                <div class="col-md-6">
       <div>
           <img src="<?php echo $image_resize ?>" alt="" width="<?php $width?>" height="<?php $heght?>"/>
       </div>
                        </div>
        <?php endforeach;?>
        
        
        
        
        


       
            </div>
        </div>
    </body>

</html>