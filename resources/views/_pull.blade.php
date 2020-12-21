<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-4 flex-shrink-0">
        <a href="{{ route('profile', $pull->user) }}">
            <img 
                src="{{ $pull->user->avatar }}" 
                alt="" 
                class="rounded-full" 
                width="50" 
                height="50"
            >
        </a>
    </div>

    <div>
        <h5 class="font-bold mb-4">
            <a href="{{ route('profile', $pull->user) }}"> 
                {{ $pull->user->name}}
            </a>    
        </h5>

        <p class="text-sm">
            {{ $pull->body }}
        </p>
    </div>
</div>