@foreach ($dataPortfolio as $index => $portfolio)					
<div class="modal fade" data-bs-backdrop="true" id="exampleModal{{ ++$index }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content shadow-none">
            <div class="modal-body">
                <img class="img-fluid" src="frontend/images/portfolio/{{ $portfolio->file_name }}.jpg" />	
                <div class="text-center p-2"><small>{{ $portfolio->title }}</small></div>
            </div>
        </div>
    </div>
</div>
@endforeach