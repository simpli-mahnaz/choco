<?php include('config.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 <link href="header.css?v=<?=$Version?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css" integrity="sha512-t7Few9xlddEmgd3oKZQahkNI4dS6l80+eGEzFQiqtyVYdvcSG2D3Iub77R20BdotfRPA9caaRkg1tyaJiPmO0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
 
</style>
</head>
<body>
<!--Desktop Header-->
<div class="container-fluid desktop_header_container d-none d-lg-block">
  <div class="row">
    <div class="col col-md-3 col-5 desktop_logo_col"><img src="img/shreedha plywood logo.png" class="desktop_logo"></div>

    <div class="col col-md-9 d-none d-lg-block decktop_nav_col">
      
<ul class="desktop_menu-bar">
	<li class="desktop_drop_menu-bar_main_li1">
	Inspiration<i class="drop_icon fa-solid fa-angle-down"></i>
<div class="container-fluid desktop_drop_menu-bar_con">
<div class="row desktop_drop_menu-bar_row">
<div class="col-4 desktop_drop_menu-bar_col">
<ul class="desktop_drop_menu-bar_ul1">
<a href="#"><li onmouseover="drop_img1()" onmouseleave="drop_d_img()">Living Room</li></a>
<a href="#"><li onmouseover="drop_img2()" onmouseleave="drop_d_img()">Bed Room</li></a>
<a href="#"><li onmouseover="drop_img3()" onmouseleave="drop_d_img()">Kitchen</li></a>
<a href="#"><li onmouseover="drop_img4()" onmouseleave="drop_d_img()">Wardrobe</li></a>
<a href="#"><li onmouseover="drop_img5()" onmouseleave="drop_d_img()">Furniture</li></a>
</ul>
</div>
<div class="col-8 desktop_drop_menu-bar_col">
	<div class=" desktop_drop_menu-bar_img_div">
		<img class=" desktop_drop_menu-bar_img" id="drop_img" src="img/menu.jpg">
	</div>
		</div>
</div>
</div>
</li>
<li class="desktop_drop_menu-bar_main_li2">Products<i class="drop_icon fa-solid fa-angle-down"></i>
<ul class="desktop_drop_menu-bar_ul2">
<a href="plywood.php"><li>Plywood</li></a>
<a href="blockboard.php"><li>Block Board</li></a>
<a href="doors.php"><li>Doors</li></a>
</ul>
</li>
	<a href="#"><li>About us</li></a>
  <a href="#"><li>Gallery</li></a>
  <a href="#"><li>Blogs</li></a>
  <a href="#"><li>GetQuote</li></a>
  <a href="#"><li>Contact Us</li></a>
  </ul>
</div>
  </div>
</div>



<!---------------------------------Mobile Header------------------->
<div class="container-fluid mobile_header_container d-lg-none d-block">
  <div class="row">
<div class="col-5 mobile_logo_col">
 <img src="img/shreedha plywood logo.png" class="mobile_logo">
</div>

<div class="col-7 mobile_nav_col">
<ul class="mobile_menu_bar">
	<a href="#"><li>GetQuote</li></a>
	<a href="#"><li><i class="fa-brands fa-whatsapp mob_whats_icon"></i></li></a>
  <li onclick="openMenu()"><i class="fa-solid fa-bars-staggered mob_open_menu_icon"></i></li>
</li>
</ul>
</div>
</div>
</div>

<!--Mobile Menu Slider Script-->
<div id="mobile_menu_slider">

<i onclick="closeMenu()" class="fa-solid fa-circle-xmark mob_x_icon"></i>

 <ul class="mobile_slider_menu_bar_ul">
	<li class="mobile_slider_menu_bar_main_li1">Inspiration<i class="drop_icon1 fa-solid fa-angle-down"></i>

<ul class="mobile_slider_menu_bar_ul1">
	<a href="#"><li>Living Room</li></a>
  <a href="#"><li>Bed Room</li></a>
  <a href="#"><li>Kitchen</li></a>
  <a href="#"><li>Wardrobe</li></a>
  <a href="#"><li>Furniture</li></a>

</ul>
</li>

<li class="mobile_slider_menu_bar_main_li2">Product<i class="drop_icon2 fa-solid fa-angle-down"></i>
<ul class="mobile_slider_menu_bar_ul2">
	<a href="plywood.php"><li>Plywood</li></a>
  <a href="blockboard.php"><li>Block Board</li></a>
  <a href="doors.php"><li>Door</li></a>
  </ul>
</li>

	<a href="#"><li>About us</li></a>
  <a href="#"><li>Gallery</li></a>
  <a href="#"><li>Blogs</li></a>
  <a href="#"><li>GetQuote</li></a>
  <a href="#"><li>Contact Us</li></a>
  </ul>
</div>



<!---Desktop menu dropdown JS---->
<script>
function drop_img1(){
	document.getElementById('drop_img').src='img/menu1.jpg'
}
function drop_img2(){
	document.getElementById('drop_img').src='img/menu2.jpg'
}
function drop_img3(){
	document.getElementById('drop_img').src='img/menu3.jpg'
}
function drop_img4(){
	document.getElementById('drop_img').src='img/menu1.jpg'
}
function drop_img5(){
	document.getElementById('drop_img').src='img/menu2.jpg'
}
function drop_d_img(){
	document.getElementById('drop_img').src='img/menu.jpg'
}

</script>

<!---Mobile Menu Slider JS---->
<script>
function openMenu() {
  document.getElementById('mobile_menu_slider').style.right = "0";}
function closeMenu() {
  document.getElementById('mobile_menu_slider').style.right = "-100vw";}
</script>












</body>
</html>