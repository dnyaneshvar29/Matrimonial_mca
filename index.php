<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Matrimony | Home :: 
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
<div class="banner">
  <div class="container">
    <div class="banner_info">
      <h3>Millions of verified Members</h3>
      <a href="register.php" class="hvr-shutter-out-horizontal">Create your Profile</a>
    </div>
  </div>
 
</div> 
<div class="grid_1">
      <div class="container">
      	<h1>Featured Profiles</h1>
       	<div class="heart-divider">
			<span class="grey-line"></span>
			<i class="fa fa-heart pink-heart"></i>
			<i class="fa fa-heart grey-heart"></i>
			<span class="grey-line"></span>
        </div>
        <ul id="flexiselDemo3">
        <?php
        	$sql="SELECT * FROM customer";
        	$result=mysqlexec($sql);
        	if($result){
        		while($row=mysqli_fetch_assoc($result)){
        			$name=$row['firstname'] . " " . $row['lastname'];
        			$profileid=$row['cust_id'];
        			$age=$row['age'];
        			$place=$row['state'] . "," . $row['district'];
        			$job=$row['occupation'];

        				//getting profilepic
        				$pic1='';
						$sql2="SELECT * FROM photos WHERE cust_id = $profileid";
						$result2 = mysqlexec($sql2);
						if($result2){
							$row2=mysqli_fetch_array($result2);
							$pic1=$row2['pic1'];
						}
						//got profilepic
						//
					//Printing the html
					echo "<li><div class=\"col_1\"><a href=\"view_profile.php?id={$profileid}\">";
					echo "<img src=\"profile/{$profileid}\/{$pic1}\" alt=\"\" class=\"hover-animation image-zoom-in img-responsive\"/>";
					echo "<div class=\"layer m_1 hidden-link hover-animation delay1 fade-in\">";
					echo "<div class=\"center-middle\">About {$name}</div>";
					echo "</div>";
					echo "<h3><span class=\"m_3\">Profile ID : {$profileid}</span><br>{$age}, {$place}<br>{$job}</h3></a></div>";
					echo "</li>";
				
        		}
        	}

        ?>
          </ul>
	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo3").flexisel({
				visibleItems: 6,
				animationSpeed: 1000,
				autoPlay:false,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	   </script>
	   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>
</div>
<div class="grid_2">
	<div class="container">
		<h2>Success Stories</h2>
       	<div class="heart-divider">
			<span class="grey-line"></span>
			<i class="fa fa-heart pink-heart"></i>
			<i class="fa fa-heart grey-heart"></i>
			<span class="grey-line"></span>
        </div>
        <div class="row_1">
		<div class="col-md-8 success_story">
    <ul> 
        <li>
            <div class="success_story-date">
                <span class="entry-1">Jan 15, 2023</span>
            </div>
            <div class="success_story-content-container">
                <figure class="success_story-content-featured-image">
                    <img width="75" height="75" src="images/7.jpg" class="img-responsive" alt=""/>				            
                </figure>
                <div class="success_story-content-info">
                    <h4><a href="#">Rohan & Priya</a></h4>				        	
                    <p>Rohan and Priya's journey showcases the beauty of resilience and love</p>
                </div>
            </div>
        </li>
        <li>
            <div class="success_story-date">
                <span class="entry-1">Feb 10, 2023</span>
            </div>
            <div class="success_story-content-container">
                <figure class="success_story-content-featured-image">
                    <img width="75" height="75" src="images/8.jpg" class="img-responsive" alt=""/>				            
                </figure>
                <div class="success_story-content-info">
                    <h4><a href="#">Arjun & Meera</a></h4>				        	
                    <p>Arjun and Meera's tale is a testament to the power of love.</p>
                </div>
            </div>
        </li>
        <li>
            <div class="success_story-date">
                <span class="entry-1">Mar 5, 2023</span>
            </div>
            <div class="success_story-content-container">
                <figure class="success_story-content-featured-image">
                    <img width="75" height="75" src="images/9.jpg" class="img-responsive" alt=""/>				            
                </figure>
                <div class="success_story-content-info">
                    <h4><a href="#">Raj & Simran</a></h4>				        	
                    <p>Raj and Simran's story is an inspiring example of enduring love .</p>
                </div>
            </div>
        </li>
        <li>
            <div class="success_story-date">
                <span class="entry-1">Apr 20, 2023</span>
            </div>
            <div class="success_story-content-container">
                <figure class="success_story-content-featured-image">
                    <img width="75" height="75" src="images/10.jpg" class="img-responsive" alt=""/>				            
                </figure>
                <div class="success_story-content-info">
                    <h4><a href="#">Aman & Riya</a></h4>				        	
                    <p>Aman and Riya's journey shows that love knows no boundaries and can overcome any challenge.</p>
                </div>
            </div>
        </li>
        <li>
            <div class="success_story-date">
                <span class="entry-1">May 25, 2023</span>
            </div>
            <div class="success_story-content-container">
                <figure class="success_story-content-featured-image">
                    <img width="75" height="75" src="images/11.jpg" class="img-responsive" alt=""/>				            
                </figure>
                <div class="success_story-content-info">
                    <h4><a href="#">Vikram & Anjali</a></h4>				        	
                    <p>Vikram and Anjali's love story is a beautiful narrative of how true love can triumph over all obstacles.</p>
                </div>
            </div>
        </li>
        <li>
            <div class="success_story-date">
                <span class="entry-1">Jun 18, 2023</span>
            </div>
            <div class="success_story-content-container">
                <figure class="success_story-content-featured-image">
                    <img width="75" height="75" src="images/12.jpg" class="img-responsive" alt=""/>				            
                </figure>
                <div class="success_story-content-info">
                    <h4><a href="#">Karan & Shweta</a></h4>				        	
                    <p>Karan and Shweta's story highlights the importance of trust and mutual respect in a relationship.</p>
                </div>
            </div>
        </li>
        <li>
            <div class="success_story-date">
                <span class="entry-1">Jul 30, 2023</span>
            </div>
            <div class="success_story-content-container">
                <figure class="success_story-content-featured-image">
                    <img width="75" height="75" src="images/13.jpg" class="img-responsive" alt=""/>				            
                </figure>
                <div class="success_story-content-info">
                    <h4><a href="#">Aditya & Pooja</a></h4>				        	
                    <p>Aditya and Pooja's love journey is a shining example of how patience and understanding can foster a deep connection.</p>
                </div>
            </div>
        </li>
    </ul>
</div>

<div class="col-md-4 row_1-right">
    <h3>News & Events</h3>
    <div class="box_1">
        <figure class="thumbnail1"><img width="170" height="155" src="images/14.jpg" class="img-responsive" alt=""/></figure>
        <div class="extra-wrap">
            <div class="post-meta">
                <span class="day">
                <time datetime="2014-05-25T10:15:43+00:00">25</time>
                </span>
                <span class="month">
                <time datetime="2014-05-25T10:11:51+00:00">May</time>
                </span>
            </div>
            <h4 class="post-title"><a href="#">Celebrating Gudi Padwa</a></h4>
            <div class="clearfix"> </div>
            <div class="post-content">Join us in the celebration of Maharashtra's New Year, Gudi Padwa, with traditional rituals and festivities.</div>
            <a href="#" class="vertical">Read More</a>
        </div>
    </div>
    <div class="box_1">
        <figure class="thumbnail1"><img width="170" height="155" src="images/15.jpg" class="img-responsive" alt=""/></figure>
        <div class="extra-wrap">
            <div class="post-meta">
                <span class="day">
                <time datetime="2014-05-25T10:15:43+00:00">25</time>
                </span>
                <span class="month">
                <time datetime="2014-05-25T10:11:51+00:00">May</time>
                </span>
            </div>
            <h4 class="post-title"><a href="#">Maharashtra Day Celebration</a></h4>
            <div class="clearfix"> </div>
            <div class="post-content">Join us as we commemorate the formation of Maharashtra state with cultural programs and patriotic fervor.</div>
            <a href="#" class="vertical">Read More</a>
        </div>
    </div>
    <div class="box_2">
        <figure class="thumbnail1"><img width="170" height="155" src="images/1.jpg" class="img-responsive" alt=""/></figure>
        <div class="extra-wrap">
            <div class="post-meta">
                <span class="day">
                <time datetime="2014-05-25T10:15:43+00:00">25</time>
                </span>
                <span class="month">
                <time datetime="2014-05-25T10:11:51+00:00">May</time>
                </span>
            </div>
            <h4 class="post-title"><a href="#">Ganesh Chaturthi Celebrations</a></h4>
            <div class="clearfix"> </div>
            <div class="post-content">Experience the grandeur of Ganesh Chaturthi with elaborate decorations, music, and cultural events.</div>
            <a href="#" class="vertical">Read More</a>
        </div>
    </div>
    <div class="religion">
        <div class="religion_1-title">Religion :</div>
        <a href="#" target="_blank" class="religion_1" title="Hindu Matrimonial" style="padding-left:0px !important;">Hinduism</a>
        <span>|</span><a href="#" target="_blank" class="religion_1" title="Muslim Matrimonial">Islam</a>
        <span>|</span><a href="#" target="_blank" class="religion_1" title="Christian Matrimonial">Christianity</a>
        <span>|</span><a href="#" target="_blank" class="religion_1" title="Sikh Matrimonial">Sikhism</a>
        <span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">Inter Religion</a>
    </div>
    <div class="religion">
        <div class="religion_1-title">Country :</div>
        <a href="#" target="_blank" class="religion_1" title="Hindu Matrimonial" style="padding-left:0px !important;">India</a>
        <span>|</span><a href="#" target="_blank" class="religion_1" title="Muslim Matrimonial">India</a>
        <span>|</span><a href="#" target="_blank" class="religion_1" title="Christian Matrimonial">India</a>
        <span>|</span><a href="#" target="_blank" class="religion_1" title="Sikh Matrimonial">India</a>
        <span>|</span><a href="#" target="blank" class="religion_1" title="Inter Religion Matrimonial">India</a>
        <span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">India</a>
        <span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">India</a>
        <span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">View All</a>
    </div>
    <div class="religion">
        <div class="religion_1-title">Caste :</div>
        <a href="#" target="_blank" class="religion_1" title="Hindu Matrimonial" style="padding-left:0px !important;">Maratha</a>
        <span>|</span><a href="#" target="_blank" class="religion_1" title="Muslim Matrimonial">Sunni</a>
        <span>|</span><a href="#" target="_blank" class="religion_1" title="Christian Matrimonial">Catholic</a>
        <span>|</span><a href="#" target="_blank" class="religion_1" title="Sikh Matrimonial">Jat</a>
        <span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">Lingayat</a>
        <span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">View All</a>
    </div>
    <div class="religion">
        <div class="religion_1-title">Regional :</div>
        <a href="#" target="_blank" class="religion_1" title="Hindu Matrimonial" style="padding-left:0px !important;">Marathi</a>
        <span>|</span><a href="#" target="_blank" class="religion_1" title="Muslim Matrimonial">Urdu</a>
        <span>|</span><a href="#" target="_blank" class="religion_1" title="Christian Matrimonial">Konkani</a>
        <span>|</span><a href="#" target="_blank" class="religion_1" title="Sikh Matrimonial">Punjabi</a>
        <span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">Gujarati</a>
        <span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">View All</a>
    </div>
</div>
<div class="clearfix"> </div>


    <div class="bg">
		<div class="container"> 
			<h3>Guest Messages</h3>
			<div class="heart-divider">
				<span class="grey-line"></span>
				<i class="fa fa-heart pink-heart"></i>
				<i class="fa fa-heart grey-heart"></i>
				<span class="grey-line"></span>
            </div>
            <div class="col-sm-6">
    <div class="bg_left">
        <h4>A True Friend's Words</h4>
        <h5>Friend of the Bride</h5>
        <p>"Namaskar! As a close friend of the bride, I can vouch for her kindness and grace. She embodies the rich culture and traditions of Maharashtra, always upholding the values she holds dear. Her journey is an inspiration to all of us."</p>
        <ul class="team-socials">
            <li><a href="#"><span class="icon-social"><i class="fa fa-facebook"></i></span></a></li>
            <li><a href="#"><span class="icon-social"><i class="fa fa-twitter"></i></span></a></li>
            <li><a href="#"><span class="icon-social"><i class="fa fa-google-plus"></i></span></a></li>
        </ul>
    </div>
</div>
<div class="col-sm-6">
    <div class="bg_left">
        <h4>A True Friend's Words</h4>
        <h5>Friend of the Groom</h5>
        <p>"Namaskar! Knowing the groom for years, I have seen his dedication and respect for Maharashtrian culture. He is a man of integrity and honor, always ready to lend a helping hand. His journey is a testament to his strong values and commitment."</p>
        <ul class="team-socials">
            <li><a href="#"><span class="icon-social"><i class="fa fa-facebook"></i></span></a></li>
            <li><a href="#"><span class="icon-social"><i class="fa fa-twitter"></i></span></a></li>
            <li><a href="#"><span class="icon-social"><i class="fa fa-google-plus"></i></span></a></li>
        </ul>
    </div>
</div>

            <div class="clearfix"> </div>
		</div>
	</div>
	
    <?php include_once 'footer.php'; ?>