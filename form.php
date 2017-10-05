<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sent</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f3f3f3;
      padding-top: 15px;
      height:50px;
      
      
    }
    .jumbotron{
        background-image: url("vend.jpg");
        background-size: cover;
        margin-bottom: -10px;
        margin-top:0px;
        height:250px;
        
    }
    .container-fluid{
      background-image: url("");
      background-size: cover;
    }
  </style>
  <style>
    .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: red;
    border-color: black;
    border:solid;
}

.carousel-indicators li {
    border-color: black;
}

.carousel-indicators li.active {
    background-color: red;
}

.item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
}

.item span {
    font-style: normal;
}
  </style>
</head>
<body>

<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="2.html" style="font-family: italianno regular; font-weight: bold; font-size: 2.0em; letter-spacing: 3px; margin-top:3px;">KG</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="Gallery.html">Gallery</a></li>
        <li><a href="Contact.html">Contact</a></li>
     
    </div>
  </div>
</nav>

<div class="jumbotron" >
  <div class="container text-left" style="color: white;">
    <h1></h1>      
    <p></p>
  </div>
</div>
</br>
<div class="container page-header">
  <div class="row">
    <div class="col-xs-10" style="margin-top:50px;">
      <h2>Thank you for your feedback.</h2>
      <p>I will get back to you as soon as possible.</p>
    </div>
    
  </div>
  <div class="row">
    <a href="Contact.html #email"><button class="btn btn-info" type="button">Send Another</button></a>
   <a href="2.html"> <button  class="btn btn-info" type="button" >Back to Home</button></a>
   </div>
  
</div>

<div class="container">
<footer class="container" style="margin-left:-15px;">
  <p style="float: left;"><a href="2.html">Home  </a>|<a href="Gallery.html">  Gallery  </a>|<a href="Contact.html">  Contact</a></p>
  <p style="float: right;">&#169 Copyright 2017 | Kerry Grant | Page built with Bootstrap</p>
</footer>
</div>

</body>
</html>
