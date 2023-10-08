<!-- BEGIN: Vendor JS-->
<script src="{{ url('public/manager_dashboard/app-assets/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ url('public/manager_dashboard/app-assets/vendors/js/charts/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ url('public/manager_dashboard/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
<script src="{{ url('public/manager_dashboard/app-assets/vendors/js/forms/icheck/icheck.min.js') }}"></script>
<script src="{{ url('public/manager_dashboard/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ url('public/manager_dashboard/app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ url('public/manager_dashboard/app-assets/js/core/app.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->

<script src="{{ url('public/manager_dashboard/app-assets/js/scripts/cards/card-statistics.js') }}"></script>
<script src="{{ url('public/manager_dashboard/app-assets/js/scripts/tables/datatables/datatable-basic.js') }}"></script>
<script src="{{ url('public/manager_dashboard/app-assets/js/scripts/forms/form-login-register.js') }}"></script>
<!-- END: Page JS-->

<!-- BEGIN: Editor-->
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#profile-editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#edu-editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#exp-editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#skills-editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#info-article-editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '#res-article-editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '#videos-editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '#per_event-editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#non_event-editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#fut_event-editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<!-- END: Editor-->
