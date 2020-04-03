<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>КиноКинг Bootstrap</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="assets/css/style.css" rel="stylesheet">

    <link href="assets/css/hover.css" rel="stylesheet">

  </head>
  <body>
    

    <?php
    include_once 'assets/parts/header.php';
    include_once 'main.php';
    ?>


    


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>

<script src="https://unpkg.com/scrollreveal"></script>

<style>
  #scrollToTop {
      position: fixed;
      bottom: 20px;
      right: 20px;
       font-weight: bold;
      cursor: pointer;
      opacity: 0;
      transition: all 0.5s ease-in;
}
#btn_up{
  width:50px;
  height:50px;
}
</style>

<?php
    include_once 'assets/parts/footer.php';
    ?>
    <div id="scrollToTop" onclick="goUp();"><img src="assets\img\up.png" alt="Вверх" id="btn_up"> </div>
    <script>
window.onscroll = function() {
   var scrollElem = document.getElementById("scrollToTop");
   if (document.body.scrollTop > document.documentElement.clientHeight) {
      scrollElem.style.opacity = "0";
   } else {
       scrollElem.style.opacity = "1";
   }
}
</script>
<script>
      var timeOut;
function goUp() {
   var top = Math.max(document.body.scrollTop,document.documentElement.scrollTop);
   if(top > 0) {
      window.scrollBy(0,-100);
      timeOut = setTimeout('goUp()',20);
   } else clearTimeout(timeOut);
}
</script>
  </body>
 
</html>