<section class="h-full  flex flex-wrap gap-3 mx-4 m-4">
        <div class="sm:flex-[30%] flex-[100%] px-3 mb-6 md:mb-0 bg-white p-4 rounded-lg shadow-sm shadow-gray-500">
            <x-input-label for="color" value="Product Color" class="text-base  text-gray-600 opacity-90 mb-2" />
                <div class="p-4 border border-gray-300 rounded-md flex flex-wrap gap-4">
                @php
                    $colorArray = ['Blue','Silver','Yellow','Green','Multi','Grey','White','Brown','Blue','Gold','Black','Pink','Nude','Red','Coral','Purple','Berry','Universal','Unconventional','Orange','Clear'];
                    $colorRequest = explode(',',$product->Color)
                @endphp

                @foreach ($colorArray as $color)
                    <fieldset >
                        <label for={{$color}}>{{$color}}</label>
                        <input @if (in_array($color, $colorRequest)) checked @endif type="checkbox" name="color[]" id="{{$color}}" value="{{$color}}">
                    </fieldset>
                    @endforeach
                <x-input-error :messages="$errors->get('Color')" class="mt-2" />
            </div>
        </div>
        {{--  Concerns--}}
        <div class="sm:flex-[30%] flex-[100%] px-3 mb-6 md:mb-0 bg-white p-4 rounded-lg shadow-sm shadow-gray-500">
            <x-input-label for="Concerns" value="Product Concerns" class="text-base  text-gray-600 opacity-90 mb-2" />
                <div class="p-4 border border-gray-300 rounded-md flex flex-wrap gap-4">
                @php
                    $ConcernsArray = ['Dryness','Redness','Dark-circles','Uneven-skin-tone','Dark-spots'];
                    $ConcernsRequest = explode(',',$product->Concerns)
                @endphp

                @foreach ($ConcernsArray as $Concerns)
                    <fieldset >
                        <label for={{$Concerns}}>{{$Concerns}}</label>
                        <input @if (in_array($Concerns, $ConcernsRequest)) checked @endif type="checkbox" name="Concerns[]" id="{{$Concerns}}" value="{{$Concerns}}">
                    </fieldset>
                    @endforeach
                    <x-input-error :messages="$errors->get('Concerns')" class="mt-2" />
            </div>
            {{-- Finish --}}
            <x-input-label for="Finish" value="Product Finish" class="mt-4 text-base  text-gray-600 opacity-90 mb-2" />
            <div class="p-4 border border-gray-300 rounded-md flex flex-wrap gap-4">
            @php
                $FinishsArray = ['Radiant','Matte','Shimmer','High-Shine','Satin','Natural','Metallic','Glitter','Creme','Gel'];
                $FinishRequest = explode(',',$product->Finish)
            @endphp

            @foreach ($FinishsArray as $Finish)
                <fieldset >
                    <label for={{$Finish}}>{{$Finish}}</label>
                    <input @if (in_array($Finish, $FinishRequest)) checked @endif type="checkbox" name="Finish[]" id="{{$Finish}}" value="{{$Finish}}">
                </fieldset>
                @endforeach
                <x-input-error :messages="$errors->get('Finish')" class="mt-2" />
            </div>
        </div>

        {{-- Formulation--}}
          <div class="flex-[30%] px-3 mb-6 md:mb-0 bg-white p-4 rounded-lg shadow-sm shadow-gray-500">
            <x-input-label for="Formulation" value="Product Formulation" class="mt-4 text-base  text-gray-600 opacity-90 mb-2" />
            <div class="p-4 border border-gray-300 rounded-md flex flex-wrap gap-4">
            @php
                $FormulationArray = ['Liquid','Spray','Stick','Cream','Serum','Mask'];
                $FormulationRequest = explode(',',$product->Formulation)
            @endphp

            @foreach ($FormulationArray as $Formulation)
                <fieldset >
                    <label for={{$Formulation}}>{{$Formulation}}</label>
                    <input @if (in_array($Formulation, $FormulationRequest)) checked @endif type="checkbox" name="Formulation[]" value="{{$Formulation}}" id="{{$Formulation}}">
                </fieldset>
                @endforeach
                <x-input-error :messages="$errors->get('Formulation')" class="mt-2" />
            </div>
        </div>
        {{-- Size--}}
          <div class="flex-[30%] px-3 mb-6 md:mb-0 bg-white p-4 rounded-lg shadow-sm shadow-gray-500">
            <x-input-label for="Size" value="Product Size" class="mt-4 text-base  text-gray-600 opacity-90 mb-2" />
            <div class="p-4 border border-gray-300 rounded-md flex flex-wrap gap-4">
            @php
                $SizeArray = ['Mini','Refill','Gift-Set','Value'];
                $SizeRequest = explode(',',$product->Size)
            @endphp

            @foreach ($SizeArray as $Size)
                <fieldset >
                    <label for={{$Size}}>{{$Size}}</label>
                    <input @if (in_array($Size, $SizeRequest)) checked @endif type="checkbox" value="{{$Size}}"   name="Size[]" id="{{$Size}}">
                </fieldset>
                @endforeach
                <x-input-error :messages="$errors->get('Size')" class="mt-2" />
            </div>
          </div>
        {{-- Skin--}}
          <div class="flex-[30%] px-3 mb-6 md:mb-0 bg-white p-4 rounded-lg shadow-sm shadow-gray-500">
            <x-input-label for="Skin" value="Product Skin" class="mt-4 text-base  text-gray-600 opacity-90 mb-2" />
            <div class="p-4 border border-gray-300 rounded-md flex flex-wrap gap-4">
            @php
                $SkinArray = ['Normal','Combination','Plumping','Dry','Sensitive'];
                $SkinRequest = explode(',',$product->Skin)
            @endphp

            @foreach ($SkinArray as $Skin)
                <fieldset >
                    <label for={{$Skin}}>{{$Skin}}</label>
                    <input @if (in_array($Skin, $SkinRequest)) checked @endif type="checkbox"  value="{{$Skin}}"  name="Skin[]" id="{{$Skin}}">
                </fieldset>
                @endforeach
                <x-input-error :messages="$errors->get('Skin')" class="mt-2" />
            </div>
        </div>
</section>
