<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Group;
use App\Models\OurWork;
use App\Models\Service;
use App\Models\Team;
use App\Models\Rate;
use App\Models\Media;
use App\Http\Controllers\Controller;
use App\Models\CategoryOfMedia;
use Illuminate\Http\Request;

class maskanHomeController extends Controller
{

    public function index()
    {

        $services = Service::take(6)->get();
        $rates= Rate::get();
        $sponsors = Group::take(6)->get();

        return view('front.index',compact('services','rates','sponsors'));

    }

    public function services()
    {
        $services = Service::get();

        return view('front.services',compact('services'));
    }

    public function serviceDetails($id)
    {

        $service = Service::find($id);

        if (!$service) {

            return back()->with(['success' => __('dashboard.something went wrong')]);
        }

        return view('front.serviceDetails', ['service' => $service]);
    }

    public function team()
    {
        $teams = Team::all();

        return view('front.team', ['teams' => $teams]);
    }

    public function gallery(Request $request)
    {
        $gallery = Media::with(['category'])->when($request->filter??null,function($q)use($request){
            $q->whereHas('category',function($q)use($request){
                $q->where('id',$request->filter);
            });
        })->get();
        $cats = CategoryOfMedia::all();
        return view('front.gallery',['galleries' => $gallery,'cats' => $cats]);
    }

    public function sponsors()
    {
        $sponsors = Group::all();
        return view('front.sponsors', ['sponsors' => $sponsors]);
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function about()
    {
        return view('front.about');
    }
}
