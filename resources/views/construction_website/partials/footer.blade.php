 <!-- Footer -->

 <footer
   id="contact"
   class="bg-gradient-to-b from-black via-black to-black/90 text-white  font-montserrat">
   <div
     id="form-message"
     class="invisible opacity-0 fixed top-1/2 -translate-y-1/2 text-center font-medium transition-all duration-300 ease-in-out !z-100 left-1/2 -translate-x-1/2  w-screen h-screen bg-black/10 backdrop-blur-xs grid place-items-center">
   </div>
   <div class="lg:flex lg:justify-between lg:max-w-[1200px] mx-auto lg:py-10">
     <div
       class="bg-yellow-500 text-white max-w-[90%] -translate-y-5 relative lg:max-w-[28rem] lg:-translate-y-[3.75rem]">

       <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" class="text-[15px] p-4 lg:p-8">
         @csrf
         <div class="grid grid-cols-2 gap-2 lg:gap-4">
           <input name="first_name" type="text" placeholder="First Name" class="outline-none bg-white/85 backdrop-blur-sm text-black placeholder:text-gray-700 px-2 py-1.5" required />
           <input name="last_name" type="text" placeholder="Last Name" class="outline-none bg-white/85 backdrop-blur-sm text-black placeholder:text-gray-700 px-2 py-1.5" required/>
           <input name="email" type="email" placeholder="Email" class="outline-none bg-white/85 backdrop-blur-sm text-black placeholder:text-gray-700 px-2 py-1.5" required/>
           <input name="phone" type="tel" placeholder="Phone Number" class="outline-none bg-white/85 backdrop-blur-sm text-black placeholder:text-gray-700 px-2 py-1.5" required/>
           <textarea name="message" rows="3" placeholder="Enter Your Message" class="outline-none bg-white/85 backdrop-blur-sm text-black placeholder:text-gray-700 px-2 py-1.5 col-span-2" required></textarea>
         </div>

         <button type="submit" class="bg-black font-montserrat px-5 py-2 mt-4 cursor-pointer">Submit</button>
       </form>



       <div
         class="absolute size-[1.3rem] bg-yellow-600 top-0 -right-[1.3rem] [clip-path:polygon(0_1%,_0%_100%,_100%_100%)]"></div>
     </div>

     <div class="p-5">
       <!-- Social Media Links -->
       <div class="flex items-center gap-7">
         <h3 class="text-[15px] flex items-center gap-2.5">
           Follow Us <i class="ri-arrow-right-long-fill"></i>
         </h3>
         <ul class="flex items-center gap-2.5 text-lg">
           <li>
             <a href="#"><i class="ri-facebook-circle-fill"></i></a>
           </li>
           <li>
             <a href="#"><i class="ri-instagram-fill"></i></a>
           </li>
           <li>
             <a href="#"><i class="ri-linkedin-box-fill"></i></a>
           </li>
         </ul>
       </div>

       <div class="lg:flex lg:gap-16 xl:gap-24">
         <!-- Quick Links -->
         <div class="flex gap-5 flex-col mt-8">
           <h3 class="text-lg">Quick Links</h3>
           <ul class="grid grid-cols-2 lg:grid-cols-1 lg:gap-2 gap-5 text-[14px]">
             <li>
               <a href="#">Home</a>
             </li>
             <li>
               <a href="#">About Us</a>
             </li>
             <li>
               <a href="#">Equipment</a>
             </li>
             <li>
               <a href="#">Projects</a>
             </li>
             <li>
               <a href="#">FAQ's</a>
             </li>
           </ul>
         </div>

         <!-- Support -->
         <div class="flex gap-5 flex-col mt-8">
           <h3 class="text-lg">Quick Support</h3>
           <ul class="grid gap-5 text-[14px]">
             <li class="flex items-center gap-2">
               <span
                 class="border size-[2rem] border-dashed grid place-items-center text-[16px]"><i class="ri-phone-fill"></i></span><span>+91 837-953-4699</span>
             </li>

             <li class="flex items-center gap-2">
               <span
                 class="border size-[2rem] border-dashed grid place-items-center text-[16px]"><i class="ri-mail-fill"></i></span><span>construction@gmail.com</span>
             </li>
             <li class="flex items-center gap-2">
               <span
                 class="border size-[2rem] border-dashed grid place-items-center text-[16px]"><i class="ri-map-pin-2-fill"></i></span><span>abc, Hanuman Garh, Alwar | 412547</span>
             </li>
           </ul>
         </div>
       </div>
     </div>
   </div>

   <div class="border-t-[0.5px] p-2 border-gray-500">
     <p class="font-montserrat text-[13px] text-center">&copy; All Right Reserved 2025.</p>

   </div>
 </footer>

 <script>
   document.addEventListener('DOMContentLoaded', function() {
     const form = document.getElementById('contactForm');
     const messageContainer = document.getElementById('form-message');
     const submitButton = form.querySelector('button[type="submit"]');

     form.addEventListener('submit', async function(e) {
       e.preventDefault();

       // Reset previous messages

       messageContainer.innerText = '';

       // Disable submit button + show loader
       submitButton.disabled = true;
       submitButton.classList.add('opacity-70', 'cursor-not-allowed');
       submitButton.innerHTML = `
      <span class="inline-flex items-center gap-2">
        <svg class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
          <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
          <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4l3-3-3-3v4a8 8 0 00-8 8h4z"></path>
        </svg>
        Submitting...
      </span>`;

              

       const formData = new FormData(form);

       try {
         const response = await fetch(form.action, {
           method: 'POST',
           headers: {
             'X-Requested-With': 'XMLHttpRequest',
             'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value
           },
           body: formData
         });

         const data = await response.json();

         messageContainer.classList.remove('invisible');
         messageContainer.style.opacity = '0';

         // Show message smoothly
         setTimeout(() => {
           messageContainer.style.opacity = '1';
         }, 50);

         submitButton.disabled = false;
         submitButton.classList.remove('opacity-70', 'cursor-not-allowed');
         submitButton.innerHTML = "Submit"


         if (data.success) {
           messageContainer.innerHTML = `<div class="bg-white text-gray-600 max-w-[20rem] w-full p-5 pt-0 pb-7 rounded-md shadow-2xl leading-relaxed lg:max-w-[25rem]">
       <span class="max-w-[10rem]"><img src="{{ asset('images/success.svg') }}" class="w-full" alt="success"></span>
       <h1 class="text-xl font-semibold tracking-wider text-green-600">Message Sent !!</h1>
       <p class="py-3 text-[15px]">Thank you for reaching out! Your message has been successfully sent — our team will get back to you shortly.</p>
       <button id="closeMessage" class="bg-black text-white px-5 rounded py-2 font-semibold mt-4 rounded"><i class="ri-arrow-left-long-fill pr-2"></i>Back</button>
     </div>`;

           form.reset();
         } else {
           messageContainer.innerHTML = `<div class="bg-white text-gray-600 max-w-[20rem] w-full p-5 pb-7 rounded-md shadow-2xl leading-relaxed lg:max-w-[25rem] pt-12">
       <i class="text-5xl text-red-600 font-bold">0oPs!</i>
       <h1 class="text-xl font-semibold tracking-wider text-red-600 pt-7">Something Wrong !!</h1>
       <p class="py-3 text-[15px]">Oops! Something went wrong while sending your message. Please try again in a moment.</p>
       <button id="closeMessage" class="bg-black text-white px-5 rounded py-2 font-semibold mt-4 rounded"><i class="ri-arrow-left-long-fill pr-2"></i>Back</button>
     </div>`;

         }

         // Close message handler
         document.getElementById('closeMessage').addEventListener('click', () => {
           messageContainer.style.opacity = '0';
           setTimeout(() => {
             messageContainer.classList.add('invisible');
           }, 300);
         });

       } catch (error) {
         console.error(error);
         messageContainer.innerHTML = `
        <div class="bg-white text-gray-700 max-w-[22rem] w-full p-6 rounded-md shadow-2xl text-center">
          <div class="text-6xl text-red-600 font-bold mb-4">⚠️</div>
          <h1 class="text-xl font-semibold tracking-wide text-red-600">Network Error!</h1>
          <p class="py-3 text-[15px]">An unexpected error occurred. Please check your connection and try again.</p>
          <button id="closeMessage" class="bg-black text-white px-6 py-2 mt-3 font-semibold rounded hover:bg-gray-800 transition">
            <i class="ri-arrow-left-long-fill pr-2"></i>Back
          </button>
        </div>
      `;
         document.getElementById('closeMessage').addEventListener('click', () => {
           messageContainer.style.opacity = '0';
           setTimeout(() => {
             messageContainer.classList.add('invisible');
           }, 300);
         });
       }

     });
   });
 </script>

 <!--  JavaScript for sidebar toggle -->

 <script
   src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"
   defer></script>

 <script>
   function scrollToEquipment() {
     document
       .querySelector('#equipment-section')
       .scrollIntoView({
         behavior: 'smooth'
       });
   }
 </script>
 <script src="{{ asset('js/script.js') }}"></script>