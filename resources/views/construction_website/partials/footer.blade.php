 <!-- Footer -->
    <footer
      class="bg-gradient-to-b from-black via-black to-black/90 text-white  font-montserrat"
    >
      <div class="lg:flex lg:justify-between lg:max-w-[1200px] mx-auto lg:py-10">
        <div
          class="bg-yellow-500 text-white max-w-[90%] -translate-y-5 relative lg:max-w-[28rem] lg:-translate-y-[3.75rem]"
        >

<div
  id="form-message"
  class="hidden mt-4 text-center font-medium transition-all duration-300 ease-in-out px-4 py-2 rounded-md"
></div>
         <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" class="text-[15px] p-4 lg:p-8">
    @csrf
    <div class="grid grid-cols-2 gap-2 lg:gap-4">
        <input name="first_name" type="text" placeholder="First Name" class="outline-none bg-white/85 backdrop-blur-sm text-black placeholder:text-gray-700 px-2 py-1.5" />
        <input name="last_name" type="text" placeholder="Last Name" class="outline-none bg-white/85 backdrop-blur-sm text-black placeholder:text-gray-700 px-2 py-1.5" />
        <input name="email" type="email" placeholder="Email" class="outline-none bg-white/85 backdrop-blur-sm text-black placeholder:text-gray-700 px-2 py-1.5" />
        <input name="phone" type="tel" placeholder="Phone Number" class="outline-none bg-white/85 backdrop-blur-sm text-black placeholder:text-gray-700 px-2 py-1.5" />
        <textarea name="message" placeholder="Enter Your Message" class="outline-none bg-white/85 backdrop-blur-sm text-black placeholder:text-gray-700 px-2 py-1.5 col-span-2"></textarea>
    </div>

    <button type="submit" class="bg-black font-montserrat px-5 py-2 mt-4">Submit</button>
</form>



          <div
            class="absolute size-[1.3rem] bg-yellow-600 top-0 -right-[1.3rem] [clip-path:polygon(0_1%,_0%_100%,_100%_100%)]"
          ></div>
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
                    class="border size-[2rem] border-dashed grid place-items-center text-[16px]"
                    ><i class="ri-phone-fill"></i></span
                  ><span>+91 837-953-4699</span>
                </li>

                <li class="flex items-center gap-2">
                  <span
                    class="border size-[2rem] border-dashed grid place-items-center text-[16px]"
                    ><i class="ri-mail-fill"></i></span
                  ><span>kumarbharat9416@gmail.com</span>
                </li>
                <li class="flex items-center gap-2">
                  <span
                    class="border size-[2rem] border-dashed grid place-items-center text-[16px]"
                    ><i class="ri-map-pin-2-fill"></i></span
                  ><span>192, Hanuman Mandir, Near Badi Haveli | 123106</span>
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

    form.addEventListener('submit', async function(e) {
        e.preventDefault();

        // Reset previous messages
        messageContainer.className = 'hidden mt-4 text-center font-medium transition-all duration-300 ease-in-out px-4 py-2 rounded-md';
        messageContainer.innerText = '';

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

            messageContainer.classList.remove('hidden');
            messageContainer.style.opacity = '0';

            // Show message smoothly
            setTimeout(() => {
                messageContainer.style.opacity = '1';
            }, 50);

            if (data.success) {
                messageContainer.innerText = data.message || 'Thank you! We’ve received your message.';
                messageContainer.classList.add('bg-green-100', 'text-green-700', 'border', 'border-green-400');
                form.reset();
            } else {
                messageContainer.innerText = data.message || 'Something went wrong. Please try again.';
                messageContainer.classList.add('bg-yellow-400', 'text-red-400', 'border', 'border-yellow-400');
            }
        } catch (error) {
            console.error(error);
            messageContainer.classList.remove('hidden');
            messageContainer.classList.add('bg-yellow-400', 'text-red-400', 'border', 'border-yellow-400');
            messageContainer.innerText = 'An error occurred. Please check your connection and try again.';
        }
    });
});
</script>

    <!--  JavaScript for sidebar toggle -->

    <script
      src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"
      defer
    ></script>

      <script>
      function scrollToEquipment() {
        document
          .querySelector('#equipment-section')
          .scrollIntoView({ behavior: 'smooth' });
      }
    </script>
    <script src="{{ asset('js/script.js') }}"></script>