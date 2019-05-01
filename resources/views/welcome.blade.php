<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Vue CRUD Application</title>
    <script src="{{asset('js/app.js')}}"></script>
    <!-- tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/preflight.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/utilities.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mx-auto bg-blue-dark h-16">
        <h3 class="text-white text-center pt-5">خدمات دائرة ضريبة الدخل و المبيعات</h3>
    </div>
    <div id="all" class="pl-32">
        <div style="height: 575px;" class="shadow w-2/3 ml-32">
            <h1 class="text-center text-blue-dark pt-16"> الحاسبة الالكترونية لضريبة الدخل لسنة 2016 </h1><br>
            <div>
                <h4 class="text-grey-dark pt-8 float-right px-4"> الاقامة في الاردن </h4>
                <h4 class="text-grey-dark pt-8 float-left px-12"> الحالة الاجتماعية </h4>
            </div>
            <br><br><br><br>
            <div id="hus">
                <button value="true" v-on:click="res" class="bg-blue-dark text-white py-3 mr-4 px-12 rounded float-right">
                                        مقيم
                </button>
                <button v-on:click="notres" class="border border-grey-dark text-grey-dark py-3 ml-8 px-10 rounded float-right">
                    غيرمقيم
                </button>

                <button v-on:click="notmarr" class="border border-grey-dark text-grey-dark py-3 ml-8 px-10 rounded float-left">
                    غير متزوج
                </button>
                <button v-on:click="marr" class="bg-blue-dark text-white py-3 mr-4 px-12 rounded float-left">
                    متزوج
                </button>
            </div>

            <br><br><br>

            <div id="wife">
                <h4 class="text-grey-dark pt-8 float-right px-4"> مجموع الدخل السنوي للزوجة </h4>
                <h4 class="text-grey-dark pt-8 float-left px-12"> هل الزوجة مقيمة ؟ </h4>

            </div>

            <br><br><br>

            <div id="soc">
                <button v-on:click="wifenotres" class="border border-grey-dark text-grey-dark py-3 ml-8 px-10 rounded float-left">
                        غير مقيمة
                </button>
                <button v-on:click="wiferes" class="bg-blue-dark text-white py-3 mr-4 px-12 rounded float-left">
                    مقيمة
                </button>
                <input v-on:change="wifesalary" v-model="wifsal" class="border border-grey-dark float-right py-3 mr-4 px-12 rounded float-right" type="text">
            </div>

            <br><br><br>

            <div id="sal-hus">
                <h4 class="text-grey-dark pt-8 float-right px-4"> مجوع الدخل السنوي للزوج </h4>
                <br><br><br><br>
                <input v-on:change="hussalary" v-model="hussal" class="border border-grey-dark float-right py-3 mr-4 px-12 rounded float-right" type="text">
            </div>
            <br><br><br>
            <div class="text-center">
            <button class="bg-blue-dark text-white rounded my-5 py-3 px-5 w-full" v-on:click="showHint">احسب الضريبة</button>
            </div>
        </div>
    </div>

    <script>

        var all = new Vue({
            el: "#all",
            data: {
                    married: 0,
                    resident: 1,
                    wifres: 0,
                    wifsal: null,
                    hussal: null,
            },
            created: function () {
                $('#soc').hide();
                $('#wife').hide();
            },

            methods: {
                res : function () {
                        this.resident = 1;
                },

                notres : function () {
                    this.resident = 0;
                },

                marr : function () {
                    this.married = 1;
                    $('#soc').show();
                    $('#wife').show();
                },

                notmarr : function () {
                    this.married = 0;
                    $('#soc').hide();
                    $('#wife').hide();

                },

                wiferes : function () {
                    this.wifres = 1
                },

                wifenotres : function () {
                    this.wifres = 0
                },

                wifesalary : function () {
                    alert(this.wifsal)
                },

                hussalary : function () {
                    alert(this.hussal)
                },

                showHint : function() {
                    info = [this.resident, this.married, this.wifres, this.hussal, this.wifsal];
                    $.ajax({
                        type: "GET",
                        url: "../calc/",
                        data: {
                            info:info
                        },
                        success: function(result) {
                            alert(result);
                        },
                        error: function(result) {
                            alert('error');
                        }
                    });
                }
            }
        });


    </script>
</body>
</html>
