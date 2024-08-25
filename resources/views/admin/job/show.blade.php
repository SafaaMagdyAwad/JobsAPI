
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Job Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet">
  <style>
    * {
      font-family: "Lato", sans-serif;
    }
  </style>
</head>

<body>
  <main>
    <div class="container my-5">
      <div class="bg-light p-5 rounded">
        <div class="card bg-light border-0">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-10 position-relative overflow-hidden">
              <img src="{{asset('assets/images/jobs/'.$job->image)}}"
                alt="" class="card-img"
                style="position: absolute; margin: auto; top: 50%; transform: translateY(-50%); width: 100%;height: 100%; object-fit: cover;" />
            </div>
            <div class="col-lg-8 col-md-6 col-12 card-body">
              <div class="mb-4 text-center py-2">
                <h2 class="fw-bold bg-light card-header">{{$job->title}}</h2>
              </div>
              <div class="mb-4">
                <p class="card-text">
                  <span class="fw-bold">Job Nature:</span> {{$job->job_nature}}
                </p>
              </div>
              <div class="mb-4">
                <p class="card-text">
                  <span class="fw-bold">Vacancy:</span> {{$job->vacancy}}
                </p>
              </div>
              <div class="mb-4">
                <p class="card-text">
                  <span class="fw-bold">salary:</span> {{$job->salary_from}}$ : {{$job->salary_to}}$
                </p>
              </div>
              <div class="mb-4">
                <p class="card-text">
                  <span class="fw-bold">description:</span> {{$job->description}}
                </p>
              </div>
              <div class="mb-4">
                <p class="card-text">
                  <span class="fw-bold">responsability:</span> {{$job->responsability}}
                </p>
              </div>
              <div class="mb-4">
                <p class="card-text">
                  <span class="fw-bold">qualification:</span> {{$job->description}}
                </p>
              </div>
              <div class="mb-4">
                <p class="card-text">
                  <span class="fw-bold">date_line:</span> {{$job->date_line}}
                </p>
              </div>
              <div class="mb-4">
                <p class="card-text">
                  <span class="fw-bold">location:</span> {{$job->location->location}}
                </p>
              </div>
              <div class="mb-4">
                <p class="card-text">
                  <span class="fw-bold">Category:</span> {{$job->category->category}}
                </p>
              </div>
              <div class="mb-4">
                <p class="card-text">
                  <span class="fw-bold">company:</span> {{$job->company->company}}
                </p>
              </div>
              <div class="mb-4">
                <p class="card-text">
                  <span class="fw-bold">Published:</span> {{$job->published?"YES":"NO"}}
                </p>
              </div>
              
              <div class="text-md-end">
                <a href="{{route('job.index')}}" class="btn mt-4 btn-primary text-white fs-5 fw-bold border-0 py-2 px-md-5">
                  Back to All Jobs
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>