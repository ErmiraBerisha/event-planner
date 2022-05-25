<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event planner</title>

    <?php wp_head();?>


</head>

<script>

    function openNav() {
        document.getElementById("menu-main-menu").style.width = "300px";
        document.getElementById("main").style.marginLeft = "150px";
       
    }


function closeNav() {
        document.getElementById("menu-main-menu").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
        document.querySelector('ul').style.width = "0";

        
    }
</script>

<body>


<div class="menu">
    <div class="logo">
        <img src="<?php echo get_theme_file_uri('images/logo-png.png')?>" width="160" height="100">
    </div> 

    <div class="navbar__navbars">
         <a href="javascript:void(0)" class="closebtn active" onclick="closeNav()">&times;</a>  </div>  
    <div id="main">
         <button class="openbtn" onclick="openNav()">&#9776;</button>
    </div>

     <?php
        wp_nav_menu(
            array (
                    'theme_location'=> 'top-menu',
                    'menu_class'=> 'main menu'
                    )
                );
    ?>
</div>


