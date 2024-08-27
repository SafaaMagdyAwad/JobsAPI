<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Common;
use App\Mail\ContactMail;
use App\Models\Category;
use App\Models\Job;
use App\Models\JobApplication;
use App\Models\Location;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    //
    use Common;
    public function index(){
        $locations=Location::all();
        $categories=Category::all();
        $full_time=Job::with('company','category','location')->where('job_nature','Full Time')->get();
        $part_time=Job::with('company','category','location')->where('job_nature','Part Time')->get();
        $featured=Job::with('company','category','location')->latest('like')->limit(5)->get();
        $testimonials=Testimonial::all();

        return view('public.index',compact('locations','categories','testimonials','full_time','part_time','featured'));
    }
    public function about(){
        return view('public.about');
    }
    public function category(){
        $categories=Category::with('job')->get();

        // dd($categories[0]->job()->count());
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
        Mail::to('Jobs@site.com')->send(new ContactMail($data)); //'R6LARAVEL@site.com' is the sender

        return redirect()->route('public.index');
    }
    public function job_detail(string $id){
        $job=Job::with('company','category','location')->findOrFail($id);
        return view('public.job_detail',compact('job'));
    }
    public function job_list(){
        $full_time=Job::with('company','category','location')->where('job_nature','Full Time')->get();
        $part_time=Job::with('company','category','location')->where('job_nature','Part Time')->get();
        $featured=Job::with('company','category','location')->latest('like')->limit(5)->get();
        // dd($full_time);
        return view('public.job_list',compact('full_time','part_time','featured'));
    }
    public function testimonial(){
        $testimonials=Testimonial::all();
        return view('public.testimonial',compact('testimonials'));
    }
    public function search(Request $request){

        $jobs=Job::where('title',$request->Keyword)->orWhere('category_id',$request->category_id)->orWhere('location_id',$request->location_id)->get();
        // dd($jobs);
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
        JobApplication::create($data);
        return redirect()->route('public.index');

    }
    public function like_job(Job $job){
        //form to apply for the job
        $job->update([
            'like'=>$job->like+1,
        ]);
        return redirect()->route('public.index');
    }
    public function categoryJobs(Category $category){
        //form to apply for the job
        $jobs=Job::where('category_id',$category->id)->get();
        // dd($jobs);
        return view('public.category_job',compact('jobs'));
    }



}
