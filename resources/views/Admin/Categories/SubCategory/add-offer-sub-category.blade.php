<x-category-layout>
        <section class="w-full h-screen flex justify-start items-center">
            <x-sidbare stage="Add Sub Offer" btn="false"/>
            <div class="flex-[90%] w-full h-full p-4 bg-gray-100 ">
                 <x-header-dashboard :notficiations="$notficiations" />
                    <x-input-error :messages="$errors->get('message')" class="m-2" />
                <div class="px-4">
                    <h1 class="text-2xl text-gray-700 font-semibold mb-8">Add New Offer For Sub Category</h1>
                    <form action={{route('admin.offer.store')}} method="POST" class="w-full" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="flex flex-nowrap -mx-3 mb-2 w-full">
                            {{-- title in en --}}
                            <div class="w-full md:w-1/2 mb-3 md:mb-0 bg-white p-4 rounded-lg shadow-sm shadow-gray-500">
                                <x-input-label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2" for="OfferName_en" value="Offer Name (en)" />
                                <x-text-input id="OfferName_en" class="block mt-1 w-full"
                                                type="text"
                                                name="OfferName_en"
                                                required />
                                <x-input-error :messages="$errors->get('OfferName_en')" class="mt-2" />


                            </div>
                            {{-- title in ar --}}
                             <div class="w-full md:w-1/2 mb-3 ml-4 md:mb-0 bg-white p-4 rounded-lg shadow-sm shadow-gray-500">
                                <x-input-label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2" for="OfferName_ar" value="Offer Name (ar)" />
                                <x-text-input id="OfferName_ar" class="block mt-1 w-full"
                                                type="text"
                                                name="OfferName_ar"
                                                required />
                                <x-input-error :messages="$errors->get('OfferName_ar')" class="mt-2" />
                            </div>
                        </div>
                         <div class="flex flex-nowrap -mx-3 mb-2 w-full">
                            <div class="flex flex-nowrap mb-6 w-full">
                                {{-- description in english --}}
                                <div class="w-full md:w-1/2 mb-6 md:mb-0 bg-white p-4 rounded-lg shadow-sm shadow-gray-500">
                                    <x-input-label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-4" for="desc_en" value="Write Desc about this Offer in English" />
                                    <x-text-area id="desc_en" class="block mt-1 p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " name="desc_en"/>
                                    <x-input-error :messages="$errors->get('desc_en')" class="mt-2" />
                                </div>
                                {{-- description in arabic --}}
                                <div class="w-full md:w-1/2 mb-6 ml-4  md:mb-0 bg-white p-4 rounded-lg shadow-sm shadow-gray-500">
                                    <x-input-label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-4" for="desc_ar" value="Write Desc about this Offer in Arabic" />
                                    <x-text-area id="desc_ar" class="block mt-1 p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " name="desc_ar"/>
                                    <x-input-error :messages="$errors->get('desc_ar')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                         <div class="flex flex-nowrap -mx-3 mb-2 w-full">
                            <div class="flex flex-nowrap mb-6 w-full">
                                {{-- start date --}}
                                <div class="w-full md:w-1/2 mb-6 md:mb-0 bg-white p-4 rounded-lg shadow-sm shadow-gray-500">
                                    <x-input-label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2" for="startdate" value="Start Date" />
                                    <x-text-input id="startdate" class="block mt-1 w-full"
                                                    type="datetime-local"
                                                    name="startdate"
                                                    required />
                                    <x-input-error :messages="$errors->get('startdate')" class="mt-2" />
                                </div>
                                {{-- end date--}}
                                <div class="w-full md:w-1/2 mb-6 ml-4  md:mb-0 bg-white p-4 rounded-lg shadow-sm shadow-gray-500">
                                    <x-input-label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2" for="enddate" value="End Date" />
                                    <x-text-input id="enddate" class="block mt-1 w-full"
                                                    type="datetime-local"
                                                    name="EndDate"
                                                    required />
                                    <x-input-error :messages="$errors->get('EndDate')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-nowrap items-center justify-between -mx-3 mb-2">
                            {{-- discountPercentage --}}
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0 bg-white p-4 rounded-lg shadow-sm shadow-gray-500">
                                <x-input-label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2" for="DiscountPercentage" value="Discount Percentage (%)" />
                                <x-text-input id="DiscountPercentage" class="block mt-1 w-full"
                                                type="number"
                                                name="DiscountPercentage"
                                                step="0.000004"
                                                required />
                                <x-input-error :messages="$errors->get('DiscountPercentage')" class="mt-2" />
                            </div>
                            {{-- sub cateogries --}}
                            <div class="w-full md:w-1/3 px-3 ml-4 mb-6 md:mb-0 bg-white p-4 rounded-lg shadow-sm shadow-gray-500">
                                <x-input-label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2" value="Main Category " />
                                <div class="relative">
                                    <select required name="category_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                        <option selected    >Select a sub cateogires</option>
                                        @foreach ($sub_categories as $sub_category)
                                            <option
                                                aria-placeholder="$main_category->getTranslations('desc')['en']"
                                                value={{$sub_category->id}}
                                                >
                                                {{$sub_category->title}}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('active')" class="mt-2" />
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </div>
                                </div>
                            </div>
                            {{-- upload image --}}
                            <div class="w-full md:w-1/3 px-3 ml-2 md:mb-0 bg-white p-3 rounded-lg shadow-sm shadow-gray-500">
                                <label class="block mb-2 text-sm font-medium text-gray-600 " for="file_input">Upload file</label>
                                <input name="img" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " aria-describedby="file_input_help" id="file_input" type="file">
                                <p class="mt-1 text-xs text-gray-600 " id="file_input_help">SVG, PNG, JPG or GIF</p>
                            </div>
                            {{-- submit --}}
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0 flex justify-end items-end">
                                <x-primary-button >Create New offer</x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
</x-category-layout>
