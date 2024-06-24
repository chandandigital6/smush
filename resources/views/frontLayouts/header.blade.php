<div class="w-full bg-[#EEB21C] px-4 flex justify-center">
    <div class="lg:w-[70%] md:w-[80%] sm:w-[90%] w-full flex justify-between py-[5px]">
        <div class="flex lg:gap-10 md:gap-10 sm:gap-10 gap-4 text-[15px]">
            <a href="" class="text-white hover:text-[#15AEF1] transition ease-in duration-2000 "><i
                    class="fa-brands fa-instagram"></i></a>
            <a href="" class="text-white hover:text-[#15AEF1] transition ease-in duration-2000 "><i
                    class="fa-brands fa-facebook"></i></a>
            <a href="" class="text-white hover:text-[#15AEF1] transition ease-in duration-2000 "><i
                    class="fa-brands fa-youtube"></i></a>
        </div>
        <div class="flex gap-2 items-center gap-4">
            <a href="tel:0449599000" target="_blank"
               class="text-white hover:text-[#15AEF1] font-semibold text-[16px] transition ease-in duration-2000 ">
                <span>0449599000</span>
            </a>
            <a href="" class="text-white hover:text-[#15AEF1] text-[20px] transition ease-in duration-2000 ">
                <i class="fa fa-user"></i>
            </a>

        </div>
    </div>
</div>
<div class="w-full  flex justify-center">
    <div class="lg:w-[70%] md:w-[80%] sm:w-[90%] w-full flex justify-between items-center py-[5px] relative px-4">
        <div class="w-max">
            <a href="{{route('home')}}">
                <img class="h-auto lg:w-full md:w-[70px] sm:w-[60px] w-[50px]"
                     src="{{asset('assets/images/mainLogo.png')}}" alt="">
            </a>
        </div>
        <div id="menuList" class="lg:w-max md:w-max lg:static md:static absolute top-[100%] left-0 w-full z-50 bg-white lg:flex md:flex hidden">
            <ul class="uppercase flex lg:flex-row md:flex-row flex-col lg:gap-12 md:gap-6">
                <a href="{{route('home')}}"
                   class="{{Route::currentRouteName()=='home'?'lg:text-[#eeb21c] md:text-[#eeb21c] text-[#677294] hover:text-[#15AEF1]':'lg:text-[#15AEF1] md:text-[#15AEF1] text-[#677294] hover:text-[#eeb21c]'}}       lg:font-semibold md:font-semibold font-normal  text-[16px]   transition ease-in duration-2000">
                    <li class="lg:py-0 md:py-0 py-4 lg:px-0 md:px-0 px-6 lg:border-t-[0px] md:border-t-[0px] border-t-[1px] border-t-[#15AEF1]/50">Home</li>
                </a>
                <a href="{{route('about')}}"
                   class="{{Route::currentRouteName()=='about'?'lg:text-[#eeb21c] md:text-[#eeb21c] text-[#677294] hover:text-[#15AEF1]':'lg:text-[#15AEF1] md:text-[#15AEF1] text-[#677294] hover:text-[#eeb21c]'}}  lg:font-semibold md:font-semibold font-normal  text-[16px]    transition ease-in duration-2000">
                    <li class="lg:py-0 md:py-0 py-4 lg:px-0 md:px-0 px-6 lg:border-t-[0px] md:border-t-[0px] border-t-[1px] border-t-[#15AEF1]/50">About</li>
                </a>
                <a href="{{route('services')}}"
                   class="{{Route::currentRouteName()=='services'?'lg:text-[#eeb21c] md:text-[#eeb21c] text-[#677294] hover:text-[#15AEF1]':'lg:text-[#15AEF1] md:text-[#15AEF1] text-[#677294] hover:text-[#eeb21c]'}}  lg:font-semibold md:font-semibold font-normal  text-[16px]    transition ease-in duration-2000">
                    <li class="lg:py-0 md:py-0 py-4 lg:px-0 md:px-0 px-6 lg:border-t-[0px] md:border-t-[0px] border-t-[1px] border-t-[#15AEF1]/50">Services</li>
                </a>
                <a href="{{route('contact')}}"
                   class="{{Route::currentRouteName()=='contact'?'lg:text-[#eeb21c] md:text-[#eeb21c] text-[#677294] hover:text-[#15AEF1]':'lg:text-[#15AEF1] md:text-[#15AEF1] text-[#677294] hover:text-[#eeb21c]'}}  lg:font-semibold md:font-semibold font-normal  text-[16px]    transition ease-in duration-2000">
                    <li class="lg:py-0 md:py-0 py-4 lg:px-0 md:px-0 px-6 lg:border-t-[0px] md:border-t-[0px] lg:border-b-[0px] md:border-b-[0px] border-t-[1px] border-b-[1px] border-[#15AEF1]/50">Contact</li>
                </a>
            </ul>
        </div>
        <div class="flex gap-10 items-center">
            <a href="{{route('contact')}}"
               class="lg:text-[17px] md:text-[17px] text-[14px] text-white bg-[#eeb21c] px-4 lg:py-2 md:py-2 py-1 font-semibold rounded-full border-[1px] border-[#eeb21c] hover:bg-white hover:text-[#eeb21c]  transition ease-in duration-2000">
                Get Free Estimate
            </a>
            <div class="w-max h-max lg:hidden md:hidden block" onclick="
                     document.getElementById('menuList').classList.toggle('hidden')
                ">
                <i class="fa fa-bars  text-[#eeb21c] text-[20px] cursor-pointer "></i>
            </div>
        </div>
    </div>
</div>
