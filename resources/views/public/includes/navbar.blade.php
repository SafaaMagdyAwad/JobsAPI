<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{route('public.index')}}" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
        <h1 class="m-0 text-primary">JobEntry</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{route('public.index')}}" class="nav-item nav-link active">Home</a>
            <a href="{{route('public.about')}}" class="nav-item nav-link">About</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Jobs</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{route('public.job_list')}}" class="dropdown-item">Job List</a>
                    <a href="{{route('public.jobs')}}" class="dropdown-item">Jobs & categories</a>

                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{route('public.category')}}" class="dropdown-item">Job Category</a>
                    <a href="{{route('public.testimonial')}}" class="dropdown-item">Testimonial</a>

                </div>
            </div>
            <a href="{{route('public.contact')}}" class="nav-item nav-link">Contact</a>
        </div>
        <a href="{{ route('job.create') }}" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Post A Job<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->
