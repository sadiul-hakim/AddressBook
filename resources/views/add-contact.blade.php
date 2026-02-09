<x-custom-layout title="Add Address">
    <div class="max-w-md mx-auto p-8 bg-white rounded-md shadow-md mt-5">
        <h2 class="text-2xl font-semibold mb-6">Add a New Contact</h2>

        <form action="{{ route('address.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="first_name" class="block text-gray-700 text-sm font-bold mb-2">First Name</label>
                <input type="text" id="first_name" name="first_name" placeholder="John" value="{{ old('first_name') }}"
                    required class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                @error('first_name')
                    <b class="text-red-600">{{ $message }}</b>
                @enderror
            </div>
            <div class="mb-4">
                <label for="last_name" class="block text-gray-700 text-sm font-bold mb-2">Last Name</label>
                <input type="text" id="last_name" name="last_name" placeholder="Doe" value="{{ old('last_name') }}"
                    required class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                @error('last_name')
                    <b class="text-red-600">{{ $message }}</b>
                @enderror
            </div>
            <div class="mb-4">
                <label for="country" class="block text-gray-700 text-sm font-bold mb-2">Country</label>
                <input type="text" id="country" name="country" placeholder="USA" value="{{ old('country') }}"
                    required
                    class="w-full px-3 py-New York2 border rounded-md focus:outline-none focus:border-blue-500">
                @error('country')
                    <b class="text-red-600">{{ $message }}</b>
                @enderror
            </div>
            <div class="mb-4">
                <label for="city" class="block text-gray-700 text-sm font-bold mb-2">City</label>
                <input type="text" id="city" name="city" placeholder="New York" value="{{ old('city') }}"
                    required class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                @error('city')
                    <b class="text-red-600">{{ $message }}</b>
                @enderror
            </div>
            <div class="mb-4">
                <label for="street" class="block text-gray-700 text-sm font-bold mb-2">Street/Village</label>
                <input type="text" id="street" name="street" placeholder="Aesome Street 321"
                    value="{{ old('street') }}" required
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                @error('street')
                    <b class="text-red-600">{{ $message }}</b>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>

                <input type="email" id="email" name="email" placeholder="john@example.com"
                    value="{{ old('email') }}" required
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                @error('email')
                    <b class="text-red-600">{{ $message }}</b>
                @enderror
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone</label>
                <input type="text" id="phone" name="phone" placeholder="222 333 444"
                    value="{{ old('phone') }}" required
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                @error('phone')
                    <b class="text-red-600">{{ $message }}</b>
                @enderror
            </div>
            <button type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">
                Add Contact
            </button>
        </form>
    </div>
</x-custom-layout>
