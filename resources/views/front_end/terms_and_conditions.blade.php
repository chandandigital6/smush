@extends('front_end.components.layout',['seos' => $seos])
@section('content')

    {{-- slider section start here --}}
    <div class="swiffy-slider ">
        <ul class="slider-container">
                <li class="w-full relative">
                    <img src="{{asset('asset/images/Rectangle 42.png')}}"
                         class="w-full lg:h-[450px] md:h-[400px] sm:h-[400px] h-[300px] object-cover">
                    <div class="absolute top-0 left-0 w-full h-full bg-black/70 flex justify-center items-center px-4">
                        <div class="w-max h-max flex flex-col items-center gap-4">
                            <span class="uppercase text-[#EEB21C] text-[22px] font-bold">Terms and Conditions</span>
                            <div class="lg:w-[1000px] md:w-[700px] sm:w-[500px] w-[350px] text-center">
                                <h1 class="text-white font-bold lg:text-[80px] md:text-[60px] sm:text-[40px] text-[30px]">
                                     Our Terms and Conditions
                                </h1>
                            </div>
                            <div class="flex gap-4">
                                <a href="{{ route('services') }}"
                                   class="lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#eeb21c] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#eeb21c] hover:bg-white hover:text-[#eeb21c]  transition ease-in duration-2000">
                                    SERVICES
                                </a>
                                <a href="{{ route('contact') }}"
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
    {{-- slider section ends here --}}



    {{--about section start here--}}
    <div class="w-full  relative lg:pt-[250px] md:pt-[200px] sm:pt-[180px] pt-[100px]"
         style="background-image: url({{asset('asset/images/bac.png')}})">
        @include('front_end.components.carSection')



        <div class="w-full px-4 flex justify-center">
                <div
                    class="lg:w-[90%] md:w-[90%] sm:w-[90%] w-full grid grid-cols-1 gap-4 py-[5px]">
                    <div class="w-full flex flex-col  p-2">
                        <h2 class="uppercase font-bold lg:text-[30px] md:text-[30px] text-[25px] text-left mb-6"><span
                                class="text-[#15AEF1]">Our Terms and Conditions</span></h2>


                        <p class="text-black lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-normal font-[montserrat]"
                           style="word-spacing: 10px;">
                           <strong class="text-[#15AEF1]"> Cookies:</strong> By browsing our website, Mobile Smash Repair, you consent to our use of cookies as described in our privacy policy.
                        </p>
                        <p class="text-black lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-normal font-[montserrat]"
                           style="word-spacing: 10px;">
                            <strong class="text-[#15AEF1]"> Copyright:</strong> All content on Mobile Smash Repair is owned by Mobile Smash Repair or its licensors and is protected under copyright law.
                        </p>
                        <p class="text-black lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-normal font-[montserrat]"
                           style="word-spacing: 10px;">
                            <strong class="text-[#15AEF1]"> Restrictions:</strong> You are prohibited from republishing, reproducing, duplicating, selling, or renting any material from
                            <a href="www.mobilesmashrepair.com" class="text-[#15AEF1]">www.mobilesmashrepair.com</a>
                        </p>
                        <p class="text-black lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-normal font-[montserrat]"
                           style="word-spacing: 10px;">
                            <strong class="text-[#15AEF1]"> Linking Terms:</strong> We reserve the right to request the removal of any links to our website at our discretion. By continuing to link to our website, you agree to comply with these terms.
                        </p>
                        <p class="text-black lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-normal font-[montserrat]"
                           style="word-spacing: 10px;">
                            <strong class="text-[#15AEF1]"> IFrames:</strong> You are not permitted to create frames around our web pages or use techniques that alter the visual presentation of our website without prior written approval.
                        </p>
                        <p class="text-black lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-normal font-[montserrat]"
                           style="word-spacing: 10px;">
                            <strong class="text-[#15AEF1]"> Link Removal:</strong> If you find any objectionable links on our website, please notify us. While we may consider removing them, we are not obligated to do so.
                        </p>
                        <p class="text-black lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-normal font-[montserrat]"
                           style="word-spacing: 10px;">
                            <strong class="text-[#15AEF1]"> Accuracy Disclaimer:</strong> Although we strive to ensure the accuracy and completeness of the information on our website, we cannot guarantee it and cannot promise uninterrupted availability.
                        </p>



                        {{--                        <a href="{{route('contact')}}"--}}
                        {{--                           class="lg:text-[25px] md:text-[20px] text-[14px] w-max text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">--}}
                        {{--                            LEARN MORE--}}
                        {{--                        </a>--}}
                    </div>

                </div>
        </div>
    </div>
    {{--about section ends here    --}}








@endsection
