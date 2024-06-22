@extends('front_end.components.layout')
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
                                bumber repair</p>
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
                <img src="{{asset('asset/images/image2.png')}}"
                     class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                <div class="absolute top-0 left-0 w-full h-full bg-black/70 flex justify-center items-center px-4">
                    <div class="w-max h-max flex flex-col items-center gap-4">
                        <span class="uppercase text-[#EEB21C] text-[22px] font-bold">ANY KIND OF CAR YOU WILL GET</span>
                        <div class="lg:w-[1000px] md:w-[700px] sm:w-[500px] w-[350px] text-center">
                            <p class="uppercase text-white font-bold lg:text-[80px] md:text-[60px] sm:text-[40px] text-[30px]">
                                bumber repair</p>
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
                <img src="{{asset('asset/images/image2.png')}}"
                     class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                <div class="absolute top-0 left-0 w-full h-full bg-black/70 flex justify-center items-center px-4">
                    <div class="w-max h-max flex flex-col items-center gap-4">
                        <span class="uppercase text-[#EEB21C] text-[22px] font-bold">ANY KIND OF CAR YOU WILL GET</span>
                        <div class="lg:w-[1000px] md:w-[700px] sm:w-[500px] w-[350px] text-center">
                            <p class="uppercase text-white font-bold lg:text-[80px] md:text-[60px] sm:text-[40px] text-[30px]">
                                bumber repair</p>
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
                <img src="{{asset('asset/images/image2.png')}}"
                     class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                <div class="absolute top-0 left-0 w-full h-full bg-black/70 flex justify-center items-center px-4">
                    <div class="w-max h-max flex flex-col items-center gap-4">
                        <span class="uppercase text-[#EEB21C] text-[22px] font-bold">ANY KIND OF CAR YOU WILL GET</span>
                        <div class="lg:w-[1000px] md:w-[700px] sm:w-[500px] w-[350px] text-center">
                            <p class="uppercase text-white font-bold lg:text-[80px] md:text-[60px] sm:text-[40px] text-[30px]">
                                bumber repair</p>
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
         style="background-image: url({{asset('asset/images/bac.png')}})">
        <div class="w-full h-max absolute -top-[50px] left-0 px-4 flex justify-center z-50 ">
            <div
                class=" lg:w-[1000px] lg:h-[250px] md:h-[200px] sm:h-[180px] h-[100px] bg-white px-2 rounded-lg shadow-md shadow-gray-400 flex justify-between items-center gap-4">
                <div>
                    <img class="lg:w-52 md:w-48 sm:w-40 w-10 h-auto" src="{{asset('asset/images/yeelowcar.png')}}"
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
                    <img class="lg:w-52 md:w-48 sm:w-40 w-10 h-auto" src="{{asset('asset/images/bluecar.png')}}"
                         alt="">
                </div>
            </div>
        </div>


        <div class="w-full px-4 flex justify-center">
            <div
                class="lg:w-[70%] md:w-[80%] sm:w-[90%] w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-4 py-[5px]">
                <div class="w-full flex flex-col gap-6 p-2">
                    <h2 class="uppercase font-bold lg:text-[40px] md:text-[30px] text-[25px]"> <span
                            class="text-[#15AEF1]">BUMBER REPAIR</span></h2>
                    <p class="text-black lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-medium font-[roboto]"
                       style="word-spacing: 10px;">As the experts in Bumper repairs, The Mobile Panel Shop Melbourne specialist can come to you for minor repairs or smash repairs and have your car looking like new within hours, you don’t even need to leave the office! However, if the damage is too major to fix on location, we can organise a replacement vehicle while we bring your car back to its original condition. So, don’t let an accident take more time away from your day than absolutely necessary. Contact The Mobile Panel Shop Melbourne and we can look after any dent repairs, bumper repairs, spray painting and most other minor or major panel beating work your car may require.Don’t take your precious car to just anyone, we are the experts at mobile dent repair and can complete the work in a fraction of the time it takes many other traditional body shops.</p>



                    <a href="{{route('home')}}"
                       class="lg:text-[25px] md:text-[20px] text-[14px] w-max text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">
                        LEARN MORE
                    </a>
                </div>
                <div class="w-full flex justify-center items-center">
                    <img src="{{asset('asset/images/Rectangle 72.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    {{--about section ends here    --}}


    {{--stats section start here--}}
    <div class="w-full  relative  bg-no-repeat bg-center bg-cover"
         style="background-image: url({{asset('asset/images/Rectangle79.png')}})">
        <div class="w-full flex justify-center bg-[#eeb21ce8]">
            <div class="lg:w-[80%] md:w-[90%] sm:w-[90%] w-full flex flex-col items-center gap-4 pt-[5px] px-4 py-2">
                <div class="w-full flex flex-col items-center px-2">
                    <h2 class="uppercase lg:text-[35px] md:text-[30px] text-center sm:text-[25px] text-[20px] text-black font-bold">
                        Contact us for a FREE smash</h2>
                    <h2 class="uppercase lg:text-[35px] md:text-[30px] text-center sm:text-[25px] text-[20px] text-black font-bold">
                        repair quote today!
                    </h2>
                    <a href="{{route('home')}}"
                        class=" uppercase lg:text-[20px] md:text-[20px] text-[14px] w-max text-[#eeb52a] bg-white px-4 py-2 font-bold  rounded-md border-[1px] border-[#eeb21ce8] transition ease-in duration-2000">
                        Years of experience
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{--stats section ends here    --}}

    {{--our gallery section start here--}}
    <div class="w-full  relative py-6">
        <div class="w-full  flex justify-center">
            <div class=" lg:w-[70%] md:w-[80%] sm:w-[90%] w-full flex flex-col items-center gap-6 py-[5px]">
                <h2 class="lg:text-[50px] md:text-[40px] sm:text-[35px] text-[30px] text-[#EEB21C] font-bold">OUR GALLERY</h2>
                <div class="max-w-[600px]">
                    <p class="text-black lg:leading-7 md:leading-2 lg:text-[16px] md:text-[13px] text-[12px] font-medium font-[roboto] text-center"
                       style="word-spacing: 10px;">Restore your car's pristine finish with our expert scratch repair services. Our skilled technicians use advanced techniques to
                        remove scratches and blemishes, ensuring your vehicle looks as good as new. Satisfaction guaranteed.</p>
                </div>


                <div class="swiffy-slider slider-nav-autoplay slider-item-show2">
                    <ul class="slider-container">
                        {{-- make copy of this li for dynamic slider --}}
                        <li class="w-full  relative">
                            <div class="grid grid-cols-2">
                                 <div class="w-full ">
                                     <img src="{{asset('asset/images/IMG_8378.GIF')}}" class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">

                                 </div>
                                 <div class="w-full ">
                                     <img src="{{asset('asset/images/IMG_8374.GIF')}}" class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                                 </div>
                            </div>
                        </li>
                        {{--slider copy ends here--}}
                        <li class="w-full  relative">
                            <div class="grid grid-cols-2">
                                <div class="w-full ">
                                    <img src="{{asset('asset/images/aa.jpg')}}" class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">

                                </div>
                                <div class="w-full ">
                                    <img src="{{asset('asset/images/IMG_8162.jpg')}}" class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                                </div>
                            </div>
                        </li>
                        <li class="w-full  relative">
                            <div class="grid grid-cols-2">
                                <div class="w-full ">
                                    <img src="{{asset('asset/images/IMG_8148.jpg')}}" class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">

                                </div>
                                <div class="w-full ">
                                    <img src="{{asset('asset/images/IMG_8153.jpg')}}" class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
                                </div>
                            </div>
                        </li>
                        <li class="w-full  relative">
                            <div class="grid grid-cols-2">
                                <div class="w-full ">
                                    <img src="{{asset('asset/images/IMG_7892.jpg')}}" class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">

                                </div>
                                <div class="w-full ">
                                    <img src="{{asset('asset/images/IMG_7897.jpg')}}" class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
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
    {{--our gallery section ends here    --}}


{{--    youtube video section--}}
    <div class="w-full  relative py-10">
        <div class="w-full px-4 flex justify-center">
            <div class="lg:w-[70%] md:w-[80%] sm:w-[90%] w-full rounded-[50px]">
                <iframe class="w-full h-[300px]" src="https://www.youtube.com/embed/6hGKtHKwV2g?si=rdrwWVLLOizFCbun"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
{{--    youtube video section ends --}}

    {{--about section start here--}}
    <div class="w-full  relative py-10"
         style="background-image: url({{asset('asset/images/bac.png')}})">
        <div class="w-full px-4 flex justify-center">
            <div class="lg:w-[70%] md:w-[80%] sm:w-[90%] w-full rounded-[50px]"
                 style="background-image: url({{asset('asset/images/Rectangle56.png')}});box-shadow: 0px 0px 10px 1px #25a8df">
                <div class="w-full flex flex-col items-center gap-2 p-2 bg-[#25a8df]/90 rounded-[50px]">
                    <h2 class=" lg:text-[45px] md:text-[40px] text-center sm:text-[35px] text-[25px] text-white font-bold">
                        Why Choose</h2>
                    <h2 class="uppercase lg:text-[45px] md:text-[40px] text-center sm:text-[35px] text-[25px] text-white font-bold">
                        MOBILE SMASH REPAIR?</h2>


                    <div class="w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-1 mt-6">
                        <div class="w-full flex justify-center items-center">
                            <img src="{{asset('asset/images/Mask group.png')}}" alt="">
                        </div>
                        <div class="flex flex-col gap-4">
                            <div class="flex gap-2">
                                <ul class="flex flex-col gap-8 pl-8"
                                    style="list-style-image: url({{asset('asset/images/Cariconn.png')}});">
                                    <li>
                                        <h2 class="uppercase  lg:text-[30px] md:text-[25px]  sm:text-[20px] text-[20px] text-white font-bold">
                                            experts in Small to Medium Accident Repair Technology</h2>
                                        <p class="text-white lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-normal font-[roboto]"
                                           style="word-spacing: 3px;">Our Franchisees not only own and run their own
                                            small business but are also industry qualified Automotive Spray Painters
                                            with years of experience utilizing the very latest in mobile repair
                                            technology.</p>

                                    </li>
                                    <li>
                                        <h2 class="uppercase lg:text-[30px] md:text-[25px]  sm:text-[20px] text-[20px] text-white font-bold">
                                            Cost Savings</h2>
                                        <p class="text-white lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-normal font-[roboto]"
                                           style="word-spacing: 3px;">Our prices are generally a fraction of that of a
                                            traditional repair shop and most often less than your insurance excess</p>

                                    </li>
                                    <li>
                                        <h2 class="uppercase lg:text-[30px] md:text-[25px]  sm:text-[20px] text-[20px] text-white font-bold">
                                            Our services are delivered at your convenience</h2>
                                        <p class="text-white lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-normal font-[roboto]"
                                           style="word-spacing: 3px;">Our prices are generally a fraction of that of a
                                            traditional repair shop and most often less than your insurance excess</p>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
    {{--about section ends here    --}}


    {{--what we offer section start here--}}
    <div class="w-full  relative py-6 rounded-t-[50px]"
         style="background-image: url({{asset('asset/images/bac.png')}});">
        <div class="w-full px-4 flex justify-center">
            <div class="lg:w-[70%] md:w-[80%] sm:w-[90%] w-full flex flex-col items-center gap-6 py-[5px]">
                <h2 class="lg:text-[50px] md:text-[40px] sm:text-[35px] text-[30px] text-[#EEB21C] font-bold">OTHER SERVICES</h2>
                <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-4">
                    <div class="bg-white rounded-3xl px-[20px] py-[30px] flex flex-col items-center"
                         style="box-shadow: 0px 0px 10px 1px #eeb21ca8;">
                        <img src="{{asset('asset/images/Car.png')}}" alt="">
                        <h2 class="uppercase lg:text-[35px] md:text-[30px] text-center sm:text-[25px] text-[20px] text-[#15AEF1] font-bold">
                            SMASH REPAIR</h2>
                        <p class="text-black lg:leading-7 md:leading-2 lg:text-[16px] md:text-[13px] text-[12px] font-medium font-[roboto] text-center"
                           style="word-spacing: 10px;">
                            As the experts in car smash repairs, The Mobile Panel Shop Melbourne specialist can come to
                            you for minor repairs or smash repairs and have your car can come to you for minor repairs
                            or smash repairs and have your car…
                        </p>

                        <a href="{{route('services-detail')}}"
                           class="mt-6 lg:text-[25px] md:text-[20px] text-[14px] w-max text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">
                            LEARN MORE
                        </a>
                    </div>
                    <div class="bg-white rounded-3xl px-[20px] py-[30px] flex flex-col items-center"
                         style="box-shadow: 0px 0px 10px 1px #0095e39c;">
                        <img src="{{asset('asset/images/caar.png')}}" alt="">
                        <h2 class="uppercase lg:text-[35px] md:text-[30px] text-center sm:text-[25px] text-[20px] text-[#eeb21c] font-bold">
                            Scratch Repair</h2>
                        <p class="text-black lg:leading-7 md:leading-2 lg:text-[16px] md:text-[13px] text-[12px] font-medium font-[roboto] text-center"
                           style="word-spacing: 10px;">
                            As the experts in car smash repairs, The Mobile Panel Shop Melbourne specialist can come to
                            you for minor repairs or smash repairs and have your car can come to you for minor repairs
                            or smash repairs and have your car…
                        </p>

                        <a href="{{route('services-detail')}}"
                           class="mt-6 lg:text-[25px] md:text-[20px] text-[14px] w-max text-white bg-[#EEB21C] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#EEB21C] hover:bg-white hover:text-[#EEB21C]  transition ease-in duration-2000">
                            LEARN MORE
                        </a>
                    </div>
                    <div class="bg-white rounded-3xl px-[20px] py-[30px] flex flex-col items-center"
                         style="box-shadow: 0px 0px 10px 1px #eeb21ca8;">
                        <img src="{{asset('asset/images/Car Crash.png')}}" alt="">
                        <h2 class="uppercase lg:text-[35px] md:text-[30px] text-center sm:text-[25px] text-[20px] text-[#15AEF1] font-bold">
                            DENT REPAIR</h2>
                        <p class="text-black lg:leading-7 md:leading-2 lg:text-[16px] md:text-[13px] text-[12px] font-medium font-[roboto] text-center"
                           style="word-spacing: 10px;">
                            As the experts in car smash repairs, The Mobile Panel Shop Melbourne specialist can come to
                            you for minor repairs or smash repairs and have your car can come to you for minor repairs
                            or smash repairs and have your car…
                        </p>

                        <a href="{{route('services-detail')}}"
                           class="mt-6 lg:text-[25px] md:text-[20px] text-[14px] w-max text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">
                            LEARN MORE
                        </a>
                    </div>

                </div>
                <div class="w-full  flex justify-center">
                    <a href="{{route('services')}}"
                       class="mt-6 lg:text-[25px] md:text-[20px] text-[14px] w-max text-white bg-[#EEB21C] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#EEB21C] hover:bg-white hover:text-[#EEB21C]  transition ease-in duration-2000">
                        SHOW MORE
                    </a>
                </div>

            </div>
        </div>
    </div>
    {{--what we offer section ends here    --}}

    <div class="w-full  relative py-6">
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
                        <a href="{{route('home')}}"
                           class="lg:text-[20px] md:text-[18px] text-[14px] w-max text-white bg-[#EEB21C] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#EEB21C] hover:bg-white hover:text-[#EEB21C]  transition ease-in duration-2000">
                            GET FREE ESTIMATE
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
