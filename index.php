
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ImgReactions</title>
  <base href="/">
  <!-- Required meta tags -->
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="msapplication-tap-highlight" content="no">

  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <!-- Bootstrap CSS -->
   <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"/> -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsSKuHsTq_noUyz2qp251c7xvHtR764xY&libraries=places&language=en"></script> -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 100%;
    margin: auto;
  }
  </style>

 	<!-- Latest compiled and minified CSS -->
  <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 	<!-- <link href="assets/css/simple-sidebar.css" rel="stylesheet"> -->
  <link rel="icon" type="image/icon" href="/imagesReactions/assets/images/favicon.ico">
  <!-- <link rel="shortcut icon" type="image/ico" href="/assets/images/favicon.ico"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <style>
      /* Hide the scroll bars */
      /*body{
        background-color: rgb(0,0,0);
      }*/
/*       img {
  border-radius: 50px;
} */
     body, html {
  height: 100%;
  margin: 0;
}

.center {
  margin: auto;
  width: 100%;
/*  border: 3px solid green;
*/  padding: 10px;
}
.vertical-center {
  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
</style>
<!-- <link rel="stylesheet" href="styles.90ffe4e852f6034bc6cc.css"></head> -->
<!-- <link rel="stylesheet" href="/css/reactions.css" type="text/css"> -->
<link rel="stylesheet" type="text/css" href="/imagesReactions/css/fbreactions.css" />

<!-- <script src="assets/js/sidebar_menu.js"></script> -->
<body>
    <!-- <main class="slides"> -->
<div class="container center">
  
    <div class="vertical-center">

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false" data-pause="pause">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="/imagesReactions/assets/images/1.jpeg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>

      <div class="item">
        <img src="/imagesReactions/assets/images/2.jpeg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="/imagesReactions/assets/images/3.jpeg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>

      <div class="item">
        <img src="/imagesReactions/assets/images/4.jpeg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" onclick="ChangeGray0()">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" onclick="ChangeGray0()">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

  
  
<div style="margin-top: 50px;">
<!-- <div id="emoji--like" class="emoji  emoji--like" onclick="ChangeGray1()">
  <div class="emoji__hand">
      <div class="emoji__thumb"></div>
  </div>
</div>
 -->
<div id="emoji--love" class="emoji  emoji--love" onclick="ChangeGray2()">
  <div class="emoji__heart"></div>
  <div class="emoji__eyes"></div>
  <div class="emoji__mouth"></div>
</div>

<div id="emoji--haha" class="emoji  emoji--haha" onclick="ChangeGray3()">
  <div class="emoji__face">
    <div class="emoji__eyes"></div>
    <div class="emoji__mouth">
      <div class="emoji__tongue"></div>
    </div>
  </div>  
</div>

<div id="emoji--yay" class="emoji  emoji--yay" onclick="ChangeGray4()">
  <div class="emoji__face">
    <div class="emoji__eyebrows"></div>
    <div class="emoji__mouth"></div>
  </div>
</div>

<div id="emoji--wow" class="emoji  emoji--wow" onclick="ChangeGray5()">
  <div class="emoji__face">
    <div class="emoji__eyebrows"></div>
    <div class="emoji__eyes"></div>
    <div class="emoji__mouth"></div>
  </div>
</div>

<div id="emoji--sad" class="emoji  emoji--sad" onclick="ChangeGray6()">
  <div class="emoji__face">
    <div class="emoji__eyebrows"></div>
    <div class="emoji__eyes"></div>
    <div class="emoji__mouth"></div>
  </div>
</div>

<div id="emoji--angry" class="emoji  emoji--angry" onclick="ChangeGray7()">
  <div class="emoji__face">
    <div class="emoji__eyebrows"></div>
    <div class="emoji__eyes"></div>
    <div class="emoji__mouth"></div>
  </div>
</div>
</div>


  </div>
  </div>
  

<script>
function ChangeGray0() {
   // var element = document.getElementById("emoji--like");
   // element.classList.toggle("grayScaleStyle", false);
   var element = document.getElementById("emoji--love");
   element.classList.toggle("grayScaleStyle" , false);
   var element = document.getElementById("emoji--haha");
   element.classList.toggle("grayScaleStyle", false);
   var element = document.getElementById("emoji--yay");
   element.classList.toggle("grayScaleStyle", false);
   var element = document.getElementById("emoji--wow");
   element.classList.toggle("grayScaleStyle", false);
   var element = document.getElementById("emoji--sad");
   element.classList.toggle("grayScaleStyle", false);
   var element = document.getElementById("emoji--angry");
   element.classList.toggle("grayScaleStyle", false);




}

function ChangeGray1() {
   // var element = document.getElementById("emoji--like");
   // element.classList.toggle("grayScaleStyle", false);
   var element = document.getElementById("emoji--love");
   element.classList.toggle("grayScaleStyle" , true);
   var element = document.getElementById("emoji--haha");
   element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--yay");
   element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--wow");
   element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--sad");
   element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--angry");
   element.classList.toggle("grayScaleStyle", true);
}

function ChangeGray2() {
   // var element = document.getElementById("emoji--like");
   // element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--love");
   element.classList.toggle("grayScaleStyle" , false);
   var element = document.getElementById("emoji--haha");
   element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--yay");
   element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--wow");
   element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--sad");
   element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--angry");
   element.classList.toggle("grayScaleStyle", true);
}

function ChangeGray3() {
   // var element = document.getElementById("emoji--like");
   // element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--love");
   element.classList.toggle("grayScaleStyle" , true);
   var element = document.getElementById("emoji--haha");
   element.classList.toggle("grayScaleStyle", false);
   var element = document.getElementById("emoji--yay");
   element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--wow");
   element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--sad");
   element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--angry");
   element.classList.toggle("grayScaleStyle", true);
}

function ChangeGray4() {
   // var element = document.getElementById("emoji--like");
   // element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--love");
   element.classList.toggle("grayScaleStyle" , true);
   var element = document.getElementById("emoji--haha");
   element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--yay");
   element.classList.toggle("grayScaleStyle", false);
   var element = document.getElementById("emoji--wow");
   element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--sad");
   element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--angry");
   element.classList.toggle("grayScaleStyle", true);
}

function ChangeGray5() {
   // var element = document.getElementById("emoji--like");
   // element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--love");
   element.classList.toggle("grayScaleStyle" , true);
   var element = document.getElementById("emoji--haha");
   element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--yay");
   element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--wow");
   element.classList.toggle("grayScaleStyle", false);
   var element = document.getElementById("emoji--sad");
   element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--angry");
   element.classList.toggle("grayScaleStyle", true);
}

function ChangeGray6() {
   // var element = document.getElementById("emoji--like");
   // element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--love");
   element.classList.toggle("grayScaleStyle" , true);
   var element = document.getElementById("emoji--haha");
   element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--yay");
   element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--wow");
   element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--sad");
   element.classList.toggle("grayScaleStyle", false);
   var element = document.getElementById("emoji--angry");
   element.classList.toggle("grayScaleStyle", true);
}

function ChangeGray7() {
   // var element = document.getElementById("emoji--like");
   // element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--love");
   element.classList.toggle("grayScaleStyle" , true);
   var element = document.getElementById("emoji--haha");
   element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--yay");
   element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--wow");
   element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--sad");
   element.classList.toggle("grayScaleStyle", true);
   var element = document.getElementById("emoji--angry");
   element.classList.toggle("grayScaleStyle", false);
}
</script>



<!-- </main> -->
    <!-- <script type="text/javascript" src="runtime.8c26f1fab6959b00a997.js"></script><script type="text/javascript" src="polyfills.a2dbf0f26cef725bb456.js"></script><script type="text/javascript" src="main.ecbb5da552ec5929d907.js"></script> -->
</body>
</html>
