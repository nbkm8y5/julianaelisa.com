<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Juliana Elisa Photography Contact Information</title>
    <meta name="description" content="Juliana Elisa's Photographic Portfolio - Landscape, Portrait, Artist">
    <meta name="keywords" content="" />
    <meta name="author" content="Rolando Moreno">

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

    <section class="container">

      <div id="signUp" class=" col-md-offset-4 col-md-4 text-center">
            <h2>Contact Me</h2>

            <form action="emailConfirmation.php" method="post" enctype="application/x-www-form-urlencoded">
              <div class="form-group">
                <label class="control-label" for="fName" style="color:#fff">First Name</label>
                <input type="text" class="form-control" name="firstName"  value="" placeholder="Enter First Name" required>
              </div>
              <div class="form-group">
                <label class="control-label" for="lName" style="color:#fff">Last Name</label>
                <input type="text" class="form-control" name="lastName" value="" placeholder="Enter Last Name" required>
              </div>
              <div class="form-group">
                <label class="control-label" for="email" style="color:#fff">Email address</label>
                <input type="email" class="form-control" name="emailAddress" value="" placeholder="Enter email" required>
              </div>
              <div class="form-group">
                <label class="control-label" for="comment" style="color:#fff">Comments or Questions</label>
                <input type="text" class="form-control" name="comments" value="" placeholder="Enter any comments or questions you may have" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-default">Send</button>
              </div>
              <div class="form-group">
                <button type="reset" class="btn btn-danger">Reset</button>
              </div>
            </form>
            
          </div>
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