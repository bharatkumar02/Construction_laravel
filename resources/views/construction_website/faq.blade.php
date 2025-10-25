@extends('construction_website.layout.app')

@section('title', 'FAQ - Construction Website')

@section('content')

@php
$faqJsonPath = resource_path('views/construction_website/data/faq.json');
$categories = json_decode(file_get_contents($faqJsonPath), true);
$activeCategory = $categories[0]; // Default active category
@endphp

<!-- HERO Section -->
<section class="flex flex-col-reverse gap-0 items-center lg:flex-row lg:h-full">
  <!-- Left Text -->
  <div class="p-8 lg:pl-20 xl:pl-28 whitespace-nowrap">
    <h1 class="mt-4 text-4xl lg:text-5xl font-bold leading-tight font-montserrat">
      FAQ's
    </h1>
    <div class="font-montserrat font-semibold text-[14px] flex items-center gap-3 mt-2.5">
      <span>Home</span><span>/</span><span>FAQ's</span>
    </div>
  </div>

  <!-- Image -->
  <div class="relative w-full lg:z-20 lg:pt-16">
    <div>
      <img src="./images/faq.png" alt="backhoe"
        class="object-contain max-h-[20rem] mx-auto drop-shadow-lg lg:max-h-[30rem]" />
    </div>
    <div class="absolute h-[70%] bg-gradient-to-b from-black via-black to-black/85 w-full top-0 -z-10 lg:h-full lg:w-[50%] lg:right-0"></div>
  </div>
</section>

<!-- FAQ Section -->
<section id="faq-section" class="pb-20 bg-gray-100 mt-3 lg:mt-0 lg:py-20 lg:px-10 lg:pb-28">
  <div class="flex flex-col lg:flex-row gap-10 lg:gap-14 lg:max-w-6xl lg:mx-auto xl:gap-20">

    <!-- Left: Category List -->
    <div class="lg:w-[20rem] w-full">
      <div class="font-montserrat font-medium overflow-hidden whitespace-nowrap bg-black text-white lg:overflow-visible lg:mt-20">
        <ul class="flex items-center *:p-3.5 w-screen overflow-x-scroll scrollbar-hide lg:flex-col lg:w-fit lg:items-start *:cursor-pointer lg:p-7" id="faq-categories">
          @foreach ($categories as $category)
          <li>
            <button class="category-btn cursor-pointer {{ $loop->first ? 'active text-yellow-500 font-semibold' : '' }}"
              data-slug="{{ $category['slug'] }}">
              {{ $category['title'] }}
            </button>
          </li>
          @endforeach
        </ul>
      </div>
    </div>

    <!-- Right: FAQ Accordion -->
    <div class="lg:w-full px-5">
      <h3 class="text-2xl font-bold lg:text-3xl lg:mb-10 mb-6 font-montserrat">
        Frequently Asked Questions
      </h3>

      <!-- FAQ Items -->
      <div class="space-y-4 text-[15px] lg:text-[16px]" id="faq-container">
        @foreach ($activeCategory['faqs'] as $faq)
        <div class="faq-item border border-gray-200 rounded overflow-hidden bg-white shadow shadow-gray-200">
          <button class="faq-question w-full flex justify-between items-start p-4 gap-4 text-left font-semibold text-gray-800">
            {{ $faq['question'] }}
            <i class="ri-add-line text-xl"></i>
          </button>
          <div class="faq-answer hidden p-4 pt-0 text-gray-700 leading-relaxed">
            {{ $faq['answer'] }}
          </div>
        </div>
        @endforeach
      </div>

      <!-- CTA Line -->
      <div class="w-full mt-10 lg:mt-14 md:text-center lg:text-start">
        <div class="bg-gradient-to-r from-black via-black to-black/85 p-6 flex flex-col gap-7 items-center justify-between text-white py-8 lg:flex-row lg:px-12 relative z-10 shadow-md">
          <div>
            <div class="text-xl font-semibold font-montserrat">
              Do not find Your Answer ??
            </div>
          </div>
          <div class="flex items-center gap-2 font-montserrat text-sm lg:whitespace-nowrap">
            <a class="px-5 py-3 bg-yellow-500 font-semibold">Contact Us</a>
            <a class="bg-white text-black px-5 py-2 flex items-center gap-1">
              <span class="text-lg"><i class="ri-phone-fill"></i></span>
              <span class="font-bold">+91 000-555-0121</span>
            </a>
          </div>
          <div class="hidden lg:block absolute right-0 top-0 -z-10 lg:bg-yellow-500 lg:h-full lg:w-[12rem]"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- whatsapp logo -->
<div class="fixed right-7 bottom-10 max-w-[3.5rem] z-50 group  border rounded-full border-green-500 p-2.5 drop-shadow-md bg-white/20 backdrop-blur-lg lg:max-w-[4rem] lg">
  <a href="" ><img class="group-hover:scale-110 transition-all duration-300" src="./images/whatsapp.svg" alt="whatsapp"></a>
</div>

<!-- JS: Category Switch + Accordion -->
<script>
  const categories = @json($categories);
  const faqContainer = document.getElementById('faq-container');
  const faqCategoryBtns = document.querySelectorAll('.category-btn');

  // Render FAQs of selected category
  function renderFAQs(category) {
    faqContainer.innerHTML = '';
    category.faqs.forEach(faq => {
      const item = document.createElement('div');
      item.classList.add(
        'faq-item',
        'border',
        'border-gray-200',
        'rounded',
        'overflow-hidden',
        'bg-white',
        'shadow',
        'shadow-gray-200'
      );
      item.innerHTML = `
        <button class="faq-question w-full flex justify-between items-start p-4 gap-4 text-left font-semibold text-gray-800">
          ${faq.question}
          <i class="ri-add-line text-xl"></i>
        </button>
        <div class="faq-answer hidden p-4 pt-0 text-gray-700 leading-relaxed">
          ${faq.answer}
        </div>
      `;
      faqContainer.appendChild(item);
    });

    // Apply accordion behavior after rendering
    const faqItems = faqContainer.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
      const question = item.querySelector('.faq-question');
      question.addEventListener('click', () => {
        const answer = item.querySelector('.faq-answer');
        const icon = question.querySelector('i');

        // Close other FAQs
        faqItems.forEach(i => {
          if (i !== item) {
            i.querySelector('.faq-answer').classList.add('hidden');
            i.querySelector('.faq-question i').classList.replace(
              'ri-subtract-line',
              'ri-add-line'
            );
          }
        });

        // Toggle current one
        answer.classList.toggle('hidden');
        icon.classList.toggle('ri-add-line');
        icon.classList.toggle('ri-subtract-line');
      });
    });
  }

  // Handle category selection
  faqCategoryBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      faqCategoryBtns.forEach(b =>
        b.classList.remove('active', 'text-yellow-500', 'font-semibold')
      );
      btn.classList.add('active', 'text-yellow-500', 'font-semibold');

      const slug = btn.dataset.slug;
      const category = categories.find(c => c.slug === slug);
      renderFAQs(category);
    });
  });

  // Optional: render first category by default
  if (categories.length) {
    renderFAQs(categories[0]);
    faqCategoryBtns[0]?.classList.add('active', 'text-yellow-500', 'font-semibold');
  }
</script>



@endsection