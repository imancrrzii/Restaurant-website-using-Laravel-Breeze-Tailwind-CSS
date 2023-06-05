<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2 ">
                <a href="{{ route('admin.table.index') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">
                    Data Menu
                </a>
            </div>
            <div class="m-2 p-2 bg-slate-100 rounded">
                <form method="post" action="{{ route('admin.menu.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-6 mb-6 md:grid-cols-1">
                        <div>
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" id="name" name="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Misal" required>
                        </div>
                        <div>
                            <label for="guest_number"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Guest
                                Number</label>
                            <input type="number" id="guest_number" name="guest_number"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Misal" required>
                        </div>
                        <div>
                            <label for="status"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                            <div class="mt-1">
                                <select id="status" name="status" class="form-multiselect block w-full mt-1">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="location"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
                            <div class="mt-1">
                                <select id="location" name="location" class="form-multiselect block w-full mt-1">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit"
                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-800 text-white rounded-lg">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
