<?php
include('../includes/autoloader.php');

if($_SESSION['user']['role'] == 'admin') {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CMS">
    <meta name="author" content="HBL">
    
	<meta property="og:title" content="hbl">
	<meta property="og:description" content="hbl">
	<meta property="og:url" content="www.hbl.nl/admin">
	<meta property="og:site_name" content="hbl">
	<meta property="og:type" content="website">	
	
	<title>CMS</title>
   	
    <!-- Custom CSS -->
    <link href="https://bootswatch.com/cerulean/bootstrap.min.css" rel="stylesheet">
    <link href="../css/admin.css" rel="stylesheet">    	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.0/cropper.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!-- Custom Fonts -->
   
	</head>

	<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Bijles Juf</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="logout.php"> <?php echo "Welkom ". $_SESSION['user']['username'].", Log hier uit";  ?></a>                    
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <?php $file = basename($_SERVER['PHP_SELF'] , '.php'); ?>
                    <li <?php if($file == 'index'){?> class="active" <?php } ?>>
                        <a href="index.php"><span class="glyphicon glyphicon-home"></span> Startpagina</a>
                    </li>
                    <li <?php if($file == 'form'){?> class="active" <?php } ?>>
                        <a href="form.php"><span class="glyphicon glyphicon-user"></span> Inschrijven</a>
                    </li>
                    <li <?php if($file == 'ouderschap'){?> class="active" <?php } ?>>
                        <a href="ouderschap.php"><span class="glyphicon glyphicon-magnet"></span> Ouderschap</a>
                    </li>
                    <li <?php if($file == 'form'){?> class="active" <?php } ?>>
                        <a href="subject.php"><span class="glyphicon glyphicon-list-alt"></span> Vakken</a>
                    </li>
                    <li <?php if($file == 'form'){?> class="active" <?php } ?>>
                        <a href="upload.php"><span class="glyphicon glyphicon-upload"></span> Slideshow</a>
                    </li>
                    <!-- <li <?php if($file == 'lease_article'){?> class="active" <?php } ?>>
                        <a href="lease_article.php"><i class="fa fa-fw fa-shopping-cart"></i> Verhuur beheer</a>
                    </li> -->              
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        
<?php	
} else {
	header('location: ../index.php');
}


?>