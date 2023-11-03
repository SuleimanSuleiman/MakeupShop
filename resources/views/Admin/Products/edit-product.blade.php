<x-product-layout>
    <section class="w-full flex min-h-screen justify-start bg-gray-100">
        <div class="z-50 w-72">
            <div class="fixed left-0 top-0 ">
                <x-sidbare stage="Edit Product" btn="false"/>
            </div>
        </div>
        <div class="flex-[90%]  overflow-y-auto p-4">
            {{-- if any unexpected error --}}
            <x-input-error :messages="$errors->get('error')" class="mt-2" />
            {{-- sections --}}
            <form action={{route('admin.product.update',$product->id)}} enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <section class="">
                        @include('components.Products.edit.info-add')
                        @include('components.Products.edit.second-add')
                        @include('components.Products.img-add')
                </section>
                <div class="mx-4 flex justify-end">
                    <x-primary-button >Edit Product</x-primary-button>
                </div>
            </form>
        </div>
    </section>
</x-product-layout>
