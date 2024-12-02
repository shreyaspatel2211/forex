@include('header')

<div class="page">
    <!-- banner section -->
    <div class="container">
        <div class="flex flex-col items-center py-5">
            <div class="w-full">
                <div class="w-3/4 m-auto">
                    <img src="{{ Voyager::image(setting('about.about_banner')) }}" alt="">
                </div>
            </div>
            <div class="w-full">
                <h1 class="text-[45px] md:text-[65px] text-center text-theme1 gadugi-bold mb-12">Welcome to <span class="block text-theme2">My Forex Rate</span></h1>
                <p class="open-sans text-[24px] text-black">{!! Voyager::setting('about.about_title_content') !!}
                </p>
            </div>
        </div>
    </div>
    <!-- banner section -->

    <!-- about forex -->
    <div class="bg-theme1 p-3 py-5 md:py-0 md:p-[64px]">
        <div class="container">
            <h2 class="w-full md:w-1/2 mb-3 md:mb-0 text-[42px] md:text-[72px] gadugi-bold text-white title-shadow">{{ Voyager::setting('about.about_forex_rate_title') }}</h2>
            <div class="flex flex-col md:flex-row items-center">
                <div class="w-full md:w-3/5 pt-5 text-white font-[open-sans] text-[24px]">{!! Voyager::setting('about.about_forex_rate_description') !!}</div>
                <div class="w-full md:w-2/5 pt-5 md:pt-0">
                    <img class="w-full max-w-[300px] m-auto md:ml-auto" src="{{ Voyager::image(setting('about.about_forex_rate_image')) }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- about forex -->

    <!-- trustedBy -->
    <div class="container py-6">
        <h2 class="w-full md:w-1/2 mb-3 md:mb-0 text-[42px] md:text-[72px] gadugi-bold text-theme1 title-shadow">Trusted By</h2>
        <div class="grid mt-5 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 mb-[52px]">
            <div class="text-center">
                <div class="relative flex items-center justify-center">
                    <img class="" src="./dist/assets/images/half-ring.png" alt="">
                    <h3 class="absolute top-[50%] text-white text-[42px] font-[gadugi-bold] z-9">125000+</h3>
                </div>
                <div class="flex items-center justify-center mt-4">
                    <h6 class="text-[32px] text-theme1 font-[gadugi-bold] mr-3">Users</h6>
                    <img src="./dist/assets/images/userColors.png" alt="">
                </div>
            </div>
            <div class="text-center">
                <div class="relative flex items-center justify-center">
                    <img class="" src="./dist/assets/images/half-ring.png" alt="">
                    <h3 class="absolute top-[50%] text-white text-[42px] font-[gadugi-bold] z-9">4.9/5</h3>
                </div>
                <div class="flex items-center justify-center mt-4">
                    <img src="./dist/assets/images/trustpilot.png" alt="">
                </div>
            </div>
            <div class="text-center">
                <div class="relative flex items-center justify-center">
                    <img class="" src="./dist/assets/images/half-ring.png" alt="">
                    <h3 class="absolute top-[50%] text-white text-[42px] font-[gadugi-bold] z-9">4.7/5</h3>
                </div>
                <div class="flex items-center justify-center mt-4">
                    <img src="./dist/assets/images/google.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- trustedBy -->
    
    {{-- <!-- our team -->
    <div class="bg-theme2 py-8">
    <div class="container">
        <h2 class="w-full md:w-1/2 mb-3 md:mb-0 text-[42px] md:text-[72px] gadugi-bold text-theme1 title-shadow-w">Our Team</h2>
        <div class="grid mt-5 grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-3 mb-[52px]">
            <div class="flex flex-col text-center justify-center mb-3">
                <img class="m-auto rounded-full w-[200px] h-[200px] object-cover bg-white" src="./dist/assets/images/team1.png" alt="">
                <h6 class="font-[gadugi-bold] text-[32px] mt-3 text-theme1">Lorem Ipsum</h6>
            </div>
            <div class="flex flex-col text-center justify-center mb-3">
                <img class="m-auto rounded-full w-[200px] h-[200px] object-cover bg-white" src="./dist/assets/images/team1.png" alt="">
                <h6 class="font-[gadugi-bold] text-[32px] mt-3 text-theme1">Lorem Ipsum</h6>
            </div>
            <div class="flex flex-col text-center justify-center mb-3">
                <img class="m-auto rounded-full w-[200px] h-[200px] object-cover bg-white" src="./dist/assets/images/team1.png" alt="">
                <h6 class="font-[gadugi-bold] text-[32px] mt-3 text-theme1">Lorem Ipsum</h6>
            </div>
            <div class="flex flex-col text-center justify-center mb-3">
                <img class="m-auto rounded-full w-[200px] h-[200px] object-cover bg-white" src="./dist/assets/images/team1.png" alt="">
                <h6 class="font-[gadugi-bold] text-[32px] mt-3 text-theme1">Lorem Ipsum</h6>
            </div>
            <div class="flex flex-col text-center justify-center mb-3">
                <img class="m-auto rounded-full w-[200px] h-[200px] object-cover bg-white" src="./dist/assets/images/team1.png" alt="">
                <h6 class="font-[gadugi-bold] text-[32px] mt-3 text-theme1">Lorem Ipsum</h6>
            </div>
        </div>
    </div>
    </div>
    <!-- our team --> --}}

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

@include('footer')