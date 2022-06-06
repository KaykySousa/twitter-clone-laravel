<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="h-screen w-full flex flex-col">
        <header class="flex h-14 px-4 justify-center items-center">
            <x-fab-twitter class="h-6 w-6 text-sky-500" />
        </header>
        <main class="flex-1 flex justify-center flex-col px-12">
            <h1 class="font-bold text-2xl mb-6">Sign in to Twitter</h1>
            <form action="/login" method="POST" class="space-y-2 mb-4">
                @csrf
                <input type="email" name="email" class="w-full border border-gray-300 rounded h-14 px-4" placeholder="Phone, email, or username"/>
                <input type="password" name="password" class="w-full border border-gray-300 rounded h-14 px-4" placeholder="Password"/>
                <button class="w-full bg-neutral-900 h-9 font-bold text-sm text-white rounded-3xl" type="submit">Sign in</button>
                <button class="w-full h-9 font-bold text-sm rounded-3xl border border-gray-300" type="button">Forgot password?</button>
            </form>
        </main>
    </div>
</body>
</html>