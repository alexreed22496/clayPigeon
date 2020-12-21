<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="\images\sanjiv-nayak-SLh03kuAr50-unsplash.jpg" 
                alt="" 
                class="rounded-lg mb-2"
            >

            <img src="{{ $user->avatar }}" 
                alt="" 
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                width="150"
                style="left: 50%"
            >
        </div>

        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }} </p>
            </div>

            <div class="flex">
                @if (current_user()->is($user))
                    <a href="{{ route('profile.edit', $user) }}" 
                        class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs"
                    >Edit Profile</a>
                @endif

                <x-follow-button :user="$user"></x-follow-button>

            </div>
        </div>

        <p class="text-sm">

        </p>
    </header>

    @include ('_timeline', [
        'pulls' => $user->pulls    
    ])
</x-app>