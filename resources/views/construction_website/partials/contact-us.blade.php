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
    <div class="xl:w-[32rem]">
      <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" novalidate
        class="flex w-full flex-col gap-4 border-[0.5px] border-gray-200 rounded-md bg-white px-7 py-10 shadow-[-1px_0px_25px_-5px] shadow-gray-300/80 lg:gap-6">
        @csrf
        <div class="group relative w-full">
          <label for="c-name" class="block text-gray-800 font-semibold space-x-1">First Name <span class="text-red-500">*</span></label>
          <input id="c-name" placeholder="Enter First Name" name="first_name" autocomplete="name" type="text"
            minlength="3" pattern="^[A-Za-zÀ-ÖØ-öø-ÿ'’\-\. ]{3,}$" required
            class="w-full border-b border-gray-300 px-0 py-2 outline-none placeholder:text-gray-400/80">
          <span class="absolute left-0 bottom-0 h-[1.5px] w-0 bg-yellow-600 transition-all duration-500 group-focus-within:w-full"></span>
          <small class="mt-1 text-red-600 hidden" data-err="name">Enter a valid name (min 3 letters).</small>
        </div>

        <div class="group relative w-full">
          <label for="c-name" class="block text-gray-800 font-semibold space-x-1">Last Name <span class="text-red-500">*</span></label>
          <input id="c-name" placeholder="Enter Last Name" name="last_name" autocomplete="name" type="text"
            minlength="3" pattern="^[A-Za-zÀ-ÖØ-öø-ÿ'’\-\. ]{3,}$" required
            class="w-full border-b border-gray-300 px-0 py-2 outline-none placeholder:text-gray-400/80">
          <span class="absolute left-0 bottom-0 h-[1.5px] w-0 bg-yellow-600 transition-all duration-500 group-focus-within:w-full"></span>
          <small class="mt-1 text-red-600 hidden" data-err="name">Enter a valid name (min 3 letters).</small>
        </div>

        <div class="group relative w-full">
          <label for="c-email" class="block text-gray-800 font-semibold">Email <span class="text-red-500">*</span></label>
          <input id="c-email" placeholder="Enter Your Email" name="email" type="email" required
            class="w-full border-b border-gray-300 px-0 py-2 outline-none placeholder:text-gray-400/80">
          <span class="absolute left-0 bottom-0 h-[1.5px] w-0 bg-yellow-600 transition-all duration-500 group-focus-within:w-full"></span>
          <small class="mt-1 text-red-600 hidden" data-err="email">Enter a valid email address.</small>
        </div>

        <div class="group relative w-full">
          <label for="c-phone" class="block text-gray-800 font-semibold">Phone Number <span class="text-red-500">*</span></label>
          <input id="c-phone" placeholder="Enter Your Phone Number" name="phone" type="tel" required
            pattern="^[0-9]{10,15}$"
            class="w-full border-b border-gray-300 px-0 py-2 outline-none placeholder:text-gray-400/80">
          <span class="absolute left-0 bottom-0 h-[1.5px] w-0 bg-yellow-600 transition-all duration-500 group-focus-within:w-full"></span>
          <small class="mt-1 text-red-600 hidden" data-err="phone">Digits only, 10–15 characters.</small>
        </div>

        <div class="group relative w-full">
          <label for="c-message" class="block text-gray-800 font-semibold">Message <span class="text-red-500">*</span></label>
          <textarea id="c-message" placeholder="Enter Your Message" name="message" rows="4" minlength="10" required
            class="w-full border-b border-gray-300 px-0 py-2 outline-none placeholder:text-gray-400/80"></textarea>
          <span class="absolute left-0 bottom-0 h-[1.5px] w-0 bg-yellow-600 transition-all duration-500 group-focus-within:w-full"></span>
          <small class="mt-1 text-red-600 hidden" data-err="message">Please write at least 10 characters.</small>
        </div>

        <!-- Honeypot -->
        <div class="hidden">
          <label>Leave this field empty</label>
          <input type="text" name="website" tabindex="-1" autocomplete="off">
        </div>

        <button id="c-submit" type="submit"
          class="font-montserrat z-10 mt-3 w-full cursor-pointer bg-black rounded-md overflow-hidden px-5 py-2 text-[15px] font-semibold tracking-wider text-white transition-all duration-500">
          Send Message
        </button>
      </form>
      <script>
        (function() {
          const form = document.getElementById('contact-form');
          const submitBtn = document.getElementById('c-submit');
          const errs = {
            name: document.querySelector('[data-err="name"]'),
            email: document.querySelector('[data-err="email"]'),
            phone: document.querySelector('[data-err="phone"]'),
            message: document.querySelector('[data-err="message"]'),
            consent: document.querySelector('[data-err="consent"]'),
          };

          function showErr(key, show) {
            if (!errs[key]) return;
            errs[key].classList.toggle('hidden', !show);
          }

          function validate() {
            let ok = true;
            const name = document.getElementById('c-name');
            const email = document.getElementById('c-email');
            const phone = document.getElementById('c-phone');
            const message = document.getElementById('c-message');
            const consent = document.getElementById('c-consent');

            showErr('name', !(name.value.trim().length >= 3 && name.checkValidity()));
            ok &&= name.value.trim().length >= 3 && name.checkValidity();

            showErr('email', !email.checkValidity());
            ok &&= email.checkValidity();

            showErr('phone', !phone.checkValidity());
            ok &&= phone.checkValidity();

            showErr('message', !(message.value.trim().length >= 10));
            ok &&= message.value.trim().length >= 10;

            showErr('consent', !consent.checked);
            ok &&= consent.checked;

            return ok;
          }

          form.addEventListener('submit', async (e) => {
            e.preventDefault();
            if (!validate()) return;

            submitBtn.disabled = true;
            submitBtn.classList.add('opacity-60', 'cursor-not-allowed');

            try {
              const fd = new FormData(form);
              const res = await fetch(form.action, {
                method: 'POST',
                body: fd
              });
              const text = await res.text();

              if (res.ok) {
                if (window.Swal) {
                  Swal.fire({
                    title: 'Success!',
                    text: 'Thanks, we will contact you shortly.',
                    icon: 'success',
                    confirmButtonColor: '#50d8af'
                  });
                }
                form.reset();
              } else {
                if (window.Swal) {
                  Swal.fire({
                    title: 'Error!',
                    text: text || 'Failed to send message.',
                    icon: 'error',
                    confirmButtonColor: '#d33'
                  });
                }
              }
            } catch (err) {
              if (window.Swal) {
                Swal.fire({
                  title: 'Oops…',
                  text: 'Network error. Please try again.',
                  icon: 'error',
                  confirmButtonColor: '#d33'
                });
              }
            } finally {
              submitBtn.disabled = false;
              submitBtn.classList.remove('opacity-60', 'cursor-not-allowed');
            }
          });
        })();
      </script>
    </div>
  </div>
</section>

@endsection