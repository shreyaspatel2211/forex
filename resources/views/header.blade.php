<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/flaticon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css" integrity="sha512-QfDd74mlg8afgSqm3Vq2Q65e9b3xMhJB4GZ9OcHDVy1hZ6pqBJPWWnMsKDXM7NINoKqJANNGBuVRIpIJ5dogfA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              theme1: '#001e37',
              theme2: '#02C7B3',
            }
          }
        }
      }
  </script>
    <link rel="stylesheet" href="dist/assets/css/app.min.css">
  </head>
  <body>
    <header class="bg-white py-4 shadow-lg">
      <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <div class="text-white font-bold text-xl">
          <a href="#" class="w-[180px] md:w-[212px]">
            <img src="dist/assets/images/logo.svg" alt="">
          </a>
        </div>
        
        <!-- Navbar (Desktop) -->
        <nav class="hidden md:flex space-x-8">
          <a href="#" class="text-theme1 open-sans-semibold">CurrencyExchange</a>
          <a href="#" class="text-theme1 open-sans-semibold">Forexcard</a>
          <a href="#" class="text-theme1 open-sans-semibold">MoneyTransfer</a>
          <a href="#" class="text-theme1 open-sans-semibold">Support</a>
          <a href="#" class="text-theme1 open-sans-semibold">Login</a>
        </nav>
        
        <!-- Hamburger Icon (Mobile) -->
        <div class="md:hidden">
          <button id="hamburger-icon" class="text-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#001e37" class="h-6 w-6" id="hamburger">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#001e37" class="h-6 w-6 hidden" id="close-icon">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile Navbar Menu -->
      <div id="mobile-nav" class="nav-menu fixed inset-0 bg-white text-theme1 p-6 md:hidden transform translate-x-full">
      <div class="flex justify-end">
        <button id="close-mobile-nav" class="text-theme1 mt-2 -mr-2">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#001e37" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <nav class="flex flex-col space-y-6 mt-4">
        <a href="#" class="text-theme1">CurrencyExchange</a>
        <a href="#" class="text-theme1">Forexcard</a>
        <a href="#" class="text-theme1">MoneyTransfer</a>
        <a href="#" class="text-theme1">Support</a>
        <a href="#" class="text-theme1">Login</a>
      </nav>
    </div>
    </header>