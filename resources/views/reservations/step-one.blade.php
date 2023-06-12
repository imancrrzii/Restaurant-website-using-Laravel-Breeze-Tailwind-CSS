<x-guest-layout>
    <section class="mt-8 mb-8 bg-white">
        <div class="flex items-center min-h-screen bg-white">
            <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
                <div class="flex flex-col md:flex-row">
                    <div class="h-32 md:h-auto md:w-1/2">
                        <img src="{{ asset('assets/images/makan.jpg') }}" class="object-cover w-full h-full" alt="">
                    </div>
                    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                        <div class="w-full">
                            <h3 class="mb-4 text-xl font-bold text-blue-600">Make Reservation</h3>
                            <div class="w-full bg-gray-200 rounded-full">
                                <div
                                    class="w-40 p-1 text-xs font-medium leading-none text-center text-blue-100 bg-blue-600 rounded-full">
                                    Step1</div>
                            </div>
                            <form method="post" action="{{ route('reservations.store.step.one') }}">
                                @csrf
                                <div class="grid gap-6 mb-6 md:grid-cols-1">
                                    <div class="mt-4">
                                        <label for="first_name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                                            Name</label>
                                        <input type="text" id="first_name" name="first_name"
                                            value="{{ $reservation->first_name ?? '' }}"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Misal">
                                        @error('first_name')
                                            <div class="text-sm text-red-400">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="last_name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                                            Name</label>
                                        <input type="text" id="last_name" name="last_name"
                                            value="{{ $reservation->last_name ?? '' }}"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Misal">
                                        @error('last_name')
                                            <div class="text-sm text-red-400">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="email"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                        <input type="email" id="email" name="email"
                                            value="{{ $reservation->email ?? '' }}"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="email">
                                        @error('email')
                                            <div class="text-sm text-red-400">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="no_telp"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                            Number</label>
                                        <input type="text" id="no_telp" name="no_telp"
                                            value="{{ $reservation->no_telp ?? '' }}"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="email">
                                        @error('no_telp')
                                            <div class="text-sm text-red-400">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="reser_date"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Reservation
                                            Date</label>
                                        <input type="datetime-local" id="reser_date" name="reser_date"
                                            value="{{ $reservation->reser_date ?? '' }}"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="email">
                                        @error('reser_date')
                                            <div class="text-sm text-red-400">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="guest_number"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Guest
                                            Number</label>
                                        <input type="number" id="guest_number" name="guest_number"
                                            value="{{ $reservation->guest_number ?? '' }}"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Misal">
                                        @error('guest_number')
                                            <div class="text-sm text-red-400">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mt-6 p-4 flex justify-end">
                                    <button type="submit"
                                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-800 text-white rounded-lg">Next</button> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</x-guest-layout>
