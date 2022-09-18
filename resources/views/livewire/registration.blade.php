<div id="container" class="block p-6 rounded-lg shadow-lg bg-white max-w-md">
    <form wire:submit.prevent="formValidate">
        <div class="grid grid-cols-2 gap-4">
            <div class="form-group mb-6">
                <input type="text" wire:model="firstname" name="firstname" class="form-control
          block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput123"
                       aria-describedby="emailHelp123" placeholder="First name">
                @error('firstname') <span style="color: red">{{$message}}</span> @enderror

            </div>
            <div class="form-group mb-6">
                <input type="text" wire:model="lastname" name="lastname" class="form-control
          block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput124"
                       aria-describedby="emailHelp124" placeholder="Last name">
                @error('lastname') <span style="color: red">{{$message}}</span> @enderror

            </div>
        </div>
        <div class="form-group mb-6">
            <input type="email"  wire:model="email" name="email" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput125"
                   placeholder="Email address">
            @error('email') <span style="color: red">{{$message}}</span> @enderror

        </div>
        <div class="form-group mb-6">
            <input type="password" wire:model="password" name="password" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput126"
                   placeholder="Password">
            @error('password') <span style="color: red">{{$message}}</span> @enderror

        </div>
        <div class="form-group mb-6">
            <input type="password" wire:model="confirm_password" name="confirm_password" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput126"
                   placeholder="Confirm Password">
            @error('confirm_password') <span style="color: red">{{$message}}</span> @enderror
        </div>

        <button type="submit" class="
      w-full
      px-6
      py-2.5
      bg-blue-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out">Register
        </button>
    </form>
</div>
