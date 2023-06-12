<x-guest-layout>
    <section class="mt-8 bg-white">
        <div class="flex items-center min-h-screen bg-gray-50">
            <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
                <div class="flex flex-col md:flex-row">
                    <div class="h-32 md:h-auto md:w-1/2">
                        <img src="{{ asset('assets/images/food.jpg') }}" class="object-cover w-full h-full" alt="">
                    </div>
                    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                        <div class="w-full">
                            <h3 class="mb-4 text-xl font-bold text-blue-600">Make Reservation</h3>
                            <div class="w-full bg-gray-200 rounded-full">
                                <div
                                    class="w-100 p-1 text-xs font-medium leading-none text-center text-blue-100 bg-blue-600 rounded-full">
                                    Step2</div>
                            </div>
                            <form method="post" action="{{ route('reservations.store.step.two') }}">
                                @csrf
                                <div class="grid gap-6 mb-6 md:grid-cols-1">
                                    <div class="mt-4">
                                        <label for="table_id"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Table</label>
                                        <div class="mt-1">
                                            <select id="table_id" name="table_id"
                                                class="form-multiselect block w-full mt-1 rounded-lg">
                                                @foreach ($tables as $table)
                                                    <option value="{{ $table->id }}">
                                                        {{ $table->name }} ({{ $table->guest_number }} Guests)</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 p-4 flex justify-between"></div>
                                <a href="{{ route('reservations.step.one')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-800 text-white rounded-lg">Back</a>
                                <button type="submit"
                                    class="px-4 py-2 bg-green-500 hover:bg-green-800 text-white rounded-lg">Make Reservation</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</x-guest-layout>
