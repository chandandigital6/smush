@extends('front_end.components.layout',['seos' => $seos])
@section('content')

    {{-- slider section start here --}}
    {{-- <div class="swiffy-slider">
        <ul class="slider-container">
            <li class="w-full relative">
                <img src="{{asset('asset/images/Rectangle 42.png')}}"
                     class="w-full lg:h-[450px] md:h-[400px] sm:h-[400px] h-[300px] object-cover">
                <div class="absolute top-0 left-0 w-full h-full bg-black/70 flex justify-center items-center px-4">
                    <div class="w-max h-max flex flex-col items-center gap-4">
                        <span class="uppercase text-[#EEB21C] text-[22px] font-bold">Thank You!</span>
                        <div class="lg:w-[1000px] md:w-[700px] sm:w-[500px] w-[350px] text-center">
                            <p class="text-white font-bold lg:text-[80px] md:text-[60px] sm:text-[40px] text-[30px]">

                            </p>
                        </div>
                        <div class="flex gap-4">
                            <a href="{{ route('services') }}"
                               class="lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#eeb21c] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#eeb21c] hover:bg-white hover:text-[#eeb21c] transition ease-in duration-2000">
                                SERVICES
                            </a>
                            <a href="{{ route('contact') }}"
                               class="lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1] transition ease-in duration-2000">
                                ENQUIRY
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div> --}}
    {{-- slider section ends here --}}

    {{-- Thank You section start here --}}
    <div class="w-full bg-[#f9f9f9] py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-[#333] text-[36px] font-bold mb-4">Thank You!</h2>
            <p class="text-[#666] text-[18px] mb-6">
                We appreciate your interest in our service. Your submission has been received and we will review it as soon as possible.
                Our team will be in touch with you shortly regarding your inquiry.
            </p>
            {{-- <p class="text-[#666] text-[18px] mb-6">
                We have received your information.
            </p> --}}
            <a href="{{ route('home') }}"
               class="text-white bg-[#eeb21c] px-6 py-3 font-bold rounded-md border-[1px] border-[#eeb21c] hover:bg-white hover:text-[#eeb21c] transition ease-in duration-200">
                Back to Home
            </a>
        </div>
    </div>
    {{-- Thank You section ends here --}}

@endsection
