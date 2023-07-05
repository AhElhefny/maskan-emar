<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\services\HelperTrait;
use App\Models\ContactUs;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class ContactUsController extends Controller
{
    use HelperTrait;

    public function index()
    {
        if (\request()->ajax()) {

            return DataTables::of(ContactUs::all())->make(true);
        }

        return view('dashboard.contact-us.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => ['required', 'min:3', 'max:100'],
            'email' => ['required', 'email', 'max:100'],
            'subject' => ['required', 'min:10', 'max:100'],
            'feedBack' => ['required', 'min:10'],
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        }
        $data = $request->except(['_token']);

        ContactUs::create($data);

        return back()->with(['success' => '']);
    }


    public function manage()
    {
        return view('dashboard.contact-us.manage');
    }


    public function settingStore(Request $request)
    {
        foreach ($request->type as $index => $type) {
            GeneralSetting::updateOrCreate(['key' => $index], ['value' => $type]);
        }
        return back()->with(['success' => __('dashboard.item updated successfully')]);
    }

    public function update(Request $request, ContactUs $contactUs)
    {
        //
    }

    public function destroy(ContactUs $contactUs)
    {

        $contactUs->delete();

        return back()->with(['success' => __('dashboard.item deleted successfully')]);
    }
}
