@include('header')

<div class="page">
    <!-- banner section -->
    <div class="container">
        <div class="flex flex-col items-center py-5">
            <div class="w-full">
                <div class="w-3/4 m-auto">
                    <img src="{{ Voyager::image(setting('support.support_banner')) }}" alt="">
                </div>
            </div>
            <div class="w-full">
                <h1 class="text-[45px] md:text-[65px] text-center text-theme1 gadugi-bold mb-12">Support</h1>
                {!! Voyager::setting('support.support_title_content') !!}
            </div>
        </div>
    </div>
    <!-- banner section -->

    <!-- Contact Us -->
    <div class="bg-theme1 p-3 py-5 md:py-0 md:p-[64px]">
        <div class="container">
            <h2 class="w-full md:w-1/2 mb-3 md:mb-0 text-[42px] md:text-[72px] gadugi-bold text-white title-shadow">Ways to contact us</h2>
            <div class="py-8">
                <div class="flex flex-col md:flex-row items-center mb-4">
                    <div class="w-[180px] h-[180px] md-2 md:mr-3 md:md-0">
                        <img class="" src="./dist/assets/images/faq.png" alt="">
                    </div>
                    <div class="w-full text-white font-[open-sans] text-[34px]">Visit our <a href="{{ Voyager::setting('support.support_faq_link') }}" class="text-theme2">frequently asked questions ( FAQs)</a> for answers to common questions.</div>
                </div>
                <div class="flex flex-col md:flex-row items-center mb-4">
                    <div class="w-[180px] h-[180px] md-2 md:mr-3 md:md-0">
                        <img class="" src="./dist/assets/images/call.png" alt="">
                    </div>
                    <div class="w-full text-white font-[open-sans] text-[34px]">Call: India toll Free
                        <a href="tel:{{ Voyager::setting('support.support_call_number1') }}" class="text-theme2">{{ Voyager::setting('support.support_call_number1') }}</a>
                        <span class="text-theme2">/</span>
                        <a href="tel:{{ Voyager::setting('support.support_call_number2') }}" class="text-theme2">{{ Voyager::setting('support.support_call_number2') }}</a>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row items-center mb-4">
                    <div class="w-[180px] h-[180px] md-2 md:mr-3 md:md-0">
                        <img class="" src="./dist/assets/images/mail.png" alt="">
                    </div>
                    <div class="w-full text-white font-[open-sans] text-[34px]">Email:
                        <a href="mailto:{{ Voyager::setting('support.support_mail') }}" class="text-theme2">{{ Voyager::setting('support.support_mail') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Us -->
    <!-- bottom links -->
    <div class="bg-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <div class="text-white font-bold text-xl">
                <a href="#" class="w-[160px] md:w-[212px]">
                <img src="dist/assets/images/logo.svg" alt="">
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