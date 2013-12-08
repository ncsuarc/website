<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact ARC</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
          <a class="navbar-brand" href="index.html">NC State Aerial Robotics Club</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="about.html">About</a></li>
            <li><a href="sponsors.html">Sponsors</a></li>
            <li><a href="system.html">System Overview</a></li>
            <li class="active"><a href="contact.php">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Member Pages <b class="caret"></b></a>
              <ul class="dropdown-menu">
	        <li><a href="/wiki">Wiki</a></li>
	        <li><a href="/tracker">Internal Progress Tracker</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

    <!-- Page Content -->

    <div class="container">
      
      <div class="row">
      
        <div class="col-lg-12">
          <h1 class="page-header">Contact <small>We'd Love to Hear From You!</small></h1>
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Contact</li>
          </ol>
        </div>
        
        <div class="col-lg-12">
          <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?sll=35.77105309999947,-78.67345216639923&amp;sspn=0.007129072974565932,0.01714419497581687&amp;t=m&amp;q=Aerial+Robotics+Club&amp;ie=UTF8&amp;hq=Aerial+Robotics+Club&amp;hnear=&amp;ll=35.771726,-78.674051&amp;spn=0.001741,0.004292&amp;z=18&amp;iwloc=A&amp;output=embed"></iframe>
        </div>

      </div><!-- /.row -->
      
      <div class="row">

        <div class="col-sm-8">
          <h3>Let's Get In Touch!</h3>
          <p>If you're a student interested in joining our club, a company looking to sponsor us, or you just want to get more information about what we're doing, get in touch with us.</p>
			<?php  

                // check for a successful form post  
                if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
          
                // check for a form error  
                elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  

			?>
            <form role="form" method="POST" action="contact-form-submission.php">
              <div class="form-group col-lg-4">
                <label for="input1">Name</label>
                <input type="text" name="contact_name" class="form-control" id="input1">
              </div>
              <div class="form-group col-lg-4">
                <label for="input2">Email Address</label>
                <input type="email" name="contact_email" class="form-control" id="input2">
              </div>
              <div class="form-group col-lg-4">
                <label for="input3">Phone Number</label>
                <input type="phone" name="contact_phone" class="form-control" id="input3">
              </div>
              <div class="clearfix"></div>
              <div class="form-group col-lg-12">
                <label for="input4">Message</label>
                <textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
              </div>
              <div class="form-group col-lg-12">
                <input type="hidden" name="save" value="contact">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>

        <div class="col-sm-4">
          <h3>NC State Aerial Robotics Club</h3>
          <h4>Lab</h4>
          <p>
            Room 2003<br />
            Engineering Building III<br />
            North Carolina State University<br />
          </p>
          <h4>Mailing Address</h4>
          <p>
            911 Oval Drive<br />
            MAE Box 7910<br />
            Raleigh, NC 27606<br />
          </p>
          <!--<p><i class="icon-phone"></i> <abbr title="Phone">P</abbr>: (555) 984-3600</p>--!>
          <p><i class="icon-envelope-alt"></i> <abbr title="Email">E</abbr>: <a href="mailto:arc.ncsu@gmail.com">arc.ncsu@gmail.com</a></p>
          <p><i class="icon-time"></i> <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 6:00 PM</p>
          <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="http://www.facebook.com/ncsuarc" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="icon-facebook-sign icon-2x"></i></a></li>
            <li class="tooltip-social linkedin-link"><a href="http://www.linkedin.com/groups/NC-State-University-Aerial-Robotics-4820006" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="icon-linkedin-sign icon-2x"></i></a></li>
            <li class="tooltip-social github-link"><a href="https://github.com/ncsuarc" data-toggle="tooltip" data-placement="top" title="GitHub"><i class="icon-github-sign icon-2x"></i></a></li>
          </ul>
        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

    <div class="container">

      <hr>

      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; North Carolina State University Aerial Robotics Club 2013</p>
          </div>
        </div>
      </footer>

    </div><!-- /.container -->
    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>
    
  </body>
</html>
