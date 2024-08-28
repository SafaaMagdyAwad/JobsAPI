<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{route('job.index')}}" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
        <h1 class="m-0 text-primary">{{ __('admin/main.title') }}</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('admin/main.jobs') }}</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{route('job.index')}}" class="dropdown-item">{{ __('admin/main.jobs') }}</a>
                    <a href="{{route('job.create')}}" class="dropdown-item">{{ __('admin/main.add_job') }}</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('admin/main.testimonials') }}</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{route('testimonials.index')}}" class="dropdown-item">{{ __('admin/main.testimonials') }}</a>
                    <a href="{{route('testimonials.create')}}" class="dropdown-item"> {{ __('admin/main.add_testimonial') }}</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('admin/main.locations') }}</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{route('location.index')}}" class="dropdown-item">{{ __('admin/main.locations') }}</a>
                    <a href="{{route('location.create')}}" class="dropdown-item">{{ __('admin/main.add_location') }}</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('admin/main.categories') }}</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{route('categories.index')}}" class="dropdown-item">{{ __('admin/main.categories') }}</a>
                    <a href="{{route('categories.create')}}" class="dropdown-item"> {{ __('admin/main.add_category') }}</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('admin/main.companies') }}</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{route('company.index')}}" class="dropdown-item">{{ __('admin/main.companies') }}</a>
                    <a href="{{route('company.create')}}" class="dropdown-item"> {{ __('admin/main.add_company') }}</a>
                </div>

            </div>
            <div class="nav-item dropdown">
                <a  class="nav-link " href="{{ route('jobApplication.index') }}" >{{ __('admin/main.jobApplications') }}</a>


            </div>

        </div>
    </div>
</nav>
<!-- Navbar End -->
