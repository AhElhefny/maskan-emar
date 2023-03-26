<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class GenegralSettingController extends Controller
{
    public function generalSettings(){
        return view('dashboard.general_settings');
    }

    public function store(Request $request){
        if($request->has('generalSettings')){
            $rules = [
              'type.website_name_ar' => ['required','min:5','max:100'],
              'type.website_name_en' => ['required','min:5','max:100'],
              'type.contact_number'=> ['required','min:9','max:12'],
              'logo1' => [Rule::requiredIf(!GeneralSetting::getValueForKey('logo1')),'image'],
              'favicon2' => [Rule::requiredIf(!GeneralSetting::getValueForKey('favicon2')),'image'],
            ];

            $validator = Validator::make($request->all(),$rules);
            if ($validator->fails()){
                return back()->withInput()->withErrors($validator->errors());
            }
            foreach ($request->type as $index => $value){
                GeneralSetting::updateOrCreate(['key' => $index],['value' => $value]);
            }
            if ($request->copyright){
                GeneralSetting::updateOrCreate(['key' => 'copyright'],['value' => $request->copyright]);
            }
            if ($request->hasFile('logo1')){
                $file = $request->file('logo1');
                $filename = '01_logo.'.$file->getClientOriginalExtension();
                $file->move(public_path('frontAssets/images/logo'), $filename);
                GeneralSetting::updateOrCreate(['key' => 'logo1'],['value' => $filename]);
            }

            if ($request->hasFile('favicon2')){
                $file = $request->file('favicon2');
                $filename = '02_favicon.'.$file->getClientOriginalExtension();
                $file->move(public_path('frontAssets/images/logo'), $filename);
                GeneralSetting::updateOrCreate(['key' => 'favicon2'],['value' => $filename]);
            }

        }

        if ($request->has('footer') || $request->has('titles')){
            $rules = [
              'type.*' => $request->footer?['required','min:5','max:255']:['required','min:3','max:100'],
            ];
            $validator = Validator::make($request->all(),$rules);

            if ($validator->fails()){
                return back()->withInput()->withErrors($validator->errors());
            }
            foreach ($request->type as $index => $value){
                GeneralSetting::updateOrCreate(['key' => $index],['value' => $value]);
            }
        }

        if ($request->has('background')){
            $rules = [
                'rate_video' => ['required','mimes:mp4,ogx,oga,ogv,ogg,webm','max:20000'],
                'pageHome_about_image3' => [Rule::requiredIf(GeneralSetting::getValueForKey('pageHome_about_image3') == null),'image'],
                'pages_header_image4' => [Rule::requiredIf(GeneralSetting::getValueForKey('pages_header_image4') == null),'image'],
            ];
            $validator = Validator::make($request->all(),$rules);

            if ($validator->fails()){
                return back()->withInput()->withErrors($validator->errors());
            }
            if ($request->hasFile('rate_video')){
                $file = $request->file('rate_video');
                $filename = 'rate_video.'.$file->getClientOriginalExtension();
                $file->move(public_path('frontAssets/videos'), $filename);
                GeneralSetting::updateOrCreate(['key' => 'rate_video'],['value' => $filename]);
            }

            if ($request->hasFile('pageHome_about_image3')){
                $file = $request->file('pageHome_about_image3');
                $filename = 'pageHome_about_image.'.$file->getClientOriginalExtension();
                $file->move(public_path('frontAssets/images/about'), $filename);
                GeneralSetting::updateOrCreate(['key' => 'pageHome_about_image3'],['value' => $filename]);
            }

            if ($request->hasFile('pages_header_image4')){
                $file = $request->file('pages_header_image4');
                $filename = 'pages_header_image.'.$file->getClientOriginalExtension();
                $file->move(public_path('frontAssets/images/header'), $filename);
                GeneralSetting::updateOrCreate(['key' => 'pages_header_image4'],['value' => $filename]);
            }
        }

        return back()->with(['success' => __('dashboard.item updated successfully')]);
    }
}
