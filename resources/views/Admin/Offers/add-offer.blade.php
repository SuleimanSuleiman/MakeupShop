<x-offer-layout>
        <section class="w-full h-screen flex justify-start items-center">
            <div class="flex-[30%] w-full h-full ">
                <img src="/images/add_offer.jpg" class="object-cover w-full h-full" alt="Loading Image ...">
            </div>
            <div class="flex-[70%] w-full h-full">
                <div class="flex justify-between items-center px-4 py-1">
                    <a href={{route('admin.sub-category.index')}} class="flex justify-center items-center rounded-xl w-[40px] h-[40px] border border-gray-500 hover:cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M459.5 440.6c9.5 7.9 22.8 9.7 34.1 4.4s18.4-16.6 18.4-29V96c0-12.4-7.2-23.7-18.4-29s-24.5-3.6-34.1 4.4L288 214.3V256v41.7L459.5 440.6zM256 352V256 128 96c0-12.4-7.2-23.7-18.4-29s-24.5-3.6-34.1 4.4l-192 160C4.2 237.5 0 246.5 0 256s4.2 18.5 11.5 24.6l192 160c9.5 7.9 22.8 9.7 34.1 4.4s18.4-16.6 18.4-29V352z"/></svg>
                    </a>
                    <x-translate-bottun />
                </div>
                    <x-input-error :messages="$errors->get('message')" class="m-2" />
                <div class="py-12 px-4">

                    <h1 class="text-2xl text-gray-700 font-semibold my-4">Add New Category</h1>
                    <form action={{route('admin.sub-category.store')}} method="POST" class="w-full max-w-xl ">
                        @csrf
                        @method('POST')
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                {{-- title in en --}}
                                <x-input-label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2" for="title_en" value="Title in english" />
                                <x-text-input id="title_en" class="block mt-1 w-full"
                                                type="text"
                                                name="title_en"
                                                required />
                                <x-input-error :messages="$errors->get('title_en')" class="mt-2" />

                            </div>
                            {{-- title in ar --}}
                            <div class="w-full md:w-1/2 px-3">
                                <x-input-label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2" for="title_er" value="Title in Arabic" />
                                <x-text-input id="title_ar" class="block mt-1 w-full"
                                                type="text"
                                                name="title_ar"
                                                required />
                                <x-input-error :messages="$errors->get('title_ar')" class="mt-2" />
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="flex">
                                {{-- description in english --}}
                                <div class="w-full px-3">
                                    <x-input-label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2" for="desc_en" value="Write Desc about this category in English" />
                                    <x-text-area id="desc_en" class="block mt-1 p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " name="desc_en"/>
                                    <x-input-error :messages="$errors->get('desc_en')" class="mt-2" />
                                </div>
                                {{-- description in arabic --}}
                                <div class="w-full px-3">
                                    <x-input-label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2" for="desc_ar" value="Write Desc about this category in Arabic" />
                                    <x-text-area id="desc_ar" class="block mt-1 p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " name="desc_ar"/>
                                    <x-input-error :messages="$errors->get('desc_ar')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap justify-between -mx-3 mb-2">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <x-input-label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2" value="State The Category " />
                                <div class="relative">
                                    <select name="active" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                    <option selected value="true">Active</option>
                                    <option value="false">No Active</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('active')" class="mt-2" />
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0 flex justify-end items-end">
                                <x-primary-button >Create New</x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
</x-offer-layout>
