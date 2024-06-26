@extends('front_end.components.layout',['seos'=>$seos])
@section('content')

    {{--slider section start here--}}
    <div class="swiffy-slider slider-nav-autoplay">
        <ul class="slider-container">
            {{-- make copy of this li for dynamic slider --}}
            <li class="w-full  relative">
                <img src="{{asset('asset/images/image2.png')}}"
                     class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                <div class="absolute top-0 left-0 w-full h-full bg-black/70 flex justify-center items-center px-4">
                    <div class="w-max h-max flex flex-col items-center gap-4">
                        <span class="uppercase text-[#EEB21C] text-[22px] font-bold">ANY KIND OF CAR YOU WILL GET</span>
                        <div class="lg:w-[1000px] md:w-[700px] sm:w-[500px] w-[350px] text-center">
                            <p class="uppercase text-white font-bold lg:text-[80px] md:text-[60px] sm:text-[40px] text-[30px]">
                                About us</p>
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
            {{--slider copy ends here--}}
            <li class="w-full  relative">
                <img src="{{asset('asset/images/image2.png')}}"
                     class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                <div class="absolute top-0 left-0 w-full h-full bg-black/70 flex justify-center items-center px-4">
                    <div class="w-max h-max flex flex-col items-center gap-4">
                        <span class="uppercase text-[#EEB21C] text-[22px] font-bold">ANY KIND OF CAR YOU WILL GET</span>
                        <div class="lg:w-[1000px] md:w-[700px] sm:w-[500px] w-[350px] text-center">
                            <p class="uppercase text-white font-bold lg:text-[80px] md:text-[60px] sm:text-[40px] text-[30px]">
                                About us</p>
                        </div>
                        <div class="flex gap-4">
                            <a href="{{route('contact')}}"
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
            <li class="w-full  relative">
                <img src="{{asset('asset/images/image2.png')}}"
                     class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                <div class="absolute top-0 left-0 w-full h-full bg-black/70 flex justify-center items-center px-4">
                    <div class="w-max h-max flex flex-col items-center gap-4">
                        <span class="uppercase text-[#EEB21C] text-[22px] font-bold">ANY KIND OF CAR YOU WILL GET</span>
                        <div class="lg:w-[1000px] md:w-[700px] sm:w-[500px] w-[350px] text-center">
                            <p class="uppercase text-white font-bold lg:text-[80px] md:text-[60px] sm:text-[40px] text-[30px]">
                                About us</p>
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
            <li class="w-full  relative">
                <img src="{{asset('asset/images/image2.png')}}"
                     class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                <div class="absolute top-0 left-0 w-full h-full bg-black/70 flex justify-center items-center px-4">
                    <div class="w-max h-max flex flex-col items-center gap-4">
                        <span class="uppercase text-[#EEB21C] text-[22px] font-bold">ANY KIND OF CAR YOU WILL GET</span>
                        <div class="lg:w-[1000px] md:w-[700px] sm:w-[500px] w-[350px] text-center">
                            <p class="uppercase text-white font-bold lg:text-[80px] md:text-[60px] sm:text-[40px] text-[30px]">
                                About us</p>
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

        <button type="button" class="slider-nav"></button>
        <button type="button" class="slider-nav slider-nav-next"></button>


    </div>
    {{--slider section ends here--}}


    {{--about section start here--}}
    <div class="w-full  relative lg:pt-[250px] md:pt-[200px] sm:pt-[180px] pt-[100px]"
         style="background-image: url({{asset('asset/images/bac.png')}})">
        <div class="w-full h-max absolute -top-[50px] left-0 px-4 flex justify-center z-50 py-4 ">
            <div
                class=" lg:w-[1000px] lg:h-[250px] md:h-[200px] sm:h-[200px] h-[120px] bg-white px-2 rounded-lg shadow-md shadow-gray-400 flex justify-between items-center gap-4">
                <div>
                    <img class="lg:w-52 md:w-48 sm:w-40 w-24 h-auto" src="{{asset('asset/images/yeelowcar.png')}}"
                         alt="">
                </div>
                <div class="flex flex-col gap-1 items-center py-2">
                    <span class="font-bold lg:text-[34px] md:text-[21px] sm:text-[17px] text-[8px]">GET YOUR FREE ESTIMATE NOW</span>
                    <span class="font-bold lg:text-[23px] md:text-[15px] sm:text-[10px] text-[8px] text-[#EEB21C] text-center">SIMPLY SEND US PHOTOS OF THE DAMAGE!"</span>
                    <h5 class="font-bold lg:text-[30px] md:text-[20px] sm:text-[17px] text-[10px]">
                        quote@mobilesmashrepair.com</h5>
                    <h5 class="font-bold lg:text-[30px] md:text-[20px] sm:text-[17px] text-[10px]">OR</h5>
                    <a href="{{route('contact')}}"
                       class=" lg:text-[14px] md:text-[14px] sm:text-[14px] text-[7px] w-max text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-full border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">
                        CLICK HERE
                    </a>
                </div>
                <div>
                    <img class="lg:w-52 md:w-48 sm:w-40 w-24 h-auto" src="{{asset('asset/images/bluecar.png')}}"
                         alt="">
                </div>
            </div>
        </div>



        <div class="w-full px-4 flex justify-center">
            @foreach($about as $aboutUs)


                <div
                    class="lg:w-[70%] md:w-[80%] sm:w-[90%] w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-4 py-[5px]">
                    <div class="w-full flex flex-col gap-6 p-2">
                        <h2 class="uppercase font-bold lg:text-[40px] md:text-[30px] text-[25px] text-center">{{$aboutUs->title}} <span
                                class="text-[#15AEF1]">{{$aboutUs->heading}}</span></h2>
                        <div class="w-full  justify-center items-center lg:hidden md:hidden flex">
                            <img src="{{asset('storage/'.$aboutUs->image)}}" alt="">
                        </div>

                        <p class="text-black lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-medium font-[roboto]"
                           style="word-spacing: 10px;">
                            {!! $aboutUs->description !!}
                        </p>



{{--                        <a href="{{route('contact')}}"--}}
{{--                           class="lg:text-[25px] md:text-[20px] text-[14px] w-max text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">--}}
{{--                            LEARN MORE--}}
{{--                        </a>--}}
                    </div>
                    <div class="w-full justify-center items-center lg:flex md:flex hidden">
                        <img src="{{asset('storage/'.$aboutUs->image)}}" alt="">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{--about section ends here    --}}


    {{--stats section start here--}}
    <div class="w-full  relative  bg-no-repeat bg-center bg-cover"
         style="background-image: url({{asset('asset/images/Rectangle79.png')}})">
        <div class="w-full flex justify-center bg-[#eeb21ce8]">
            <div
                class="lg:w-[80%] md:w-[90%] sm:w-[90%] w-full grid lg:grid-cols-3 grid-cols-1 gap-4 pt-[5px] px-4 lg:py-0 py-2">
              @foreach($counters as $counter)


                <div class="w-full flex flex-col items-center gap-2 px-2">
                    <h2 class="uppercase lg:text-[40px] md:text-[35px] text-center sm:text-[30px] text-[25px] text-white font-bold">
                        {{$counter->number}}+</h2>
                    <span
                        class=" uppercase lg:text-[20px] md:text-[20px] text-[14px] w-max text-white bg-[#15aef1] p-8 font-bold lg:rounded-t-[50px] rounded-md border-[1px] border-[#15aef1] transition ease-in duration-2000">
                      {{$counter->title}}
                    </span>
                </div>
                @endforeach


            </div>
        </div>
    </div>
    {{--stats section ends here    --}}



    {{--about section start here--}}
    <div class="w-full  relative py-10"
         style="background-image: url({{asset('asset/images/bac.png')}})">
        <div class="w-full px-4 flex justify-center">
            @foreach($chooseUs as $choos)


            <div class="lg:w-[70%] md:w-[80%] sm:w-[90%] w-full rounded-[50px]"
                 style="background-image: url({{asset('asset/images/Rectangle56.png')}});box-shadow: 0px 0px 10px 1px #25a8df">
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
                            <div class="flex gap-2">
                                <ul class="flex flex-col gap-8 pl-8"
                                    style="list-style-image: url({{asset('storage/'.$choos->f_image)}});">
                                    <li>
                                        <h2 class="uppercase  lg:text-[30px] md:text-[25px]  sm:text-[20px] text-[20px] text-white font-bold">
                                          {{$choos->f_title}}</h2>
                                        <p class="text-white lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-normal font-[roboto]"
                                           style="word-spacing: 3px;">
                                        {!! $choos->f_msg !!}

                                        </p>

                                    </li>
                                    <li>
                                        <h2 class="uppercase lg:text-[30px] md:text-[25px]  sm:text-[20px] text-[20px] text-white font-bold">
                                            {{$choos->f_1_title}}</h2>
                                        <p class="text-white lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-normal font-[roboto]"
                                           style="word-spacing: 3px;">
                                            {!! $choos->f_1_msg !!}
                                        </p>

                                    </li>
                                    <li>
                                        <h2 class="uppercase lg:text-[30px] md:text-[25px]  sm:text-[20px] text-[20px] text-white font-bold">
                                         {{$choos->f_2_title}}</h2>
                                        <p class="text-white lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-normal font-[roboto]"
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

            <div class="lg:w-[70%] md:w-[80%] sm:w-[90%] w-full">
                <div class="w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-4 mt-6">
                    <div class="flex flex-col gap-2">
                        <div class="flex gap-4">
                            <ul class="flex flex-col gap-4 lg:pl-32 md:pl-32 pl-8"
                                style="list-style-image: url({{asset('asset/images/Arrow.png')}});">
                                <li>
                                    <p class="text-black lg:leading-7 md:leading-2 lg:text-[24px] md:text-[13px] text-[12px] font-bold font-[roboto]"
                                       style="word-spacing: 3px;">Perfect color matching</p>
                                </li>
                                <li>
                                    <p class="text-black lg:leading-7 md:leading-2 lg:text-[24px] md:text-[13px] text-[12px] font-bold font-[roboto]"
                                       style="word-spacing: 3px;">No impact on your car insurance</p>
                                </li>
                                <li>
                                    <p class="text-black lg:leading-7 md:leading-2 lg:text-[24px] md:text-[13px] text-[12px] font-bold font-[roboto]"
                                       style="word-spacing: 3px;">Trade qualified and courteous tradesman</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="w-full flex justify-center items-center">
                        <a href="{{route('contact')}}"
                           class="lg:text-[20px] md:text-[18px] text-[14px] w-max text-white bg-[#EEB21C] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#EEB21C] hover:bg-white hover:text-[#EEB21C]  transition ease-in duration-2000">
                            GET FREE ESTIMATE
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>

    {{--about section ends here    --}}

@endsection
