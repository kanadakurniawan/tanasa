@foreach ($dataPortfolio as $index => $portfolio)					
{{-- <div class="modal fade" data-bs-backdrop="true" id="exampleModal{{ ++$index }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content shadow-none">
            <div class="modal-body">
                <img class="img-fluid" src="frontend/images/portfolio/{{ $portfolio->file_name }}.jpg" />	
                <div class="text-center p-2"><small>{{ $portfolio->title }}</small></div>
            </div>
        </div>
    </div>
</div> --}}
<div class="modal fade" id="exampleModal{{ ++$index }}" data-bs-backdrop="true" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content pb-0">
            <div class="modal-body pb-0">
                <img class="img-fluid" src="frontend/images/portfolio/{{ $portfolio->file_name }}.jpg" />	
                <div class="text-center p-2"><small>{{ $portfolio->title }}</small></div>
            </div>
        </div>
    </div>
</div>
@endforeach