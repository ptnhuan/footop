<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
      
    </head>
    <body>
     <canvas id="canvas" width="500" height="300"></canvas> 
         
     <script>
            // JavaScript Document
        var canvas = document.getElementById('canvas');
        if (canvas.getContext) { 
            var context = canvas.getContext('2d');
            var centerX = canvas.width / 2;
            var centerY = canvas.height / 2;
            var radius = 100;

            context.beginPath();
            context.arc(centerX, centerY, radius, 0, 2 * Math.PI, false);
            context.fillStyle = '#FE0000';
            context.fill();
        }
     </script>
    </body>
</html>
