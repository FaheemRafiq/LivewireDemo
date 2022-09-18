@php
    $count = 1;
@endphp
{{--    This Section of Code Execute when we edit USER and after edited this ALert message show--}}
<div>
    @if ($isClose == false && $updateAlert == true )
        <div class="bg-green-300 border border-black mb-5 text-black px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold ">Success!</strong>
            <span class="block sm:inline">{{session("message")}}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
    <svg wire:click="close" class="fill-current h-6 w-6 hover:text-gray-600" role="button"
         xmlns="http://www.w3.org/2000/svg"
         viewBox="0 0 20 20"><title>Close</title><path
            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
  </span>
        </div>
    @endif
</div>

{{--    This Section of Code Display all Register Users --}}
<div class="flex flex-col">
    <h1 class="self-center text-4xl text-cyan-800 font-extrabold">Login User Record</h1>
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-[90%]">
                    <thead class="border-b">
                    <tr>
                        <th scope="col"
                            class=" font-extrabold text-md font-medium text-gray-900 px-6 py-4 text-left">
                            #
                        </th>
                        <th scope="col"
                            class="font-extrabold text-md font-medium text-gray-900 px-6 py-4 text-left">
                            Name
                        </th>
                        <th scope="col"
                            class="font-extrabold text-md font-medium text-gray-900 px-6 py-4 text-left">
                            Email
                        </th>
                        <th scope="col"
                            class="font-extrabold text-md font-medium text-gray-900 px-6 py-4 text-left">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $index => $user)
                        <tr class="border-b">
                            <td class="font-extrabold text-red-600 px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$count++}}</td>
                            @if($toEditUserFound !== $index)
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{$user['name']}}
                                </td>
                            @else
                                <td>
                                    <div class="form-group mb-6">
                                        <input type="text" wire:model="user.name" name="name" class="form-control block
                                                        w-[70%]
                                                        px-3
                                                        py-1.5
                                                        text-base
                                                        font-normal
                                                        text-gray-700
                                                        bg-white bg-clip-padding
                                                        border-2 border-solid border-blue-600
                                                        rounded
                                                        transition
                                                        ease-in-out
                                                        mt-3
                                                        focus:text-gray-700 focus:bg-white focus:border-green-600 focus:outline-none"
                                               id="exampleInput126"
                                        >
                                        @error('user.name') <span style="color: red">{{$message}}</span> @enderror

                                    </div>
                                </td>
                            @endif
                            @if($toEditUserFound !== $index)
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">

                                    {{$user['email']}}
                                </td>
                            @else
                                <td>
                                    <div class="form-group mb-6">
                                        <input type="email" wire:model="user.email" name="email" class="form-control block
                                                        w-[70%]
                                                        px-3
                                                        py-1.5
                                                        text-base
                                                        font-normal
                                                        text-gray-700
                                                        bg-white bg-clip-padding
                                                        border-2 border-solid border-blue-600
                                                        rounded
                                                        transition
                                                        ease-in-out
                                                        mt-3
                                                        focus:text-gray-700 focus:bg-white focus:border-green-600 focus:outline-none"
                                               id="exampleInput126"
                                        >
                                        @error('user.email') <span style="color: red">{{$message}}</span> @enderror

                                    </div>
                                </td>
                            @endif
                            <td>
                                <button class="bg-red-500 text-white p-1 rounded-md hover:bg-red-600"
                                        wire:click="delete({{$user['id']}})">Delete
                                </button>
                                <button class="bg-green-500 text-white p-1 rounded-md px-4 hover:bg-green-600"
                                        wire:click="edit({{$index}})">
                                    Edit
                                </button>
                                <button class="bg-blue-500 text-white p-1 rounded-md px-2 hover:bg-blue-600"
                                        wire:click="update({{$user['id']}})">
                                    update
                                </button>
                            </td>
                        </tr>
                        @if(empty($user))
                            <tr>
                                <td class="text-red-500">Record Not Found</td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
