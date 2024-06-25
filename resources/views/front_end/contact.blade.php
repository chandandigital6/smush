@extends('front_end.components.layout',['seos' => $seos])
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
                                contact us</p>
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
                                contact us</p>
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
                                contact us</p>
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
                                contact us</p>
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
        <div class="w-full h-max absolute -top-[50px] left-0 px-4 flex justify-center z-50 ">
            <div
                class=" lg:w-[1000px] lg:h-[250px] md:h-[200px] sm:h-[180px] h-[100px] bg-white px-2 rounded-lg shadow-md shadow-gray-400 flex justify-between items-center gap-4">
                <div>
                    <img class="lg:w-52 md:w-48 sm:w-40 w-24 h-auto" src="{{asset('asset/images/yeelowcar.png')}}"
                         alt="">
                </div>
                <div class="flex flex-col gap-1 items-center py-2">
                    <span class="font-bold lg:text-[34px] md:text-[21px] sm:text-[17px] text-[1px]">GET YOUR FREE ESTIMATE NOW</span>
                    <span class="font-bold lg:text-[23px] md:text-[15px] sm:text-[10px] text-[8px] text-[#EEB21C]">SIMPLY SEND US PHOTOS OF THE DAMAGE!"</span>
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
            <div class="lg:w-[70%] md:w-[80%] sm:w-[90%] w-full grid lg:grid-cols-3 md:grid-cols-3 grid-cols-1 gap-4 py-[5px]">
                <div class="w-full flex flex-col  p-2 lg:col-span-2 md:col-span-2">
                    <h2 class="uppercase font-bold lg:text-[30px] md:text-[20px] text-[20px]"> <span
                            class="text-[#15AEF1]">Send Us A Message</span></h2>
                    <p class="text-black lg:leading-7 md:leading-2 lg:text-[15px] md:text-[12px] text-[10px] font-medium font-[roboto]"
                       style="word-spacing: 10px;">Attach few images for quick quotation</p>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form action="{{route('appointment.store')}}" method="post" class="mt-4 grid lg:grid-cols-2 gap-2">
                        @csrf
                        <div class="w-full flex flex-col gap-1">
                            <label for="" class="text-[#eeb21c] text-md font-normal">Name</label>
                            <input type="text" name="name" placeholder="Your Name" class="text-gray-600 bg-none border-[1px] border-[#eeb21c]/70 px-4 py-2 focus:outline-none focus:ring-0 focus:border-[#eeb21c]">
                        </div>
                        <div class="w-full flex flex-col gap-1">
                            <label for="" class="text-[#eeb21c] text-md font-normal">Email</label>
                            <input type="email" name="email" placeholder="Your Email" class="text-gray-600 bg-none border-[1px] border-[#eeb21c]/70 px-4 py-2 focus:outline-none focus:ring-0 focus:border-[#eeb21c]">
                        </div>
                        <div class="w-full flex flex-col gap-1">
                            <label for="" class="text-[#eeb21c] text-md font-normal">Phone</label>
                            <input type="number" name="number" placeholder="Your Phone" class="text-gray-600 bg-none border-[1px] border-[#eeb21c]/70 px-4 py-2 focus:outline-none focus:ring-0 focus:border-[#eeb21c]">
                        </div>
                        <div class="w-full flex flex-col gap-1">
                            <label for="" class="text-[#eeb21c] text-md font-normal">Message</label>
                            <textarea placeholder="Your Phone" name="msg" rows="1" class="text-gray-600 bg-none border-[1px] border-[#eeb21c]/70 px-4 py-2 focus:outline-none focus:ring-0 focus:border-[#eeb21c]"></textarea>
                        </div>
                        <div class="w-full flex flex-col gap-1 mt-6">
                            <button type="submit"
                               class="lg:text-[25px] md:text-[20px] text-[14px] w-max text-white bg-[#eeb21c] px-12 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#eeb21c] hover:bg-white hover:text-[#eeb21c]  transition ease-in duration-2000">
                                Submit
                            </button>
                        </div>


                    </form>

                </div>
                <div class="w-full flex flex-col gap-6 ">
                     <div class="flex items-center gap-2">
                          <div class="h-12 w-12 flex justify-center items-center text-2xl text-white bg-[#eeb21c]">
                              <i class="fa fa-location-dot"></i>
                          </div>
                          <div class="flex flex-col ">
                              <h2 class=" font-bold lg:text-[30px] md:text-[20px] text-[20px]"> <span
                                      class="text-[#15AEF1]">Address</span></h2>
                              <p class="text-[#5c5b5b]  lg:text-[15px] md:text-[12px] text-[10px] font-normal font-[roboto]"
                                 style="word-spacing: 10px;">Melbourne, Australia</p>
                          </div>
                     </div>
                     <div class="flex items-center gap-2">
                          <div class="h-12 w-12 flex justify-center items-center text-2xl text-white bg-[#eeb21c]">
                              <i class="fa fa-phone"></i>
                          </div>
                          <div class="flex flex-col ">
                              <h2 class=" font-bold lg:text-[30px] md:text-[20px] text-[20px]"> <span
                                      class="text-[#15AEF1]">Phone</span></h2>
                              <p class="text-[#5c5b5b]  lg:text-[15px] md:text-[12px] text-[10px] font-normal font-[roboto]"
                                 style="word-spacing: 10px;">0449599000</p>
                          </div>
                     </div>
                     <div class="flex items-center gap-2">
                          <div class="h-12 w-12 flex justify-center items-center text-2xl text-white bg-[#eeb21c]">
                              <i class="fa-brands fa-instagram"></i>
                          </div>
                          <div class="flex flex-col ">
                              <h2 class=" font-bold lg:text-[30px] md:text-[20px] text-[20px]"> <span
                                      class="text-[#15AEF1]">Instagram</span></h2>
                              <p class="text-[#5c5b5b]  lg:text-[15px] md:text-[12px] text-[10px] font-normal font-[roboto]"
                                 style="word-spacing: 10px;">@mobilesmashreapir</p>
                          </div>
                     </div>

                </div>
            </div>
        </div>
    </div>
    {{--about section ends here    --}}



@endsection
