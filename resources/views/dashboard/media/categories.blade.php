<x-dashboard.layouts.master title="{{ __('dashboard.categories') }}">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <x-dashboard.layouts.breadcrumb now="{{isset($cat)?__('dashboard.edit category'): __('dashboard.categories') }}">
                @if (isset($cat))
                    <li class="breadcrumb-item"><a
                            href="{{ route('admin.media.category.index') }}">{{ __('dashboard.categories') }}</a></li>
                @endif
            </x-dashboard.layouts.breadcrumb>
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            {{ isset($cat) ? __('dashboard.edit category') : __('dashboard.add category') }}</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" method="POST"
                                action="{{ isset($cat)?route('admin.media.category.update',$cat->id):route('admin.media.category.store') }}" enctype="multipart/form-data">
                                @csrf
                                @if (isset($cat))
                                    @method('PUT')
                                @endif
                                <div class="form-body">
                                    <div class="row">

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label
                                                    for="first-name-icon">{{ __('dashboard.category') . __('dashboard.in english') }}</label>
                                                <input class="form-control" name="name_en"
                                                    placeholder="{{ __('dashboard.category') . __('dashboard.in english') }}"
                                                    value="{{ !isset($cat) ?'': old('name_ar', $cat->name_ar) }}">
                                            </div>
                                            @error('name_en')
                                                <span class="text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label
                                                    for="first-name-icon">{{ __('dashboard.category') . __('dashboard.in arabic') }}</label>
                                                <input class="form-control" name="name_ar"
                                                    placeholder="{{ __('dashboard.category') . __('dashboard.in arabic') }}"
                                                    value="{{ !isset($cat) ?'': old('name_en', $cat->name_en) }}">
                                            </div>
                                            @error('name_en')
                                                <span class="text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <button type="submit"
                                            class="btn btn-primary mr-1 mb-1">{{ isset($cat) ? __('dashboard.edit') : __('dashboard.submit') }}</button>
                                        @if (!isset($cat))
                                            <button type="reset"
                                                class="btn btn-outline-warning mr-1 mb-1">{{ __('dashboard.reset') }}</button>
                                        @endif
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            @if (!isset($cat))
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ __('dashboard.categories') }}</h4>
                    </div>
                    @if (\Session::get('success'))
                        <x-dashboard.layouts.message />
                    @endif
                    <div class="card-content">
                        <div class="card-body">
                            <div class="table-responsive overflow-auto">
                                <table class="table table-striped" id="catOfMedia-table">
                                    <thead>

                                        <tr>
                                            <th>{{ __('dashboard.table name') }}</th>
                                            <th>{{ __('dashboard.table create date') }}</th>
                                            <th>{{ __('dashboard.actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody class=" ">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    {{-- </div> --}}
    <!-- END: Content-->
    @section('script')
        @if (!isset($cat))
            <script>
                // window.jsPDF = window.jspdf.jsPDF;
                // window.html2canvas = html2canvas;
                $(document).ready(function() {
                    $('#catOfMedia-table').DataTable({
                        processing: true,
                        serverSide: true,
                        lengthMenu: [10, 20, 40, 60, 80, 100],
                        pageLength: 10,
                        ajax: {
                            url: "{{ route('admin.media.category.index') }}",
                            headers: {
                                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                            },
                            data: function(d) {
                                d.page = 1;
                            }
                        },
                        "paging": true,
                        order: [
                            [1, 'desc']
                        ],
                        columns: [{
                                data: 'name',
                                name: 'name'
                            },

                            {
                                data: 'created_at',
                                name: 'created_at'
                            },
                            {
                                data: 'id',
                                render: function(data, two, three) {
                                    let edit = 'category/' + data + '/edit';

                                    return `<div class="btn-group">
                                    <div class="dropdown">
                                        <button class="btn btn-flat-dark dropdown-toggle mr-1 mb-1" type="button" id="dropdownMenuButton700" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ __('dashboard.actions') }}
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton700">
                                            <a class="dropdown-item" href="${edit}"><i class="fa fa-edit mr-1"></i>{{ __('dashboard.edit') }}</a>
                                        </div>
                                    </div>
                                </div>`;
                                }
                            },
                        ]
                    });
                });
            </script>
        @endif
    @endsection
</x-dashboard.layouts.master>
