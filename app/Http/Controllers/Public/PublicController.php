<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Common;
use App\Mail\ContactMail;
use App\Mail\JobApplyMail;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Job;
use App\Models\JobApplication;
use App\Models\Location;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    use Common;
    public function index(){
        $locations=Location::all();
        $categories=Category::all();
        $full_time=Job::with('company','category','location')->where('job_nature','Full Time')->take(3)->get();
        $part_time=Job::with('company','category','location')->where('job_nature','Part Time')->take(3)->get();
        $featured=Job::with('company','category','location')->latest('like')->limit(3)->get();
        $testimonials=Testimonial::all();
        return view('public.index',compact('locations','categories','testimonials','full_time','part_time','featured'));
    }
    public function about(){
        return view('public.about');
    }
    public function category(){
        $categories=Category::with('job')->get();
        return view('public.category',compact('categories'));
    }
    public function contact(){
        return view('public.contact');
    }
    public function contactpost(Request $request){

        $data=$request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);
        Contact::create($data);
        Mail::to('Jobs@site.com')->send(new ContactMail($data)); //'Jobs@site.com' is the sender
        return redirect()->route('public.index');
    }
    public function job_detail(string $id){
        $job=Job::with('company','category','location')->findOrFail($id);
        return view('public.job_detail',compact('job'));
    }
    public function job_list(){
        $full_time=Job::with('company','category','location')->where('job_nature','Full Time')->take(3)->get();
        $part_time=Job::with('company','category','location')->where('job_nature','Part Time')->take(3)->get();
        $featured=Job::with('company','category','location')->latest('like')->limit(3)->get();
        return view('public.job_list',compact('full_time','part_time','featured'));
    }
    public function jobs(){
        $categories = Category::with(['job' => function($query) {
            $query->take(3);
        }])->latest('updated_at')->take(4)->get();
        return view('public.jobs',compact('categories'));
    }
    public function testimonial(){
        $testimonials=Testimonial::all();
        return view('public.testimonial',compact('testimonials'));
    }
    public function search(Request $request){
        $jobs=Job::where('title',$request->Keyword)->orWhere('category_id',$request->category_id)->orWhere('location_id',$request->location_id)->get();
        return view('public.searched',compact('jobs'));
    }
    public function job_apply(Request $request ){
        $data=$request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'website' => 'required|string',
            'cv' => 'required|file',
            'cover_litter' => 'nullable|string',
            'job_id' => 'required|exists:jobs,id',
        ]);
        $data['cv']=$this->uploadFile($request->cv,"assets/cv");
        JobApplication::create($data);//stores in data bade
        $data['job']= Job::findOrFail($data['job_id'])->title;// finding the job title
        Mail::to('Jobs@site.com')->send(new JobApplyMail($data)); //'Jobs@site.com' is the sender
        return redirect()->route('public.index');

    }
    public function like_job(Job $job){
        $job->update([
            'like'=>$job->like+1,
        ]);
        return redirect()->route('public.index');
    }
    public function categoryJobs(Category $category){
        $jobs=Job::where('category_id',$category->id)->get();
        return view('public.category_job',compact('jobs'));
    }



}
