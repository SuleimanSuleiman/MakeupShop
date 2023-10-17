<x-category-layout>
            <div class="w-full h-screen flex">
            {{-- sidbare --}}
            <x-sidbare stage="Show Categories" btn="false"/>
            {{-- setting --}}
            <section class="flex-[90%] bg-gray-50">
                <div class="p-4">
                     <x-header-dashboard :notficiations="$notficiations" />
                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                    <div class="border-b-2 border-gray-300 py-2 flex items-center ">
                        <small class="hover:cursor-pointer underline">
                            <a href={{route('admin.main-category.index')}}>Resell All</a>
                        </small>
                        <form action={{route('admin.searchSubCategory')}} class="text-end relative mx-auto min-w-[400px]">
                            @csrf
                            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                    </svg>
                                </div>
                                <input autocomplete="false" data-category="main" name="value" type="search" id="search" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-200 rounded-lg bg-white " placeholder="Search Category..." required>
                                <div id="menuSearch" class="hidden absolute left-0 w-full h-96 overflow-y-scroll bg-gray-100 rounded-md">
                                    <div id="loading-message" class="hidden min-w-[20px]">Loading...</div>
                                    <ul id="ulMenuSearch" class="text-start">
                                    </ul>
                                </div>
                            </div>
                        </form>
                        <button class="ml-4 border-[2px] rounded-3xl border-gray-400 px-3 py-1 hover:bg-gray-700 hover:text-white transition-all duration-700 flex items-center hover:fill-white">
                            Action
                            <svg id="svg" class="w-3 ml-2 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/>
                            </svg>
                        </button>
                    </div>
                    <section class="w-full h-full mt-4  border-gray-600">
                        <div class="min-h-[70vh] ">
                            {{-- header --}}
                            <section class="flex justify-start items-center h-10 p-2 bg-gray-200">
                                <div id="checkboxAll" class="flex-[5%] "><input class="hover:cursor-pointer" type="checkbox"></div>
                                <p class="flex-[10%]  font-semibold mr-4 ">Title</p>
                                <p class="flex-[60%] font-semibold mr-4">Description</p>
                                <p class="flex-[20%] font-semibold  mr-4">Control</p>
                                <p class="flex-[5%] font-semibold">Action</p>
                            </section>
                            {{-- body --}}
                            @foreach($paginator as $pagin)
                                <section id="body" class="flex justify-start items-center p-2 bg-white border-x-2 border-b-2 border-gray-200">
                                    <div class="flex-[5%] "><input  class="checkbox hover:cursor-pointer" type="checkbox"></div>
                                    <p class="flex-[10%]  font-[100] text-[14px] overflow-auto mr-4">{{$pagin->title}}</p>
                                    <p class="flex-[60%] font-[100] text-[14px] h-full pr-12 overflow-y-auto mr-4 flex items-center">{{$pagin->desc}}</p>
                                    <div data-index={{$pagin->id}}  data-category="main"  id="activeButton"  class="active flex flex-[20%] font-[100] text-[12px] hover:cursor-pointer mr-4">
                                        <div id="parentBtn" class="w-[38px] h-[20px] rounded-xl mr-2 relative transition-all duration-400 {{$pagin->active == true?"bg-yellow-500":"bg-gray-300"}}">
                                            <p id='btn' class="{{$pagin->active == true?"right-[3px] ":"right-[20px]"}} w-[15px] h-[15px] top-1/2 -translate-y-[50%] absolute transition-all duration-400 bg-white rounded-full px-1"></p>
                                        </div>
                                        @if ($pagin->active)
                                            <small id="label" class="text-green-700 text-[14px] ">Active</small>
                                        @else
                                            <small id="label" class="text-red-700 text-[14px] font-semibold">Inactive</small>
                                        @endif
                                    </div>
                                    <div  data-index={{$pagin->id}} id="action" class=" flex-[5%] relative font-[100] text-[28px] flex justify-center items-center hover:cursor-pointer">
                                        <svg id="icon" class="w-[6px] fill-gray-700 transition-all duration-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512">
                                            <path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"/>
                                        </svg>
                                        <ul id="menu" class="hidden  absolute -left-16 bg-gray-300 p-1 rounded-md ">
                                            <li data-index={{$pagin->id}} data-title={{$pagin->title}}  id="remove" class="text-[14px] font-semibold hover:scale-105 transition-none duration-700 text-red-600 ">Remove</li>
                                            <li data-index={{$pagin->id}} data-title={{$pagin->title}} id="update" class="text-[14px] font-semibold hover:scale-105 transition-none duration-700 text-orange-700">
                                                <a href={{ route('admin.main-category.edit', ['main_category'=>$pagin->id]) }}>Update</a>
                                            </li>
                                        </ul>

                                        {{-- create Container For Delete --}}
                                        <div id="deleteContainer" class="hidden w-full h-full fixed top-0 left-0 justify-center items-center z-50 backdrop-blur-md bg-[rgba(255, 255, 255, 0.2)] " >
                                            <div id="PdeleteContainer" class="w-[400px] h-[300px] bg-gray-300 rounded-md p-[12px] ">
                                                <h1 class="text-[23px] text-red-600 font-semibold mt-4">Are your sure to remove</h1>
                                                <p class="opacity-90 text-black font-medium mt-4">If you delete this category will removed any products in this category</p>
                                            <p class="text-[20px] text-red-600 font-semibold mt-4 leading-4 select-none">Write "<small style="color:black">{{explode(' ',$pagin->title)[0]}}</small>"</p>
                                                <form id="deleteForm" action={{ route('admin.main-category.destroy', ['main_category'=> $pagin->id]) }} method="POST"  class="flex justify-between items-center mt-4">
                                                @csrf
                                                @method('DELETE')
                                                    <input type="text" id="inputFaild" class="flex-[80%] border-none rounded-md h-[25px] mt-2 mr-4" />
                                                    <button disabled type="submit" class="flex-[20%] text-red-600 text-[18px] mt-2 bg-white px-2 py-[1px] rounded-md opacity-40" >Delete</button>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            @endforeach
                        </div>
                        {{-- footer --}}
                        <div  class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
                            <div class="flex flex-1 justify-between sm:hidden">
                                <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                                <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
                            </div>
                            <div id="pagBtn" class="flex items-center justify-between h-11 w-full">
                                {{ $paginator->links() }}
                            </div>
                    </section>
                </div>
            </section>
        </div>
    <script src="/js/pagination.js"></script>
</x-category-layout>
