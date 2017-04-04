<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
       
         <?php
        if (!class_exists('lessc')) {
            include('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/demo.less', 'css/demo.css');
        ?>
        <link href="css/demo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="demo">
            <div class="container">
                <h1>DEMO</h1>
                <p>
                    <img src="images/images1.jpg" alt=""/>
                </p>
                 <p>
                    <img src="images/images2.jpg" alt=""/>
                </p>
                 <p>
                    <img src="images/images3.jpg" alt=""/>
                </p>
                 <p>
                    <img src="images/images4.jpg" alt=""/>
                </p>
                 <p>
                    <img src="images/images5.jpg" alt=""/>
                </p>
                 <p>
                    <img src="images/images6.jpg" alt=""/>
                </p>
                 <p>
                    <img src="images/images7.jpg" alt=""/>
                </p>
                 <p>
                    <img src="images/images8.jpg" alt=""/>
                </p>
                 <p>
                    <img src="images/images9.jpg" alt=""/>
                </p>
            </div>
        </div>
        
    </body>
</html>
