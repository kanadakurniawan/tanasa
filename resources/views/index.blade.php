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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" /> 
	<link href="{{ asset('frontend/css/plugins.css') }}" rel="stylesheet"> 
	<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet"> 
	<link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet"> 
	<link href="{{ asset('frontend/images/sss/sss.css') }}" rel="stylesheet"> 
	<link href="{{ asset('frontend/css/CustomSlider.css') }}" rel="stylesheet"/>
	<link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet"> 
	<script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/CustomSlider.js') }}"></script>
</head>

<body>

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header" class="header-logo-center header-no-sticky">
            <div id="header-wrap">
                <div class="container"> 
                    <div  class="judulatas" onclick="sembunyikan()" id="logo">
                        <div class="judul" style="font-family: 'Times New Roman', Times, serif; font-size:14px; margin:auto; padding:auto;letter-spacing: 3px;"><a style="margin-left:-10px" href="#">davin tanasa + associates</a></div>
                    </div>
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
							<p style="margin-top:30px;" class="subjudul-konten">awards</p>							
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

    </div>
    <a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a>
 <script src="{{ asset('frontend/js/plugins.js') }}"></script>
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
