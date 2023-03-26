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

class ServiceController extends Controller
{
    
    use HelperTrait;

    public function index()
    {

       if (\request()->ajax()) {

           $services= Service::get();

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

                'image' => ['image','mimes:png', 'max:2048'],
             ];

             $validator = Validator::make($request->all(),$rules);

              if($validator->fails()){
                  return back()->withInput()->withErrors($validator->errors());
              }

              $data = $request->except(['_token']);

              if($request->file('image')){

                   $data['image'] = $this->storeImage($request->file('image'),'services');
               }
 
                 $service = Service::create($data);

              if ($request->hasFile('galary')) {

                   $gallary = $request->file('galary');

                   for($i = 0 ; $i < count($gallary); $i++)
                   {

                      if(!empty($gallary[$i])) {

                            $galary = new ServicePhotos();
                            $galary->service_id = $service->id;
                            $galary->photo =  time().'_'.$gallary[$i]->getClientOriginalExtension();
                            $galary->save();
                            $dest = 'dashboardAssets/images/services/';
                            $gallary[$i]->move($dest , $galary->photo);
                     }
                 } 
            }
              
           return redirect()->route('admin.services.index')->with(['success' => __('dashboard.item added successfully')]);
    } 

    public function show(Service $service)
    {

        return view('dashboard.services.show',['service'=>$service]);
    }

    public function edit(Service $service)
    {

        return view('dashboard.services.edit',['service'=>$service]);
        
    }

    public function update(Request $request ,$id)
    {
           
          $service=Service::find($id);
        
          $data = $request->except(['_token']);

          if($request->hasFile('image')){

               $data['image'] = $this->storeImage($request->file('image'),'services');
           }

           if($request->hasFile('galary')) {

             $gallary = $request['galary'];

             for($i =0; $i < count($gallary); $i++)
              {

                  if(!empty($gallary[$i])) {

                       $galary = new ServicePhotos ;
                       $galary->service_id = $id ;
                       $galary->photo =  time().'_'.$gallary[$i]->getClientOriginalExtension();
                       $galary->save();
                       $dest = 'dashboardAssets/images/services/';
                       $gallary[$i]->move($dest , $galary->photo);
                 }
             } 
          }

           $service->update($data);

          return redirect()->route('admin.services.index')->with(['success'=>__('dashboard.item updated successfully')]);
    }

    public function destroy(Service $service)
    {

        $service->delete();

        return back()->with(['success'=>__('dashboard.item deleted successfully')]);

    }


}

