<x-app-layout>
    <header class='mb-6 relative'>
        <div class='relative'>
            <img src="/images/corsa.jpeg" alt="" class='mb-2 rounded-3xl' style='height: 233px; width: 100%'>
            <img src="{{ $user->avatar }}" alt=""
                class='rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2' width='150'
                style='left: 50%'>
        </div>
        <div class='flex justify-between items-center mb-6'>
            <div>
                <h2 class='font-bold text-2xl'>{{ $user->name }}</h2>
                <p class='text-sm'>Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div class='flex'>
                <a href="" class='rounded-full border boder-gray-300 py-2 px-4 text-black text-xs mr-2'>Edit
                    Profile
                </a>

                <x-follow-button :user='$user'></x-follow-button>

            </div>
        </div>

        <p class='text-sm'>Here is the description of the user, hard coded one. Here is the description of the user,
            hard coded one.
            Here is the description of the user, hard coded one. Here is the description of the user, hard coded
            one. Here is the description of the user, hard coded one. Here is the description of the user, hard
            coded one. Here is the description of the user, hard coded one.
        </p>

    </header>
    @include('_timeline', [
    'tweets' => $user->tweets
    ])
</x-app-layout>
