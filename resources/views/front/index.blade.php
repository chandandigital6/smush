
@extends('frontLayouts.main')
@section('title', 'Home - Repair')


    @section('content')


        {{--slider section start here--}}
        <div class="swiffy-slider slider-nav-autoplay">
            <ul class="slider-container">
                {{-- make copy of this li for dynamic slider --}}
                <li class="w-full  relative">
                    <img src="{{asset('assets/images/image2.png')}}"
                         class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                    <div class="absolute top-0 left-0 w-full h-full bg-black/70 flex justify-center items-center px-4">
                        <div class="w-max h-max flex flex-col items-center gap-4">
                            <span class="uppercase text-[#EEB21C] text-[22px] font-bold">ANY KIND OF CAR YOU WILL GET</span>
                            <div class="lg:w-[1000px] md:w-[700px] sm:w-[500px] w-[350px] text-center">
                                <p class="text-white font-bold lg:text-[80px] md:text-[60px] sm:text-[40px] text-[30px]">
                                    ON-SITE PROFESSIONAL CAR BODY WORKS</p>
                            </div>
                            <div class="flex gap-4">
                                <a href="{{route('home')}}"
                                   class="lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#eeb21c] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#eeb21c] hover:bg-white hover:text-[#eeb21c]  transition ease-in duration-2000">
                                    SERVICES
                                </a>
                                <a href="{{route('home')}}"
                                   class="lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">
                                    ENQUIRY
                                </a>
                            </div>
                        </div>
                    </div>

                </li>
                {{--slider copy ends here--}}

                <li class="w-full  relative">
                    <img src="{{asset('assets/images/image2.png')}}"
                         class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                    <div class="absolute top-0 left-0 w-full h-full bg-black/70 flex justify-center items-center px-4">
                        <div class="w-max h-max flex flex-col items-center gap-4">
                            <span class="uppercase text-[#EEB21C] text-[22px] font-bold">ANY KIND OF CAR YOU WILL GET</span>
                            <div class="lg:w-[1000px] md:w-[700px] sm:w-[500px] w-[350px] text-center">
                                <p class="text-white font-bold lg:text-[80px] md:text-[60px] sm:text-[40px] text-[30px]">
                                    ON-SITE PROFESSIONAL CAR BODY WORKS</p>
                            </div>
                            <div class="flex gap-4">
                                <a href="{{route('home')}}"
                                   class="lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#eeb21c] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#eeb21c] hover:bg-white hover:text-[#eeb21c]  transition ease-in duration-2000">
                                    SERVICES
                                </a>
                                <a href="{{route('home')}}"
                                   class="lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">
                                    ENQUIRY
                                </a>
                            </div>
                        </div>
                    </div>

                </li>
                <li class="w-full  relative">
                    <img src="{{asset('assets/images/image2.png')}}"
                         class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                    <div class="absolute top-0 left-0 w-full h-full bg-black/70 flex justify-center items-center px-4">
                        <div class="w-max h-max flex flex-col items-center gap-4">
                            <span class="uppercase text-[#EEB21C] text-[22px] font-bold">ANY KIND OF CAR YOU WILL GET</span>
                            <div class="lg:w-[1000px] md:w-[700px] sm:w-[500px] w-[350px] text-center">
                                <p class="text-white font-bold lg:text-[80px] md:text-[60px] sm:text-[40px] text-[30px]">
                                    ON-SITE PROFESSIONAL CAR BODY WORKS</p>
                            </div>
                            <div class="flex gap-4">
                                <a href="{{route('home')}}"
                                   class="lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#eeb21c] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#eeb21c] hover:bg-white hover:text-[#eeb21c]  transition ease-in duration-2000">
                                    SERVICES
                                </a>
                                <a href="{{route('home')}}"
                                   class="lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">
                                    ENQUIRY
                                </a>
                            </div>
                        </div>
                    </div>

                </li>
                <li class="w-full  relative">
                    <img src="{{asset('assets/images/image2.png')}}"
                         class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                    <div class="absolute top-0 left-0 w-full h-full bg-black/70 flex justify-center items-center px-4">
                        <div class="w-max h-max flex flex-col items-center gap-4">
                            <span class="uppercase text-[#EEB21C] text-[22px] font-bold">ANY KIND OF CAR YOU WILL GET</span>
                            <div class="lg:w-[1000px] md:w-[700px] sm:w-[500px] w-[350px] text-center">
                                <p class="text-white font-bold lg:text-[80px] md:text-[60px] sm:text-[40px] text-[30px]">
                                    ON-SITE PROFESSIONAL CAR BODY WORKS</p>
                            </div>
                            <div class="flex gap-4">
                                <a href="{{route('home')}}"
                                   class="lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#eeb21c] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#eeb21c] hover:bg-white hover:text-[#eeb21c]  transition ease-in duration-2000">
                                    SERVICES
                                </a>
                                <a href="{{route('home')}}"
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
             style="background-image: url({{asset('assets/images/bac.png')}})">
            <div class="w-full h-max absolute -top-[50px] left-0 px-4 flex justify-center z-50 ">
                <div
                    class=" lg:w-[1000px] lg:h-[250px] md:h-[200px] sm:h-[180px] h-[100px] bg-white px-2 rounded-lg shadow-md shadow-gray-400 flex justify-between items-center gap-4">
                    <div>
                        <img class="lg:w-52 md:w-48 sm:w-40 w-10 h-auto" src="{{asset('assets/images/yeelowcar.png')}}"
                             alt="">
                    </div>
                    <div class="flex flex-col gap-1 items-center py-2">
                        <span class="font-bold lg:text-[34px] md:text-[21px] sm:text-[17px] text-[1px]">GET YOUR FREE ESTIMATE NOW</span>
                        <span class="font-bold lg:text-[23px] md:text-[15px] sm:text-[10px] text-[8px] text-[#EEB21C]">SIMPLY SEND US PHOTOS OF THE DAMAGE!"</span>
                        <h5 class="font-bold lg:text-[30px] md:text-[20px] sm:text-[17px] text-[10px]">
                            quote@mobilesmashrepair.com</h5>
                        <h5 class="font-bold lg:text-[30px] md:text-[20px] sm:text-[17px] text-[10px]">OR</h5>
                        <a href="{{route('home')}}"
                           class=" lg:text-[14px] md:text-[14px] sm:text-[14px] text-[7px] w-max text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-full border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">
                            CLICK HERE
                        </a>
                    </div>
                    <div>
                        <img class="lg:w-52 md:w-48 sm:w-40 w-10 h-auto" src="{{asset('assets/images/bluecar.png')}}"
                             alt="">
                    </div>
                </div>
            </div>


            <div class="w-full px-4 flex justify-center">
                <div
                    class="lg:w-[70%] md:w-[80%] sm:w-[90%] w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-4 py-[5px]">
                    <div class="w-full flex flex-col gap-6 p-2">
                        <h2 class="uppercase font-bold lg:text-[40px] md:text-[30px] text-[25px]">About <span
                                class="text-[#15AEF1]">Mobile Smash Repair</span></h2>
                        <p class="text-black lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-medium font-[roboto]"
                           style="word-spacing: 10px;">
                            With more than 30 years of experience and expertise in all types
                            of vehicle spray painting and automotive body repairs, our
                            valued clients know that the mobile panel shop is one of
                            melbourne’s most trusted mobile panel beater, spray paint
                            dent, bumper and scratch repair specialists. From
                            corporate fleets to private vehicles, we pride ourselves
                            on our professional service, the highest quality
                            workmanship and our commitment to ensuring our
                            customer’s 100% satisfaction.The mobile panel shop
                        </p>
                        <p class="text-black lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-medium font-[roboto]"
                           style="word-spacing: 3px;">
                            melbourne offers our clients professional service, the highest quality workmanship and our </p>
                        <p class="text-black lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-medium font-[roboto]"
                           style="word-spacing: 3px;">commitment to ensuring our customer’s 100% satisfaction.The mobile
                            panel shop</p>


                        <a href="{{route('home')}}"
                           class="lg:text-[25px] md:text-[20px] text-[14px] w-max text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">
                            LEARN MORE
                        </a>
                    </div>
                    <div class="w-full flex justify-center items-center">
                        <img src="{{asset('assets/images/Van.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        {{--about section ends here    --}}


        {{--what we offer section start here--}}
        <div class="w-full  relative py-6 rounded-t-[50px]"
             style="background-image: url({{asset('assets/images/bac.png')}});box-shadow: 0px 0px 20px 1px #15aef173">
            <div class="w-full px-4 flex justify-center">
                <div class="lg:w-[70%] md:w-[80%] sm:w-[90%] w-full flex flex-col items-center gap-6 py-[5px]">
                    <h2 class="lg:text-[50px] md:text-[40px] sm:text-[35px] text-[30px] text-[#EEB21C] font-bold">WHAT WE
                        OFFER</h2>
                    <div class="max-w-[600px]">
                        <p class="text-black lg:leading-7 md:leading-2 lg:text-[16px] md:text-[13px] text-[12px] font-medium font-[roboto] text-center"
                           style="word-spacing: 10px;">
                            Restore your car's pristine finish with our expert scratch repair services. Our skilled
                            technicians use advanced techniques to remove scratches and blemishes, ensuring your vehicle
                            looks as good as new. Satisfaction guaranteed.
                        </p>
                    </div>


                    @include('front_end.components.servicesSection')
                </div>
            </div>
        </div>
        {{--what we offer section ends here    --}}


        {{--appointment section start here--}}
        <div class="w-full  relative  bg-no-repeat bg-center bg-cover "
             style="background-image: url({{asset('assets/images/image1.png')}});">
            <div class="w-full px-4 flex justify-center py-6 bg-black/70">
                <div class="lg:w-[70%] md:w-[80%] sm:w-[90%] w-full flex flex-col items-center gap-6 py-[5px]">

                    <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 grid-cols-1 gap-4 items-center">
                        <div class="bg-[#eeb21c] rounded-xl px-[20px] py-[30px] flex flex-col items-center h-max">
                            <img src="{{asset('assets/images/Engineer.png')}}" alt="">
                            <h2 class="uppercase lg:text-[30px] md:text-[25px] text-center sm:text-[20px] text-[15px] text-white font-bold">
                                Get a Technician</h2>
                            <p class="text-white lg:leading-7 md:leading-2 lg:text-[16px] md:text-[13px] text-[12px] font-medium font-[roboto] text-center"
                               style="word-spacing: 10px;">Call directly or email us with a requested time and place. We are always happy to help. Call directly or email us with a requested time and place. We are always happy to help</p>

                            <a href="{{route('home')}}"
                               class="mt-6 lg:text-[20px] md:text-[17px] text-[14px] w-max text-black bg-white px-4  py-1 font-bold rounded-md border-[1px] border-white hover:bg-white hover:text-black  transition ease-in duration-2000">
                                Call Now
                            </a>
                        </div>
                        <div class="bg-[#15aef1] rounded-xl px-[20px] lg:py-[60px] md:py-[60px] py-[30px] flex flex-col items-center h-max ">
                            <img src="{{asset('assets/images/Tear-Off Calendar.png')}}" alt="">
                            <h2 class="uppercase lg:text-[30px] md:text-[25px] text-center sm:text-[20px] text-[15px] text-white font-bold">
                                MAKE AN APPOINTMENT</h2>
                            <p class="text-white lg:leading-7 md:leading-2 lg:text-[16px] md:text-[13px] text-[12px] font-medium font-[roboto] text-center"
                               style="word-spacing: 10px;">Call directly or email us with a requested time and place. We are always happy to help. Call directly or email us with a requested time and place. We are always happy to help</p>

                            <a href="{{route('home')}}"
                               class="mt-6 lg:text-[20px] md:text-[17px] text-[14px] w-max text-black bg-white px-4  py-1 font-bold rounded-md border-[1px] border-white hover:bg-white hover:text-black  transition ease-in duration-2000">
                                Call Now
                            </a>
                        </div>
                        <div class="bg-[#eeb21c] rounded-xl px-[20px] py-[30px] flex flex-col items-center h-max">
                            <img src="{{asset('assets/images/Group 4.png')}}" alt="">
                            <h2 class="uppercase lg:text-[30px] md:text-[25px] text-center sm:text-[20px] text-[15px] text-white font-bold">
                                Get A Quote</h2>
                            <p class="text-white lg:leading-7 md:leading-2 lg:text-[16px] md:text-[13px] text-[12px] font-medium font-[roboto] text-center"
                               style="word-spacing: 10px;">Call directly or email us with a requested time and place. We are always happy to help. Call directly or email us with a requested time and place. We are always happy to help</p>

                            <a href="{{route('home')}}"
                               class="mt-6 lg:text-[20px] md:text-[17px] text-[14px] w-max text-black bg-white px-4  py-1 font-bold rounded-md border-[1px] border-white hover:bg-white hover:text-black  transition ease-in duration-2000">
                                Call Now
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{--appointment section ends here    --}}


        {{--our gallery section start here--}}
        <div class="w-full  relative py-6">
            <div class="w-full  flex justify-center">
                <div class=" w-full flex flex-col items-center gap-6 py-[5px]">
                    <h2 class="lg:text-[50px] md:text-[40px] sm:text-[35px] text-[30px] text-[#EEB21C] font-bold">OUR GALLERY</h2>
                    <div class="max-w-[600px]">
                        <p class="text-black lg:leading-7 md:leading-2 lg:text-[16px] md:text-[13px] text-[12px] font-medium font-[roboto] text-center"
                           style="word-spacing: 10px;">Restore your car's pristine finish with our expert scratch repair services. Our skilled technicians use advanced techniques to
                            remove scratches and blemishes, ensuring your vehicle looks as good as new. Satisfaction guaranteed.</p>
                    </div>
                    <div class="swiffy-slider slider-nav-autoplay slider-item-show4">
                        <ul class="slider-container">
                            {{-- make copy of this li for dynamic slider --}}
                            <li class="w-full  relative">
                                <img src="{{asset('assets/images/Rectangle 40.png')}}" class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                            </li>
                            {{--slider copy ends here--}}
                            <li class="w-full  relative">
                                <img src="{{asset('assets/images/Rectangle 41.png')}}" class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                            </li>
                            <li class="w-full  relative">
                                <img src="{{asset('assets/images/Rectangle 42.png')}}" class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                            </li>
                            <li class="w-full  relative">
                                <img src="{{asset('assets/images/Rectangle 44.png')}}" class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                            </li>
                            <li class="w-full  relative">
                                <img src="{{asset('assets/images/Rectangle 45.png')}}" class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                            </li>
                            <li class="w-full  relative">
                                <img src="{{asset('assets/images/Rectangle 46.png')}}" class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                            </li>
                            <li class="w-full  relative">
                                <img src="{{asset('assets/images/Rectangle 47.png')}}" class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                            </li>
                            <li class="w-full  relative">
                                <img src="{{asset('assets/images/Rectangle51.png')}}" class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                            </li>
                            <li class="w-full  relative">
                                <img src="{{asset('assets/images/Rectangle56.png')}}" class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                            </li>
                            <li class="w-full  relative">
                                <img src="{{asset('assets/images/Rectangle 72.png')}}" class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                            </li>
                            <li class="w-full  relative">
                                <img src="{{asset('assets/images/Rectangle79.png')}}" class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                            </li>
                            <li class="w-full  relative">
                                <img src="{{asset('assets/images/Rectangle95.png')}}" class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                            </li>




                        </ul>

                        <button type="button" class="slider-nav"></button>
                        <button type="button" class="slider-nav slider-nav-next"></button>


                    </div>


                </div>
            </div>
        </div>
        {{--our gallery section ends here    --}}


        {{--our clients section start here--}}
        <div class="w-full  relative py-6">
            <div class="w-full  flex justify-center">
                <div class=" w-full flex flex-col items-center gap-6 py-10 px-4" style="background-image: url({{asset('assets/images/Rectangle43.png')}})">
                    <h2 class="lg:text-[50px] md:text-[40px] sm:text-[35px] text-[30px] text-white font-bold">WHAT OUR CLIENTS SAY</h2>
                    <div class="swiffy-slider slider-item-show3 slider-nav-dark">
                        <ul class="slider-container">
                            {{-- make copy of this li for dynamic slider --}}
                            <li class="w-full  relative">
                                <div class="bg-white flex flex-col  p-4">
                                    <i class="fa-solid fa-quote-left text-[#eeb21c] text-[30px]"></i>
                                    <p class="text-black  text-[14px] font-normal font-[roboto] mt-2"
                                       style="word-spacing: 10px;">Restore your car's pristine finish with our expert scratch repair techniques to remove scratches and blemishes, ensuring your vehicle looks as good as new. Satisfaction guaranteed.</p>
                                    <h6 class="text-black font-bold font-[roboto] mt-2">Menny Tee</h6>
                                    <div>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                    </div>

                                    <div class="w-full h-4 mt-6 mb-4 bg-[#eeb21c]">

                                    </div>
                                </div>
                            </li>
                            {{--slider copy ends here--}}
                            <li class="w-full  relative">
                                <div class="bg-white flex flex-col  p-4">
                                    <i class="fa-solid fa-quote-left text-[#eeb21c] text-[30px]"></i>
                                    <p class="text-black  text-[14px] font-normal font-[roboto] mt-2"
                                       style="word-spacing: 10px;">Restore your car's pristine finish with our expert scratch repair techniques to remove scratches and blemishes, ensuring your vehicle looks as good as new. Satisfaction guaranteed.</p>
                                    <h6 class="text-black font-bold font-[roboto] mt-2">Menny Tee</h6>
                                    <div>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                    </div>

                                    <div class="w-full h-4 mt-6 mb-4 bg-[#eeb21c]">

                                    </div>
                                </div>
                            </li>
                            <li class="w-full  relative">
                                <div class="bg-white flex flex-col  p-4">
                                    <i class="fa-solid fa-quote-left text-[#eeb21c] text-[30px]"></i>
                                    <p class="text-black  text-[14px] font-normal font-[roboto] mt-2"
                                       style="word-spacing: 10px;">Restore your car's pristine finish with our expert scratch repair techniques to remove scratches and blemishes, ensuring your vehicle looks as good as new. Satisfaction guaranteed.</p>
                                    <h6 class="text-black font-bold font-[roboto] mt-2">Menny Tee</h6>
                                    <div>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                    </div>

                                    <div class="w-full h-4 mt-6 mb-4 bg-[#eeb21c]">

                                    </div>
                                </div>
                            </li>
                            <li class="w-full  relative">
                                <div class="bg-white flex flex-col  p-4">
                                    <i class="fa-solid fa-quote-left text-[#eeb21c] text-[30px]"></i>
                                    <p class="text-black  text-[14px] font-normal font-[roboto] mt-2"
                                       style="word-spacing: 10px;">Restore your car's pristine finish with our expert scratch repair techniques to remove scratches and blemishes, ensuring your vehicle looks as good as new. Satisfaction guaranteed.</p>
                                    <h6 class="text-black font-bold font-[roboto] mt-2">Menny Tee</h6>
                                    <div>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                    </div>

                                    <div class="w-full h-4 mt-6 mb-4 bg-[#eeb21c]">

                                    </div>
                                </div>
                            </li>
                            <li class="w-full  relative">
                                <div class="bg-white flex flex-col  p-4">
                                    <i class="fa-solid fa-quote-left text-[#eeb21c] text-[30px]"></i>
                                    <p class="text-black  text-[14px] font-normal font-[roboto] mt-2"
                                       style="word-spacing: 10px;">Restore your car's pristine finish with our expert scratch repair techniques to remove scratches and blemishes, ensuring your vehicle looks as good as new. Satisfaction guaranteed.</p>
                                    <h6 class="text-black font-bold font-[roboto] mt-2">Menny Tee</h6>
                                    <div>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                    </div>

                                    <div class="w-full h-4 mt-6 mb-4 bg-[#eeb21c]">

                                    </div>
                                </div>
                            </li>
                            <li class="w-full  relative">
                                <div class="bg-white flex flex-col  p-4">
                                    <i class="fa-solid fa-quote-left text-[#eeb21c] text-[30px]"></i>
                                    <p class="text-black  text-[14px] font-normal font-[roboto] mt-2"
                                       style="word-spacing: 10px;">Restore your car's pristine finish with our expert scratch repair techniques to remove scratches and blemishes, ensuring your vehicle looks as good as new. Satisfaction guaranteed.</p>
                                    <h6 class="text-black font-bold font-[roboto] mt-2">Menny Tee</h6>
                                    <div>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                        <i class="fa fa-star text-[#eeb21c] text-sm"></i>
                                    </div>

                                    <div class="w-full h-4 mt-6 mb-4 bg-[#eeb21c]">

                                    </div>
                                </div>
                            </li>


                        </ul>

                        <button type="button" class="slider-nav"></button>
                        <button type="button" class="slider-nav slider-nav-next"></button>


                    </div>


                </div>
            </div>
        </div>
        {{--our clients section ends here    --}}


        {{--blogs section start here--}}
        <div class="w-full  relative py-6">
            <div class="w-full  flex justify-center">
                <div class=" lg:w-[70%] md:w-[80%] sm:w-[90%] w-full w-full flex flex-col items-center py-[5px] px-4">
                    <h2 class="lg:text-[50px] md:text-[40px] sm:text-[35px] text-[30px] text-[#EEB21C] font-bold">POSTS FROM THE BLOG</h2>
                    <div class="max-w-[600px]">
                        <p class="text-black lg:text-[16px] md:text-[13px] text-[12px] font-medium font-[roboto] text-center"
                           style="word-spacing: 10px;">See our updates, news and new coming features</p>
                    </div>
                    <div class="swiffy-slider slider-nav-autoplay slider-item-show3 mt-6">
                        <ul class="slider-container">
                            {{-- make copy of this li for dynamic slider --}}
                            <li class="w-full  relative">
                                <div class="relative">
                                    <img src="{{asset('assets/images/Rectangle 45.png')}}" class="w-full h-[400px] object-cover opacity-80 hover:opacity-100 transition ease-in duration-2000">
                                </div>
                                <div class="relative h-16 bg-white">
                                    <div class="absolute -top-[30px] left-0 flex justify-center w-full">
                                        <a href="{{route('home')}}"
                                           class="w-[90%] flex justify-center lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-sm border-[1px] border-[#15aef1]  transition ease-in duration-2000">
                                            BLOG TITLE
                                        </a>
                                    </div>
                                </div>

                            </li>
                            {{--slider copy ends here--}}
                            <li class="w-full  relative">
                                <div class="relative">
                                    <img src="{{asset('assets/images/Rectangle 46.png')}}" class="w-full h-[400px] object-cover opacity-80 hover:opacity-100 transition ease-in duration-2000">
                                </div>
                                <div class="relative h-16 bg-white">
                                    <div class="absolute -top-[30px] left-0 flex justify-center w-full">
                                        <a href="{{route('home')}}"
                                           class="w-[90%] flex justify-center lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-sm border-[1px] border-[#15aef1]  transition ease-in duration-2000">
                                            BLOG TITLE
                                        </a>
                                    </div>
                                </div>

                            </li>
                            <li class="w-full  relative">
                                <div class="relative">
                                    <img src="{{asset('assets/images/Rectangle 47.png')}}" class="w-full h-[400px] object-cover opacity-80 hover:opacity-100 transition ease-in duration-2000">
                                </div>
                                <div class="relative h-16 bg-white">
                                    <div class="absolute -top-[30px] left-0 flex justify-center w-full">
                                        <a href="{{route('home')}}"
                                           class="w-[90%] flex justify-center lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-sm border-[1px] border-[#15aef1]  transition ease-in duration-2000">
                                            BLOG TITLE
                                        </a>
                                    </div>
                                </div>

                            </li>
                            <li class="w-full  relative">
                                <div class="relative">
                                    <img src="{{asset('assets/images/Rectangle 45.png')}}" class="w-full h-[400px] object-cover opacity-80 hover:opacity-100 transition ease-in duration-2000">
                                </div>
                                <div class="relative h-16 bg-white">
                                    <div class="absolute -top-[30px] left-0 flex justify-center w-full">
                                        <a href="{{route('home')}}"
                                           class="w-[90%] flex justify-center lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-sm border-[1px] border-[#15aef1]  transition ease-in duration-2000">
                                            BLOG TITLE
                                        </a>
                                    </div>
                                </div>

                            </li>
                            <li class="w-full  relative">
                                <div class="relative">
                                    <img src="{{asset('assets/images/Rectangle 46.png')}}" class="w-full h-[400px] object-cover opacity-80 hover:opacity-100 transition ease-in duration-2000">
                                </div>
                                <div class="relative h-16 bg-white">
                                    <div class="absolute -top-[30px] left-0 flex justify-center w-full">
                                        <a href="{{route('home')}}"
                                           class="w-[90%] flex justify-center lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-sm border-[1px] border-[#15aef1]  transition ease-in duration-2000">
                                            BLOG TITLE
                                        </a>
                                    </div>
                                </div>

                            </li>
                            <li class="w-full  relative">
                                <div class="relative">
                                    <img src="{{asset('assets/images/Rectangle 47.png')}}" class="w-full h-[400px] object-cover opacity-80 hover:opacity-100 transition ease-in duration-2000">
                                </div>
                                <div class="relative h-16 bg-white">
                                    <div class="absolute -top-[30px] left-0 flex justify-center w-full">
                                        <a href="{{route('home')}}"
                                           class="w-[90%] flex justify-center lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-sm border-[1px] border-[#15aef1]  transition ease-in duration-2000">
                                            BLOG TITLE
                                        </a>
                                    </div>
                                </div>

                            </li>
                            <li class="w-full  relative">
                                <div class="relative">
                                    <img src="{{asset('assets/images/Rectangle 45.png')}}" class="w-full h-[400px] object-cover opacity-80 hover:opacity-100 transition ease-in duration-2000">
                                </div>
                                <div class="relative h-16 bg-white">
                                    <div class="absolute -top-[30px] left-0 flex justify-center w-full">
                                        <a href="{{route('home')}}"
                                           class="w-[90%] flex justify-center lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-sm border-[1px] border-[#15aef1]  transition ease-in duration-2000">
                                            BLOG TITLE
                                        </a>
                                    </div>
                                </div>

                            </li>
                        </ul>

                        <button type="button" class="slider-nav"></button>
                        <button type="button" class="slider-nav slider-nav-next"></button>


                    </div>


                </div>
            </div>
        </div>
        {{--blogs section ends here    --}}



    @endsection
