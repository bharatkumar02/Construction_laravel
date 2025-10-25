   <!-- Header -->
   <header class="relative z-50">
     <!-- Top bar -->
     <div
       class="bg-black text-white px-4 py-1.5 md:py-2.5 md:flex md:items-center md:justify-between md:px-10 lg:px-[10rem] xl:px-[20rem] lg:pb-10">
       <div
         class="text-[12px] flex items-center justify-between *:flex *:items-center *:gap-1.5 md:justify-start md:gap-7">
         <a href="tel:+918379534699">
           <span><i class="ri-phone-fill"></i></span><span>+91 8379534699</span>
         </a>
         <a href="mailto:kumarbharat9416@gmail.com">
           <span><i class="ri-mail-open-fill"></i></span><span>kumarbharat9416@gmail.com</span>
         </a>
       </div>

       <ul class="hidden md:flex md:items-center md:gap-1.5 justify-end text-xl">
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

     <!-- Main Header -->
     <div
       class="flex items-center md:flex-row-reverse w-full justify-between *:w-1/3 *:md:w-full px-3.5 md:px-10 lg:max-w-[60rem] lg:w-full bg-white lg:shadow lg:absolute lg:left-1/2 lg:-translate-x-1/2 lg:top-14 !py-5">
       <div class="flex items-center">
         <button id="menu-btn" class="font-extrabold text-xl md:hidden">
           <i class="ri-menu-2-line"></i>
         </button>
         <!-- Mobile Sidebar Menu -->
         <div
           id="mobile-menu"
           class="fixed top-0 left-0 h-full w-[75%] bg-white shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out z-50 md:static md:w-full md:translate-x-0 md:bg-transparent md:shadow-none">
           <div class="p-5 mt-4 md:p-0 md:mt-0">
             <nav
               class="flex flex-col gap-5 text-lg md:text-[15px] font-montserrat text-gray-800 md:flex-row md:gap-7 md:justify-end font-medium whitespace-nowrap">
               <a href="{{route('index')}}" class="hover:text-yellow-500">Home</a>
               <a href="{{route('about')}}" class="hover:text-yellow-500">About Us</a>
               <a href="{{route('equipment')}}" class="hover:text-yellow-500">Machinery</a>
               <a href="{{route('project')}}" class="hover:text-yellow-500">Projects</a>
               <a href="{{route('faq')}}" class="hover:text-yellow-500">FAQ's</a>
               <a href="{{route('contact-us')}}"  class="hover:text-yellow-500">Contact Us</a>
             </nav>
           </div>
         </div>

         <!-- Overlay -->
         <div
           id="overlay"
           class="fixed inset-0 top-0 bg-black/70 bg-opacity-50 backdrop-blur-sm hidden z-40"></div>
       </div>

       <div class="">
         <img
           src="http://anpsthemes.com/constructo-new-demos/6/wp-content/uploads/2017/05/constructo-logo-yelow-dark.png"
           alt="Logo"
           class="max-w-[4.5rem] mx-auto md:mx-0 md:max-w-[8rem]" />
       </div>

       <ul class="flex items-center gap-1.5 justify-end text-xl md:hidden">
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
   </header>