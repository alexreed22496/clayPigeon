
<div class="bg-white-light rounded-b-xl shadow-xl pb-3 px-3">
    <div class="bg-white-light rounded-b-xl shadow-xl py-3 px-3">
        <h3 class="font-bold text-xl text-blue mb-4 ml-2">Following</h3>

        <ul>
            @forelse (current_user()->follows as $user)
                <li class="{{ $loop->last ? '' : 'mb-2' }}">
                    <div>
                        <a href="{{ route('profile', $user) }}" 
                            class="flex items-center text-sm"
                        > 
                            <img src="{{ $user->avatar }}" 
                                alt="" 
                                class="rounded-full m-2"
                                width="40"
                                height="40"
                            >

                            <div>
                                <h4 class="text-black font-bold hover:text-orange">
                                    {{ $user->name }}
                                </h4>

                                <h4 class="text-blue hover:text-orange">
                                    {{ '@' . $user->username}}
                                </h4>                            
                            </div>
                        </a>
                    </div>
                </li>
            @empty
                <li class="text-black-light">Nobody yet...</li>
            @endforelse
        </ul>
    </div>
</div>
