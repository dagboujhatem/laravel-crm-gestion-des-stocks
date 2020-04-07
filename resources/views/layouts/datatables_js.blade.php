<!-- Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.colVis.min.js"></script>
<script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>

<!-- Data table General -->
<script type="text/javascript">
	(function ($, DataTable) {

    // Datatable global configuration
    $.extend(true, DataTable.defaults, {
    language:
    {
    "sEmptyTable":     "ليست هناك بيانات متاحة في الجدول",
    "sLoadingRecords": "جارٍ التحميل...",
    "sProcessing":   "جارٍ التحميل...",
    "sLengthMenu":   "أظهر _MENU_ مدخلات",
    "sZeroRecords":  "لم يعثر على أية سجلات",
    "sInfo":         "إظهار _START_ إلى _END_ من أصل _TOTAL_ مدخل",
    "sInfoEmpty":    "يعرض 0 إلى 0 من أصل 0 سجل",
    "sInfoFiltered": "(منتقاة من مجموع _MAX_ مُدخل)",
    "sInfoPostFix":  "",
    "sSearch":       "ابحث:",
    "sUrl":          "",
    "oPaginate": {
        "sFirst":    "الأول",
        "sPrevious": "السابق",
        "sNext":     "التالي",
        "sLast":     "الأخير"
    },
    "oAria": {
        "sSortAscending":  ": تفعيل لترتيب العمود تصاعدياً",
        "sSortDescending": ": تفعيل لترتيب العمود تنازلياً"
    }
}
    
    });

})(jQuery, jQuery.fn.dataTable);
</script>
<!-- End data table General -->