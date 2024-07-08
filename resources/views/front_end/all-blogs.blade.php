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
                        <span class="uppercase text-[#EEB21C] text-[22px] font-bold">All Blogs</span>
                        <div class="lg:w-[1000px] md:w-[700px] sm:w-[500px] w-[350px] text-center">
                            <p class="text-white font-bold lg:text-[80px] md:text-[60px] sm:text-[40px] text-[30px]">
                                Our Blogs
                            </p>
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




    {{--blogs section start here--}}
    <div class="w-full  relative py-6">
        <div class="w-full  flex justify-center">
            <div class=" lg:w-[90%] md:w-[90%] sm:w-[90%] w-full w-full flex flex-col items-center py-[5px] px-4">
                <h2 class="lg:text-[50px] md:text-[40px] sm:text-[35px] text-[30px] text-[#EEB21C] font-bold">POSTS FROM THE BLOG</h2>
                <div class="max-w-[600px]">
                    <p class="text-black lg:text-[16px] md:text-[13px] text-[12px] font-medium font-[montserrat] text-center"
                       style="word-spacing: 10px;">See our updates, news and new coming features</p>
                </div>

                <div class="w-full grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4 mt-6">
                    @foreach($blog as $blogs)


                        <di class="w-full  relative">
                            <div class="relative">
                                <img src="{{asset('storage/'.$blogs->image)}}" class="w-full h-[400px] opacity-80 hover:opacity-100 transition ease-in duration-2000">
                            </div>
                            <div class="relative h-16 bg-white">
                                <div class="absolute -top-[30px] left-0 flex justify-center w-full">
                                    <a href="{{route('blog-details',$blogs->id)}}"
                                       class="w-[90%] flex justify-center lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-sm border-[1px] border-[#15aef1]  transition ease-in duration-2000">
                                        {{$blogs->title}}
                                    </a>
                                </div>
                            </div>

                        </di>
                        {{--slider copy ends here--}}



                    @endforeach

                </div>



            </div>
        </div>
    </div>
    {{--blogs section ends here    --}}







@endsection
