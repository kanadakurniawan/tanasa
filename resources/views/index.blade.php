<!DOCTYPE html>
<html lang="en">
<?php
$judul = array("Language Writing System","River, Time and Space","Beacon of Revival","The Uncharted Network","Heart of Books","The Platform","Network Space","Field of Oases");  
$subjudul = array("Museum of World Writing, Songdo, 2017","Yeoinaru Ferry Terminal, Seoul, 2017","Suncheon Art Platform, 2016","New AARCH, Aarhus, 2016","Varna Public Library, 2015","White Garden’s Arcade, Moscow, 2016","Smart Co-Working Space, Shanghai, 2015","Beersheba Daycare Centre, 2012");

?>
<head>
	@include('partials.head')
</head>

<body>

    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Header -->
        <header id="header" class="header-logo-center header-no-sticky">
            <div id="header-wrap">
                <div class="container"> 
                    <div  class="judulatas" onclick="sembunyikan()" id="logo">
                        <div class="judul" style="font-family: 'Times New Roman', Times, serif; font-size:14px; margin:auto; padding:auto;letter-spacing: 3px;"><a style="margin-left:-10px" href="#">TANASA & ASSOCIATES</a></div>
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
                    <div class="sidebar col-md-2">
					
                    </div>
                    <div class="content col-md-8"> 
						<div id="slides">
							<!-- Button trigger modal -->
							<div class="row">
								@foreach ($dataPortfolio as $index => $portfolio)
								<div class="col-3 p-1">
									<img class="img-fluid" data-toggle="modal" data-target="#exampleModal{{ ++$index }}" src="frontend/images/portfolio/{{ $portfolio->file_name }}.jpg" />									
								</div>
								@endforeach
							</div>
							
						</div>
						<div id="tulisan" style="display : none;">
							<div class="row text-justify">
								<div class="col-6">
									<p><strong>Profile</strong></p>
									<p>Davin Tanasa attained Master of Architecture at University of Melbourne in 2010. Prior to office establishment in 2015, worked at various offices in Melbourne, Singapore and Shanghai. Worked at Arata Isozaki 磯崎新 + HuQian 胡倩 Partners on the construction of Harbin Music Hall in 2014. &nbsp;</p>
									<p>In 2017 awarded 3rd Prize for &lsquo;Yeouinaru Ferry Terminal&rsquo; in Seoul, jury chaired by Alejandro Zaera-Polo and Ryue Nishizawa 西沢立衛; and awarded 4th Prize for &lsquo;National Museum of World Writing&rsquo; in Songdo, jury chaired by Odile Decq. &nbsp;</p>
									<p><strong>Associates</strong></p>
									<p>Lu Sheng / 卢生, Associate Partner</p>			

								</div>
								<div class="col-6">
									<div class="row">
										@foreach ($dataAward as $index => $award)
										<div class="col-6 p-1">
											<img class="img-fluid" data-toggle="modal" data-target="#exampleModal{{ ++$index }}" src="frontend/images/award/{{ $award->file_name }}.jpg" />
											<div class="text-center p-2"><p>{{ $award->title }}</p></div>
											<div class="text-center p-2"><p>{{ $award->subtitle }}</p></div>									
										</div>
										@endforeach

									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-2"></div>
					<div class="sidebar col-md-3">
                        <div class="pinOnScroll">

                        </div>
                    </div>
					
				</div>	
			</div>	
        </section>
	
	@include('partials.footer')

    </div>
    <a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a>
	@include('partials.script-footer')
	@include('partials.modal')

</body>

</html>
