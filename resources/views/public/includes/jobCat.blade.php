<!-- Jobs Start -->
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Browse Jobs By Categories</h1>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                @foreach ($categories as $category)

                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 {{ $loop->first?'active':'' }}" data-bs-toggle="pill" href="#tab-{{ $category->id }}">
                        <h6 class="mt-n1 mb-0">{{ $category->category }}</h6>
                    </a>
                </li>
                @endforeach
            </ul>
            <div class="tab-content">
                @foreach ($categories as $category)

                    <div id="tab-{{ $category->id }}" class="tab-pane fade show p-0 {{ $loop->first?'active':'' }}">

                        @foreach ($category->job as $job)

                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="{{ asset('assets/images/jobs/'.$job->image) }}" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">{{ $job->title }}</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $job->location->location }}</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{ $job->job_nature }}</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>${{ $job->salary_from }} - ${{ $job->saary_to }}</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <form action="{{ route('job.like',$job) }}" method="POST">
                                                @csrf
                                                @method('put')

                                                <button type="submit" class="btn btn-light btn-square me-3" ><i class="far fa-heart text-primary"></i></button>
                                            </form>
                                            <a class="btn btn-primary" href="{{ route('public.job_detail',$job) }}">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>{{ $job->date_line }}</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                @endforeach

                <a class="btn btn-primary py-3 px-5" href="{{ route('public.job_list') }}">Browse More Jobs</a>

            </div>
        </div>
    </div>
</div>
<!-- Jobs End -->
