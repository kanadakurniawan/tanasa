<!DOCTYPE html>
<html lang="en">
<?php
$judul = array("Language Writing System","River, Time and Space","Beacon of Revival","The Uncharted Network","Heart of Books","The Platform","Network Space","Field of Oases");  
$subjudul = array("Museum of World Writing, Songdo, 2017","Yeoinaru Ferry Terminal, Seoul, 2017","Suncheon Art Platform, 2016","New AARCH, Aarhus, 2016","Varna Public Library, 2015","White Garden’s Arcade, Moscow, 2016","Smart Co-Working Space, Shanghai, 2015","Beersheba Daycare Centre, 2012");

?>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1" /> 
	 
	<title>davintanasa+associates</title>
	<meta property="og:image" content="https://dvntns.com/images/slides/01.jpg" />
    <meta property="og:image:secure_url" content="https://dvntns.com/images/slides/01.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:alt" content="davintanasa+associates" />
	<meta NAME="author" CONTENT="davintanasa+associates">
	<meta NAME="Description" CONTENT="If you would like to contact us, please send an e-mail to this following address: office(at)dvntns.com">
	<meta NAME="Classification" CONTENT="If you would like to contact us, please send an e-mail to this following address: office(at)dvntns.com">
	<meta NAME="Geography" CONTENT="Jalan Suprapto IV No.39, Pontianak 78122, Kalimantan barat, Indonesia">
	<meta NAME="Language" CONTENT="english">
	<meta NAME="Copyright" CONTENT="davintanasa+associates">
	<meta NAME="distribution" CONTENT="Global">
	<meta NAME="zipcode" CONTENT="78116">
	<meta NAME="city" CONTENT="Pontianak">
	<meta NAME="country" CONTENT="Indonesia">
	<link rel="shortcut icon" href="https://dvntns.com//images/logo.png" /> 
	<link rel="apple-touch-icon" href="https://dvntns.com//images/logo.png" />
	<!-- Stylesheets & Fonts --> 
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" /> 
	<link href="{{ asset('frontend/css/plugins.css') }}" rel="stylesheet"> 
	<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet"> 
	<link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet"> 
	<link href="{{ asset('frontend/images/sss/sss.css') }}" rel="stylesheet"> 
	<link href="{{ asset('frontend/css/CustomSlider.css') }}" rel="stylesheet"/>
	<link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet"> 
	<script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/CustomSlider.js') }}"></script>

<style>
/* fade slider */

.slides {
    margin:0px auto;
    overflow:hidden;
    position:relative;
    width:100%;
}
.slides ul {
    list-style:none;
    position:relative;
	padding:0px;
}


/* keyframes #anim_slides */
@-webkit-keyframes anim_slides {
    0% {
        opacity:0;
    }
    6% {
        opacity:1;
    }
    24% {
        opacity:1;
    }
    30% {
        opacity:1;
    }
    100% {
        opacity:1;
    }
}
@-moz-keyframes anim_slides {
    0% {
        opacity:0;
    }
    6% {
        opacity:1;
    }
    24% {
        opacity:1;
    }
    30% {
        opacity:1;
    }
    100% {
        opacity:1;
    }
}

/* keyframes #anim_tulisan */
@-webkit-keyframes anim_tulisan {
    0% {
        opacity:0;
    }
    6% {
        opacity:1;
    }
    24% {
        opacity:1;
    }
    30% {
        opacity:1;
    }
    100% {
        opacity:1;
    }
}
@-moz-keyframes anim_tulisan {
    0% {
        opacity:0;
    }
    6% {
        opacity:1;
    }
    24% {
        opacity:1;
    }
    30% {
        opacity:1;
    }
    100% {
        opacity:1;
    }
}

.slides ul li {
    opacity:0;
    position:absolute;
    top:0;
	

    /* css3 animation */
    -webkit-animation-name: anim_slides;
    -webkit-animation-duration: 48.0s;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-direction: normal;
    -webkit-animation-delay: 0;
    -webkit-animation-play-state: running;
    -webkit-animation-fill-mode: forwards;

    -moz-animation-name: anim_slides;
    -moz-animation-duration: 48.0s;
    -moz-animation-timing-function: linear;
    -moz-animation-iteration-count: infinite;
    -moz-animation-direction: normal;
    -moz-animation-delay: 0;
    -moz-animation-play-state: running;
    -moz-animation-fill-mode: forwards;
}

.slides {
    opacity:0;
	

    /* css3 animation */
    -webkit-animation-name: anim_slides;
    -webkit-animation-duration: 24.0s;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: 1;
    -webkit-animation-direction: normal;
    -webkit-animation-delay: 0;
    -webkit-animation-play-state: running;
    -webkit-animation-fill-mode: forwards;

    -moz-animation-name: anim_slides;
    -moz-animation-duration: 24.0s;
    -moz-animation-timing-function: linear;
    -moz-animation-iteration-count: 1;
    -moz-animation-direction: normal;
    -moz-animation-delay: 0;
    -moz-animation-play-state: running;
    -moz-animation-fill-mode: forwards;
}

#tulisan {
    opacity:0;

    /* css3 animation */
    -webkit-animation-name: anim_tulisan;
    -webkit-animation-duration: 24.0s;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: 1;
    -webkit-animation-direction: normal;
    -webkit-animation-delay: 0;
    -webkit-animation-play-state: running;
    -webkit-animation-fill-mode: forwards;

    -moz-animation-name: anim_tulisan;
    -moz-animation-duration: 24.0s;
    -moz-animation-timing-function: linear;
    -moz-animation-iteration-count: 1;
    -moz-animation-direction: normal;
    -moz-animation-delay: 0;
    -moz-animation-play-state: running;
    -moz-animation-fill-mode: forwards;
}

/* css3 delays */
.slides ul  li:nth-child(2), .slides ul  li:nth-child(2) div {
    -webkit-animation-delay: 6.0s;
    -moz-animation-delay: 6.0s;
}
.slides ul  li:nth-child(3), .slides ul  li:nth-child(3) div {
    -webkit-animation-delay: 12.0s;
    -moz-animation-delay: 12.0s;
}
.slides ul  li:nth-child(4), .slides ul  li:nth-child(4) div {
    -webkit-animation-delay: 18.0s;
    -moz-animation-delay: 18.0s;
}
.slides ul  li:nth-child(5), .slides ul  li:nth-child(5) div {
    -webkit-animation-delay: 24.0s;
    -moz-animation-delay: 24.0s;
}
.slides ul  li:nth-child(6), .slides ul  li:nth-child(6) div {
    -webkit-animation-delay: 30.0s;
    -moz-animation-delay: 30.0s;
}
.slides ul  li:nth-child(7), .slides ul  li:nth-child(7) div {
    -webkit-animation-delay: 36.0s;
    -moz-animation-delay: 36.0s;
}
.slides ul  li:nth-child(8), .slides ul  li:nth-child(8) div {
    -webkit-animation-delay: 42.0s;
    -moz-animation-delay: 42.0s;
}
.slides ul li img {
    display:block;
}

/* keyframes #anim_titles */
@-webkit-keyframes anim_titles {
    0% {
        left:100%;
        opacity:0;
    }
    5% {
        left:10%;
        opacity:1;
    }
    20% {
        left:10%;
        opacity:1;
    }
    25% {
        left:100%;
        opacity:0;
    }
    100% {
        left:100%;
        opacity:0;
    }
}
@-moz-keyframes anim_titles {
    0% {
        left:100%;
        opacity:0;
    }
    5% {
        left:10%;
        opacity:1;
    }
    20% {
        left:10%;
        opacity:1;
    }
    25% {
        left:100%;
        opacity:0;
    }
    100% {
        left:100%;
        opacity:0;
    }
}
.slides ul li img {
	width: 100%;
}
.slides ul li div {
    //background-color:#000000;
    //border-radius:10px 10px 10px 10px;
    //box-shadow:0 0 5px #FFFFFF inset;
    color:#000;
    font-size:13px;
	text-align:center;
    //left:50%;
    margin:50px auto 0;
    //padding:20px;
    position:absolute;
    top:70%;
    width:100%;

    /* css3 animation 
    -webkit-animation-name: anim_titles;
    -webkit-animation-duration: 24.0s;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-direction: normal;
    -webkit-animation-delay: 0;
    -webkit-animation-play-state: running;
    -webkit-animation-fill-mode: forwards;

    -moz-animation-name: anim_titles;
    -moz-animation-duration: 24.0s;
    -moz-animation-timing-function: linear;
    -moz-animation-iteration-count: infinite;
    -moz-animation-direction: normal;
    -moz-animation-delay: 0;
    -moz-animation-play-state: running;
    -moz-animation-fill-mode: forwards;*/
}
#tulisan {	
	margin-bottom:140px;
}

#tulisan>p {
  margin-bottom: 0em; 
  font-size: 13px;
  line-height: 23px;
  text-align: justify;
  color:#000;
  text-justify: inter-word;
}
p {
  color:#000;
}
  
a:hover, a:focus, a:active {
    text-decoration: none;
    outline: none;
    color: #000;
}
.footernya {
    position: fixed;
    bottom: -100px;
	background-color:#fff;
	margin-bottom:0px;
}
#header {
    position: fixed;
    top: 0;
	background-color:#fff;
}
#page-content{
    padding: 0px 0 40px 0;

	margin-top:100px;
	margin-bottom:30px;
}
::-webkit-scrollbar {
display: none;
} 

.judul-gambar{
	margin-top:15px;
	line-height: 100%;
	text-align : center;
	font-size:12px; 
	font-family: 'Times New Roman', Times, serif; 
	letter-spacing: 2px;
	background-color:#fff;
}
.subjudul-gambar{
	margin-top:5px;
	font-size:10px; 
	color:grey;
	text-align : center;
	background-color:#fff;
}
.copyrightnya{
	text-align:left;
	color:#BEBAB6;
	font-family: 'Times New Roman', Times, serif; 
	font-size:10px;
	height:5px;
	margin-bottom:20px;
}
.alamat{
	margin-top:30px;
}
.alamat>p{
	text-align:left;
    font-size: 10px;
    line-height: 11px;
    margin-bottom: 0px;
	
}
.judulatas {
	margin:20px 0px 20px 0px; 
	height: 100px;
	padding-bottom:30px; 
	background-color:#fff;
}
#header #header-wrap #logo {
    float: left;
    font-size: 28px;
    position: relative;
    z-index: 1;
    transition: all .4s ease-in-out;
    height: 70px;
}
#slides{
	margin-bottom: 0px; 
}
.sidebar {
    margin-bottom: 0px;
}
.judul>a:hover {
    text-decoration: underline;
}
.subjudul-konten{
	margin-top:10px; 
	opacity: 1;
	color:#000;
	font-size:13px; 
	font-family: 'Times New Roman', Times, serif;
	letter-spacing: 1px;
	
}
#tulisan>table p{  
  font-size: 13px;

    margin-bottom: 0em;
  line-height: 23px;
	
	
}

table {
    margin-bottom: 0em;
}
.sidebar:before {
    border-right-width: 0px;	
    border-left-width: 0px;
}
.sidebar-both .content + .sidebar:before {
    border-left-width: 0px;
}

.kelas-td{
	vertical-align: top;
	width:40px
}
@media (min-width: 992px){
.container {
    width: 962px;
}
}
	</style>
	


</head>

<body>

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header" class="header-logo-center header-no-sticky">
            <div id="header-wrap">
                <div class="container"> <!--Logo-->
					
                    <div  class="judulatas" onclick="sembunyikan()" id="logo">
                        <div class="judul" style="font-family: 'Times New Roman', Times, serif; font-size:14px; margin:auto; padding:auto;letter-spacing: 3px;"><a style="margin-left:-10px" href="#">davin tanasa + associates</a></div>
                    </div>
					
                    <!--End: Logo-->

                     <!--Top Search Form-->
                    <!--end: Top Search Form-->

                    <!--Header Extras-->
                  

                    <!--END: NAVIGATION-->
                </div>
            </div>
        </header>
        <!-- end: Header -->

        <!-- Content -->
        <section id="page-content" class="sidebar-both">
            <div class="container">
                <div class="row">
                    <!-- Sidebar-->
                    <div class="sidebar col-md-3">
					
                    </div>
                    <div class="content col-md-6"> 
						<div id="slides">
							<div class="slides">
							<div id="mySlider" class="cs-container">
								<div class="cs-wrapper">
									<!-- First slide -->
									<?php 
									for ($x = 1; $x < 9; $x++) { 
									$y = $x-1;
									?>
										<div class="cs-slide">
											<img class="cs-image" src="https://dvntns.com/images/slides/0<?php echo $x; ?>.jpg" />
											
											<div class="judul-gambar"><?php echo $judul[$y]; ?></div>
											<div class="subjudul-gambar"><?php echo $subjudul[$y]; ?></div>										
									</div>
									<?php
									} 
									?>
									<!-- First slide -->
									
									<!-- Other slides here -->
								</div>
								<a class="cs-prev"></a>
								<a class="cs-next"></a>
							</div>  
							</div>  
						</div>
						<div id="tulisan" style="display : none;">
							<p class="subjudul-konten">curriculum vitae</p> 
							<p>Davin Tanasa (1985) graduated from University of Melbourne with Master of Architecture in 2010, thesis work with VEIL (Victorian Eco-Innovation Lab) selected as one of top five representative projects for exhibition and featured on the website. In 2014 worked on the construction of Harbin Music Hall in Harbin by Arata Isozaki + HuQian Partners (Arata Isozaki awarded Pritzker Architecture Prize in 2019).</p> 
							<p style="margin-top:10px;">In 2015 started own office ‘davin tanasa + associates’. In 2017 awarded 3rd Prize for ‘Yeouinaru Ferry Terminal’ in Seoul, Korea, international jury chaired by Alejandro Zaera-Polo and Ryue Nishizawa; and awarded 4th Prize for ‘National Museum of World Writing’ in Songdo, Korea, international jury chaired by Odile Decq.</p> 
						<!--	
						perubahan desember 2019
							<p>Davin Tanasa [1985] studied at Taylor&#8217;s College in Malaysia and University of Melbourne in Australia.</p>
							<p style="margin-top:10px;">In 2006 attained BArch, final-year work selected as representative Finalist for BlueScope Steel Glenn Murcutt Student Prize. In 2008 worked at Woods Bagot in Melbourne. From 2009 to 2010 proceeded to study at University of Melbourne and attained MArch with Victorian Eco-Innovation Lab (VEIL), thesis work selected in top five for exhibition and featured on website.</p>
							<p style="margin-top:10px;">In 2011 entry for international academic competition by Council of Tall Building and Urban Habitat (CTBUH) awarded Special Mention in Seoul, Korea. From 2011 to 2013 worked in various offices in Singapore and Shanghai, China. In 2014 worked on the construction of Harbin Music Hall in HeiLongJiang, China by Arata Isozaki + HuQian Partners.</p>
							<p style="margin-top:10px;">In 2015 started own office ‘davin tanasa + associates’.</p>
						-->	
							<p style="margin-top:30px;" class="subjudul-konten">awards</p>
							<!--			
							<p>2017&nbsp; &nbsp; Yeoinaru Ferry Terminal, Seoul  [3rd Prize]</p>
							<p style="text-indent:40px">National Museum of World Writing, Songdo  [Honorable Mention]</p> 
							<p>2016&nbsp; &nbsp; White Garden&#8217;s Arcade, Moscow  [Shortlisted]</p>
							<p>2015&nbsp; &nbsp; Varna Public Library  [Shortlisted]</p>
							<p style="text-indent:40px">Smart Co-Working Space, Shanghai  [Shortlisted]</p>
							-->
							
							<table style="width:100%">
							  <tr>
								<td class="kelas-td"><p>2017</p></td>
								<td>
									<p>Yeouinaru Ferry Terminal, Seoul, Korea  [3rd Prize]</p>
									<p>National Museum of World Writing, Songdo, Korea  [4th Prize]</p>
								</td>  
							  </tr>
							  <tr>
								<td class="kelas-td"><p>2016</p></td>
								<td><p>White Garden’s Arcade, Moscow, Russia  [Shortlist]</p></td>
							  </tr>
							  <tr>
								<td class="kelas-td"><p>2015</p></td>
								<td>
									<p>Varna Public Library, Varna, Bulgaria  [Shortlist]</p>
								
								</td>
							  </tr>	
							  
							</table>
							
							<!--
							<p class="subjudul-konten">academic awards</p>
								
							<p>2012&nbsp; &nbsp; Yaroslavl Social Housing Revolution Competition ‘Honorable Mention’</p>
							<p>2011&nbsp; &nbsp; CTBUH International Student Competition ‘Special Mention’</p>
							<p>2008&nbsp; &nbsp; Australia CV08 Student Competition (in collaboration with Clement Guek) ‘Shortlisted’</p>
							<p style="margin-bottom:100px;">2007&nbsp; &nbsp; BlueScope Steel Glenn Murcutt Student Prize ‘Finalist’</p>
							
							<table style="width:100%">
							  <tr>
								<td class="kelas-td"><p>2012</p></td>
								<td><p>Social Housing Revolution competition in Yaroslavl, Russia  [Honorable Mention]</p></td>
							  </tr>
							  <tr>
								<td class="kelas-td"><p>2011</p></td>
								<td><p>CTBUH International Student Competition - Conference in Seoul [Special Mention]</p></td>
							  </tr>
							  <tr>
								<td class="kelas-td"><p>2008</p></td>
								<td><p>CV08 student competition (collaboration with Clement Guek), Australia  [Shortlisted]</p></td>
							  </tr>							  
							  <tr>
								<td class="kelas-td"><p>2007</p></td>
								<td><p>BlueScope Steel Glenn Murcutt Student Prize, Australia  [Finalist]</p></td>
							  </tr>
							  
							</table>-->
						</div>
						
					</div>
					<div class="sidebar col-md-3">
                        <div class="pinOnScroll">

                        </div>
                    </div>
					
				</div>	
			</div>	
        </section>
			<section id="page-content" class="sidebar-both footernya">
			<div class="container">
				<div class="row">
                    <div class="sidebar col-md-3">
					
                    </div>
					<div  class="content col-md-6">
						<div>
							<div class="alamat">
								<p>Jalan Suprapto IV No.38, Pontianak 78122, Kalimantan Barat, Indonesia. 
								If you would like to contact us, please send an email to this following address: office(at)dvntns.com</p>
							</div>
							<div class="copyrightnya">
								(c) davin tanasa + associates
							</div>
						</div>
					</div>
					<div class="sidebar col-md-3">
                        <div class="pinOnScroll">

                        </div>
                    </div>
				</div>
            </div>
        </section>
        <!-- end: Content -->
        <!-- Footer -->
        <!-- end: Footer -->

    </div>
    <!-- end: Wrapper -->

    <!-- Go to top button -->
    <a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a>

 <!--Plugins-->

 <script src="{{ asset('frontend/js/plugins.js') }}"></script>

<!--Template functions-->
 <script src="{{ asset('frontend/js/functions.js') }}"></script> 
	<script>
window.onload = function(){ 
	var tinggi03 = $(".slides").outerHeight(true); 	
    var h = window.innerHeight-180;
	var marginatas = (h-tinggi03)/2-20;
	document.getElementById("slides").style.marginTop = marginatas + "px";
};
function sembunyikan() {
    var x = document.getElementById("slides");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    var y = document.getElementById("tulisan");
    if (y.style.display === "none") {
        y.style.display = "block";
    } else {
        y.style.display = "none";
    }
}
$(document).ready(function(){ // better to use $(document).ready(function(){
    $('#logo').on('click touchstart', function() {
		var v = document.getElementById("slides");
		if (v.style.display === "none") {
			v.style.display = "block";
		} else {
			v.style.display = "none";
		}
		var z = document.getElementById("tulisan");
		if (z.style.display === "none") {
			z.style.display = "block";
		} else {
			z.style.display = "none";
		}
    });
});	

new CustomSlider({
  sliderId: 'mySlider',
  displayTime: 12000,
  transitionEffect: 'fade',
  transitionDuration: 2,
  pauseOnHover: true,
  autoStart: true,
  useSwipe: true,
  sideBtnAreaWidth: '50%',
  sideBtnGradientBG: false,
  sideBtnOpacity: 0.5,
  sideBtnHoverOpacity: 0.85,
  sideBtnTransitionDuration: 0.15,
  sideBtnArrowColor: '#FFFFFF',
  sideBtnArrowHeight: 0,
  sideBtnArrowWidth: 0,
  sideBtnArrowStrokeWidth: 4,
  sideBtnBG: 'none',
  sideBtnBGwidth: 32,
  sideBtnBGheight: 42,
  sideBtnBGfilled: true,
  sideBtnBGcolor: '#000000',
  sideBtnBGborderRadius: 4,
  sideBtnBGborderWidth: 0,
  sideBtnBGborderColor: '#FFFFFF',
  sideBtnHasShadow: false,
  sideBtnShadowDeviation: 2,
  sideBtnShadowOffsetX: 2,
  sideBtnShadowOffsetY: 2,
  sideBtnShadowOpacity: 0.4,
  controlColor: 'rgba(217, 217, 217, 0)',
  controlHeight: 0,
  controlSeparation: 0,
  controlBorderWidth: 0,
  controlBorderColor: '#000000',
  activeControlColor: '#878787',
  activeControlBorderColor: '#000000',
  controlsVerticalPosition: 'inside',
  controlsBottomDistance: '5%',
  controlsTopDistance: '12px',
  controlsShadow: 'none',
  controlsShadowDeviation: 1,
  controlsShadowOffsetX: 1,
  controlsShadowOffsetY: 1,
  controlsShadowOpacity: 0.4
});

	</script>
</body>

</html>
