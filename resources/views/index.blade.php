@include('header')
<div class="page">
  <!-- banner section -->
  <div class="container">
    <div class="flex flex-col md:flex-row items-center py-5">
      <div class="w-full md:w-1/2">
        <h1 class="text-[45px] text-theme1 gadugi-bold mb-12">{{ setting('home-page.page_title') }} <span class="block text-theme2">{{ setting('home-page.title') }}</span></h1>
        <p class="open-sans text-[24px] text-black md:max-w-[610px]">{{ setting('home-page.description') }}</p>
      </div>
      <div class="w-full md:w-1/2">
        <div class="w-full">
          <img src="{{ Voyager::image(setting('home-page.image')) }}" alt="">
        </div>
      </div>
    </div>
    <div class="grid mt-5 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 mb-[52px]">
      @foreach($top_features as $feature)
        <div class="flex flex-col items-center text-center">
          <img class="w-[170px] mb-2" src="{{ Voyager::image($feature->image) }}" alt="">
          <div class="text-[27px] mb-2 open-sans-bold text-theme1">{{ $feature->title }}</div>
          <span class="text-black">{{ $feature->description }}</span>
        </div>
      @endforeach
    </div>
  </div>
  <!-- banner section -->

  <!-- sell currency form -->
  <div class="bg-theme1 p-3 py-5 md:py-0 md:p-[64px]">
    <div class="container">
      <div class="bg-white rounded-lg p-2 md:p-10">
        <div class="flex flex-col md:flex-row">
          <div data-tab="forex" class="tab-button flex itmes-center justify-center w-full md:w-1/2 p-3 text-center tab-active text-xl cursor-pointer">
            <svg
              width="30"
              height="30"
              viewBox="0 0 30 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="mr-3"
              >
              <path d="M1 12.1999C1 7.55615 4.7562 3.8 9.4 3.8L8.2002 6.19957M29 17.7998C29 22.4435 25.2438 26.1997 20.6 26.1997L21.7998 23.8001M22 7.29995H22.0126M8 22.6997H8.0126M22.35 1.72243C24.912 0.665447 27.1688 1.01684 28.391 1.24084C28.7396 1.30524 29 1.64683 29 2.04303V11.0869C29 11.5601 28.6332 11.9129 28.216 11.8401C26.9616 11.6175 24.7958 11.3431 22.35 12.3511C19.7208 13.4361 17.0748 13.6391 15.63 13.5943C15.2716 13.5831 15 13.2443 15 12.8383V3.7944C15 3.32821 15.357 2.96141 15.7714 2.96841C17.2414 2.99641 19.8034 2.77242 22.35 1.72243ZM8.35 17.1222C10.912 16.0652 13.1674 16.4166 14.391 16.6406C14.7396 16.705 15 17.0466 15 17.4428V26.4867C15 26.9599 14.6332 27.3127 14.216 27.2399C12.9616 27.0173 10.7958 26.7429 8.35 27.7523C5.7208 28.8358 3.0748 29.0402 1.63 28.994C1.2716 28.9828 1 28.644 1 28.238V19.1928C1 18.7266 1.357 18.3598 1.7714 18.3668C3.2414 18.3948 5.8034 18.1722 8.35 17.1222Z" stroke="#0D8478" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Forex Card & Cash
          </div>
          <div data-tab="send" class="tab-button w-full md:w-1/2 p-3 flex itmes-center justify-center tab-inactive text-xl cursor-pointer">
            <svg
              class="mr-3"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              >
              <path d="M23.1065 0.893318C22.8543 0.642874 22.5379 0.466813 22.1921 0.384484C21.8463 0.302155 21.4845 0.316745 21.1465 0.426651L1.63984 6.93332C1.27807 7.04795 0.958381 7.26723 0.721156 7.56344C0.483932 7.85966 0.339811 8.21953 0.306997 8.59761C0.274183 8.97569 0.354146 9.35501 0.536789 9.68767C0.719432 10.0203 0.996561 10.2914 1.33317 10.4667L9.42651 14.4667L13.4265 22.5867C13.5873 22.9045 13.8333 23.1713 14.1371 23.3574C14.4408 23.5434 14.7903 23.6412 15.1465 23.64H15.2798C15.6613 23.6119 16.0255 23.4697 16.3251 23.2319C16.6247 22.9942 16.8459 22.6718 16.9598 22.3067L23.5598 2.85332C23.6777 2.51723 23.6977 2.15457 23.6174 1.80758C23.5371 1.46059 23.36 1.14353 23.1065 0.893318ZM2.46651 8.77332L19.4932 3.09332L10.0398 12.5467L2.46651 8.77332ZM15.2398 21.5333L11.4532 13.96L20.9065 4.50665L15.2398 21.5333Z" fill="#001E37"/>
            </svg>
            Send Money
          </div>
        </div>

        <div id="contents">
          <div data-content="forex" class="tab-content p-2 md:p-5">
            <form>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="relative">
                  <label for="forex-amount" class="block text-sm font-medium text-gray-700">Choose your Travel Destination</label>
                  <input id="forex-amount" type="number" placeholder="Enter amount" 
                    class="mt-1 block w-full border border-theme1 h-12 rounded-md p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500 !pr-10">
                    <div class="absolute right-2 top-9 cursor-pointer">
                      <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.46561 1.36444C13.1377 0.736429 18.8618 0.736429 24.5339 1.36444C27.6744 1.71644 30.2081 4.18961 30.5766 7.34111C31.2488 13.0941 31.2488 18.9058 30.5766 24.6588C30.2081 27.8103 27.6744 30.2834 24.5339 30.6354C18.8618 31.2635 13.1377 31.2635 7.46561 30.6354C4.32511 30.2834 1.79144 27.8103 1.42294 24.6588C0.750945 18.9064 0.750945 13.0953 1.42294 7.34294C1.60934 5.81187 2.30731 4.38861 3.40374 3.30383C4.50017 2.21904 5.9308 1.53631 7.46378 1.36628M15.9998 6.84611C16.3645 6.84611 16.7142 6.99098 16.972 7.24884C17.2299 7.5067 17.3748 7.85644 17.3748 8.22111V14.6249H23.7786C24.1433 14.6249 24.493 14.7698 24.7509 15.0277C25.0087 15.2855 25.1536 15.6353 25.1536 15.9999C25.1536 16.3646 25.0087 16.7144 24.7509 16.9722C24.493 17.2301 24.1433 17.3749 23.7786 17.3749H17.3748V23.7788C17.3748 24.1434 17.2299 24.4932 16.972 24.7511C16.7142 25.0089 16.3645 25.1538 15.9998 25.1538C15.6351 25.1538 15.2854 25.0089 15.0275 24.7511C14.7696 24.4932 14.6248 24.1434 14.6248 23.7788V17.3749H8.22095C7.85627 17.3749 7.50654 17.2301 7.24867 16.9722C6.99081 16.7144 6.84595 16.3646 6.84595 15.9999C6.84595 15.6353 6.99081 15.2855 7.24867 15.0277C7.50654 14.7698 7.85627 14.6249 8.22095 14.6249H14.6248V8.22111C14.6248 7.85644 14.7696 7.5067 15.0275 7.24884C15.2854 6.99098 15.6351 6.84611 15.9998 6.84611Z" fill="#02C7B3"/>
                      </svg>
                    </div>
                </div>
                <div class="">
                  <label for="forex-amount" class="block text-sm font-medium text-gray-700">Choose Product</label>
                  <input id="forex-amount" type="number" placeholder="Enter amount" 
                    class="mt-1 block w-full border border-theme1 h-12 rounded-md p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="">
                  <label for="forex-amount" class="block text-sm font-medium text-gray-700">Choose Currency</label>
                  <input id="forex-amount" type="number" placeholder="Enter amount" 
                    class="mt-1 block w-full border border-theme1 h-12 rounded-md p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="">
                  <label for="forex-amount" class="block text-sm font-medium text-gray-700">Buy USD</label>
                  <input id="forex-amount" type="number" placeholder="Enter amount" 
                    class="mt-1 block w-full border border-theme1 h-12 rounded-md p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
              </div>
              <span class="open-sans block mt-2 w-full text-right text-xs text-theme1">is approximately <strong class="text-theme2">84,940 INR</strong></span>
              <br />
              <button type="submit" class="w-full md:w-1/2 text-xl open-sans-bold font-bold mt-4 px-6 py-2 bg-theme2 text-white !rounded-[11px]">Get Best Rates ></button>
            </form>
          </div>
          <div data-content="send" class="tab-content p-2 md:p-5 hidden">
            <form>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="">
                  <label for="forex-amount" class="block text-sm font-medium text-gray-700">Choose your Travel Destination</label>
                  <input id="forex-amount" type="number" placeholder="Enter amount" 
                    class="mt-1 block w-full border border-theme1 h-12 rounded-md p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="">
                  <label for="forex-amount" class="block text-sm font-medium text-gray-700">Choose Product</label>
                  <input id="forex-amount" type="number" placeholder="Enter amount" 
                    class="mt-1 block w-full border border-theme1 h-12 rounded-md p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="">
                  <label for="forex-amount" class="block text-sm font-medium text-gray-700">Choose Currency</label>
                  <input id="forex-amount" type="number" placeholder="Enter amount" 
                    class="mt-1 block w-full border border-theme1 h-12 rounded-md p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="">
                  <label for="forex-amount" class="block text-sm font-medium text-gray-700">Buy USD</label>
                  <input id="forex-amount" type="number" placeholder="Enter amount" 
                    class="mt-1 block w-full border border-theme1 h-12 rounded-md p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
              </div>
              <span class="open-sans block mt-2 w-full text-right text-xs text-theme1">is approximately <strong class="text-theme2">84,940 INR</strong></span>
              <br />
              <button type="submit" class="w-full md:w-1/2 text-xl open-sans-bold font-bold mt-4 px-6 py-2 bg-theme2 text-white !rounded-[11px]">Get Best Rates ></button>
            </form>
          </div>
        </div>
      </div>
      <a href="#" class="text-theme2 w-full text-lg text-center my-2">{{ setting('home-page.sell_currency_title') }}</a>
      <div class="flex flex-col md:flex-row items-center justify-center text-white">{{ setting('home-page.bank_description') }}
        <div class="flex items-center ml-2 my-2 space-x-3">
          <img src="{{ Voyager::image(setting('home-page.bank_logo_one')) }}" alt="">
          <img src="{{ Voyager::image(setting('home-page.bank_logo_two')) }}" alt="">
        </div>
      </div>
    </div>
  </div>
  <!-- sell currency form -->

  <!-- what we do -->
  <div class="bg-white p-4 md:p-10">
    <div class="container">
      <div class="flex flex-col md:flex-row items-end justify-between">
        <h2 class="w-full md:w-1/2 mb-3 md:mb-0 text-[42px] md:text-[72px] gadugi-bold text-theme1 title-shadow">What We Do,</h2>
        <div class="w-full md:w-1/2 flex justify-end flex-col md:flex-row">
          <div data-tab="popularService" class="whatWeButton flex itmes-center mb-2 md:mb-0 md:justify-center px-3 text-center tab-active text-xl cursor-pointer">
            <svg
              width="40"
              height="40"
              viewBox="0 0 40 40"
              fill="none" 
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M4.16699 5.00331H35.8337M7.50033 5.00331V23.3333C7.50033 27.215 8.21699 28.4833 11.547 30.48L16.5703 33.4933C18.242 34.5 19.077 35 20.0003 35C20.9237 35 21.7587 34.4983 23.4303 33.495L28.4553 30.48C31.782 28.4833 32.5003 27.2166 32.5003 23.335V5.00165" stroke="#0D8478" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M21.0082 13.3417L22.0332 15.4133C22.1202 15.5685 22.2389 15.7037 22.3816 15.8099C22.5244 15.9162 22.6879 15.9912 22.8615 16.03L24.7232 16.3417C25.9132 16.5417 26.1932 17.4117 25.3348 18.27L23.8882 19.7283C23.7611 19.8721 23.6678 20.0426 23.6153 20.2272C23.5629 20.4118 23.5524 20.6058 23.5848 20.795L23.9998 22.5983C24.3265 24.0283 23.5732 24.5817 22.3198 23.8333L20.5765 22.7933C20.3982 22.7004 20.2001 22.6519 19.999 22.6519C19.7979 22.6519 19.5998 22.7004 19.4215 22.7933L17.6765 23.8333C16.4282 24.58 15.6698 24.0217 15.9965 22.6L16.4115 20.7933C16.4437 20.6044 16.4331 20.4107 16.3806 20.2264C16.3281 20.0422 16.235 19.872 16.1082 19.7283L14.6615 18.27C13.8098 17.4117 14.0832 16.5417 15.2732 16.3417L17.1348 16.03C17.3073 15.9903 17.4695 15.9149 17.611 15.8087C17.7525 15.7025 17.8702 15.5678 17.9565 15.4133L18.9832 13.3417C19.5432 12.22 20.4548 12.22 21.0082 13.3417Z" stroke="#0D8478" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Popular Service
          </div>
          <div data-tab="studyAbroad" class="whatWeButton px-3 flex itmes-center mb-2 md:mb-0 md:justify-center tab-inactive text-xl cursor-pointer">
            <svg  
              width="31"
              height="31"
              viewBox="0 0 31 31"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M23.1167 24.1672L20.7917 13.5755L25.3125 9.05469C27.25 7.11719 27.8958 4.53385 27.25 3.24219C25.9583 2.59635 23.375 3.24219 21.4375 5.17969L16.9167 9.70052L6.325 7.37552C5.67917 7.24635 5.1625 7.50469 4.90417 8.02135L4.51667 8.66719C4.25833 9.31302 4.3875 9.95885 4.90417 10.3464L11.75 14.8672L9.16667 18.7422H5.29167L4 20.0339L7.875 22.6172L10.4583 26.4922L11.75 25.2005V21.3255L15.625 18.7422L20.1458 25.588C20.5333 26.1047 21.1792 26.2339 21.825 25.9755L22.4708 25.7172C22.9875 25.3297 23.2458 24.813 23.1167 24.1672Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Study Abroad
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-theme2 md:p-7">
    <div class="container">
      <div id="contents">
        <div data-content="popularService" class="whatWetab-content p-2 md:!p-5 md:!pb-9">
          <p class="text-white text-lg mb-6 gadugi-bold">Complete suite of services for Indian travelers, expats, and students—covering currency exchange, money transfers, visa assistance and student account opening.</p>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-12">
            @foreach($popular_services as $service)
              <div class="flex items-center bg-theme1 !rounded-[17px] p-4 mb-2">
                <div class="w-1/2">
                  <h4 class="open-sans-bold text-white text-[30px] mb-9">{{ $service->title }}</h4>
                  <p class="text-white text-base">{{ $service->desc_for_listing }}</p>
                </div>
                <div class="w-1/2 text-right">
                  <img class="w-[120px] ml-auto mb-3" src="{{ Voyager::image($service->image) }}" alt="">
                  <a href="#" class="bg-theme2 text-theme1 hover:text-white rounded-full px-3 py-2 gadugi-bold" >Buy Now  ></a>
                </div>
              </div>
            @endforeach
          </div>
        </div>
        <div data-content="studyAbroad" class="whatWetab-content p-2 md:!p-5 md:!pb-9 hidden">
          <p class="text-white text-lg mb-6 gadugi-bold">Study Abroad</p>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-12">
            @foreach($study_abroad_services as $service)
              <div class="flex items-center bg-theme1 !rounded-[17px] p-4 mb-2">
                <div class="w-1/2">
                  <h4 class="open-sans-bold text-white text-[30px] mb-9">{{ $service->title }}</h4>
                  <p class="text-white text-base">{{ $service->desc_for_listing }}</p>
                </div>
                <div class="w-1/2 text-right">
                  <img class="w-[120px] ml-auto mb-3" src="{{ Voyager::image($service->image) }}" alt="">
                  <a href="#" class="bg-theme2 text-theme1 hover:text-white rounded-full px-3 py-2 gadugi-bold" >Buy Now  ></a>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- what we do -->

  <!-- What we Provide you ! -->
  <div class="bg-white py-12">
    <div class="container">
      <div class="flex mb-8">
        <h2 class="w-full mb-3 md:mb-0 text-[42px] md:text-[72px] gadugi-bold text-theme1 title-shadow">What we Provide you !</h2>
      </div>
      <div class="flex flex-col mf:flex-row items-center gap-8">
        <div class="w-full md:w-2/3">
          @foreach($firstPart as $feature)
            <div class="flex items-center px-4 py-2 md:py-3 border-[6px] border-[#001E3769] mb-6 md:mb-[46px] rounded-full">
              <img class="w-[68px] md:w-[100px] mr-3" src="{{ Voyager::image($feature->image) }}" alt="">
              <div class="text-theme1">
                <div class="mb-2 text-lg gadugi-bold">{{ $feature->title }}</div>
                <p class="text-xs">{{ $feature->description }}</p>
              </div>
            </div>
          @endforeach
        </div>
        <div class="w-full md:w-2/3 flex justify-center text-center">
          <div class="w-[290px] h-[290px] md:w-[390px] md:h-[390px] flex justify-center items-center border-[6px] border-[#001E3769] rounded-full">
            <img class="w-[150px] md:w-[250px]" src="{{ asset('dist/assets/images/logo-only.svg') }}" alt="">
          </div>
        </div>
        <div class="w-full md:w-2/3">
          @foreach($secondPart as $feature)
            <div class="flex items-center px-4 py-2 md:py-3 border-[6px] border-[#001E3769] mb-6 md:mb-[46px] rounded-full">
              <img class="w-[68px] md:w-[100px] mr-3" src="{{ Voyager::image($feature->image) }}" alt="">
              <div class="text-theme1">
                <div class="mb-2 text-lg gadugi-bold">{{ $feature->title }}</div>
                <p class="text-xs">{{ $feature->description }}</p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <!-- What we Provide you ! -->

  <!-- Reviews -->
  <div class="container">
    <div class="flex mb-8">
      <h2 class="w-full mb-3 md:mb-0 text-[42px] md:text-[72px] gadugi-bold text-theme1 title-shadow">Reviews</h2>
    </div>
  </div>
  <div class="bg-theme1">
    <div class="container">
      <div class="review-slider py-16 pb-[100px] mb-0">
        <!-- Slider Item 1 -->
        @foreach($reviews as $review)
          <div class="px-2">
            <div class="p-4 bg-white rounded-[21px] shadow-md">
              <div class="mb-4 flex items-center justify-between">
                <div class="flex items-center space-x-4">
                  {{-- <img src="{{ asset('dist/assets/images/review-img1.png') }}" alt="Item Image" class="w-10 h-10 rounded-full"> --}}
                  <div class="">
                    <h3 class="text-lg gadugi-bold">{{ $review->name }}</h3>
                    {{-- <span class="text-[10px] px-3 rounded-full bg-[#D9D9D9] text-white gadugi-bold">{{ $review->subtitle }}</span> --}}
                  </div>
                </div>
                <div class="mt-2 flex">
                  <div class="star-ratings">
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($review->ratings >= $i) 
                            <i class="fas fa-star text-[#FFAC33]"></i>
                        @elseif ($review->ratings >= $i - 0.5)
                            <i class="fas fa-star-half-alt text-[#FFAC33]"></i>
                        @else
                            <i class="fas fa-star text-[#CEC9C1]"></i>
                        @endif
                    @endfor
                </div>
              </div>
              </div>
              <div>
                <p class="text-theme1 text-sm open-sans">{{ $review->comment }}</p>
              </div>
            </div>
          </div>
        @endforeach
        <!-- Add more slider items as needed -->
      </div>
    </div>
  </div>
  <!-- Reviews -->

  <!-- bottom links -->
  <div class="bg-white py-4">
    <div class="container mx-auto flex justify-between items-center">
      <!-- Logo -->
      <div class="text-white font-bold text-xl">
        <a href="#" class="w-[160px] md:w-[212px]">
          <img src="{{ asset('dist/assets/images/logo.svg') }}" alt="">
        </a>
      </div>
      
      <!-- Navbar (Desktop) -->
      <nav class="flex flex-row space-x-2 md:space-x-8">
        <a href="#" class="text-theme1 open-sans-semibold">Blogs</a>
        <a href="#" class="text-theme1 open-sans-semibold">Offers</a>
        <a href="#" class="text-theme1 open-sans-semibold">FAQ</a>
      </nav>
    </div>
  </div>
</div>
@include('footer')