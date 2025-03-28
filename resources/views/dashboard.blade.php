<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

 <div class="flex space-x-4 py-12">
  <div class="w-1/4 p-4 border rounded-lg shadow-lg">
    <h2 class="text-xl font-semibold">Card 1</h2>
    <p class="mt-2">Content for card 1</p>
  </div>
  <div class="w-1/4 p-4 border rounded-lg shadow-lg">
    <h2 class="text-xl font-semibold">Card 2</h2>
    <p class="mt-2">Content for card 2</p>
  </div>
  <div class="w-1/4 p-4 border rounded-lg shadow-lg">
    <h2 class="text-xl font-semibold">Card 3</h2>
    <p class="mt-2">Content for card 3</p>
  </div>
  <div class="w-1/4 p-4 border rounded-lg shadow-lg">
    <h2 class="text-xl font-semibold">Card 4</h2>
    <p class="mt-2">Content for card 4</p>
  </div>
</div>



</x-app-layout>




