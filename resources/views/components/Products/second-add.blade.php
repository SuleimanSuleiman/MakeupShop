<section class="h-full  flex flex-wrap gap-3 mx-4 m-4">
    {{-- target --}}
        <div class="sm:flex-[30%] flex-[100%] px-3 mb-6 md:mb-0 bg-white p-4 rounded-lg shadow-sm shadow-gray-500">
            <x-input-label for="color" value="Product Color" class="text-base  text-gray-600 opacity-90 mb-2" />
            <div class="p-4 border border-gray-300 rounded-md flex flex-wrap gap-4">
                <fieldset >
                    <label for="Pink">Pink</label>
                    <input type="checkbox" name="color[]" id="" value="Pink">
                </fieldset>
                <fieldset >
                    <label for="Nude">Nude</label>
                    <input type="checkbox" name="color[]" id="" value="Nude">
                </fieldset>
                <fieldset >
                    <label for="Red">Red</label>
                    <input type="checkbox" name="color[]" id="" value="Red">
                </fieldset>
                <fieldset >
                    <label for="Coral">Coral</label>
                    <input type="checkbox" name="color[]" id="" value="Coral">
                </fieldset>
                <fieldset >
                    <label for="Purple">Purple</label>
                    <input type="checkbox" name="color[]" id="Purple" value="Purple">
                </fieldset>
                <fieldset >
                    <label for="Berry">Berry</label>
                    <input type="checkbox" name="color[]" id="Berry" value="Berry">
                </fieldset>
                <fieldset >
                    <label for="Universal">Universal</label>
                    <input type="checkbox" name="color[]" id="Universal" value="Universal">
                </fieldset>
                <fieldset >
                    <label for="Unconventional">Unconventional</label>
                    <input type="checkbox" name="color[]" id="Unconventional" value="Unconventional">
                </fieldset>
                <fieldset >
                    <label for="Orange">Orange</label>
                    <input type="checkbox" name="color[]" id="Orange" value="Orange">
                </fieldset>
                <fieldset >
                    <label for="Clear">Clear</label>
                    <input type="checkbox" name="color[]" id="Clear" value="Clear">
                </fieldset>
                <fieldset >
                    <label for="Black">Black</label>
                    <input type="checkbox" name="color[]" id="Black" value="Black">
                </fieldset>
                <fieldset >
                    <label for="Brown">Brown</label>
                    <input type="checkbox" name="color[]" id="Brown" value="Brown">
                </fieldset>
                <fieldset >
                    <label for="Gold">Gold</label>
                    <input type="checkbox" name="color[]" id="Gold" value="Gold">
                </fieldset>
                <fieldset >
                    <label for="White">White</label>
                    <input type="checkbox" name="color[]" id="White" value="White">
                </fieldset>
                <fieldset >
                    <label for="Grey">Grey</label>
                    <input type="checkbox" name="color[]" id="Grey" value="Grey">
                </fieldset>
                <fieldset >
                    <label for="Silver">Silver</label>
                    <input type="checkbox" name="color[]" id="Silver" value="Silver">
                </fieldset>
                <fieldset >
                    <label for="Multi">Multi</label>
                    <input type="checkbox" name="color[]" id="Multi" value="Multi">
                </fieldset>
                <fieldset >
                    <label for="Green">Green</label>
                    <input type="checkbox" name="color[]" id="Green" value="Green">
                </fieldset>
                <fieldset >
                    <label for="Yellow">Yellow</label>
                    <input type="checkbox" name="color[]" id="Yellow" value="Yellow">
                </fieldset>
                <fieldset >
                    <label for="Blue">Blue</label>
                    <input type="checkbox" name="color[]" id="Blue" value="Blue">
                </fieldset>
                <x-input-error :messages="$errors->get('target')" class="mt-2" />
            </div>
        </div>
        {{--  Concerns--}}
          <div class="flex-[30%] px-3 mb-6 md:mb-0 bg-white p-4 rounded-lg shadow-sm shadow-gray-500">
            <x-input-label for="Concerns" value="Product Concerns" class="text-base  text-gray-600 opacity-90 mb-2" />
            <div class="p-4 border border-gray-300 rounded-md flex flex-col gap-4">
                <fieldset >
                    <label for="Dryness">Dryness</label>
                    <input type="checkbox" name="Concerns[]" id="Dryness" value="Dryness">
                </fieldset>
                <fieldset >
                    <label for="Redness">Redness</label>
                    <input type="checkbox" name="Concerns[]" id="Redness" value="Redness">
                </fieldset>
                <fieldset >
                    <label for="Dark-circles">Dark circles</label>
                    <input type="checkbox" name="Concerns[]" id="Dark-circles" value="Dark-circles">
                </fieldset>
                <fieldset >
                    <label for="Uneven-skin-tone">Uneven skin tone</label>
                    <input type="checkbox" name="Concerns[]" id="Uneven-skin-tone" value="Uneven-skin-tone">
                </fieldset>
                <fieldset >
                    <label for="Dark-spots">Dark spots</label>
                    <input type="checkbox" name="Concerns[]" id="Dark-spots" value="Dark-spots">
                </fieldset>

                <x-input-error :messages="$errors->get('target')" class="mt-2" />
            </div>
        </div>
        {{--  Finish--}}
          <div class="flex-[30%] px-3 mb-6 md:mb-0 bg-white p-4 rounded-lg shadow-sm shadow-gray-500">
            <x-input-label for="Concerns" value="Product Finish" class="text-base  text-gray-600 opacity-90 mb-2" />
            <div class="p-4 border border-gray-300 rounded-md flex flex-wrap gap-4">
                <fieldset >
                    <label for="Radiant">Radiant</label>
                    <input type="checkbox" name="Finish[]" id="Radiant" value ="Radiant">
                </fieldset>
                <fieldset >
                    <label for="Matte">Matte</label>
                    <input type="checkbox" name="Finish[]" id="Matte" value ="Matte">
                </fieldset>
                <fieldset >
                    <label for="Shimmer">Shimmer</label>
                    <input type="checkbox" name="Finish[]" id="Shimmer" value ="Shimmer">
                </fieldset>
                <fieldset >
                    <label for="High-Shine">High Shine</label>
                    <input type="checkbox" name="Finish[]" id="High-Shine" value ="High-Shine">
                </fieldset>
                <fieldset >
                    <label for="Satin">Satin</label>
                    <input type="checkbox" name="Finish[]" id="Satin" value ="Satin">
                </fieldset>
                <fieldset >
                    <label for="Natural">Natural</label>
                    <input type="checkbox" name="Finish[]" id="Natural" value ="Natural">
                </fieldset>
                <fieldset >
                    <label for="Metallic">Metallic</label>
                    <input type="checkbox" name="Finish[]" id="Metallic" value ="Metallic">
                </fieldset>
                <fieldset >
                    <label for="Glitter">Glitter</label>
                    <input type="checkbox" name="Finish[]" id="Glitter" value ="Glitter">
                </fieldset>
                <fieldset >
                    <label for="Creme">Creme</label>
                    <input type="checkbox" name="Finish[]" id="Creme" value ="Creme">
                </fieldset>
                <fieldset >
                    <label for="Gel">Gel</label>
                    <input type="checkbox" name="Finish[]" id="Gel" value ="Gel">
                </fieldset>

                <x-input-error :messages="$errors->get('Finish')" class="mt-2" />
            </div>
        </div>
        {{-- Formulation--}}
          <div class="flex-[30%] px-3 mb-6 md:mb-0 bg-white p-4 rounded-lg shadow-sm shadow-gray-500">
            <x-input-label for="Concerns" value="Product Formulation" class="text-base  text-gray-600 opacity-90 mb-2" />
            <div class="p-4 border border-gray-300 rounded-md flex flex-wrap gap-4">
                <fieldset >
                    <label for="Liquid">Liquid</label>
                    <input type="checkbox" name="Formulation[]" id="Liquid" value="Liquid">
                </fieldset>
                <fieldset >
                    <label for="Spray">Spray</label>
                    <input type="checkbox" name="Formulation[]" id="Spray" value="Spray">
                </fieldset>
                <fieldset >
                    <label for="Stick">Stick</label>
                    <input type="checkbox" name="Formulation[]" id="Stick" value="Stick">
                </fieldset>
                <fieldset >
                    <label for="Cream">Cream</label>
                    <input type="checkbox" name="Formulation[]" id="Cream" value="Cream">
                </fieldset>
                <fieldset >
                    <label for="Serum">Serum</label>
                    <input type="checkbox" name="Formulation[]" id="Serum" value="Serum">
                </fieldset>
                <fieldset >
                    <label for="Mask">Mask</label>
                    <input type="checkbox" name="Formulation[]" id="Mask" value="Mask">
                </fieldset>
                <fieldset >
                    <label for="Lotion">Lotion</label>
                    <input type="checkbox" name="Formulation[]" id="Lotion" value="Lotion">
                </fieldset>
                <x-input-error :messages="$errors->get('Formulation')" class="mt-2" />
            </div>
        </div>
        {{-- Size--}}
          <div class="flex-[30%] px-3 mb-6 md:mb-0 bg-white p-4 rounded-lg shadow-sm shadow-gray-500">
            <x-input-label for="Concerns" value="Product Size" class="text-base  text-gray-600 opacity-90 mb-2" />
            <div class="p-4 border border-gray-300 rounded-md flex flex-wrap gap-4">
                <fieldset >
                    <label for="Mini">Mini</label>
                    <input type="checkbox" name="Size[]" id="Mini" value="Mini">
                </fieldset>
                <fieldset >
                    <label for="Refill">Refill</label>
                    <input type="checkbox" name="Size[]" id="Refill" value="Refill">
                </fieldset>
                <fieldset >
                    <label for="Gift-Set">Gift Set</label>
                    <input type="checkbox" name="Size[]" id="Gift-Set" value="Gift-Set">
                </fieldset>
                <fieldset >
                    <label for="Value">Value</label>
                    <input type="checkbox" name="Size[]" id="Value" value="Value">
                </fieldset>

                <x-input-error :messages="$errors->get('Size')" class="mt-2" />
            </div>
        </div>
        {{-- Skin--}}
          <div class="flex-[30%] px-3 mb-6 md:mb-0 bg-white p-4 rounded-lg shadow-sm shadow-gray-500">
            <x-input-label for="Concerns" value="Product Skin" class="text-base  text-gray-600 opacity-90 mb-2" />
            <div class="p-4 border border-gray-300 rounded-md flex flex-wrap gap-4">
                <fieldset >
                    <label for="Normal">Normal</label>
                    <input type="checkbox" name="Skin[]" id="Normal" value="Normal">
                </fieldset>
                <fieldset >
                    <label for="Combination">Combination</label>
                    <input type="checkbox" name="Skin[]" id="Combination" value="Combination">
                </fieldset>
                <fieldset >
                    <label for="Plumping">Plumping</label>
                    <input type="checkbox" name="Skin[]" id="Plumping" value="Plumping">
                </fieldset>
                <fieldset >
                    <label for="Dry">Dry</label>
                    <input type="checkbox" name="Skin[]" id="Dry" value="Dry">
                </fieldset>
                <fieldset >
                    <label for="Sensitive">Sensitive</label>
                    <input type="checkbox" name="Skin[]" id="Sensitive" value="Sensitive">
                </fieldset>
                <x-input-error :messages="$errors->get('Skin')" class="mt-2" />
            </div>
        </div>
</section>
