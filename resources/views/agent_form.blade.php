@include('header')

<div class="page">
    <!-- banner section -->
    <div class="container">
        <div class="flex flex-col md:flex-row items-center py-5">
            <div class="w-full md:w-1/2">
                <h1 class="text-[45px] text-theme1 gadugi-bold mb-12">{{ Voyager::setting('page-top-content.agent_title1') }} <span
                        class="block text-theme2">{{ Voyager::setting('page-top-content.agent_title2') }}</span></h1>
                <p class="open-sans text-[24px] text-black md:max-w-[610px]">{!! Voyager::setting('page-top-content.agent_description') !!}</p>
            </div>
            <div class="w-full md:w-1/2">
                <div class="w-full">
                    <img src="{{ Voyager::image(setting('page-top-content.agent_image')) }}" alt="">
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

    <!-- Why Choose MyForexRate? -->
    <div class="md:p-7">
        <div class="container">
            <div class="flex mb-8">
                <h2 class="w-full mb-3 md:mb-0 text-[42px] md:text-[72px] gadugi-bold text-theme1 title-shadow">Why
                    Choose MyForexRate?</h2>
            </div>
            <div id="contents">
                <div class="p-2 md:!p-5 md:!pb-9">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-12">
                        @foreach($why_choose_forexrates as $why_choose_forexrate)
                            <div
                                class="flex items-center bg-theme1 !rounded-[17px] p-4 mb-2 shadow-[-8px_8px_0px_rgba(2,199,179,1)]">
                                <div class="w-1/3 text-left mr-3">
                                    <img class="w-[120px] ml-auto mb-3" src="{{ Voyager::image($why_choose_forexrate->image) }}" alt="">
                                </div>
                                <div class="w-full">
                                    <h4 class="open-sans-bold text-white text-[30px] mb-9">{{ $why_choose_forexrate->title }}</h4>
                                    <p class="text-white text-base">{{ $why_choose_forexrate->description }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose MyForexRate? -->

    <!-- Community form -->
    <div class="bg-theme1 p-3 py-5 md:py-0 md:p-[64px]">
        <div class="container">
            <div class="flex mb-8">
                <h2 class="w-full mb-3 md:mb-0 text-[42px] md:text-[72px] gadugi-bold text-white title-shadow">Join Our
                    Community</h2>
            </div>
            <div class="bg-white rounded-lg p-2 md:p-10">
                <div class="flex flex-col md:flex-row">
                    <div class="flex itmes-center text-theme1 w-full md:w-1/2 p-3 text-center text-xl">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" class="mr-2"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.5 24C1.8125 24 1.22417 23.7528 0.735 23.2585C0.245833 22.7642 0.000833333 22.1693 0 21.4737V7.57895C0 6.88421 0.245 6.28968 0.735 5.79537C1.225 5.30105 1.81333 5.05347 2.5 5.05263H7.5V2.52632C7.5 1.83158 7.745 1.23705 8.235 0.742737C8.725 0.248421 9.31333 0.000842105 10 0H15C15.6875 0 16.2762 0.247579 16.7662 0.742737C17.2562 1.23789 17.5008 1.83242 17.5 2.52632V5.05263H22.5C23.1875 5.05263 23.7762 5.30021 24.2662 5.79537C24.7562 6.29053 25.0008 6.88505 25 7.57895V21.4737C25 22.1684 24.7554 22.7634 24.2662 23.2585C23.7771 23.7537 23.1883 24.0008 22.5 24H2.5ZM10 5.05263H15V2.52632H10V5.05263ZM22.5 16.4211H16.25V18.9474H8.75V16.4211H2.5V21.4737H22.5V16.4211ZM11.25 16.4211H13.75V13.8947H11.25V16.4211ZM2.5 13.8947H8.75V11.3684H16.25V13.8947H22.5V7.57895H2.5V13.8947Z"
                                fill="#0D8478" />
                        </svg>

                        Business Details
                    </div>
                    <div class="w-full md:w-1/2 p-3 flex itmes-center text-theme1 text-xl">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" class="mr-2"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11 8.77778C11.5107 8.77778 12.0164 8.67719 12.4882 8.48175C12.96 8.28632 13.3887 7.99987 13.7499 7.63875C14.111 7.27763 14.3974 6.84892 14.5929 6.3771C14.7883 5.90528 14.8889 5.39959 14.8889 4.88889C14.8889 4.37819 14.7883 3.8725 14.5929 3.40068C14.3974 2.92885 14.111 2.50015 13.7499 2.13903C13.3887 1.77791 12.96 1.49146 12.4882 1.29602C12.0164 1.10059 11.5107 1 11 1C9.9686 1 8.97945 1.40972 8.25014 2.13903C7.52083 2.86834 7.11111 3.85749 7.11111 4.88889C7.11111 5.92029 7.52083 6.90944 8.25014 7.63875C8.97945 8.36806 9.9686 8.77778 11 8.77778ZM1 20.3333V21H21V20.3333C21 17.8444 21 16.6 20.5156 15.6489C20.0895 14.8127 19.4096 14.1328 18.5733 13.7067C17.6222 13.2222 16.3778 13.2222 13.8889 13.2222H8.11111C5.62222 13.2222 4.37778 13.2222 3.42667 13.7067C2.59043 14.1328 1.91054 14.8127 1.48444 15.6489C1 16.6 1 17.8444 1 20.3333Z"
                                stroke="#0D8478" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Personal Details
                    </div>
                </div>

                @if(session('success'))
                    <script>
                        toastr.success("{{ session('success') }}");
                    </script>
                @endif
                <div id="contents">
                    <div class="tab-content p-2 md:p-5">
                        <form method="POST" action="{{ route('agents.store') }}">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <div class="mb-3">
                                        <label for="business_name"
                                            class="block text-sm font-medium text-gray-700">Business Name</label>
                                        <input id="business_name" name="business_name" type="text"
                                            placeholder="Enter Business Name" value="{{ old('business_name') }}"
                                            class="mt-1 block w-full border !border-theme1 h-12 rounded-[11px] p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500 !pr-10">
                                        @error('business_name')
                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="business_address"
                                            class="block text-sm font-medium text-gray-700">Business Address</label>
                                        <input id="business_address" name="business_address" type="text"
                                            placeholder="Enter Business Address" value="{{ old('business_address') }}"
                                            class="mt-1 block w-full border !border-theme1 h-12 rounded-[11px] p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                        @error('business_address')
                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="agent_type"
                                            class="block text-sm font-medium text-gray-700">
                                            Agent Type
                                        </label>
                                        <select id="agent_type" name="agent_type[]" multiple
                                            class="mt-1 block w-full border !border-theme1 h-12 rounded-[11px] p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500 bg-white">
                                            <option value="forex_agent">Forex Agent</option>
                                            <option value="visa_agent">Visa Agent</option>
                                        </select>
                                        @error('agent_type')
                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4"> 
                                        <div class="mb-3">
                                            <label for="country"
                                                class="block text-sm font-medium text-gray-700">
                                                Choose Multiple Countries
                                            </label>
                                            <select id="country" name="country[]" multiple
                                                class="mt-1 block w-full border !border-theme1 h-12 rounded-[11px] p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500 h-[100px]">
                                                @foreach($countries as $country)
                                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('country')
                                                <span class="text-red-600 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="currency"
                                                class="block text-sm font-medium text-gray-700">
                                                Choose Multiple Currency
                                            </label>
                                            <select id="currency" name="currency[]" multiple
                                                class="mt-1 block w-full border !border-theme1 h-12 rounded-[11px] p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500 h-[100px]">
                                                @foreach($countries as $country)
                                                    <option value="{{ $country->id }}">{{ $country->currency }}</option>
                                                @endforeach
                                            </select>
                                            @error('currency')
                                                <span class="text-red-600 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="business_city"
                                                class="block text-sm font-medium text-gray-700">
                                                Business City
                                            </label>
                                            <select id="business_city" name="business_city"
                                                class="mt-1 block w-full border border-theme1 h-12 rounded-md p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                                @foreach($cities as $city)
                                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('business_city')
                                                <span class="text-red-600 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="business_state"
                                                class="block text-sm font-medium text-gray-700">
                                                Business State
                                            </label>
                                            <select id="business_state" name="business_state"
                                                class="mt-1 block w-full border border-theme1 h-12 rounded-md p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                                @foreach($states as $state)
                                                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('business_state')
                                                <span class="text-red-600 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="business_zip_code"
                                                class="block text-sm font-medium text-gray-700">Business Zip</label>
                                            <input id="business_zip_code" name="business_zip_code" type="text"
                                                placeholder="Enter Business Zip Code" value="{{ old('business_zip_code') }}"
                                                class="mt-1 block w-full border !border-theme1 h-12 rounded-[11px] p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                            @error('business_zip_code')
                                                <span class="text-red-600 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="business_phone"
                                                class="block text-sm font-medium text-gray-700">Business Number</label>
                                            <input id="business_phone" name="business_phone" type="text"
                                                placeholder="Enter Business Number" value="{{ old('business_phone') }}"
                                                class="mt-1 block w-full border !border-theme1 h-12 rounded-[11px] p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                            @error('business_phone')
                                                <span class="text-red-600 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <label for="name"
                                            class="block text-sm font-medium text-gray-700">Name</label>
                                        <input id="name" name="name" type="text" placeholder="Enter Name" value="{{ old('name') }}"
                                            class="mt-1 block w-full border !border-theme1 h-12 rounded-[11px] p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500 !pr-10">
                                        @error('name')
                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700">Email</label>
                                        <input id="email" name="email" type="text" placeholder="Enter Email" value="{{ old('email') }}"
                                            class="mt-1 block w-full border !border-theme1 h-12 rounded-[11px] p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                        @error('email')
                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="contact_number"
                                            class="block text-sm font-medium text-gray-700">Contact Number</label>
                                        <input id="contact_number" name="contact_number" type="number" placeholder="Enter Contact Number" value="{{ old('contact_number') }}"
                                            class="mt-1 block w-full border !border-theme1 h-12 rounded-[11px] p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                        @error('contact_number')
                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="whatsapp_number"
                                            class="block text-sm font-medium text-gray-700">Whatsapp Number</label>
                                        <input id="whatsapp_number" name="whatsapp_number" type="number" placeholder="Enter Whatsapp Number" value="{{ old('whatsapp_number') }}"
                                            class="mt-1 block w-full border !border-theme1 h-12 rounded-[11px] p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                        @error('whatsapp_number')
                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="username"
                                            class="block text-sm font-medium text-gray-700">Username</label>
                                        <input id="username" name="username" type="text" placeholder="Enter Username" value="{{ old('username') }}"
                                            class="mt-1 block w-full border !border-theme1 h-12 rounded-[11px] p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                        @error('username')
                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="password"
                                            class="block text-sm font-medium text-gray-700">Password</label>
                                        <input id="password" name="password" type="text" placeholder="Enter Password"
                                            class="mt-1 block w-full border !border-theme1 h-12 rounded-[11px] p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                        @error('password')
                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <br />
                            <button type="submit"
                                class="w-full md:w-1/2 text-xl open-sans-bold font-bold mt-4 px-6 py-2 bg-theme2 text-white !rounded-[11px]">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Community form -->

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

    <!-- Reviews -->
    <div class="container">
        <div class="flex mb-8">
            <h2 class="w-full mb-3 md:mb-0 text-[42px] md:text-[72px] gadugi-bold text-theme1 title-shadow">Reviews
            </h2>
        </div>
    </div>
    <div class="bg-theme1">
        <div class="container">
            <div class="review-slider py-16 pb-[100px] mb-0">
                <!-- Slider Item 1 -->
                <div class="px-2">
                    <div class="p-4 bg-white rounded-[21px] shadow-md">
                        <div class="mb-4 flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <img src="./dist/assets/images/review-img1.png" alt="Item Image"
                                    class="w-10 h-10 rounded-full">
                                <div class="">
                                    <h3 class="text-lg gadugi-bold">Slider Item 1</h3>
                                    <span
                                        class="text-[10px] px-3 rounded-full bg-[#D9D9D9] text-white gadugi-bold">Money
                                        Transfer</span>
                                </div>
                            </div>
                            <div class="mt-2 flex">
                                <div class="star-ratings">
                                    <i class="fas fa-star text-[#FFAC33] text-[#FFAC33]"></i>
                                    <i class="fas fa-star text-[#FFAC33] text-[#FFAC33]"></i>
                                    <i class="fas fa-star text-[#FFAC33] text-[#FFAC33]"></i>
                                    <i class="fas fa-star text-[#FFAC33] text-[#FFAC33]"></i>
                                    <i class="fas fa-star text-[#CEC9C1]"></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="text-theme1 text-sm open-sans">I’ve been using My Forex Rate for a few months
                                now, and I’m impressed with the overall experience. The platform offers competitive
                                exchange rates and low transaction fees, making it ideal for frequent currency
                                exchanges.</p>
                        </div>
                    </div>
                </div>
                <!-- Slider Item 2 -->
                <div class="px-2">
                    <div class="p-4 bg-white rounded-[21px] shadow-md">
                        <div class="mb-4 flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <img src="./dist/assets/images/review-img1.png" alt="Item Image"
                                    class="w-10 h-10 rounded-full">
                                <div class="">
                                    <h3 class="text-lg gadugi-bold">Slider Item 1</h3>
                                    <span
                                        class="text-[10px] px-3 rounded-full bg-[#D9D9D9] text-white gadugi-bold">Money
                                        Transfer</span>
                                </div>
                            </div>
                            <div class="mt-2 flex">
                                <div class="star-ratings">
                                    <i class="fas fa-star text-[#FFAC33] text-[#FFAC33]"></i>
                                    <i class="fas fa-star text-[#FFAC33] text-[#FFAC33]"></i>
                                    <i class="fas fa-star text-[#FFAC33] text-[#FFAC33]"></i>
                                    <i class="fas fa-star text-[#FFAC33] text-[#FFAC33]"></i>
                                    <i class="fas fa-star text-[#CEC9C1]"></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="text-theme1 text-sm open-sans">I’ve been using My Forex Rate for a few months
                                now, and I’m impressed with the overall experience. The platform offers competitive
                                exchange rates and low transaction fees, making it ideal for frequent currency
                                exchanges.</p>
                        </div>
                    </div>
                </div>
                <!-- Slider Item 3 -->
                <div class="px-2">
                    <div class="p-4 bg-white rounded-[21px] shadow-md">
                        <div class="mb-4 flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <img src="./dist/assets/images/review-img1.png" alt="Item Image"
                                    class="w-10 h-10 rounded-full">
                                <div class="">
                                    <h3 class="text-lg gadugi-bold">Slider Item 1</h3>
                                    <span
                                        class="text-[10px] px-3 rounded-full bg-[#D9D9D9] text-white gadugi-bold">Money
                                        Transfer</span>
                                </div>
                            </div>
                            <div class="mt-2 flex">
                                <div class="star-ratings">
                                    <i class="fas fa-star text-[#FFAC33] text-[#FFAC33]"></i>
                                    <i class="fas fa-star text-[#FFAC33] text-[#FFAC33]"></i>
                                    <i class="fas fa-star text-[#FFAC33] text-[#FFAC33]"></i>
                                    <i class="fas fa-star text-[#FFAC33] text-[#FFAC33]"></i>
                                    <i class="fas fa-star text-[#CEC9C1]"></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="text-theme1 text-sm open-sans">I’ve been using My Forex Rate for a few months
                                now, and I’m impressed with the overall experience. The platform offers competitive
                                exchange rates and low transaction fees, making it ideal for frequent currency
                                exchanges.</p>
                        </div>
                    </div>
                </div>
                <!-- Slider Item 4 -->
                <div class="px-2">
                    <div class="p-4 bg-white rounded-[21px] shadow-md">
                        <div class="mb-4 flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <img src="./dist/assets/images/review-img1.png" alt="Item Image"
                                    class="w-10 h-10 rounded-full">
                                <div class="">
                                    <h3 class="text-lg gadugi-bold">Slider Item 1</h3>
                                    <span
                                        class="text-[10px] px-3 rounded-full bg-[#D9D9D9] text-white gadugi-bold">Money
                                        Transfer</span>
                                </div>
                            </div>
                            <div class="mt-2 flex">
                                <div class="star-ratings">
                                    <i class="fas fa-star text-[#FFAC33] text-[#FFAC33]"></i>
                                    <i class="fas fa-star text-[#FFAC33] text-[#FFAC33]"></i>
                                    <i class="fas fa-star text-[#FFAC33] text-[#FFAC33]"></i>
                                    <i class="fas fa-star text-[#FFAC33] text-[#FFAC33]"></i>
                                    <i class="fas fa-star text-[#CEC9C1]"></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="text-theme1 text-sm open-sans">I’ve been using My Forex Rate for a few months
                                now, and I’m impressed with the overall experience. The platform offers competitive
                                exchange rates and low transaction fees, making it ideal for frequent currency
                                exchanges.</p>
                        </div>
                    </div>
                </div>
                <!-- Add more slider items as needed -->
            </div>
        </div>
    </div>
    <!-- Reviews -->

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

@include('footer')
