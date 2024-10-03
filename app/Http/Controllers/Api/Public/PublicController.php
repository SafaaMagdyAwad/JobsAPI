<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use App\Common;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\JobDataResource;
use App\Http\Resources\LocationResource;
use App\Http\Resources\TestimonialResource;
use App\Mail\ContactMail;
use App\Mail\JobApplyMail;
use App\Models\Category;
use App\Models\Contact;
use App\Models\JobApplication;
use App\Models\JobData;
use App\Models\Location;
use App\Models\NewsLetter;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    use Common;
    public function index()
    {
        $locations = Location::all();
        $categories = Category::all();
        $full_time = JobData::with('company', 'category', 'location')->where('job_nature', 'Full Time')->where('published', 1)->take(3)->get();
        $part_time = JobData::with('company', 'category', 'location')->where('job_nature', 'Part Time')->where('published', 1)->take(3)->get();
        $featured = JobData::with('company', 'category', 'location')->where('published', 1)->latest('like')->limit(3)->get();
        $testimonials = Testimonial::where('published', 1)->get();
        return response()->json([
            'locations' => LocationResource::collection($locations),
            'categories' => CategoryResource::collection($categories),
            'testimonials' => TestimonialResource::collection($testimonials),
            'full_time' => JobDataResource::collection($full_time),
            'part_time' => JobDataResource::collection($part_time),
            'featured' => JobDataResource::collection($featured),
        ], 200);
    }

    public function category()
    {
        $categories = Category::with('jobdata')->get();
        return response()->json([
            'categories' => CategoryResource::collection($categories),
        ], 200);
    }

    public function contactpost(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);
        Contact::create($data);
        Mail::to('Jobs@site.com')->send(new ContactMail($data)); //'Jobs@site.com' is the sender
        return response()->json([
            'success' => 'Message Was Sent Successfully',
        ], 200);
    }
    public function job_detail(string $id)
    {
        $job = JobData::with('company', 'category', 'location')->where('published', 1)->findOrFail($id);
        return response()->json([
            'job' => $job,
        ], 200);
    }
    public function job_list()
    {
        $full_time = JobData::with('company', 'category', 'location')->where('published', 1)->where('job_nature', 'Full Time')->get();
        $part_time = JobData::with('company', 'category', 'location')->where('published', 1)->where('job_nature', 'Part Time')->get();
        $featured = JobData::with('company', 'category', 'location')->where('published', 1)->latest('like')->get();
        return response()->json([
            'full_time' => JobDataResource::collection($full_time),
            'part_time' => JobDataResource::collection($part_time),
            'featured' => JobDataResource::collection($featured),
        ], 200);
    }
    public function jobs()
    {
        $categories = Category::with(['jobdata' => function ($query) {
            $query->take(3);
        }])->latest('updated_at')->take(4)->get();
        return response()->json([
            'categories' => CategoryResource::collection($categories),
        ], 200);
    }
    public function testimonial()
    {
        $testimonials = Testimonial::where('published', 1)->get();
        return response()->json([
            'testimonials' => TestimonialResource::collection($testimonials),
        ], 200);
    }
    public function search(Request $request)
    {
        $jobs = JobData::where('published', 1)->where('title', $request->Keyword)->orWhere('category_id', $request->category_id)->orWhere('location_id', $request->location_id)->get();
        return response()->json([
            'jobs' => JobDataResource::collection($jobs),
        ], 200);
    }
    public function job_apply(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|email|max:50',
            'website' => 'required|string|max:100',
            'cv' => 'required|file',
            'cover_litter' => 'nullable|string',
            'job_id' => 'required|exists:job_data,id',
        ]);
        $data['cv'] = $this->uploadFile($request->cv, "assets/cv");
        JobApplication::create($data); //stores in data base
        $data['job_title'] = JobData::findOrFail($data['job_id'])->title; // finding the job title
        Mail::to('Jobs@site.com')->send(new JobApplyMail($data)); //'Jobs@site.com' is the sender

        // JobApplicationJob::dispatch( $data);
        // dd($data);
        return response()->json([
            'message' => 'Email sent successfully!'
        ], 200);
    }
    public function like_job(JobData $job)
    {
        $job->update([
            'like' => $job->like + 1,
        ]);
        return response()->json([
            'data' => new JobDataResource($job),
            'message' => 'a like was added to this job successfully!',
        ], 200);
    }
    public function categoryJobs(Category $category)
    {
        $jobs = JobData::where('category_id', $category->id)->where('published', 1)->get();
        return response()->json([
            'jobs' => JobDataResource::collection( $jobs),
        ], 200);
    }
    public function newsLetter(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
        ]);
        $data['active'] = 1;
        NewsLetter::create($data);
        //there will be a command that selects all active emails and send them notifications to visit the site
        return response()->json([
            'message' => 'Email was registered successfully!'
        ], 200);
    }
}
