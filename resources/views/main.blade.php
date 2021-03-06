<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Twitter Clone</title>
</head>
<body>
    <div class="h-screen w-full flex flex-col">
        <header class="flex h-14 px-4 justify-between items-center border-b border-gray-300">
            <div class="flex items-center space-x-2">
                <x-heroicon-o-user-circle class="h-8 w-8"/>
                <span>{{Cookie::get('twitter-token');}}</span>
            </div>
            <x-fab-twitter class="h-6 w-6 text-sky-500" />
            <x-heroicon-o-menu class="h-6 w-6"/>
        </header>
        <main class="flex-1 relative overflow-y-auto">
            @foreach ($posts as $post)
                <x-post name="{{$post->user->name}}" username="{{$post->user->username}}" text="{{$post->text}}" time="1m"/>
            @endforeach

            <a href="/tweet" class="w-14 h-14 bg-sky-500 rounded-full fixed bottom-16 right-6 flex justify-center items-center">
                <x-heroicon-o-plus class="h-6 w-6 text-white"/>
            </a>
        </main>
        <nav class="flex h-14 px-4 justify-between items-center border-t border-gray-300">
            <x-heroicon-o-home class="h-6 w-6"/>
            <x-heroicon-o-search class="h-6 w-6"/>
            <x-heroicon-o-bell class="h-6 w-6"/>
            <x-heroicon-o-mail class="h-6 w-6"/>
        </nav>
    </div>
</body>
</html>