<div>
    @if (session()->has('success'))
    <div x-data="{open : true}">
        <div x-show="open" class="flex p-4 bg-green-200">
            <div class="mr-4">
                <div class="flex items-center justify-center w-12 h-12 text-white bg-green-600 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
            </div>
            <div class="flex justify-between w-full">
                <div class="text-green-600">
                    <p class="mb-2 text-lg font-bold">
                        Success
                    </p>
                    <p class="text-sm">
                        {{ session('success') }}

                    </p>
                </div>
                <button @click="open = false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hover:bg-green-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    @endif
    <form wire:submit.prevent='submitContact' class="flex flex-col justify-center p-6">
        <div class="flex flex-col">
            <label for="name" class="hidden">Full Name</label>
            <input type="text" wire:model='name' name="name" id="name" placeholder="Full Name"
                class="px-3 py-3 mt-2 @error('name') border-red-500 @enderror font-semibold text-gray-800 bg-white border border-gray-400 rounded-lg w-100 dark:bg-gray-800 dark:border-gray-700 focus:border-indigo-500 focus:outline-none" />
            @error('name')
                <span class="flex items-center mt-1 ml-1 text-xs font-bold tracking-wide text-red-500">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="flex flex-col mt-2">
            <label for="email" class="hidden">Email</label>
            <input type="email" wire:model='email' name="email" id="email" placeholder="Email"
                class="px-3 py-3 mt-2 font-semibold text-gray-800 bg-white border border-gray-400 @error('email') border-red-500 @enderror rounded-lg w-100 dark:bg-gray-800 dark:border-gray-700 focus:border-indigo-500 focus:outline-none" />
            @error('email')
                <span class="flex items-center mt-1 ml-1 text-xs font-bold tracking-wide text-red-500">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="flex flex-col mt-2">
            <label for="tel" class="hidden">Number</label>
            <input type="number" wire:model='phone' name="tel" id="tel" placeholder="Telephone Number"
                class="px-3 py-3 mt-2 font-semibold text-gray-800 bg-white border @error('phone') border-red-500  @enderror border-gray-400 rounded-lg w-100 dark:bg-gray-800 dark:border-gray-700 focus:border-indigo-500 focus:outline-none" />
            @error('phone')
                <span class="flex items-center mt-1 ml-1 text-xs font-bold tracking-wide text-red-500">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="flex flex-col mt-2">
            <label for="message" class="hidden">Message</label>
            <textarea name="message" wire:model='message' id="message" placeholder="Message"
                class="px-3 py-3 mt-2 font-semibold text-gray-800 bg-white border border-gray-400 @error('message') border-red-500 @enderror rounded-lg w-100 dark:bg-gray-800 dark:border-gray-700 focus:border-indigo-500 focus:outline-none"></textarea>
            @error('message')
                <span class="flex items-center mt-1 ml-1 text-xs font-bold tracking-wide text-red-500">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <button type="submit"
            class="px-6 py-3 mt-3 font-bold text-white transition duration-300 ease-in-out bg-gray-800 rounded-lg md:w-32 hover:bg-blue-dark hover:bg-gray-600">
            <svg wire:loading wire:target="submitContact" class="w-5 h-5 mr-3 text-white animate-spin"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor"
                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                </path>
            </svg> Submit</button>
    </form>
</div>
