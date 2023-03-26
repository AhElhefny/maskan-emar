@php use App\Models\GeneralSetting; @endphp
<div id="backgrounds">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{__('dashboard.sections background')}}</h4>
        </div>
        <div class="card-content">
            <div class="card-body ">
                <form method="POST" action="{{route('admin.generalSetting.store')}}" enctype="multipart/form-data" >
                    @csrf
                    <input type="hidden" name="background">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="rate_video">Rate Video</label>
                                <input type="file" class="form-control" name="rate_video" required >
                                @error('rate_video')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <x-dashboard.generalSettings.uploadImage i="3" name="pageHome_about_image" folder="about/" />
                        <x-dashboard.generalSettings.uploadImage i="4" name="pages_header_image" folder="header/"/>

                    </div>
                    <x-dashboard.generalSettings.submitButton id="background-save" />
                </form>
            </div>
        </div>
    </div>
</div>


