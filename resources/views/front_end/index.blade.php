@extends('front_end.components.layout',['seos' => $seos])
@section('content')

    {{-- slider section start here --}}
    <div class="swiffy-slider ">
        <ul class="slider-container">
            @foreach($banners as $banner)
                <li class="w-full relative">
                    <img src="{{ asset('storage/'.$banner->image) }}"
                         class="w-full lg:h-[450px] md:h-[400px] sm:h-[400px] h-[400px] object-cover" alt="Mobile Smash Repair Services in Melbourne">
                    <div class="absolute top-0 left-0 w-full h-full bg-black/70 flex justify-center items-center px-4">
                        <div class="w-max h-max flex flex-col items-center gap-4">
                            <span class="uppercase text-[#EEB21C] text-[22px] font-bold">{{$banner->title}}</span>
                            <div class="lg:w-[1000px] md:w-[700px] sm:w-[500px] w-[350px] text-center">
                                <h1 class="text-white font-bold lg:text-[80px] md:text-[60px] sm:text-[40px] text-[30px]">
                                  {{$banner->sub_title}}
                                </h1>
                            </div>
                            <div class="flex gap-4">
                                <a href="{{ route('services') }}"
                                   class="lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#eeb21c] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#eeb21c] hover:bg-white hover:text-[#eeb21c]  transition ease-in duration-2000">
                                    SERVICES
                                </a>
                                <a href="https://mobilesmashrepair.com/smash-repair"
                                   class="lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">
                                    ENQUIRY
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>

{{--        <button type="button" class="slider-nav"></button>--}}
{{--        <button type="button" class="slider-nav slider-nav-next"></button>--}}
    </div>
    {{-- slider section ends here --}}



    {{--about section start here--}}
    <div class="w-full  relative lg:pt-[250px] md:pt-[200px] sm:pt-[180px] pt-[100px]"
         style="background-image: url()">
        @include('front_end.components.carSection')


        <section class="bg-gray-50 py-12 px-6">
            <div class="container mx-auto text-center">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-6">Welcome to MobileSmashRepair</h2>
                <p class="text-lg text-gray-600 mb-8">
                    Melbourne’s top choice for premium vehicle repair solutions. We specialize in a wide array of repair
                    services in Melbourne, ranging from minor cosmetic fixes to comprehensive smash repair in Melbourne.

                    Our on-site repair experts ensure you receive top-quality service at your convenience, eliminating the need
                    to visit a workshop.
                </p>
                <p class="text-lg text-gray-600">
                    We cater to trucks with specialized truck repair in Melbourne, as well as offering
                    headlight restoration in Melbourne to enhance your vehicle’s safety and aesthetics.
                    Trust us to deliver efficient, high-standard repairs wherever you are in Melbourne.
                </p>
            </div>
        </section>


        <div class="w-full px-4 flex justify-center">
            @foreach($about as $aboutUs)


                <div
                    class="lg:w-[90%] md:w-[90%] sm:w-[90%] w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-4 py-[5px]">
                    <div class="w-full flex flex-col gap-6 p-2">
                        <h3 class="uppercase font-bold lg:text-[30px] md:text-[30px] text-[25px] text-left">{{$aboutUs->title}} <span
                                class="text-[#15AEF1]">{{$aboutUs->heading}}</span></h3>
                        <div class="w-full  justify-center items-center lg:hidden md:hidden flex">
                            <img src="{{asset('storage/'.$aboutUs->image)}}" alt="About us">
                        </div>

                        <p class="text-black lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-medium font-[montserrat]"
                            style="font-family: montserrat!important;">
                            {!! $aboutUs->description !!}
                        </p>



                                                <a href="{{route('about')}}"
                                                   class="lg:text-[25px] md:text-[20px] text-[14px] w-max text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">
                                                    LEARN MORE
                                                </a>
                    </div>
                    <div class="w-full justify-center items-center lg:flex md:flex hidden">
                        <img src="{{asset('storage/'.$aboutUs->image)}}" alt="Mobile Smash Repair Services in Melbourne">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{--about section ends here    --}}


    {{--what we offer section start here--}}
    <div class="w-full  relative py-6 rounded-t-[50px]"
         style="background-image: url();box-shadow: 0px 0px 20px 1px #15aef173">
        <div class="w-full px-4 flex justify-center">
            @foreach($serviceTitle as $title)


            <div class="lg:w-[90%] md:w-[90%] sm:w-[90%] w-full flex flex-col items-center gap-6 py-[5px]">
                <h3 class="lg:text-[50px] md:text-[40px] sm:text-[35px] text-[30px] text-[#EEB21C] font-bold">

                {{$title->title}}
                </h3>
                <div class="max-w-[600px]">
                    <p class="text-black lg:leading-7 md:leading-2 lg:text-[16px] md:text-[16px] text-[16px] font-medium font-[montserrat] text-center"
                       >
                       {!! $title->msg !!}
                    </p>
                </div>


{{--               @include('front_end.components.servicesSection')--}}

                <div class="w-full grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-4">
                    @php
                        $services=\App\Models\Service::all();

                    @endphp
                    @foreach($services->take(9) as $service)
                        @php
                            // Split the description into an array of words
                            $words = explode(' ', strip_tags($service->description)); // Use strip_tags to remove any HTML tags

                            // Get the first 20 words
                            $first20Words = array_slice($words, 0, 20);

                            // Join the first 20 words back into a string
                            $shortDescription = implode(' ', $first20Words);
                        @endphp

                        <div class="w-full bg-white rounded-3xl px-[20px] py-[30px] flex flex-col items-center"
                             style="box-shadow: 0px 0px 10px 1px #eeb21ca8;">
                            <img src="{{asset('storage/'.$service->image)}}" alt="Mobile Smash Repair Services in Melbourne">
                            <h3 class="uppercase lg:text-[35px] md:text-[30px] text-center sm:text-[25px] text-[20px] text-[#15AEF1] font-bold">
                                {{$service->heading}}

                            </h3>
                            <p class="text-black lg:leading-7 md:leading-2 lg:text-[16px] md:text-[16px] text-[16px] font-medium font-[montserrat] text-center"
                               >
                                {!! $shortDescription !!} ...
                            </p>

                            <a href="{{route('service.show', ['title'=>$service->title])}}"
                               class="mt-6 lg:text-[25px] md:text-[20px] text-[14px] w-max text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">
                                LEARN MORE
                            </a>
                        </div>

                    @endforeach

                    {{--    <div class="w-full lg:col-span-3 md:col-span-2 sm:col-span-2 col-span-1 flex justify-center ">--}}
                    {{--        <a href="{{route('services')}}"--}}
                    {{--           class="mt-6 lg:text-[25px] md:text-[20px] text-[14px] w-max text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">--}}
                    {{--            Show More--}}
                    {{--        </a>--}}
                    {{--    </div>--}}
                </div>
            </div>
            @endforeach

        </div>
        <div class="w-full lg:col-span-3 md:col-span-2 sm:col-span-2 col-span-2 flex justify-center ">
            <a href="{{route('services')}}"
               class="mt-6 lg:text-[30px] md:text-[25px] text-[25px] w-max text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">
                Show More
            </a>
        </div>
    </div>
    {{--what we offer section ends here    --}}


    {{--appointment section start here    --}}

    <div class="w-full  relative  bg-no-repeat bg-center bg-cover "
         style="background-image: url({{asset('asset/images/gettech.jpg')}});">
        <div class="w-full px-4 flex justify-center py-6 bg-black/70">
            <div class="lg:w-[90%] md:w-[90%] sm:w-[90%] w-full flex flex-col items-center gap-6 py-[5px]">

                <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 grid-cols-1 gap-4 items-center">
                    @foreach($plan->take(1) as $plans)


                                        <div class="bg-[#eeb21c] rounded-xl px-[20px] py-[30px] flex flex-col items-center h-max">
                                            <img src="{{asset('storage/'.$plans->image)}}" alt="GET A TECHNICIAN">
                                            <h3 class="uppercase lg:text-[30px] md:text-[25px] text-center sm:text-[20px] text-[15px] text-white font-bold">
                                                {{$plans->title}}</h3>
                                            <p class="text-white lg:leading-7 md:leading-2 lg:text-[16px] md:text-[16px] text-[16px] font-medium font-[montserrat] text-center"
                                               >
                                                {!! $plans->msg !!}
                                            </p>

                                            <a href="tel:+61449599000
"
                                               class="mt-6 lg:text-[20px] md:text-[17px] text-[20px] w-max text-black bg-white px-4  py-1 font-bold rounded-md border-[1px] border-white hover:bg-white hover:text-black  transition ease-in duration-2000">
                                                Call Now
                                            </a>
                                        </div>
                                        @endforeach
                        @foreach($plan->skip(1)->take(1) as $plans)
                    <div class="bg-[#15aef1] rounded-xl px-[20px] lg:py-[60px] md:py-[60px] py-[30px] flex flex-col items-center h-max ">
                        <img src="{{asset('storage/'.$plans->image)}}" alt="Mobile Smash Repair Services in Melbourne">

                        <h3 class="uppercase lg:text-[30px] md:text-[25px] text-center sm:text-[20px] text-[15px] text-white font-bold">
                            {{$plans->title}}</h3>
                        <p class="text-white lg:leading-7 md:leading-2 lg:text-[16px] md:text-[16px] text-[16px] font-medium font-[montserrat] text-center"
                           >
                            {!! $plans->msg !!}
                        </p>

                        <a href="https://mobilesmashrepair.com/smash-repair"
                           class="mt-6 lg:text-[20px] md:text-[17px] text-[20px] w-max text-black bg-white px-4  py-1 font-bold rounded-md border-[1px] border-white hover:bg-white hover:text-black  transition ease-in duration-2000">
                          Book Now
                        </a>
                    </div>
                        @endforeach

                        @foreach($plan->skip(2)->take(1) as $plans)


                            <div class="bg-[#eeb21c] rounded-xl px-[20px] py-[30px] flex flex-col items-center h-max">
                                <img src="{{asset('storage/'.$plans->image)}}" alt="Get A Quote">
                                <h3 class="uppercase lg:text-[30px] md:text-[25px] text-center sm:text-[20px] text-[15px] text-white font-bold">
                                    {{$plans->title}}</h3>
                                <p class="text-white lg:leading-7 md:leading-2 lg:text-[16px] md:text-[16px] text-[16px] font-medium font-[montserrat] text-center"
                                   >
                                    {!! $plans->msg !!}
                                </p>

                                <a href="tel:0449599000"
                                   class="mt-6 lg:text-[20px] md:text-[17px] text-[20px] w-max text-black bg-white px-4  py-1 font-bold rounded-md border-[1px] border-white hover:bg-white hover:text-black  transition ease-in duration-2000">
                                    Call Now
                                </a>
                            </div>
                        @endforeach
            </div>
        </div>
    </div>
    </div>
    {{--appointment section ends here    --}}

    <section class="bg-white py-12 px-6">
        <div class="container mx-auto max-w-4xl">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-6 text-center">
                Your Go-To Experts for On-Site Repair Services in Melbourne
            </h2>
            <p class="text-lg text-gray-700 mb-8 text-center">
                Looking for reliable repair services in Melbourne? We are your one-stop solution for a wide range of
                vehicle repairs, providing top-notch services that are both efficient and convenient. Here’s why we’re the
                top choice for all your vehicle repair needs:
            </p>

            <ul class="list-disc list-outside pl-6 space-y-4 text-gray-800 text-base">
                <li>
                    <strong>Comprehensive Smash Repair in Melbourne:</strong> Our skilled technicians specialize in smash
                    repair in Melbourne, restoring your vehicle after an accident or collision with precision and care. We
                    ensure your car is returned to its original condition, both in appearance and performance.
                </li>
                <li>
                    <strong>On-Site Repair Experts:</strong> We offer on-site repair services that come to you, saving you
                    the hassle of taking your vehicle to a shop. Whether you need minor repairs or major work, our on-site
                    repair experts will get the job done quickly and professionally.
                </li>
                <li>
                    <strong>Truck Repair Services in Melbourne:</strong> In need of reliable truck repair in Melbourne? Our
                    team is equipped to handle truck repairs of all sizes, ensuring your vehicle is back on the road with
                    minimal downtime.
                </li>
                <li>
                    <strong>Professional Headlight Restoration:</strong> Clear headlights are essential for safe driving.
                    Our headlight restoration in Melbourne service improves both the look and functionality of your
                    vehicle, ensuring maximum visibility on the road.
                </li>
                <li>
                    <strong>Melbourne-Wide Service:</strong> Wherever you are in Melbourne, we provide fast, reliable
                    on-site repair in Melbourne and surrounding areas, giving you peace of mind and the convenience of
                    professional repair services right at your location.
                </li>
            </ul>
        </div>
    </section>




    {{--our gallery section start here--}}
    <div class="w-full relative py-6 px-5">
        <div class="w-full flex justify-center">
            @foreach($logos as $logo)
                <div class="w-full flex flex-col items-center gap-6 py-[5px]">
                    <h3 class="lg:text-[50px] md:text-[40px] sm:text-[35px] text-[30px] text-[#EEB21C] font-bold">{{ $logo->title }}</h3>
                    <div class="max-w-[600px]">
                        <p class="text-black lg:leading-7 md:leading-2 lg:text-[16px] md:text-[16px] text-[16px] font-medium font-[montserrat] text-center"
                           >{{ $logo->msg }}</p>
                    </div>
                    <div class="swiffy-slider  slider-item-show3">
                        <ul class="slider-container">
                            @if (is_string($logo->image) && !empty($logo->image))
                                @php
                                    $imagePaths = explode(',', $logo->image);
                                @endphp
                                @foreach($imagePaths as $imagePath)
                                    <li class="w-full relative">
                                        <img src="{{ asset('storage/'.$imagePath) }}" alt="{{ $logo->title }}" class="w-full lg:h-[550px] md:h-[450px] sm:h-[400px] h-[300px] " >
                                    </li>
                                @endforeach

                            @endif
                        </ul>
                        <button type="button" class="slider-nav"></button>
                        <button type="button" class="slider-nav slider-nav-next"></button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{--our gallery section ends here    --}}


    {{-- our clients section start here --}}
    <div class="w-full relative py-6">
        <div class="w-full flex justify-center">
            <div class="w-full flex flex-col items-center gap-6 py-4 px-4"
                style="background-image: url({{ asset('asset/images/Rectangle43.jpg') }});background-repeat: no-repeat; background-size: cover">
                <h3 class="text-[24px] sm:text-[30px] md:text-[35px] lg:text-[40px] xl:text-[50px] text-white font-bold">
                    WHAT OUR CLIENTS SAY
                </h3>
                <div class="swiffy-slider slider-item-show3 slider-nav-dark slider-nav-autoplay mt-6 relative">
                    <ul class="slider-container">
                        {{-- make copy of this li for dynamic slider --}}
                        @foreach ($testimonials as $testimonial)
                            <li class="w-full relative">
                                <div class="bg-white flex flex-col p-4">
                                    <i class="fa-solid fa-quote-left text-[#eeb21c] text-[30px]"></i>
                                    <p class="text-black text-[14px] font-normal font-[montserrat] mt-2">
                                        {{ $testimonial->msg }}
                                    </p>
                                    <h6 class="text-black font-bold font-[montserrat] mt-2">{{ $testimonial->name }}</h6>
                                    <div>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                    </div>
                                    <div class="w-full h-4 mt-6 mb-4 bg-[#eeb21c]"></div>
                                </div>
                            </li>
                            {{-- slider copy ends here --}}
                        @endforeach
                    </ul>
                    <!-- Slider Navigation Buttons -->
                    <button type="button"
                        class="slider-nav flex items-center justify-center w-12 h-12 bg-[#eeb21c] text-white rounded-full shadow-lg border-2 border-white absolute top-1/2 transform -translate-y-1/2 left-4 hover:bg-[#d19c1a] transition duration-300 ease-in-out focus:outline-none z-10">
                        <i class="fa fa-arrow-left text-2xl"></i>
                    </button>
                    <button type="button"
                        class="slider-nav slider-nav-next flex items-center justify-center w-12 h-12 bg-[#eeb21c] text-white rounded-full shadow-lg border-2 border-white absolute top-1/2 transform -translate-y-1/2 right-4 hover:bg-[#d19c1a] transition duration-300 ease-in-out focus:outline-none z-10">
                        <i class="fa fa-arrow-right text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- our clients section ends here --}}

    <div class="flex flex-col items-center justify-center p-6">
        <div class="bg-[#ecedee] rounded-lg p-6 sm:p-12 w-full max-w-4xl">
            <h3 class="text-center text-2xl sm:text-4xl text-black font-bold mb-6 w-full">FAQs</h3>

            <div class="space-y-4">
                <!-- FAQ 1 -->
                <div class="bg-white rounded-lg shadow-md">
                    <button
                        class="w-full text-left flex justify-between items-center px-4 py-3 text-gray-800 font-medium hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        onclick="toggleFaq('faq-1')">
                        <span>How do your on-site repair services work?</span>
                        <svg id="icon-faq-1" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform transform rotate-0"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-1" class="hidden px-4 py-3 text-gray-700">
                        Our on-site repair experts bring everything needed to fix your vehicle directly to your location.
                        Whether you’re at home, work, or elsewhere, we provide the convenience of professional repairs
                        without the hassle of visiting a workshop.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white rounded-lg shadow-md">
                    <button
                        class="w-full text-left flex justify-between items-center px-4 py-3 text-gray-800 font-medium hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        onclick="toggleFaq('faq-2')">
                        <span>Do you offer smash repair services for trucks?</span>
                        <svg id="icon-faq-2" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform transform rotate-0"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-2" class="hidden px-4 py-3 text-gray-700">
                        Yes, we provide comprehensive smash repair services for trucks in Melbourne. Whether it's minor
                        or major damage, our team is equipped to handle truck repairs, ensuring minimal downtime and a
                        quick return to the road.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white rounded-lg shadow-md">
                    <button
                        class="w-full text-left flex justify-between items-center px-4 py-3 text-gray-800 font-medium hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        onclick="toggleFaq('faq-3')">
                        <span>Can you repair scratches and dents on-site?</span>
                        <svg id="icon-faq-3" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform transform rotate-0"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-3" class="hidden px-4 py-3 text-gray-700">
                        Absolutely! We offer on-site repair in Melbourne for scratches, dents, and other types of damage.
                        Our mobile team uses advanced tools and techniques to restore your vehicle’s exterior without
                        you needing to bring it to a repair shop.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white rounded-lg shadow-md">
                    <button
                        class="w-full text-left flex justify-between items-center px-4 py-3 text-gray-800 font-medium hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        onclick="toggleFaq('faq-4')">
                        <span>Do you serve all of Melbourne and surrounding suburbs?</span>
                        <svg id="icon-faq-4" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform transform rotate-0"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-4" class="hidden px-4 py-3 text-gray-700">
                        Yes, we provide on-site repair services across all of Melbourne and the surrounding areas,
                        including Essendon. Wherever you are, our mobile repair team can come to you to provide fast
                        and efficient repairs.
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="bg-white rounded-lg shadow-md">
                    <button
                        class="w-full text-left flex justify-between items-center px-4 py-3 text-gray-800 font-medium hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        onclick="toggleFaq('faq-5')">
                        <span>What kind of guarantee do you offer on your repairs?</span>
                        <svg id="icon-faq-5" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform transform rotate-0"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-5" class="hidden px-4 py-3 text-gray-700">
                        We stand behind the quality of our work. All our repairs come with a satisfaction guarantee,
                        ensuring that you receive professional, high-quality results that meet your expectations.
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    function toggleFaq(id) {
    const faq = document.getElementById(id);
    const icon = document.getElementById(`icon-${id}`);
    if (faq.classList.contains('hidden')) {
        faq.classList.remove('hidden');
        icon.classList.add('rotate-180');
    } else {
        faq.classList.add('hidden');
        icon.classList.remove('rotate-180');
    }
}

</script>

    {{--blogs section start here--}}
    <div class="w-full  relative py-6">
        <div class="w-full  flex justify-center">
            <div class=" lg:w-[90%] md:w-[90%] sm:w-[90%] w-full w-full flex flex-col items-center py-[5px] px-4">
                <h3 class="lg:text-[50px] md:text-[40px] sm:text-[35px] text-[30px] text-[#EEB21C] font-bold">POSTS FROM THE BLOG</h3>
                <div class="max-w-[600px]">
                    <p class="text-black lg:text-[16px] md:text-[16px] text-[16px] font-medium font-[montserrat] text-center"
                       >See our updates, news and new coming features</p>
                </div>
                <div class="swiffy-slider  slider-item-show3 mt-6">
                    <ul class="slider-container">
                        {{-- make copy of this li for dynamic slider --}}
                        @foreach($blog as $blogs)


                        <li class="w-full  relative">
                            <div class="relative">
                                <img src="{{asset('storage/'.$blogs->image)}}" class="w-full h-[400px] opacity-80 hover:opacity-100 transition ease-in duration-2000" alt="Mobile Smash Repair Services in Melbourne">
                            </div>
                            <div class="relative h-16 bg-white">
                                <div class="absolute -top-[30px] left-0 flex justify-center w-full">
                                    <a href="{{ route('blog-details', $blogs->url) }}"
                                        class="w-[90%] flex justify-center lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-sm border-[1px] border-[#15aef1] transition ease-in duration-2000">
                                        {{ $blogs->title }}
                                     </a>


                                </div>
                            </div>

                        </li>
                        {{--slider copy ends here--}}



                        @endforeach
                    </ul>

                    <button type="button" class="slider-nav"></button>
                    <button type="button" class="slider-nav slider-nav-next"></button>


                </div>

                <div class="max-w-[600px] mt-6">
                    <a href="{{route('all-blogs')}}"
                       class="lg:text-[20px] md:text-[18px] text-[14px] w-max text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">
                        SHOW MORE
                    </a>
                </div>


            </div>
        </div>
    </div>
    {{--blogs section ends here    --}}






@endsection
