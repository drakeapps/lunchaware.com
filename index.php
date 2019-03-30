<html>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127053279-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127053279-1');
</script>
<title>LunchAware</title>
<style type="text/css">
html, body {
	cursor: url(https://lunchaware.com/static/boombox-cursor.png), auto;
	color: #fff;
	background-image: url(https://lunchaware.com/static/seals1.gif);
}
#body1 {
  height: 100%;
  width: 100%;
  margin: 0 auto;
  background-image: url(/static/seals1.gif);
  background-repeat: no-repeat;
  background-size: cover;
  animation-name: stretch;
  animation-duration: 10s; 
  animation-timing: cubic-bezier(1,1,.1,0); 
  animation-delay: 0;
  animation-direction: alternate;
  animation-iteration-count: infinite;
  animation-fill-mode: none;
  animation-play-state: running;
}

@keyframes stretch {
  0% {
    width: 10px;
    height: 30px;
    transform: rotate(1deg) scale(.3);
    border-radius: 100%;
  }
  100% {
    transform: rotate(-720deg) scale(1.5);
    width: 100%;
  }
}

body,
html {
  height: 100%;
  margin: 0 auto;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
}


@-webkit-keyframes rotationfirst {
    0%  {-webkit-transform: rotate(0deg);}
    100% {-webkit-transform: rotate(45deg);}   
}
* { box-sizing: border-box; }
.video-background {
  display: none;
  background-image:  url(https://lunchaware.com/static/seals1.gif);
  position: fixed;
  top: 0; right: 0; bottom: 0; left: 0;
  z-index: 0;
}
.video-foreground,
.video-background iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
}
#vidtop-content {
    top: 0;
    color: #fff;
    z-index: 1;
}
.vid-info {
    position: absolute;
    top: 0;
    right: 0;
    width: 33%;
    background: rgba(0,0,0,0.3);
    color: #fff;
    padding: 1rem;
    font-family: Avenir, Helvetica, sans-serif;
}
.vid-info h1 { font-size: 2rem; font-weight: 700; margin-top: 0; line-height: 1.2; }
.vid-info a { display: block; color: #fff; text-decoration: none; background: rgba(0,0,0,0.5); transition: .6s background; border-bottom: none; margin: 1rem auto; text-align: center; }
@media (min-aspect-ratio: 16/9) {
  .video-foreground { height: 300%; top: -100%; }
}
@media (max-aspect-ratio: 16/9) {
  .video-foreground { width: 300%; left: -100%; }
}
@media all and (max-width: 600px) {
    .vid-info { margin-top: 100vh; width: 100%; padding: .5rem; }
    .vid-info h1 { margin-bottom: .2rem; }
}
@media all and (max-width: 500px) {
.vid-info .acronym { display: none; }
}

img.thebest {
    margin: 20px;
    height: 100px;    
    -webkit-animation: rotationfirst .1s infinite linear alternate;
}

img.thesecondbest {
    margin: 20px;
    height: 100px;    
    -webkit-animation: rotationsecond .1s infinite linear alternate;
}
img.thethirdbest {
    margin: 20px;
    height: 100px;
     -webkit-animation: rotationthird .5s infinite linear alternate;
}


@-webkit-keyframes rotationfirst {
    0%  {-webkit-transform: rotate(0deg);}
    100% {-webkit-transform: rotate(45deg);}   
}

@-webkit-keyframes rotationsecond {
    0%  {-webkit-transform: rotate(0deg);}
    100% {-webkit-transform: rotate(-45deg);}   
}

@-webkit-keyframes rotationthird {
    0%  {-webkit-transform: rotate(-270deg);}
    100% {-webkit-transform: rotate(270deg);}
}

















</style>
</head>
<body id="body">
<div id="body1"></div>
<div id="vid" class="video-background">
	<div class="">
		<video loop muted autoplay poster="/static/moonwalk.gif" class="video-foreground">
			<source src="/static/seals.webm" type="video/webm">
			<source src="/static/seals.mp4" type="video/mp4">
		</video>
		<!--<iframe src="https://www.youtube.com/embed/a6GGZ68mOZA?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=a6GGZ68mOZA" frameborder="0" allowfullscreen></iframe>		
		<iframe  src="https://www.youtube.com/embed/a6GGZ68mOZA?controls=0&showinfo=0&rel=0&autoplay=1&loop=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
	</div>
</div>

<div id="vidtop-content">
<div class="vid-info">
<center>Butts</center>
<div style="text-align: center; border: 3px solid blue; box-shadow: 5px 10px #ff00ff; padding: 20px; margin: 20px;">
<marquee><blink><h2 style="color: #f143ff; box-shadow: -5px -10px #ff341f;" >Guestbook</h2></blink></marquee>
<table style="margin: auto;">
<thead>
<th>Name</th>
<th>Date</th>
</thead>
<tr>
<td>Jon</td>
<td>Wednesday</td>
</tr>
<tr>
<td>James</td>
<td>Wednesday</td>
</tr>
<tr>
<td>Jon C.</td>
<td>Thursday</td>
</tr>
<tr>
<td>Daniel B.</td>
<td>Saturday</td>
</tr>
<tr>
<td>Philip</td>
<td>Monday</td>
</tr>
<tr>
<td>Stephanie</td>
<td>Thursday</td>
</tr>
<tr>
<td>Jonathan N.</td>
<td>Thursday</td>
</tr>
<tr>
<td>Jacob</td>
<td>Buttsday</td>
</tr>
<tr>
<td>Jade</td>
<td>March, 1944</td>
</tr>
</table>
</div>
<!-- Looking at the source?  Great!  Have a damn good day -->
<br><br><br>
<center>Visitor #:<br><h1 style="color: e3b00b;"><?=rand(-100000000, 100000000)/10.0 ?></h1></center>
</div>
</div>
<div id="thebestcontainer">
    <marquee>
    <img class="thebest" src="/static/moonwalk.gif">
    <img class="thesecondbest" src="/static/moonwalk.gif">
    <img class="thethirdbest" src="/static/nyangif.gif">
    </marquee>
</div>

</div>

<!--
<audio src="/static/nyan.m4a"  autoplay loop>
</audio>

<audio src="/static/adcc.m4a" autoplay loop></audio>
<audio src="/static/adcc-2.m4a" autoplay loop></audio>
<audio src="/static/adcc-4.m4a" autoplay loop></audio>
<audio src="/static/adcc-6.m4a" autoplay loop></audio>
<audio src="/static/adcc-8.m4a" autoplay loop></audio>
-->
<audio src="/static/cowboy-hats.m4a" autoplay loop></audio>
<audio src="/static/cowboy-hats-2.m4a" autoplay loop></audio>
<audio src="/static/cowboy-hats-3.m4a" autoplay loop></audio>
<audio src="/static/cowboy-hats-4.m4a" autoplay loop></audio>
<audio src="/static/cowboy-hats-5.m4a" autoplay loop></audio>
<audio src="/static/cowboy-hats-6.m4a" autoplay loop></audio>
<audio src="/static/cowboy-hats-7.m4a" autoplay loop></audio>
<audio src="/static/cowboy-hats-8.m4a" autoplay loop></audio>
<audio src="/static/cowboy-hats-9.m4a" autoplay loop></audio>


<!--<iframe width="1" height="1" src="https://www.youtube.com/embed/pAgnJDJN4VA?start=1&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<iframe width="1" height="1" src="https://www.youtube.com/embed/pAgnJDJN4VA?start=3&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<iframe width="1" height="1" src="https://www.youtube.com/embed/pAgnJDJN4VA?start=5&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
<script>
const body = document.getElementById('vid');
let rotation = 0;
/*
(function loop() {
    var rand = Math.round(Math.random() * 100) + 25;
    setTimeout(function() {
            () => body.style.transform = `rotate(${rotation++}deg)`;
            loop();  
    }, rand);
}());
*/
setInterval(() => body.style.transform = `rotate(${rotation++}deg)`, 100);

const thebest = document.getElementById('thebestcontainer');
let rotation1 = 0;

setInterval(() => thebest.style.transform = `rotate(${rotation1++}deg)`, 25);
</script>
