<x-app-layout>
    <x-slot name='content'>
        <header class='mb-6 relative'>
            <img src="/images/corsa.jpeg" alt="" class='mb-2 rounded-3xl' style='height: 233px; width: 100%'>
            <div class='flex justify-between items-center mb-4'>
                <div>
                    <h2 class='font-bold text-2xl'>{{ $user->name }}</h2>
                    <p class='text-sm'>Joined {{ $user->created_at->diffForHumans() }}</p>
                </div>
                <div>
                    <a href="" class='rounded-full border boder-gray-300 py-2 px-4 text-black text-xs mr-2'>Edit
                        Profile</a>
                    <a href="" class='bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs'>Follow Me</a>
                </div>
            </div>

            <p class='text-sm'>Here is the description of the user, hard coded one. Here is the description of the user,
                hard coded one.
                Here is the description of the user, hard coded one. Here is the description of the user, hard coded
                one. Here is the description of the user, hard coded one. Here is the description of the user, hard
                coded one. Here is the description of the user, hard coded one.</p>

            <img src="{{ $user->avatar }}" alt="" class='rounded-full mr-2 absolute'
                style='width: 150px; left:calc(50% - 75px); top: 138px'>

        </header>
        @include('_timeline', [
        'tweets' => $user->tweets
        ])
    </x-slot>
</x-app-layout>
