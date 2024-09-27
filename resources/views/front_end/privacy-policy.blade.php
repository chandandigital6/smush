@extends('front_end.components.layout',['seos' => $seos])
@section('content')

    {{-- slider section start here --}}
    <div class="swiffy-slider ">
        <ul class="slider-container">
            <li class="w-full relative">
                <img src="{{asset('asset/images/Rectangle 42.png')}}"
                     class="w-full lg:h-[450px] md:h-[400px] sm:h-[400px] h-[300px] object-cover" alt="Privacy Policy- Mobile Smash Repair">
                <div class="absolute top-0 left-0 w-full h-full bg-black/70 flex justify-center items-center px-4">
                    <div class="w-max h-max flex flex-col items-center gap-4">
                        <span class="uppercase text-[#EEB21C] text-[22px] font-bold">Privacy Policies</span>
                        <div class="lg:w-[1000px] md:w-[700px] sm:w-[500px] w-[350px] text-center">
                            <h1 class="text-white font-bold lg:text-[80px] md:text-[60px] sm:text-[40px] text-[30px]">
                                Our Privacy Policies
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
                            class="text-[#15AEF1]">Our Privacy Policies</span></h2>


                    <p class="text-black lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-normal font-[montserrat]"
                       style="word-spacing: 10px;">
                        At Mobile Smash Repair, safeguarding your privacy is our utmost priority. We do not rent or lease customer data, and our policy is meticulously crafted to protect the personal information collected through
                        <a href="/" class="text-[#15AEF1]">www.mobilesmashrepair.com</a> or directly from you.
                    </p>
                    <p class="text-black lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-normal font-[montserrat]"
                       style="word-spacing: 10px;">
                        We encourage you to review our policy, and please feel free to reach out with any questions or concerns you might have.
                    </p>
                    <p class="text-black lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-normal font-[montserrat]"
                       style="word-spacing: 10px;">
                        <strong class="text-[#15AEF1]"> Personal Information:</strong> We gather various types of personal data, as detailed on our website. If we acquire your information from a third party, we handle it in line with this Privacy Policy.
                    </p>
                    <p class="text-black lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-normal font-[montserrat]"
                       style="word-spacing: 10px;">
                        <strong class="text-[#15AEF1]"> Use of Personal Information:</strong> Your personal data is used for multiple purposes, including marketing, maintaining internal records, and communicating with you.
                    </p>
                    <p class="text-black lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-normal font-[montserrat]"
                       style="word-spacing: 10px;">
                        <strong class="text-[#15AEF1]"> Disclosure of Personal Information:</strong> We may disclose your personal data when necessary to deliver products or services or as required by law. When sharing your information with third parties, we ensure they adhere to our privacy policy.
                    </p>
                    <p class="text-black lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-normal font-[montserrat]"
                       style="word-spacing: 10px;">
                        <strong class="text-[#15AEF1]"> Security and Storage:</strong> We are dedicated to protecting the information you provide.
                    </p>
                    <p class="text-black lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-normal font-[montserrat]"
                       style="word-spacing: 10px;">
                        <strong class="text-[#15AEF1]"> Policy Updates:</strong> We may periodically update this privacy statement to ensure it complies with current regulations. Any changes will be posted on our website.
                    </p>
                    <p class="text-black lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-normal font-[montserrat]"
                       style="word-spacing: 10px;">
                        <strong class="text-[#15AEF1]"> Complaints: </strong> If you believe we have breached Australian Privacy Principles, please contact us via email to lodge a complaint.
                    </p>
                    <p class="text-black lg:leading-7 md:leading-2 lg:text-[18px] md:text-[13px] text-[12px] font-normal font-[montserrat]"
                       style="word-spacing: 10px;">
                        <strong class="text-[#15AEF1]"> Email Notifications: </strong> We may use your email address to send you information about special offers, products, or services. You'll only receive emails if you've given us permission, and each email will include an option to unsubscribe from our mailing list.
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
