<x-dashboard.layouts.master title="{{ __('dashboard.media') }}">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <x-dashboard.layouts.breadcrumb now="{{ __('dashboard.media') }}">
            </x-dashboard.layouts.breadcrumb>
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ __('dashboard.media') }}</h4>
                    </div>
                    @if (\Session::get('success'))
                        <x-dashboard.layouts.message />
                    @endif
                    <div class="card-content">
                        <div class="card-body">
                            <div class="table-responsive overflow-auto">
                                <table class="table table-striped" id="media-table">
                                    <thead>
                                        <a href="{{ route('admin.media.create') }}"><button
                                                class="mb-2 btn btn-primary"><i
                                                    class="mr-1 feather icon-plus"></i>{{ __('dashboard.add media') }}</button></a>
                                        <tr>
                                            <th>{{ __('dashboard.category') }}</th>
                                            <th>{{ __('dashboard.table image') }}</th>
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
            </div>
        </div>
    </div>
    <!-- END: Content-->
    @section('script')
        <script>
            // window.jsPDF = window.jspdf.jsPDF;
            // window.html2canvas = html2canvas;
            $(document).ready(function() {
                $('#media-table').DataTable({
                    processing: true,
                    serverSide: true,
                    lengthMenu: [10, 20, 40, 60, 80, 100],
                    pageLength: 10,
                    ajax: {
                        url: "media",
                        headers: {
                            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: function(d) {
                            d.page = 1;
                        }
                    },
                    "paging": true,
                    order: [
                        [2, 'desc']
                    ],
                    columns: [{
                            data: 'category',
                            render:function(data){
                                return data?data.name:'-'
                            }
                        },
                        {
                            data: 'image',
                            render: function(data) {
                                return `<img width="100" height="80" src="${data}">`
                            }
                        },

                        {
                            data: 'created_at',
                            name: 'created_at'
                        },
                        {
                            data: 'id',
                            render: function(data, two, three) {
                                let edit = 'media/' + data + '/edit';

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
    @endsection
</x-dashboard.layouts.master>
