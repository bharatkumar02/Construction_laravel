<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Construction Website</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"
    />

    <style>
      :root {
        --brand-yellow: #f7b500;
        --brand-dark: #0f1724;
      }

      .font-montserrat {
        font-family: 'Montserrat', sans-serif;
      }

      .font-roboto {
        font-family: 'Roboto', sans-serif;
      }

      /* little rounded cards shadow */
      .card-shadow {
        box-shadow: 0 6px 22px rgba(12, 18, 30, 0.06);
      }
      /* dot indicators for hero image */
      .rotated {
        writing-mode: vertical-rl;
        transform: rotate(180deg);
        letter-spacing: 0.35em;
      }
    </style>
  </head>
  <body class="antialiased text-[#0b1220] bg-white font-roboto">
    @include('construction_website.partials.header')

    <main>
        @yield('content')
    </main>
    @include('construction_website.partials.footer')
</body>
</html>
