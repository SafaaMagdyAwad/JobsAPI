
<div class="tab-pane fade show p-0 active">
    @foreach ($jobs as $item)
    <div class="job-item p-4 mb-4">
        <div class="row g-4">
            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                <img class="flex-shrink-0 img-fluid border rounded" src="{{ asset('assets/images/jobs/'.$item->image) }}" alt="" style="width: 80px; height: 80px;">
                <div class="text-start ps-4">
                    <h5 class="mb-3">{{ $item->title }}</h5>
                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $item->location->location }}</span>
                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{ $item->job_nature }}</span>
                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>${{ $item->salary_from }} - ${{ $item->salary_to }}</span>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                <div class="d-flex mb-3">
                    <form action="{{ route('job.like',$item) }}" method="POST">
                        @csrf
                        @method('put')

                        <button type="submit" class="btn btn-light btn-square me-3" ><i class="far fa-heart text-primary"></i></button>
                    </form>
                    <a class="btn btn-primary" href="{{ route('public.job_detail',$item) }}">Apply Now</a>
                </div>
                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: {{ $item->date_line }}</small>
            </div>
        </div>
    </div>
   
    @endforeach
    <a class="btn btn-primary py-3 px-5" href="{{ route('public.category') }}">All Categories</a>
</div>