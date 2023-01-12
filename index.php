<?php $headerPosition = 'absolute'; ?>
<?php include('header.php'); ?> 

    <div class="min-h-screen relative w-full left-0 top-0 overflow-hidden ltr" >
        <img src="./img/light-network.png" class="absolute left-0 top-0 w-full" style="opacity: .3;" />
        <img src="./img/header-bg.png" class="w-auto h-full home-bg" style="max-width: none;" />
        <div class="w-full slider-text  absolute left-0 top-0 ">
            <div class="container mx-auto lg:pt-40 pt-20 ">
                <div class="lg:w-1/2 text-right lg:pt-32 pt-20">
                    <h1 class="text-4xl lg:text-4xl font-bold pb-4 purple-color">مستشفي بداية</h1>
                    <h2 class="text-white text-2xl  lg:text-3xl font-semibold pb-0">متخصصون فى علاج العقم</h2>
                    <p class="text-white lg:text-lg ">وأمراض الذكورة وأطفال الانابيب وأمراض الجهاز التناسلي</p>
                    <div class="flex w-full gap-3 gap text-right   mt-4 " style="direction:rtl;">
                         <a href="./offers.php" class="py-1 px-3 rounded-lg purple-bg text-white flex gap gap-3">
                             <span><i class="fa fa-gift my-1"></i></span>
                             <span>عروض مستشفيات بداية</span>
                         </a>
                         <a href="#!" class="py-1 px-3 rounded-lg purple-bg text-white flex gap gap-3">
                             <span><i class="fa fa-calendar my-1"></i></span>
                             <span>حاسبة فترة الولادة</span>
                         </a>
                         <a href="./srevice.php" class="py-1 px-3 rounded-lg purple-bg text-white flex gap gap-3">
                             <span><i class="fa fa-file my-1"></i></span>
                             <span>خدمات بداية</span>
                         </a>
                    </div>
                </div>
                <div class="relative lg:hidden grid grid-cols-2 sm:grid sm:grid-cols-3">
                    <img src="./img/light-network.png" class="absolute left-0 top-0 w-full" style="opacity: .5;" />
                    <div class="text-center py-2">
                        <img src="./img/online-04.png" width="50" class="mx-auto my-2">
                        <a href="#!" class="text-base font-semibold purple-color ">احجز موعد</a>
                    </div>
                    <div class="text-center py-2">
                        <img src="./img/online-05.png" width="50" class="mx-auto my-2">
                        <a href="#!" class="text-base font-semibold purple-color ">احدث العروض</a>
                    </div>
                    <div class="text-center py-2">
                        <img src="./img/operator.png" width="50" class="mx-auto my-2">
                        <a href="#!" class="text-base font-semibold purple-color ">استشارة عبر الانترنت</a>
                    </div>
                    <div class="text-center py-2">
                        <img src="./img/online-08.png" width="50" class="mx-auto my-2">
                        <a href="#!" class="text-base font-semibold purple-color ">موقع المستشفى</a>
                    </div>
                    <div class="text-center py-2">
                        <img src="./img/online-06.png" width="50" class="mx-auto my-2">
                        <a href="#!" class="text-base font-semibold purple-color ">حاسبة فترة التبويض</a>
                    </div>
                    <div class="text-center py-2">
                        <img src="./img/online-07.png" width="50" class="mx-auto my-2">
                        <a href="#!" class="text-base font-semibold purple-color ">حاسبة فترة الحمل</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="relative py-10 w-full overflow-hidden bg-gray-100">
        <img src="./img/circles-bg.png" class="absolute left-0 top-0 w-full" style="opacity: 0.1;" />
        <div class="container grid mx-auto relative z-10">
            <div class="title-gradient rounded-lg py-2 pl-40 pr-6 purple-color font-semibold text-xl " style="width: max-content;">
                الأقسام
            </div>
        </div>
        <div class="container mx-auto relative lg:block flex z-10">
            <div class="grid lg:grid-cols-5  custom-scroll lg:overflow-hidden overflow-auto h-64 lg:h-auto md:h-full sm:h-full md:grid-cols-3 grid-cols-1 lg:w-full w-64 lg:gap-20 lg:px-10 px-2 py-2 content-center mt-4" style="align-content:baseline" id="switch-cat">
                <div class="block border-1  text-center border border-purple-300 cursor-pointer rounded-tl-2xl rounded-br-2xl bg-white  hover:bg-blue-400 lg:px-6 px-2 py-2 lg:py-6 text-black hover:text-white switch-hover">
                    <img src="./img/injection-dark.png" class="mx-auto pic-1 lg:w-auto w-10">
                    <img src="./img/injection.png" class="mx-auto mx-auto pic-2 lg:w-auto w-10">
                    <p class="pt-4 lg:text-xl text-base font-semibold lg:font-bold">الإخصاب المساعد</p>
                </div>
                <div class="block border-1  text-center border border-purple-300 cursor-pointer rounded-tl-2xl rounded-br-2xl bg-white  hover:bg-blue-400 lg:px-6 px-2 py-2 lg:py-6 text-black hover:text-white switch-hover">
                    <img src="./img/woman-dark.png" class="mx-auto pic-1 lg:w-auto w-10">
                    <img src="./img/woman.png" class="mx-auto mx-auto pic-2 lg:w-auto w-10">
                    <p class="pt-4 lg:text-xl text-base font-semibold lg:font-bold">قسم النساء</p>
                </div>
                <div class="block border-1  text-center border border-purple-300 cursor-pointer rounded-tl-2xl rounded-br-2xl bg-white  hover:bg-blue-400 lg:px-6 px-2 py-2 lg:py-6 text-black hover:text-white switch-hover">
                    <img src="./img/erectile-dysfunction-dark.png" class="mx-auto pic-1 lg:w-auto w-10">
                    <img src="./img/erectile-dysfunction.png" class="mx-auto mx-auto pic-2 lg:w-auto w-10">
                    <p class="pt-4 lg:text-xl text-base font-semibold lg:font-bold">أمراض الذكورة</p>
                </div>
                <div class="block border-1  text-center border border-purple-300 cursor-pointer rounded-tl-2xl rounded-br-2xl bg-white  hover:bg-blue-400 lg:px-6 px-2 py-2 lg:py-6 text-black hover:text-white switch-hover">
                    <img src="./img/infertility-dark.png" class="mx-auto pic-1 lg:w-auto w-10">
                    <img src="./img/infertility.png" class="mx-auto mx-auto pic-2 lg:w-auto w-10">
                    <p class="pt-4 lg:text-xl text-base font-semibold lg:font-bold">العقم عند الرجال</p>
                </div>
                <div class="block border-1  text-center border border-purple-300 cursor-pointer rounded-tl-2xl rounded-br-2xl bg-white  hover:bg-blue-400 lg:px-6 px-2 py-2 lg:py-6 text-black hover:text-white switch-hover">
                    <img src="./img/dna-dark.png" class="mx-auto pic-1 lg:w-auto w-10">
                    <img src="./img/dna.png" class="mx-auto mx-auto pic-2 lg:w-auto w-10">
                    <p class="pt-4 lg:text-xl text-base font-semibold lg:font-bold">الفحوصات الوراثية</p>
                </div>
                <div class="block border-1  text-center border border-purple-300 cursor-pointer rounded-tl-2xl rounded-br-2xl bg-white  hover:bg-blue-400 lg:px-6 px-2 py-2 lg:py-6 text-black hover:text-white switch-hover">
                    <img src="./img/endoscope-dark.png" class="mx-auto pic-1 lg:w-auto w-10">
                    <img src="./img/endoscope.png" class="mx-auto mx-auto pic-2 lg:w-auto w-10">
                    <p class="pt-4 lg:text-xl text-base font-semibold lg:font-bold">المناظير الطبية</p>
                </div>
                <div class="block border-1  text-center border border-purple-300 cursor-pointer rounded-tl-2xl rounded-br-2xl bg-white  hover:bg-blue-400 lg:px-6 px-2 py-2 lg:py-6 text-black hover:text-white switch-hover">
                    <img src="./img/surgery-tools-dark.png" class="mx-auto pic-1 lg:w-auto w-10">
                    <img src="./img/surgery-tools.png" class="mx-auto mx-auto pic-2 lg:w-auto w-10">
                    <p class="pt-4 lg:text-xl text-base font-semibold lg:font-bold">الفحوصات الوراثية</p>
                </div>
                <div class="block border-1  text-center border border-purple-300 cursor-pointer rounded-tl-2xl rounded-br-2xl bg-white  hover:bg-blue-400 lg:px-6 px-2 py-2 lg:py-6 text-black hover:text-white switch-hover">
                    <img src="./img/mother-dark.png" class="mx-auto pic-1 lg:w-auto w-10">
                    <img src="./img/mother.png" class="mx-auto mx-auto pic-2 lg:w-auto w-10">
                    <p class="pt-4 lg:text-xl text-base font-semibold lg:font-bold">متابعة الحمل والولادة</p>
                </div>
            </div>
            <div class="w-full block text-center mx-auto lg:mt-0 lg:ml-auto mt-10 ml-2 px-4 ">
                <div class="gap-6 w-full block" id="cat-content">
                    <a class="lg:inline-block block my-2 mx-auto py-2 px-4 lightcyan-bg font-semibold purple-color border border-purple-400 rounded-lg" href="#!">أطفال الأنابيب</a>
                    <a class="lg:inline-block block my-2 mx-auto py-2 px-4 lightcyan-bg font-semibold purple-color border border-purple-400 rounded-lg" href="#!">التلقيح الصناعي</a>
                </div>
            </div>
        </div>
    </div>
    <div class="relative py-10  w-full  cyan-gradient45 z-10">
        <img src="./img/light-network.png" class="absolute left-0 top-0 w-full" style="opacity: .5;" />
        <div class="container grid mx-auto relative z-10 lg:block hidden">
            <div class="title-gradient rounded-lg py-2 pl-40 pr-6 purple-color font-semibold text-xl " style="width: max-content;">
                تواريخ تعني لنا الكثير
            </div>
            <div class="grid grid-cols-8 mt-20 dates-grid ">
                <div class="m-2 mx-1  ">
                    <span class="mx-auto relative  w-20 text-center block bg-white border-2 border-purple-600 my-4 rounded-lg py-1 px-2 font-bold purple-color">1998</span>
                    <div class="p-2 py-6 text-center rounded-2xl bg-white">
                        <span class="font-bold text-xl">البداية</span>
                        <p class="my-2 text-sm max-h-32 custom-scroll overflow-auto">تاريخ تأسيس مركز أطفال الأنابيب في مستشفي مصر الدولي تحت إشراف الأستاذ الدكتور إسماعيل أبو الفتوح و الدكتور شريف خطاب</p>
                    </div>
                </div>
                <div class="m-2 mx-1  ">
                    <div class="p-2 py-6 text-center rounded-2xl bg-white">
                        <span class="font-bold text-xl">اكتمال الفريق الطبي</span>
                        <p class="my-2 text-sm max-h-32 custom-scroll overflow-auto">إنضمام أفضل أطباء النساء وعلاج العقم مع أطباء الذكورة ودخول أمراض الوراثة</p>
                    </div>
                    <span class="mx-auto relative  w-20 text-center block bg-white border-2 border-purple-600 my-4 rounded-lg py-1 px-2 font-bold purple-color">2005</span>
                </div>
                <div class="m-2 mx-1  ">
                    <span class="mx-auto relative  w-20 text-center block bg-white border-2 border-purple-600 my-4 rounded-lg py-1 px-2 font-bold purple-color">2012</span>
                    <div class="p-2 py-6 text-center rounded-2xl bg-white">
                        <span class="font-bold text-xl">الوصول الى النسب العالمية</span>
                        <p class="my-2 text-sm max-h-32 custom-scroll overflow-auto">هو تاريخ الإحتفال بإرتفاع معدلات نجاح مستشفى بدايه لتتخطى 44% مما يجعلنا في صدارة الدول العالميه برغم فرق الإمكانيات في ذلك الوقت</p>
                    </div>
                </div>
                <div class="m-2 mx-1  ">
                    <div class="p-2 py-6 text-center rounded-2xl bg-white">
                        <span class="font-bold text-xl">انشاء مستشفى بداية</span>
                        <p class="my-2 text-sm max-h-32 custom-scroll overflow-auto">تاريخ الانتقال لمبنى مستشفى بداية الجديد بعد زيادة عدد الحالات حيث عجز عن تحملها المقر القديم</p>
                    </div>
                    <span class="mx-auto relative  w-20 text-center block bg-white border-2 border-purple-600 my-4 rounded-lg py-1 px-2 font-bold purple-color">2016</span>
                </div>
                <div class="m-2 mx-1  ">
                    <span class="mx-auto relative  w-20 text-center block bg-white border-2 border-purple-600 my-4 rounded-lg py-1 px-2 font-bold purple-color">2017</span>
                    <div class="p-2 py-6 text-center rounded-2xl bg-white">
                        <span class="font-bold text-xl">عام النجاح</span>
                        <p class="my-2 text-sm max-h-32 custom-scroll overflow-auto">عام مواكبة الأحداث والبقاء في الصداره فلقد إرتفعت معدلات نجاح مشفانا إلى 58%</p>
                    </div>
                </div>
                <div class="m-2 mx-1  ">
                    <div class="p-2 py-6 text-center rounded-2xl bg-white">
                        <span class="font-bold text-xl">عام الاحتفالات والتعاقدات</span>
                        <p class="my-2 text-sm max-h-32 custom-scroll overflow-auto">نظراً للنجاح العظيم الي حققنه مستشفى بداية مع ارتفاع معدلات النجاح, تم التعاقد مع أغلب الجاليات العربية. وشهد ارتفاع جيد في علاج المرضى فى ليبيا الدولة الشقيقة. حيث كنا المستشفى الوحيد المتعاقد رسمياً مع السفارة الليبية.</p>
                    </div>
                    <span class="mx-auto relative  w-20 text-center block bg-white border-2 border-purple-600 my-4 rounded-lg py-1 px-2 font-bold purple-color">2018</span>
                </div>
                <div class="m-2 mx-1  ">
                    <span class="mx-auto relative  w-20 text-center block bg-white border-2 border-purple-600 my-4 rounded-lg py-1 px-2 font-bold purple-color">2020</span>
                    <div class="p-2 py-6 text-center rounded-2xl bg-white">
                        <span class="font-bold text-xl">عام الافتتاحات الجديدة</span>
                        <p class="my-2 text-sm max-h-32 custom-scroll overflow-auto">تم الإنضمام إلى مجموعة مستشفيات كليوباترا لتقديم المزيد من النجاحات وإفتتاح فروع جديدة.</p>
                    </div>
                </div>
                <div class="m-2 mx-1  ">
                    <div class="p-2 py-6 text-center rounded-2xl bg-white">
                        <span class="font-bold text-xl">عام الانجازات</span>
                        <p class="my-2 text-sm max-h-32 custom-scroll overflow-auto">حصلت المستشفى على العديد من الجوائز و الشهادات الطبية، والتي تضمن لكل المتعاملين مع مستشفى بداية أن كافة الخدمات الصحية والرعاية الطبية المقدمة لهم تتم بـأعلى المعايير وبمستوى يضاهي كبرى المؤسسات الطبية في العالم.</p>
                    </div>
                    <span class="mx-auto relative  w-20 text-center block bg-white border-2 border-purple-600 my-4 rounded-lg py-1 px-2 font-bold purple-color">2021</span>
                </div>
            </div>
        </div>
        <div class="container mx-auto">
            <div class="pb-60  pt-24">
                <div class=" mx-auto left-0 right-0 absolute rounded-2xl">
                    <div class="video-center relative">
                        <img src="./img/video.png" class="mx-auto lg:w-6/12 w-10/12">
                        <img src="./img/play-button_en.png" class="cursor-pointer w-16 lg:w-24 bg-white rounded-full p-1 lg:p-3 mx-auto absolute my-auto left-0 right-0 top-0 bottom-0">
                    </div>
                    <div class="mx-auto sm:w-full flex gap-3 gap lg:w-6/12 w-10/12">
                        <div class="video-center mx-auto rounded-2xl w-56 relative">
                            <img src="./img/video.png" class="mx-auto  w-56">
                            <img src="./img/play-button_en.png" class="cursor-pointer lg:w-12 w-6 bg-white opacity-90 hover:opacity-100 lg:opacity-70 rounded-full p-1 mx-auto absolute my-auto left-0 right-0 top-0 bottom-0">
                        </div>
                        <div class="video-center mx-auto rounded-2xl w-56 relative">
                            <img src="./img/video.png" class="mx-auto  w-56">
                            <img src="./img/play-button_en.png" class="cursor-pointer lg:w-12 w-6 bg-white  opacity-90 hover:opacity-100 lg:opacity-70 rounded-full p-1 mx-auto absolute my-auto left-0 right-0 top-0 bottom-0">
                        </div>
                        <div class="video-center mx-auto rounded-2xl w-56 relative">
                            <img src="./img/video.png" class="mx-auto  w-56">
                            <img src="./img/play-button_en.png" class="cursor-pointer lg:w-12 w-6 bg-white opacity-90 hover:opacity-100 lg:opacity-70 rounded-full p-1 mx-auto absolute my-auto left-0 right-0 top-0 bottom-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="relative py-10 pt-20 lg:pt-80 w-full overflow-hidden bg-gray-100">
        <img src="./img/circles-bg.png" class="absolute left-0 top-0 w-full" style="opacity: 0.1;" />
        <div class="container grid mx-auto relative z-10 hidden">
            <div class="title-gradient rounded-lg py-2 pl-40 pr-6 purple-color font-semibold text-xl " style="width: max-content;">
                رؤية المستشفي
            </div>
            <div class="custom-scroll-container custom-scroll ">
                <div class="lg:grid lg:grid-cols-3 md:grid-cols-3  lg:gap-20 gap-10 py-10 content-center custom-scroll-list" id="vision">
                    <div class="custom-scroll-item">
                        <a href="#!" class="relative">
                            <img src="./img/Rectangle_31-1.png" class="w-full rounded-2xl">
                            <span class="w-full text-center h-32 pt-10 opacity-70 text-white bg-black m-auto absolute my-auto left-0 right-0 top-0 bottom-0 text-2xl">الدقة</span>
                        </a>
                    </div>
                    <div class="custom-scroll-item">
                        <a href="#!" class="relative">
                            <img src="./img/Rectangle_32-1.png" class="w-full rounded-2xl">
                            <span class="w-full text-center h-32 pt-10 opacity-70 text-white bg-black m-auto absolute my-auto left-0 right-0 top-0 bottom-0 text-2xl">الجودة</span>
                        </a>
                    </div>
                    <div class="custom-scroll-item">
                        <a href="#!" class="relative">
                            <img src="./img/Rectangle_30-2.png" class="w-full rounded-2xl">
                            <span class="w-full text-center h-32 pt-10 opacity-70 text-white bg-black m-auto absolute my-auto left-0 right-0 top-0 bottom-0 text-2xl">فريق العمل</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="relative py-10  w-full  cyan-gradient45 overflow-hidden">
        <img src="./img/light-network.png" class="absolute left-0 top-0 w-full" style="opacity: .5;" />
        <div class="container  mx-auto relative z-10">
            <div class="lg:w-1/3 float-right relative  top-20 ">
                <h3 class="pr-28 text-3xl font-semibold text-white">
                    <span class="absolute right-3 top-4 font-bold" style=" font-size: 82px;">25</span>
                    عام من الخبرة العملية والنتائج الايجابية
                </h3>
                <p class="pr-4 py-6 text-white text-xl">
                    تم تأسيس مستشفي بداية بهدف توفير جميع الخدمات والعلاج لكل ما يتعلق بتأخر الحمل والعقم وهذا ما قمنا بتحقيقه بالفعل. حيث تمتلك المستشفى وحدات وعيادات لكافة تخصصات أمراض النساء والتوليد والذكورة والعقم عند الرجال والوراثة , كما تعرض خيارات متعددة لعمليات الإخصاب المساعد مثل اطفال الانابيب, الحقن المجهري و التلقيح الصناعي
                </p>
            </div>
            <div class="lg:w-2/3 inline-block curve-doctor">
                <img src="./img/doctor.png" style="max-width:none;" class="float-left" width="140%" />
            </div>
        </div>
        <div class="crossed">
        </div>
    </div>
    <div class="relative py-10  w-full overflow-hidden " style="z-index: 9999;">
        <img src="./img/circles-bg.png" class="absolute left-0 top-0 w-full" alt="" style="opacity: 0.1;" />
        <div class="container grid mx-auto relative z-10 ">
            <div class="title-gradient rounded-lg py-2 pl-40 pr-6 purple-color font-semibold text-xl " style="width: max-content;">
                قصص نجاح بداية
            </div>
        </div>
        <div class="custom-scroll-container custom-scroll container grid mx-auto relative z-10 ">
            <div class="custom-scroll-list block lg:grid my-10 lg:grid-cols-3 sm:grid-cols-2 w-full success-stories-grid">
                <div class=" relative custom-scroll-item">
                    <div class="play-icon absolute z-10 right-0 left-0 top-0 w-12 rounded-full border-4 border border-white mx-auto bg-white">
                        <img src="./img/play-button_ex.png" />
                    </div>
                    <div class="relative rounded-tl-2xl rounded-br-2xl m-6 cyan-gradient-vertical p-10">
                        <div class="mb-4 text-white font-semibold custom-scroll h-32 p-2 overflow-auto">
                            <p>خلال مشوار محاولتهما الإنجاب لـ9 سنوات كاملة، توجه أستاذ محمد ومدام فاطمة للعديد من المراكز والمستشفيات داخل بلدهما ليبيا وخارجها، وجميع تلك المحاولات لم تجدي نفعاً، لكن عندما قررا اختيار مستشفى بداية تمكنا من تحقيق حلمهما في الإنجاب ومساعدتهما في علاج تأخر الحمل، فبعد إجراء الفحوصات الطبية والتحاليل اللازمة واكتشاف إصابة الزوجة</p>
                        </div>
                        <div style="bottom: -65px;" class="w-full absolute right-0 left-0 bottom-0 w-30  mx-auto">
                            <div class="rounded-full border-4 border border-white  bg-white w-20 mx-auto">
                                <img src="./img/Ellipse_13.png" alt="" />
                            </div>
                            <a class="block mx-auto text-center w-40 font-semibold" href="#!"><span>محمود و هناء</span></a>
                        </div>
                    </div>
                </div>
                <div class=" relative custom-scroll-item">
                    <div class="play-icon absolute z-10 right-0 left-0 top-0 w-12 rounded-full border-4 border border-white mx-auto bg-white">
                        <img src="./img/play-button_ex.png" />
                    </div>
                    <div class="relative rounded-tl-2xl rounded-br-2xl m-6 cyan-gradient-vertical p-10">
                        <div class="mb-4 text-white font-semibold custom-scroll h-32 p-2 overflow-auto">
                            <p>خلال مشوار محاولتهما الإنجاب لـ9 سنوات كاملة، توجه أستاذ محمد ومدام فاطمة للعديد من المراكز والمستشفيات داخل بلدهما ليبيا وخارجها، وجميع تلك المحاولات لم تجدي نفعاً، لكن عندما قررا اختيار مستشفى بداية تمكنا من تحقيق حلمهما في الإنجاب ومساعدتهما في علاج تأخر الحمل، فبعد إجراء الفحوصات الطبية والتحاليل اللازمة واكتشاف إصابة الزوجة</p>
                        </div>
                        <div style="bottom: -65px;" class="w-full absolute right-0 left-0 bottom-0 w-30  mx-auto">
                            <div class="rounded-full border-4 border border-white  bg-white w-20 mx-auto">
                                <img src="./img/Ellipse_10.png" alt="" />
                            </div>
                            <a class="block mx-auto text-center w-40 font-semibold" href="#!"><span>بيتر و سارة</span></a>
                        </div>
                    </div>
                </div>
                <div class=" relative custom-scroll-item">
                    <div class="play-icon absolute z-10 right-0 left-0 top-0 w-12 rounded-full border-4 border border-white mx-auto bg-white">
                        <img src="./img/play-button_ex.png" />
                    </div>
                    <div class="relative rounded-tl-2xl rounded-br-2xl m-6 cyan-gradient-vertical p-10">
                        <div class="mb-4 text-white font-semibold custom-scroll h-32 p-2 overflow-auto">
                            <p>خلال مشوار محاولتهما الإنجاب لـ9 سنوات كاملة، توجه أستاذ محمد ومدام فاطمة للعديد من المراكز والمستشفيات داخل بلدهما ليبيا وخارجها، وجميع تلك المحاولات لم تجدي نفعاً، لكن عندما قررا اختيار مستشفى بداية تمكنا من تحقيق حلمهما في الإنجاب ومساعدتهما في علاج تأخر الحمل، فبعد إجراء الفحوصات الطبية والتحاليل اللازمة واكتشاف إصابة الزوجة</p>
                        </div>
                        <div style="bottom: -65px;" class="w-full absolute right-0 left-0 bottom-0 w-30  mx-auto">
                            <div class="rounded-full border-4 border border-white  bg-white w-20 mx-auto">
                                <img src="./img/Ellipse_12.png" alt="" />
                            </div>
                            <a class="block mx-auto text-center w-40 font-semibold" href="#!"><span>خالد و حسناء</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="relative py-10 cyan-gradient45 w-full overflow-hidden " style="z-index: 9999;">
        <img src="./img/light-network.png" class="absolute left-0 top-0 w-full" style="opacity: .5;" />
        <div class="container grid mx-auto relative z-10 ">
            <div class="title-gradient rounded-lg py-2 pl-40 pr-6 purple-color font-semibold text-xl " style="width: max-content;">
                تعرف على خبراء المستشفى
            </div>
        </div>
        <div class="custom-scroll-container custom-scroll container grid mx-auto relative z-10 ">
            <div class="custom-scroll-list block lg:grid my-10 lg:grid-cols-3 sm:grid-cols-2 w-full doctors-grid">
                <div class=" relative custom-scroll-item">
                    <div style="top:-15px" class="absolute z-10 right-0 left-0 top-0 w-20 rounded-full border-4 border border-white mx-auto bg-white">
                        <img src="./img/Ellipse_13.png" />
                    </div>
                    <div class="relative rounded-tl-2xl rounded-br-2xl m-2 mx-4 bg-white lg:py-10 lg:px-10 py-10 px-2 pb-6">
                        <span class="block text-center pt-6 pb-2 w-full text-xl text-gray-800 font-semibold">أ.د/ إسماعيل أبو الفتوح</span>
                        <span class="block text-center  pb-2 w-full text-base cyan-color font-semibold">رئيس مجلس الإدارة</span>
                        <div class="mb-4 text-gray-600  font-semibold custom-scroll h-32 p-2 overflow-auto">
                            <p>بداية رحلة البروفيسور إسماعيل أبوالفتوح كانت من داخل جدران مستشفى مصر الدولي، فهو مؤسس قسم الحقن المجهري هناك، وصاحب الفضل في التوسعات التي شهدها قسم علاج العقم وتأخر الحمل، حتى وصل الأمر إلى تأسيس صرح طبي متكامل وهو مستشفى بداية، التي باتت واحدة من أعرق المؤسسات الطبية العلاجية في المنطقة العربية بالكامل، ووجهة عالمية يقصدها مختلف الجنسيات والثقافات لتلقى خدمة طبية متميزة</p>
                        </div>
                        <a href="#!" class="block mx-auto w-32 py-2 px-6 bg-blue-100 text-center rounded-lg">المزيد</a>
                    </div>
                </div>
                <div class=" relative custom-scroll-item">
                    <div style="top:-15px" class="absolute z-10 right-0 left-0 top-0 w-20 rounded-full border-4 border border-white mx-auto bg-white">
                        <img src="./img/Ellipse_13.png" />
                    </div>
                    <div class="relative rounded-tl-2xl rounded-br-2xl m-2 mx-4 bg-white lg:py-10 lg:px-10 py-10 px-2 pb-6">
                        <span class="block text-center pt-6 pb-2 w-full text-xl text-gray-800 font-semibold">أ.د/ ماجد عادل عزيز</span>
                        <span class="block text-center  pb-2 w-full text-base cyan-color font-semibold">استاذ واستشاري طب
                            النساء و التوليد</span>
                        <div class="mb-4 text-gray-600  font-semibold custom-scroll h-32 p-2 overflow-auto">
                            <p>بداية رحلة البروفيسور إسماعيل أبوالفتوح كانت من داخل جدران مستشفى مصر الدولي، فهو مؤسس قسم الحقن المجهري هناك، وصاحب الفضل في التوسعات التي شهدها قسم علاج العقم وتأخر الحمل، حتى وصل الأمر إلى تأسيس صرح طبي متكامل وهو مستشفى بداية، التي باتت واحدة من أعرق المؤسسات الطبية العلاجية في المنطقة العربية بالكامل، ووجهة عالمية يقصدها مختلف الجنسيات والثقافات لتلقى خدمة طبية متميزة</p>
                        </div>
                        <a href="#!" class="block mx-auto w-32 py-2 px-6 bg-blue-100 text-center rounded-lg">المزيد</a>
                    </div>
                </div>
                <div class=" relative custom-scroll-item">
                    <div style="top:-15px" class="absolute z-10 right-0 left-0 top-0 w-20 rounded-full border-4 border border-white mx-auto bg-white">
                        <img src="./img/Ellipse_13.png" />
                    </div>
                    <div class="relative rounded-tl-2xl rounded-br-2xl m-2 mx-4 bg-white lg:py-10 lg:px-10 py-10 px-2 pb-6">
                        <span class="block text-center pt-6 pb-2 w-full text-xl text-gray-800 font-semibold">أ.د/ محمد فوزي غالي</span>
                        <span class="block text-center  pb-2 w-full text-base cyan-color font-semibold">استاذ امراض الذكورة و العقم</span>
                        <div class="mb-4 text-gray-600  font-semibold custom-scroll h-32 p-2 overflow-auto">
                            <p>بداية رحلة البروفيسور إسماعيل أبوالفتوح كانت من داخل جدران مستشفى مصر الدولي، فهو مؤسس قسم الحقن المجهري هناك، وصاحب الفضل في التوسعات التي شهدها قسم علاج العقم وتأخر الحمل، حتى وصل الأمر إلى تأسيس صرح طبي متكامل وهو مستشفى بداية، التي باتت واحدة من أعرق المؤسسات الطبية العلاجية في المنطقة العربية بالكامل، ووجهة عالمية يقصدها مختلف الجنسيات والثقافات لتلقى خدمة طبية متميزة</p>
                        </div>
                        <a href="#!" class="block mx-auto w-32 py-2 px-6 bg-blue-100 text-center rounded-lg">المزيد</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="relative py-10  w-full overflow-hidden " style="z-index: 9999;">
        <img src="./img/circles-bg.png" class="absolute left-0 top-0 w-full" alt="" style="opacity: 0.1;" />
        <div class=" container grid mx-auto relative z-10 ">
            <div class="title-gradient rounded-lg py-2 pl-40 pr-6 purple-color font-semibold text-xl " style="width: max-content;">
                أحدث المقالات
            </div>
        </div>
        <div class="custom-scroll-container custom-scroll container grid mx-auto relative z-10 ">
            <div class="custom-scroll-list block lg:grid my-10 lg:grid-cols-3 sm:grid-cols-2 w-full news-grid">
                <div class=" relative custom-scroll-item">
                    <div class="relative rounded-tl-2xl text-center lightcyan-bg rounded-br-2xl m-6  p-4">
                        <img src="./img/Rectangle_59_hu.png" alt="" class="rounded-tl-2xl mb-4" />
                        <a href="#!" class="text-lg font-semibold purple-color">مشاكل تشوه الحيوانات المنوية وتأثيرها على الاجهاض</a>
                        <div class="my-4 text-gray-500 font-semibold custom-scroll h-32 p-2 overflow-auto">
                            <p>خلال مشوار محاولتهما الإنجاب لـ9 سنوات كاملة، توجه أستاذ محمد ومدام فاطمة للعديد من المراكز والمستشفيات داخل بلدهما ليبيا وخارجها، وجميع تلك المحاولات لم تجدي نفعاً، لكن عندما قررا اختيار مستشفى بداية تمكنا من تحقيق حلمهما في الإنجاب ومساعدتهما في علاج تأخر الحمل، فبعد إجراء الفحوصات الطبية والتحاليل اللازمة واكتشاف إصابة الزوجة</p>
                        </div>
                        <a href="#!" class="block mx-auto w-32 py-2 px-6 cyan-bg text-center rounded-lg">المزيد</a>
                    </div>
                </div>
                <div class=" relative custom-scroll-item">
                    <div class="relative rounded-tl-2xl text-center lightcyan-bg rounded-br-2xl m-6  p-4">
                        <img src="./img/Rectangle_59_hm.png" alt="" class="rounded-tl-2xl mb-4" />
                        <a href="#!" class="text-lg font-semibold purple-color">مشاكل تشوه الحيوانات المنوية وتأثيرها على الاجهاض</a>
                        <div class="my-4 text-gray-500 font-semibold custom-scroll h-32 p-2 overflow-auto">
                            <p>خلال مشوار محاولتهما الإنجاب لـ9 سنوات كاملة، توجه أستاذ محمد ومدام فاطمة للعديد من المراكز والمستشفيات داخل بلدهما ليبيا وخارجها، وجميع تلك المحاولات لم تجدي نفعاً، لكن عندما قررا اختيار مستشفى بداية تمكنا من تحقيق حلمهما في الإنجاب ومساعدتهما في علاج تأخر الحمل، فبعد إجراء الفحوصات الطبية والتحاليل اللازمة واكتشاف إصابة الزوجة</p>
                        </div>
                        <a href="#!" class="block mx-auto w-32 py-2 px-6 cyan-bg text-center rounded-lg">المزيد</a>
                    </div>
                </div>
                <div class=" relative custom-scroll-item">
                    <div class="relative rounded-tl-2xl text-center lightcyan-bg rounded-br-2xl m-6  p-4">
                        <img src="./img/Rectangle_59.png" alt="" class="rounded-tl-2xl mb-4" />
                        <a href="#!" class="text-lg font-semibold purple-color">مشاكل تشوه الحيوانات المنوية وتأثيرها على الاجهاض</a>
                        <div class="my-4 text-gray-500 font-semibold custom-scroll h-32 p-2 overflow-auto">
                            <p>خلال مشوار محاولتهما الإنجاب لـ9 سنوات كاملة، توجه أستاذ محمد ومدام فاطمة للعديد من المراكز والمستشفيات داخل بلدهما ليبيا وخارجها، وجميع تلك المحاولات لم تجدي نفعاً، لكن عندما قررا اختيار مستشفى بداية تمكنا من تحقيق حلمهما في الإنجاب ومساعدتهما في علاج تأخر الحمل، فبعد إجراء الفحوصات الطبية والتحاليل اللازمة واكتشاف إصابة الزوجة</p>
                        </div>
                        <a href="#!" class="block mx-auto w-32 py-2 px-6 cyan-bg text-center rounded-lg">المزيد</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php'); ?> 