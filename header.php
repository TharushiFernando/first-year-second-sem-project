<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
	<link rel="icon" href="./src/logo.png">

    	
<style>  
    
    
*{
	padding: 0;
	margin: 0;
  	box-sizing: border-box;
 	font-family: "Poppins", sans-serif;
	scroll-behavior: smooth;
	
}

    header{
        opacity: 80%;
        border-bottom-left-radius:50px ;
        border-bottom-right-radius: 0;
        position: absolute;
        width: 75%;
        padding : 20px 30px;
        display: flex;
        justify-content: space-between;	
        top : 0%;
        right: 0px;
        height: 12%;
        background: #2a9662;
        z-index: 1;
        /*position: fixed;*/
        
    }
    .logo{
        position: relative;
        margin-left: 20px;

    }

    .navigation a{

        position: relative;
        font-family:'Courier New', Courier, monospace;
        color: #ffffff;
        text-decoration: none;
        margin-left: 20px;
        margin-right: 20px;
        font-size: 150%;
        font-weight:500;

    }

      .btnUser{
    
        
        margin-top: -10px;
        cursor: pointer;
        border-radius: 100px;
        border-width: 3px;
        width: 45px;
        height: 47px;
    }


    .navigation a::after{
        content:'';
        position: absolute;
        left: 0;
        bottom: -4px;
        width :100%;
        height: 3px;
        border-radius: 5px;
        transform-origin: right;
        transform: scaleX(0);
        transition: transform .6s;
        background: rgb(20, 83, 39);
        
    }

    .navigation a:hover::after {
        transform-origin: left;
        transform: scale(1); 

    }

    .navigation .active {
    
        border-style: solid;
        border-width: 4px;
        border-top: 0 ;
        border-left: 0;
        border-right: 0;
        border-color: rgb(20, 83, 39); 
    }

    
.footer{
	width: 100%;
	font-family: cursive;
	position:relative;
}

.footer hr{
	height: 300px;
	width: 100%;
	background-color:#2a9662;
	position: absolute;
	z-index: -1;
	opacity: .9;
}

.footer .header{
	color:white;
	font-size: x-large;
	display: flex;
	justify-content: space-around;
	padding: 30px 0;
	font-weight: 600;
	text-shadow:3px 3px #0f3b1d;
	
}
.footer span:hover{
	scale: 1.1;
	cursor: pointer;
}
#dis1
{
	position:absolute;
	margin-left: 6%;
	font-family:'Times New Roman', Times, serif;
	font-size:70px;
	z-index: 1 ;
	width: 500px;
	font-weight: 100;
	margin-top: 5%;
	color:  rgb(40, 40, 40);
	font-style: italic;
	user-select: none;
}


#dis2
{

	margin-left: 6%;
	font-family:'Times New Roman', Times, serif;
	font-size:70px;
	z-index: 1 ;
	width: 500px;
	font-weight: 100;
	margin-top: 5%;
	color:  rgb(40, 40, 40);
	font-style: italic;
	user-select: none;
}

.pro{
     text-align: center;
     margin-top:-4px;
}
.pro a{
	font-size: 20px;
	padding: 0;
	text-decoration: solid;
	color: blue;
	font-weight: 1000 ;
   
}
</style>

<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

<a href="#srce" class="logo"  ><img src ="src\logo.png" alt="Logo" width="300px" height="150px" ></a>

<?php
    session_start();
?>