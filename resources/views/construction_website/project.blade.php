@extends('construction_website.layout.app')

@section('title', 'FAQ - Construction Website')

@section('content')

<div>
  <!-- HERO -->
  <section class="flex flex-col-reverse gap-0 items-center lg:flex-row lg:h-full">
    <!-- left -->
    <div class="p-8 lg:pl-20 xl:pl-28 whitespace-nowrap">
      <h1 class="mt-4 text-4xl lg:text-5xl font-bold leading-tight font-montserrat">
        Our Projects
      </h1>
      <div
        class="font-montserrat font-semibold text-[14px] flex items-center gap-3 mt-2.5">
        <span>Home</span><span>/</span><span>Projects</span>
      </div>
    </div>

    <!-- big machine card -->
    <div class="relative w-full lg:z-20 lg:pt-16">
      <div>
        <img
          src="./images/project.png"
          alt="backhoe"
          class="object-contain max-w-[20rem] lg:max-w-[38rem] mx-auto drop-shadow-lg" />
      </div>
      <div
        class="absolute h-[70%] bg-gradient-to-b from-black via-black to-black/85 w-full top-0 -z-10 lg:h-full lg:w-[50%] lg:right-0"></div>
    </div>
  </section>

  <!-- My Project Page -->
  <section id="equipment-section" class="py-14 px-6 md:px-16 bg-gray-100 pb-24">
    <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-12 *:h-fit lg:items-end">
      <!-- Description Of Page -->
      <div
        class="bg-gradient-to-b from-yellow-600 via-yellow-600 to-yellow-500 text-white font-montserrat p-5 leading-relaxed py-8 md:col-span-2 lg:py-12 xl:px-8 lg:col-span-1 relative">
        <div class="space-y-5 lg:space-y-8">
          <h2 class=" text-xl md:text-2xl leading-relaxed font-semibold md:pr-10">
            Building Landmarks, Delivering Excellence
          </h2>
          <p>
            Each project we deliver is built on trust, innovation, and precision. Our
            commitment to excellence ensures that every structure meets the highest
            standards of quality and design.
          </p>

          <ul class="space-y-2 *:space-x-2.5 text-[15px]">
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

          <a href=""><span class="text-xl"><i class="ri-phone-fill"></i></span><span class="font-semibold tracking-wider">+91 837-897-6133</span></a>
        </div>
        <button class="mt-7 px-6 py-2 bg-black text-white font-montserrat">
          Contact Us
          <span class="font-medium text-lg pl-1.5"><i class="ri-arrow-right-long-fill"></i></span>
        </button>

        <div class="absolute size-[3.5rem] bg-gray-100 bottom-0 right-0"></div>
        <div class="absolute size-[2rem] bg-gray-100 bottom-0 right-14"></div>
        <div class="absolute p-5 bg-black -top-16 -right-3 md:-top-3  flex flex-col"><span class="text-xl lg:text-3xl font-semibold tracking-wider">15+</span><span class="text-[10px] pt-0.5">Years of</span><span class="text-[10px]">Experience</span></div>
      </div>
      <!-- Project Grid -->
      <div
        class="border-[0.5px] shadow shadow-gray-300 border-gray-100 rounded overflow-hidden bg-white">
        <div class="w-full">
          <img
            src="https://wpcharming.com/construction/wp-content/uploads/sites/8/2015/02/Member3-800x400.jpg"
            alt=""
            class="w-full" />
        </div>
        <div class="space-y-2.5 p-4 xl:p-6 pb-7">
          <div class="flex justify-between">
            <h3 class="font-montserrat font-semibold">Interior Design</h3>
            <div class="space-x-0.5 text-gray-400">
              <span><i class="ri-time-fill"></i></span>
              <i class="text-[14px]">3 Months</i>
            </div>
          </div>
          <p class="text-[15px] text-gray-600 leading-relaxed pt-2">
            Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo
            erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus
            orci luctus et ultrices posuere cubilia Curae.
          </p>
          <a href="./project_detail.html" class="mt-4 px-6 py-2 bg-black rounded text-white font-montserrat">
            Know More
            <span class="font-medium text-lg pl-1.5"><i class="ri-arrow-right-long-fill"></i></span>
          </a>
        </div>
      </div>
      <div
        class="border-[0.5px] shadow shadow-gray-300 border-gray-100 rounded overflow-hidden bg-white">
        <div class="w-full">
          <img
            src="https://wpcharming.com/construction/wp-content/uploads/sites/8/2015/02/Member3-800x400.jpg"
            alt=""
            class="w-full" />
        </div>
        <div class="space-y-2.5 p-4 xl:p-6 pb-7">
          <div class="flex justify-between">
            <h3 class="font-montserrat font-semibold">Interior Design</h3>
            <div class="space-x-0.5 text-gray-400">
              <span><i class="ri-time-fill"></i></span>
              <i class="text-[14px]">3 Months</i>
            </div>
          </div>
          <p class="text-[15px] text-gray-600 leading-relaxed pt-2">
            Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo
            erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus
            orci luctus et ultrices posuere cubilia Curae.
          </p>
          <a href="./project_detail.html" class="mt-4 px-6 py-2 bg-black rounded text-white font-montserrat">
            Know More
            <span class="font-medium text-lg pl-1.5"><i class="ri-arrow-right-long-fill"></i></span>
          </a>
        </div>
      </div>
      <div
        class="border-[0.5px] shadow shadow-gray-300 border-gray-100 rounded overflow-hidden bg-white">
        <div class="w-full">
          <img
            src="https://wpcharming.com/construction/wp-content/uploads/sites/8/2015/02/Member3-800x400.jpg"
            alt=""
            class="w-full" />
        </div>
        <div class="space-y-2.5 p-4 xl:p-6 pb-7">
          <div class="flex justify-between">
            <h3 class="font-montserrat font-semibold">Interior Design</h3>
            <div class="space-x-0.5 text-gray-400">
              <span><i class="ri-time-fill"></i></span>
              <i class="text-[14px]">3 Months</i>
            </div>
          </div>
          <p class="text-[15px] text-gray-600 leading-relaxed pt-2">
            Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo
            erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus
            orci luctus et ultrices posuere cubilia Curae.
          </p>
          <a href="./project_detail.html" class="mt-4 px-6 py-2 bg-black rounded text-white font-montserrat">
            Know More
            <span class="font-medium text-lg pl-1.5"><i class="ri-arrow-right-long-fill"></i></span>
          </a>
        </div>
      </div>
      <div
        class="border-[0.5px] shadow shadow-gray-300 border-gray-100 rounded overflow-hidden bg-white">
        <div class="w-full">
          <img
            src="https://wpcharming.com/construction/wp-content/uploads/sites/8/2015/02/Member3-800x400.jpg"
            alt=""
            class="w-full" />
        </div>
        <div class="space-y-2.5 p-4 xl:p-6 pb-7">
          <div class="flex justify-between">
            <h3 class="font-montserrat font-semibold">Interior Design</h3>
            <div class="space-x-0.5 text-gray-400">
              <span><i class="ri-time-fill"></i></span>
              <i class="text-[14px]">3 Months</i>
            </div>
          </div>
          <p class="text-[15px] text-gray-600 leading-relaxed pt-2">
            Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo
            erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus
            orci luctus et ultrices posuere cubilia Curae.
          </p>
          <a href="./project_detail.html" class="mt-4 px-6 py-2 bg-black rounded text-white font-montserrat">
            Know More
            <span class="font-medium text-lg pl-1.5"><i class="ri-arrow-right-long-fill"></i></span>
          </a>
        </div>
      </div>
      <div
        class="border-[0.5px] shadow shadow-gray-300 border-gray-100 rounded overflow-hidden bg-white">
        <div class="w-full">
          <img
            src="https://wpcharming.com/construction/wp-content/uploads/sites/8/2015/02/Member3-800x400.jpg"
            alt=""
            class="w-full" />
        </div>
        <div class="space-y-2.5 p-4 xl:p-6 pb-7">
          <div class="flex justify-between">
            <h3 class="font-montserrat font-semibold">Interior Design</h3>
            <div class="space-x-0.5 text-gray-400">
              <span><i class="ri-time-fill"></i></span>
              <i class="text-[14px]">3 Months</i>
            </div>
          </div>
          <p class="text-[15px] text-gray-600 leading-relaxed pt-2">
            Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo
            erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus
            orci luctus et ultrices posuere cubilia Curae.
          </p>
          <a href="./project_detail.html" class="mt-4 px-6 py-2 bg-black rounded text-white font-montserrat">
            Know More
            <span class="font-medium text-lg pl-1.5"><i class="ri-arrow-right-long-fill"></i></span>
          </a>
        </div>
      </div>
    </div>
  </section>
</div>

@endsection