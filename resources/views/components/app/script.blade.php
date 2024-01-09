<!-- JAVASCRIPT -->
<script src="{{ asset('assets/backend/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/backend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/backend/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/backend/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/backend/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('assets/backend/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/backend/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>

<!-- Required datatable js -->
<script src="{{ asset('assets/backend/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/backend/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

<!-- Buttons examples -->
<script src="{{ asset('assets/backend/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/backend/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/backend/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/backend/libs/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/backend/libs/pdfmake/build/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/backend/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/backend/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/backend/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

<!-- Responsive examples -->
<script src="{{ asset('assets/backend/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/backend/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assets/backend/js/app.js') }}"></script>

<!-- apexcharts -->
<script src="{{ asset('assets/backend/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Pages init js -->
<script src="{{ asset('assets/backend/js/pages/datatables.init.js') }}"></script>
<script src="{{ asset('assets/backend/js/pages/dashboard.init.js') }}"></script>

<!-- Unicon -->
<script src="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.5/script/monochrome/bundle.min.js"></script>

<!-- Select 2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });

</script>

<!-- form repeater js -->
<script src="{{ asset('assets/backend/libs/jquery.repeater/jquery.repeater.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/pages/form-repeater.int.js') }}"></script>

<!--tinymce js-->
<script src="https://cdn.tiny.cloud/1/eraf3oo5x4229s7g70swbu0mu8a4ildcf14v0hsy731rcqjn/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#myeditorinstance',
        plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    });

</script>
