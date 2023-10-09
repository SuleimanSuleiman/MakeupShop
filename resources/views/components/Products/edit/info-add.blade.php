<section class="h-full  flex flex-wrap gap-3 mx-4">
    {{-- desc --}}
        <div class="flex-[30%] px-3 mb-6 md:mb-0 bg-white p-4 rounded-lg shadow-sm shadow-gray-500">
            <p class="text-xl font-semibold text-gray-600 opacity-90 mb-2">Description</p>
            <div class="p-4 border border-gray-300 rounded-md">
                <x-input-label for="name" value="Product Name" class="text-base  text-gray-600 opacity-90 mb-2" />
                <x-text-input id="name" class="block mt-1 w-full"
                    type="text"
                    name="name"
                    required
                    value="{{$product->name}}"
                    autocomplete="new-name"
                    />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />

                <fieldset class="flex items-center justify-between mt-4">
                    <x-input-label for="desc" value="Product Description" class="text-base  text-gray-600 opacity-90 mb-2" />
                    <x-input-label for="desc" value="Upload .txt file" class="text-base  text-gray-600 opacity-90 mb-2"  />
                </fieldset>
                <x-text-area id="desc" class="block mt-1 w-full"
                    type="text"
                    name="desc"
                    required autocomplete="new-name" >{{$product->desc}}</x-text-area>
                <x-input-error :messages="$errors->get('desc')" class="mt-2" />
            </div>
        </div>
        {{-- category --}}
        <div class="flex-[30%] flex flex-col justify-between p-4  mb-6 md:mb-0 bg-white rounded-lg shadow-sm shadow-gray-500">
            <div class="p-4 border border-gray-300 rounded-md ">
                    <x-input-label for="name" value="Product Category"  class="text-base  text-gray-600 opacity-90 "/>
                    <x-input-select name="category_id" selected="$product->category_id" :options="$categories" />
                    <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
            </div>
            {{-- market --}}
            <div class="p-4 border border-gray-300 rounded-md">
                    <x-input-label for="market" value="Product Market" class="text-base  text-gray-600 opacity-90 mb-2" />
                    <x-text-input id="market" class="block mt-1 w-full"
                                    type="text"
                                    name="market"
                                    value="{{$product->market}}"
                                    required/>
                    <x-input-error :messages="$errors->get('market')" class="mt-2" />
            </div>
        </div>
        {{-- Quantity --}}
         <div class="flex-[30%] flex flex-col justify-between px-3 mb-6 md:mb-0 bg-white p-4 rounded-lg shadow-sm shadow-gray-500">
            <div class="p-4 border border-gray-300 rounded-md">
                    <x-input-label for="Quantity" value="Product Quantity" class="text-base  text-gray-600 opacity-90 mb-2" />
                    <x-text-input id="Quantity" class="block mt-1 w-full"
                                    type="number"
                                    name="Quantity"
                                    value="{{$product->Quantity}}"
                                    required/>
                    <x-input-error :messages="$errors->get('Quantity')" class="mt-2" />
            </div>
            <div class="px-3 mb-6 md:mb-0 bg-white p-4 rounded-lg ">
            <div class="p-4 border border-gray-300 rounded-md">
                <x-input-label for="price" value="Product Price $" class="text-base  text-gray-600 opacity-90 mb-2" />
                <x-text-input id="price" class="block mt-1 w-full px-1"
                    type="number"
                    step="0.01"
                    value="{{$product->price}}"
                    name="price"
                    required
                    autocomplete="new-price"
                    />
                <x-input-error :messages="$errors->get('price')" class="mt-2" />
            </div>
        </div>
        </div>
</section>
