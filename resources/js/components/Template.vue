<template>
    <div class="container mx-auto bg-blue-dark h-16">
        <h3 class="text-white text-center pt-5">خدمات دائرة ضريبة الدخل و المبيعات</h3>
    </div>
    <div class="pl-32">
        <div style="height: 575px;" class="shadow w-2/3 ml-32">
            <h1 class="text-center text-blue-dark pt-16"> الحاسبة الالكترونية لضريبة الدخل لسنة 2016 </h1><br>
            <div>
                <h4 class="text-grey-dark pt-8 float-right px-4"> الاقامة في الاردن </h4>
                <h4 class="text-grey-dark pt-8 float-left px-12"> الحالة الاجتماعية </h4>
            </div>
            <br><br><br><br>
            <div id="hus">
                <button value="true" v-on:click="marr" class="bg-blue-dark text-white py-3 mr-4 px-12 rounded float-right">
                      مقيم
                </button>
                <button class="border border-grey-dark text-grey-dark py-3 ml-8 px-10 rounded float-right">
                            غيرمقيم
                </button>

                <button value="false" class="border border-grey-dark text-grey-dark py-3 ml-8 px-10 rounded float-left">
                    غير متزوج
                </button>
                <button value="true" class="bg-blue-dark text-white py-3 mr-4 px-12 rounded float-left">
                        متزوج
                </button>
            </div>

            <br><br><br><br>

            <div id="wife">
                <h4 class="text-grey-dark pt-8 float-right px-4"> مجموع الدخل السنوي للزوجة </h4>
                <h4 class="text-grey-dark pt-8 float-left px-12"> هل الزوجة مقيمة ؟ </h4>

            </div>

            <br><br><br><br>

            <div id="soc">
                <button value="false" class="border border-grey-dark text-grey-dark py-3 ml-8 px-10 rounded float-left">
                    غير متزوج
                </button>
                <button value="true" class="bg-blue-dark text-white py-3 mr-4 px-12 rounded float-left">
                    متزوج
                </button>
                <input class="border border-grey-dark float-right py-3 mr-4 px-12 rounded float-right" type="text">
            </div>

            <br><br><br><br>

            <div id="sal-hus">
                <h4 class="text-grey-dark pt-8 float-right px-4"> مجوع الدخل السنوي للزوج </h4>
                <br><br><br><br>
                <input class="border border-grey-dark float-right py-3 mr-4 px-12 rounded float-right" type="text">
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue">

        new Vue({
            el: "#app",
            data: {
                married: "",
                resident: ""
            },

            methods: {
                marr : function () {

                }
            }
        });
    </script>

</template>