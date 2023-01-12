<?php include('header.php'); ?> 
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRgjWCid8c7P8qfmXSgS_XHsVDEwgIFTY" async defer></script>

    <div class="w-full cyan-bg py-10 relative ">
        <div class="w-full overflow-hidden h-full absolute bottom-0 left-0">        
            <img src="./img/light-network.png" class="absolute left-0 top-0 w-full" style="opacity: .3;" />
        </div>
        <div class="container mx-auto relative">
            <h1 class="text-2xl mx-auto w-72 text-center font-bold purple-color" >اتصل بنا</h1>
        </div>
    </div>


    <div class="blog-content">
        <img src="./img/circles-bg.png" class="absolute left-0 top-10 w-full " style="opacity: .05;" />

        <div class="offers-container px-2 my-10">
            
            <div class=" grid grid-cols-1 lg:grid-cols-3 gap-6 mb-20">
                <div class="w-full flex ">
                    <div id="map1" style="width: 100%; max-width: 500px; height: 250px"></div>
                </div>
                <div class="w-full  p-7 pb-0">
                    <h4 class="mb-2 text-2xl font-semibold purple-color pb-4">الدقي - مستشفى بداية</h4>
                    <p>إختاري إسم طفلك واختاري نوعه أيضا العالم، وهي تقنية تسمح للزوجين بإختيار جنس المولود. العرض يشمل تحديد النوع مع تكلفة الحقن المجهري&nbsp;</p>
                    <a href="#!" class="inline-block hover:bg-gray-800 mt-4 purple-bg py-3 px-4 rounded-lg text-white ">حجز موعد</a>

                </div>
                <div class="w-full bg-gray-100 rounded-xl p-6 pb-0">
                    <h4 class="text-lg font-semibold purple-color pb-4">للتواصل</h4>
                    <span class="w-20 border border-b-1  border-gray-200 block"></span>
                    <ul class="grid-cols-1 grid list-icon text-lg font-semibold">
                        <li>2 شارع أحمد المليحي، الدقي، الجيزة، مصر</li>
                        <li>(+2) 01225368744</li>
                    </ul>
                </div>
            </div>



            <div class=" grid grid-cols-1 lg:grid-cols-3 gap-6 mb-20">
                <div class="w-full flex ">
                  
                    <div id="map3" style="width: 100%; max-width: 500px; height: 250px"></div>

                </div>
                <div class="w-full  p-7 pb-0">
                    <h4 class="mb-2 text-2xl font-semibold purple-color pb-4">عيادات كليوباترا - الشيخ زايد</h4>
                    <p>إختاري إسم طفلك واختاري نوعه أيضا العالم، وهي تقنية تسمح للزوجين بإختيار جنس المولود. العرض يشمل تحديد النوع مع تكلفة الحقن المجهري&nbsp;</p>
                    <a href="#!" class="inline-block hover:bg-gray-800 mt-4 purple-bg py-3 px-4 rounded-lg text-white ">حجز موعد</a>

                </div>
                <div class="w-full bg-gray-100 rounded-xl p-6 pb-0">
                    <h4 class="text-lg font-semibold purple-color pb-4">للتواصل</h4>
                    <span class="w-20 border border-b-1  border-gray-200 block"></span>
                    <ul class="grid-cols-1 grid list-icon text-lg font-semibold">
                        <li>الشيخ زايد, المحور المركزى, مصر</li>
                        <li>(+2) 01225368744</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>

<script>
  function initMap1() {
    // Styles a map in night mode.
    var map = new google.maps.Map(document.getElementById('map1'), {
      center:  {lat: 30.0272, lng: 31.4889},
      zoom: 17,
      styles: [
        {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
        {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
        {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
      ]
    });
    var marker = new google.maps.Marker({
        position: {lat: 30.0272, lng: 31.4889},
        map: map,
        title: '[@map_address]'
      });
  }
  jQuery(document).ready(function(e){ setTimeout(function(){ initMap1(); }, 1000);})


function initMap3() {
// Styles a map in night mode.
var map = new google.maps.Map(document.getElementById('map3'), {
  center:  {lat: 30.0441, lng: 31.2156},
  zoom: 17,
  styles: [
    {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
    {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
    {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
  ]
});
var marker = new google.maps.Marker({
    position: {lat: 30.0441, lng: 31.2156},
    map: map,
    title: '[@map_address]'
  });
}
jQuery(document).ready(function(e){ setTimeout(function(){ initMap3(); }, 1000);})

</script>

<?php include('footer.php'); ?> 