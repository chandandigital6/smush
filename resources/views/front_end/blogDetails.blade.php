@extends('front_end.components.layout',['seos' => $seos])
@section('content')

    {{--slider section start here--}}
    <div class="swiffy-slider ">
        <ul class="slider-container">
            {{-- make copy of this li for dynamic slider --}}
            <li class="w-full  relative">
                <img src="{{asset('storage/'.$blogs->image)}}"
                     class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover" alt="Understanding Common Car Issues in Australia">
                <div class="absolute top-0 left-0 w-full h-full bg-black/70 flex justify-center items-center px-4">
                    <div class="w-max h-max flex flex-col items-center gap-4">
                        <span class="uppercase text-[#EEB21C] text-[22px] font-bold">ANY KIND OF CAR YOU WILL GET</span>
                        <div class="lg:w-[1000px] md:w-[700px] sm:w-[500px] w-[350px] text-center">
                            <h1 class="uppercase text-white font-bold lg:text-[80px] md:text-[60px] sm:text-[40px] text-[30px]">
                               {{$blogs->title}}</h1>
                        </div>
                        <div class="flex gap-4">
                            <a href="{{route('services')}}"
                               class="lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#eeb21c] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#eeb21c] hover:bg-white hover:text-[#eeb21c]  transition ease-in duration-2000">
                                SERVICES
                            </a>
                            <a href="{{route('contact')}}"
                               class="lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">
                                ENQUIRY
                            </a>
                        </div>
                    </div>
                </div>

            </li>

        </ul>

{{--        <button type="button" class="slider-nav"></button>--}}
{{--        <button type="button" class="slider-nav slider-nav-next"></button>--}}


    </div>
    {{--slider section ends here--}}


    {{--about section start here--}}
    <div class="w-full  relative lg:pt-[250px] md:pt-[200px] sm:pt-[180px] pt-[100px]"
         style="background-image: url({{asset('asset/images/bac.png')}})">
        @include('front_end.components.carSection')


        <div class="w-full px-4 flex justify-center">
            <div class="lg:w-[90%] md:w-[90%] sm:w-[90%] w-full grid grid-cols-1 gap-4 py-5">
                <div class="w-full flex justify-center items-center">
                    <img src="{{ asset('storage/'.$blogs->image) }}"  alt="Understanding Common Car Issues in Australia" class="rounded-lg shadow-lg" >
                </div>
                <div class="w-full flex flex-col gap-6 p-4 bg-white rounded-lg shadow-md">
                    <h2 class="uppercase font-bold text-[#15AEF1] lg:text-5xl md:text-4xl text-3xl">
                        {{ $blogs->title }}
                    </h2>
                    <p class="text-gray-800 lg:leading-8 md:leading-7 lg:text-lg md:text-base text-sm font-medium font-montserrat" style="word-spacing: 2px;">
                        {!! $blogs->description !!}
                    </p>
                    <div class="flex flex-col gap-2">
                        <h3 class="text-lg font-semibold text-gray-600">Categories: {{ $blogs->categories }}</h3>
                        <h3 class="text-lg font-semibold text-gray-600">Author: {{ $blogs->author_name }}</h3>
                    </div>
                </div>
            </div>
        </div>

    {{--about section ends here    --}}












@endsection
