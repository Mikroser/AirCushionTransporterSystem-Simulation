<center>
<canvas id="myCanvas" width="800" height="600"
style="border:1px solid #c3c3c3;">
Your browser does not support the canvas element.
</canvas>

<br>

<button>Start</button>
<button>Stop</button>
<div>On Metal: </div>
<div>Off Metal: </div>
</center>

<script>
//how to spin an object on circular move
//http://jsfiddle.net/Cu6Zv/1/
var canvas = document.getElementById("myCanvas");
//lines
/*
var line1 = canvas.getContext("2d");
line1.fillStyle = "#FF0000";
line1.fillRect(0,0,800,50);
var line2 = canvas.getContext("2d");
line2.fillStyle = "#FF0000";
line2.fillRect(0,70,800,50);
var line3 = canvas.getContext("2d");
line3.fillStyle = "#FF0000";
line3.fillRect(0,140,800,50);
var line4 = canvas.getContext("2d");
line4.fillStyle = "#FF0000";
line4.fillRect(0,210,800,50);
var line5 = canvas.getContext("2d");
line5.fillStyle = "#FF0000";
line5.fillRect(0,280,800,50);
var line6 = canvas.getContext("2d");
line6.fillStyle = "#FF0000";
line6.fillRect(0,350,800,50);
var line7 = canvas.getContext("2d");
line7.fillStyle = "#FF0000";
line7.fillRect(0,420,800,50);
var line8 = canvas.getContext("2d");
line8.fillStyle = "#FF0000";
line8.fillRect(0,490,800,50);
var line9 = canvas.getContext("2d");
line9.fillStyle = "#FF0000";
line9.fillRect(0,560,800,50);

//circles 1
var circle1 = canvas.getContext("2d");
circle1.beginPath();
circle1.arc(400, 300, 15, 0, 2 * Math.PI);
circle1.stroke();
circle1.fillStyle = "green";
circle1.fill();
//circles 2
var circle2_1 = canvas.getContext("2d");
circle2_1.beginPath();
circle2_1.arc(400, 200, 15, 0, 2 * Math.PI);
circle2_1.stroke();
circle2_1.fillStyle = "#FFFF00";
circle2_1.fill();
var circle2_2 = canvas.getContext("2d");
circle2_2.beginPath();
circle2_2.arc(400, 400, 15, 0, 2 * Math.PI);
circle2_2.stroke();
circle2_2.fillStyle = "#FFFF00";
circle2_2.fill();
var circle2_3 = canvas.getContext("2d");
circle2_3.beginPath();
circle2_3.arc(300, 300, 15, 0, 2 * Math.PI);
circle2_3.stroke();
circle2_3.fillStyle = "#FFFF00";
circle2_3.fill();
var circle2_4 = canvas.getContext("2d");
circle2_4.beginPath();
circle2_4.arc(500, 300, 15, 0, 2 * Math.PI);
circle2_4.stroke();
circle2_4.fillStyle = "#FFFF00";
circle2_4.fill();

//circles 3
var circle3_1 = canvas.getContext("2d");
circle3_1.beginPath();
circle3_1.arc(300, 200, 15, 0, 2 * Math.PI);
circle3_1.stroke();
circle3_1.fillStyle = "blue";
circle3_1.fill();
var circle3_2 = canvas.getContext("2d");
circle3_2.beginPath();
circle3_2.arc(500, 400, 15, 0, 2 * Math.PI);
circle3_2.stroke();
circle3_2.fillStyle = "blue";
circle3_2.fill();
var circle3_3 = canvas.getContext("2d");
circle3_3.beginPath();
circle3_3.arc(300, 400, 15, 0, 2 * Math.PI);
circle3_3.stroke();
circle3_3.fillStyle = "blue";
circle3_3.fill();
var circle3_4 = canvas.getContext("2d");
circle3_4.beginPath();
circle3_4.arc(500, 200, 15, 0, 2 * Math.PI);
circle3_4.stroke();
circle3_4.fillStyle = "blue";
circle3_4.fill();

//circles 4
var circle4_1 = canvas.getContext("2d");
circle4_1.beginPath();
circle4_1.arc(400, 100, 15, 0, 2 * Math.PI);
circle4_1.stroke();
circle4_1.fillStyle = "grey";
circle4_1.fill();
var circle4_2 = canvas.getContext("2d");
circle4_2.beginPath();
circle4_2.arc(400, 500, 15, 0, 2 * Math.PI);
circle4_2.stroke();
circle4_2.fillStyle = "grey";
circle4_2.fill();
var circle4_3 = canvas.getContext("2d");
circle4_3.beginPath();
circle4_3.arc(200, 300, 15, 0, 2 * Math.PI);
circle4_3.stroke();
circle4_3.fillStyle = "grey";
circle4_3.fill();
var circle4_4 = canvas.getContext("2d");
circle4_4.beginPath();
circle4_4.arc(600, 300, 15, 0, 2 * Math.PI);
circle4_4.stroke();
circle4_4.fillStyle = "grey";
circle4_4.fill();

//circles 5
var circle5_1 = canvas.getContext("2d");
circle5_1.beginPath();
circle5_1.arc(200, 100, 15, 0, 2 * Math.PI);
circle5_1.stroke();
circle5_1.fillStyle = "purple";
circle5_1.fill();
var circle5_2 = canvas.getContext("2d");
circle5_2.beginPath();
circle5_2.arc(600, 500, 15, 0, 2 * Math.PI);
circle5_2.stroke();
circle5_2.fillStyle = "purple";
circle5_2.fill();
var circle5_3 = canvas.getContext("2d");
circle5_3.beginPath();
circle5_3.arc(200, 500, 15, 0, 2 * Math.PI);
circle5_3.stroke();
circle5_3.fillStyle = "purple";
circle5_3.fill();
var circle5_4 = canvas.getContext("2d");
circle5_4.beginPath();
circle5_4.arc(600, 100, 15, 0, 2 * Math.PI);
circle5_4.stroke();
circle5_4.fillStyle = "purple";
circle5_4.fill();
*/

//spinning
var circle2_1 = canvas.getContext('2d');
//var w = canvas.width;
//var h = canvas.height;
var dd = 7;
var angle = 0;
var cx = 250;
var cy = 175;
var radius = 150;

circle2_1.fillStyle = "blue";
//ctx.strokeStyle = "rgba(0,0,0,0.7)";

function draw() {
    circle2_1.clearRect(0, 0, 800, 600);
    //ctx.save();
    //ctx.beginPath();
    //ctx.beginPath();
    circle2_1.arc(x / 2, y / 2,15, 0, 2 * Math.PI)
    circle2_1.fill();
    //ctx.stroke();
    //ctx.restore();
}

var fps = 60;

window.requestAnimFrame = (function (callback) {
    return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function (callback) {
        window.setTimeout(callback, 1000 / fps);
    };
})();

function animate() {
    setTimeout(function () {
        requestAnimFrame(animate);
        // increase the angle of rotation
        angle += Math.acos(1-Math.pow(dd/radius,2)/2);
        // calculate the new ball.x / ball.y
        var newX = cx + radius * Math.cos(angle);
        var newY = cy + radius * Math.sin(angle);
        // draw

        //lines
        var line1 = canvas.getContext("2d");
        line1.fillStyle = "#aaa9ad";
        line1.fillRect(0,0,800,50);
        var line2 = canvas.getContext("2d");
        line2.fillStyle = "#aaa9ad";
        line2.fillRect(0,70,800,50);
        var line3 = canvas.getContext("2d");
        line3.fillStyle = "#aaa9ad";
        line3.fillRect(0,140,800,50);
        var line4 = canvas.getContext("2d");
        line4.fillStyle = "#aaa9ad";
        line4.fillRect(0,210,800,50);
        var line5 = canvas.getContext("2d");
        line5.fillStyle = "#aaa9ad";
        line5.fillRect(0,280,800,50);
        var line6 = canvas.getContext("2d");
        line6.fillStyle = "#aaa9ad";
        line6.fillRect(0,350,800,50);
        var line7 = canvas.getContext("2d");
        line7.fillStyle = "#aaa9ad";
        line7.fillRect(0,420,800,50);
        var line8 = canvas.getContext("2d");
        line8.fillStyle = "#aaa9ad";
        line8.fillRect(0,490,800,50);
        var line9 = canvas.getContext("2d");
        line9.fillStyle = "#aaa9ad";
        line9.fillRect(0,560,800,50);

        //circles 1
        var circle1 = canvas.getContext("2d");
        circle1.beginPath();
        circle1.arc(400, 305, 15, 0, 2 * Math.PI);
        circle1.stroke();
        circle1.fillStyle = "green";
        circle1.fill();


    }, 1000 / fps);
}
animate();
draw();
</script>