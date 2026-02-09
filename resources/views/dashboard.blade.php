<x-custom-layout title="Address Book">
    <div class="container mx-auto">

        @if (session('success'))
            <div class="my-3 bg-green-300 text-green-700 p-3 mx-auto">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto shadow-md mt-10">

            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                    <tr>
                        <th class="px-6 py-3">First Name</th>
                        <th class="px-6 py-3">Last Name</th>
                        <th class="px-6 py-3">Country</th>
                        <th class="px-6 py-3">City</th>
                        <th class="px-6 py-3">Street/Village</th>
                        <th class="px-6 py-3">Email</th>
                        <th class="px-6 py-3">Phone</th>
                        <th class="px-6 py-3 text-right">
                            <a href="{{ url('address/create') }}"
                                class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg px-6 py-3 inline-block">Add
                                Contract</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($addresses as $address)
                        <tr class="bg-while border-b hover:bg-blue-50">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $address->first_name }}
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $address->last_name }}
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $address->country }}
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $address->city }}</td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $address->street }}
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $address->email }}</td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $address->phone }}
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-right">
                                <a class="font-medium text-blue-600 hover:underline"
                                    href="{{ route('address.edit', $address->id) }}">Edit</a>/
                                <form action="{{ route('address.destroy', $address->id) }}" class="inline-block"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete"
                                        class="font-medium text-blue-600 hover:underline"
                                        onclick="return confirm('Do you want to delete?')">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    {{ $addresses->links() }}
                </tbody>
            </table>

        </div>
    </div>
</x-custom-layout>
