<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
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
	{{-- <link href="{{ asset('frontend/images/sss/sss.css') }}" rel="stylesheet">  --}}
	{{-- <link href="{{ asset('frontend/css/CustomSlider.css') }}" rel="stylesheet"/> --}}
	<link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet"> 
	<script src="{{ asset('frontend/js/jquery.js') }}"></script>
	<script>
	$(document).ready(function(){
		document.onkeydown = function(evt) {
			evt = evt || window.event;
			var isEscape = false;
			if ("key" in evt) {
				isEscape = (evt.key === "Escape" || evt.key === "Esc");
			} else {
				isEscape = (evt.keyCode === 27);
			}
			if (isEscape) {
				z = $.cookie("z");
				x = $.cookie("x");
				$(z).each(function(index) {
					if ($(this).css('display') == 'none') {
						$(this).fadeIn(x);
					}
					else {
						$(this).hide();
					}
				});

				$('.portothumbnail').each(function(index) {
					if ($(this).css('display') == 'none') {
						$(this).fadeIn(x);
					}
					else {
						$(this).hide();
					}
				});  
			}
		};
	});
	</script>