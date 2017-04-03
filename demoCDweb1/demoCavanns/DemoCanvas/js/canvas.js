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