<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="row">
            @foreach (\App\Models\Modal::all() as $modal)
                @include('modal', ['modal' => $modal])
            @endforeach
        </div>
    </div>
</section>
