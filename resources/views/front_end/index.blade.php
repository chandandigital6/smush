@extends('front_end.components.layout',['seos' => $seos])
@section('content')

    {{-- slider section start here --}}
    <div class="swiffy-slider ">
        <ul class="slider-container">
            @foreach($banners as $banner)
                <li class="w-full relative">
                    <img src="{{ asset('storage/'.$banner->image) }}"
                         class="w-full lg:h-[450px] md:h-[400px] sm:h-[400px] h-[400px] object-cover">
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



        <div class="w-full px-4 flex justify-center">
            @foreach($about as $aboutUs)


                <div
                    class="lg:w-[90%] md:w-[90%] sm:w-[90%] w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-4 py-[5px]">
                    <div class="w-full flex flex-col gap-6 p-2">
                        <h2 class="uppercase font-bold lg:text-[30px] md:text-[30px] text-[25px] text-left">{{$aboutUs->title}} <span
                                class="text-[#15AEF1]">{{$aboutUs->heading}}</span></h2>
                        <div class="w-full  justify-center items-center lg:hidden md:hidden flex">
                            <img src="{{asset('storage/'.$aboutUs->image)}}" alt="">
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
                        <img src="{{asset('storage/'.$aboutUs->image)}}" alt="">
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
                <h2 class="lg:text-[50px] md:text-[40px] sm:text-[35px] text-[30px] text-[#EEB21C] font-bold">

                {{$title->title}}
                </h2>
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
                            <img src="{{asset('storage/'.$service->image)}}" alt="">
                            <h2 class="uppercase lg:text-[35px] md:text-[30px] text-center sm:text-[25px] text-[20px] text-[#15AEF1] font-bold">
                                {{$service->heading}}

                            </h2>
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
                                            <img src="{{asset('storage/'.$plans->image)}}" alt="">
                                            <h2 class="uppercase lg:text-[30px] md:text-[25px] text-center sm:text-[20px] text-[15px] text-white font-bold">
                                                {{$plans->title}}</h2>
                                            <p class="text-white lg:leading-7 md:leading-2 lg:text-[16px] md:text-[16px] text-[16px] font-medium font-[montserrat] text-center"
                                               >
                                                {!! $plans->msg !!}
                                            </p>

                                            <a href="tel:0449599000
"
                                               class="mt-6 lg:text-[20px] md:text-[17px] text-[20px] w-max text-black bg-white px-4  py-1 font-bold rounded-md border-[1px] border-white hover:bg-white hover:text-black  transition ease-in duration-2000">
                                                Call Now
                                            </a>
                                        </div>
                                        @endforeach
                        @foreach($plan->skip(1)->take(1) as $plans)
                    <div class="bg-[#15aef1] rounded-xl px-[20px] lg:py-[60px] md:py-[60px] py-[30px] flex flex-col items-center h-max ">
                        <img src="{{asset('storage/'.$plans->image)}}" alt="">

                        <h2 class="uppercase lg:text-[30px] md:text-[25px] text-center sm:text-[20px] text-[15px] text-white font-bold">
                            {{$plans->title}}</h2>
                        <p class="text-white lg:leading-7 md:leading-2 lg:text-[16px] md:text-[16px] text-[16px] font-medium font-[montserrat] text-center"
                           >
                            {!! $plans->msg !!}
                        </p>

                        <a href="https://mobilesmashrepair.com/smash_repair"
                           class="mt-6 lg:text-[20px] md:text-[17px] text-[20px] w-max text-black bg-white px-4  py-1 font-bold rounded-md border-[1px] border-white hover:bg-white hover:text-black  transition ease-in duration-2000">
                          Book Now
                        </a>
                    </div>
                        @endforeach

                        @foreach($plan->skip(2)->take(1) as $plans)


                            <div class="bg-[#eeb21c] rounded-xl px-[20px] py-[30px] flex flex-col items-center h-max">
                                <img src="{{asset('storage/'.$plans->image)}}" alt="">
                                <h2 class="uppercase lg:text-[30px] md:text-[25px] text-center sm:text-[20px] text-[15px] text-white font-bold">
                                    {{$plans->title}}</h2>
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


    {{--our gallery section start here--}}
    <div class="w-full relative py-6 px-5">
        <div class="w-full flex justify-center">
            @foreach($logos as $logo)
                <div class="w-full flex flex-col items-center gap-6 py-[5px]">
                    <h2 class="lg:text-[50px] md:text-[40px] sm:text-[35px] text-[30px] text-[#EEB21C] font-bold">{{ $logo->title }}</h2>
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
                                        <img src="{{ asset('storage/'.$imagePath) }}" alt="{{ $logo->title }}" class="w-full lg:h-[550px] md:h-[450px] sm:h-[400px] h-[300px] ">
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


    {{--blogs section start here--}}
    <div class="w-full  relative py-6">
        <div class="w-full  flex justify-center">
            <div class=" lg:w-[90%] md:w-[90%] sm:w-[90%] w-full w-full flex flex-col items-center py-[5px] px-4">
                <h2 class="lg:text-[50px] md:text-[40px] sm:text-[35px] text-[30px] text-[#EEB21C] font-bold">POSTS FROM THE BLOG</h2>
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
                                <img src="{{asset('storage/'.$blogs->image)}}" class="w-full h-[400px] opacity-80 hover:opacity-100 transition ease-in duration-2000">
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
