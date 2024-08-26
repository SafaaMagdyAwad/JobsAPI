<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{route('job.index')}}" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
        <h1 class="m-0 text-primary">JobEntry</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Jobs</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{route('job.index')}}" class="dropdown-item">Jobs</a>
                    <a href="{{route('job.create')}}" class="dropdown-item"> add Job</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tetimonials</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{route('testimonials.index')}}" class="dropdown-item">Tetimonials</a>
                    <a href="{{route('testimonials.create')}}" class="dropdown-item"> add Tetimonial</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">locations</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{route('location.index')}}" class="dropdown-item">locations</a>
                    <a href="{{route('location.create')}}" class="dropdown-item"> add location</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">categories</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{route('categories.index')}}" class="dropdown-item">categories</a>
                    <a href="{{route('categories.create')}}" class="dropdown-item"> add category</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">companies</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{route('company.index')}}" class="dropdown-item">companies</a>
                    <a href="{{route('company.create')}}" class="dropdown-item"> add company</a>
                </div>
            </div>

        </div>
    </div>
</nav>
<!-- Navbar End -->
