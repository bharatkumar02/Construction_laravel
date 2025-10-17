@extends('construction_website.layout.app')

@section('title', 'About Us - Construction Website')

@section('content')
<!-- About Us Page -->
<div>
  <!-- HERO -->
  <section class="flex flex-col-reverse gap-0 items-center lg:flex-row lg:h-full">
      <!-- left -->
      <div class="p-8 lg:pl-20 xl:pl-28 whitespace-nowrap">
        <h1 class="mt-4 text-4xl lg:text-5xl font-bold leading-tight font-montserrat">
          About Us
        </h1>
        <div
          class="font-montserrat font-semibold text-[14px] flex items-center gap-3 mt-2.5"
        >
          <span>Home</span><span>/</span><span>About Us</span>
        </div>
      </div>

      <!-- big machine card -->
      <div class="relative w-full lg:z-20 lg:pt-16">
        <div>
          <img
            src="./images/team.png"
            alt="backhoe"
            class="object-contain max-w-[20rem] lg:max-w-[38rem] mx-auto drop-shadow-lg"
          />
        </div>
        <div
          class="absolute h-[70%] bg-gradient-to-b from-black via-black to-black/85 w-full top-0 -z-10 lg:h-full lg:w-[50%] lg:right-0"
        ></div>
      </div>
    </section>

    <!-- Our History -->
    <section class="bg-gray-100 lg:py-24 flex flex-col-reverse *:lg:w-1/2 lg:flex-row">
      <div class="lg:text-start px-6 md:px-10 lg:px-10 xl:px-16 py-10 lg:pt-0 pb-16">
        <div class="text-sm text-yellow-500 font-semibold font-montserrat">
          Our Work Process
        </div>
        <h2 class="mt-2 text-3xl font-bold font-montserrat lg:pb-4">How We Work</h2>
        <p class="mt-4 text-[15px] leading-relaxed tracking-wide">
          From humble beginnings to a trusted industry name, BuildStrong Constructions has
          been shaping communities and skylines for over a decade.
        </p>

        <div class="mt-6 space-y-5 text-[15px] leading-relaxed tracking-wide">
          <p>
            Founded in <span class="font-semibold text-gray-900">2010</span>, our company
            began with a small team of passionate engineers and architects dedicated to
            creating reliable and modern infrastructure.
          </p>
          <p>
            By <span class="font-semibold text-gray-900">2015</span>, we had expanded into
            commercial and industrial construction, building a strong portfolio across
            multiple sectors.
          </p>
          <p>
            Today, with over
            <span class="font-semibold text-gray-900">500+ successful projects</span> and
            a growing team of professionals, we continue to innovate and build with
            integrity, delivering value that stands the test of time.
          </p>
        </div>
        <!-- Founder Quote -->
        <blockquote
          class="mt-8 border-l-4 border-yellow-500 pl-4 italic text-gray-700 flex gap-3 flex-col"
        >
          “We started with one goal — to build not just structures, but trust. That belief
          still guides every project we deliver.”
          <span class="not-italic font-semibold text-gray-900 font-montserrat"
            >— Bharat Kumar, <span class="text-yellow-500">Founder</span></span
          >
        </blockquote>
      </div>

      <div class="lg:rounded-l-md relative z-10">
        <img src="./images/discussion.jpg" alt="" class="rounded-l-md shadow-lg" />

        <div
          class="flex absolute bg-white -bottom-5 right-2 gap-0.5 shadow-md flex-col px-3 py-3 text-[13px] font-semibold lg:-top-5 lg:h-fit lg:left-5 lg:right-auto"
        >
          Since <span class="text-2xl font-montserrat font-bold"> 2015</span>
        </div>
      </div>
    </section>

    <!-- Mission and Vision -->
    <section>
      <div class="grid md:grid-cols-2">
        <!-- Our Mission -->
        <div class="bg-black text-white p-4 py-10 lg:px-7 xl:px-12">
          <h3 class="font-montserrat text-3xl font-bold mt-2 text-center">Our Mission</h3>
          <div class="pt-12 xl:flex xl:gap-3.5">
            <span
              class="float-left max-w-[8rem] xl:max-w-[12rem] pr-2 shrink-0 xl:float-none"
              ><img src="./images/img.png" alt="" class="drop-shadow-lg"
            /></span>
            <p class="tracking-wide leading-relaxed text-[15px] lg:text-base">
              At BuildStrong Constructions, our mission is to deliver high-quality, safe,
              and sustainable construction solutions that exceed client expectations. We
              are committed to precision in planning, excellence in execution, and
              transparency in every project. By blending technology with craftsmanship, we
              aim to build not just structures, but lasting relationships founded on trust
              and reliability.
            </p>
          </div>
        </div>
        <!-- Our Visions -->
        <div class="bg-yellow-500 text-white p-4 py-10 lg:px-7 xl:px-12">
          <h3 class="font-montserrat text-3xl font-bold mt-2 text-center">Our Vision</h3>
          <div class="pt-12 xl:flex xl:gap-3.5">
            <span
              class="float-left max-w-[8rem] xl:max-w-[12rem] pr-2 shrink-0 xl:float-none"
              ><img src="./images/rollar.png" alt="" class="drop-shadow-lg"
            /></span>
            <p class="tracking-wide leading-relaxed text-[15px] lg:text-base">
              Our vision is to be a trusted leader in the construction industry, known for
              innovation, quality, and sustainable practices. We aim to shape the future
              of modern infrastructure by building smarter, greener, and more resilient
              spaces that improve lives and communities.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Team Members -->
    <section class="px-6 pt-16 bg-white lg:px-14 xl:px-32 pb-28">
      <div class="text-center lg:pb-10">
        <div class="text-sm text-yellow-500 font-semibold font-montserrat">
          Our Team
        </div>
        <h2 class="mt-2 text-3xl font-bold font-montserrat">
          Our Team Members
        </h2>
        <p class="mt-3 text-gray-600 max-w-2xl mx-auto leading-relaxed">
          Explore our machinery categories — find reliable equipment for your project
          quickly.
        </p>
      </div>

      <!-- Team -->
      <div class="mt-10 flex flex-col gap-7 md:flex-row xl:gap-10 lg:mt-5">
        <div class="border-[0.5px] shadow shadow-gray-200 border-gray-100 rounded overflow-hidden">
          <div class="w-full">
            <img
              src="https://wpcharming.com/construction/wp-content/uploads/sites/8/2015/02/Member3-800x400.jpg"
              alt=""
              class="w-full"
            />
          </div>
          <div class="space-y-2.5 p-4">
            <h3 class="font-montserrat font-semibold text-[15px]">Bharat Kumar</h3>
            <p class="text-[15px] text-gray-600 leading-relaxed">
              Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo
              erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus
              orci luctus et ultrices posuere cubilia Curae.
            </p>
            <i class="font-montserrat font-semibold flex gap-0.5 text-yellow-600"><span class="w-5 h-[3px] bg-yellow-600 mt-4"></span>Building Worker</i>
          </div>
        </div>
        <div class="border-[0.5px] shadow shadow-gray-200 border-gray-100 rounded overflow-hidden">
          <div class="w-full">
            <img
              src="https://wpcharming.com/construction/wp-content/uploads/sites/8/2015/02/Member2-800x400.jpg"
              alt=""
              class="w-full"
            />
          </div>
          <div class="space-y-2.5 p-4">
            <h3 class="font-montserrat font-semibold text-[15px]">Bharat Kumar</h3>
            <p class="text-[15px] text-gray-600 leading-relaxed">
              Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo
              erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus
              orci luctus et ultrices posuere cubilia Curae.
            </p>
            <i class="font-montserrat font-semibold flex gap-0.5 text-yellow-600"><span class="w-5 h-[3px] bg-yellow-600 mt-4"></span>Project Manager</i>
          </div>
        </div>
        <div class="border-[0.5px] shadow shadow-gray-200 border-gray-100 rounded overflow-hidden">
          <div class="w-full">
            <img
              src="https://wpcharming.com/construction/wp-content/uploads/sites/8/2015/02/Member1-800x400.jpg"
              alt=""
              class="w-full"
            />
          </div>
          <div class="space-y-2.5 p-4">
            <h3 class="font-montserrat font-semibold text-[15px]">Ankit Yadav</h3>
            <p class="text-[15px] text-gray-600 leading-relaxed">
              Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo
              erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus
              orci luctus et ultrices posuere cubilia Curae.
            </p>
            <i class="font-montserrat font-semibold flex gap-0.5 text-yellow-600"><span class="w-5 h-[3px] bg-yellow-600 mt-4"></span>Construction Manager</i>
          </div>
        </div>
      </div>
    </section>
</div>

@endsection