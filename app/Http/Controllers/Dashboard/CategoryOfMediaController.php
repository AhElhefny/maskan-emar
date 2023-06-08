<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\CategoryOfMedia;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class CategoryOfMediaController extends Controller
{
    public function index()
    {

        if (\request()->ajax()) {

            $cats = CategoryOfMedia::all();

            return DataTables::of($cats)->make(true);
        }

        return view('dashboard.media.categories');
    }

    public function store(Request $request)
    {
        $rules = [
            'name_ar' => ['required', 'min:3'],
            'name_en' => ['required', 'min:3']
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        }
        $data = $validator->validated();
        CategoryOfMedia::create($data);
        return back()->with(['success' => __('dashboard.item added successfully')]);
    }

    public function edit($id)
    {
        $cat = CategoryOfMedia::find($id);
        if (!$cat) {
            return back()->with(['success' => __('dashboard.no such data with this id')]);
        }
        return view('dashboard.media.categories', ['cat' => $cat]);
    }

    public function update(Request $request, $id)
    {
        $cat = CategoryOfMedia::find($id);
        if (!$cat) {
            return back()->with(['success' => __('dashboard.no such data with this id')]);
        }

        $rules = [
            'name_ar' => ['required', 'min:3', Rule::unique('category_of_media', 'name_ar')],
            'name_en' => ['required', 'min:3', Rule::unique('category_of_media', 'name_en')]
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        }
        $data = $validator->validated();
        $cat->update($data);
        return redirect()->route('admin.media.category.index')->with(['success' => __('dashboard.item updated successfully')]);
    }
}
