<?php session_start(); ?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="chrome=1" />
<head>
<link rel="stylesheet" type="text/css" href="../Styles/Main.css" />
<script src="../Scripts/jquery-1.9.1.min.js"></script>
<script src="../Scripts/jssor.slider.mini.js"></script>
<script>
    jQuery(document).ready(function ($) {
        var options = { $AutoPlay: true };
        var jssor_slider1 = new $JssorSlider$('slider1_container', options);
    });
</script>
<Title>Index</Title>
</head>
<body >
<?php include '../Headers/websiteheader.php'; ?>

<div class="divSiteContainer">
  <div class="divSiteContent"> 
    <div class="divDescription">
      <h2>Welcome to Maison Samosa Express!</h2>
      <div id="description" >&nbsp;&nbsp;&nbsp;In the heart of Ville Saint-Laurent, our Indian and Pakistani cuisine stands out as being healthy and tasty.
      We offer quick delivery and catering services too. With over 75  items on our menu, we have a bit of everything for different taste buds.
      Viande entierement du Quebec-Meat entirely from Quebec. We use 100% vegetable oil with 0 trans fat. No Peanuts or MSG. 
      Please note we use Cashew nuts and Almonds in some our dishes so please advise us of any alergies!</div>
    </div>
  
    <div class="slidesContainer">
      <div id="slider1_container" class="slider1_container">
        <!-- Slides Container -->
          <div u="slides" style="position: absolute; overflow: hidden; left: 0px; top: 0px; width: 500px; height: 500px;opacity:1;">
            <div><img u="image" src="..\Images\desc1.jpg" /></div>
            <div><img u="image" src="..\Images\desc2.jpg" /></div>
            <div><img u="image" src="..\Images\desc3.jpg" /></div>
            <div><img u="image" src="..\Images\desc4.jpg" /></div>
            <div><img u="image" src="..\Images\desc5.jpg" /></div>
            <div><img u="image" src="..\Images\desc6.jpg" /></div>
            <div><img u="image" src="..\Images\desc7.jpg" /></div>
            <div><img u="image" src="..\Images\desc8.jpg" /></div>
            <div><img u="image" src="..\Images\desc9.jpg" /></div>
            <div><img u="image" src="..\Images\desc10.jpg" /></div>
            <div><img u="image" src="..\Images\desc11.jpg" /></div>
            <div><img u="image" src="..\Images\desc12.jpg" /></div>
            <div><img u="image" src="..\Images\desc13.jpg" /></div>
            <div><img u="image" src="..\Images\desc14.jpg" /></div>
            <div><img u="image" src="..\Images\desc15.jpg" /></div>
            <div><img u="image" src="..\Images\desc16.jpg" /></div>
          </div>
      </div>
    </div>
  </div>
</div>
  


</body>




</html>