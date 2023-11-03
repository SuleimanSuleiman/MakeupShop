<div class="bg-cover bg-center h-screen w-full px-12 bg-fixed" style="background-image: url(http://127.0.0.1:8000/home/home.jpg);">
    <div class="w-[550px] h-full flex justify-center items-start flex-col">
        <div class="bg-gray-900 rounded-md bg-opacity-30 backdrop-blur-lg p-3">
            <h1 class="text-[38px] w-1/2 font-semibold text-white">
                    {{__('header.title')}}
            </h1>
            <p class="text-white text-[19px] mt-3 font-medium leading-8 opacity-80">
                {{__("header.desc")}}
            </p>
            <button class="mt-3 bg-white text-gray-900 px-2 py-2 rounded-md hover:scale-105 transition-all duration-150">
               {{__('header.shopNow')}}
            </button>
        </div>
    </div>
</div>
