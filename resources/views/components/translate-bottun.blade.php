    <div >
        <button  id="lang" type="button" class="bg-gray-500 w-[120px]  flex items-center px-3 py-2 rounded-md text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @if (App::getLocale() == 'ar')
                <small class="mx-2 text-[15px]" >{{ LaravelLocalization::getCurrentLocaleName() }}</small>
                <img src="{{ URL::asset('images/flags/LB.png') }}" alt="">
            @else
              <small class="mx-2 text-[15px]">{{ LaravelLocalization::getCurrentLocaleName() }}</small>
              <img src="{{ URL::asset('/images/flags/US.png') }}" alt="">
            @endif
            <div class="p-1">
                <i class="fa-solid fa-caret-down"></i>
            </div>
        </button>
        <div id="menu" class="hidden rounded-b-md bg-gray-500 flex-col items-start w-[120px] px-3 py-2 text-white absolute">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <a
                        class="mb-1 lang"
                        rel="alternate"
                        hreflang="{{ $localeCode }}"
                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                        data-lang="{{$localeCode}}"
                        >
                            {{ $properties['native'] }}
                        </a>
                @endforeach
        </div>
    </div>
<script src="/js/Translate.js"></script>
