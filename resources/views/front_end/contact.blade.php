@extends('front_end.components.layout',['seos' => $seos])
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



    {{--slider section start here--}}
{{--    <div class="swiffy-slider ">--}}
{{--        <ul class="slider-container">--}}
{{--            --}}{{-- make copy of this li for dynamic slider --}}
{{--            <li class="w-full  relative">--}}
{{--                <img src="{{asset('asset/images/image2.png')}}"--}}
{{--                     class="w-full lg:h-[550px] md:h-[500px] sm:h-[400px] h-[300px] object-cover">--}}
{{--                <div class="absolute top-0 left-0 w-full h-full bg-black/70 flex justify-center items-center px-4">--}}
{{--                    <div class="w-max h-max flex flex-col items-center gap-4">--}}
{{--                        <span class="uppercase text-[#EEB21C] text-[22px] font-bold">ANY KIND OF CAR YOU WILL GET</span>--}}
{{--                        <div class="lg:w-[1000px] md:w-[700px] sm:w-[500px] w-[350px] text-center">--}}
{{--                            <p class="uppercase text-white font-bold lg:text-[80px] md:text-[60px] sm:text-[40px] text-[30px]">--}}
{{--                                contact us</p>--}}
{{--                        </div>--}}
{{--                        <div class="flex gap-4">--}}
{{--                            <a href="{{route('services')}}"--}}
{{--                               class="lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#eeb21c] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#eeb21c] hover:bg-white hover:text-[#eeb21c]  transition ease-in duration-2000">--}}
{{--                                SERVICES--}}
{{--                            </a>--}}
{{--                            <a href="{{route('contact')}}"--}}
{{--                               class="lg:text-[25px] md:text-[20px] text-[14px] text-white bg-[#15aef1] px-4 lg:py-2 md:py-2 py-1 font-bold rounded-md border-[1px] border-[#15aef1] hover:bg-white hover:text-[#15aef1]  transition ease-in duration-2000">--}}
{{--                                ENQUIRY--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </li>--}}
{{--            --}}{{--slider copy ends here--}}






{{--        </ul>--}}

{{--        <button type="button" class="slider-nav"></button>--}}
{{--        <button type="button" class="slider-nav slider-nav-next"></button>--}}


{{--    </div>--}}
    {{--slider section ends here--}}


    {{--about section start here--}}
    <div class="w-full  relative lg:pt-[250px] md:pt-[200px] sm:pt-[180px] pt-[100px]"
         style="background-image: url({{asset('')}})">
{{--        @include('front_end.components.carSection')--}}



        <div class="w-full px-4 flex justify-center">
            <div class="lg:w-[90%] md:w-[90%] sm:w-[90%] w-full grid lg:grid-cols-3 md:grid-cols-3 grid-cols-1 gap-4 py-[5px]">
                <div class="w-full flex flex-col  p-2 lg:col-span-2 md:col-span-2">
                    <h2 class="uppercase font-bold lg:text-[30px] md:text-[20px] text-[20px]"> <span
                            class="text-[#15AEF1]">MAKE YOUR INQUIRY NOW</span></h2>
                    <p class="text-black lg:leading-7 md:leading-2 lg:text-[15px] md:text-[12px] text-[10px] font-medium font-[montserrat]"
                       style="word-spacing: 10px;"></p>

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
                <div class="w-full flex flex-col gap-6 ">
                     <div class="flex items-center gap-2">
                          <div class="h-12 w-12 flex justify-center items-center text-2xl text-white bg-[#eeb21c]">
                              <i class="fa fa-location-dot"></i>
                          </div>
                          <div class="flex flex-col ">
                              <h2 class=" font-bold lg:text-[30px] md:text-[20px] text-[20px]"> <span
                                      class="text-[#15AEF1]">Address</span></h2>
                              <p class="text-[#5c5b5b]  lg:text-[18px] md:text-[12px] text-[15px] font-normal font-[montserrat]"
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
                              <p class="text-[#5c5b5b]  lg:text-[18px] md:text-[12px] text-[15px] font-normal font-[montserrat]"
                                 style="word-spacing: 10px;"><a href="tel:0449599000">0449599000</a></p>
                          </div>
                     </div>
                     <div class="flex items-center gap-2">
                          <div class="h-12 w-12 flex justify-center items-center text-2xl text-white bg-[#eeb21c]">
                              <i class="fa-brands fa-instagram"></i>
                          </div>
                          <div class="flex flex-col ">
                              <h2 class=" font-bold lg:text-[30px] md:text-[20px] text-[20px]"> <span
                                      class="text-[#15AEF1]">Instagram</span></h2>
                              <p class="text-[#5c5b5b]  lg:text-[18px] md:text-[12px] text-[15px] font-normal font-[montserrat]"
                                 style="word-spacing: 10px;">@mobilesmashreapir</p>
                          </div>
                     </div>

                </div>
            </div>
        </div>
    </div>
    {{--about section ends here    --}}

{{--    <script>--}}
{{--        let selectedFiles = [];--}}

{{--        document.getElementById('car_images').addEventListener('change', function(event) {--}}
{{--            const files = event.target.files;--}}
{{--            const previewContainer = document.getElementById('image-preview');--}}
{{--            const hiddenInput = document.getElementById('car_images_data');--}}

{{--            // Add selected files to the array--}}
{{--            Array.from(files).forEach(file => {--}}
{{--                selectedFiles.push(file);--}}

{{--                const reader = new FileReader();--}}
{{--                reader.onload = function(e) {--}}
{{--                    const img = document.createElement('img');--}}
{{--                    img.src = e.target.result;--}}
{{--                    img.alt = file.name;--}}
{{--                    img.classList.add('w-full', 'h-auto', 'border', 'border-[#eeb21c]', 'rounded-md', 'mt-2');--}}
{{--                    previewContainer.appendChild(img);--}}
{{--                };--}}
{{--                reader.readAsDataURL(file);--}}
{{--            });--}}

{{--            // Update the hidden input with the file names--}}
{{--            hiddenInput.value = JSON.stringify(selectedFiles.map(file => file.name));--}}
{{--        });--}}

{{--        document.getElementById('appointment-form').addEventListener('submit', function(event) {--}}
{{--            event.preventDefault();--}}

{{--            const formData = new FormData(this);--}}
{{--            selectedFiles.forEach(file => {--}}
{{--                formData.append('car_image[]', file);--}}
{{--            });--}}

{{--            fetch(this.action, {--}}
{{--                method: this.method,--}}
{{--                headers: {--}}
{{--                    'X-CSRF-TOKEN': '{{ csrf_token() }}'--}}
{{--                },--}}
{{--                body: formData--}}
{{--            }).then(response => response.json()).then(data => {--}}
{{--                console.log(data);--}}
{{--                // Handle the response as needed--}}
{{--            }).catch(error => {--}}
{{--                console.error('Error:', error);--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}



{{--        <script>--}}
{{--        let selectedFiles = [];--}}

{{--        document.getElementById('car_images').addEventListener('change', function(event) {--}}
{{--            const files = event.target.files;--}}
{{--            const previewContainer = document.getElementById('image-preview');--}}
{{--            const hiddenInput = document.getElementById('car_images_data');--}}

{{--            Array.from(files).forEach(file => {--}}
{{--                selectedFiles.push(file);--}}

{{--                const reader = new FileReader();--}}
{{--                reader.onload = function(e) {--}}
{{--                    const img = document.createElement('img');--}}
{{--                    img.src = e.target.result;--}}
{{--                    img.alt = file.name;--}}
{{--                    img.classList.add('w-full', 'h-auto', 'border', 'border-[#eeb21c]', 'rounded-md', 'mt-2');--}}
{{--                    previewContainer.appendChild(img);--}}
{{--                };--}}
{{--                reader.readAsDataURL(file);--}}
{{--            });--}}

{{--            updateHiddenInput();--}}
{{--        });--}}

{{--        function updateHiddenInput() {--}}
{{--            const hiddenInput = document.getElementById('car_images_data');--}}
{{--            hiddenInput.value = JSON.stringify(selectedFiles.map(file => file.name));--}}
{{--        }--}}
{{--    </script>--}}



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
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const submitButton = document.getElementById('submitButton');
            const loader = document.getElementById('loader');
            const buttonText = document.getElementById('buttonText');

            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission

                // Disable the button and show the loader
                submitButton.disabled = true;
                buttonText.classList.add('hidden');
                loader.classList.remove('hidden');

                // Simulate a delay for demonstration purposes (remove this in production)
                setTimeout(function() {
                    form.submit(); // Submit the form after the delay
                }, 3000);
            });
        });

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
