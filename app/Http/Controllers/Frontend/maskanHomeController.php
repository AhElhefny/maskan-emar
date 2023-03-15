<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Group;
use App\Models\OurWork;
use App\Models\Service;
use App\Models\Team;
use App\Models\Review;
use App\Models\Media;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class maskanHomeController extends Controller
{

    public function index()
    {
        return view('front.index');
    }

    public function services()
    {
        return view('front.services');
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

    public function gallery()
    {
        return view('front.gallery');
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
