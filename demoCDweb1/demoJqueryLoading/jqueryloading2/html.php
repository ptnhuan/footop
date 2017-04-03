



<!DOCTYPE html>
<html>
    <header>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/jquery.lazyload.min.js" type="text/javascript"></script>
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
           
           <img data-original="image/<?php echo $obj['image'] ?>" alt="" width="500" height="500" class = "lazy"/>
          
       </div>

        <?php endforeach;?>
            </div>
        </div>
        <script type="text/javascript">

$(function() {
    $("img.lazy").lazyload();
});


 </script>
 
<!--		<script type="text/javascript">

$(function() {
    $("img.lazy").lazyload({
        event : "sporty"
    });
});

$(window).bind("load", function() {
    var timeout = setTimeout(function() {
        $("img.lazy").trigger("sporty")
    }, 5000);
});
 </script>-->
    </body>

</html>