<x-product-layout>
    <div class="w-full h-screen flex bg-gray-100">
        {{-- sidbare --}}
        <x-sidbare stage="Show  Products" btn="false"/>
        {{-- setting --}}
        <section class="m-2 w-full sm:w-[500px] md:w-[750px] lg:w-[860px]  xl:w-[1100px] mx-auto h-auto px-5 py-3  ">
            {{-- header --}}
            <x-header-dashboard :notficiations="$notficiations" />
            <div class="p-4 w-full  shadow-md stroke-gray-600 flex items-center justify-between flex-wrap bg-white rounded-lg">
                <div class="px-4  flex-auto flex justify-between relative after:bg-gray-200 after:w-0.5 after:h-full after:absolute after:top-0 after:right-0">
                    <div class="">
                        <p class="text-sm text-gray-500 opacity-90 font-medium">In-Store Sales</p>
                        <h1 class="text-2xl font-medium text-gray-500 my-0.5">$5,345.43</h1>
                        <p class="text-sm opacity-50 text-gray-800">5k orders <small class="bg-green-300 text-green-950 p-0.5 rounded-sm">+5.7%</small></p>
                    </div>
                    <div class=" ml-4">
                       <div class="bg-gray-300 flex justify-center items-center p-2 rounded-md">
                         <svg class=" fill-gray-500" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M36.8 192H603.2c20.3 0 36.8-16.5 36.8-36.8c0-7.3-2.2-14.4-6.2-20.4L558.2 21.4C549.3 8 534.4 0 518.3 0H121.7c-16 0-31 8-39.9 21.4L6.2 134.7c-4 6.1-6.2 13.2-6.2 20.4C0 175.5 16.5 192 36.8 192zM64 224V384v80c0 26.5 21.5 48 48 48H336c26.5 0 48-21.5 48-48V384 224H320V384H128V224H64zm448 0V480c0 17.7 14.3 32 32 32s32-14.3 32-32V224H512z"/></svg>
                       </div>
                    </div>
                </div>
                <div class="px-4  flex-auto flex justify-between relative after:bg-gray-200 after:w-0.5 after:h-full after:absolute after:top-0 after:right-0">
                    <div class="">
                        <p class="text-sm text-gray-500 opacity-90 font-medium">In-Store Sales</p>
                        <h1 class="text-2xl font-medium text-gray-500 my-0.5">$5,345.43</h1>
                        <p class="text-sm opacity-50 text-gray-800">5k orders <small class="bg-green-300 text-green-950 p-0.5 rounded-sm">+5.7%</small></p>
                    </div>
                    <div class=" ml-4">
                       <div class="bg-gray-300 flex justify-center items-center p-2 rounded-md">
                         <svg class=" fill-gray-500" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M36.8 192H603.2c20.3 0 36.8-16.5 36.8-36.8c0-7.3-2.2-14.4-6.2-20.4L558.2 21.4C549.3 8 534.4 0 518.3 0H121.7c-16 0-31 8-39.9 21.4L6.2 134.7c-4 6.1-6.2 13.2-6.2 20.4C0 175.5 16.5 192 36.8 192zM64 224V384v80c0 26.5 21.5 48 48 48H336c26.5 0 48-21.5 48-48V384 224H320V384H128V224H64zm448 0V480c0 17.7 14.3 32 32 32s32-14.3 32-32V224H512z"/></svg>
                       </div>
                    </div>
                </div>
                <div class="px-4  flex-auto flex justify-between relative after:bg-gray-200 after:w-0.5 after:h-full after:absolute after:top-0 after:right-0">
                    <div class="">
                        <p class="text-sm text-gray-500 opacity-90 font-medium">In-Store Sales</p>
                        <h1 class="text-2xl font-medium text-gray-500 my-0.5">$5,345.43</h1>
                        <p class="text-sm opacity-50 text-gray-800">5k orders <small class="bg-green-300 text-green-950 p-0.5 rounded-sm">+5.7%</small></p>
                    </div>
                    <div class=" ml-4">
                       <div class="bg-gray-300 flex justify-center items-center p-2 rounded-md">
                         <svg class=" fill-gray-500" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M36.8 192H603.2c20.3 0 36.8-16.5 36.8-36.8c0-7.3-2.2-14.4-6.2-20.4L558.2 21.4C549.3 8 534.4 0 518.3 0H121.7c-16 0-31 8-39.9 21.4L6.2 134.7c-4 6.1-6.2 13.2-6.2 20.4C0 175.5 16.5 192 36.8 192zM64 224V384v80c0 26.5 21.5 48 48 48H336c26.5 0 48-21.5 48-48V384 224H320V384H128V224H64zm448 0V480c0 17.7 14.3 32 32 32s32-14.3 32-32V224H512z"/></svg>
                       </div>
                    </div>
                </div>
                <div class="px-4  flex-auto flex justify-between ">
                    <div class="">
                        <p class="text-sm text-gray-500 opacity-90 font-medium">In-Store Sales</p>
                        <h1 class="text-2xl font-medium text-gray-500 my-0.5">$5,345.43</h1>
                        <p class="text-sm opacity-50 text-gray-800">5k orders <small class="bg-green-300 text-green-950 p-0.5 rounded-sm">+5.7%</small></p>
                    </div>
                    <div class=" ml-4">
                       <div class="bg-gray-300 flex justify-center items-center p-2 rounded-md">
                         <svg class=" fill-gray-500" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M36.8 192H603.2c20.3 0 36.8-16.5 36.8-36.8c0-7.3-2.2-14.4-6.2-20.4L558.2 21.4C549.3 8 534.4 0 518.3 0H121.7c-16 0-31 8-39.9 21.4L6.2 134.7c-4 6.1-6.2 13.2-6.2 20.4C0 175.5 16.5 192 36.8 192zM64 224V384v80c0 26.5 21.5 48 48 48H336c26.5 0 48-21.5 48-48V384 224H320V384H128V224H64zm448 0V480c0 17.7 14.3 32 32 32s32-14.3 32-32V224H512z"/></svg>
                       </div>
                    </div>
                </div>
            </div>
           <div class=" w-full mt-4 bg-white rounded-lg shadow-md stroke-gray-600">
            {{-- error --}}
           @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="block sm:inline">{{$error}}</li>
                        @endforeach
                    </ul>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                    </span>
                </div>
           @endif
            {{-- success --}}
            @if(session('success'))
                <div id="success-message" class="bg-indigo-900 text-center py-4 lg:px-4">
                    <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                        <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">Success</span>
                        <span class="font-semibold mr-2 text-left flex-auto">{{ session('success') }}</span>
                        <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
                    </div>
                </div>
            @endif
            <form  action="" class="">
               <div class="p-4 border-b border-gray-300">
                    <p class="text-lg text-gray-500 mb-4">Filter</p>
                    <div  class="flex justify-between items-center gap-x-8">
                        <select name="category" id="" class="tex-sm text-gray-500 flex-auto border-gray-200 rounded-md focus:outline-none py-1 px-2">
                            <option selected>Select Category</option>
                            @foreach ($categories as $category)
                                <option value={{$category->id}}>{{$category->title}}</option>
                            @endforeach
                        </select>
                        <select name="main_category" id="" class="tex-sm text-gray-500 flex-auto border-gray-200 rounded-md focus:outline-none py-1 px-2">
                            <option selected>Select Main Category</option>
                            @foreach ($main_categories as $category)
                                <option value={{$category->id}}>{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="p-4 w-full border-b border-gray-300 flex justify-between items-center md:flex-nowrap flex-wrap md:gap-5 gap-8">
                    <div class="flex-[20%] flex gap-x-1">
                        <input class="py-1 px-2 flex-auto border-gray-200 rounded-md focus:outline-none" placeholder="Name ..." name="Name" />
                        <input class="py-1 px-2 flex-auto border-gray-200 rounded-md focus:outline-none" placeholder="desc ..." name="desc" />
                    </div>
                    <div class="flex-[80%] flex justify-end items-center">
                        <button class="flex mr-4  justify-center items-center bg-gray-200 text-gray-400 px-4 py-1.5 rounded-lg">
                            <svg class="fill-gray-400 mr-1" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V288H216c-13.3 0-24 10.7-24 24s10.7 24 24 24H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zM384 336V288H494.1l-39-39c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l80 80c9.4 9.4 9.4 24.6 0 33.9l-80 80c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l39-39H384zm0-208H256V0L384 128z"/></svg>
                            Export
                        </button>
                            <a class="bg-blue-400 text-white flex justify-center items-center py-1.5 px-4 rounded-lg shadow-md shadow-blue-500 hover:scale-105 transition-transform duration-700"  href={{route('admin.product.create')}}>
                                <svg class="fill-white mr-2" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                                <p>Add Product</p>
                            </a>
                    </div>
               </div>
            </form>
            {{-- pagination --}}
            <div class="relative overflow-x-auto bg-white">
                <table class="w-full text-sm text-left  text-gray-400">
                    {{-- header --}}
                    <thead class="text-xs  text-gray-700 uppercase ">
                        <tr scope="col" class="px-4 py-3">
                            <th scope="col" class="px-4 py-3">
                            </th>
                            <th scope="col" class="px-4 py-3">
                                <input  class="checkbox hover:cursor-pointer" type="checkbox">
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Product name
                            </th>
                            {{-- categort --}}
                            <th scope="col" class="px-4 py-3">
                                <div class="flex items-center">
                                    Category
                                    <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                             <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                             </svg></a>
                                </div>
                            </th>
                            {{-- main cateogry --}}
                            <th scope="col" class="px-4 py-3">
                                <div class="flex items-center">
                                    Main Category
                                    <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                             <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                             </svg></a>
                                </div>
                            </th>
                            {{-- proice --}}
                            <th scope="col" class="px-4 py-3">
                                <div class="flex items-center">
                                    Price
                                    <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                               <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                             </svg></a>
                                </div>
                            </th>
                            {{-- market --}}
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Market
                                    <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                         <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                        </svg>
                                    </a>
                                </div>
                            </th>
                            {{-- action --}}
                            <th scope="col" class="px-6 py-3">
                            </th>
                        </tr>
                    </thead>
                    {{-- body --}}
                    <tbody class="overflow-x-auto">
                            @foreach($pagination as $pagin)
                                <tr class="bg-white border-y border-gray-300 overflow-x-auto ">
                                    <td data-index="{{$pagin->id}}" id="ProductDataShow{{$pagin->id}}" class="hover:cursor-pointer z-40 sticky top-0 left-0 bg-white ">
                                        <div class="px-6 py-4  w-16 flex justify-center items-center h-16 " style="box-shadow:20px 1px 10px 0px white">
                                            <svg class="fill-blue-400 pointer-events-none" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/></svg>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4"><input  class="checkbox hover:cursor-pointer" type="checkbox"></td>
                                    <td class="px-4 py-4 flex items-center">
                                        <div class="w-10 h-10 mr-2">
                                            <img src="/{{$pagin->imgs[0]->path}}" class="w-full h-full object-cover rounded-md" alt="">
                                        </div>
                                        <div class="">
                                            <p class="text-sm text-gray-600 font-semibold">{{$pagin->name}}</p>
                                            <p class="text-xs text-gray-600 opacity-75 font-semibold">{{substr($pagin->desc,0,50)}} ...</p>
                                        </div>
                                    </td>
                                    {{-- category  --}}
                                    <td class="px-4 py-4 relative  after:w-3 after:h-3 after:rounded-full after:absolute after:top-1/2 after:-translate-y-[50%] after:right-6 {{$pagin->categoryName->active?'after:bg-green-800':'after:bg-red-600'}}">
                                        <a class="underline" href={{route('admin.sub-category.show',$pagin->categoryName->id)}}>{{$pagin->categoryName->title}}</a>
                                    </td>
                                    {{-- main scategory --}}
                                    <td class="px-4 py-4 relative  after:w-3 after:h-3 after:rounded-full after:absolute after:top-1/2 after:-translate-y-[50%] after:right-6 {{$pagin->categoryName->BelongTOMainCategory->active?'after:bg-green-800':'after:bg-red-600'}}"">
                                        <a class="underline" href={{route('admin.main-category.show',$pagin->categoryName->BelongTOMainCategory->id)}}>{{$pagin->categoryName->BelongTOMainCategory->title}}</a>
                                    </td>
                                    {{-- price --}}
                                    <td class="px-4 py-4">
                                        {{$pagin->price}}
                                    </td>
                                    {{-- margiet --}}
                                    <td class="px-4 py-4">
                                        {{$pagin->market}}
                                    </td>
                                    {{-- actiob --}}
                                    <td class="px-4 py-4 text-right">
                                            <div  data-index={{$pagin->id}} id="action" class=" flex-[5%]  font-[100] text-[28px] flex justify-center items-center hover:cursor-pointer">
                                                <ul id="menu-product" class=" bg-gray-200 p-1 rounded-md ">
                                                    <li data-index={{$pagin->id}} data-name={{$pagin->name}}  id="remove" class="text-[14px] font-semibold hover:scale-105 transition-none duration-700 text-red-600 ">Remove</li>
                                                    <li data-index={{$pagin->id}} data-name={{$pagin->name}} id="update" class="text-[14px] font-semibold hover:scale-105 transition-none duration-700 text-orange-700">
                                                        <a href={{ route('admin.product.edit', ['product'=>$pagin->id]) }}>Update</a>
                                                    </li>
                                                </ul>
                                                {{-- create Container For Delete --}}
                                                <div id="deleteContainer" class="hidden w-full h-full pointer-event fixed top-0 left-0 justify-center items-center z-50 backdrop-blur-md bg-[rgba(255, 255, 255, 0.2)] " >
                                                    <button id="removeContainerbtn" class="absolute text-gray-900  top-12 right-12">X</button>
                                                    <div id="PdeleteContainer" class="w-[400px] bg-gray-300 rounded-md p-[12px] ">
                                                        <h1 class="text-[23px] text-red-600 font-semibold mt-4">Are your sure to remove</h1>
                                                        <p class="opacity-90 text-black font-medium mt-4 text-base">If you delete this product you can restore during 30 day</p>
                                                        <p class="text-[20px] text-red-600 font-semibold mt-4 leading-4 select-none">Write "<small style="color:black">{{explode(' ',$pagin->name)[0]}}</small>"</p>
                                                        <form id="deleteForm" action={{ route('admin.product.destroy', ['product'=> $pagin->id]) }} method="POST"  class="flex justify-between items-center mt-4">
                                                        @csrf
                                                        @method('DELETE')
                                                            <input type="text" id="inputFaild" class="flex-[80%] border-none rounded-md h-[25px] mt-2 mr-4" />
                                                            <button disabled type="submit" class="flex-[20%] text-red-600 text-[18px] mt-2 bg-white px-2 py-[1px] rounded-md opacity-40" >Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                                <div id="productData{{$pagin->id}}" class="hidden">
                                    <div id="ProductData{{$pagin->id}}Container" class="flex fixed w-screen h-screen top-0 left-0  justify-center items-center z-50 backdrop-blur-md bg-[rgba(255, 255, 255, 0.8)] z-50">
                                        <p id="ProductDataBtn" onclick="hideProductData({{$pagin->id}});" class="w-12 h-12 absolute top-12 right-12 text-3xl bg-gray-500 text-white rounded-full p-4 flex justify-center items-center hover:cursor-pointer">X</p>
                                        <div id="ProductContainer{{$pagin->id}}" class="bg-gray-100 w-[50%] shadow-lg shadow-gray-400">
                                            {{-- name --}}
                                            <div class="flex gap-x-7 items-center border-b border-gray-300 p-4">
                                                    <p class="flex-[40%]">product:</p>
                                                    <div class="flex-[60%] flex">
                                                        <div class="mr-2">
                                                            <img id="product-img{{$pagin->id}}" src="" class="w-10 h-10 object-fill rounded-md" alt="">
                                                        </div>
                                                        <div class="">
                                                            <p id="product-name{{$pagin->id}}" class="text-sm text-gray-600 font-semibold"></p>
                                                            <p id="product-desc{{$pagin->id}}" class="text-xs text-gray-600 opacity-75 font-semibold"></p>
                                                        </div>
                                                    </div>
                                            </div>
                                            {{-- main category --}}
                                            <div class="flex gap-x-7 items-center border-b border-gray-300 p-4">
                                                    <P class="flex-[40%]">Main Cateogry: </P>
                                                    <a id="main-category-link{{$pagin->id}}" class="flex-[60%] underline" href=""></a>
                                            </div>
                                            {{-- sub category --}}
                                            <div class="flex gap-x-7 items-center border-b border-gray-300 p-4">
                                                    <P class="flex-[40%]">Sub Category:</P>
                                                    <a id="sub-category-link{{$pagin->id}}" class="flex-[60%] underline" href=""></a>
                                            </div>
                                            {{-- PRICE --}}
                                            <div class="flex gap-x-7 items-center border-b border-gray-300 p-4">
                                                    <P class="flex-[40%]">Price:</p>
                                                    <p id="product-price{{$pagin->id}}" class="flex-[60%]"></p>
                                            </div>
                                            {{-- MARKET --}}
                                            <div class="flex gap-x-7 items-center border-b border-gray-300 p-4">
                                                    <P class="flex-[40%]">Market:</p>
                                                    <p id="product-market{{$pagin->id}}" class="flex-[60%]"></p>
                                            </div>
                                            {{-- Color --}}
                                            <div class="flex gap-x-7 items-center border-b border-gray-300 p-4">
                                                    <P class="flex-[40%]">Colors:</p>
                                                    <div id="product-colors{{$pagin->id}}" class="flex-[60%] flex gap-x-2">
                                                    </div>
                                            </div>
                                            {{-- Concerns --}}
                                            <div class="flex gap-x-7 items-center border-b border-gray-300 p-4">
                                                    <P class="flex-[40%]">Concerns:</p>
                                                    <div id="product-concerns{{$pagin->id}}" class="flex-[60%] flex gap-x-2">
                                                    </div>
                                            </div>
                                            {{-- Finish --}}
                                            <div class="flex gap-x-7 items-center border-b border-gray-300 p-4">
                                                    <P class="flex-[40%]">Finish:</p>
                                                    <div id="product-finish{{$pagin->id}}" class="flex-[60%] flex gap-x-2">
                                                    </div>
                                            </div>
                                            {{-- Formulation --}}
                                            <div class="flex gap-x-7 items-center border-b border-gray-300 p-4">
                                                    <P class="flex-[40%]">Formulation:</p>
                                                    <div id="product-formulation{{$pagin->id}}" class="flex-[60%] flex gap-x-2">
                                                    </div>
                                            </div>
                                            {{-- Skin --}}
                                            <div class="flex gap-x-7 items-center border-b border-gray-300 p-4">
                                                    <P class="flex-[40%]">Skin:</p>
                                                    <div id="product-skin{{$pagin->id}}" class="flex-[60%] flex gap-x-2">
                                                    </div>
                                            </div>
                                            {{-- Size --}}
                                            <div class="flex gap-x-7 items-center border-b border-gray-300 p-4">
                                                    <P class="flex-[40%]">Size:</p>
                                                    <div id="product-size{{$pagin->id}}" class="flex-[60%] flex gap-x-2">
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <script>
                                function hideProductData(id){
                                    const productDataElement = document.getElementById(`productData${id}`);
                                    if (productDataElement) {
                                        productDataElement.classList.add("hidden");
                                    }
                                }

                            </script>
                            @foreach($pagination as $pagin)
                                <script>
                                    document.addEventListener("DOMContentLoaded", function () {
                                    let showProductDataBtn = document.getElementById(`ProductDataShow{{$pagin->id}}`);
                                    showProductDataBtn.addEventListener("click", function () {
                                        let dataId = showProductDataBtn.getAttribute("data-index");
                                        let productDataElement = document.getElementById(`productData${dataId}`);
                                        if (productDataElement) {
                                            productDataElement.classList.remove("hidden");

                                            // تعبئة البيانات المنتج هنا
                                            document.getElementById("product-img{{$pagin->id}}").src = "/{{$pagin->imgs[0]->path}}";
                                            document.getElementById("product-name{{$pagin->id}}").textContent = `{{$pagin->name}}`;
                                            document.getElementById("product-desc{{$pagin->id}}").innerHTML = `{{$pagin->desc}}`;
                                            document.getElementById("main-category-link{{$pagin->id}}").href = "{{route('admin.main-category.show',$pagin->categoryName->BelongTOMainCategory->id)}}";
                                            document.getElementById("main-category-link{{$pagin->id}}").textContent = "{{$pagin->categoryName->BelongTOMainCategory->title}}";
                                            document.getElementById("sub-category-link{{$pagin->id}}").href = "{{route('admin.sub-category.show',$pagin->categoryName->id)}}";
                                            document.getElementById("sub-category-link{{$pagin->id}}").textContent ="{{$pagin->categoryName->title}}";
                                            document.getElementById("product-price{{$pagin->id}}").textContent = "{{$pagin->price}}";
                                            document.getElementById("product-market{{$pagin->id}}").textContent = "{{$pagin->market}}";

                                            // معالجة الألوان
                                            const colors = @json(explode(',', $pagin->Color));
                                            const colorContainer = document.getElementById("product-colors{{$pagin->id}}");
                                            colorContainer.innerHTML = "";
                                            colors.forEach(color => {
                                                const colorElement = document.createElement("p");
                                                colorElement.textContent = color;
                                                colorContainer.appendChild(colorElement);
                                            });

                                            // معالجة المخاوف
                                            const concerns = @json(explode(',', $pagin->Concerns));
                                            const concernsContainer = document.getElementById("product-concerns{{$pagin->id}}");
                                            concernsContainer.innerHTML = "";
                                            concerns.forEach(concern => {
                                                const concernElement = document.createElement("p");
                                                concernElement.textContent = concern;
                                                concernsContainer.appendChild(concernElement);
                                            });

                                            // معالجة الانتهاء
                                            const finishes = @json(explode(',', $pagin->Finish));
                                            const finishesContainer = document.getElementById("product-finish{{$pagin->id}}");
                                            finishesContainer.innerHTML = "";
                                            finishes.forEach(finish => {
                                                const finishElement = document.createElement("p");
                                                finishElement.textContent = finish;
                                                finishesContainer.appendChild(finishElement);
                                            });

                                            // معالجة التركيب
                                            const formulations = @json(explode(',', $pagin->Formulation));
                                            const formulationsContainer = document.getElementById("product-formulation{{$pagin->id}}");
                                            formulationsContainer.innerHTML = "";
                                            formulations.forEach(formulation => {
                                                const formulationElement = document.createElement("p");
                                                formulationElement.textContent = formulation;
                                                formulationsContainer.appendChild(formulationElement);
                                            });

                                            // معالجة البشرة
                                            const skins = @json(explode(',', $pagin->Skin));
                                            const skinsContainer = document.getElementById("product-skin{{$pagin->id}}");
                                            skinsContainer.innerHTML = "";
                                            skins.forEach(skin => {
                                                const skinElement = document.createElement("p");
                                                skinElement.textContent = skin;
                                                skinsContainer.appendChild(skinElement);
                                            });

                                            // معالجة الحجم
                                            const sizes = @json(explode(',', $pagin->Size));
                                            const sizesContainer = document.getElementById("product-size{{$pagin->id}}");
                                            sizesContainer.innerHTML = "";
                                            sizes.forEach(size => {
                                                const sizeElement = document.createElement("p");
                                                sizeElement.textContent = size;
                                                sizesContainer.appendChild(sizeElement);
                                            });
                                        }
                                    })
                                    });
                                </script>
                            @endforeach
                    </tbody>
                </table>
                <div class="px-6 py-3 mb-4 flex justify-between items-center">
                        <form method="get" class="" action="{{ route('admin.product.index') }}">
                            <input class="py-1 px-2 flex-auto border-gray-200 rounded-md focus:outline-none" type="number" name="perPage" id="perPage" value="{{ request('perPage', $pagination->perPage()) }}">
                            <button class="bg-blue-500 p-1 rounded-md text-white" type="submit">edit</button>
                        </form>
                        {{ $pagination->onEachSide(2)->links() }}
                </div>
            </div>
           </div>
        </section>
    </div>
    <script src="/js/products.js"></script>
</x-product-layout>
