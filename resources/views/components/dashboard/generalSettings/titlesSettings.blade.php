<?php use App\Models\GeneralSetting?>
<div class="card" id="titles">
    <div class="card-header">
        <h4 class="card-title">{{__('dashboard.sections titles')}}</h4>
    </div>
    <div class="card-content">
        <div class="card-body ">
            <form method="POST" action="{{route('admin.generalSetting.store')}}" enctype="multipart/form-data" >
                @csrf
                <input type="hidden" name="titles">
                <div class="row">
                    {{--                    about us            --}}
                    <div class="col-6">
                        <div class="form-group">
                            <label for="type['pageHome_about_title_ar']">{{__('dashboard.about us title').' '.__('dashboard.in arabic')}}</label>
                            <input type="text" class="form-control" name="type[pageHome_about_title_ar]" value="{{old("type[pageHome_about_title_ar]",GeneralSetting::getValueForKey('pageHome_about_title_ar'))}}"  placeholder="{{__('dashboard.about us title').' '.__('dashboard.in arabic')}}" required >
                            @error('type.review_title_ar')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="type['pageHome_about_title_en']">{{__('dashboard.about us title').' '.__('dashboard.in english')}}</label>
                            <input type="text" class="form-control" name="type[pageHome_about_title_en]" value="{{old("type[pageHome_about_title_en]",GeneralSetting::getValueForKey('pageHome_about_title_en'))}}"  placeholder="{{__('dashboard.about us title').' '.__('dashboard.in english')}}" required >
                            @error('type.pageHome_about_title_en')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="type['pageHome_about_desc_ar']">{{__('dashboard.about us desc').' '.__('dashboard.in arabic')}}</label>
                            <input type="text" class="form-control" name="type[pageHome_about_desc_ar]" value="{{old("type[pageHome_about_desc_ar]",GeneralSetting::getValueForKey('pageHome_about_desc_ar'))}}"  placeholder="{{__('dashboard.about us desc').' '.__('dashboard.in arabic')}}" required >
                            @error('type.pageHome_about_desc_ar')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="type['pageHome_about_desc_en']">{{__('dashboard.about us desc').' '.__('dashboard.in english')}}</label>
                            <input type="text" class="form-control" name="type[pageHome_about_desc_en]" value="{{old("type[pageHome_about_desc_en]",GeneralSetting::getValueForKey('pageHome_about_desc_en'))}}"  placeholder="{{__('dashboard.about us desc').' '.__('dashboard.in english')}}" required >
                            @error('type.pageHome_about_desc_en')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    {{--                   end about us            --}}
                    {{--                   gallery            --}}
                    <div class="col-6">
                        <div class="form-group">
                            <label for="type['gallery_title_ar']">{{__('dashboard.gallery title').' '.__('dashboard.in arabic')}}</label>
                            <input type="text" class="form-control" name="type[gallery_title_ar]" value="{{old("type[gallery_title_ar]",GeneralSetting::getValueForKey('gallery_title_ar'))}}"  placeholder="{{__('dashboard.gallery title').' '.__('dashboard.in arabic')}}" required >
                            @error('type.gallery_title_ar')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="type['gallery_title_en']">{{__('dashboard.gallery title').' '.__('dashboard.in english')}}</label>
                            <input type="text" class="form-control" name="type[gallery_title_en]" value="{{old("type[gallery_title_en]",GeneralSetting::getValueForKey('gallery_title_en'))}}"  placeholder="{{__('dashboard.gallery title').' '.__('dashboard.in english')}}" required >
                            @error('type.gallery_title_en')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    {{--                   end gallery            --}}
                    {{--                   services            --}}
                    <div class="col-6">
                        <div class="form-group">
                            <label for="type['services_title_ar']">{{__('dashboard.services title').' '.__('dashboard.in arabic')}}</label>
                            <input type="text" class="form-control" name="type[services_title_ar]" value="{{old("type[services_title_ar]",GeneralSetting::getValueForKey('services_title_ar'))}}"  placeholder="{{__('dashboard.services title').' '.__('dashboard.in arabic')}}" required >
                            @error('type.services_title_ar')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="type['services_title_en']">{{__('dashboard.services title').' '.__('dashboard.in english')}}</label>
                            <input type="text" class="form-control" name="type[services_title_en]" value="{{old("type[services_title_en]",GeneralSetting::getValueForKey('services_title_en'))}}"  placeholder="{{__('dashboard.services title').' '.__('dashboard.in english')}}" required >
                            @error('type.services_title_en')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    {{--                   end services            --}}
                </div>
                <x-dashboard.generalSettings.submitButton />
            </form>
        </div>
    </div>
</div>
