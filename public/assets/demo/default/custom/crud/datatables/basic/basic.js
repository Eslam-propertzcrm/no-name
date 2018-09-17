var DatatablesBasicBasic = {
    init: function () {
        var e;
        (e = $("#m_table_1")).DataTable({
            responsive: !0,
            dom: "<'row'<'col-sm-12'tr>>\n\t\t\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>",
            lengthMenu: [5, 10, 25, 50],
            pageLength: 10,
            // language: {"info": "Showing _START_ to _END_ of _TOTAL_ entries",},
            language: {
                "info": "عرض  _START_  الي _END_ من _TOTAL_  عناصر",

                "zeroRecords": "لا توجد عناصر",
                "infoEmpty": "لا توجد عناصر متاحه",
                "lengthMenu": "عرض _MENU_  عناصر",
            },

            order: [[1, "desc"]],
            headerCallback: function (e, a, t, n, s) {
                e.getElementsByTagName("th")[0].innerHTML = '\n  ' +
                    '<label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">\n   ' +
                    '<input type="checkbox" value="" class="m-group-checkable">\n       ' +
                    '                 <span></span>\n' +
                    '</label>'
            },
            columnDefs: [{
                targets: 0,
                width: "30px",
                className: "dt-right",
                orderable: !1,
                render: function (e, a, t, n) {
                    return '\n<label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">\n' +
                        '<input type="checkbox" value="" class="m-checkable">\n' +
                        '<span></span>\n' +
                        '</label>'
                }
            }, {
                targets: 8, render: function (e, a, t, n) {
                    var s = {

                        1: {title: "معلق", class: " m-badge--info"},
                        2: {title: "مفعل", class: " m-badge--success"},
                        3: {title: "محظور", class: " m-badge--danger"},

                    };
                    return void 0 === s[e] ? e : '<span class="m-badge ' + s[e].class + ' m-badge--wide">' + s[e].title + "</span>"
                }
            }, {
                targets: 7, render: function (e, a, t, n) {
                    var s = {
                        0: {title: "مدير", state: "danger"},
                        1: {title: "مندوب", state: "primary"},
                        2: {title: " تاجر", state: "accent"},
                        3: {title: "   مزارع", state: "accent"},
                        4: {title: "موظف استقبال", state: "accent"},
                    };
                    return void 0 === s[e] ? e : '<span class="m-badge m-badge--' + s[e].state + ' m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-' + s[e].state + '">' + s[e].title + "</span>"
                }
            }]
        }), e.on("change", ".m-group-checkable", function () {
            var e = $(this).closest("table").find("td:first-child .m-checkable"), a = $(this).is(":checked");
            $(e).each(function () {
                a ? ($(this).prop("checked", !0), $(this).closest("tr").addClass("active")) : ($(this).prop("checked", !1),
                    $(this).closest("tr").removeClass("active"))
            })
        }), e.on("change", "tbody tr .m-checkbox", function () {
            $(this).parents("tr").toggleClass("active")
        })
    }
};
jQuery(document).ready(function () {
    DatatablesBasicBasic.init()
});