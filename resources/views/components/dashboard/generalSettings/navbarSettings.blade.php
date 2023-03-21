<?php use App\Models\GeneralSetting; ?>
<div class="card" id="footer">
    <div class="card-header">
        <h4 class="card-title">{{ __('dashboard.footer') }}</h4>
    </div>
    <div class="card-content">
        <div class="card-body ">
            <form method="POST" action="{{ route('admin.generalSetting.store') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="footer">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label
                                for="type['address_ar']">{{ __('dashboard.table address') . ' ' . __('dashboard.in arabic') }}</label>
                            <input type="text" class="form-control" name="type[address_ar]"
                                value="{{ old('type[address_ar]', GeneralSetting::getValueForKey('address_ar')) }}"
                                placeholder="{{ __('dashboard.table address') . ' ' . __('dashboard.in arabic') }}"
                                required>
                            @error('type.address_ar')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label
                                for="type['address_en']">{{ __('dashboard.table address') . ' ' . __('dashboard.in english') }}</label>
                            <input type="text" class="form-control" name="type[address_en]"
                                value="{{ old('type[address_en]', GeneralSetting::getValueForKey('address_en')) }}"
                                placeholder="{{ __('dashboard.table address') . ' ' . __('dashboard.in english') }}"
                                required>
                            @error('type.address_en')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label
                                for="type['worktime_ar']">{{ __('dashboard.works time') . ' ' . __('dashboard.in arabic') }}</label>
                            <input type="text" class="form-control" name="type[worktime_ar]"
                                value="{{ old('type[worktime_ar]', GeneralSetting::getValueForKey('worktime_ar')) }}"
                                placeholder="{{ __('dashboard.works time') . ' ' . __('dashboard.in arabic') }}"
                                required>
                            @error('type.worktime_ar')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label
                                for="type['worktime_en']">{{ __('dashboard.works time') . ' ' . __('dashboard.in english') }}</label>
                            <input type="text" class="form-control" name="type[worktime_en]"
                                value="{{ old('type[worktime_en]', GeneralSetting::getValueForKey('worktime_en')) }}"
                                placeholder="{{ __('dashboard.works time') . ' ' . __('dashboard.in english') }}"
                                required>
                            @error('type.worktime_en')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label
                                for="type['sales_office_address_ar']">{{ __('dashboard.Sales Office address') . ' ' . __('dashboard.in arabic') }}</label>
                            <input type="text" class="form-control" name="type[sales_office_address_ar]"
                                value="{{ old('type[sales_office_address_ar]', GeneralSetting::getValueForKey('sales_office_address_ar')) }}"
                                placeholder="{{ __('dashboard.Sales Office address') . ' ' . __('dashboard.in arabic') }}"
                                required>
                            @error('type.sales_office_address_ar')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label
                                for="type['sales_office_address_en']">{{ __('dashboard.Sales Office address') . ' ' . __('dashboard.in english') }}</label>
                            <input type="text" class="form-control" name="type[sales_office_address_en]"
                                value="{{ old('type[sales_office_address_en]', GeneralSetting::getValueForKey('sales_office_address_en')) }}"
                                placeholder="{{ __('dashboard.Sales Office address') . ' ' . __('dashboard.in english') }}"
                                required>
                            @error('type.sales_office_address_en')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <x-dashboard.generalSettings.submitButton />
            </form>
        </div>
    </div>
</div>
