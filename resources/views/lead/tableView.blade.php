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
            <li><a href="{{ URL::to('leads') }}">Leads</a></li>
            <li><a href="{{ URL::to('leads/create') }}">Create a Lead</a>
        </ul>
    </nav>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Leads Table
            </caption>

            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Lead Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Mobile
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Converted At
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
                </tr>
            </thead>
            <tbody>
                @foreach ($leads as $lead)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $lead->lead_name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $lead->status }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $lead->mobile }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $lead->email }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $lead->converted_at }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $lead->created_at }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $lead->updated_at }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500">                    
                            <a href="{{ route('leads.edit', $lead) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500">
                            <form method="POST" action="{{ url('/leads' . '/' .$lead->id) }}">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" title="Delete Lead">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    </body>
</html>
