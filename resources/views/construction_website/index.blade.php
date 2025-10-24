@extends('construction_website.layout.app')

@section('title', 'Home - Construction Website')
@section('content')
  
 
    <!-- HERO -->
    <section class="flex flex-col-reverse gap-0 items-center lg:flex-row lg:h-full">
      <!-- left -->
      <div class="p-8 lg:pl-20 xl:pl-28">
        <div class="flex items-start justify-between pb-5">
          <div>
            <h6 class="text-yellow-500 font-montserrat font-semibold">
              Power That Moves Your Project
                   </h6>
            <h1 class="mt-4 text-4xl lg:text-5xl font-bold leading-tight font-montserrat">
             Looking for the <span class="text-yellow-500">best construction vehicles?</span>
            </h1>
            <p class="my-4 text-gray-700 text-[15px]">
            Rent heavy-duty machines from trusted providers — ready when and where you need them.            </p>
          </div>
        </div>
        <a href="#contact" class="px-6 py-3 bg-yellow-500 text-white font-montserrat">
          Contact Us
          <span class="font-medium text-lg pl-1.5"
            ><i class="ri-arrow-right-long-fill"></i
          ></span>
        </a>
      </div>

      <!-- big machine card -->
      <div class="relative w-full lg:z-20 lg:pt-16">
        <div>
          <img
            src="{{asset('images/banner.png')}}"
            alt="backhoe"
            class="object-contain max-w-[20rem] lg:max-w-[38rem] mx-auto drop-shadow-lg"
          />
        </div>
        <div
          class="absolute h-[70%] bg-gradient-to-b from-black via-black to-black/85 w-full top-0 -z-10 lg:h-full lg:w-[65%] lg:right-0"
        ></div>
      </div>
    </section>

    <!-- Browse categories -->
    <section class="px-6 pt-16 bg-gray-50 lg:px-10 xl:px-32 pb-28">
      <div class="text-center lg:pb-10">
        <div class="text-sm text-yellow-500 font-semibold font-montserrat">
Find the Right Vehicle
        </div>
        <h2 class="mt-2 text-3xl font-bold font-montserrat">
          Browse Machinery 
        </h2>
        <p class="mt-3 text-gray-600 max-w-2xl mx-auto">
          Explore our range of construction vehicles — rent the right machine for your project quickly and easily.
        </p>
      </div>

      <div class="relative swiper my-10 lg:!px-2">
        <!-- Wrapper -->
        <div class="swiper-wrapper pt-28 pb-3">
          <!-- Each Slide -->
          <div class="swiper-slide bg-white shadow rounded-md p-5 relative">
            <div class="absolute w-full px-10 -top-1/2 left-1/2 -translate-x-1/2">
              <img
                src="./images/weight-lifter.png"
                alt="Wheel Loaders"
                class="h-[10rem] w-auto object-contain drop-shadow-lg"
              />
            </div>
            <div class="pt-7 pb-1">
              <h4 class="mt-4 font-bold text-gray-800 font-montserrat">Wheel Loaders</h4>
              <p class="mt-2 text-sm text-gray-500 tracking-wide leading-6 min-h-[6rem]">
                Sturdy and reliable wheel loaders built for demanding construction
                environments. Ideal for lifting, loading, and transporting materials
                efficiently.
              </p>
            </div>
          </div>

          <div class="swiper-slide bg-white shadow rounded-md p-5 relative">
            <div class="absolute w-full px-10 -top-1/2 left-1/2 -translate-x-1/2">
              <img
                src="./images/jcb.png"
                alt="Site Dumpers"
                class="h-[10rem] w-auto object-contain drop-shadow-lg"
              />
            </div>
            <div class="pt-7 pb-1">
              <h4 class="mt-4 font-bold text-gray-800 font-montserrat">Site Dumpers</h4>
              <p class="mt-2 text-sm text-gray-500 tracking-wide leading-6 min-h-[6rem]">
                High-capacity dumpers ideal for moving heavy materials quickly and safely
                across construction sites and rough terrain.
              </p>
            </div>
          </div>

          <div class="swiper-slide bg-white p-5 shadow rounded-md">
            <div class="absolute w-full px-10 -top-1/2 left-1/2 -translate-x-1/2">
              <img
                src="./images/crane.png"
                alt="Excavators"
                class="h-[10rem] w-auto object-contain drop-shadow-lg"
              />
            </div>
            <div class="pt-7 pb-1">
              <h4 class="mt-4 font-bold text-gray-800 font-montserrat">Excavators</h4>
              <p class="mt-2 text-sm text-gray-500 tracking-wide leading-6 min-h-[6rem]">
                Powerful excavators built for all terrains, delivering strength and
                precision for digging, demolition, and heavy lifting operations.
              </p>
            </div>
          </div>

          <div class="swiper-slide bg-white p-5 shadow rounded-md">
            <div class="absolute w-full px-10 -top-1/2 left-1/2 -translate-x-1/2">
              <img
                src="./images/rollar.png"
                alt="Backhoe Loaders"
                class="h-[10rem] w-auto object-contain drop-shadow-lg"
              />
            </div>
            <div class="pt-7 pb-1">
              <h4 class="mt-4 font-bold text-gray-800 font-montserrat">
                Backhoe Loaders
              </h4>
              <p class="mt-2 text-sm text-gray-500 tracking-wide leading-6 min-h-[6rem]">
                Versatile backhoes perfect for small to large construction projects.
                Capable of digging, trenching, and lifting with outstanding control.
              </p>
            </div>
          </div>
          <div class="swiper-slide bg-white p-5 shadow rounded-md">
            <div class="absolute w-full px-10 -top-1/2 left-1/2 -translate-x-1/2">
              <img
                src="./images/rollar.png"
                alt="Backhoe Loaders"
                class="h-[10rem] w-auto object-contain drop-shadow-lg"
              />
            </div>
            <div class="pt-7 pb-1">
              <h4 class="mt-4 font-bold text-gray-800 font-montserrat">
                Backhoe Loaders
              </h4>
              <p class="mt-2 text-sm text-gray-500 tracking-wide leading-6 min-h-[6rem]">
                Versatile backhoes perfect for small to large construction projects.
                Capable of digging, trenching, and lifting with outstanding control.
              </p>
            </div>
          </div>
          <div class="swiper-slide bg-white p-5 shadow rounded-md">
            <div class="absolute w-full px-10 -top-1/2 left-1/2 -translate-x-1/2">
              <img
                src="./images/rollar.png"
                alt="Backhoe Loaders"
                class="h-[10rem] w-auto object-contain drop-shadow-lg"
              />
            </div>
            <div class="pt-7 pb-1">
              <h4 class="mt-4 font-bold text-gray-800 font-montserrat">
                Backhoe Loaders
              </h4>
              <p class="mt-2 text-sm text-gray-500 tracking-wide leading-6 min-h-[6rem]">
                Versatile backhoes perfect for small to large construction projects.
                Capable of digging, trenching, and lifting with outstanding control.
              </p>
            </div>
          </div>
        </div>

        <!-- Navigation Buttons -->
        <button
          class="custom-prev absolute top-10 left-2 -translate-y-1/2 z-50 w-10 h-10 cursor-pointer bg-white/70 text-black border-[0.5px] border-gray-500 flex items-center justify-center rounded-md hover:bg-black/10 transition-all"
          aria-label="Previous"
        >
          <i class="ri-arrow-left-s-line text-2xl"></i>
        </button>

        <button
          class="custom-next absolute top-10 right-2 -translate-y-1/2 z-50 w-10 h-10 cursor-pointer bg-white/70 text-black border-[0.5px] border-gray-500 flex items-center justify-center rounded-md hover:bg-black/10 transition-all"
          aria-label="Next"
        >
          <i class="ri-arrow-right-s-line text-2xl"></i>
        </button>
      </div>

      <div class="mt-8 text-center">
        <button class="mt-4 px-6 py-2 bg-black text-white font-montserrat">
          View More
          <span class="font-medium text-lg pl-1.5"
            ><i class="ri-arrow-right-long-fill"></i
          ></span>
        </button>
      </div>
    </section>

    <!-- CTA band -->
    <section class="max-w-7xl mx-auto -mt-14 md:text-center lg:text-start">
      <div
        class="bg-gradient-to-r from-black via-black to-black/85 p-6 flex flex-col gap-7 items-center justify-between text-white py-8 lg:flex-row lg:px-12 relative z-10 shadow-md"
      >
        <div>
          <div class="text-xl font-semibold font-montserrat">
            We Help The Heavy Equipment with Work Better
          </div>
          <div class="text-sm text-gray-300 mt-2 tracking-wide">
            Get the best maintenance & rental deals for your project
          </div>
        </div>
        <div class="flex items-center gap-2 font-montserrat text-sm">
          <a class="px-5 py-3 bg-yellow-500 font-semibold">Get A Quote</a>
          <a class="bg-white text-black px-5 py-2 flex items-center gap-1">
            <span class="text-lg"><i class="ri-phone-fill"></i></span>
            <span class="font-bold">+91 000-555-0121</span>
          </a>
        </div>

        <div
          class="hidden lg:block absolute right-0 top-0 -z-10 lg:bg-yellow-500 lg:h-full lg:w-[12rem]"
        ></div>
      </div>
    </section>

    <!-- How We Work Section -->
    <section
      class="bg-white pt-14 lg:py-24 font-montserrat lg:flex *:lg:w-1/2 lg:items-center"
    >
      <div class="text-center lg:text-start px-6 md:px-10 lg:px-16">
        <div class="text-sm text-yellow-500 font-semibold">Our Work Process</div>
        <h2 class="mt-2 text-3xl font-bold">How We Work</h2>
        <ul
          class="*:flex *:items-center flex flex-col gap-4 py-7 md:grid md:grid-cols-2 lg:gap-8 lg:pt-12"
        >
          <li>
            <strong
              class="size-[2.4rem] border-2 border-yellow-500 text-yellow-500 grid place-items-center text-lg"
              >1</strong
            >
            <span class="w-5 bg-yellow-500 h-0.5 mr-2"></span>
            <h3 class="font-semibold">Request Your Vehicle</h3>
          </li>
          <li>
            <strong
              class="size-[2.4rem] border-2 border-yellow-500 text-yellow-500 grid place-items-center text-lg"
              >2</strong
            >
            <span class="w-5 bg-yellow-500 h-0.5 mr-2"></span>
            <h3 class="font-semibold">Get a Quick Quote</h3>
          </li>
          <li>
            <strong
              class="size-[2.4rem] border-2 border-yellow-500 text-yellow-500 grid place-items-center text-lg"
              >3</strong
            >
            <span class="w-5 bg-yellow-500 h-0.5 mr-2"></span>
            <h3 class="font-semibold">Confirm Your Booking</h3>
          </li>
          <li>
            <strong
              class="size-[2.4rem] border-2 border-yellow-500 text-yellow-500 grid place-items-center text-lg"
              >4</strong
            >
            <span class="w-5 bg-yellow-500 h-0.5 mr-2"></span>
            <h3 class="font-semibold">Receive On-Site Delivery</h3>
          </li>
          <li>
            <strong
              class="size-[2.4rem] border-2 border-yellow-500 text-yellow-500 grid place-items-center text-lg"
              >5</strong
            >
            <span class="w-5 bg-yellow-500 h-0.5 mr-2"></span>
            <h3 class="font-semibold">Use with Full Support</h3>
          </li>
          <li>
            <strong
              class="size-[2.4rem] border-2 border-yellow-500 text-yellow-500 grid place-items-center text-lg"
              >6</strong
            >
            <span class="w-5 bg-yellow-500 h-0.5 mr-2"></span>
            <h3 class="font-semibold">Return Hassle-Free</h3>
          </li>
        </ul>

        <button class="mt-4 px-6 py-2 bg-yellow-500 text-white font-semibold">
          Know More
          <span class="font-medium text-lg pl-1.5"
            ><i class="ri-arrow-right-long-fill"></i
          ></span>
        </button>
      </div>

      <div class="lg:rounded-l-md relative z-10 mt-5 lg:mt-0">
        <img src="./images/choose.jpg" alt="" class="rounded-l-md shadow-lg" />
        <div
          class="hidden lg:block absolute h-full w-full bg-black -left-10 top-10 -z-10 rounded-l-md"
        ></div>
      </div>
    </section>

    <!-- Why Choose Us Section -->
    <section
      class="text-white space-y-4 bg-black pt-12 lg:flex *:lg:w-1/2 lg:space-y-0 lg:pt-0 lg:items-center"
    >
      <div class="px-6 md:px-16 lg:py-4">
        <div class="text-center lg:pb-10 lg:text-start">
          <!-- <div class="text-sm text-yellow-500 font-semibold font-montserrat">
            Why Choose Us
          </div> -->
          <h2 class="mt-2 text-3xl font-bold font-montserrat">Why Choose Us</h2>
          <p class="mt-3 text-gray-500 max-w-2xl mx-auto">
           At BuildStrong Rentals, we provide dependable construction vehicles and machinery backed by timely service and expert support — ensuring your projects run smoothly from start to finish.
          </p>
          <ul
            class="*:flex *:items-center space-y-4 mt-7 font-montserrat md:flex *:md:flex-col *:md:gap-4 *:md:items-start md:justify-between lg:space-y-0 lg:pt-4"
          >
            <li>
              <span
                class="size-[2.4rem] border-2 border-yellow-500 text-yellow-500 grid place-items-center text-lg"
                ><i class="ri-team-fill"></i
              ></span>
              <span class="w-5 bg-yellow-500 h-0.5 mr-2"></span>
              <h3 class="font-semibold">Expert Support</h3>
            </li>
            <li>
              <span
                class="size-[2.4rem] border-2 border-yellow-500 text-yellow-500 grid place-items-center text-lg"
                ><i class="ri-tools-fill"></i
              ></span>
              <span class="w-5 bg-yellow-500 h-0.5 mr-2"></span>
              <h3 class="font-semibold">Reliable Fleet</h3>
            </li>
            <li>
              <span
                class="size-[2.4rem] border-2 border-yellow-500 text-yellow-500 grid place-items-center text-lg"
              >
                <i class="ri-timer-flash-fill"></i>
              </span>
              <span class="w-5 bg-yellow-500 h-0.5 mr-2"></span>
              <h3 class="font-semibold">On-Time Delivery</h3>
            </li>
          </ul>
        </div>

        <div class="mt-8 text-center lg:mt-0 lg:text-start">
          <button class="px-6 py-2 bg-yellow-500 text-white font-semibold">
            Contact Us
            <span class="font-medium text-lg pl-1.5"
              ><i class="ri-arrow-right-long-fill"></i
            ></span>
          </button>
        </div>
      </div>

      <div class="relative">
        <img src="./images/choose_us.jpg" alt="" />
        <div class="absolute w-full -bottom-10">
          <div
            class="bg-yellow-500 text-white w-fit p-4 relative before:absolute before:[clip-path:polygon(100%_0,_0_0,_0_100%)] before:size-[2.5rem] before:bg-yellow-600 before:-right-[2.5rem] before:bottom-0 before:hidden before:md:block lg:before:hidden xl:before:block"
          >
            <ul class="flex items-center gap-5 *:flex *:flex-col tracking-wide md:gap-16">
              <li>
                <span class="text-xl font-montserrat font-bold lg:text-2xl xl:text-3xl"
                  >1.5k</span
                ><span class="text-xs md:text-sm">Clients Served</span>
              </li>
              <li>
                <span class="text-xl font-montserrat font-bold lg:text-2xl xl:text-3xl"
                  >15+</span
                ><span class="text-xs md:text-sm">Years of Experience</span>
              </li>
              <li>
                <span class="text-xl font-montserrat font-bold lg:text-2xl xl:text-3xl"
                  >40+</span
                ><span class="text-xs md:text-sm">Vehicles Available</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="px-6 bg-gray-50 lg:px-10 xl:px-32 pt-28">
      <div class="text-center lg:pb-10">
        <div class="text-sm text-yellow-500 font-semibold font-montserrat">
          Clients Feedback
        </div>
        <h2 class="mt-2 text-3xl font-bold font-montserrat">
          Words From Our Valued Customers
        </h2>
        <p class="mt-3 text-gray-600 max-w-2xl mx-auto">
          Hear from clients who rely on our construction vehicle rental services for timely delivery, reliable machines, and professional support.
        </p>
      </div>

      <div class="relative swiper my-10 lg:!px-2">
        <!-- Wrapper -->
        <div class="swiper-wrapper pt-0 pb-20">
          <!-- Each Slide -->
          <div class="swiper-slide bg-white p-5 shadow-md">
            <div class="border border-dashed w-fit p-1">
              <img
                src="./images/quotes.svg"
                alt="quotes"
                class="max-w-[2.5rem] bg-black p-1.5"
              />
            </div>
            <p class="py-10">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti eius unde
              natus illum vel quisquam vero labore dolorem temporibus sapiente.
            </p>
            <div class="font-semibold font-montserrat flex gap-3 flex items-center">
              <div class="max-w-[3rem] p-1.5 border-dashed border">
                <img src="./images//Bharat_Photo.jpeg" alt="" class="w-full" />
              </div>
              <h4 class="flex">
                Ankit Yadav <span class="w-5 mt-5 h-0.5 bg-black"></span>
              </h4>
            </div>
          </div>
          <div class="swiper-slide bg-white p-5 shadow-md">
            <div class="border border-dashed w-fit p-1">
              <img
                src="./images/quotes.svg"
                alt="quotes"
                class="max-w-[2.5rem] bg-black p-1.5"
              />
            </div>
            <p class="py-10">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti eius unde
              natus illum vel quisquam vero labore dolorem temporibus sapiente.
            </p>
            <div class="font-semibold font-montserrat flex gap-3 flex items-center">
              <div class="max-w-[3rem] p-1.5 border-dashed border">
                <img src="./images//Bharat_Photo.jpeg" alt="" class="w-full" />
              </div>
              <h4 class="flex">
                Ankit Yadav <span class="w-5 mt-5 h-0.5 bg-black"></span>
              </h4>
            </div>
          </div>
          <div class="swiper-slide bg-white p-5 shadow-md">
            <div class="border border-dashed w-fit p-1">
              <img
                src="./images/quotes.svg"
                alt="quotes"
                class="max-w-[2.5rem] bg-black p-1.5"
              />
            </div>
            <p class="py-10">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti eius unde
              natus illum vel quisquam vero labore dolorem temporibus sapiente.
            </p>
            <div class="font-semibold font-montserrat flex gap-3 flex items-center">
              <div class="max-w-[3rem] p-1.5 border-dashed border">
                <img src="./images//Bharat_Photo.jpeg" alt="" class="w-full" />
              </div>
              <h4 class="flex">
                Ankit Yadav <span class="w-5 mt-5 h-0.5 bg-black"></span>
              </h4>
            </div>
          </div>
          <div class="swiper-slide bg-white p-5 shadow-md">
            <div class="border border-dashed w-fit p-1">
              <img
                src="./images/quotes.svg"
                alt="quotes"
                class="max-w-[2.5rem] bg-black p-1.5"
              />
            </div>
            <p class="py-10">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti eius unde
              natus illum vel quisquam vero labore dolorem temporibus sapiente.
            </p>
            <div class="font-semibold font-montserrat flex gap-3 flex items-center">
              <div class="max-w-[3rem] p-1.5 border-dashed border">
                <img src="./images//Bharat_Photo.jpeg" alt="" class="w-full" />
              </div>
              <h4 class="flex">
                Ankit Yadav <span class="w-5 mt-5 h-0.5 bg-black"></span>
              </h4>
            </div>
          </div>
          <div class="swiper-slide bg-white p-5 shadow-md">
            <div class="border border-dashed w-fit p-1">
              <img
                src="./images/quotes.svg"
                alt="quotes"
                class="max-w-[2.5rem] bg-black p-1.5"
              />
            </div>
            <p class="py-10">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti eius unde
              natus illum vel quisquam vero labore dolorem temporibus sapiente.
            </p>
            <div class="font-semibold font-montserrat flex gap-3 flex items-center">
              <div class="max-w-[3rem] p-1.5 border-dashed border">
                <img src="./images//Bharat_Photo.jpeg" alt="" class="w-full" />
              </div>
              <h4 class="flex">
                Ankit Yadav <span class="w-5 mt-5 h-0.5 bg-black"></span>
              </h4>
            </div>
          </div>
        </div>

        <!-- Navigation Buttons -->
        <button
          class="custom-prev absolute -bottom-5 right-14 -translate-y-1/2 z-50 w-10 h-10 cursor-pointer bg-white/70 text-black border-[0.5px] border-gray-500 flex items-center justify-center rounded-md hover:bg-black/10 lg:top-0transition-all"
        >
          <i class="ri-arrow-left-s-line text-2xl"></i>
        </button>

        <button
          class="custom-next absolute -bottom-5 right-0 -translate-y-1/2 z-50 w-10 h-10 cursor-pointer bg-white/70 text-black border-[0.5px] border-gray-500 flex items-center justify-center rounded-md hover:bg-black/10 transition-all"
          aria-label="Next"
        >
          <i class="ri-arrow-right-s-line text-2xl"></i>
        </button>
      </div>
    </section>

    <!-- Partners -->
    <section class="max-w-7xl mx-auto mb-[3rem] md:mb-[10rem]">
      <div class="relative">
        <div
          class="text-center lg:pb-10 bg-black text-white py-7 px-5 md:py-12 md:pb-28 lg:pb-[8rem]"
        >
          <div class="text-sm text-yellow-500 font-semibold font-montserrat">
            Our Trusted Partners
          </div>
          <h2 class="mt-2 text-3xl font-bold font-montserrat">Our Trusted Companies</h2>
        </div>

        <div
          class="grid grid-cols-3 sm:grid-cols-6 gap-4 items-center p-7 md:absolute md:w-[80%] md:shadow-md md:left-1/2 md:-translate-x-1/2 md:-bottom-12 md:bg-white"
        >
          <!-- Replace with partner logos -->
          <div class="max-w-[10.5rem] p-2 bg-gray-100">
            <img
              src="https://wpcharming.com/construction/wp-content/uploads/sites/8/2015/02/logo1.png"
              alt="logo"
              class="w-full"
            />
          </div>
          <div class="max-w-[10.5rem] p-2 bg-gray-100">
            <img
              src="https://wpcharming.com/construction/wp-content/uploads/sites/8/2015/02/logo2.png"
              alt="logo2"
              class="w-full"
            />
          </div>
          <div class="max-w-[10.5rem] p-2 bg-gray-100">
            <img
              src="https://wpcharming.com/construction/wp-content/uploads/sites/8/2015/02/logo3.png"
              alt="logo3"
              class="w-full"
            />
          </div>
          <div class="max-w-[10.5rem] p-2 bg-gray-100">
            <img
              src="https://wpcharming.com/construction/wp-content/uploads/sites/8/2015/02/logo4.png"
              alt="logo4"
              class="w-full"
            />
          </div>
          <div class="max-w-[10.5rem] p-2 bg-gray-100">
            <img
              src="https://wpcharming.com/construction/wp-content/uploads/sites/8/2015/02/logo5.png"
              alt="logo5"
              class="w-full"
            />
          </div>
          <div class="max-w-[10.5rem] p-2 bg-gray-100">
            <img
              src="https://wpcharming.com/construction/wp-content/uploads/sites/8/2015/02/logo6.png"
              alt="logo6"
              class="w-full"
            />
          </div>
        </div>
      </div>
    </section>

   @endsection
 
