<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\services\HelperTrait;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    use HelperTrait;
    public function manage(){
        return view('dashboard.about_us');
    }

    public function settingStore(Request $request){


        foreach ($request->type as $index => $value){
            GeneralSetting::updateOrCreate(['key' => $index],['value' => $value]);
        }
        if ($request->hasFile('our_vision_image')){
            $img_name = $this->storeImageByPath($request->file('our_vision_image'),'frontAssets/images/about');
            GeneralSetting::updateOrCreate(['key' => 'our_vision_image'],['value' => $img_name]);
        }

        if ($request->hasFile('our_message_image')){
            $img_name = $this->storeImageByPath($request->file('our_message_image'),'frontAssets/images/about');
            GeneralSetting::updateOrCreate(['key' => 'our_message_image'],['value' => $img_name]);
        }

        if(is_array($request->about_slider)){
            foreach ($request->about_slider as $key => $slider){
                $img_name = $this->storeImageByPath($slider,'frontAssets/images/about');
                GeneralSetting::updateOrCreate(['key' => 'about_slider_'.$key],['value' => $img_name]);
            }
        }

        return back()->with(['success',__('dashboard.item updated successfully')]);
        
    }
}
