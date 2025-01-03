@extends('front_end.components.layout', ['seos' => $seos])
@section('content')
<style>
    @media (min-width: 767px) and (max-width: 1023px) {
        #top-inquiry-form img {
            height: 900px;
            /* Set your desired height */
        }
    }


    .new-gallery,
    .new-gallery::after,
    .new-gallery::before {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .new-main {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1rem;
        /* Reduced gap between sliders */
    }

    .new-container {
        position: relative;
        overflow: hidden;
        border-radius: 1rem;
        --position: 50%;
        width: 100%;
        max-width: 350px;
        /* Adjusted maximum width */
        margin: 0 auto;
    }

    .new-image-container {
        max-width: 100%;
        max-height: 90vh;
        aspect-ratio: 1/1;
        position: relative;
    }

    .new-slider-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: left;
    }

    .new-image-before {
        position: absolute;
        inset: 0;
        width: var(--position);
    }

    .new-slider {
        position: absolute;
        inset: 0;
        cursor: pointer;
        opacity: 0;
        width: 100%;
        height: 100%;
    }

    .new-slider:focus-visible~.new-slider-button {
        outline: 5px solid black;
        outline-offset: 3px;
    }

    .new-slider-line {
        position: absolute;
        inset: 0;
        width: 0.2rem;
        height: 100%;
        background-color: #fff;
        left: var(--position);
        transform: translateX(-50%);
        pointer-events: none;
    }

    .new-slider-button {
        position: absolute;
        background-color: #fff;
        color: black;
        padding: 0.5rem;
        border-radius: 100vw;
        display: grid;
        place-items: center;
        top: 50%;
        left: var(--position);
        transform: translate(-50%, -50%);
        pointer-events: none;
        box-shadow: 1px 1px 1px hsl(0, 50%, 2%, 0.5);
    }

    /* Responsive Layout */
    @media (min-width: 768px) {
        .new-main {
            grid-template-columns: repeat(2, 1fr);
            /* Two columns layout */
            gap: 2rem;
            /* Adjust gap between columns */
        }
    }

    @media (max-width: 400px) {
        .sm\\:w-400 {
            width: 100%;
        }

        .p-12 {
            padding: 8px;
        }

        .text-4xl {
            font-size: 1.5rem;
        }

        .px-4 {
            padding-left: 8px;
            padding-right: 8px;
        }

        .py-2 {
            padding-top: 4px;
            padding-bottom: 4px;
        }

        .mt-4 {
            margin-top: 2px;
        }

        .mt-6 {
            margin-top: 4px;
        }
    }

    @media (max-width: 250px) {
        .p-12 {
            padding: 4px;
        }

        .text-4xl {
            font-size: 1.25rem;
        }

        .px-4 {
            padding-left: 4px;
            padding-right: 4px;
        }

        .py-2 {
            padding-top: 2px;
            padding-bottom: 2px;
        }

        .mt-4 {
            margin-top: 1px;
        }

        .mt-6 {
            margin-top: 2px;
        }
    }

    /* css for dropzone */
    .dropzone-main {
        padding: 8px;
        background: white;
        border-radius: 0.375rem;
    }

    .dropzone {
        border: 2px dashed #EEB21C;
        border-radius: 0.375rem;
        background: white;
        padding: 20px;
        text-align: center;
        font: 20px Helvetica, Arial, sans-serif;
    }

    .dropzone-list,
    .dropzone-list2 {
        background: white;
    }

    .dropzone-item {
        padding: 8px;
        margin-top: 8px;
        border-bottom: 5px #EEB21C;
        background: #ededed;
        border-radius: 4px;
    }

    .d-none {
        display: none;
    }

    .dropzone-sub-title {
        font-size: 14px;
        color: gray;
    }

    .dropzone-img {
        width: 40px;
        height: 40px !important;
        object-fit: cover;
    }

    .dropzone-remove {
        cursor: pointer;
        color: red;
        font-size: 10px;
    }
</style>
{{-- slider section start here --}}
<div class="swiffy-slider" id="top-inquiry-form" style="width: 100%;">
    <ul class="slider-container">
        <li class="w-full relative">
            <img src="{{ asset('asset/images/image2.jpg') }}" class="w-full lg:h-[700px] md:h-[500px] sm:h-[1200px] h-[1100px] object-cover" alt="Mobile Smash Repair Services">
            <div class="absolute top-0 left-0 w-full h-full bg-black/70 flex justify-center items-center px-4">
                <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between gap-4 px-4">
                    <div class="w-full lg:w-1/2 flex flex-col items-center lg:items-start text-center lg:text-left">
                        @foreach($serviceHeader as $serviceHead)
                        <div class="flex flex-col gap-2">
                            <div class="w-full max-w-lg">
                                <h1 class="uppercase text-white font-bold text-[24px] sm:text-[20px] md:text-[30px] lg:text-[50px]">
                                    {{ $serviceHead->title }}
                                </h1>
                            </div>
                            <ul class="list-disc text-yellow-500 ml-5 text-left">
                                <li><span class="text-white lg:text-[26px] text-[20px] font-bold">
                                        {{$serviceHead->f}}
                                    </span></li>
                                <li><span class="text-white lg:text-[26px] text-[20px] font-bold"> {{$serviceHead->f_1}} </span>
                                </li>
                                <li><span class="text-white lg:text-[26px] text-[20px] font-bold">

                                        {{$serviceHead->f_2}}
                                    </span></li>
                            </ul>
                        </div>
                        @endforeach
                    </div>

                    <div class="w-full lg:w-1/2 mt-4 lg:mt-0">
                        <div class="flex flex-col items-center w-full">
                            <form action="{{ route('appointment.store') }}" method="post" class="w-[95%] sm:w-[90%] md:w-[80%] lg:w-full mt-2 space-y-2 bg-black/50 rounded-md px-2 py-1 sm:space-y-1 sm:px-2 sm:py-2 md:space-y-1 md:px-3 md:py-3 lg:py-4" enctype="multipart/form-data">
                                <span class="uppercase text-[#ffffff] text-[14px] sm:text-[16px] md:text-[18px] lg:text-[20px] text-center font-bold">
                                    MAKE YOUR INQUIRY NOW
                                </span>
                                <br>
                                <span class="uppercase text-[#EEB21C] text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] font-bold">
                                    10% off on your first repair + Free Touch ups included
                                </span>
                                @csrf
                                <div class="flex flex-col gap-2 w-full md:flex-row md:gap-4">
                                    <div class="flex flex-col gap-1 w-full md:w-1/2">
                                        <label for="name" class="text-[#ffffff] text-xs sm:text-sm md:text-base">Name</label>
                                        <input type="text" name="name" id="name" placeholder="Your full name" class="text-gray-600 bg-[#ffffff] border-[1px] border-[#ffffff]/70 px-1 py-0.5 sm:px-2 sm:py-1 md:px-4 md:py-2 focus:outline-none focus:ring-0 focus:border-[#eeb21c] rounded-md">
                                    </div>
                                    <div class="flex flex-col gap-1 w-full md:w-1/2">
                                        <label for="email" class="text-[#ffffff] text-xs sm:text-sm md:text-base">Email</label>
                                        <input type="email" name="email" id="email" placeholder="Your Email" class="text-gray-600 bg-[#ffffff] border-[1px] border-[#ffffff]/70 px-1 py-0.5 sm:px-2 sm:py-1 md:px-4 md:py-2 focus:outline-none focus:ring-0 focus:border-[#eeb21c] rounded-md">
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2 w-full md:flex-row md:gap-4">
                                    <div class="flex flex-col gap-1 w-full md:w-1/2">
                                        <label for="number" class="text-[#ffffff] text-xs sm:text-sm md:text-base">Mobile Number</label>
                                        <input type="text" name="number" id="number" placeholder="Your number" class="text-gray-600 bg-[#ffffff] border-[1px] border-[#ffffff]/70 px-1 py-0.5 sm:px-2 sm:py-1 md:px-4 md:py-2 focus:outline-none focus:ring-0 focus:border-[#eeb21c] rounded-md">
                                    </div>
                                    <div class="flex flex-col gap-1 w-full md:w-1/2">
                                        <label for="car_model" class="text-[#ffffff] text-xs sm:text-sm md:text-base">Car Model</label>
                                        <input type="text" name="car_model" id="car_model" placeholder="Your car model" class="text-gray-600 bg-[#ffffff] border-[1px] border-[#ffffff]/70 px-1 py-0.5 sm:px-2 sm:py-1 md:px-4 md:py-2 focus:outline-none focus:ring-0 focus:border-[#eeb21c] rounded-md">
                                    </div>
                                </div>
                                <div class="w-full flex flex-col gap-1">
                                    <label for="car_image" class="text-[#ffffff] text-xs sm:text-sm md:text-base">Damage Image</label>
                                    {{-- dropzone element here --}}
                                    <div class="dropzone-main">
                                        <div action="/appointment/image" class="dropzone" id="my-awesome-dropzone">
                                            <div class="dz-message" data-dz-message><span>Click or drag files to this area to upload.</span><br><span class="dropzone-sub-title">You can upload up to 3 files.</span></div>
                                        </div>
                                        <div class="dropzone-list d-none" id="car_image_list"></div>
                                    </div>
                                </div>
                                <div class="w-full flex flex-col gap-1">
                                    <label for="msg" class="text-[#ffffff] text-xs sm:text-sm md:text-base">Message</label>
                                    <textarea name="msg" id="msg" placeholder="Your message" rows="2" class="text-gray-600 bg-[#ffffff] border-[1px] border-[#ffffff]/70 px-1 py-0.5 sm:px-2 sm:py-1 md:px-4 md:py-2 focus:outline-none focus:ring-0 focus:border-[#eeb21c] rounded-md"></textarea>
                                </div>
                                <div class="w-full flex flex-col gap-1">
                                    <button type="submit" id="submitButton" class="text-[20px] sm:text-[12px] md:text-[14px] lg:text-[16px] w-max text-white bg-[#eeb21c] px-2 py-1 sm:px-3 sm:py-1 md:px-4 md:py-2 font-bold rounded-md border-[1px] border-[#ffffff] hover:bg-white hover:text-[#eeb21c] transition ease-in duration-200 flex items-center justify-center space-x-2">
                                        <span id="buttonText">Submit</span>
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
{{-- slider section end here --}}


{{-- about section start here --}}
<div class="w-full  relative lg:pt-[250px] md:pt-[200px] sm:pt-[180px] pt-[100px]" style="background-image: url()">

    <div class="w-full h-max absolute -top-[50px] left-0 px-4 flex justify-center z-10 py-4 ">
        <div class=" lg:w-[1000px] lg:h-[250px] md:h-[200px] sm:h-[200px] h-[120px] bg-white px-2 rounded-lg shadow-md shadow-gray-400 flex justify-between items-center gap-0">
            <div>
                <img class="lg:w-52 md:w-48 sm:w-40 w-24 h-auto" src="{{ asset('asset/images/yeelowcar.png') }}" alt="Mobile Smash Repair Services">
            </div>
            <div class="flex flex-col gap-1 items-center py-2">
                <span class="font-bold lg:text-[34px] md:text-[21px] sm:text-[17px] text-[10px]">GET YOUR FREE ESTIMATE
                    NOW</span>
                {{-- <span class="font-bold lg:text-[23px] md:text-[15px] sm:text-[10px] text-[10px] text-[#EEB21C] text-center">SIMPLY SEND US PHOTOS OF THE DAMAGE!"</span> --}}
                {{-- <h5 class="font-bold lg:text-[20px] md:text-[20px] sm:text-[17px] text-[10px]"> --}}
                {{-- quote@mobilesmashrepair.com</h5> --}}
                {{-- <h5 class="font-bold lg:text-[30px] md:text-[20px] sm:text-[17px] text-[10px]">OR</h5> --}}
                <a href="#top-inquiry-form" class=" lg:text-[20px] md:text-[20px] sm:text-[14px] text-[7px] w-max text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-full border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">
                    CLICK HERE
                </a>
            </div>
            <div>
                <img class="lg:w-52 md:w-48 sm:w-40 w-24 h-auto" src="{{ asset('asset/images/bluecar.png') }}" alt="Mobile Smash Repair Services">
            </div>
        </div>
    </div>





</div>
{{-- about section ends here    --}}

{{-- our gallery section start here --}}
<div class="w-full relative py-6">
    <div class="w-full flex justify-center">
        @foreach ($serviceGallery as $logo)
        <div class="w-full flex flex-col items-center gap-6 py-[5px]">
            <h2 class="lg:text-[50px] md:text-[40px] sm:text-[35px] text-[30px] text-[#EEB21C] font-bold">
                {{ $logo->title }}
            </h2>
            <div class="max-w-[600px]">
                <p class="text-black lg:leading-7 md:leading-2 lg:text-[16px] md:text-[16px] text-[16px] font-medium font-[montserrat] text-center">
                    {{ $logo->msg }}
                </p>
            </div>
            <div class="swiffy-slider slider-nav-autoplay slider-item-show4">
                <ul class="slider-container">
                    @if (is_string($logo->image) && !empty($logo->image))
                    @php
                    $imagePaths = explode(',', $logo->image);
                    @endphp
                    @foreach ($imagePaths as $imagePath)
                    <li class="w-full relative">
                        <img src="{{ asset('storage/' . $imagePath) }}" alt="Mobile Smash Repair Services" class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">
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

<!-- OUR WORK START -->
<div class="mt-10 mb-10">
    <div class="mx-auto w-full sm:w-10/12 md:w-8/12 mb-9">
        <h2 class="lg:text-[50px] text-center md:text-[40px] sm:text-[35px] text-[30px] text-[#EEB21C] font-bold">
            OUR WORK
        </h2>
        <p class="text-black mt-5 lg:leading-7 md:leading-6 text-[16px] font-medium font-[montserrat] text-center">
            Experience the magic of Mobile Smash Company's car repair services - where we transform damaged vehicles
            into showroom-ready masterpieces. Our skilled technicians and cutting-edge techniques guarantee jaw-dropping
            results, leaving your car looking better than ever before.
        </p>
    </div>

    <div class="new-gallery">
        <main class="new-main flex flex-wrap justify-center">
            <!-- Slider Pairs -->
            @foreach($serviceBefore as $serviceBe)


            <div class="new-container w-full sm:w-1/2 md:w-1/3 p-2">
                <div class="new-image-container">
                    <img class="new-image-before new-slider-image" src="{{ asset('storage/'.$serviceBe->image_before) }}" alt="Mobile Smash Repair Services" />
                    <img class="new-image-after new-slider-image" src="{{ asset('storage/'.$serviceBe->image_after) }}" alt="Mobile Smash Repair Services" />
                </div>
                <input type="range" min="0" max="100" value="50" aria-label="Percentage of before photo shown" class="new-slider" />
                <div class="new-slider-line" aria-hidden="true"></div>
                <div class="new-slider-button" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" viewBox="0 0 256 256">
                        <rect width="256" height="256" fill="none"></rect>
                        <line x1="128" y1="40" x2="128" y2="216" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16">
                        </line>
                        <line x1="96" y1="128" x2="16" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16">
                        </line>
                        <polyline points="48 160 16 128 48 96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                        <line x1="160" y1="128" x2="240" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16">
                        </line>
                        <polyline points="208 96 240 128 208 160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                    </svg>
                </div>
            </div>
            @endforeach
            <!-- Repeat for each additional slider -->
            <!-- Slider Pairs -->

            <!-- Slider Pairs -->

        </main>
    </div>
</div>
<!-- OUR WORK END -->



{{-- stats section start here --}}
<div class="w-full relative bg-no-repeat bg-center bg-cover" style="background-image: url({{ asset('asset/images/Rectangle79.jpg') }})">
    <div class="w-full flex justify-center bg-[#eeb21ce8] p-4 sm:p-10">
        <div class="w-full lg:w-[90%] md:w-[90%] sm:w-[90%] flex flex-col items-center gap-4 pt-2 sm:pt-[5px] px-2 sm:px-4 py-2">
            <div class="w-full flex flex-col items-center px-2">
                <h2 class="uppercase text-center text-black font-bold lg:text-[52px] md:text-[30px] sm:text-[25px] text-[18px]">
                    Contact us for a FREE smash
                </h2>
                <h2 class="uppercase text-center text-black font-bold lg:text-[52px] md:text-[30px] sm:text-[25px] text-[18px]">
                    repair quote today!
                </h2>
                <a href="#top-inquiry-form" onclick="slowScrollToTop()" class="uppercase text-[#eeb52a] bg-white px-6 py-2 sm:px-12 sm:py-4 font-bold rounded-xl border-[1px] border-[#eeb21ce8] transition duration-200 ease-in-out hover:text-white hover:bg-[#15aef1] lg:text-[32px] md:text-[32px] text-[14px] sm:text-[18px]">
                    GET FREE ESTIMATE
                </a>
            </div>
        </div>
    </div>
</div>
{{-- stats section ends here --}}


{{-- our clients section start here --}}
<div class="w-full relative py-6">
    <div class="w-full flex justify-center">
        <div class="w-full flex flex-col items-center gap-6 py-4 px-4" style="background-image: url({{ asset('asset/images/Rectangle43.jpg') }});background-repeat: no-repeat; background-size: cover">
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
                <button type="button" class="slider-nav flex items-center justify-center w-12 h-12 bg-[#eeb21c] text-white rounded-full shadow-lg border-2 border-white absolute top-1/2 transform -translate-y-1/2 left-4 hover:bg-[#d19c1a] transition duration-300 ease-in-out focus:outline-none z-10">
                    <i class="fa fa-arrow-left text-2xl"></i>
                </button>
                <button type="button" class="slider-nav slider-nav-next flex items-center justify-center w-12 h-12 bg-[#eeb21c] text-white rounded-full shadow-lg border-2 border-white absolute top-1/2 transform -translate-y-1/2 right-4 hover:bg-[#d19c1a] transition duration-300 ease-in-out focus:outline-none z-10">
                    <i class="fa fa-arrow-right text-2xl"></i>
                </button>
            </div>
        </div>
    </div>
</div>
{{-- our clients section ends here --}}


{{-- 3 SIMPLE STEPS START --}}

<div class=" p-4 sm:p-6 md:p-10">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-pink-600 mb-2 sm:mb-4">3 SIMPLE STEPS</h2>
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4 sm:mb-6">UPLOAD YOUR PHOTOS TO GET A FAST QUOTE</h2>
        <p class="text-base sm:text-lg mb-6 sm:mb-10">Just follow the prompts and you'll be done within minutes!</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 lg:gap-8">
            <div class="relative p-2 sm:p-4 md:p-6">
                <img src="{{ asset('asset/images/1.jpg') }}" alt="Mobile Smash Repair Services" class="w-full h-auto sm:h-60 md:h-72 lg:h-80 object-fit transition duration-300 transform hover:scale-105" >
            </div>

            <div class="relative p-2 sm:p-4 md:p-6">
                <img src="{{ asset('asset/images/2.jpg') }}" alt="Mobile Smash Repair Services" class="w-full h-auto sm:h-60 md:h-72 lg:h-80 object-fit transition duration-300 transform hover:scale-105" >
            </div>

            <div class="relative p-2 sm:p-4 md:p-6">
                <img src="{{ asset('asset/images/3.jpg') }}" alt="Mobile Smash Repair Services" class="w-full h-auto sm:h-60 md:h-72 lg:h-80 object-fit transition duration-300 transform hover:scale-105" >
            </div>
        </div>
    </div>
</div>

{{-- 3 SIMPLE STEPS END --}}

{{-- about --}}

<div class="w-full flex justify-center">
    <div class="lg:w-[90%] md:w-[90%] sm:w-[90%] w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-4 py-[5px]">
        <div class="w-full flex flex-col gap-6 p-2">
            <h2 class="uppercase font-bold lg:text-[40px] md:text-[30px] text-[25px]"> <span class="text-[#15AEF1]">{{ $service->heading }}</span></h2>
            <p class="text-black lg:leading-7 md:leading-2 lg:text-[20px] md:text-[18px] text-[16px] font-medium font-[montserrat]">

                {!! $service->description !!}

            </p>



            {{-- <a href="{{route('contact')}}" --}}
            {{-- class="lg:text-[25px] md:text-[20px] text-[14px] w-max text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000"> --}}
            {{-- LEARN MORE --}}
            {{-- </a> --}}
        </div>
        <div class="w-full flex justify-center items-center">
            <img src="{{ asset('storage/' . $service->service_image) }}" alt="Mobile Smash Repair Services">
        </div>
    </div>
</div>

{{-- youtube video section --}}
<div class="w-full relative py-10">
    <div class="w-full px-4 flex justify-center">
        @foreach ($serviceVideo as $serviceVideos)
        {{-- {{$serviceVideos->youtube_url_embed}} --}}
        <iframe width="668" height="376" src="{{ $serviceVideos->youtube_url_embed }}" title="Libaas [Slowed + Reverb] - Kaka | Ginni Kapoor | Punjabi Lofi Song | Chillwithbeats | Textaudio" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        @endforeach


    </div>
</div>

{{-- youtube video section ends --}}

{{-- about section start here --}}
<div class="w-full  relative py-10" style="background-image: url()">
    <div class="w-full px-4 flex justify-center">
        @foreach ($serviceChooseUs as $choos)
        {{-- @foreach ($chooseUs as $choos)--}}
        <div class="lg:w-[90%] md:w-[90%] sm:w-[90%] w-full rounded-[50px]" style="background-image: url({{ asset('asset/images/Rectangle56.jpg') }}); box-shadow: 0px 0px 10px 1px #25a8df">
            <div class="w-full flex flex-col items-center gap-2 p-2 bg-[#25a8df]/90 rounded-[50px]">
                <h2 class="lg:text-[45px] md:text-[40px] text-center sm:text-[35px] text-[25px] text-white font-bold">
                    {{ $choos->title }}
                </h2>
                <h2 class="uppercase lg:text-[45px] md:text-[40px] text-center sm:text-[35px] text-[25px] text-white font-bold">
                    {{ $choos->heading }}
                </h2>

                <div class="w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-1 mt-6">
                    <div class="w-full flex justify-center items-center">
                        <img src="{{ asset('storage/' . $choos->image) }}" alt="Mobile Smash Repair Services">
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="flex gap-2">
                            <ul class="flex flex-col gap-8 pl-8" style="list-style-image: url({{ asset('storage/' . $choos->f_image) }});">
                                <li>
                                    <h2 class="uppercase lg:text-[30px] md:text-[25px] sm:text-[20px] text-[20px] text-white font-bold">
                                        {{ $choos->f_title }}
                                    </h2>
                                    <p class="text-white lg:leading-7 md:leading-2 lg:text-[18px] md:text-[16px] text-[16px] font-normal font-[montserrat]" style="word-spacing: 3px;">
                                        {!! $choos->f_msg !!}
                                    </p>
                                </li>
                                <li>
                                    <h2 class="uppercase lg:text-[30px] md:text-[25px] sm:text-[20px] text-[20px] text-white font-bold">
                                        {{ $choos->f_1_title }}
                                    </h2>
                                    <p class="text-white lg:leading-7 md:leading-2 lg:text-[18px] md:text-[16px] text-[16px] font-normal font-[montserrat]" style="word-spacing: 3px;">
                                        {!! $choos->f_1_msg !!}
                                    </p>
                                </li>
                                <li>
                                    <h2 class="uppercase lg:text-[30px] md:text-[25px] sm:text-[20px] text-[20px] text-white font-bold">
                                        {{ $choos->f_2_title }}
                                    </h2>
                                    <p class="text-white lg:leading-7 md:leading-2 lg:text-[18px] md:text-[16px] text-[16px] font-normal font-[montserrat]" style="word-spacing: 3px;">
                                        {!! $choos->f_2_msg !!}
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- @endforeach--}}
        @endforeach
    </div>

</div>
{{-- about section ends here    --}}


{{-- what we offer section start here --}}
<div class="w-full  relative py-6 rounded-t-[50px]" style="background-image: url();">
    <div class="w-full px-4 flex justify-center">
        <div class="lg:w-[90%] md:w-[90%] sm:w-[90%] w-full flex flex-col items-center gap-6 py-[5px]">
            <h2 class="lg:text-[50px] md:text-[40px] sm:text-[35px] text-[30px] text-[#EEB21C] font-bold">OTHER
                SERVICES</h2>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-4">
                @foreach ($services->take(6) as $service)
                @php
                // Split the description into an array of words
                $words = explode(' ', strip_tags($service->description)); // Use strip_tags to remove any HTML tags

                // Get the first 20 words
                $first20Words = array_slice($words, 0, 20);

                // Join the first 20 words back into a string
                $shortDescription = implode(' ', $first20Words);
                @endphp

                <div class="bg-white rounded-3xl px-[20px] py-[30px] flex flex-col items-center" style="box-shadow: 0px 0px 10px 1px #eeb21ca8;">
                    <img src="{{ asset('storage/' . $service->image) }}" alt="Mobile Smash Repair Services">
                    <h2 class="uppercase lg:text-[35px] md:text-[30px] text-center sm:text-[25px] text-[20px] text-[#15AEF1] font-bold">
                        {{ $service->heading }}
                    </h2>
                    <p class="text-black lg:leading-7 md:leading-2 lg:text-[20px] md:text-[18px] text-[16px] font-medium font-[montserrat] text-center">
                        {!! $shortDescription !!}
                    </p>

                    <a href="{{ route('service.show', ['title' => $service->title]) }}" class="mt-6 lg:text-[25px] md:text-[20px] text-[14px] w-max text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">
                        LEARN MORE
                    </a>
                </div>
                @endforeach



            </div>

            <div class="w-full lg:col-span-3 md:col-span-2 sm:col-span-2 col-span-2 flex justify-center ">
                <a href="{{ route('services') }}" class="mt-6 lg:text-[30px] md:text-[25px] text-[25px] w-max text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">
                    Show More
                </a>
            </div>
        </div>
    </div>
</div>
{{-- what we offer section ends here    --}}

<div class="w-full relative py-6">
    <div class="w-full px-4 flex justify-center">
        <div class="lg:w-[90%] md:w-[90%] sm:w-[90%] w-full">
            <div class="w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-4 mt-6">
                <div class="flex flex-col gap-2">
                    <div class="flex gap-4">
                        <ul class="flex flex-col gap-4 lg:pl-32 md:pl-32 pl-8" style="list-style-image: url({{ asset('asset/images/Arrow.png') }});">
                            <li>
                                <p class="text-black lg:leading-7 md:leading-2 lg:text-[24px] md:text-[13px] text-[12px] font-bold font-[montserrat]">
                                    Flawless color match</p>
                            </li>
                            <li>
                                <p class="text-black lg:leading-7 md:leading-2 lg:text-[24px] md:text-[13px] text-[12px] font-bold font-[montserrat]">
                                    Insurance-safe
                                </p>
                            </li>
                            <li>
                                <p class="text-black lg:leading-7 md:leading-2 lg:text-[24px] md:text-[13px] text-[12px] font-bold font-[montserrat]">
                                    Professionally certified technicians</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full flex justify-center items-center">
                    <a href="#top-inquiry-form" onclick="slowScrollToTop()" class="lg:text-[20px] md:text-[18px] text-[14px] w-max text-white bg-[#EEB21C] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#EEB21C] hover:bg-white hover:text-[#EEB21C] transition ease-in duration-2000">
                        GET FREE ESTIMATE
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="flex flex-col items-center justify-center p-6">
    <div class="bg-[#15AEF1] rounded-lg p-6 sm:p-12 w-full max-w-4xl">
        <h2 class="text-center text-2xl sm:text-4xl text-white font-bold mb-6 w-full font-montserrat">FAQs</h2>

        @if($faqs->isNotEmpty())
            <div class="space-y-4">
                @foreach($faqs as $faq)
                    <div class="bg-white rounded-lg shadow-md">
                        <button
                            class="w-full text-left flex justify-between items-center px-4 py-3 text-gray-800 font-medium hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-[#15AEF1]"
                            onclick="toggleFaq('faq-{{ $faq->id }}')"
                        >
                            <span>{{ $faq->question }}</span>
                            <svg id="icon-faq-{{ $faq->id }}" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform transform rotate-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="faq-{{ $faq->id }}" class="hidden px-4 py-3 text-gray-600">
                            {!! $faq->answer  !!}
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center text-white font-medium">No FAQs available at the moment.</p>
        @endif
    </div>
</div>

<script>
    function toggleFaq(id) {
        const content = document.getElementById(id);
        const icon = document.getElementById('icon-' + id);
        if (content.classList.contains('hidden')) {
            content.classList.remove('hidden');
            icon.classList.add('rotate-180');
        } else {
            content.classList.add('hidden');
            icon.classList.remove('rotate-180');
        }
    }
</script>

{{-- MAKE YOUR INQUIRY NOW START --}}

<div class="flex flex-col items-center justify-center mb-4 p-4 sm:p-8">
    <div class="bg-[#15AEF1] rounded-lg p-6 sm:p-12">
        <h2 class="text-center text-2xl sm:text-4xl text-white font-bold mb-6 w-full font-montserrat">MAKE YOUR INQUIRY
            NOW</h2>
        <form action="{{ route('appointment.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mt-4 grid gap-2 grid-cols-1 sm:grid-cols-2">
                <div class="w-full flex flex-col gap-1">
                    <label for="name" class="text-white text-md font-normal font-montserrat">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your full name" class="text-gray-600 bg-none border-[1px] border-[#eeb21c]/70 px-4 py-2 focus:outline-none focus:ring-0 focus:border-[#eeb21c]">
                </div>
                <div class="w-full flex flex-col gap-1">
                    <label for="email" class="text-white text-md font-normal font-montserrat">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your Email" class="text-gray-600 bg-none border-[1px] border-[#eeb21c]/70 px-4 py-2 focus:outline-none focus:ring-0 focus:border-[#eeb21c]">
                </div>
                <div class="w-full flex flex-col gap-1">
                    <label for="number" class="text-white text-md font-normal font-montserrat">Mobile Number</label>
                    <input type="number" id="number" name="number" placeholder="Your number" class="text-gray-600 bg-none border-[1px] border-[#eeb21c]/70 px-4 py-2 focus:outline-none focus:ring-0 focus:border-[#eeb21c]">
                </div>
                <div class="w-full flex flex-col gap-1">
                    <label for="car_model" class="text-white text-md font-normal font-montserrat">Car Model</label>
                    <input type="text" id="car_model" name="car_model" placeholder="Your car model" class="text-gray-600 bg-none border-[1px] border-[#eeb21c]/70 px-4 py-2 focus:outline-none focus:ring-0 focus:border-[#eeb21c]">
                </div>

            </div>

            <div class="w-full gap-1 mt-2">
                <label for="car_images" class="text-white text-md font-normal font-montserrat">Damage Image</label>
                {{-- dropzone element here --}}
                <div class="dropzone-main">
                    <div action="/appointment/image" class="dropzone" id="my-awesome-dropzone2">
                        <div class="dz-message" data-dz-message><span>Click or drag files to this area to upload.</span><br><span class="dropzone-sub-title">You can upload up to 3 files.</span></div>
                    </div>
                    <div class="dropzone-list2 d-none" id="car_image_list2"></div>
                </div>
            </div>
            <div class="w-full gap-1 mt-2">
                <label for="msg" class="text-white text-md font-normal font-montserrat">Message</label>
                <textarea id="msg" placeholder="Your message" name="msg" rows="4" class="w-full text-gray-600 bg-none border-[1px] border-[#eeb21c]/70 px-4 py-2 focus:outline-none focus:ring-0 focus:border-[#eeb21c]"></textarea>
            </div>
            <div class="w-full gap-1 mt-6">
                <button type="submit" class="text-[14px] sm:text-[20px] lg:text-[25px] w-full sm:w-max text-white bg-[#eeb21c] px-12 py-2 font-bold rounded-md border-[1px] border-[#eeb21c] hover:bg-white hover:text-[#eeb21c] transition ease-in duration-2000">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>


{{-- MAKE YOUR INQUIRY NOW END --}}

<script>
    document.querySelectorAll('.new-slider').forEach((slider, index) => {
        const container = slider.closest('.new-container');
        slider.addEventListener('input', (e) => {
            container.style.setProperty('--position', `${e.target.value}%`);
        });
    });

    function slowScrollToTop() {
        const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        if (scrollTop > 0) {
            window.requestAnimationFrame(slowScrollToTop);
            window.scrollTo(0, scrollTop - scrollTop / 10);
        }
    }

    /** dropzone initiated */
    Dropzone.options.myAwesomeDropzone = {
        maxFiles: 3,
        paramName: "file",
        maxFilesize: 9,
        acceptedFiles: "image/*",
        init: function() {
            /** image upload success event */
            this.on("success", function(file, response) {
                if (response.status) {
                    var _this = this;
                    setTimeout(function() {
                        _this.removeFile(file);
                        var carImageList = document.getElementById("car_image_list");

                        carImageList.classList.remove('d-none');

                        var newElement = document.createElement("div");
                        newElement.className = "flex dropzone-item";
                        /** add element in dropzone list */
                        newElement.innerHTML = '<div class="me-5"><img class="dropzone-img" src="/storage/' + response.data.image + '"></div><div><p class="text-dark">asas45a4s5a4sasa54s</p><p class="dropzone-remove" onclick="removeImage(this)">Remove</p><input type="hidden" name="car_image[]" value="' + response.data.id + '"></div>';
                        carImageList.appendChild(newElement);

                        var childCount = carImageList.childElementCount;
                        if (childCount >= 3) {
                            /** hide dropzone main element if selected images are equal and more then 3 */
                            var myAwesomeDropzone = document.getElementById("my-awesome-dropzone");
                            myAwesomeDropzone.classList.add('d-none');
                        }
                    }, 1000);
                } else {
                    this.removeFile(file);
                }
            });
            /** image upload fail event */
            this.on("error", function(file, response) {
                this.removeFile(file);
            });
        }
    };

    /** dropzone initiated */
    Dropzone.options.myAwesomeDropzone2 = {
        maxFiles: 3,
        paramName: "file",
        maxFilesize: 9,
        acceptedFiles: "image/*",
        init: function() {
            /** image upload success event */
            this.on("success", function(file, response) {
                if (response.status) {
                    var _this = this;
                    setTimeout(function() {
                        _this.removeFile(file);
                        var carImageList = document.getElementById("car_image_list2");

                        carImageList.classList.remove('d-none');

                        var newElement = document.createElement("div");
                        newElement.className = "flex dropzone-item";
                        /** add element in dropzone list */
                        newElement.innerHTML = '<div class="me-5"><img class="dropzone-img" src="/storage/' + response.data.image + '"></div><div><p class="text-dark">asas45a4s5a4sasa54s</p><p class="dropzone-remove" onclick="removeImage(this, \'footer\')">Remove</p><input type="hidden" name="car_image[]" value="' + response.data.id + '"></div>';
                        carImageList.appendChild(newElement);

                        var childCount = carImageList.childElementCount;
                        if (childCount >= 3) {
                            /** hide dropzone main element if selected images are equal and more then 3 */
                            var myAwesomeDropzone = document.getElementById("my-awesome-dropzone2");
                            myAwesomeDropzone.classList.add('d-none');
                        }
                    }, 1000);
                } else {
                    this.removeFile(file);
                }
            });
            /** image upload fail event */
            this.on("error", function(file, response) {
                this.removeFile(file);
            });
        }
    };

    /** remove image on click of remove text */
    function removeImage(element, type = 'main') {
        element.parentElement.parentElement.remove();
        var carImageList = document.getElementById("car_image_list");
        if (type == 'footer') {
            carImageList = document.getElementById("car_image_list2");
        }
        var childCount = carImageList.childElementCount;
        if (childCount < 3) {
            /** show dropzone main element if selected images are less then 3 */
            var myAwesomeDropzone = document.getElementById("my-awesome-dropzone");
            if (type == 'footer') {
                myAwesomeDropzone = document.getElementById("my-awesome-dropzone2");
            }
            myAwesomeDropzone.classList.remove('d-none');
            if (childCount <= 0) {
                /** hide dropzone list element if selected images are less then 3 */
                carImageList.classList.add('d-none');
            }
        }
    }
</script>
@endsection
