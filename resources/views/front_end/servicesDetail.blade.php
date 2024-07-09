@extends('front_end.components.layout',['seos'=>$seos])
@section('content')

    {{--slider section start here--}}
    <div class="swiffy-slider" id="top-inquiry-form" style="width: 100%;">
        <ul class="slider-container">
            <li class="w-full relative">
                <!-- Image height remains unchanged -->
                <img src="{{ asset('asset/images/image2.jpg') }}" class="w-full lg:h-[600px] md:h-[550px] sm:h-[500px] h-[400px] object-cover">
                <div class="absolute top-0 left-0 w-full h-full bg-black/70 flex justify-center items-center px-4">
                    <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between gap-6 px-4">
                        <div class="w-full lg:w-1/2 flex flex-col items-center lg:items-start text-center lg:text-left">
                            <div class="flex flex-col gap-4">

                                <span class="uppercase text-white lg:text-[40px] text-[20px] font-bold">ANY KIND OF CAR YOU WILL GET</span>
                                <div class="w-full max-w-lg">
                                    <p class="uppercase text-white font-bold text-[24px] sm:text-[36px] md:text-[50px] lg:text-[70px] text-[4vw]">
                                        {{ $service->heading }}
                                    </p>
                                </div>
                                <div class="flex gap-4 justify-center lg:justify-start">
                                    <a href="{{ route('services') }}" class="text-[14px] sm:text-[16px] md:text-[18px] lg:text-[36px] text-white bg-[#eeb21c] px-4 py-1 font-bold rounded-md border-[1px] border-[#eeb21c] hover:bg-white hover:text-[#eeb21c] transition ease-in duration-200"> <!-- Reduced padding and text size -->
                                        SERVICES
                                    </a>
                                    <a href="#top-inquiry-form" class="text-[14px] sm:text-[16px] md:text-[18px] lg:text-[36px] text-white bg-[#15aef1] px-4 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1] transition ease-in duration-200"> <!-- Reduced padding and text size -->
                                        ENQUIRY
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2 mt-4 lg:mt-0">
                            <div class="flex flex-col items-center">
                                <form action="{{ route('appointment.store') }}" method="post" class="mt-2 space-y-3 bg-black/50 rounded-md px-3 py-2" enctype="multipart/form-data"> <!-- Reduced padding -->
                                    <span class="uppercase text-[#ffffff] text-[18px] lg:text-[26px] text-center font-bold">MAKE YOUR INQUIRY NOW</span> <!-- Reduced text size -->
                                    <br>
                                    <span class="uppercase text-[#EEB21C] text-[14px] lg:text-[16px] font-bold">10% off on your first repair + Free Touch ups included</span> <!-- Reduced text size -->
                                    @csrf

                                    <div class="flex flex-col lg:flex-row gap-2 w-full">
                                        <div class="flex flex-col gap-1 w-full lg:w-1/2">
                                            <label for="name" class="text-[#ffffff] text-sm font-normal">Name</label> <!-- Reduced text size -->
                                            <input type="text" name="name" id="name" placeholder="Your full name" class="text-gray-600 bg-[#ffffff] border-[1px] border-[#ffffff]/70 px-2 py-1 focus:outline-none focus:ring-0 focus:border-[#eeb21c] rounded-md"> <!-- Reduced padding -->
                                        </div>
                                        <div class="flex flex-col gap-1 w-full lg:w-1/2">
                                            <label for="email" class="text-[#ffffff] text-sm font-normal">Email</label> <!-- Reduced text size -->
                                            <input type="email" name="email" id="email" placeholder="Your Email" class="text-gray-600 bg-[#ffffff] border-[1px] border-[#ffffff]/70 px-2 py-1 focus:outline-none focus:ring-0 focus:border-[#ffffff] rounded-md"> <!-- Reduced padding -->
                                        </div>
                                    </div>
                                    <div class="flex flex-col lg:flex-row gap-2 w-full"> <!-- Reduced gap -->
                                        <div class="flex flex-col gap-1 w-full lg:w-1/2"> <!-- Reduced gap -->
                                            <label for="number" class="text-[#ffffff] text-sm font-normal">Mobile Number</label> <!-- Reduced text size -->
                                            <input type="text" name="number" id="number" placeholder="Your number" class="text-gray-600 bg-[#ffffff] border-[1px] border-[#ffffff]/70 px-2 py-1 focus:outline-none focus:ring-0 focus:border-[#ffffff] rounded-md"> <!-- Reduced padding -->
                                        </div>
                                        <div class="flex flex-col gap-1 w-full lg:w-1/2"> <!-- Reduced gap -->
                                            <label for="car_model" class="text-[#ffffff] text-sm font-normal">Car Model</label> <!-- Reduced text size -->
                                            <input type="text" name="car_model" id="car_model" placeholder="Your car model" class="text-gray-600 bg-[#ffffff] border-[1px] border-[#ffffff]/70 px-2 py-1 focus:outline-none focus:ring-0 focus:border-[#ffffff] rounded-md"> <!-- Reduced padding -->
                                        </div>
                                    </div>
                                    <div class="w-full flex flex-col gap-1"> <!-- Reduced gap -->
                                        <label for="car_images" class="text-[#ffffff] text-sm font-normal">Damage Image</label> <!-- Reduced text size -->
                                        <input type="file" name="car_image[]" id="car_images" class="text-gray-600 bg-[#ffffff] border-[1px] border-[#ffffff]/70 px-2 py-1 focus:outline-none focus:ring-0 focus:border-[#ffffff] rounded-md" multiple accept="image/*"> <!-- Reduced padding -->
                                        <div id="image-preview" class="mt-1 grid grid-cols-2 gap-1"></div> <!-- Reduced gap -->
                                    </div>
                                    <div class="w-full flex flex-col gap-1"> <!-- Reduced gap -->
                                        <label for="msg" class="text-[#ffffff] text-sm font-normal">Message</label> <!-- Reduced text size -->
                                        <textarea name="msg" id="msg" placeholder="Your message" rows="2" class="text-gray-600 bg-[#ffffff] border-[1px] border-[#ffffff]/70 px-2 py-1 focus:outline-none focus:ring-0 focus:border-[#ffffff] rounded-md"></textarea> <!-- Reduced padding -->
                                    </div>
                                    <div class="w-full flex flex-col gap-1"> <!-- Reduced gap -->
                                        <button type="submit" class="text-[14px] sm:text-[16px] md:text-[18px] lg:text-[18px] w-max text-white bg-[#eeb21c] px-4 py-1 font-bold rounded-md border-[1px] border-[#ffffff] hover:bg-white hover:text-[#eeb21c] transition ease-in duration-200"> <!-- Reduced text size and padding -->
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    {{--slider section end here--}}






    {{--about section start here--}}
    <div class="w-full  relative lg:pt-[250px] md:pt-[200px] sm:pt-[180px] pt-[100px]"
         style="background-image: url()">

        @include('front_end.components.carSection')



        <div class="w-full flex justify-center">
            <div
                class="lg:w-[90%] md:w-[90%] sm:w-[90%] w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-4 py-[5px]">
                <div class="w-full flex flex-col gap-6 p-2">
                    <h2 class="uppercase font-bold lg:text-[40px] md:text-[30px] text-[25px]"> <span
                            class="text-[#15AEF1]">{{$service->heading}}</span></h2>
                    <p class="text-black lg:leading-7 md:leading-2 lg:text-[20px] md:text-[18px] text-[16px] font-medium font-[montserrat]">

                        {!! $service->description !!}

                    </p>



                    {{--                    <a href="{{route('contact')}}"--}}
                    {{--                       class="lg:text-[25px] md:text-[20px] text-[14px] w-max text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">--}}
                    {{--                        LEARN MORE--}}
                    {{--                    </a>--}}
                </div>
                <div class="w-full flex justify-center items-center">
                    <img src="{{asset('storage/'.$service->service_image)}}" alt="">
                </div>
            </div>
        </div>
    </div>
    {{--about section ends here    --}}


    {{--stats section start here--}}
    <div class="w-full  relative  bg-no-repeat bg-center bg-cover"
         style="background-image: url({{asset('asset/images/Rectangle79.png')}})">
        <div class="w-full flex justify-center bg-[#eeb21ce8] p-10">
            <div class="lg:w-[90%] md:w-[90%] sm:w-[90%] w-full flex flex-col items-center gap-4 pt-[5px] px-4 py-2">
                <div class="w-full flex flex-col items-center px-2">
                    <h2 class="uppercase lg:text-[52px] md:text-[30px] text-center sm:text-[25px] text-[20px] text-black font-bold">
                        Contact us for a FREE smash</h2>
                    <h2 class="uppercase lg:text-[52px] md:text-[30px] text-center sm:text-[25px] text-[20px] text-black font-bold">
                        repair quote today!
                    </h2>
                    <a href="#top-inquiry-form"
                       class="uppercase lg:text-[32px] md:text-[32px] text-[18px] w-max text-[#eeb52a] bg-white px-12 py-4 font-bold rounded-xl border-[1px] border-[#eeb21ce8] transition duration-200 ease-in-out hover:text-white hover:bg-[#15aef1]">
                        GET FREE ESTIMATE
                    </a>

                </div>
            </div>
        </div>
    </div>
    {{--stats section ends here    --}}

    {{--our gallery section start here--}}
    <div class="w-full relative py-6">
        <div class="w-full flex justify-center">
            @foreach($serviceGallery as $logo)
                <div class="w-full flex flex-col items-center gap-6 py-[5px]">
                    <h2 class="lg:text-[50px] md:text-[40px] sm:text-[35px] text-[30px] text-[#EEB21C] font-bold">{{ $logo->title }}</h2>
                    <div class="max-w-[600px]">
                        <p class="text-black lg:leading-7 md:leading-2 lg:text-[16px] md:text-[16px] text-[16px] font-medium font-[montserrat] text-center"
                           >{{ $logo->msg }}</p>
                    </div>
                    <div class="swiffy-slider slider-nav-autoplay slider-item-show4">
                        <ul class="slider-container">
                            @if (is_string($logo->image) && !empty($logo->image))
                                @php
                                    $imagePaths = explode(',', $logo->image);
                                @endphp
                                @foreach($imagePaths as $imagePath)
                                    <li class="w-full relative">
                                        <img src="{{ asset('storage/'.$imagePath) }}" alt="{{ $logo->title }}" class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
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


    {{--    youtube video section--}}
    <div class="w-full relative py-10">
        <div class="w-full px-4 flex justify-center">
                        @foreach($serviceVideo as $serviceVideos)
{{--                        {{$serviceVideos->youtube_url_embed}}--}}
                <iframe width="668" height="376" src="{{$serviceVideos->youtube_url_embed}}" title="Libaas [Slowed + Reverb] - Kaka | Ginni Kapoor | Punjabi Lofi Song | Chillwithbeats | Textaudio" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

            @endforeach


        </div>
    </div>

    {{--    youtube video section ends --}}

    {{--about section start here--}}
    <div class="w-full  relative py-10"
         style="background-image: url()">
        <div class="w-full px-4 flex justify-center">
            @foreach($serviceChooseUs as $choos)


                <div class="lg:w-[90%] md:w-[90%] sm:w-[90%] w-full rounded-[50px]"
                     style="background-image: url({{asset('asset/images/Rectangle56.jpg')}});box-shadow: 0px 0px 10px 1px #25a8df">
                    <div class="w-full flex flex-col items-center gap-2 p-2 bg-[#25a8df]/90 rounded-[50px]">
                        <h2 class=" lg:text-[45px] md:text-[40px] text-center sm:text-[35px] text-[25px] text-white font-bold">
                            {{$choos->title}}</h2>
                        <h2 class="uppercase lg:text-[45px] md:text-[40px] text-center sm:text-[35px] text-[25px] text-white font-bold">
                            {{$choos->heading}}</h2>


                        <div class="w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-1 mt-6">
                            <div class="w-full flex justify-center items-center">
                                <img src="{{asset('storage/'.$choos->image)}}" alt="">
                            </div>
                            <div class="flex flex-col gap-4">
                                <div class="flex flex-col md:flex-row gap-2">
                                    <ul class="flex flex-col gap-8 pl-8 list-disc" style="list-style-image: url({{ asset('storage/' . $choos->f_image) }});">
                                        <li>
                                            <h2 class="uppercase text-white font-bold lg:text-[30px] md:text-[25px] sm:text-[20px] text-[20px]">
                                                {{$choos->f_title}}
                                            </h2>
                                            <p class="text-white font-normal lg:text-[18px] md:text-[16px] text-[16px] leading-7 font-[montserrat]">
                                                {!! $choos->f_msg !!}
                                            </p>
                                        </li>
                                        <li>
                                            <h2 class="uppercase text-white font-bold lg:text-[30px] md:text-[25px] sm:text-[20px] text-[20px]">
                                                {{$choos->f_1_title}}
                                            </h2>
                                            <p class="text-white font-normal lg:text-[18px] md:text-[16px] text-[16px] leading-7 font-[montserrat]">
                                                {!! $choos->f_1_msg !!}
                                            </p>
                                        </li>
                                        <li>
                                            <h2 class="uppercase text-white font-bold lg:text-[30px] md:text-[25px] sm:text-[20px] text-[20px]">
                                                {{$choos->f_2_title}}
                                            </h2>
                                            <p class="text-white font-normal lg:text-[18px] md:text-[16px] text-[16px] leading-7 font-[montserrat]">
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

    </div>
    {{--about section ends here    --}}


    {{--what we offer section start here--}}
    <div class="w-full  relative py-6 rounded-t-[50px]"
         style="background-image: url();">
        <div class="w-full px-4 flex justify-center">
            <div class="lg:w-[90%] md:w-[90%] sm:w-[90%] w-full flex flex-col items-center gap-6 py-[5px]">
                <h2 class="lg:text-[50px] md:text-[40px] sm:text-[35px] text-[30px] text-[#EEB21C] font-bold">OTHER SERVICES</h2>
                <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-4">
                        @foreach($services->take(6) as $service)

                        @php
                            // Split the description into an array of words
                            $words = explode(' ', strip_tags($service->description)); // Use strip_tags to remove any HTML tags

                            // Get the first 20 words
                            $first20Words = array_slice($words, 0, 20);

                            // Join the first 20 words back into a string
                            $shortDescription = implode(' ', $first20Words);
                        @endphp

                        <div class="bg-white rounded-3xl px-[20px] py-[30px] flex flex-col items-center"
                                 style="box-shadow: 0px 0px 10px 1px #eeb21ca8;">
                                <img src="{{asset('storage/'.$service->image)}}" alt="">
                                <h2 class="uppercase lg:text-[35px] md:text-[30px] text-center sm:text-[25px] text-[20px] text-[#15AEF1] font-bold">
                                    {{$service->heading}}</h2>
                                <p class="text-black lg:leading-7 md:leading-2 lg:text-[20px] md:text-[18px] text-[16px] font-medium font-[montserrat] text-center"
                                   >
                                    {!! $shortDescription !!}
                                </p>

                                <a href="{{route('service.show', ['title'=>$service->title])}}"
                                   class="mt-6 lg:text-[25px] md:text-[20px] text-[14px] w-max text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">
                                    LEARN MORE
                                </a>
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
        </div>
    </div>
    {{--what we offer section ends here    --}}

    <div class="w-full  relative py-6">
        <div class="w-full px-4 flex justify-center">
            <div class="lg:w-[90%] md:w-[90%] sm:w-[90%] w-full">
                <div class="w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-4 mt-6">
                    <div class="flex flex-col gap-2">
                        <div class="flex gap-4">
                            <ul class="flex flex-col gap-4 lg:pl-32 md:pl-32 pl-8"
                                style="list-style-image: url({{asset('asset/images/Arrow.png')}});">
                                <li>
                                    <p class="text-black lg:leading-7 md:leading-2 lg:text-[24px] md:text-[13px] text-[12px] font-bold font-[montserrat]"
                                    >Flawless color match</p>
                                </li>
                                <li>
                                    <p class="text-black lg:leading-7 md:leading-2 lg:text-[24px] md:text-[13px] text-[12px] font-bold font-[montserrat]"
                                       >Insurance-safe
                                    </p>
                                </li>
                                <li>
                                    <p class="text-black lg:leading-7 md:leading-2 lg:text-[24px] md:text-[13px] text-[12px] font-bold font-[montserrat]"
                                       >Professionally certified technicians</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="w-full flex justify-center items-center">
                        <a href="#top-inquiry-form"
                           class="lg:text-[20px] md:text-[18px] text-[14px] w-max text-white bg-[#EEB21C] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#EEB21C] hover:bg-white hover:text-[#EEB21C]  transition ease-in duration-2000">
                            GET FREE ESTIMATE
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col items-center mb-4">
        <form action="{{route('appointment.store')}}" method="post" class="mt-4 grid lg:grid-cols-2 gap-2" enctype="multipart/form-data">
            @csrf
            <div class="w-full flex flex-col gap-1">
                <label for="" class="text-[#eeb21c] text-md font-normal">Name</label>
                <input type="text" name="name" placeholder="Your full name" class="text-gray-600 bg-none border-[1px] border-[#eeb21c]/70 px-4 py-2 focus:outline-none focus:ring-0 focus:border-[#eeb21c]">
            </div>
            <div class="w-full flex flex-col gap-1">
                <label for="" class="text-[#eeb21c] text-md font-normal">Email</label>
                <input type="email" name="email" placeholder="Your Email" class="text-gray-600 bg-none border-[1px] border-[#eeb21c]/70 px-4 py-2 focus:outline-none focus:ring-0 focus:border-[#eeb21c]">
            </div>
            <div class="w-full flex flex-col gap-1">
                <label for="" class="text-[#eeb21c] text-md font-normal">Mobile Number</label>
                <input type="number" name="number" placeholder="Your number" class="text-gray-600 bg-none border-[1px] border-[#eeb21c]/70 px-4 py-2 focus:outline-none focus:ring-0 focus:border-[#eeb21c]">
            </div>
            {{--                        <div class="w-full flex flex-col gap-1">--}}
            {{--                            <label for="" class="text-[#eeb21c] text-md font-normal"> Any Make</label>--}}
            {{--                            <select name="" id="">--}}
            {{--                                <option value=""></option>--}}
            {{--                            </select>--}}
            {{--                            <input type="text" name="car_name" placeholder=" Any Make" class="text-gray-600 bg-none border-[1px] border-[#eeb21c]/70 px-4 py-2 focus:outline-none focus:ring-0 focus:border-[#eeb21c]">--}}
            {{--                        </div>--}}
            <div class="w-full flex flex-col gap-1">
                <label for="" class="text-[#eeb21c] text-md font-normal">Car Model</label>
                <input type="text" name="car_model" placeholder="Your car model" class="text-gray-600 bg-none border-[1px] border-[#eeb21c]/70 px-4 py-2 focus:outline-none focus:ring-0 focus:border-[#eeb21c]">
            </div>
            <div class="w-full flex flex-col gap-1">
                <label for="car_images" class="text-[#eeb21c] text-md font-normal">Damage Image</label>
                <input type="file" name="car_image[]" id="car_images" class="text-gray-600 bg-none border-[1px] border-[#eeb21c]/70 px-4 py-2 focus:outline-none focus:ring-0 focus:border-[#eeb21c]" multiple accept="image/*">
                <div id="image-preview" class="mt-2 grid grid-cols-2 gap-2"></div>
            </div>

            <div class="w-full flex flex-col gap-1">
                <label for="" class="text-[#eeb21c] text-md font-normal">Message</label>
                <textarea placeholder="Your message" name="msg" rows="1" class="text-gray-600 bg-none border-[1px] border-[#eeb21c]/70 px-4 py-2 focus:outline-none focus:ring-0 focus:border-[#eeb21c]"></textarea>
            </div>
            <div class="w-full flex flex-col gap-1 mt-6">
                <button type="submit"
                        class="lg:text-[25px] md:text-[20px] text-[14px] w-max text-white bg-[#eeb21c] px-12 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#eeb21c] hover:bg-white hover:text-[#eeb21c]  transition ease-in duration-2000">
                    Submit
                </button>
            </div>


        </form>

    </div>


@endsection
