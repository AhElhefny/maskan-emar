<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Rate;
use App\Models\User;
use App\Http\services\HelperTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Validator;

class OurRatesController extends Controller
{
    use HelperTrait;

    public function index()
    {

        if (\request()->ajax()) {

            $rates = Rate::get();

            return DataTables::of($rates)->make(true);
        }

        return view('dashboard.rates.index');
    }

    public function create()
    {

        return view('dashboard.rates.create');
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

            $data['image'] = $this->storeImage($request->file('image'), 'rates');
        }

        $rate = Rate::create($data);

        return redirect()->route('admin.rates.index')->with(['success' => __('dashboard.item added successfully')]);
    }

    public function show(Rate $rate)
    {

        return view('dashboard.rates.show', ['rate' => $rate]);
    }

    public function edit(Rate $rate)
    {

        return view('dashboard.rates.edit', compact('rate'));
    }

    public function update(Request $request, Rate $rate)
    {

        $data = $request->except(['_token']);

        if ($request->hasFile('image')) {

            $data['image'] = $this->storeImage($request->file('image'), $rate->folder);
        }

        $rate->update($data);

        return redirect()->route('admin.rates.index')->with(['success' => __('dashboard.item updated successfully')]);
    }

    public function destroy(Rate $rate)
    {
        $rate->delete();

        return back()->with(['success' => __('dashboard.item deleted successfully')]);
    }
}
