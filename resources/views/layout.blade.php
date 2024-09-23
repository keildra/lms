<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">   

        @vite('resources/css/app.css')

        <title>Assignment</title>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50 justify-center">
        <div class="flex justify-center m-4">
            <div class="flex flex-row gap-4 mt-4">
                <a href="{{ route('leads.index') }}">
                    <button class="w-full bg-blue-100 hover:bg-blue-200 text-blue-800 font-bold py-2 px-4 rounded">Leads</button>
                </a>
                <a href="{{ route('contacts.index') }}">
                    <button class="w-full bg-blue-100 hover:bg-blue-200 text-blue-800 font-bold py-2 px-4 rounded">Contacts</button>
                </a>
                <!-- <a href="{{ route('contacts.create') }}">
                    <button class="w-full bg-blue-100 hover:bg-blue-200 text-blue-800 font-bold py-2 px-4 rounded">Create a Contact</button>
                </a> -->
            </div>
        </div>

        @yield('content')
    </body>
</html>