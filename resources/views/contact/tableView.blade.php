<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>assignment</title>

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('contacts') }}">Contacts</a></li>
            <li><a href="{{ URL::to('contacts/create') }}">Create a Contact</a>
        </ul>
    </nav>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Contacts Table
            </caption>

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
