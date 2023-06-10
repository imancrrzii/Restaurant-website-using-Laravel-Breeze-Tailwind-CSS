<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2 ">
                <a href="{{ route('admin.reservation.create') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">
                    New Reservation
                </a>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Guests
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Table
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Telepon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td
                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $reservation->first_name }} {{ $reservation->last_name }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $reservation->guest_number }}
                                </td>
                                <td
                                class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $reservation->table->name }}
                            </td>
                                <td
                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $reservation->email }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $reservation->reser_date }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $reservation->no_telp }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('admin.reservation.edit', $reservation->id) }}"
                                            class="px-4 py-2 bg-yellow-400 hover:bg-yellow-600 rounded-lg text-white">Edit</a>
                                        <form action="{{ route('admin.reservation.destroy', $reservation->id) }}"
                                            class="px-4 py-2 bg-red-500 hover:bg-red-800 rounded-lg text-white"
                                            method="post" onsubmit="return confirm('Are you sure');">
                                            @csrf
                                            @method('delete')
                                            <button type="submit">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
