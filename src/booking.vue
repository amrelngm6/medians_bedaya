<template>
    <div class="block w-full overflow-x-auto">

        <div class="container mx-auto relative">
            <h1 class="text-2xl pb-10  mx-auto w-72 text-center font-bold purple-color">فريق نجاح بداية</h1>
            <div class="mx-auto w-full relative z-10 mb-8">
                <div class="relative top-0  left-0 right-0 px-6 pt-2 pb-6  ">

                    <!-- Steps -->
                    <div class="flex w-full  bg-white gap-3 gap rounded-lg">
                        <div class="flex mx-auto gap gap-3 w-full p-4 font-semibold">

                            <div  @click="changeStep(i)" class="flex gap gap-3" v-if="step.id == 1" v-for="(step, i) in Steps">
                                <span class="px-4 h-10 rounded rounded-full bg-blue-100 text-center " :class="step.current_class"><span class="block pt-2" v-text="step.id"></span></span>
                            </div>
                            <div  class="flex w-full gap gap-3" v-if="step.id != 1" v-for="(step, i) in Steps">
                                <span class="w-full mt-4 h-2 relative py-1  bg-gray-100  block rounded rounded-lg">
                                    <span :class="step.current_class + step.progress" class=" h-full block  absolute right-0 top-0 rounded-lg"></span>
                                </span>
                                <span @click="changeStep(i)"  class="px-4 h-10 rounded rounded-full bg-blue-100 text-center"  :class="step.current_class"><span class="block pt-2" v-text="step.id"></span></span>
                            </div>
                        </div>
                    </div>



                    <!-- Branches -->
                    <div class="w-full lg:p-4 md:p-4 bg-white rounded-lg mt-6">
                        <h4 class="w-full block text-center font-semibold">برجاء اختيار الفرع</h4>
                        <div class="lg:w-10/12 mx-auto w-full lg:p-10 gap gap-8 lg:grid lg:grid-cols-2">
                            <div class="p-2 mb-2" v-for="branch in branchesList">
                                <div @click="setActiveBranch(branch)" :class="(branch.code == activeBranch) ? 'cyan-gradient45' : ''" class="cursor-pointer hover:bg-blue-200 p-3 flex gap gap-3 rounded-lg">
                                    <svg class="p-2 purple-bg rounded-lg h-full" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24.917 35.501">
                                        <path id="pin" d="M12.417.25A12.108,12.108,0,0,1,21.25,3.875a11.908,11.908,0,0,1,3.667,8.792,16.988,16.988,0,0,1-1.292,5.958,34.589,34.589,0,0,1-3.125,6.25q-1.833,2.875-3.667,5.417T13.75,34.334l-1.333,1.417q-.5-.5-1.333-1.5T8.126,30.376Q6,27.5,4.334,24.793a38.083,38.083,0,0,1-3-6.126,16.842,16.842,0,0,1-1.333-6A11.972,11.972,0,0,1,3.625,3.875,11.972,11.972,0,0,1,12.417.25Zm0,16.833a4.4,4.4,0,0,0,3.167-1.292,4.33,4.33,0,0,0,0-6.25A4.389,4.389,0,0,0,12.417,8.25,4.411,4.411,0,0,0,8,12.667a4.409,4.409,0,0,0,4.417,4.416Z" transform="translate(0 -0.25)" fill="#36d3eb" />
                                    </svg>
                                    <span class=" block ">
                                        <span class="block lg:text-lg md:text-normal text-sm  font-semibold" v-text="branch.title"></span>
                                        <span class="block text-xs" v-text="branch.address"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Specialization -->
                    <div class="w-full lg:p-4 p-1  bg-white rounded-lg mt-6" v-if="activeBranch">
                        <h4 class="w-full block text-center font-semibold">اختر التخصص</h4>
                        <div class="lg:w-10/12 mx-auto w-full lg:p-10 gap lg:gap-8 grid grid-cols-2">
                            <div v-for="spec in specsList"  class="lg:p-2 border-gray-100 border" >
                                <div class="cursor-pointer text-center hover:bg-blue-200 p-3 flex gap gap-3 rounded-lg" @click="setActiveSpec(spec)" :class="(spec.code == activeSpec) ? 'cyan-gradient45' : ''" >
                                    <span class="w-full  block text-center">
                                        <span class="w-full block lg:text-lg md:text-normal text-sm  font-semibold" v-text="spec.title"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Doctors -->
                    <div class="w-full p-4 bg-white rounded-lg mt-6" v-if="activeSpec">
                        <h4 class="w-full block text-center font-semibold">اختر التخصص</h4>
                        <div class="lg:w-12/12 mx-auto w-full lg:p-10 gap gap-8 md:grid lg:grid lg:grid-cols-4  md:grid-cols-2 block mt-20">
                            <div v-for="doctor in doctorsList"  class="p-2 cursor-pointer my-10 mb-20">
                                <div @click="setActiveDoctor(doctor)" :class="(doctor.id == activeDoctor) ? 'cyan-gradient45' : ''" class="cursor-pointer relative border-1 border border-gray-100 text-center rounded-lg pt-16 pb-6">
                                    <img src="./img/dr-1.jpg" style="top:-100px" class="rounded-full p-1 border-purple-800 border-1 w-40 mx-auto left-0 right-0 absolute" alt="Doctor">
                                    <h2 class="lg:text-xl md:text-normal text-sm  pb-2 font-bold purple-color" v-text="doctor.title"></h2>
                                    <span class=" mx-auto py-2 px-4 purple-bg text-white rounded-lg  inline-block " href="#!">اختيار </span>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Time -->
                    <div class="w-full p-4 bg-white rounded-lg mt-6" v-if="activeDoctor">
                        <h4 class="w-full block text-center font-semibold">اختيار موعد الحجز</h4>
                        <div class="lg:w-12/12 mx-auto w-full lg:p-10 gap gap-8 lg:grid lg:grid-cols-3 ">
                            <div class="p-2 cursor-pointer ">
                                <div class="cursor-pointer cyan-gradient45 relative border-1 border border-gray-100 text-center rounded-lg pb-6">
                                    <h2 class="lg:text-xl text-sm pb-2 font-bold purple-color">أ.د / إسماعيل أبو الفتوح</h2>
                                    <a class="mx-auto py-2 px-4 purple-bg text-white rounded-lg  inline-block " href="#!">اختيار </a>
                                </div>

                            </div>

                            <div class="p-2 cursor-pointer ">
                                <div class="cursor-pointer relative border-1 border border-gray-100 text-center rounded-lg pb-6">
                                    <span class="mb-4 font-semibold block w-full text-lg">أيام الحجز</span>

                                    <div class="gap gap-3 grid grid-cols-2 my-2">
                                        <div class="border border-gray-200 rounded-lg block w-full bg-gray-100 py-2 hover:bg-blue-300">
                                             الثلاثاء 
                                        </div>
                                        <div class="border border-gray-200 rounded-lg block w-full bg-gray-100 py-2 hover:bg-blue-300">
                                            لاثنين
                                        </div>
                                        <div class="border border-gray-200 rounded-lg block w-full bg-gray-100 py-2 hover:bg-blue-300">
                                            الأحد  
                                        </div>
                                    </div>


                                </div>

                            </div>

                            <div class="p-2 cursor-pointer my-10">
                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>
<script>
const axios = require('axios').default;

export default {
    computed: {},
    data() {
        return {
            activeKey:0,
            activeClass: 'cyan-bg purple-color ',
            finishedClass: 'purple-bg text-white',
            defaultClass: 'bg-gray-200 ',
            Steps: [
                {id:1, current_class: 'cyan-bg purple-color' , progress:' w-1/4 '},
                {id:2, current_class: 'bg-gray-200' , progress:' w-0/4'},
                {id:3, current_class: 'bg-gray-200' , progress:' w-0/4 '},
                {id:4, current_class: 'bg-gray-200' , progress:' w-0/4'},
            ],
            ItemsList: [],
            activeBranch: null,
            branchesList: [
                {title: "الدقي - مستشفى بداية", address: "2 شارع أحمد المليحي، الدقي، الجيزة، مصر" , code:"dokki"},
                {title: "عيادات كليوباترا - الشيخ زايد", address: "الشيخ زايد, المحور المركزى, مصر" , code:"zayed"},
                {title: "عيادات كليوباترا - التجمع الخامس", address: "عيادات كليوباترا, شارع ال 90, التجمع الخامس" , code:"settlement"},
                {title: "مستشفى كليوباترا - مصر الجديدة", address: "مستشفى كليوباترا - مصر الجديدة" , code:"new_cairo"}
            ],

            activeSpec: null,
            specsList: [
                {title: "أمراض الذكورة",  code:"men"},
                {title: "أمراض النساء والولادة",  code:"women"}
            ],

            activeDoctor: null,
            doctorsList: [
                { id: 1, title: "أ.د / إسماعيل أبو الفتوح",  photo:"./img/dr-1.jpg"},
                { id: 2, title: "أ.د / إسماعيل أبو الفتوح",  photo:"./img/dr-1.jpg"},
                { id: 3, title: "أ.د / إسماعيل أبو الفتوح",  photo:"./img/dr-1.jpg"},
                { id: 4, title: "أ.د / إسماعيل أبو الفتوح",  photo:"./img/dr-1.jpg"}
            ]
        }
    },
    props: ['page', 'message', 'itemId'],
    created: function() {
        this.fetchData(this.page);
    },
    methods: {

        /**
         * Change current step
         */
        changeStep(i)
        {
            this.activeKey = i;
            this.Steps[i].current_class = this.finishedClass;
            this.filterStep(i);
        },

        /**
         * Filter step order
         */
        filterStep(k)
        {
            for (var i = this.Steps.length - 1; i >= 0; i--) {
                if (i > k)
                {
                    this.Steps[i].current_class = this.defaultClass;
                    this.Steps[i].progress = ' w-0/4';
                } else if (i == k) {
                    this.Steps[i].current_class = this.activeClass;
                    this.Steps[i].progress = ' w-1/4';
                } else {
                    this.Steps[i].current_class = this.finishedClass;
                    this.Steps[i].progress = ' w-full';
                }
            }
        },

        step1()
        {
        },

        /**
         * set Active Branch
         * 
        */
        setActiveBranch(branch)
        {
            this.activeBranch = branch.code;
            this.changeStep(1);
        },

        /**
         * set Active Specialization
         * 
        */
        setActiveSpec(spec)
        {
            this.activeSpec = spec.code;
            this.changeStep(2);
        },

        /**
         * set Active Doctor
         * 
        */
        setActiveDoctor(doctor)
        {
            this.activeDoctor = doctor.id;
            this.changeStep(3);
        },

        fetchData(page) {

            const params = new URLSearchParams([]);
            params.append('page', page);
            params.append('Model', 'RatingGroups');
            this.handleRequest(params).then(data => { this.ItemsList = data; });
        },
        async handleRequest(params) {

            // Demo json data
            return await axios.post('', params.toString()).then(response => {
                if (response.data.status == true)
                    return response.data.result;
            });
        }
    }
};
</script>