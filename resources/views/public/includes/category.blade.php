<!-- Category Start -->
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Explore By Category</h1>
        <div class="row g-4">
            @foreach ($categories as $category)
                
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="cat-item rounded p-4" href="{{ route('categoryJobs',$category) }}">
                    <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                    <h6 class="mb-3">{{$category->category}}</h6>
                    <p class="mb-0"> {{ $category->job()->count() }} Vacancy</p>
                </a>
            </div>
            @endforeach
           
        </div>
    </div>
</div>
<!-- Category End -->