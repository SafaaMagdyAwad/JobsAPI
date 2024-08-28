<!-- Job Detail Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s" >
    <div class="container">
        <div class="row gy-5 gx-4"  >
            <div class="col-12 col-md-6 col-lg-4">
                <div class="d-flex align-items-center mb-5">
                    <img class="flex-shrink-0 img-fluid border rounded" src="{{ asset('assets/images/jobs/'.$job->image) }}" alt="" style="width: 80px; height: 80px;">
                    <div class="text-start ps-4">
                        <h3 class="mb-3">{{ $job->title }}</h3>
                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $job->location->location }}</span>
                        <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{ $job->job_nature }}</span>
                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>${{ $job->salary_from }} - ${{ $job->salary_to }}</span>
                    </div>
                </div>

                <div class="mb-5">
                    <h4 class="mb-3">Job description</h4>
                    <p>{{ $job->description }}</p>
                    <h4 class="mb-3">Responsibility</h4>
                    <p>{{ $job->responsability }}</p>
                    {{-- <ul class="list-unstyled">
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Dolor justo tempor duo ipsum accusam</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Elitr stet dolor vero clita labore gubergren</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Rebum vero dolores dolores elitr</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Est voluptua et sanctus at sanctus erat</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Diam diam stet erat no est est</li>
                    </ul> --}}
                    <h4 class="mb-3">Qualifications</h4>
                    <p>{{ $job->qualification }}</p>
                    {{-- <ul class="list-unstyled">
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Dolor justo tempor duo ipsum accusam</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Elitr stet dolor vero clita labore gubergren</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Rebum vero dolores dolores elitr</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Est voluptua et sanctus at sanctus erat</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Diam diam stet erat no est est</li>
                    </ul> --}}
                </div>

                <div class="">
                    <h4 class="mb-4">Apply For The Job</h4>
                    <form method="POST" action="{{ route('job_apply') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="job_id" value="{{ $job->id }}">
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control" placeholder="Your Name" name="name">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control" placeholder="Your Email" name="email">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control" placeholder="Portfolio Website" name="website">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="file" class="form-control bg-white" name="cv">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" rows="5" placeholder="Coverletter" name="cover_litter"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Apply Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                    <h4 class="mb-4">Job Summery</h4>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Published On: {{ $job->created_at }}</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: {{ $job->vacancy }} Position</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: {{ $job->job_nature }}</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: ${{ $job->salary_from }} - ${{ $job->salary_to }}</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Location: {{ $job->location->location }}</p>
                    <p class="m-0"><i class="fa fa-angle-right text-primary me-2"></i>Date Line: {{ $job->date_line }}</p>
                </div>
                <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                    <h4 class="mb-4">Company Detail</h4>
                    <p class="m-0">{{ $job->company->company }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Job Detail End -->
