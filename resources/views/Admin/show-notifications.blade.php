<x-product-layout>
    <section class="bg-gray-50 flex justify-center items-center h-screen">
        <div class="m-12 p-8 w-[80%] h-[80%] overflow-y-auto bg-white rounded-md shadow-md shadow-gray-400">
            <h1 class="text-xl font-semibold text-blue-400">Notification History</h1>
            <ul>
                @foreach ($notifcations as $notifcation)
                <li class="flex justify-between items-center p-4 border-b border-gray-400 hover:scale-105 transition-all duration-700">
                    <a href='/admin/dashboard/{{$notifcation->object_type}}/{{$notifcation->object_id}}'>
                        {{$notifcation->message}}
                    </a>
                    <small>{{$notifcation->created_at}}</small>
                </li>
                @endforeach
            </ul>
        </div>
    </section>
</x-product-layout>
