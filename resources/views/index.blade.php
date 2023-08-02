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
                    <div class="sidebar col-md-2">
					
                    </div>
                    <div class="content col-md-8"> 
						<div id="slides">
							<!-- Button trigger modal -->

							<div class="row">
								@for ($x = 1; $x < 9; $x++)
								@php
								$y = $x-1;
								@endphp
								<div class="col-3 p-1">
									<img class="img-fluid" data-toggle="modal" data-target="#exampleModal{{ $x }}" src="frontend/images/slides/0{{ $x }}.jpg" />									
								</div>
								@endfor
							</div>
							<div class="col-2"></div>
							
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
	@include('partials.script-footer')
	@for ($x = 1; $x < 9; $x++)
	@php
	$y = $x-1;
	@endphp						
	<div class="modal fade" data-bs-backdrop="true" id="exampleModal{{ $x }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered " role="document">
			<div class="modal-content shadow-none">
				<div class="modal-body">
					<img class="img-fluid" src="frontend/images/slides/0{{ $x }}.jpg" />	
					<div class="text-center p-2"><small>judul</small></div>
				</div>
			</div>
		</div>
	</div>
	@endfor
</body>

</html>
