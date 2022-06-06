<section class="w-full border-b border-gray-300 flex px-4 py-3">
    <div>
        <x-heroicon-o-user-circle class="h-12 w-12 mr-3"/>
    </div>
    <div class="flex-1">
        <div class="mb-1">
            <span class="font-bold">{{$name}}</span>
            <span class="text-gray-600">{{$username}}</span>
            <span class="mx-1 text-gray-600">·</span>
            <span class="text-gray-600">{{$time}}</span>
        </div>
        <p>{{$text}}</p>
        <div class="flex mt-3 justify-between">
            <div class="flex items-center">
                <x-heroicon-o-chat class="h-5 w-5 mr-2"/>
                <span class="text-sm">13</span>
            </div>
            <div class="flex items-center">
                <x-heroicon-o-reply class="h-5 w-5 mr-2"/>
                <span class="text-sm">13</span>
            </div>
            <div class="flex items-center">
                <x-heroicon-o-heart class="h-5 w-5 mr-2"/>
                <span class="text-sm">13</span>
            </div>
            <x-heroicon-o-share class="h-5 w-5"/>
        </div>
    </div>
</section>