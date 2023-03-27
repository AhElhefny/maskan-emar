<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use App\Models\User;
use App\Models\ServicePhotos;
use App\Http\services\HelperTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Validator;
use Illuminate\Support\Str;

class ServiceController extends Controller
{

    use HelperTrait;

    public function index()
    {

        if (\request()->ajax()) {

            $services = Service::get();

            return DataTables::of($services)->make(true);
        }

        return view('dashboard.services.list');
    }

    public function create()
    {

        return view('dashboard.services.create');
    }

    public function store(Request $request)
    {

        $rules = [

            'image' => ['image', 'mimes:png', 'max:2048'],
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        }

        $data = $request->except(['_token']);

        if ($request->file('image')) {

            $data['image'] = $this->storeImage($request->file('image'), 'services');
        }

        $service = Service::create($data);
        if ($request->hasFile('photo')) {
            $gallary = $request->file('photo');
            foreach ($gallary as $photo) {
                $name = Str::random(6) . '_' . $photo->getClientOriginalExtension();
                $extension = strtolower($photo->getClientOriginalExtension());
                if ($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "gif") {
                    $galary = new ServicePhotos();
                    $galary->photo = $name;
                    $galary->service_id = $service->id;
                    $galary->save();
                    $dest = 'dashboardAssets/images/services/';
                    $photo->move($dest, $name);
                }
            }
        }

        return redirect()->route('admin.services.index')->with(['success' => __('dashboard.item added successfully')]);
    }

    public function show(Service $service)
    {

        return view('dashboard.services.show', ['service' => $service]);
    }

    public function edit(Service $service)
    {

        return view('dashboard.services.edit', ['service' => $service]);
    }

    public function update(Request $request, $id)
    {

        $service = Service::find($id);
        $data = $request->except(['_token']);

        if ($request->hasFile('image')) {

            $data['image'] = $this->storeImage($request->file('image'), 'services');
        }

        if ($request->hasFile('photo')) {
            $gallary = $request->file('photo');
            foreach ($gallary as $photo) {
                $name = Str::random(6) . '_' . $photo->getClientOriginalExtension();
                $extension = strtolower($photo->getClientOriginalExtension());
                if ($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "gif") {
                    $galary = new ServicePhotos();
                    $galary->photo = $name;
                    $galary->service_id = $id;
                    $galary->save();
                    $dest = 'dashboardAssets/images/services/';
                    $photo->move($dest, $name);
                }
            }
        }

        $service->update($data);

        return redirect()->route('admin.services.index')->with(['success' => __('dashboard.item updated successfully')]);
    }

    public function destroy(Service $service)
    {

        $service->delete();

        return back()->with(['success' => __('dashboard.item deleted successfully')]);
    }

    public function destroyServiceImage($id)
    {
        $image = ServicePhotos::find($id);
        if(!$image){
            return back()->with(['success'=> __('dashboard.no such data with this id')]);
        }
        // unlink(asset('dashboardAssets/images/services/'.$image->photo));
        $image->delete();
        return back()->with(['success' => __('dashboard.item deleted successfully')]);
    }
}
