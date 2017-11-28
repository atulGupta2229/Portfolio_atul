<!DOCTYPE html>
<html>
<head>
	<title>Atul Gupta</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="icon/image" href="favicon.png">
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="js/style.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#s1").mouseover(function(){
				$(".prog-bar .s1").css({
					width: "90%", background: "#00E5FF"
				});
				/*$(".prog #htm").text((parseInt($(".prog").css("width"))/parseInt($(".prog-bar").css("width")))*100+'%');*/
			})


			$("#s2").mouseover(function(){
				$(".prog-bar .s2").css({
					width: "60%", background: "#00E5FF"
				});
				/*$(".prog #htm").text((parseInt($(".prog").css("width"))/parseInt($(".prog-bar").css("width")))*100+'%');*/
			})


			$("#s3").mouseover(function(){
				$(".prog-bar .s3").css({
					width: "80%", background: "#00E5FF"
				});
				/*$(".prog #htm").text((parseInt($(".prog").css("width"))/parseInt($(".prog-bar").css("width")))*100+'%');*/
			})


			$("#s4").mouseover(function(){
				$(".prog-bar .s4").css({
					width: "65%", background: "#00E5FF"
				});
				/*$(".prog #htm").text((parseInt($(".prog").css("width"))/parseInt($(".prog-bar").css("width")))*100+'%');*/
			})


			$("#s5").mouseover(function(){
				$(".prog-bar .s5").css({
					width: "50%", background: "#00E5FF"
				});
				/*$(".prog #htm").text((parseInt($(".prog").css("width"))/parseInt($(".prog-bar").css("width")))*100+'%');*/
			})
		})
	</script>
	<script type="text/javascript">
		var ypos, img;
		function para(){
			ypos=window.pageYOffset;
			img=document.getElementById('image');
			img.style.top=ypos * 0.5 + 'px';
			
		}
		window.addEventListener('scroll', para);
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".slide-section").click(function(e){

				var link= $(this).attr("href");

				$('html, body').animate({
					scrollTop: $(link).offset().top
				},1000);				

				e.preventDefault();
			})
		})
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			function demo(){	
			if($(window).scrollTop()>600){
				$("#container-floating").css("display","block");
				$("#container-floating").addClass("bttn");
			}
			else{
				$("#container-floating").css("display","none");
			}
			}
			window.addEventListener('scroll',demo)
		});
	</script>
</head>
<body>
<div class="container-fluid" id="head">
	<div class="banner row">
		<img src="image/O7MF5N0.jpg" width="100%" style="position: absolute;z-index: -2" id="image">
		<div class="col-sm-12">
			<div class="row">
			<div class="col-sm-1">
				
			</div>
			<div class="col-sm-10 nav">
				<div class="col-sm-5">
					<ul>
						<li class="nav-tab">
							<a href="#certification" class="slide-section">Certification</a>
						</li>
						<li class="nav-tab">
							<a href="#skills" class="slide-section">Skills</a>
						</li>
					</ul>
				</div>
				<div class="col-sm-2 text-center">
					<img src="dp.png" width="60%" style="margin-top: -20%;" id="dp">
				</div>
				<div class="col-sm-5">
					<ul>
						<li class="nav-tab">
							<a href="#projects" class="slide-section">Projects</a>
						</li>
						<li class="nav-tab">
							<a href="#contact" class="slide-section">Contact me</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-1">
				
			</div>				
			</div>
			<div class="row">
				<div class="col-sm-4">
					
				</div>
				<div class="col-sm-4 intro">
					<center>
						<span class="amatic" style="font-size: 60px;">I am</span><br>
						<span class="amatic" style="font-size: 100px;line-height: 60%;">Atul Gupta</span><br>
						<span class="amatic" style="font-size: 30px; line-height: 250%">A Web & Android Developer</span>
					</center>					
				</div>
				<div class="col-sm-4">
					
				</div>
			</div>
			<div class="row">
				<div class="col-sm-1">
					
				</div>
				<div class="col-sm-10 info">
					<div class="row">
						<div class="col-sm-5">
							<img src="image/github.png" width="45px">&nbsp; <span style="font-size: 15px;" class="addr"><a href="https://github.com/atulGupta2229">https://github.com/atulGupta2229</a></span>
						</div>
						<div class="col-sm-2 text-center">
							<img width="20%" src="image/fb.png">&nbsp; <img width="20%" src="image/linkedin.png">&nbsp; <img width="20%" src="image/behance.png">
						</div>
						<div class="col-sm-5 text-right">
							<span style="font-size: 15px;" class="addr"><a href="dev.atul2229@outlook.com">dev.atul2229@outlook.com</a></span>&nbsp; <img src="image/email.png" width="45px">
						</div>
					</div>
				</div>
				<div class="col-sm-1">
					
				</div>
			</div>
		</div>
	</div>
	<div class="row" id="skills" style="min-height: 620px; background: #263238; padding-top: 5%;">
		<div class="col-sm-12 text-center">
			<span class="satisfy" style="font-size: 60px;">Skills</span>
			<div class="row">
				<div class="col-sm-1">
					
				</div>
				<div class="col-sm-10 text-left">
					<div class="row">
						<div class="col-sm-6 text-center">
							<img src="image/SkillsDesigning.png" width="60%" class="skill-img">
						</div>
						<div class="col-sm-6" style="padding-top: 1%;padding-left: 15%;">
							<div id="s1">
							<span class="neucha" style="font-size: 1em">HTML</span><br>
							<div class="prog-bar">
								<div class="prog">
									
								</div>
							</div>
							</div>
							<div id="s1">
							<span class="neucha" style="font-size: 1em">HTML</span><br>
							<div class="prog-bar">
								<div class="prog s1" class="ht">
									
								</div>
							</div>
							</div>
							<div id="s2" class="ht">
							<span class="neucha" style="font-size: 1em">CSS</span><br>
							<div class="prog-bar">
								<div class="prog s2">
									
								</div>
							</div>
							</div>
							<div id="s3" class="ht">
							<span class="neucha" style="font-size: 1em">Bootstrap</span><br>
							<div class="prog-bar">
								<div class="prog s3">
									
								</div>
							</div>
							</div>
							<div id="s4" class="ht">
							<span class="neucha" style="font-size: 1em">Javascript</span><br>
							<div class="prog-bar">
								<div class="prog s4">
									
								</div>
							</div>
							</div>
							<div id="s5" class="ht">
							<span class="neucha" style="font-size: 1em">jQuery</span><br>
							<div class="prog-bar">
								<div class="prog s5">
									
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-1">
					
				</div>
			</div>
		</div>
	</div>
	<div class="row" style="min-height: 550px; background: #263238;">
		<div class="col-sm-1">
			
		</div>
		<div class="col-sm-10">
			<div class="row">
				<div class="col-sm-6"  style="padding-top: 1%;padding-left: 15%;">
					<div id="s1">
							<span class="neucha" style="font-size: 1em">HTML</span><br>
							<div class="prog-bar">
								<div class="prog s1" class="ht">
									
								</div>
							</div>
							</div>
							<div id="s2" class="ht">
							<span class="neucha" style="font-size: 1em">CSS</span><br>
							<div class="prog-bar">
								<div class="prog s2">
									
								</div>
							</div>
							</div>
							<div id="s3" class="ht">
							<span class="neucha" style="font-size: 1em">Bootstrap</span><br>
							<div class="prog-bar">
								<div class="prog s3">
									
								</div>
							</div>
							</div>
							<div id="s4" class="ht">
							<span class="neucha" style="font-size: 1em">Javascript</span><br>
							<div class="prog-bar">
								<div class="prog s4">
									
								</div>
							</div>
							</div>
							<div id="s5" class="ht">
							<span class="neucha" style="font-size: 1em">jQuery</span><br>
							<div class="prog-bar">
								<div class="prog s5">
									
								</div>
							</div>
							</div>
			</div>
			<div class="col-sm-6 text-center">
				<img src="image/SkillsDev.png" width="65%" class="skill-img">
			</div>	
			</div>
		</div>
		<div class="col-sm-1">
			
		</div>
		
	</div>
	
	<div class="row" style="background-image: url(image/banner.jpg); background-size: cover; min-height: 550px; padding-top: 4%; padding-bottom: 4%; background-attachment: fixed; background-size: cover;">
		<div class="col-sm-1">
			 
		</div>
		<div class="col-sm-10">
			<div class="row" id="projects">
		<div class="col-sm-12 text-center">
			<center>
				<span class="satisfy" style="font-size: 60px; color: #fafafa; text-shadow: 0px 0px 9px #111;">Projects</span>
			<div class="row ">
		<div class="col-sm-4">
			<div class="card">
				<div class="faces front">
					<div class="pro-img">
						<center>
							<img src="image/parador.PNG" width="100%">
						</center>
					</div>
				</div>
				<div class="faces back">
					<p>
						WebDev
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card">
				<div class="faces front">
					<div class="pro-img">
						<center>
						<img src="image/printBazaar.PNG" width="120%" style="position: relative;z-index: 0">
						<center>
							<span class="neucha" style="color: #f2f2f2; position: absolute;z-index: 999; font-size: 1.5em;top: 200px; left: 28px">
								PrintbazaarOnline
							</span>
						</center>

					</center>
					</div>
					
				</div>
				<div class="faces back">
					<p>
						WebDev
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card">
				<div class="faces front">
					<div class="pro-img">
						<center>
						<img src="image/parador.PNG" width="100%">
					</center>
					</div>
				</div>
				<div class="faces back">
					<p>
						WebDev
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row ">
		<div class="col-sm-4">
			<div class="card">
				<div class="faces front">
					<div class="pro-img">
						<center>
							<img src="image/parador.PNG" width="100%">
						</center>
					</div>
				</div>
				<div class="faces back">
					<p>
						WebDev
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card">
				<div class="faces front">
					<div class="pro-img">
						<center>
						<img src="image/printBazaar.PNG" width="120%" style="position: relative;z-index: 0">
						<center>
							<span class="neucha" style="color: #f2f2f2; position: absolute;z-index: 999; font-size: 1.5em;top: 140px; left: 45px">
								PrintbazaarOnline
							</span>
						</center>

					</center>
					</div>
					
				</div>
				<div class="faces back">
					<p>
						WebDev
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card">
				<div class="faces front">
					<div class="pro-img">
						<center>
						<img src="image/parador.PNG" width="100%">
					</center>
					</div>
				</div>
				<div class="faces back">
					<p>
						WebDev
					</p>
				</div>
			</div>
		</div>
	</div>
</center>

		</div>
	</div>
		</div>
		<div class="col-sm-1">
			
		</div>
	</div>

	<div class="row blog">
		<div class="col-sm-12 text-center">
			<span class="satisfy" style="font-size: 60px; color: #fafafa">My Blog</span>	
			<div class="row">
				<div class="col-sm-2">
			
			</div>
			<div class="col-sm-8" style="padding-top: 0%">
				<button class="btnn neucha" style="font-size: 1.6em">Go to blog</button>
			</div>
		<div class="col-sm-2">
			
		</div>
			</div>	
		</div>
	</div>

	<div class="row certi" id="certification">
		<div class="col-sm-12 text-center">
			<span class="satisfy" style="font-size: 60px; color: #fafafa; text-shadow: 0px 0px 9px #111;">Certifications</span>
			<div class="row">
				<div class="col-sm-1">
					
				</div>
				<div class="col-sm-10">
					<p style="font-size: 2em; background: rgba(0,0,0,0.5); padding: 2% 10% 2% 10%; color: #fafafa; margin-top: 5%;">Wisdom is knowing what to do next,
				 skill is knowing how to do it and virtue is doing it!!</p>	
				 <button class="btnn neucha" style="font-size: 1.6em">View Certificates</button>
				</div>
				<div class="col-sm-1">
					
				</div>
			</div>
		</div>
	</div>

	<div class="row contact" id="contact">
		<div class="col-sm-12">
			
		</div>
	</div>
	<div id="container-floating">
		<div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create">
			<a title='Navigation' href="#head" class="slide-section">
				<p class="plus"  style="animation: none!important; color: #fafafa; font-size: 1.7em;">
					<img src="image/up.png" width="70%">
				</p>
			</a>
		</div>
</div>
</body>
</html>