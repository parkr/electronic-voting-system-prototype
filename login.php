<?php

if(isset($_POST) && array_key_exists("ssn", $_POST) && array_key_exists("sent1", $_POST) && array_key_exists("sent2", $_POST)){
	if(empty($_POST["ssn"]) || empty($_POST["sent1"]) || empty($_POST["sent2"])){
		unset($_POST);
	}else{
		header("Location: overview.html");
	}
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login: Vote.Gov</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="bootstrap.css" rel="stylesheet">
    <style type="text/css">
      /* Override some defaults */
      html, body {
        background-color: #eee;
      }
      body {
        padding-top: 40px; /* 40px to make the container go all the way to the bottom of the topbar */
      }
      .container > footer p {
        text-align: center; /* center align it with the container */
      }
      .container {
        width: 820px; /* downsize our container to make the content feel a bit tighter and more cohesive. NOTE: this removes two full columns from the grid, meaning you only go to 14 columns and not 16. */
      }

      /* The white background content wrapper */
      .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
        -webkit-border-radius: 0 0 6px 6px;
           -moz-border-radius: 0 0 6px 6px;
                border-radius: 0 0 6px 6px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

      /* Page header tweaks */
      .page-header {
        background-color: #f5f5f5;
        padding: 20px 20px 10px;
        margin: -20px -20px 20px;
      }

      /* Styles you shouldn't keep as they are for displaying this base example only */
      .content .span10,
      .content .span4 {
        min-height: 500px;
      }
      /* Give a quick and non-cross-browser friendly divider */
      .content .span4 {
        margin-left: 0;
        padding-left: 19px;
        border-left: 1px solid #eee;
      }

      .topbar .btn {
        border: 0;
      }

    </style>
  </head>

  <body>

    <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="#">Vote.Gov</a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="content">
        <div class="page-header">
          <h1>Login</h1>
        </div>
        <div class="row">
          <div class="span14">
						<div>
							<form action="<?=basename(__FILE__)?>" method="post" accept-charset="utf-8">
								<div class="clearfix">
									<label for="ssn">SSN</label>
									<div class="input">
										<input type="text" name="ssn" placeholder="000-00-0000">
									</div>
								</div>
								<div class="clearfix">
									<label for="sent1">Sentence 1</label>
									<div class="input">
										<input type="text" name="sent1">
									</div>
								</div>
								<div class="clearfix">
									<label for="sent2">Sentence 2</label>
									<div class="input">
										<input type="text" name="sent2">
									</div>
								</div>
								<div class="actions">
									<input class="btn" type="reset" value="Cancel" onclick="window.location='index.html';">
									<input class="btn primary" type="submit" value="Continue &rarr;">
								</div>
							</form>
						</div>
          </div>
        </div>
      </div>

      <footer>
        <p>&copy; Smarter Voting, Inc. 2011</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
