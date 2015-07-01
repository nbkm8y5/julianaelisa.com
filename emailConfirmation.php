<?php

//Connect to the database through our include 
require_once "php/dbConnector.php";

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
       if(isset($_POST['firstName']))
                {
                  	$firstName = $_POST['firstName'];
                }
            else
                {
                	$firstName = "Not sent.";
                }

                if(isset($_POST['lastName']))
                {
                  $lastName=$_POST['lastName'];
                }
            else
                {
                  $lastName = "Not sent.";
                }

            if(isset($_POST['emailAddress']))
                {
                	$email=$_POST['emailAddress'];
                }
            else
                {
                	$email = "Not sent.";
                }

            if(isset($_POST['comments']))
                {
                	$comments = $_POST['comments'];
                }
            else
                {
            		$comments = "Not sent.";
                }
		}

                $compiledMessage =  'Name: ' . $firstName . ' ' . $lastName . "\r\n" .
                                    'Email: ' . $email . "\r\n" .
                                    'Comments or Questions: ' . $comments;

                $to      = 'julianaelisaphotography@gmail.com';
                $subject = 'Question/Comments julianaelisa.com';
                $message = $compiledMessage;
                $headers =  'From: ' . $email . "\r\n" .
                            'Reply-To: '. $email . "\r\n" .
                            'X-Mailer: PHP/' . phpversion();

                //mail($to, $subject, $message, $headers);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Juliana Elisa Photography</title>
    <meta name="description" content="Juliana Elisa's Photographic Portfolio - Landscape, Portrait, Artist">
    <meta name="keywords" content="" />
    <meta name="author" content="Rolando Moreno">
    <meta http-equiv="refresh" content="7;url=http://julianaelisa.com">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/carousel.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    
    <header>
      <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Juliana Elisa</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="gallery.php">Gallery <span class="sr-only">(current)</span></a></li>
        <li><a href="biography.php">Biography</a></li>
        <li><a href="contact.php">Contact</a></li>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    </header>

    <section class="container-fluid">
      <h1 class="text-center"><?php echo "Contact Confirmation"; ?></h1>
      <h3 class="text-center"><?php echo 'Thank you, ' . $firstName . ' ' . $lastName . ' for contacting julianaelisa.com.  Your will be contacted shortly.'; ?></h3>
      <h3 class="text-center"><?php echo "You will now be redirected to julianaelisa.com Home page."; ?></h3>
      <h6 class="text-center"><?php echo $success; ?></h6>
    </section>

    <footer id="footer" class="container text-center">
      <p>&copy <?php echo date("Y")?> Juliana Elisa</p>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-58700683-1', 'auto');
      ga('send', 'pageview');
    </script>
    
  </body>
</html>