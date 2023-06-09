<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2023 Maskan Emar, Developed With Love By <a class="text-bold-800 grey darken-2" href="https://badee.com.sa/" target="_blank">Badee</a></span>
        <span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
    </p>
</footer>
<!-- END: Footer-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- BEGIN: Vendor JS-->
<script src="{{asset('dashboardAssets/app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('dashboardAssets/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('dashboardAssets/app-assets/vendors/js/extensions/tether.min.js')}}"></script>
<script src="{{asset('dashboardAssets/app-assets/vendors/js/extensions/shepherd.min.js')}}"></script>
<script src="{{asset('dashboardAssets/app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{asset('dashboardAssets/app-assets/vendors/js/extensions/swiper.min.js')}}"></script>
<script src="{{asset('dashboardAssets/app-assets/vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('dashboardAssets/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('dashboardAssets/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('dashboardAssets/app-assets/vendors/js/editors/quill/katex.min.js')}}"></script>
<script src="{{asset('dashboardAssets/app-assets/vendors/js/editors/quill/highlight.min.js')}}"></script>
<script src="{{asset('dashboardAssets/app-assets/vendors/js/editors/quill/quill.min.js')}}"></script>

<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('dashboardAssets/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('dashboardAssets/app-assets/js/core/app.js')}}"></script>
<script src="{{asset('dashboardAssets/app-assets/js/scripts/components.js')}}"></script>
<!-- END: Theme JS-->
<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('dashboardAssets/app-assets/js/scripts/forms/wizard-steps.js')}}"></script>
<script src="{{asset('dashboardAssets/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('dashboardAssets/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('dashboardAssets/app-assets/js/scripts/pages/app-ecommerce-details.js')}}"></script>
<script src="{{asset('dashboardAssets/app-assets/js/scripts/forms/number-input.js')}}"></script>

<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('dashboardAssets/app-assets/js/scripts/datatables/datatable.js')}}"></script>
<script src="{{asset('dashboardAssets/app-assets/js/scripts/forms/select/form-select2.js')}}"></script>
<script src="{{asset('dashboardAssets/app-assets/js/scripts/editors/editor-quill.js')}}"></script>

<!-- END: Page JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('dashboardAssets/app-assets/js/scripts/pages/app-user.js')}}"></script>
<!-- END: Page JS-->
<!-- BEGIN: Page JS-->
<script src="{{asset('dashboardAssets/app-assets/js/scripts/pages/dashboard-analytics.js')}}"></script>
<script src="{{asset('dashboardAssets/app-assets/js/scripts/pages/bootstrap-toast.js')}}"></script>
<!-- END: Page JS-->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
@yield('script')

<script>

    $.extend(true, $.fn.dataTable.defaults, {
        language: {
            search: "{{ __('dashboard.search') }}",
            "processing": "<span class='fa-stack fa-lg'>\n\
                            <i class='fa fa-spinner fa-spin fa-stack-2x fa-fw'></i>\n\
                       </span>",
        }
    });
    function remove(id,table){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $(`.${table}-${id}`).submit();
            }
        })
    }


</script>
