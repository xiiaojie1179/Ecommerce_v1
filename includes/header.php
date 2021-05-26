<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<title>Tech MaG</title>
	<!-- ICON -->
	<link rel="icon" href="icon.png" type="image/gif" sizes="16x16">
  	<!-- Tell the browser to be responsive to screen width -->
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  	<!-- Bootstrap 3.3.7 -->
  	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  	<link rel="stylesheet" href="bower_components/bootstrap/bootstrap.min.css">
  	
  	<!-- DataTables -->
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--Paypal-->
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
  	<!-- Theme style -->
  	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  	<!-- AdminLTE Skins. Choose a skin from the css/skins        folder instead of downloading all of them to reduce the load. -->
  	<link rel="stylesheet" href="dist/css/skins/skin-blue.css">
    <!-- Magnify -->
    <link rel="stylesheet" href="magnify/magnify.min.css">

  	<!-- Google Font -->

  	<!-- Custom CSS -->
    <style type="text/css">
    /* Small devices (tablets, 768px and up) */
    @media (min-width: 768px){ 
      #navbar-search-input{ 
        width: 60px; 
      }
      #navbar-search-input:focus{ 
        width: 100px; 
      }
    }

    /* Medium devices (desktops, 992px and up) */
    @media (min-width: 992px){ 
      #navbar-search-input{ 
        width: 150px; 
      }
      #navbar-search-input:focus{ 
        width: 250px; 
      } 
    }

    .word-wrap{
      overflow-wrap: break-word;
    }
    .prod-body{
      height:300px;
    }

    .box:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }
    .register-box{
      margin-top:20px;
    }

    #trending{
      list-style: none;
      padding:10px 5px 10px 15px;
    }
    #trending li {
      padding-left: 1.3em;
    }
    #trending li:before {
      content: "\f046";
      font-family: FontAwesome;
      display: inline-block;
      margin-left: -1.3em; 
      width: 1.3em;
    }

    /*Magnify*/
    .magnify > .magnify-lens {
      width: 100px;
      height: 100px;
    }
		/* carousel fullscreen */

.carousel-fullscreen .carousel-inner .item {
    height: 100vh; 
    min-height: 600px; 
    background-position: center center; 
    background-repeat: no-repeat; 
    background-size: cover;
}

/* carousel fullscreen - vertically centered caption*/

.carousel-fullscreen .carousel-caption {
    top: 50%;  
    bottom: auto;
    -webkit-transform: translate(0, -50%); 
    -ms-transform: translate(0, -50%); 
    transform: translate(0, -50%);
}

    </style>
	<style>
      .speech {
        border: 1px solid #DDD;
        width:250px;
        padding:0;
        margin:0
      }

      .speech input {
        border:0;
        width:240px;
        display:inline-block;
        height:30px;
        font-size: 14px;
      }

      .speech img {
        float:right;
        width:40px
      }

    </style>

</head>