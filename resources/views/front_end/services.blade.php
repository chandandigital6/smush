@extends('front_end.components.layout', ['seos' => $seos])
@section('content')
    {{-- slider section start here --}}
    <div class="swiffy-slider ">
        <ul class="slider-container">
            {{-- make copy of this li for dynamic slider --}}
            <li class="w-full  relative">
                <img src="{{ asset('asset/images/image2.jpg') }}"
                    class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                <div class="absolute top-0 left-0 w-full h-full bg-black/70 flex justify-center items-center px-4">
                    <div class="w-max h-max flex flex-col items-center gap-4">
                        <span class="uppercase text-[#EEB21C] text-[22px] font-bold">ANY KIND OF CAR YOU WILL GET</span>
                        <div class="lg:w-[1000px] md:w-[700px] sm:w-[500px] w-[350px] text-center">
                            <h1 class="text-white font-bold lg:text-[80px] md:text-[60px] sm:text-[40px] text-[30px]">
                                WHAT WE OFFER?</h1>
                        </div>
                        <div class="flex gap-4">
                            <a href="{{ route('services') }}"
                                class="lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#eeb21c] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#eeb21c] hover:bg-white hover:text-[#eeb21c]  transition ease-in duration-2000">
                                SERVICES
                            </a>
                            <a href=""
                                class="lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">
                                ENQUIRY
                            </a>
                        </div>
                    </div>
                </div>

            </li>
            {{-- slider copy ends here --}}


        </ul>

        {{--        <button type="button" class="slider-nav"></button> --}}
        {{--        <button type="button" class="slider-nav slider-nav-next"></button> --}}


    </div>
    {{-- slider section ends here --}}




    {{-- what we offer section start here --}}
    <div class="w-full  relative py-6 lg:pt-[250px] md:pt-[200px] sm:pt-[180px] pt-[100px]"
        style="background-image: url();">
        @include('front_end.components.carSection')



        <div class="w-full px-4 flex justify-center">
            @foreach ($serviceTitle as $title)
                <div class="lg:w-[90%] md:w-[90%] sm:w-[90%] w-full flex flex-col items-center gap-6 py-[5px]">
                    <h2 class="lg:text-[50px] md:text-[40px] sm:text-[35px] text-[30px] text-[#EEB21C] font-bold">

                        {{ $title->title }}
                    </h2>
                    <div class="max-w-[600px]">
                        <p class="text-black lg:leading-7 md:leading-2 lg:text-[16px] md:text-[16px] text-[16px] font-medium font-[montserrat] text-center"
                            style="word-spacing: 10px;">
                            {!! $title->msg !!}
                        </p>
                    </div>


                    @include('front_end.components.servicesSection')


                </div>
            @endforeach
        </div>
    </div>
    {{-- what we offer section ends here    --}}


    {{-- about section start here --}}
    <div class="w-full  relative py-10" style="background-image: url()">
        <div class="w-full px-4 flex justify-center">
            @foreach ($chooseUs as $choos)
                <div class="lg:w-[90%] md:w-[90%] sm:w-[90%] w-full rounded-[50px]"
                    style="background-image: url({{ asset('asset/images/Rectangle56.jpg') }});box-shadow: 0px 0px 10px 1px #25a8df">
                    <div class="w-full flex flex-col items-center gap-2 p-2 bg-[#25a8df]/90 rounded-[50px]">
                        <h2
                            class=" lg:text-[45px] md:text-[40px] text-center sm:text-[35px] text-[25px] text-white font-bold">
                            {{ $choos->title }}</h2>
                        <h2
                            class="uppercase lg:text-[45px] md:text-[40px] text-center sm:text-[35px] text-[25px] text-white font-bold">
                            {{ $choos->heading }}</h2>


                        <div class="w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-1 mt-6">
                            <div class="w-full flex justify-center items-center">
                                <img src="{{ asset('storage/' . $choos->image) }}" alt="">
                            </div>
                            <div class="flex flex-col gap-4">
                                <div class="flex gap-2">
                                    <ul class="flex flex-col gap-8 pl-8"
                                        style="list-style-image: url({{ asset('storage/' . $choos->f_image) }});">
                                        <li>
                                            <h2
                                                class="uppercase  lg:text-[30px] md:text-[25px]  sm:text-[20px] text-[20px] text-white font-bold">
                                                {{ $choos->f_title }}</h2>
                                            <p class="text-white lg:leading-7 md:leading-2 lg:text-[18px] md:text-[16px] text-[16px] font-normal font-[montserrat]"
                                                style="word-spacing: 3px;">
                                                {!! $choos->f_msg !!}

                                            </p>

                                        </li>
                                        <li>
                                            <h2
                                                class="uppercase lg:text-[30px] md:text-[25px]  sm:text-[20px] text-[20px] text-white font-bold">
                                                {{ $choos->f_1_title }}</h2>
                                            <p class="text-white lg:leading-7 md:leading-2 lg:text-[18px] md:text-[16px] text-[16px] font-normal font-[montserrat]"
                                                style="word-spacing: 3px;">
                                                {!! $choos->f_1_msg !!}
                                            </p>

                                        </li>
                                        <li>
                                            <h2
                                                class="uppercase lg:text-[30px] md:text-[25px]  sm:text-[20px] text-[20px] text-white font-bold">
                                                {{ $choos->f_2_title }}</h2>
                                            <p class="text-white lg:leading-7 md:leading-2 lg:text-[18px] md:text-[16px] text-[16px] font-normal font-[montserrat]"
                                                style="word-spacing: 3px;">
                                                {!! $choos->f_2_msg !!}
                                            </p>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            @endforeach
        </div>
        <div class="w-full px-4 flex justify-center">


        </div>
    </div>

    {{-- about section ends here    --}}


    {{-- our gallery section start here --}}
    <div class="w-full relative py-6 px-5">
        <div class="w-full flex justify-center">
            @foreach ($logos as $logo)
                <div class="w-full flex flex-col items-center gap-6 py-[5px]">
                    <h2 class="lg:text-[50px] md:text-[40px] sm:text-[35px] text-[30px] text-[#EEB21C] font-bold">
                        {{ $logo->title }}</h2>
                    <div class="max-w-[600px]">
                        <p class="text-black lg:leading-7 md:leading-2 lg:text-[16px] md:text-[16px] text-[16px] font-medium font-[montserrat] text-center"
                            style="word-spacing: 10px;">{{ $logo->msg }}</p>
                    </div>
                    <div class="swiffy-slider  slider-item-show3">
                        <ul class="slider-container">
                            @if (is_string($logo->image) && !empty($logo->image))
                                @php
                                    $imagePaths = explode(',', $logo->image);
                                @endphp
                                @foreach ($imagePaths as $imagePath)
                                    <li class="w-full relative">
                                        <img src="{{ asset('storage/' . $imagePath) }}" alt="{{ $logo->title }}"
                                            class="w-full lg:h-[550px] md:h-[450px] sm:h-[400px] h-[300px] ">
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

    {{-- our gallery section ends here    --}}


  {{-- our clients section start here --}}
  <div class="w-full relative py-6">
    <div class="w-full flex justify-center">
        <div class="w-full flex flex-col items-center gap-6 py-4 px-4"
            style="background-image: url({{ asset('asset/images/Rectangle43.jpg') }});background-repeat: no-repeat; background-size: cover">
            <h2 class="text-[24px] sm:text-[30px] md:text-[35px] lg:text-[40px] xl:text-[50px] text-white font-bold">
                WHAT OUR CLIENTS SAY
            </h2>
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

    <div class="w-full  relative py-6">
        <div class="w-full px-4 flex justify-center">
            <div class="lg:w-[80%] md:w-[80%] sm:w-[90%] w-full">
                <div class="w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-4 mt-6">
                    <div class="flex flex-col gap-2">
                        <div class="flex gap-4">
                            <ul class="flex flex-col gap-4 lg:pl-32 md:pl-32 pl-8"
                                style="list-style-image: url({{ asset('asset/images/Arrow.png') }});">
                                <li>
                                    <p class="text-black lg:leading-7 md:leading-2 lg:text-[24px] md:text-[13px] text-[12px] font-bold font-[montserrat]"
                                        style="word-spacing: 3px;">Flawless color match</p>
                                </li>
                                <li>
                                    <p class="text-black lg:leading-7 md:leading-2 lg:text-[24px] md:text-[13px] text-[12px] font-bold font-[montserrat]"
                                        style="word-spacing: 3px;">Insurance-safe
                                    </p>
                                </li>
                                <li>
                                    <p class="text-black lg:leading-7 md:leading-2 lg:text-[24px] md:text-[13px] text-[12px] font-bold font-[montserrat]"
                                        style="word-spacing: 3px;">Professionally certified technicians</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="w-full flex justify-center items-center">
                        <a href="{{ route('contact') }}"
                            class="lg:text-[20px] md:text-[18px] text-[14px] w-max text-white bg-[#EEB21C] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#EEB21C] hover:bg-white hover:text-[#EEB21C]  transition ease-in duration-2000">
                            GET FREE ESTIMATE
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
