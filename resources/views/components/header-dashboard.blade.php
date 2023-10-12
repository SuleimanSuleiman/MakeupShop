<div class="w-full py-4 px-8 rounded-md bg-white shadow-sm shadow-gray-200 mb-6 flex items-center justify-between">
    <div class="flex-[20%]"></div>
    <div class="flex-[80%] flex justify-end items-center relative">
        <svg id="LangBtn" onclick="HandleBtnMenu()" class="text-2xl fill-gray-600 hover:cursor-pointer" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z"/></svg>
        <ul id="menuLang" class="hidden p-0.5 absolute -bottom-[100px] z-40 right-[10%] rounded-md bg-gray-100 text-gray-600 flex-col items-start w-[120px] shadow-lg shadow-gray-600">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li class='mb-1 p-2 lang w-full rounded-md {{str_replace('_', '-', app()->getLocale()) == $localeCode?"bg-blue-300 font-semibold":""}}'>
                            <a
                                rel="alternate"
                                hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                data-lang="{{$localeCode}}"
                            >
                                {{ $properties['native'] }}
                            </a>
                        </li>
            @endforeach
        </ul>
        <svg id="notifictionBtn" class="text-2xl mx-8 fill-gray-600 hover:cursor-pointer" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 0c-17.7 0-32 14.3-32 32V49.9C119.5 61.4 64 124.2 64 200v33.4c0 45.4-15.5 89.5-43.8 124.9L5.3 377c-5.8 7.2-6.9 17.1-2.9 25.4S14.8 416 24 416H424c9.2 0 17.6-5.3 21.6-13.6s2.9-18.2-2.9-25.4l-14.9-18.6C399.5 322.9 384 278.8 384 233.4V200c0-75.8-55.5-138.6-128-150.1V32c0-17.7-14.3-32-32-32zm0 96h8c57.4 0 104 46.6 104 104v33.4c0 47.9 13.9 94.6 39.7 134.6H72.3C98.1 328 112 281.3 112 233.4V200c0-57.4 46.6-104 104-104h8zm64 352H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7s18.7-28.3 18.7-45.3z"/></svg>
        <button class=" bg-gray-200 text-gray-600 px-2 py-2 rounded-md hover:scale-105 transition-all duration-150">
            @auth('admin')
                <a href={{route('admin.profile.edit')}}>{{__('header.profile')}}</a>
            @elseif('web')
                <a href={{route('profile.edit')}}>{{__('header.profile')}}</a>
            @else
                <a href={{route('register')}}>{{__('header.register')}}</a>
            @endauth
        </button>
    </div>
</div>

<script>
    function HandleBtnMenu(){
        let LangBtn = document.getElementById('LangBtn');
        let menu = document.getElementById('menuLang');

        LangBtn.classList.toggle('open');

        if(LangBtn.classList.contains('open')){
            menu.classList.remove('hidden');
        }else{
            menu.classList.add('hidden');
        }
    }
</script>
