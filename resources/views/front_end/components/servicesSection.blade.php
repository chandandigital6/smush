<div class="w-full grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-4">
    @php
        $services=\App\Models\Service::all();
    @endphp
    @foreach($services as $service)
        @php
            // Split the description into an array of words
            $words = explode(' ', strip_tags($service->description)); // Use strip_tags to remove any HTML tags

            // Get the first 20 words
            $first20Words = array_slice($words, 0, 20);

            // Join the first 20 words back into a string
            $shortDescription = implode(' ', $first20Words);
        @endphp

        <div class="w-full bg-white rounded-3xl px-[20px] py-[30px] flex flex-col items-center"
             style="box-shadow: 0px 0px 10px 1px #eeb21ca8;">
            <img src="{{asset('storage/'.$service->image)}}" alt="">
            <h2 class="uppercase lg:text-[35px] md:text-[30px] text-center sm:text-[25px] text-[20px] text-[#15AEF1] font-bold">
                {{$service->title}}

            </h2>
            <p class="text-black lg:leading-7 md:leading-2 lg:text-[16px] md:text-[13px] text-[12px] font-medium font-[roboto] text-center"
               style="word-spacing: 10px;">
                {!! $shortDescription !!} ...
            </p>

            <a href="{{route('service.show',$service->id)}}"
               class="mt-6 lg:text-[25px] md:text-[20px] text-[14px] w-max text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">
                LEARN MORE
            </a>
        </div>

    @endforeach

{{--    <div class="w-full lg:col-span-3 md:col-span-2 sm:col-span-2 col-span-2 flex justify-center ">--}}
{{--        <a href="{{route('services')}}"--}}
{{--           class="mt-6 lg:text-[25px] md:text-[20px] text-[14px] w-max text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">--}}
{{--            Show More--}}
{{--        </a>--}}
{{--    </div>--}}
</div>
