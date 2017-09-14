<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sysco bristow resources</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

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
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'de,en,es,fr,it,ja,la,ms,nl,pt,ru,zh-CN,zh-TW,zu', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:darkred;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Sysco Bristow Resources</a>
                 <img class="img-responsive-fixed-top img-portfolio img-hover" src="images/logo.png" style="height:40px;width:70px;margin:1px;" alt="">

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.html">About Us</a>
                    </li>
                    
                    <li>
                        <a href="dairyproducts.html">Products</a>
                    </li>
                    <li>
                        <a href="enquiry.php">Enquiry</a>
                    </li>
                    <li><a href="career.html">Careers</a></li>
                    <li>
                        <a href="Contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Enquiry
                   
                </h1>
               
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Ask Now</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                                      <div class="control-group form-group">
                        <div class="controls">
                            <script type= "text/javascript" src = "js/countries.js"></script>
	<label>Select Country:</label>
   <select id="country" name ="country" class="form-control" required data-validation-required-message="Please enter your Country."> </select> 
	<label>Select State: 
    </label><select name ="state" id ="state"  class="form-control" required data-validation-required-message="Please enter your state."></select>  
   
                            </div>
                    </div>

            <script language="javascript">
	populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
	populateCountries("country2");
	populateCountries("country2");
</script>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
            <div class="col-lg-10">
               
                <ol class="breadcrumb" style="background-color:darkred; ">
                <li><a href="about.html">About Us</a></li>
                 <li> <a href="dairyproducts.html">Products</a></li>
                    <li><a href="enquiry.php">Enquiry</a> </li>
					<li><a href="career.html">Careers</a></li>
                       <li>
                        <a href="Contact.html">Contact</a>
                    </li>
                </ol>
            </div>
        </div>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Sysco Bristow Resources</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

  
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
     <script src="js/countries.js"></script>
<script src="js/bootstrap-formhelpers-countries.js"></script>
<script src="js/bootstrap-formhelpers-languages.js"></script>
</body>

</html>
