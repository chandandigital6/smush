<div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-4">
    @php
        $services=\App\Models\Service::all();
    @endphp
    @foreach($services as $service)


    <div class="bg-white rounded-3xl px-[20px] py-[30px] flex flex-col items-center"
         style="box-shadow: 0px 0px 10px 1px #eeb21ca8;">
        <img src="{{asset('asset/images/Car.png')}}" alt="">
        <h2 class="uppercase lg:text-[35px] md:text-[30px] text-center sm:text-[25px] text-[20px] text-[#15AEF1] font-bold">
            {{$service->title}}</h2>
        <p class="text-black lg:leading-7 md:leading-2 lg:text-[16px] md:text-[13px] text-[12px] font-medium font-[roboto] text-center"
           style="word-spacing: 10px;">
         {!! $service->description !!}
        </p>

        <a href="{{route('services-detail')}}"
           class="mt-6 lg:text-[25px] md:text-[20px] text-[14px] w-max text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">
            LEARN MORE
        </a>
    </div>

    @endforeach
</div>