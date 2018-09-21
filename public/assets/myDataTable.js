var DatatablesBasicBasic = {
    init: function () {
        var e;
        (e = $("#m_table_1")).DataTable({
            responsive: !0,
            dom: "<'row'<'col-sm-12'tr>>\n\t\t\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>",
            lengthMenu: [5, 10, 25, 50],
            pageLength: 10,
            language: {
                "info": "عرض  _START_  الي _END_ من _TOTAL_  عناصر",

                "zeroRecords": "لا توجد عناصر",
                "infoEmpty": "لا توجد عناصر متاحه",
                "lengthMenu": "عرض _MENU_  عناصر",
            } ,

        }), e.on("change", ".m-group-checkable", function () {
            var e = $(this).closest("table").find("td:first-child .m-checkable"), a = $(this).is(":checked");
            $(e).each(function () {
                a ? ($(this).prop("checked", !0), $(this).closest("tr").addClass("active")) : ($(this).prop("checked", !1), $(this).closest("tr").removeClass("active"))
            })
        }), e.on("change", "tbody tr .m-checkbox", function () {
            $(this).parents("tr").toggleClass("active")
        })
    }
};
jQuery(document).ready(function () {
    DatatablesBasicBasic.init()
});