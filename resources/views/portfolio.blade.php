<section class="page-section bg-light" id="portfolio">
    <div class="text-center">
        <h2 class="section-heading text-uppercase" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Portfolio</h2>
        <h3 class="section-subheading text-muted" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Here's what I do.</h3>
    </div>
    <div class="container">
        <div class="row">
            @foreach (\App\Models\Modal::all() as $modal)
                @include('modal', ['modal' => $modal])
            @endforeach
        </div>
    </div>
</section>
