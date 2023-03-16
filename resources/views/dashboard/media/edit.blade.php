<x-dashboard.layouts.master title="{{ __('dashboard.edit media') }}">
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <x-dashboard.layouts.breadcrumb now="{{ __('dashboard.edit media') }}">
                <li class="breadcrumb-item"><a href="{{ route('admin.media.index') }}">{{ __('dashboard.media') }}</a>
                </li>
            </x-dashboard.layouts.breadcrumb>
            <div class="offset-md-3 col-md-6 col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ __('dashboard.edit media') }}</h4>
                    </div>

                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" method="POST"
                                action="{{ route('admin.media.update', $data->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email-id-icon">{{ __('dashboard.table image') }}</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="file" id="email-id-icon" class="form-control"
                                                        name="image">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-image"></i>
                                                    </div>
                                                </div>
                                                @error('image')
                                                    <span class="text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-icon">{{ __('dashboard.category') }}</label>
                                                <select class="form-control" name="name_en">
                                                    <option value="interior"  {{$data->name_en == 'interior'?'selected':''}}>{{__('dashboard.interior')}}</option>
                                                    <option value="building" {{$data->name_en == 'building'?'selected':''}}>{{__('dashboard.building')}}</option>
                                                    <option value="spaces" {{$data->name_en == 'spaces'?'selected':''}}>{{__('dashboard.spaces')}}</option>
                                                </select>
                                                </div>
                                                @error('name_en')
                                                    <span class="text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit"
                                                class="btn btn-primary mr-1 mb-1">{{ __('dashboard.submit') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-dashboard.layouts.master>
