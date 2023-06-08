<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\services\HelperTrait;
use App\Http\Controllers\Controller;
use App\Models\CategoryOfMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Media;


class MediaController extends Controller
{

    use HelperTrait;

    public function index()
    {

        if (\request()->ajax()) {

            $media = Media::with(['category'])->get();

            return DataTables::of($media)->make(true);
        }

        return view('dashboard.media.index');
    }

    public function create()
    {
        $cats = CategoryOfMedia::all();
        return view('dashboard.media.create',['cats' => $cats]);
    }

    public function store(Request $request)
    {

        $rules = [
            'image' => ['required', 'image'],
            'category_id' => ['required', Rule::exists('category_of_media', 'id')]
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        }
        $data = $request->except(['_token']);

        if ($request->file('image')) {

            $data['image'] = $this->storeImage($request->file('image'), 'media');
        }

        Media::create($data);

        return redirect()->route('admin.media.index')->with(['success' => __('dashboard.item updated successfully')]);
    }


    public function edit($id)
    {

        $data = Media::find($id);
        if (!$data) {
            return back()->with(['success' => __('dashboard.no such data with this id')]);
        }
        $cats = CategoryOfMedia::all();

        return view('dashboard.media.edit',['cats' => $cats,'data' => $data]);
    }

    public function update(Request $request, $id)
    {

        $rules = [
            'category_id' => ['required', Rule::exists('category_of_media', 'id')]
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        }
        $data = $request->except(['_token']);

        if ($request->hasFile('image')) {

            $data['image'] = $this->storeImage($request->file('image'), 'media');
        }
        $media = Media::find($id);
        if (!$media) {
            return back()->with(['success' => __('dashboard.no such data with this id')]);
        }
        $media->update($data);

        return redirect()->route('admin.media.index')->with(['success' => __('dashboard.item updated successfully')]);
    }

    public function destroy(Media $media)
    {

        $media->delete();

        return back()->with(['success' => __('dashboard.item deleted successfully')]);
    }

    
}
