<?php
    /**
     * @author Hans <Seonnyn> Rößler
     * @version 0.0.1a
     * @copyright 2014, Hans <Seonnyn> Rößler
     */
    // Test whether PPP already is installed
    if( !file_exists( "config/config.inc.php" ) ) {
        echo "<script type='text/javascript'>location.href='install/index.php';</script>";
    } else {
        include_once( "config/config.inc.php" );
        include_once( "autoloader.php" );
    }
?>
<?php
$category_set = false;
    if( isset( $_GET["cat"] ) ) {
            $category = $_GET["cat"];
            $category_set = true;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Some Kind of Site-Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
        <link href="/css/default.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">PPP</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/sign_up/">Registrieren</a></li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown">Login <strong class="caret"></strong></a>
                            <div class="dropdown-menu" style="padding: 15px; padding-bottom: 7px; width: 35%;">
                                <form role="form" action="[YOUR ACTION]" method="post" accept-charset="UTF-8">
                                    <div class="form-group">
                                        <input id="user_username" class="form-control" style="margin-bottom: 15px;" type="text" name="user_username" placeholder="Username" size="30" />
                                    </div>
                                    <div class="form-group">
                                        <input id="user_password" class="form-control" style="margin-bottom: 15px;" type="password" name="user_password" placeholder="Password" size="30" />
                                    </div>
                                    <button type="button" style="clear: left; width: 100%; height: 32px; font-size: 13px;" class="btn btn-primary">Sign In</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div><!-- /.container -->
        </div><!-- /.navbar -->

        <div class="container">

            <?php include_once ($category_set) ? "content/".$category.".php" : "content/home.php"; ?>

            <hr>

            <footer class="text-center">
                <p>&copy; Company 2013</p>
            </footer>

        </div><!--/.container-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(function() {
                // Setup drop down menu
                $('.dropdown-toggle').dropdown();

                // Fix input element click problem
                $('.dropdown input, .dropdown label').click(function(e) {
                    e.stopPropagation();
                });
            });
        </script>
    </body>
</html>