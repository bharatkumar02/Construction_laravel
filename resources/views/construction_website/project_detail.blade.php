@extends('construction_website.layout.app')

@section('title', $project['title'] . ' - Construction Website')

@section('content')

<section
  id="equipment-section"
  class="py-14 px-6 md:px-16 bg-gray-100 pb-24 flex flex-col gap-10 lg:flex-row *:lg:w-1/2 lg:py-32">

  {{-- Images --}}
  <div class="flex flex-col gap-4">
    @foreach ($project['images'] as $image)
    <div>
      <img src="{{ $image }}" alt="{{ $project['title'] }}" />
    </div>
    @endforeach
  </div>

  {{-- Project Info --}}
  <div class="space-y-3.5">
    <h2 class="font-semibold font-montserrat text-xl">{{ $project['title'] }}</h2>
    <h3 class="text-gray-500 text-[15px]">
      <i class="ri-time-fill"></i>
      <span class="font-semibold font-montserrat">Project Done :</span>
      <i class="font-medium pl-1.5">{{ $project['duration'] }}</i>
    </h3>

    {{-- Description --}}
    <div class="space-y-1.5">
      <h4 class="font-semibold font-montserrat">Project Description</h4>
      <div class="space-y-3">
        @foreach ($project['description'] as $paragraph)
        <p class="leading-relaxed">{{ $paragraph }}</p>
        @endforeach
      </div>
    </div>

    {{-- Location --}}
    <h3 class="text-gray-500 text-[15px] flex gap-1 pt-2.5">
      <i class="ri-map-pin-2-fill"></i>
      <span class="font-semibold font-montserrat whitespace-nowrap">Location :</span>
      <i class="font-medium pl-1.5">{{ $project['location'] }}</i>
    </h3>

    {{-- Features --}}
    <ul class="space-y-2 *:space-x-2.5 text-[15px] pt-3.5">
      @foreach ($project['features'] as $feature)
      <li>
        <span class="text-xl"><i class="{{ $feature['icon'] }}"></i></span>
        <span class="font-medium">{{ $feature['text'] }}</span>
      </li>
      @endforeach
    </ul>

    {{-- Contact --}}
    <a href="tel:{{ $project['contact'] }}" class="block py-3 space-x-2.5">
      <span class="text-xl"><i class="ri-phone-fill"></i></span>
      <span class="font-semibold tracking-wider">{{ $project['contact'] }}</span>
    </a>

    <div class="w-fit hover:-translate-y-1 transition-all duration-300">
      <a href="#contact" class="px-6 py-2 bg-black text-white font-montserrat">
        Contact Us
        <span class="font-medium text-lg pl-1.5"><i class="ri-arrow-right-long-fill"></i></span>
      </a>
    </div>
  </div>
</section>

<!-- whatsapp logo -->
<div class="fixed right-7 bottom-10 max-w-[3.5rem] z-50 group  border rounded-full border-green-500 p-2.5 drop-shadow-md bg-white/20 backdrop-blur-lg lg:max-w-[4rem] lg">
  <a href=""><img class="group-hover:scale-110 transition-all duration-300" src="../images/whatsapp.svg" alt="whatsapp"></a>
</div>

@endsection