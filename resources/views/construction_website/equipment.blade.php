@extends('construction_website.layout.app')

@section('title', 'Vehicle - Construction Website')

@section('content')


<!-- Vehicle Page -->
<div>
  <!-- HERO -->
  <section
    class="flex flex-col-reverse gap-0 items-center lg:flex-row lg:h-full overflow-hidden">
    <!-- left -->
    <div class="p-8 lg:pl-20 xl:pl-28 whitespace-nowrap">
      <h1 class="mt-4 text-4xl lg:text-5xl font-bold leading-tight font-montserrat">
        Our Machinery
      </h1>
      <div
        class="font-montserrat font-semibold text-[14px] flex items-center gap-3 mt-2.5">
        <span>Home</span><span>/</span><span>Machinery</span>
      </div>
    </div>

    <!-- big machine card -->
    <div class="relative w-full lg:z-20 lg:pt-16 xl:pt-20">
      <div class="py-7">
        <img
          src="./images/equipment.png"
          alt="backhoe"
          class="object-contain mx-auto drop-shadow-lg max-h-[17rem]" />
      </div>
      <div
        class="absolute h-[70%] bg-gradient-to-b from-black via-black to-black/85 w-full top-0 -z-10 lg:h-full lg:w-[50%] lg:right-0"></div>
    </div>
  </section>

  <!-- Vehicle Page -->
  <section id="equipment-section" class="py-14 px-6 md:px-16 bg-gray-100 pb-24 lg:py-28 lg:pb-28 lg:flex 2xl:px-38 lg:gap-14 lg:relative">
    <!-- Description Of Page -->
    <div
      class="bg-black text-white font-montserrat p-5 leading-relaxed shadow py-8 lg:py-12 xl:px-8 lg:max-w-[24rem] lg:w-full h-fit lg:sticky lg:top-0">
      <div class="space-y-5 lg:space-y-8">
        <h2 class="text-xl md:text-2xl font-semibold leading-relaxed">
Advanced Construction Vehicles for Every Challenge        </h2>
        <p>
          At BuildStrong Rentals, we maintain a modern and efficient fleet of construction vehicles. From powerful excavators and loaders to cranes and road rollers, every machine is routinely serviced and performance-tested to ensure reliability and safety.
        </p>
        <p>
          Our investment in advanced technology and expert maintenance ensures that
          With our investment in advanced technology and expert maintenance, our fleet is always ready to keep your projects on schedule — delivering efficiency, strength, and peace of mind with every rental.
        </p>
        <div class="flex flex-col gap-3 italic tracking-wider *:space-x-3.5">
          <a href=""><span><i class="ri-phone-fill"></i></span><span>+91 837-897-6133</span></a><a href=""><span><i class="ri-mail-open-fill"></i></span><span>kumarbharat9416@gmail.com</span></a>
        </div>
        <button class="mt-4 px-6 py-2 bg-yellow-500 text-white font-montserrat">
          Contact Us
          <span class="font-medium text-lg pl-1.5"><i class="ri-arrow-right-long-fill"></i></span>
        </button>
      </div>
    </div>
    <div class="grid sm:grid-cols-2 gap-[8rem] md:gap-10 *:h-fit lg:items-end mt-[10rem] lg:mt-0">
      <!-- Equipment Grid -->
      <div class="bg-white shadow rounded p-5 relative md:mt-20 lg:mt-28">
        <div class="absolute w-full px-10 -top-1/2 left-1/2 -translate-x-1/2">
          <img
            src="./images/truck.png"
            alt="Wheel Loaders"
            class="h-[10rem] w-auto object-contain drop-shadow-lg" />
        </div>
        <div class="pt-7 pb-1">
          <h4 class="mt-4 font-bold text-gray-800 font-montserrat">Backhoe Loader</h4>
          <p class="mt-2 text-sm text-gray-500 tracking-wide leading-6 min-h-[6rem]">
           Versatile and powerful, backhoe loaders are perfect for digging, trenching, and material handling. Ideal for medium-scale construction sites, they offer unmatched efficiency and flexibility. Our rentals come fully maintained, ensuring peak performance from the first day on site.
          </p>
        </div>
      </div>
      <div class="bg-white shadow rounded p-5 relative md:mt-20 lg:mt-28">
        <div class="absolute w-full px-10 -top-1/2 left-1/2 -translate-x-1/2">
          <img
            src="./images/mixer.png"
            alt="Wheel Loaders"
            class="h-[10rem] w-auto object-contain drop-shadow-lg" />
        </div>
        <div class="pt-7 pb-1">
          <h4 class="mt-4 font-bold text-gray-800 font-montserrat">
            Hydraulic Excavator
          </h4>
          <p class="mt-2 text-sm text-gray-500 tracking-wide leading-6 min-h-[6rem]">
          Designed for heavy-duty digging, demolition, and earthmoving, our hydraulic excavators deliver precision, strength, and reliability across all terrain conditions. Each unit is serviced and tested for optimal performance, helping you complete large-scale tasks efficiently.
          </p>
        </div>
      </div>
      <div class="bg-white shadow rounded p-5 relative md:mt-20 lg:mt-28">
        <div class="absolute w-full px-10 -top-1/2 left-1/2 -translate-x-1/2">
          <img
            src="./images/backheo.png"
            alt="Wheel Loaders"
            class="h-[10rem] w-auto object-contain drop-shadow-lg" />
        </div>
        <div class="pt-7 pb-1">
          <h4 class="mt-4 font-bold text-gray-800 font-montserrat">Soil Compactor</h4>
          <p class="mt-2 text-sm text-gray-500 tracking-wide leading-6 min-h-[6rem]">
            Engineered to provide superior ground stability, soil compactors ensure a solid foundation for roads, pavements, and large-scale construction projects. Renting from us guarantees machines that are fully maintained and ready to deliver consistent results.
          </p>
        </div>
      </div>
      <div class="bg-white shadow rounded p-5 relative md:mt-20 lg:mt-28">
        <div class="absolute w-full px-10 -top-1/2 left-1/2 -translate-x-1/2">
          <img
            src="./images/crane.png"
            alt="Wheel Loaders"
            class="h-[10rem] w-auto object-contain drop-shadow-lg" />
        </div>
        <div class="pt-7 pb-1">
          <h4 class="mt-4 font-bold text-gray-800 font-montserrat">Crawler Crane</h4>
          <p class="mt-2 text-sm text-gray-500 tracking-wide leading-6 min-h-[6rem]">
           Heavy-lifting made easy — crawler cranes provide powerful load capacity and stable mobility, making them ideal for high-rise construction and industrial projects. Our rental units undergo rigorous safety and performance checks for worry-free operation.
          </p>
        </div>
      </div>
      <div class="bg-white shadow rounded p-5 relative md:mt-20 lg:mt-28">
        <div class="absolute w-full px-10 -top-1/2 left-1/2 -translate-x-1/2">
          <img
            src="./images/buldozer.png"
            alt="Wheel Loaders"
            class="h-[10rem] w-auto object-contain drop-shadow-lg" />
        </div>
        <div class="pt-7 pb-1">
          <h4 class="mt-4 font-bold text-gray-800 font-montserrat">
            Concrete Mixer Truck
          </h4>
          <p class="mt-2 text-sm text-gray-500 tracking-wide leading-6 min-h-[6rem]">
            Our concrete mixers ensure consistent and efficient mixing, delivering high-quality concrete on schedule. Designed for durability and ease of use, they help keep your construction workflow smooth and uninterrupted.
          </p>
        </div>
      </div>
      <div class="bg-white shadow rounded p-5 relative md:mt-20 lg:mt-28">
        <div class="absolute w-full px-10 -top-1/2 left-1/2 -translate-x-1/2">
          <img
            src="./images/jcb.png"
            alt="Wheel Loaders"
            class="h-[10rem] w-auto object-contain drop-shadow-lg" />
        </div>
        <div class="pt-7 pb-1">
          <h4 class="mt-4 font-bold text-gray-800 font-montserrat">Motor Grader</h4>
          <p class="mt-2 text-sm text-gray-500 tracking-wide leading-6 min-h-[6rem]">
            Precision grading made simple — motor graders provide smooth and accurate finishes for road surfaces, foundations, and large construction areas. Fully maintained and ready for rental, they save time and improve project quality.
          </p>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- whatsapp logo -->
<div class="fixed right-7 bottom-10 max-w-[3.5rem] z-50 group  border rounded-full border-green-500 p-2.5 drop-shadow-md bg-white/20 backdrop-blur-lg lg:max-w-[4rem] lg">
  <a href="" ><img class="group-hover:scale-110 transition-all duration-300" src="./images/whatsapp.svg" alt="whatsapp"></a>
</div>

@endsection