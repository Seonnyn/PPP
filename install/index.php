<?php
require_once("config.inc");
require_once("autoloader.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Pen&Paper Portal - Installation</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
        <!-- individual -->
        <link href="../lib/css/install.css" rel="stylesheet" media="screen">
        <script src="../lib/js/install.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h1>PPP</h1>
                </div>
                <div class="col-md-6">
                </div>
                <div class="col-md-3">
                    Installation Panel
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable"> <!-- Only required for left/right tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1" data-toggle="tab">Overview</a></li>
                            <li><a href="#tab2" onclick="tab_active = 21" data-toggle="tab">Installation</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                                <div class="tabbable tabs-left">
                                    <ul class="nav nav-pills nav-stacked col-md-3">
                                        <li class="active"><a href="#tab11" data-toggle="pill">Introduction</a></li>
                                        <li><a href="#tab12" data-toggle="pill">License</a></li>
                                        <li><a href="#tab13" data-toggle="pill">Support</a></li>
                                    </ul>
                                    <div class="tab-content well col-md-9">
                                        <div id="tab11" class="tab-pane active">
                                            <?php include "content/introduction.php" ?>
                                        </div>
                                        <div id="tab12" class="tab-pane">
                                            <?php include "content/license.php" ?>
                                        </div>
                                        <div id="tab13" class="tab-pane">
                                            <?php include "content/support.php" ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab2">
                                <div class="tabbable tabs-left">
                                    <ul class="nav nav-pills nav-stacked col-md-3">
                                        <li id="li_tab21" class="active"><a href="#">Introduction</a></li>
                                        <li id="li_tab22" class="disabled"><a href="#">Requirements</a></li>
                                        <li id="li_tab23" class="disabled"><a href="#">Database Settings</a></li>
                                        <li id="li_tab24" class="disabled"><a href="#">Checking Database</a></li>
                                    </ul>
                                    <div class="tab-content well col-md-9">
                                        <div id="tab21" class="tab-pane active">
                                            <?php include "content/install/introduction.php" ?>
                                        </div>
                                        <div id="tab22" class="tab-pane">
                                            <?php include "content/install/requirements.php" ?>
                                        </div>
                                        <div id="tab23" class="tab-pane">
                                            <?php include "content/install/database.php" ?>
                                        </div>
                                        <div id="tab24" class="tab-pane">
                                            <?php include "content/install/checkdatabase.php" ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    &copy; 2014 Hans "Seonnyn" Rößler, powered by PPP v<?php echo $pppver ?>
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    </body>
</html>