@php use App\Models\GeneralSetting; @endphp
<x-dashboard.layouts.master title="{{ __('dashboard.manage contact-us') }}">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section class="users-list-wrapper">
                    <x-dashboard.layouts.breadcrumb now="{{ __('dashboard.manage contact-us') }}">
                        <li class="breadcrumb-item"><a
                                href="{{ route('admin.contact.index') }}">{{ __('dashboard.contact-us list') }}</a></li>
                    </x-dashboard.layouts.breadcrumb>
                    <!-- Column selectors with Export Options and print table -->
                    <section id="column-selectors">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">{{ __('dashboard.contact-us settings') }}</h4>
                                    </div>
                                    @if (\Session::get('success'))
                                        <x-dashboard.layouts.message />
                                    @endif
                                    <div class="card-content">
                                        <div class="card-body ">
                                            <form method="POST" action="{{ route('admin.contact.settings.store') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label
                                                                for="type['contact_title_ar']">{{ __('dashboard.contact us title') . ' ' . __('dashboard.in arabic') }}</label>
                                                            <input type="text" class="form-control"
                                                                name="type[contact_title_ar]"
                                                                value="{{ old('type[contact_title_ar]', GeneralSetting::getValueForKey('contact_title_ar')) }}"
                                                                placeholder="{{ __('dashboard.contact us title') . ' ' . __('dashboard.in arabic') }}"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label
                                                                for="type['contact_title_en']">{{ __('dashboard.contact us title') . ' ' . __('dashboard.in english') }}</label>
                                                            <input type="text" class="form-control"
                                                                name="type[contact_title_en]"
                                                                value="{{ old('type[contact_title_en]', GeneralSetting::getValueForKey('contact_title_en')) }}"
                                                                placeholder="{{ __('dashboard.contact us title') . ' ' . __('dashboard.in english') }}"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <fieldset
                                                            class="form-group position-relative has-icon-left input-divider-left">
                                                            <input type="url" name="type[contact_facebook]"
                                                                value="{{ old('type[contact_facebook]', GeneralSetting::getValueForKey('contact_facebook')) }}"
                                                                class="form-control" id="iconLeft3"
                                                                placeholder="Facebook" required>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-facebook"></i>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-6">
                                                        <fieldset
                                                            class="form-group position-relative has-icon-left input-divider-left">
                                                            <input type="url" class="form-control"
                                                                name="type[contact_twitter]"
                                                                value="{{ old('type[contact_twitter]', GeneralSetting::getValueForKey('contact_twitter')) }}"
                                                                id="iconLeft3" placeholder="Twitter" required>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-twitter"></i>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-6">
                                                        <fieldset
                                                            class="form-group position-relative has-icon-left input-divider-left">
                                                            <input type="url" class="form-control"
                                                                name="type[contact_linkedin]"
                                                                value="{{ old('type[contact_linkedin]', GeneralSetting::getValueForKey('contact_linkedin')) }}"
                                                                id="iconLeft3" placeholder="Linkedin" required>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-linkedin"></i>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-6">
                                                        <fieldset
                                                            class="form-group position-relative has-icon-left input-divider-left">
                                                            <input type="url" class="form-control" id="iconLeft3"
                                                                name="type[contact_google]"
                                                                value="{{ old('type[contact_google]', GeneralSetting::getValueForKey('contact_google')) }}"
                                                                placeholder="Google" required>
                                                            <div class="form-control-position">
                                                                <i class="fab fa-google-plus-g"></i>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-6">
                                                        <fieldset
                                                            class="form-group position-relative has-icon-left input-divider-left">
                                                            <input type="url" class="form-control"
                                                                name="type[contact_youtube]"
                                                                value="{{ old('type[contact_youtube]', GeneralSetting::getValueForKey('contact_youtube')) }}"
                                                                id="iconLeft3" placeholder="Youtube" required>
                                                            <div class="form-control-position">
                                                                <i class="fab fa-youtube"></i>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-6">
                                                        <fieldset
                                                            class="form-group position-relative has-icon-left input-divider-left">
                                                            <input type="url" class="form-control"
                                                                name="type[contact_whatsapp]"
                                                                value="{{ old('type[contact_whatsapp]', GeneralSetting::getValueForKey('contact_whatsapp')) }}"
                                                                id="iconLeft3" placeholder="whatsapp" required>
                                                            <div class="form-control-position">
                                                                <i class="fab fa-whatsapp"></i>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-6">
                                                        <fieldset
                                                            class="form-group position-relative has-icon-left input-divider-left">
                                                            <input type="url" class="form-control"
                                                                name="type[contact_snapchat]"
                                                                value="{{ old('type[contact_snapchat]', GeneralSetting::getValueForKey('contact_snapchat')) }}"
                                                                id="iconLeft3" placeholder="snapchat" required>
                                                            <div class="form-control-position">
                                                                <i class="fab fa-snapchat-ghost"></i>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-12">
                                                        <fieldset
                                                            class="form-group position-relative has-icon-left input-divider-left">
                                                            <input type="text" class="form-control"
                                                                name="type[contact_map_iframe]" id="iconLeft3"
                                                                value="{{ old('type[contact_map_iframe]', GeneralSetting::getValueForKey('contact_map_iframe')) }}"
                                                                placeholder="map Iframe" required>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-map-pin"></i>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <button type="submit"
                                                            class="btn btn-primary mr-1 mb-1">{{ __('dashboard.submit') }}</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Column selectors with Export Options and print table -->
                </section>
                <!-- users list ends -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
    @section('script')
    @endsection
</x-dashboard.layouts.master>
