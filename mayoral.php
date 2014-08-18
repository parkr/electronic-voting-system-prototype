<?php

if(isset($_POST) && array_key_exists("mayor", $_POST)){
		header("Location: confirm.php");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ithaca Mayoral Candidates: Vote.Gov</title>
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
          <h1>Ithaca Mayoral Candidates</h1>
        </div>
        <div class="row">
          <div class="span14">
						<form action="<?=basename(__FILE__)?>" method="post" accept-charset="utf-8">
							<div class="clearfix">
								<div class="input democrat">
									<input type="radio" name="mayor"  value="J.R. Clairborne"> J.R. Clairborne
								</div>
							</div>
							<div class="clearfix">
								<div class="input peoples-emancipation-party">
									<input type="radio" name="mayor"  value="Anthony Gallucci"> Anthony Gallucci
								</div>
							</div>
							<div class="clearfix">
								<div class="input republican">
									<input type="radio" name="mayor"  value="Janis Kelly"> Janis Kelly
								</div>
							</div>
							<div class="clearfix">
								<div class="input independent">
									<input type="radio" name="mayor"  value="Christopher Kusznir"> Christopher Kusznir
								</div>
							</div>
							<div class="clearfix">
								<div class="input democrat">
									<input type="radio" name="mayor"  value="Pam Mackesy"> Pam Mackesy
								</div>
							</div>
							<div class="clearfix">
								<div class="input democrat">
									<input type="radio" name="mayor"  value="Svante Myrick"> Svante Myrick
								</div>
							</div>
							<div class="clearfix">
								<div class="input independent">
									<input type="radio" name="mayor"  value="Wade Wykstra"> Wade Wykstra
								</div>
							</div>
							<div class="clearfix">
								<div class="input">
									<input type="radio" name="mayor"  value="none"> None of the above
								</div>
							</div>
							<div class="clearfix">
								<div class="input">
									<div class="input-prepend">
										<label class="add-on"><input type="checkbox" name="" id="" value="" /></label>
										<input type="text" name="mayor" size="16" placeholder="Write In..." />
									</div>
								</div>
							</div>
							<div class="actions">
								<input class="btn" type="reset" value="Cancel" onclick="window.location='overview.html';">
								<input class="btn primary" type="submit" value="Continue &rarr;">
							</div>
						</form>
						<div class="span6 offset3">
							<div class="pagination centered-text">
							  <ul>
							    <li class="prev"><a href="congressional.php">&larr; Previous</a></li>
							    <li><a href="presidential.php">1</a></li>
							    <li><a href="congressional.php">2</a></li>
							    <li class="active"><a href="mayoral.php">3</a></li>
							    <li class="next"><a href="confirm.php">Next &rarr;</a></li>
							  </ul>
							</div>
						</div> <!-- /.span4.offset3 -->
          </div>
        </div>
      </div>

      <footer>
        <p>&copy; Smarter Voting, Inc. 2011</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
