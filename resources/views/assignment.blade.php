<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>assignment</title>

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="flex flex-col gap-4">
        <a href="{{ route('leads.index') }}">
            <button class="w-1/3 bg-blue-100 hover:bg-blue-200 text-blue-600 font-bold py-2 px-4 rounded">Leads</button>
        </a>
        <a href="{{ route('contacts.index') }}">
            <button class="w-1/3 bg-blue-100 hover:bg-blue-200 text-blue-600 font-bold py-2 px-4 rounded">Contacts</button>
        </a>
        <a href="{{ route('leads.create') }}">
            <button class="w-1/3 bg-blue-100 hover:bg-blue-200 text-blue-600 font-bold py-2 px-4 rounded">Create a Lead</button>
        </a>
        <a href="{{ route('leads.index') }}">
            <button class="w-1/3 bg-blue-100 hover:bg-blue-200 text-blue-600 font-bold py-2 px-4 rounded">Create a Contact</button>
        </a>
        </div>
   </body>
</html>
