<!--begin::Global Theme Bundle -->
<script src="{{url('/')}}/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Vendors -->
<script src="{{url('/')}}/assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts -->


@yield('script')


<script>


    $(document).ready(function () {
// Initializing arrays with city names.
        var egypt = [
            {display: "القاهره", value: "القاهره"},
            {display: "الجيزه", value: "الجيزه"},
            {display: "الاسكندريه", value: "الاسكندريه"},
            {display: "الاسماعيليه", value: "الاسماعيليه"},
            {display: "اسيوط", value: "اسيوط"},
            {display: "الاقصر", value: "الاقصر"},
            {display: "بني سويف", value: "بني سويف"},
            {display: "المنصوره", value: "المنصوره"},
            {display: " سوهاج", value: " سوهاج"},
            {display: "السويس", value: "السويس"},
            {display: " الشرقيه", value: " الشرقيه"},
            {display: "طنطا", value: "طنطا"},
            {display: "الفيوم", value: "الفيوم"},
            {display: " بنها", value: " بنها"},
            {display: "قنا", value: "قنا"},
            {display: " سبين الكوم", value: " سبين الكوم"},
            {display: "المنيا", value: "المنيا"},


        ];
        var Saudi = [
            {display: "مكه المكرمه", value: "مكه المكرمه"},
            {display: "المدينه المنوره", value: "المدينه المنوره"},
            {display: "الرياض", value: "الرياض"},
            {display: "الشرقيه", value: "الشرقيه"},
            {display: "الفصيم", value: "الفصيم"},
            {display: "عسير", value: "عسير"},
            {display: "حائل", value: "حائل"},
            {display: "تبوك", value: "تبوك"},
            {display: "نجران", value: "نجران"},
            {display: "جازان", value: "جازان"},
            {display: "الباحه", value: "الباحه"},
            {display: "الشماليه", value: "الشماليه"},
            {display: "الجوف", value: "الجوف"},
            {display: "الباطن", value: "الباطن"},
            {display: "سدير", value: "سدير"},
            {display: "الوسطي", value: "الوسطي"},
            {display: "الخرج", value: "الخرج"},
            {display: "الوادي", value: "الوادي"},
            {display: "الطائف", value: "الطائف"},
            {display: "العلا", value: "العلا"},
            {display: "الاحساء", value: "الاحساء"},
        ];
        var Jordan = [
            {display: "عمان", value: "عمان"},
            {display: "اربد", value: "اربد"},
            {display: "الزرقاء", value: "الزرقاء"},

            {display: "السلط", value: "السلط"},
            {display: "المفرق", value: "المفرق"},
            {display: "الكرك", value: "الكرك"},

            {display: "مادبا", value: "مادبا"},
            {display: "جرش", value: "جرش"},
            {display: "عجلون", value: "عجلون"},

            {display: "العقيه", value: "العقيه"},
            {display: "معان", value: "معان"},
            {display: "الطفيله", value: "الطفيله"},


        ];
// Function executes on change of first select option field.
        $("#country").change(function () {
            var select = $("#country option:selected").val();
            switch (select) {
                case "مصر":
                    city(egypt);
                    break;
                case "السعوديه":
                    city(Saudi);
                    break;
                case "الاردن":
                    city(Jordan);
                    break;
                default:
                    $("#governorate").empty();
                    $("#governorate").append("<option> اختار المحافظه </option>");
                    break;
            }
        });

// Function To List out Cities in Second Select tags
        function city(arr) {
            $("#governorate").empty(); //To reset cities
            $("#governorate").append("<option> اختار المحافظه </option>");
            $(arr).each(function (i) { //to list cities
                $("#governorate").append("<option value=" + arr[i].value + ">" + arr[i].display + "</option>")
            });
        }
    });
</script>

<script>


    var row = '     <div class="form-group m-form__group row">\n' +
        '  <div class="col-md-6 form-group">\n' +
        '  <div class="col-10">\n' +
        '  <select class="form-control m-input" name="productName[]">\n' +
        '  <option selected disabled> اختار نوع الخضار</option>\n' +
        ' <option value="جزر">جزر</option>\n' +
        ' <option value="بصل"> بصل</option>\n' +
        ' <option value="ثوم"> ثوم</option>\n' +
        ' <option value="بطاطس"> بطاطس</option>\n' +
        ' <option value="ليمون"> ليمون</option>\n' +
        ' <option value="فلفل">فلفل</option>\n' +
        ' </select>\n' +
        ' </div>\n' +
        ' </div>\n' +
        '\n' +
        '                    <div class="col-md-6 form-group">\n' +
        '                        <input class="form-control m-input" name="numberBox[]" type="number"\n' +
        '                               placeholder=" عدد  الصناديق "\n' +
        '                               id="example-number-input">\n' +
        '                        <span style="color: #F66E84"> اقل عدد صناديق مسموح به 50 صندوق</span>\n' +
        '                    </div>\n' +
        '                </div>';

    $('.appendRow').on('click', function () {
        $(this).closest('.m-form').find('.m-portlet__body').append(row);

    });


    $(document).on('click', '#remove-row', function (e) {

        var total = 0;
        var currentRow = this;
        $(this).closest('.modal-body').find(".amountMoney").each(function () {

            total = (parseFloat(total) + parseFloat($(this).val()));
        });

        total = total - $(currentRow).closest('.row').find(".amountMoney").val();

        $(this).closest('.modal-body').find('.totalMoney').val(total);

        $('.number').blur();
        $('.number').toArabic({target: '#target'});
        $('.number').blur();


        var whichtr = $(this).closest(".row");
        whichtr.remove();


    });

</script>