@extends('layout')

@section('content')

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="flex justify-between m-4">
        <a href="{{ URL::to('contacts/create') }}">
            <button class="w-full bg-blue-100 hover:bg-blue-200 text-blue-800 font py-2 px-4 rounded">Create A New Contact</button>
        </a>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Contact Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Converted Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created At
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Updated At
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Delete</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $contact->contact_name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $contact->converted_status }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $contact->created_at }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $contact->updated_at }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500">                    
                            <a href="{{ route('contacts.edit', $contact) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500">
                            <form method="POST" action="{{ url('/contacts' . '/' .$contact->id) }}">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" title="Delete contact">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    </body>
</html>

@endsection
