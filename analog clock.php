<html>
<head>
<script>
      var H = "......";
      var H = H.split("");
      var M = ".......";
      var M = M.split("");
      var S = "........";
      var S = S.split("");
      var Ypos = 0;
      var Xpos = 0;
      var Ybase = 8;
      var Xbase = 8;
      var dots = 12;

      function clock() {
        var time = new Date();
        var secs = time.getSeconds();
        var sec = -1.57 + (Math.PI * secs) / 30;
        var mins = time.getMinutes();
        var min = -1.57 + (Math.PI * mins) / 30;
        var hr = time.getHours();
        var hrs =
          -1.57 +
          (Math.PI * hr) / 6 +
          (Math.PI * parseInt(time.getMinutes())) / 360;

        for (i = 0; i< dots; ++i) {
document.getElementById("dig" + (i + 1)).style.top =
            0 - 15 + 75 * Math.sin(-0.49 + dots + i / 1.9).toString() + "px";
document.getElementById("dig" + (i + 1)).style.left =
            0 - 14 + 75 * Math.cos(-0.49 + dots + i / 1.9).toString() + "px";
        }
        for (i = 0; i<S.length; i++) {
document.getElementById("sec" + (i + 1)).style.top =
Ypos + i * Ybase * Math.sin(sec).toString() + "px";
document.getElementById("sec" + (i + 1)).style.left =
Xpos + i * Xbase * Math.cos(sec).toString() + "px";
        }
        for (i = 0; i<M.length; i++) {
document.getElementById("min" + (i + 1)).style.top =
Ypos + i * Ybase * Math.sin(min).toString() + "px";
document.getElementById("min" + (i + 1)).style.left =
Xpos + i * Xbase * Math.cos(min).toString() + "px";
        }
        for (i = 0; i<H.length; i++) {
document.getElementById("hour" + (i + 1)).style.top =
Ypos + i * Ybase * Math.sin(hrs).toString() + "px";
document.getElementById("hour" + (i + 1)).style.left =
Xpos + i * Xbase * Math.cos(hrs).toString() + "px";
        }
setTimeout("clock()", 50);
      }
</script>
<style type="text/css">
div.dig,
div.hour,
div.min,
div.sec {
        position: absolute;
      }
div.hour,
div.min,
div.sec {
        width: 4px;
        height: 4px;
        border-radius: 50%;
        font-size: 2px;
      }
div.dig {
        width: 30px;
        height: 30px;
        font-family: arial, verdana, sans-serif;
        font-size: 10px;
color: #000000;
        text-align: center;
      }
div.min {
        background: #0000ff;
      }
div.hour {
        background: #000000;
      }
div.sec {
        background: #ff0000;
      }

div.dig {
        font-size: 18px;
      }
div.dig span {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
.clock {
        position: absolute;
        width: 120px;
        height: 120px;
        top: 50%;
        left: 50%;
      }
.clock::after {
        content: "";
        position: inherit;
        top: -100px;
        left: -100px;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        border: 1px solid rebeccapurple;
        background-color: white;
        z-index: -1;
        box-shadow: inset 0 0 8px black;
      }
</style>
</head>
<body onload="clock()">
<div class="clock">
<div id="dig1" class="dig"><span>.</span></div>
<div id="dig2" class="dig"><span>.</span></div>
<div id="dig3" class="dig"><span>III</span></div>
<div id="dig4" class="dig"><span>.</span></div>
<div id="dig5" class="dig"><span>.</span></div>
<div id="dig6" class="dig"><span>VI</span></div>
<div id="dig7" class="dig"><span>.</span></div>
<div id="dig8" class="dig"><span>.</span></div>
<div id="dig9" class="dig"><span>IX</span></div>
<div id="dig10" class="dig"><span>.</span></div>
<div id="dig11" class="dig"><span>.</span></div>
<div id="dig12" class="dig"><span>XII</span></div>

<div id="hour1" class="hour"></div>
<div id="hour2" class="hour"></div>
<div id="hour3" class="hour"></div>
<div id="hour4" class="hour"></div>
<div id="hour5" class="hour"></div>
<div id="hour6" class="hour"></div>

<div id="min1" class="min"></div>
<div id="min2" class="min"></div>
<div id="min3" class="min"></div>
<div id="min4" class="min"></div>
<div id="min5" class="min"></div>
<div id="min6" class="min"></div>
<div id="min7" class="min"></div>

<div id="sec1" class="sec"></div>
<div id="sec2" class="sec"></div>
<div id="sec3" class="sec"></div>
<div id="sec4" class="sec"></div>
<div id="sec5" class="sec"></div>
<div id="sec6" class="sec"></div>
<div id="sec7" class="sec"></div>
<div id="sec8" class="sec"></div>
</div>
</body>
</html>
