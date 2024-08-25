<!-- Search Start -->
<div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
    <div class="container">
        <div class="row g-2">
            
        <form method="POST" action="{{ route('search') }}">
            @csrf
            <div class="col-md-10">
                <div class="row g-2">
                    <div class="col-md-4">
                        <input type="text" class="form-control border-0" placeholder="Keyword" />
                    </div>
                    <div class="col-md-4">
                        <select class="form-select border-0" name="category_id">
                            <option selected>Category</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->category}}</option>
                            @endforeach
                            
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select class="form-select border-0" name="location_id">
                            <option selected>Location</option>
                            @foreach ($locations as $location)
                            <option value="{{$location->id}}">{{$location->location}}</option>
                            @endforeach
                            
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <button class="btn btn-dark border-0 w-100">Search</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- Search End -->