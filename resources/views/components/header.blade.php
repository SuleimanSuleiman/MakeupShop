@props([
    'messages',
    'fixed',
    'btn',
    'textColor',
    'dashboard'=>'False'
    ])

<header
id="header"
class="z-50 w-full py-0.5 px-12 min-h-[10px] bg-opacity-30 backdrop-blur-lg bg-gray-200  p-4 rounded-b-lg shadow-lg flex items-center transition-all hover:top-0 duration-1000 {{$dashboard==True?"dashboard":""}}  {{$fixed ==true ? 'fixed  left-0':''}}"
>
    <div class="flex-[20%] flex justify-start items-center">
        <img src="/logo-header.png" class="object-cover w-[70px]" alt="img">
    </div>

    <x-translate-bottun />
    <div class="flex-[80%] flex items-center justify-end {{$textColor =='white'?'text-white':'text-gray-600'}}">
        @if ($messages)
            <ul class="flex justify-end items-center">
                @foreach ((array) $messages as $message)
                <li class="ml-3 text-lg hover:scale-105">
                    @if ($message == 'home')
                        <a href="/">
                            {{$message}}
                        </a>
                    @else
                        <a href="/{{$message}}">
                            {{$message}}
                        </a>
                    @endif
                </li>
                @endforeach
            </ul>
            @if ($btn == 'True')
                <button class="ml-4 bg-gray-500 text-white px-2 py-2 rounded-md hover:scale-105 transition-all duration-150">
                    @auth('admin')
                        <a href={{route('admin.profile.edit')}}>{{__('header.profile')}}</a>
                    @elseif('web')
                        <a href={{route('profile.edit')}}>{{__('header.profile')}}</a>
                    @else
                        <a href={{route('register')}}>{{__('header.register')}}</a>
                    @endauth
                </button>
            @endif
        @endif
    </div>
</header>
<script src="/js/Header.js"></script>
