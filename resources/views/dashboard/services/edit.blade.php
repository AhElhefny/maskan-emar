<x-dashboard.layouts.master title="{{ __('dashboard.edit service') }}">
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <x-dashboard.layouts.breadcrumb now="{{ __('dashboard.edit service') }}">
                <li class="breadcrumb-item"><a
                        href="{{ route('admin.services.index') }}">{{ __('dashboard.service list') }}</a></li>
            </x-dashboard.layouts.breadcrumb>
            <div class="offset-md-3 col-md-6 col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ __('dashboard.edit service') }}</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" method="POST"
                                action="{{ route('admin.services.update', $service->id) }}"
                                enctype="multipart/form-data">
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
                                                <label
                                                    for="first-name-icon">{{ __('dashboard.table name') . __('dashboard.in arabic') }}</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="text" id="first-name-icon"
                                                        value="{{ old('name_ar', $service->name_ar) }}"
                                                        class="form-control" name="name_ar"
                                                        placeholder="{{ __('dashboard.table name') . __('dashboard.in arabic') }}">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-grid"></i>
                                                    </div>
                                                </div>
                                                @error('name_ar')
                                                    <span class="text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label
                                                    for="first-name-icon">{{ __('dashboard.table name') . __('dashboard.in english') }}</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="text" id="first-name-icon" class="form-control"
                                                        value="{{ old('name_en', $service->name_en) }}" name="name_en"
                                                        placeholder="{{ __('dashboard.table name') . __('dashboard.in english') }}">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-grid"></i>
                                                    </div>
                                                </div>
                                                @error('name_en')
                                                    <span class="text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label
                                                    for="contact-info-icon">{{ __('dashboard.table description') . __('dashboard.in arabic') }}</label>
                                                <div class="position-relative has-icon-left">
                                                    <textarea rows="5" id="contact-info-icon" class="form-control" name="description_ar"
                                                        placeholder="{{ __('dashboard.table description') . __('dashboard.in arabic') }}">{{ old('description_ar', $service->description_ar) }}</textarea>
                                                    <div class="form-control-position">
                                                        <i class="fa fa-pencil"></i>
                                                    </div>
                                                </div>
                                                @error('description_ar')
                                                    <span class="text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label
                                                    for="password-icon">{{ __('dashboard.table description') . __('dashboard.in english') }}</label>
                                                <div class="position-relative has-icon-left">
                                                    <textarea rows="5" id="password-icon" class="form-control" name="description_en"
                                                        placeholder="{{ __('dashboard.table description') . __('dashboard.in english') }}">{{ old('description_en', $service->description_en) }}</textarea>
                                                    <div class="form-control-position">
                                                        <i class="fa fa-pencil"></i>
                                                    </div>
                                                </div>
                                                @error('description_en')
                                                    <span class="text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email-id-icon">{{ __('dashboard.gallery') }}
                                                    ({{ __('dashboard.add_multiple_pictures') }}) </label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="file" id="email-id-icon" class="form-control"
                                                        name="photo[]" multiple>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-image"></i>
                                                    </div>
                                                </div>
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
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ __('dashboard.Service Images') }}</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body text-center">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('dashboard.table image') }}</th>
                                        <th>{{ __('dashboard.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($service->galary as $key => $photo)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td><img src="{{ asset('dashboardAssets/images/services/' . $photo->photo) }}"
                                                    style="width:78px;height:60px;"></td>
                                            <td>
                                                <form action='{{route('admin.serviceImages.destroy',$photo->id)}}' method='POST' class="image-{{$photo->id}}">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <span class="feather icon-trash text-danger"
                                                    onClick="remove({{$photo->id}},'image')"></span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-dashboard.layouts.master>
