@props(['show' => False])

<div id="toast-notification" class="
    @if (!$show)
        translate-x-96
    @endif
    flex w-full max-w-xs p-4 text-gray-900 bg-blue-300 shadow-sm shadow-gray-600 rounded-lg transition-transform duration-500" role="alert">
     <div class="flex items-center mr-2">
        <div class="ml-3 text-sm font-normal">
            <div class="text-sm font-normal text-gray-500">commmented on your photo</div>
            <span class="text-xs font-medium text-blue-600 ">a few seconds ago</span>
        </div>
    </div>
    <div class="flex items-center mb-3">
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white justify-center items-center flex-shrink-0 text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 " data-dismiss-target="#toast-notification" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3 fill-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
    </div>
</div>
