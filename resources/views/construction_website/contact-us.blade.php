@extends('construction_website.layout.app')

@section('title', 'Contact Us')

@section('content')

<!-- HERO -->
<section class="flex flex-col-reverse gap-0 items-center lg:flex-row lg:h-full">
  <!-- left -->
  <div class="p-8 lg:pl-20 xl:pl-28 whitespace-nowrap">
    <h1 class="mt-4 text-4xl lg:text-5xl font-bold leading-tight font-montserrat">
      Contact Us
    </h1>
    <div
      class="font-montserrat font-semibold text-[14px] flex items-center gap-3 mt-2.5">
      <span>Home</span><span>/</span><span>Contact Us</span>
    </div>
  </div>

  <!-- big machine card -->
  <div class="relative w-full lg:z-20 lg:pt-16">
    <div>
      <img
        src="./images/calling.png"
        alt="backhoe"
        class="object-contain max-w-[15rem] lg:max-w-[25rem] mx-auto drop-shadow-lg" />
    </div>
    <div
      class="absolute h-[70%] bg-gradient-to-b from-black via-black to-black/85 w-full top-0 -z-10 lg:h-full lg:w-[50%] lg:right-0"></div>
  </div>
</section>

<!-- My Form -->
<section class="bg-gray-100 p-3 py-10 md:py-20 xl:py-36">
  <div
    class="space-y-10 *:mx-auto *:max-w-[700px] xl:mx-auto xl:flex xl:max-w-[1350px] xl:items-end xl:gap-16 xl:space-y-0 *:xl:max-w-full">
    <!-- {/* Detail */} -->
    <div class="space-y-8 xl:space-y-10">
      <div class="max-w-[35rem] space-y-2.5">
        <p
          class="font-montserrat text-lg font-semibold xl:text-2xl">
          We’re always ready to help !
        </p>
        <p>
          Count on us to provide dependable machinery and expert guidance — let’s work together to make your next project smooth, efficient, and successful. </p>
      </div>
      <div class="flex flex-col space-y-2.5 tracking-wide">
        <div class="flex gap-[20px] items-center">
          <div class="w-full max-w-[1.1rem] opacity-70">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 24 24"
              class="w-full">
              <path d="M18.364 17.364 12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0ZM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
            </svg>
          </div>
          <div class="flex flex-col leading-6">
            <span>f50204 Aditya Center City, Bhopal</span>
            <span> Madhya Pradesh | 201202 </span>
          </div>
        </div>
        <div class="flex gap-[20px] items-center">
          <div class="w-full max-w-[1.1rem] opacity-70">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 24 24"
              class="w-full">
              <path d="M21 16.42v3.536a1 1 0 0 1-.93.998c-.437.03-.794.046-1.07.046-8.837 0-16-7.163-16-16 0-.276.015-.633.046-1.07A1 1 0 0 1 4.044 3H7.58a.5.5 0 0 1 .498.45c.023.23.044.413.064.552A13.901 13.901 0 0 0 9.35 8.003c.095.2.033.439-.147.567l-2.158 1.542a13.047 13.047 0 0 0 6.844 6.844l1.54-2.154a.462.462 0 0 1 .573-.149 13.897 13.897 0 0 0 4 1.205c.139.02.322.041.55.064a.5.5 0 0 1 .449.498Z" />
            </svg>
          </div>
          <span>+91 7778541238</span>
        </div>
        <div class="flex gap-[20px] items-center">
          <div class="w-full max-w-[1.1rem] opacity-70">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 24 24"
              class="w-full">
              <path d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1Zm9.06 8.683L5.648 6.238 4.353 7.762l7.72 6.555 7.581-6.56-1.308-1.513-6.285 5.439Z" />
            </svg>
          </div>
          <span>construction@gmail.com</span>
        </div>
      </div>
      <div class="grid w-full max-w-[25rem] space-y-3.5 text-[15px] md:flex md:max-w-full md:gap-2.5 md:space-y-0 xl:gap-6">
        <!-- card 1 -->
        <div
          class="bg-white p-5 shadow-md rounded-md shadow-gray-200 md:w-1/3 border-t-2 border-black">
          <h3 class="font-montserrat pb-3.5 lg:text-[17px] font-medium flex items-center gap-3.5">
            <div class="w-[2rem] rounded-full bg-black/20 p-2 text-black">
              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="lucide lucide-phone-icon lucide-phone">
                <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" />
              </svg>
            </div>
            Call Support
          </h3>
          <div class="space-y-3.5">
            <p class="text-[15px]">Need help? Call our support team anytime!</p>
            <a
              href="tel:+910000000000"
              class="relative group w-fit font-semibold cursor-pointer py-1 text-yellow-600 transition-all duration-300 flex items-center gap-1.5 before:absolute before:bottom-0 before:left-0 before:w-0 before:bg-yellow-600 before:h-[1.5px] hover:text-yellow-600 before:transition-all before:duration-300 hover:before:w-full  ">
              <span class="tracking-wide">Call Now</span>
              <div class="w-[1.1rem] -rotate-45 group-hover:rotate-0 transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="lucide lucide-arrow-right-icon lucide-arrow-right">
                  <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
              </div>
            </a>
          </div>
        </div>
        <!-- card 2 -->
        <div
          class="bg-white p-5 shadow-md rounded-md shadow-gray-200 md:w-1/3 border-t-2 border-black">
          <h3 class="font-montserrat pb-3.5 lg:text-[17px] font-medium flex items-center gap-3.5">
            <div class="w-[2rem] rounded-full bg-black/20 p-2 text-black">
              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="lucide lucide-message-circle-more-icon lucide-message-circle-more">
                <path d="M2.992 16.342a2 2 0 0 1 .094 1.167l-1.065 3.29a1 1 0 0 0 1.236 1.168l3.413-.998a2 2 0 0 1 1.099.092 10 10 0 1 0-4.777-4.719M8 12h.01M12 12h.01M16 12h.01" />
              </svg>
            </div>
            WhatsApp Chat
          </h3>
          <div class="space-y-3.5">
            <p class="text-[15px]">Chat with us on WhatsApp for instant support!</p>
            <a
              href="https://wa.me/90000000000"
              target="_blank"
              rel="noopener"
              class="relative group w-fit font-semibold cursor-pointer py-1 text-yellow-600 transition-all duration-300 flex items-center gap-1.5 before:absolute before:bottom-0 before:left-0 before:w-0 before:bg-yellow-600 before:h-[1.5px] hover:text-yellow-600 before:transition-all before:duration-300 hover:before:w-full  ">
              <span class="tracking-wide">Chat Now</span>
              <div class="w-[1.1rem] -rotate-45 group-hover:rotate-0 transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="lucide lucide-arrow-right-icon lucide-arrow-right">
                  <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
              </div>
            </a>
          </div>
        </div>
        <!-- card 3 -->
        <div
          class="bg-white p-5 shadow-md rounded-md shadow-gray-200 md:w-1/3 border-t-2 border-black">
          <h3 class="font-montserrat pb-3.5 lg:text-[17px] font-medium flex items-center gap-3.5">
            <div class="w-[2rem] rounded-full bg-black/20 p-2 text-black">
              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="lucide lucide-mail-icon lucide-mail">
                <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" />
                <rect width="20" height="16" x="2" y="4" rx="2" />
              </svg>
            </div>
            E-Mail Support
          </h3>
          <div class="space-y-3.5">
            <p class="text-[15px]">Email us your queries and we'll get back to you quickly!</p>
            <a
              href="mailto:xyz@gmail.com"
              class="relative group w-fit font-semibold cursor-pointer py-1 text-yellow-600 transition-all duration-300 flex items-center gap-1.5 before:absolute before:bottom-0 before:left-0 before:w-0 before:bg-yellow-600 before:h-[1.5px] hover:text-yellow-600 before:transition-all before:duration-300 hover:before:w-full  ">
              <span class="tracking-wide">Mail Now</span>
              <div class="w-[1.1rem] -rotate-45 group-hover:rotate-0 transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="lucide lucide-arrow-right-icon lucide-arrow-right">
                  <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- {/* Form */} -->
    
  </div>
</section>

@endsection