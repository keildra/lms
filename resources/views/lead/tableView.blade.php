@extends('layout')

@section('content')

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="flex justify-between m-4">
        <a href="{{ URL::to('leads/create') }}">
            <button class="w-full bg-blue-100 hover:bg-blue-200 text-blue-800 font py-2 px-4 rounded">Create A New Lead</button>
        </a>
        <form action="{{ route('leads.index') }}" method="GET">
            <label>
                <input type="checkbox" name="converted" value="1"> Show Converted Leads
            </label>
            <button type="submit" class=" bg-blue-100 hover:bg-blue-200 text-blue-800 font py-2 px-4 rounded">Apply Filter</button>
        </form>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Convert</span>
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Delete</span>
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
                    <form action="{{ route('leads.convert', $lead->id) }}" method="POST">
                        @csrf
                        <button type="submit" title="Convert Lead">Convert</button>
                    </form>
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

@endsection
