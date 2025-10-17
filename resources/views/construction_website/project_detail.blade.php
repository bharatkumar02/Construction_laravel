@extends('construction_website.layout.app')

@section('title', 'FAQ - Construction Website')

@section('content')

<!-- Equipment Page -->
<section
  id="equipment-section"
  class="py-14 px-6 md:px-16 bg-gray-100 pb-24 flex flex-col gap-10 lg:flex-row *:lg:w-1/2 lg:py-32">
  <div class="flex flex-col gap-4">
    <div>
      <img
        src="https://anpsthemes.com/constructo-new-demos/2/wp-content/uploads/2014/12/42.jpg"
        alt="" />
    </div>
    <div>
      <img
        src="https://anpsthemes.com/constructo-new-demos/2/wp-content/uploads/2014/12/11.jpg"
        alt="" />
    </div>
  </div>

  <div class="space-y-3.5">
    <h2 class="font-semibold font-montserrat text-xl">Interior Design</h2>
    <h3 class="text-gray-500 text-[15px]">
      <i class="ri-time-fill"></i>
      <span class="font-semibold font-montserrat">Project Done :</span>
      <i class="font-medium pl-1.5">3 Months</i>
    </h3>
    <div class="space-y-1.5">
      <h4 class="font-semibold font-montserrat">Project Description</h4>
      <div class="space-y-3">
        <p class="leading-relaxed">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin suscipit
          convallis facilisis. Fusce lectus ex, pretium efficitur suscipit sed,
          faucibus vel elit. Sed eu vestibulum leo. Phasellus at quam id elit
          hendrerit semper feugiat id nunc. Morbi quis justo velit. Duis semper lacus
          scelerisque, aliquam leo quis, porttitor leo. Etiam lobortis dapibus libero
          vel porttitor. Nulla tempor elit nec feugiat tempus.
        </p>
        <p class="leading-relaxed">
          Nulla facilisis augue vel augue viverra, hendrerit vehicula lorem rutrum.
          Nunc scelerisque sed risus eget ultrices. Morbi lacinia mollis orci sed
          aliquet. Ut sed bibendum augue. Nullam pretium aliquam elit non sagittis.
          Proin consequat aliquet massa, non cursus mi euismod ac. Vestibulum
          hendrerit, sapien in tristique tristique, libero magna posuere massa, sit
          amet pretium felis eros non dolor.
        </p>
      </div>
    </div>

    <h3 class="text-gray-500 text-[15px] flex gap-1 pt-2.5">
      <i class="ri-map-pin-2-fill"></i>
      <span class="font-semibold font-montserrat whitespace-nowrap">Location :</span>
      <i class="font-medium pl-1.5">Dharuhera, Hanuman Mandir, Near Badi Haveli</i>
    </h3>
    <ul class="space-y-2 *:space-x-2.5 text-[15px] pt-3.5">
      <li>
        <span class="text-xl"><i class="ri-timer-fill"></i></span><span class="font-medium">Timely Project Delivery</span>
      </li>
      <li>
        <span class="text-xl"><i class="ri-stack-fill"></i></span><span class="font-medium">Superior Build Quality</span>
      </li>
      <li>
        <span class="text-xl"><i class="ri-shake-hands-fill"></i></span><span class="font-medium">Client-Centric Approach</span>
      </li>
    </ul>
    <a href="" class="block py-3 space-x-2.5"><span class="text-xl"><i class="ri-phone-fill"></i></span><span class="font-semibold tracking-wider">+91 837-897-6133</span></a>
    <button class="px-6 py-2 bg-black text-white font-montserrat">
      Contact Us
      <span class="font-medium text-lg pl-1.5"><i class="ri-arrow-right-long-fill"></i></span>
    </button>
  </div>
</section>

@endsection