<html>
	<head>
		<link  rel="stylesheet" type="text/css" href="styles/style.css"/>
		<link  rel="stylesheet" type="text/css" href="styles/items.css"/>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<title>Mikhail Foenko</title>
	</head>
	<body onload="onload()">


		<div id="splash">
			<span id="splashText">Give me a second to load up... </span>
			<br/>
			<img id="loadingWheel" src="images/loading.gif">
		</div>

		<nav id="drawer">

		</nav>

		<div id="root">
			<div id="about_me"><?include("text/about_me.txt");?></div>
			<!-- <div id="skills"><?include("text/skills.html");?></div> -->
			<div id="projects"><?include("text/projects.html");?></div>
			<div id="contact"><?include("text/contact.html");?></div>
		</div>
		<img id="background" src="images/background3.jpg"/>
		<img id="backgroundBuffer">
 


		<script type="text/javascript">

		function onload(){
			
			// if($("#background").innerHeight > $("#root").outerHeight() )
			// 	$("#background").css("height", $("#root").outerHeight() * 2);

			$("#background, #backgroundBuffer").css("left", -($("#background").innerWidth() - window.innerWidth)/2);
			//$("#background, #backgroundBuffer").css("height", "200%");
			
			$(window).scroll(onScroll);
			
			$("#splash").fadeOut();
		}
		
		function onScroll(){
			 					//Parallax Scrolling
				var scrolledPercent = window.pageYOffset/$("#root").outerHeight();
				$("#background,#backgroundBuffer").css("top", -(($("#background").outerHeight()/*-window.innerHeight*/)*scrolledPercent)+"px");
				
				/*
					//Background Change
				var images = new Array("about_me.jpg","my_projects.jpg","contact.jpg");
				var divs = new Array($("#about_me"),$("#my_projects"),$("#contact"));
				for(var i = divs.length-1;i>=0;i--){

				
					if(divs[i].offset() != null)
						console.log(images[i] + " " + (divs[i].offset().top - window.pageYOffset));
					if(divs[i].offset() != null && divs[i].offset().top - window.pageYOffset + 300 < window.innerHeight*.75){
						if($("#background").attr("src") != "images/"+images[i]){ 
							$("#backgroundBuffer").attr("src","images/"+images[i]);
							$("#backgroundBuffer").css("left", -($("#backgroundBuffer").innerWidth() - window.innerWidth)/2);

							$("#background").clearQueue();
							$("#background").stop();
						$("#background").fadeTo(1000,0, function() {
   						   $("#background").attr("src","images/"+images[i]);
   						   $("#background").css("left", -($("#background").innerWidth() - window.innerWidth)/2);
 							$("#background").css("opacity",1);
 							 })
						
						}

						console.log(images[i]);
						
						return;
					}

				}*/
		}
		
					$(function() {
			  $('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html,body').animate({
			          scrollTop: target.offset().top
			        }, 1000);
			        return false;
			      }
			    }
			  });
			});
		</script>
	</body>
</html>