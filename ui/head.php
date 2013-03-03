<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
  <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="/js/bootstrap.min.js"></script>

  <title><?php echo $page_title; ?></title>
  <link rel="canonical" href="<?php echo $page_url; ?>"/>

  <meta name="description" content="<?php echo $meta_desc;?>">
  <meta property="og:title" content="<?php echo $page_title; ?>" />
  <meta property="og:type" content="Product" />
  <meta property="og:url" content="<?php echo $page_url; ?>" />
  <meta property="og:site_name" content="<?php echo BASE_URL; ?>" />
  <!--<meta property="fb:admins" content="" />-->

  <style>
  body {
    padding-top: 20px;
    padding-bottom: 60px;
  }

  /* Custom container */
  .container {
    margin: 0 auto;
    max-width: 1000px;
  }
  .container > hr {
    margin: 60px 0;
  }
  /* Customize the navbar links to be fill the entire space of the .navbar */
  .navbar .navbar-inner {
    padding: 0;
  }
  .navbar .nav {
    margin: 0;
    display: table;
    width: 100%;
  }
  .navbar .nav li {
    display: table-cell;
    width: 1%;
    float: none;
  }
  .navbar .nav li a {
    font-weight: bold;
    text-align: center;
    border-left: 1px solid rgba(255,255,255,.75);
    border-right: 1px solid rgba(0,0,0,.1);
  }
  .navbar .nav li:first-child a {
    border-left: 0;
    border-radius: 3px 0 0 3px;
  }
  .navbar .nav li:last-child a {
    border-right: 0;
    border-radius: 0 3px 3px 0;
  }

  .listitems_rd{
    margin-bottom: 3px;
    margin-left: 0px;
    margin-top: 6px;
    clear: both !important;
  }
  .msplistitem{
    width:155px;
    float:left;
    height:190px;
    margin:10px 10px;
    text-align: center;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 12px;
    color: #333333;
    position:relative;
  }
  .msplistitem .imgcont{
    display:table-cell;
    text-align:center;
    vertical-align:middle;
    height:125px;
    width:150px;
  }
  .msplistitem .item-title {
    float: left;
    width: 155px;
    height:35px;
    overflow:hidden;
    color: #333333;
    text-decoration:none;
    text-align:center;
    font-weight: bold;
    margin-top: 10px;
  }
  .msplistitem .price-val {
    font-weight: bold;
    color: #990000;
  }
  .msplistitem .item-price {
    float: left;
    width: 158px;
  }
  .bigfont {
    font-size :16px;
  }
  .boldfont {
    font-weight: bold;
  }
  .bestprice {
    color: #b00;
  }
  .mainsection{
    border-top: 1px dotted #CCC;
    padding-top: 10px;
    margin-top: 2px;
  }
  .table th {
    background-color: rgb(152, 153, 139);
  }
  .sidebar-nav {
    padding: 2px;
  }
  .last {
    padding-bottom: 2px;
  }
  .searchform {
    float: right;
    padding-top: 30px;
    padding-right: 20px;
  }
  .small {
    font-size: 11px;
    text-decoration: none;
  }
  </style>
</head>