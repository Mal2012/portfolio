<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
?><?php include("bin/mysql.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="<?php echo _getTitle(3); ?>">
    <meta name="language" content="de">
	<meta name="keywords" content="Innenarchitektur, Interior Design, Lichtplanung, Lichtgestaltung, Design, Jennifer Bühling, Beleuchtung, Innenraum, Gestaltung, Bühnenbild, ">
	<meta name="description" content="Portfolio von <?php echo _getTitle(3); ?> - Gewinnen Sie einen Eindruck von meiner Ausbildung, meinem Innenarchitekturstudium, meinen Kenntnissen und Projekten.">
	<meta name="robots" content="index,follow">
	<meta name="audience" content="alle">
	<meta name="page-topic" content="Dienstleistungen">
	<meta name="revisit-after" CONTENT="7 days">
	<link rel="icon" href="css/favicon.ico">
    <title><?php echo _getTitle(3); ?> - Innenarchitektur / Lichtplanung</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet" type="text/css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Navigation Ausblenden</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" title="Startseite"><?php echo _getTitle(3); ?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="page.php?p=Portfolio" title="Portfolio">Portfolio</a>
                    </li> 
					<?php 
				   if(_getTitle(16) =='true'){
					  echo" <li>
                        <a href=\"page.php?p=Leistungen\" title=\"Leistungen\">Leistungen</a>
                    </li>";
					   
				   }
				   ?>
                    <li>
                        <a href="page.php?p=Kontakt" title="Impressum">Kontakt</a>
                    </li>
                  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>