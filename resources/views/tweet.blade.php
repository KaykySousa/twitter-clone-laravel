<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>New Tweet</title>
</head>
<body>
    <div class="h-screen w-full flex flex-col">
        <header class="flex h-14 px-4 justify-between items-center">
            <x-heroicon-o-x class="h-5 w-5"/>
            <button type="submit" form="tweet-form" class="h-8 bg-sky-500 rounded-2xl px-4 font-bold text-white text-sm">Tweet</button>
        </header>
        <main class="flex-1 flex flex-col">
            <div class="w-full flex px-4">
                <div>
                    <x-heroicon-o-user-circle class="h-12 w-12"/>
                </div>
                <div class="flex-1">
                    <form id="tweet-form" action="/tweet" method="POST" class="w-full flex flex-col border-b border-gray-100 pl-3">
                        @csrf
                        <span class="h-6 px-4 border border-sky-300 rounded-xl text-sm text-sky-500 font-bold self-start flex items-center justify-center">Everyone</span>
                        <textarea name="text" class="mt-6 resize-y h-24 mb-3" placeholder="What's happening?"></textarea>
                        <div class="flex items-center text-sky-500 text-sm font-bold mb-4">
                            <x-heroicon-o-globe class="h-5 w-5 mr-1"/>
                            <span>Everyone can reply</span>
                        </div>
                    </form>
                    <div class="flex text-sky-500 space-x-5 mt-5 pl-3">
                        <x-heroicon-o-photograph class="h-6 w-6"/>
                        <x-heroicon-o-chart-bar class="h-6 w-6"/>
                        <x-heroicon-o-emoji-happy class="h-6 w-6"/>
                        <x-heroicon-o-calendar class="h-6 w-6"/>
                        <x-heroicon-o-location-marker class="h-6 w-6"/>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>