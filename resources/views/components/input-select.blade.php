@props(['name','options','selected' => ''])


<label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
<select name={{$name}} id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
    @foreach ($options as $option)
        <option {{$option->id && "selected"}} value={{$option->id}}>{{$option->title}}</option>
    @endforeach
</select>
