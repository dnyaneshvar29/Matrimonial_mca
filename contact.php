<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}
 ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - MATCHMADE Matrimony
 | Contact :: Matrimony
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
    <div class="breadcrumb1">
      <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Contact</li>
      </ul>
    </div>
    <div class="grid_5">
      <p>Information related to marriage in India:</p>
      <p>Matrimony in Indian culture is deeply rooted in tradition and family values. Arranged marriages are common, where families play a significant role in finding suitable matches based on factors like caste, community, and compatibility. Indian weddings are elaborate affairs, symbolizing the union of two families. Matrimonial services, both traditional and online, assist in finding matches. While arranged marriages prevail, there's a growing trend towards love marriages. Legal aspects also govern marriage, including registration, dowry prohibition, and divorce laws. Overall, matrimony in India reflects cultural values and continues to evolve alongside societal changes.</p>
      <address class="addr row">
        <dl class="grid_4">
          <dt>Address :</dt>
          <dd>
            8901 Nulla Pariatur, <br>
            Ipsum, D05 87GR.
          </dd>
        </dl>
        <dl class="grid_4">
          <dt>Telephones :</dt>
          <dd>
            +91 000 245 4578 <br>
            +91 000 789 5478
          </dd>
        </dl>
        <dl class="grid_4">
          <dt>E-mail :</dt>
          <dd><a href="mailto:info@matrimony.com">info@matrimony.com</a></dd>
        </dl>
      </address>
    </div>
  </div>
</div>
<div class="about_middle">
  <div class="container">
    <h2>Contact Form</h2>
    <form id="contact-form" class="contact-form">
      <fieldset>
        <input type="text" class="text" placeholder="" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
        <input type="text" class="text" placeholder="" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
        <input type="text" class="text" placeholder="" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
        <textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
        <input name="submit" type="submit" id="submit" value="Submit">
      </fieldset>
    </form>
  </div>
</div>



<?php include_once("footer.php");?>

