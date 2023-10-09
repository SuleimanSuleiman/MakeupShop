@props(['stage','btn' => true])
    <div id="ContainerSidbar" class="relative w-64 bg-white h-screen overflow-y-auto p-2 z-50 shadow-md shadow-gray-600 transition-all duration-700 ">
            {{-- arrow --}}
            @if ($btn == 'true')
            <div id="menyBtn" class="z-50 w-10 h-10 bg-gray-400 rounded-full absolute -right-5 top-10 border-[8px] border-gray-50 flex justify-center items-center fill-white hover:cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm306.7 69.1L162.4 380.6c-19.4 7.5-38.5-11.6-31-31l55.5-144.3c3.3-8.5 9.9-15.1 18.4-18.4l144.3-55.5c19.4-7.5 38.5 11.6 31 31L325.1 306.7c-3.2 8.5-9.9 15.1-18.4 18.4zM288 256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/></svg>
            </div>
            @else
            @endif
            {{-- end arrow --}}
            <div class="flex justify-center">
                <img src="/logo-header.png" class="w-20 h-20" alt="logo">
            </div>
                <div class="px-2 z-10">
                <ul class="h-full ">
                    {{-- dashboard --}}
                    <li  class="select-none flex flex-col transition-all duration-500 mb-2">
                        <div id="menu" class="
                        @if ($stage == 'Analytics'|| $stage == 'CRM'|| $stage == 'eCommerce')
                        open
                        @else
                        @endif
                        flex justify-between items-center p-2 rounded-md hover:bg-gray-100 hover:cursor-pointer ">
                            <div class="flex items-center ">
                                <svg class="w-4 fill-gray-500 text-[12px]" xmlns="http://www.w3.org/2000/svg" height="1rem" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
                                <p class="text-gray-600 text-[14px] ml-2">Dashboards</p>
                            </div>
                            <svg  id="icon"
                            class="w-4
                            @if ($stage == 'Analytics'|| $stage == 'CRM'|| $stage == 'eCommerce')
                            rotate-90
                            @else
                            @endif
                             fill-gray-500 text-[12px]" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                        </div>
                        {{-- hidden menu --}}
                        <ul class="p-3
                        @if ($stage == 'Analytics'|| $stage == 'CRM'|| $stage == 'eCommerce')
                        @else
                        hidden
                        @endif
                        font-thin text-sm max-w-md  text-gray-500 list-disc list-inside ">
                            <li  class=" p-2 rounded-md relative {{$stage == 'Analytics'?'bg-gray-300 after:bg-gray-500 after:h-full after:w-1 after:rounded-l-lg after:absolute after:top-1/2 after:-right-4 after:-translate-y-[50%]':''}}">
                                <a href={{route('admin.Analytics')}}>Analytics</a>
                            </li>
                            <li   class=" p-2 rounded-md relative {{$stage == 'CRM'?'bg-gray-300 after:bg-gray-500 after:h-full after:w-1 after:rounded-l-lg after:absolute after:top-1/2 after:-right-4 after:-translate-y-[50%]':''}}">
                                <a href={{route('admin.crm')}}>CRM</a>
                            </li>
                            <li   class="   p-2 rounded-md relative {{$stage == 'eCommerce'?'bg-gray-300 after:bg-gray-500 after:h-full after:w-1 after:rounded-l-lg after:absolute after:top-1/2 after:-right-4 after:-translate-y-[50%]':''}}">
                                <a href={{route('admin.eCommerce')}}>eCommerce</a>
                            </li>
                        </ul>
                    </li>
                    {{-- categories --}}
                    <li  class="select-none flex flex-col mb-2">
                        <div id="menu" class="
                         @if ($stage == 'Add Category'|| $stage == 'Show Categories')
                        open
                        @else
                        @endif
                        flex justify-between items-center p-2 rounded-md hover:bg-gray-100 hover:cursor-pointer ">
                            <div class="flex items-center ">
                                <svg class="w-4 fill-gray-500 text-[12px]" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64v48H160V112zm-48 48H48c-26.5 0-48 21.5-48 48V416c0 53 43 96 96 96H352c53 0 96-43 96-96V208c0-26.5-21.5-48-48-48H336V112C336 50.1 285.9 0 224 0S112 50.1 112 112v48zm24 48a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm152 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/></svg>
                                <p class="text-gray-600 text-[14px] ml-2">Categories</p>
                            </div>
                            <svg  id="icon" class="w-4
                            @if ($stage == 'Add Category'|| $stage == 'Show Categories')
                            rotate-90
                            @else
                            @endif
                             fill-gray-500 text-[12px]" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                        </div>
                        {{-- hidden menu --}}
                        <ul class="p-3
                        @if ($stage == 'Add Category'|| $stage == 'Show Categories')
                        @else
                        hidden
                        @endif  font-thin text-sm max-w-md  text-gray-500 list-disc list-inside ">
                            <li  class="mb-2 p-2 rounded-md relative {{$stage == 'Add Category'?'bg-gray-300 after:bg-gray-500 after:h-full after:w-1 after:rounded-l-lg after:absolute after:top-1/2 after:-right-4 after:-translate-y-[50%]':''}}">
                                <a href={{route('admin.main-category.create')}}>Add Category</a>
                            </li>
                            <li  class="mb-2 p-2 rounded-md relative {{$stage == 'Show Categories'?'bg-gray-300 after:bg-gray-500 after:h-full after:w-1 after:rounded-l-lg after:absolute after:top-1/2 after:-right-4 after:-translate-y-[50%]':''}}">
                                <a href={{route('admin.main-category.index')}}>Show Categories</a>
                            </li>
                        </ul>
                    </li>
                    {{-- sub categories --}}
                    <li  class="select-none flex flex-col mb-2">
                        <div id="menu" class="
                       @if ($stage == 'Add Sub Category'|| $stage == 'Show Sub Categories')
                        open
                        @else
                        @endif
                        flex justify-between items-center p-2 rounded-md hover:bg-gray-100 hover:cursor-pointer ">
                            <div class="flex items-center ">
                                <svg class="w-4 fill-gray-500 text-[12px]" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M388.32,104.1a4.66,4.66,0,0,0-4.4-4c-2,0-37.23-.8-37.23-.8s-21.61-20.82-29.62-28.83V503.2L442.76,472S388.72,106.5,388.32,104.1ZM288.65,70.47a116.67,116.67,0,0,0-7.21-17.61C271,32.85,255.42,22,237,22a15,15,0,0,0-4,.4c-.4-.8-1.2-1.2-1.6-2C223.4,11.63,213,7.63,200.58,8c-24,.8-48,18-67.25,48.83-13.61,21.62-24,48.84-26.82,70.06-27.62,8.4-46.83,14.41-47.23,14.81-14,4.4-14.41,4.8-16,18-1.2,10-38,291.82-38,291.82L307.86,504V65.67a41.66,41.66,0,0,0-4.4.4S297.86,67.67,288.65,70.47ZM233.41,87.69c-16,4.8-33.63,10.4-50.84,15.61,4.8-18.82,14.41-37.63,25.62-50,4.4-4.4,10.41-9.61,17.21-12.81C232.21,54.86,233.81,74.48,233.41,87.69ZM200.58,24.44A27.49,27.49,0,0,1,215,28c-6.4,3.2-12.81,8.41-18.81,14.41-15.21,16.42-26.82,42-31.62,66.45-14.42,4.41-28.83,8.81-42,12.81C131.33,83.28,163.75,25.24,200.58,24.44ZM154.15,244.61c1.6,25.61,69.25,31.22,73.25,91.66,2.8,47.64-25.22,80.06-65.65,82.47-48.83,3.2-75.65-25.62-75.65-25.62l10.4-44s26.82,20.42,48.44,18.82c14-.8,19.22-12.41,18.81-20.42-2-33.62-57.24-31.62-60.84-86.86-3.2-46.44,27.22-93.27,94.47-97.68,26-1.6,39.23,4.81,39.23,4.81L221.4,225.39s-17.21-8-37.63-6.4C154.15,221,153.75,239.8,154.15,244.61ZM249.42,82.88c0-12-1.6-29.22-7.21-43.63,18.42,3.6,27.22,24,31.23,36.43Q262.63,78.68,249.42,82.88Z"/></svg>
                                <p class="text-gray-600 text-[14px] ml-2">Sub Categories</p>
                            </div>
                            <svg  id="icon" class="w-4
                            @if ($stage == 'Add Sub Category'|| $stage == 'Show Sub Categories'|| $stage == 'Add Sub Offer')
                            rotate-90
                            @else
                            @endif
                             fill-gray-500 text-[12px]" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                        </div>
                        {{-- hidden menu --}}
                        <ul class="p-3
                        @if ($stage == 'Add Sub Category'|| $stage == 'Show Sub Categories'|| $stage == 'Add Sub Offer')
                        @else
                        hidden
                        @endif  font-thin text-sm max-w-md  text-gray-500 list-disc list-inside ">
                            <li  class="mb-2 p-2 rounded-md relative {{$stage == 'Add Sub Category'?'bg-gray-300 after:bg-gray-500 after:h-full after:w-1 after:rounded-l-lg after:absolute after:top-1/2 after:-right-4 after:-translate-y-[50%]':''}}">
                                <a href={{route('admin.sub-category.create')}}>Add Sub Category</a>
                            </li>
                            <li  class="mb-2 p-2 rounded-md relative {{$stage == 'Show Sub Categories'?'bg-gray-300 after:bg-gray-500 after:h-full after:w-1 after:rounded-l-lg after:absolute after:top-1/2 after:-right-4 after:-translate-y-[50%]':''}}">
                                <a href={{route('admin.sub-category.index')}}>Sub Categories</a>
                            </li>
                            <li  class="mb-2 p-2 rounded-md relative {{$stage == 'Add Sub Offer'?'bg-gray-300 after:bg-gray-500 after:h-full after:w-1 after:rounded-l-lg after:absolute after:top-1/2 after:-right-4 after:-translate-y-[50%]':''}}">
                                <a href={{route('admin.create-offer-sub')}}>Add Offer</a>
                            </li>
                        </ul>
                    </li>
                    {{--Products --}}
                    <li  class="select-none flex flex-col mb-6">
                        <div id="menu" class="
                       @if ($stage == 'Add Product'|| $stage == 'Show  Products')
                        open
                        @else
                        @endif
                        flex justify-between items-center p-2 rounded-md hover:bg-gray-100 hover:cursor-pointer ">
                            <div class="flex items-center ">
                                <svg class="w-4 fill-gray-500 text-[12px]"  xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M32 0C14.3 0 0 14.3 0 32S14.3 64 32 64H48c8.8 0 16 7.2 16 16V368c0 44.2 35.8 80 80 80h18.7c-1.8 5-2.7 10.4-2.7 16c0 26.5 21.5 48 48 48s48-21.5 48-48c0-5.6-1-11-2.7-16H450.7c-1.8 5-2.7 10.4-2.7 16c0 26.5 21.5 48 48 48s48-21.5 48-48c0-5.6-1-11-2.7-16H608c17.7 0 32-14.3 32-32s-14.3-32-32-32H144c-8.8 0-16-7.2-16-16V80C128 35.8 92.2 0 48 0H32zM192 80V272c0 26.5 21.5 48 48 48H560c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48H464V176c0 5.9-3.2 11.3-8.5 14.1s-11.5 2.5-16.4-.8L400 163.2l-39.1 26.1c-4.9 3.3-11.2 3.6-16.4 .8s-8.5-8.2-8.5-14.1V32H240c-26.5 0-48 21.5-48 48z"/></svg>
                                <p class="text-gray-600 text-[14px] ml-2">Products</p>
                            </div>
                            <svg  id="icon" class="w-4
                             @if ($stage == 'Add Product'|| $stage == 'Show  Products')
                            rotate-90
                            @else
                            @endif
                             fill-gray-500 text-[12px]" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                        </div>
                        {{-- hidden menu --}}
                        <ul class="p-3
                         @if ($stage == 'Add Product'|| $stage == 'Show  Products')
                        @else
                        hidden
                        @endif  font-thin text-sm max-w-md  text-gray-500 list-disc list-inside ">
                            <li  class="mb-2 p-2 rounded-md relative {{$stage == 'Add Product'?'bg-gray-300 after:bg-gray-500 after:h-full after:w-1 after:rounded-l-lg after:absolute after:top-1/2 after:-right-4 after:-translate-y-[50%]':''}}">
                                <a href={{route('admin.product.create')}}>Add Product</a>
                            </li>
                            <li  class="mb-2 p-2 rounded-md relative {{$stage == 'Show  Products'?'bg-gray-300 after:bg-gray-500 after:h-full after:w-1 after:rounded-l-lg after:absolute after:top-1/2 after:-right-4 after:-translate-y-[50%]':''}}">
                                <a href={{route('admin.product.index')}}>Show  Products</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                {{-- APPS & pages --}}
                <p class="relative mb-6 text-gray-400 text-xs before:bg-gray-300 before:w-8 before:h-0.5 before:absolute before:top-1/2 before:-translate-y-[50%] before:-left-9">APPS & PAGES</p>
                    <ul class="h-full ">
                        {{-- chat --}}
                        <li  class="select-none flex flex-col transition-all duration-500 rounded-sm relative {{$stage == 'Chat'?'bg-gray-300 after:bg-gray-500 after:h-full after:w-1 after:rounded-l-lg after:absolute after:top-1/2 after:-right-4 after:-translate-y-[50%]':''}}">
                            <div id="menu" class="flex justify-between items-center p-2 rounded-md hover:bg-gray-100 hover:cursor-pointer ">
                                <div class="flex items-center">
                                    <svg class="w-4 fill-gray-500 text-[14px]"   xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M88.2 309.1c9.8-18.3 6.8-40.8-7.5-55.8C59.4 230.9 48 204 48 176c0-63.5 63.8-128 160-128s160 64.5 160 128s-63.8 128-160 128c-13.1 0-25.8-1.3-37.8-3.6c-10.4-2-21.2-.6-30.7 4.2c-4.1 2.1-8.3 4.1-12.6 6c-16 7.2-32.9 13.5-49.9 18c2.8-4.6 5.4-9.1 7.9-13.6c1.1-1.9 2.2-3.9 3.2-5.9zM0 176c0 41.8 17.2 80.1 45.9 110.3c-.9 1.7-1.9 3.5-2.8 5.1c-10.3 18.4-22.3 36.5-36.6 52.1c-6.6 7-8.3 17.2-4.6 25.9C5.8 378.3 14.4 384 24 384c43 0 86.5-13.3 122.7-29.7c4.8-2.2 9.6-4.5 14.2-6.8c15.1 3 30.9 4.5 47.1 4.5c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176zM432 480c16.2 0 31.9-1.6 47.1-4.5c4.6 2.3 9.4 4.6 14.2 6.8C529.5 498.7 573 512 616 512c9.6 0 18.2-5.7 22-14.5c3.8-8.8 2-19-4.6-25.9c-14.2-15.6-26.2-33.7-36.6-52.1c-.9-1.7-1.9-3.4-2.8-5.1C622.8 384.1 640 345.8 640 304c0-94.4-87.9-171.5-198.2-175.8c4.1 15.2 6.2 31.2 6.2 47.8l0 .6c87.2 6.7 144 67.5 144 127.4c0 28-11.4 54.9-32.7 77.2c-14.3 15-17.3 37.6-7.5 55.8c1.1 2 2.2 4 3.2 5.9c2.5 4.5 5.2 9 7.9 13.6c-17-4.5-33.9-10.7-49.9-18c-4.3-1.9-8.5-3.9-12.6-6c-9.5-4.8-20.3-6.2-30.7-4.2c-12.1 2.4-24.7 3.6-37.8 3.6c-61.7 0-110-26.5-136.8-62.3c-16 5.4-32.8 9.4-50 11.8C279 439.8 350 480 432 480z"/></svg>
                                    <p class="text-gray-600 text-sm ml-2">Chat</p>
                                </div>
                            </div>
                        </li>
                        {{-- calendarr --}}
                        <li  class="select-none flex flex-col transition-all my-2 duration-500 rounded-md relative {{$stage == 'Calendar'?'bg-gray-300 after:bg-gray-500 after:h-full after:w-1 after:rounded-l-lg after:absolute after:top-1/2 after:-right-4 after:-translate-y-[50%]':''}}">
                            <a href={{route('admin.calendar')}}>
                                <div id="menu" class="flex justify-between items-center p-2 rounded-md hover:bg-gray-100 hover:cursor-pointer ">
                                    <div class="flex items-center ">
                                        <svg class="w-4 fill-gray-500 text-[14px]"  xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M96 32V64H48C21.5 64 0 85.5 0 112v48H448V112c0-26.5-21.5-48-48-48H352V32c0-17.7-14.3-32-32-32s-32 14.3-32 32V64H160V32c0-17.7-14.3-32-32-32S96 14.3 96 32zM448 192H0V464c0 26.5 21.5 48 48 48H400c26.5 0 48-21.5 48-48V192z"/></svg>
                                        <p class="text-gray-600 text-sm ml-2">Calendar</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                {{-- support --}}
                <p class="relative mb-6 text-gray-400 text-xs before:bg-gray-300 before:w-8 before:h-0.5 before:absolute before:top-1/2 before:-translate-y-[50%] before:-left-9">MISC</p>
                <ul class="h-full ">
                    <li  class="select-none flex flex-col transition-all duration-500 mb-2 rounded-md relative {{$stage == 'Support'?'bg-gray-300 after:bg-gray-500 after:h-full after:w-1 after:rounded-l-lg after:absolute after:top-1/2 after:-right-4 after:-translate-y-[50%]':''}}">
                        <div id="menu" class="flex justify-between items-center p-2 rounded-md hover:bg-gray-100 hover:cursor-pointer ">
                            <div class="flex items-center ">
                                <svg class="w-4 fill-gray-500 text-[14px]"  xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z"/></svg>
                                <p class="text-gray-600 text-sm ml-2">Support</p>
                            </div>
                        </div>
                    </li>
                    <li   class="select-none flex flex-col transition-all duration-500 mb-2 rounded-md relative {{$stage == 'Documentation'?'bg-gray-300 after:bg-gray-500 after:h-full after:w-1 after:rounded-l-lg after:absolute after:top-1/2 after:-right-4 after:-translate-y-[50%]':''}}">
                        <div id="menu" class="flex justify-between items-center p-2 rounded-md hover:bg-gray-100 hover:cursor-pointer ">
                            <div class="flex items-center ">
                                <svg class="w-4 fill-gray-500 text-[14px]"  xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM112 256H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
                                <p class="text-gray-600 text-sm ml-2">Documentation</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
    </div>
<script src="/js/Sidbar.js"></script>
