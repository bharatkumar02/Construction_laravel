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
          class="object-contain max-w-[20rem] lg:max-w-[45rem] mx-auto drop-shadow-lg" />
      </div>
      <div
        class="absolute h-[70%] bg-gradient-to-b from-black via-black to-black/85 w-full top-0 -z-10 lg:h-full lg:w-[15%] lg:right-0"></div>
    </div>
  </section>

  <!-- My Project Page -->
  <section id="equipment-section" class="px-6 md:px-16 bg-gray-100 py-24 lg:flex lg:gap-14 relative 2xl:px-38">
    <!-- Description Of Page -->
    <div
      class="bg-gradient-to-b from-yellow-600 via-yellow-600 to-yellow-500 text-white font-montserrat p-5 leading-relaxed py-8 lg:py-12 xl:px-8 lg:sticky lg:top-0 lg:max-w-[25rem] lg:h-fit">
      <div class="space-y-5 lg:space-y-8">
        <h2 class=" text-xl md:text-2xl leading-relaxed font-semibold md:pr-10">
          Powering Construction Success Across Sites
        </h2>
        <p>
          Every project we support is backed by reliable, high-performance construction vehicles. From excavation and material handling to roadwork and heavy lifting, our fleet helps clients complete tasks efficiently, safely, and on schedule.
        </p>

        <ul class="space-y-2 *:space-x-2.5 text-[15px]">
          <li>
            <span class="text-xl"><i class="ri-timer-fill"></i></span><span class="font-medium">On-Time Vehicle Delivery</span>
          </li>
          <li>
            <span class="text-xl"><i class="ri-stack-fill"></i></span><span class="font-medium">Well-Maintained, Reliable Fleet</span>
          </li>
          <li>
            <span class="text-xl"><i class="ri-shake-hands-fill"></i></span><span class="font-medium">Customer-Focused Service</span>
          </li>
        </ul>

        <a href=""><span class="text-xl"><i class="ri-phone-fill"></i></span><span class="font-semibold tracking-wider">+91 837-897-6133</span></a>
      </div>
      <div class="w-fit hover:-translate-y-1 transition-all duration-300 mt-7">

        <a href="#contact" class="px-6 py-2.5 bg-black text-white font-montserrat">
          Contact Us
          <span class="font-medium text-lg pl-1.5"><i class="ri-arrow-right-long-fill"></i></span>
        </a>
      </div>

      <div class="absolute size-[3.5rem] bg-gray-100 bottom-0 right-0"></div>
      <div class="absolute size-[2rem] bg-gray-100 bottom-0 right-14"></div>
      <div class="absolute p-5 bg-black top-10 right-3 lg:-top-3 lg:-right-3 flex flex-col"><span class="text-xl lg:text-3xl font-semibold tracking-wider">15+</span><span class="text-[10px] pt-0.5">Years of</span><span class="text-[10px]">Experience</span></div>
    </div>
    <div class="grid sm:grid-cols-2 gap-12 *:h-fit mt-14 lg:mt-0">

      <!-- Project Cards -->
      @php
      $jsonPath = resource_path('views/construction_website/data/projects.json');
      $projects = json_decode(file_get_contents($jsonPath), true);
      @endphp

      @foreach ($projects as $project)
      <div class="shadow shadow-gray-300 overflow-hidden rounded bg-white">
        <div class="h-[15rem]">
          <img
            src="{{ $project['images'][0] }}"
            alt="{{ $project['title'] }}"
            class="size-full object-cover" />
        </div>
        <div class="space-y-2.5 p-4 xl:p-6 pb-7">
          <div class="flex justify-between">
            <h3 class="font-montserrat font-semibold">{{ $project['title'] }}</h3>
            <div class="space-x-0.5 text-gray-400">
              <span><i class="ri-time-fill"></i></span>
              <i class="text-[14px]">{{ $project['duration'] }}</i>
            </div>
          </div>
          <p class="text-[15px] text-gray-600 leading-relaxed pt-2 mb-5 line-clamp-3">
            {{ $project['description'][1] }}
          </p>
          <div class="w-fit hover:-translate-y-1 transition-all duration-300">
            <a href="{{ route('project_detail', ['slug' => $project['slug']]) }}" class="px-6 py-2.5 bg-black rounded text-white font-montserrat">
              Know More
              <span class="font-medium text-lg pl-1.5"><i class="ri-arrow-right-long-fill"></i></span>
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>
</div>

<!-- whatsapp logo -->
<div class="fixed right-7 bottom-10 max-w-[3.5rem] z-50 group  border rounded-full border-green-500 p-2.5 drop-shadow-md bg-white/20 backdrop-blur-lg lg:max-w-[4rem] lg">
  <a href="" ><img class="group-hover:scale-110 transition-all duration-300" src="./images/whatsapp.svg" alt="whatsapp"></a>
</div>

@endsection