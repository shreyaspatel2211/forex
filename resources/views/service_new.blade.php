@include('header')

<div class="page">
    <!-- banner section -->
    <div class="container">
        <div class="flex flex-col md:flex-row items-center py-5">
            <div class="w-full md:w-1/2">
                <h1 class="text-[45px] text-theme1 gadugi-bold mb-12">{{ setting('home-page.page_title') }}  <span class="block text-theme2">{{ setting('home-page.title') }}</span></h1>
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
          <div data-tab="send" class="tab-button w-full md:w-1/2 p-3 flex itmes-center justify-center tab-active text-xl cursor-pointer">
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
          {{-- <div data-tab="forex" class="tab-button flex itmes-center justify-center w-full md:w-1/2 p-3 text-center tab-inactive text-xl cursor-pointer">
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
          </div> --}}
        </div>

        @if(session('success'))
            <script>
                toastr.success("{{ session('success') }}");
            </script>
        @endif
        <div id="contents">
          {{-- <div data-content="forex" class="tab-content p-2 md:p-5 hidden">
            <form>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="relative">
                  <label for="forex-amount" class="block text-sm font-medium text-gray-700">Choose your Travel Destination</label>
                  <input id="forex-amount" type="number" placeholder="Choose Your Travel Destination" 
                    class="mt-1 block w-full border border-theme1 h-12 rounded-md p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500 !pr-10">
                    <div class="absolute right-2 top-9 cursor-pointer">
                      <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.46561 1.36444C13.1377 0.736429 18.8618 0.736429 24.5339 1.36444C27.6744 1.71644 30.2081 4.18961 30.5766 7.34111C31.2488 13.0941 31.2488 18.9058 30.5766 24.6588C30.2081 27.8103 27.6744 30.2834 24.5339 30.6354C18.8618 31.2635 13.1377 31.2635 7.46561 30.6354C4.32511 30.2834 1.79144 27.8103 1.42294 24.6588C0.750945 18.9064 0.750945 13.0953 1.42294 7.34294C1.60934 5.81187 2.30731 4.38861 3.40374 3.30383C4.50017 2.21904 5.9308 1.53631 7.46378 1.36628M15.9998 6.84611C16.3645 6.84611 16.7142 6.99098 16.972 7.24884C17.2299 7.5067 17.3748 7.85644 17.3748 8.22111V14.6249H23.7786C24.1433 14.6249 24.493 14.7698 24.7509 15.0277C25.0087 15.2855 25.1536 15.6353 25.1536 15.9999C25.1536 16.3646 25.0087 16.7144 24.7509 16.9722C24.493 17.2301 24.1433 17.3749 23.7786 17.3749H17.3748V23.7788C17.3748 24.1434 17.2299 24.4932 16.972 24.7511C16.7142 25.0089 16.3645 25.1538 15.9998 25.1538C15.6351 25.1538 15.2854 25.0089 15.0275 24.7511C14.7696 24.4932 14.6248 24.1434 14.6248 23.7788V17.3749H8.22095C7.85627 17.3749 7.50654 17.2301 7.24867 16.9722C6.99081 16.7144 6.84595 16.3646 6.84595 15.9999C6.84595 15.6353 6.99081 15.2855 7.24867 15.0277C7.50654 14.7698 7.85627 14.6249 8.22095 14.6249H14.6248V8.22111C14.6248 7.85644 14.7696 7.5067 15.0275 7.24884C15.2854 6.99098 15.6351 6.84611 15.9998 6.84611Z" fill="#02C7B3"/>
                      </svg>
                    </div>
                </div>
                <div class="">
                  <label for="forex-amount" class="block text-sm font-medium text-gray-700">Choose Product</label>
                  <input id="forex-amount" type="number" placeholder="Choose Product" 
                    class="mt-1 block w-full border border-theme1 h-12 rounded-md p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="">
                  <label for="forex-amount" class="block text-sm font-medium text-gray-700">Choose Currency</label>
                  <input id="forex-amount" type="number" placeholder="Choose currency" 
                    class="mt-1 block w-full border border-theme1 h-12 rounded-md p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="">
                  <label for="forex-amount" class="block text-sm font-medium text-gray-700">Buy USD</label>
                  <input id="forex-amount" type="number" placeholder="Buy USD" 
                    class="mt-1 block w-full border border-theme1 h-12 rounded-md p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
              </div>
              <span class="open-sans block mt-2 w-full text-right text-xs text-theme1">is approximately <strong class="text-theme2">84,940 INR</strong></span>
              <br />
              <button type="submit" class="w-full md:w-1/2 text-xl open-sans-bold font-bold mt-4 px-6 py-2 bg-theme2 text-white !rounded-[11px]">Get Best Rates ></button>
            </form>
          </div> --}}
          <div data-content="send" class="tab-content p-2 md:p-5">
            <form action="{{ route('send-money.store') }}" method="POST">
              @csrf
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                  <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
                  <input id="name" name="name" type="text" placeholder="Enter Your Name" class="mt-1 block w-full border border-theme1 h-12 rounded-md p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500" value="{{ old('name') }}">
                  @error('name')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                  @enderror
                </div>
                <div>
                  <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                  <input id="email" name="email" type="text" placeholder="Enter Your Email" class="mt-1 block w-full border border-theme1 h-12 rounded-md p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500" value="{{ old('email') }}">
                  @error('email')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                  @enderror
                </div>
                <div>
                  <label for="phone_number" class="block text-sm font-medium text-gray-700">Mobile No.</label>
                  <input id="phone_number" name="phone_number" type="text" placeholder="Enter Your Mobile No." class="mt-1 block w-full border border-theme1 h-12 rounded-md p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500" value="{{ old('phone_number') }}">
                  @error('phone_number')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                  @enderror
                </div>
                <div>
                  <label for="send_money_to" class="block text-sm font-medium text-gray-700">Send Money To</label>
                  <select id="send_money_to" name="send_money_to" class="mt-1 block w-full border border-theme1 h-12 rounded-md p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                      {{-- <option value="">Select a country</option> --}}
                      @foreach($countries as $country)
                          <option value="{{ $country->id }}" data-currency="{{ $country->currency }}" data-flag="{{ $country->emoji }}" {{ $country->id == 233 ? 'selected' : '' }}>{{ $country->name }}</option>
                      @endforeach
                  </select>
                  @error('send_money_to')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                  @enderror
                </div>
                <div>
                  <label for="purpose_of_remittance" class="block text-sm font-medium text-gray-700">Purpose of Remittance</label>
                  <select id="purpose_of_remittance" name="purpose_of_remittance" class="mt-1 block w-full border border-theme1 h-12 rounded-md p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    {{-- <option value="">Purpose of Remittance</option> --}}
                    @foreach($send_money_options as $send_money_option)
                        <option value="{{ $send_money_option->id }}" {{ old('purpose_of_remittance') == $send_money_option->id ? 'selected' : '' }}>{{ $send_money_option->name }}</option>
                    @endforeach
                  </select>
                  @error('purpose_of_remittance')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                  @enderror
                </div>
                <div>
                  <label id="currency-label" for="amount" class="block text-sm font-medium text-gray-700">Send USD</label>
                  <input id="amount" name="amount" type="number" placeholder="Enter amount" class="currency-input pl-10 w-full border border-theme1 h-12 rounded-md p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500" value="{{ old('amount', 1000) }}">
                  @error('amount')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                  @enderror
                </div>
                <div>
                  <label for="city" class="block text-sm font-medium text-gray-700">Choose City</label>
                  <select id="city" name="city" class="mt-1 block w-full border border-theme1 h-12 rounded-md p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    {{-- <option value="">Select Your City</option> --}}
                    @foreach($topcities as $topcity)
                        <option value="{{ $topcity->id }}" {{ old('city') == $topcity->id ? 'selected' : '' }}>{{ $topcity->city_id }}</option>
                    @endforeach
                  </select>
                  @error('city')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <span id="converted-amount" class="open-sans block mt-2 w-full text-right text-xs text-theme1">is approximately <strong class="text-theme2">84,940 INR</strong></span>
              <br />
              <button type="submit" class="w-full md:w-1/2 text-xl open-sans-bold font-bold mt-4 px-6 py-2 bg-theme2 text-white !rounded-[11px]">Get Best Rates ></button>
            </form>

          </div>
        </div>
      </div>
      {{-- <a href="#" class="text-theme2 w-full text-lg text-center my-2">{{ setting('home-page.sell_currency_title') }}</a>
      <div class="flex flex-col md:flex-row items-center justify-center text-white">{{ setting('home-page.bank_description') }}
        <div class="flex items-center ml-2 my-2 space-x-3">
          <img src="{{ Voyager::image(setting('home-page.bank_logo_one')) }}" alt="">
          <img src="{{ Voyager::image(setting('home-page.bank_logo_two')) }}" alt="">
        </div>
      </div> --}}
    </div>
  </div>
  <!-- sell currency form -->

    <!-- What we Provide you ! -->
    <div class="bg-white py-12">
        <div class="container">
          <div class="flex mb-8">
            <h2 class="w-full mb-3 md:mb-0 text-[42px] md:text-[72px] gadugi-bold text-theme1 title-shadow">What we Provide you !</h2>
          </div>
          <div class="flex flex-col md:flex-row items-center gap-8">
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
                <img class="w-[150px] md:w-[250px]" src="{{ Voyager::image(setting('site.favicon')) }}" alt="">
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
        </div>
        </div>
    </div>
    <!-- Reviews -->

    @if($services->transfer_money_to_countries == 1)
    <!-- transfer money -->
    <div class="container py-10">
        <div class="flex mb-8">
            <h2 class="w-full mb-3 md:mb-0 text-[42px] md:text-[72px] gadugi-bold text-theme1 title-shadow">Transfer Money to 100+ Countries</h2>
        </div>
        <div class="flex justify-center items-center flex-wrap gap-4">
            <!-- Card 1 -->
            @foreach($transfer_money_to_countries as $transfer_money_to_countrie)
            <div class="flex items-center bg-white shadow-md w-[170px] h-[100px]">
                <div class="flex flex-col items-center w-[70px]">
                    <span class="text-[24px]">{{ $transfer_money_to_countrie->emoji }}</span>
                    {{-- <img src="{{ $transfer_money_to_countrie->emoji }}" alt="Flag" class="w-[50px] h-[35px] object-cover mb-1"> --}}
                    <p class="text-[#001E37] font-bold text-[14px]">{{ $transfer_money_to_countrie->iso3 }}</p>
                </div>
                <div class="ml-auto bg-teal-500 flex items-center justify-center w-[40px] h-[100px]">
                    <span class="text-white text-lg font-bold">&gt;</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- transfer money -->
    @endif

    <!-- how to transfer -->
    <div class="container">
        {!! $services->long_description !!}
    </div>
    <!-- how to transfer -->

    @if($services->transfer_money_to_countries == 1)
    <!-- Currencies available -->
    <div class="container pt-14">
        <div class="flex mb-8">
            <h2 class="w-full mb-3 md:mb-0 text-[42px] md:text-[72px] gadugi-bold text-theme1 title-shadow">Currencies available for making a direct Outward Remittance
            </h2>
        </div>
    </div>
    <div class="bg-[#001E37] py-10 px-4 sm:px-6 md:px-8 flex justify-center items-center"> <!-- Centered Container -->
        <!-- Cards (Centered) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 justify-items-center"> 
            <!-- Card 1 -->
            @foreach($transfer_money_to_countries as $transfer_money_to_countrie)
            <div class="bg-[#02C7B3] border-4 border-dotted border-[#001E37] w-[180px] h-[120px] flex flex-col justify-between p-3">
                <div class="flex items-center justify-between">
                    <span class="text-[24px]">{{ $transfer_money_to_countrie->emoji }}</span>
                    {{-- <img src="{{ $transfer_money_to_countrie->emoji }}" alt="Flag" class="w-[80%] h-[50%]" /> --}}
                    <div class="ml-4 text-[#001E37] font-bold text-[14px]">{{ $transfer_money_to_countrie->iso3 }}</div>
                </div>
                <div class="bg-[#003B3C] text-white text-[12px] text-center py-1 mt-2">
                  {{ $transfer_money_to_countrie->currency_name }}
                </div>
            </div>
            @endforeach
        </div>
      </div>
    <!-- Currencies available -->
    @endif

    @if($services->faqs == 1)
    <!-- FAQ -->
    <div class="container py-[70px]">
        <div class="flex mb-8">
            <h2 class="w-full mb-3 md:mb-0 text-[42px] md:text-[72px] gadugi-bold text-theme1 title-shadow">Frequently
                Asked Questions (FAQs)</h2>
        </div>
        <div class="faq-accordion flex flex-col items-center justify-center">
            <!--  Panel 1  -->
            @foreach($faqs as $faq)
            <div class="w-full mb-3">
                <input type="checkbox" name="panel" id="panel-1" class="hidden">
                <label for="panel-1" class="relative block text-theme1 font-bold text-[22px] p-2 cursor-pointer">
                    {{ $faq->question }}
                </label>
                <div class="accordion__content overflow-hidden bg-grey-lighter">
                    <p class="text-[18px] accordion__body p-4 text-[#0D8478]" id="panel1">{!! $faq->answer !!}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- FAQ -->
    @endif

    <!-- bottom links -->
    <div class="bg-white py-4">
      <div class="container mx-auto flex justify-between items-center">
        <div class="text-white font-bold text-xl">
          <a href="#" class="w-[160px] md:w-[212px]">
            <img src="{{ Voyager::image(setting('site.logo')) }}" alt="">
          </a>
        </div>
        
        <nav class="flex flex-row space-x-2 md:space-x-8">
          <a href="#" class="text-theme1 open-sans-semibold">Blogs</a>
          <a href="#" class="text-theme1 open-sans-semibold">Offers</a>
          <a href="#" class="text-theme1 open-sans-semibold">FAQ</a>
        </nav>
      </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    
@if(session('success'))
  <script>
      toastr.success("{{ session('success') }}", "Success", {
          "positionClass": "toast-top-right", 
          "closeButton": true,               
          "progressBar": true,               
          "timeOut": "5000",                 
      });
  </script>
@endif


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>     
<script>
  $(document).ready(function() {
      function updateCurrencyLabel() {
        var currency = $('#send_money_to option:selected').data('currency');
        var flag = $('#send_money_to option:selected').data('flag');

        if (currency) {
          $('#currency-label').text('Send ' + currency + ' ' + flag);
        }
      }

      updateCurrencyLabel();

      $('#send_money_to').on('change', updateCurrencyLabel);
  });
</script>
<script>
  $(document).ready(function() {
      function updateConvertedAmount() {
        var baseCurrency = $('#send_money_to option:selected').data('currency');
        var amount = $('#amount').val();

        if (baseCurrency && amount) {
          $.ajax({
            url: "{{ route('get.converted.amount') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                base_currency: baseCurrency,
                amount: amount
            },
            success: function(response) {
                if (response.converted) {
                    $('#converted-amount strong').text(response.converted + ' INR');
                } else {
                    $('#converted-amount strong').text('Unable to fetch rate');
                }
            },
            error: function() {
                $('#converted-amount strong').text('Error fetching rate');
            }
          });
        }
      }

      updateConvertedAmount();

      $('#send_money_to, #amount').on('change keyup', updateConvertedAmount);
  });
</script>

@include('footer')