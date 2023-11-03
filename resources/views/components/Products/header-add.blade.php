<div>
        <div class="flex justify-between items-center p-2">
            <div class="flex  items-center">
                <a href={{route('admin.product.index')}} class="flex justify-center items-center rounded-md w-[30px] h-[30px] border border-gray-500 hover:cursor-pointer">
                    <i class="fa-solid fa-caret-left text-gray-700 text-[22px]"></i>
                </a>
                <h1 class="ml-4 font-[900] text-2xl text-gray-700">New Product</h1>
            </div>
            <div class="flex justify-center items-center">
                <x-translate-bottun />
                <a href={{route('admin.product.index')}} class="mx-2 flex justify-center items-center rounded-md w-[30px] h-[30px] border border-gray-500 hover:cursor-pointer">
                    <i class="fa-solid fa-trash text-gray-700 text-base"></i>
                </a>
            </div>
        </div>
    <hr />
</div>
