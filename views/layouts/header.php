<?php
use \App\models\Category;
use \App\models\Product;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ARTShop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap style -->
        <link id="callCss" rel="stylesheet" href="/template/themes/shop/bootstrap.min.css" media="screen"/>
        <link href="/template/themes/css/base.css" rel="stylesheet" media="screen"/>
        <!-- Bootstrap style responsive -->
        <link href="/template/themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
        <link href="/template/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
        <!-- Google-code-prettify -->
        <link href="/template/themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
        <!-- fav and touch icons -->
        <link rel="shortcut icon" href="/template/themes/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/template/themes/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/template/themes/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/template/themes/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/template/themes/images/ico/apple-touch-icon-57-precomposed.png">
        <style type="text/css" id="enject"></style>
    </head>
    <body>
        <!-- Header -->
        <div id="header">
            <div class="container" style="background-color: #3A3F44">
                <div id="welcomeLine" class="row">
                    <div class="span6" style="color: white; text-align: center">Добро пожаловать!<strong> <?php echo \App\models\User::getUserName(); ?></strong></div>
                    <div class="span6">
                        <div class="pull-right">
                            <a href="/cart/">
                                <span class="btn btn-mini btn-primary">
                                    <i class="icon-shopping-cart icon-white"></i>
                                    [<span id="cart-count">
                                        <?php echo \App\components\Cart::countItems();?>
                                    </span>] Товары в вашей корзине
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Navbar -->
                <div id="logoArea" class="navbar">
                    <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-inner">
                        <a class="brand" href="/"><p class="logo" style="font-size: 40px; color: white; padding-top: 20px">ARTShop</p></a>
                        <form class="form-inline navbar-search" method="post" action="/" >
                            <input id="srchFld" class="srchTxt" type="text" />
                            <select class="srchTxt">
                                <option>FUNKO POP</option>
                                <option>LEGO</option>
                                <option>Comics</option>
                                <option>Hasbro</option>
                                <option>Marvel</option>
                                <option>Harry Potter</option>
                            </select>
                            <button type="submit" id="submitButton" class="btn btn-primary">Перейти</button>
                        </form>
                        <ul id="topMenu" class="nav pull-right">
                            <li class=""><a href="/contact">О сайте</a></li>
                            <li class="">
                                <?php if (\App\models\User::isGuest()): ?>
                                    <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Логин</span></a>
                                <?php else: ?>
                                    <a href="/logout/" role="button" style="padding-right:0"><span class="btn btn-large btn-warning">Выйти</span></a>
                                <?php endif; ?>
                                <div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h3>Войти</h3>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal loginFrm" method="post" action="/login/">
                                            <div class="control-group">
                                                <input type="text" name="email" id="inputEmail" placeholder="Email">
                                            </div>
                                            <div class="control-group">
                                                <input type="password" name="password" id="inputPassword" placeholder="Password">
                                            </div>
                                            <div class="control-group">
                                                <label class="checkbox">
                                                    <input type="checkbox"> Запомнить меня
                                                </label>
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-success">Войти</button>
                                            <button class="btn" data-dismiss="modal" aria-hidden="true">Закрыть</button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
