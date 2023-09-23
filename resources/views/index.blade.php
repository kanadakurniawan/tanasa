<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.head')
</head>

<body>

    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Header -->
        <header id="header" class="header-logo-center header-no-sticky">
            <div id="header-wrap">
                <div class="container pt-2"> 
                    <div  class="judulatas mt-5 text-center" onclick="sembunyikan()">
                        <div class="judul"><a href="#"><strong>TANASA & ASSOCIATES</strong></a></div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end: Header -->

        <!-- Content -->
        <section id="page-content" class="sidebar-both pb-0">
            <div class="container mt-3 ">
                <div class="row mt-5 pt-3">
                    <!-- Sidebar-->
                    <div class="sidebar col-md-1">
					
                    </div>
                    <div class="content col-md-10 p-2"> 
						<div id="slides">
							<!-- Button trigger modal -->
							<div class="row">
								{{-- @foreach ($dataPortfolio as $index => $portfolio)
								<div class="col-3 p-1">
									<img class="img-fluid" data-bs-toggle="modal" data-bs-target="#exampleModal{{ ++$index }}" src="frontend/images/portfolio/{{ $portfolio->file_name }}.jpg" />									
								</div>
								@endforeach --}}
								@foreach ($dataPortfolio as $index => $portfolio)
								<div class="portothumbnail col-3 p-3">
									<img class="img-fluid" src="frontend/images/portfolio/{{ $portfolio->file_name }}.jpg" onclick="sembunyikanPorto({{ ++$index }})" />								
								</div>
								<div class="porto{{ $index }} row p-4 mt-5" style="display : none;">
									<div class="col-1"></div>
									<div class="col-10">
										<img class="img-fluid" src="frontend/images/portfolio/{{ $portfolio->file_name }}.jpg" onclick="sembunyikanPorto({{ $index }})"/>									
										<div class="text-center p-2 mt-3 judul-portofolio">{{ $portfolio->title }}</div>			
									</div>
									<div class="col-1"></div>
								</div>
								@endforeach
							</div>
							
						</div>
						<div id="tulisan" style="display : none;">
							<div class="row text-justify mt-2">
								<div class="awardthumbnail col-12 tulisan px-2">
									<p class="judul2 pb-1"><strong>Profile</strong></p>
									<p class="pb-1">Davin Tanasa attained Master of Architecture at University of Melbourne in 2010. Prior to office establishment in 2015, worked at various offices in Melbourne, Singapore and Shanghai. Worked at Arata Isozaki 磯崎新 + HuQian 胡倩 Partners on the construction of Harbin Music Hall in 2014. In 2017 awarded 3rd Prize for &lsquo;Yeouinaru Ferry Terminal&rsquo; in Seoul, jury chaired by Alejandro Zaera-Polo and Ryue Nishizawa 西沢立衛; and awarded 4th Prize for &lsquo;National Museum of World Writing&rsquo; in Songdo, jury chaired by Odile Decq. &nbsp;</p>	
									<p class="judul2 pb-1 pt-5"><strong>Competition Awards</strong></p>
									
									<div class="row px-2">
										
										@foreach ($dataAward as $index => $award)
										<div class="col p-2">
											<img class="img-fluid mb-1" src="frontend/images/award/{{ $award->file_name }}.jpg" onclick="sembunyikanAward({{ ++$index }})" />
											<div class="award text-center p-0 mb-1 mt-2"><p class="m-0">{{ $award->title }}</p></div>
											{{-- <div class="award text-center p-0"><p class="m-1">{{ $award->subtitle }}</p></div>									 --}}
										</div>
										@endforeach

									</div>								
									<p class="judul2 pb-1 pt-5"><strong>Associates</strong></p>
									<p class="pb-1">Lu Sheng / 卢生, Associate Partner</p>			

								</div>
								@foreach ($dataAward as $index => $award)
								<div class="award{{ ++$index }} col-12 p-2" style="display : none;">
									<div class="row">
										<div class="col-1"></div>
										<div class="col-10">
											<img class="img-fluid mb-1" src="frontend/images/award/{{ $award->file_name }}.jpg" onclick="sembunyikanAward({{ $index }})"/>
											<div class="award-thumbnail text-center p-1 mb-1 mt-2"><p class="m-0">{{ $award->subtitle }}</p></div>

										</div>
										<div class="col-1"></div>
									</div>
									{{-- <div class="award text-center p-0"><p>{{ $award->subtitle }}</p></div>									 --}}
								</div>
								@endforeach
							</div>
						</div>
					</div>
					
					<div class="col-1"></div>
					
					
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
