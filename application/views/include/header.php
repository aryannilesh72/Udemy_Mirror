<?php
$_SESSION['base_url'] = base_url();
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/new.css')?>">
    <style>
        #banner1{

            background: url("<?php echo base_url('assets/img/banner1.jpg')?>");

            padding: 100px;
            width: 100%;
            height: 500px;

            top: 50px;

        }
    </style>
</head>
<body>
<div class="all">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo base_url() ?>welcome">Udemy</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <i class="glyphicon glyphicon-th"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li><form><input placeholder="   Search for courses" class="search" type="text"/><button type="submit" class="btns"><i class="glyphicon glyphicon-search"></i></button></form></li>
                <li><a href="#">Udemy For Business</a></li>
                <li><a href="#">Teach on Udemy</a></li>
                <ul class="nav navbar-nav navbar-right">
                    <li><p class="navbar-text">Already have an account?</p></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        Login via
                                        <div class="social-buttons" align="center">
                                            <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                            <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                        </div>
                                        or
                                        <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> keep me logged-in
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="bottom text-center">
                                        New here ? <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Join Us</button>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li><a class="cart-button">
                            <i class="fa fa-cart-arrow-down"></i> View Cart</a>
                    </li>
                </ul>
        </div>
    </nav>

    <div id="banner1">
        <h1 class="offer"><?php echo $this->session->flashdata('msg'); ?></h1>
        <p class="top">Explore our most-popular courses in any topic for <br/>&#x20b9;:700</p>
        <li><input placeholder="  What do you want to learn?"class="search" type="text"><button class="btns"> <i class="glyphicon glyphicon-search"></i></button></li>
        </button>
    </div>
    <div id="banner2">
        <div class="row row1">
            <div class="col-sm-4"><span class="ico"><i class="fa fa-cart-arrow-down"></i></span>&nbsp;New Courses</div>
            <div class="col-sm-4"><span class="ico"><i class="fa fa-blind"></i></span>&nbsp;Expert Instruction</div>
            <div class="col-sm-4"><span class="ico"><i class="fa fa-american-sign-language-interpreting"></i></span>&nbsp;Life time Access</div>
        </div>

    </div>