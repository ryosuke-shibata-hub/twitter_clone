<div class="bg-gray-200 border border-gray-300 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>

    <ul>
        @foreach(auth()->user()->follows as $user)
            <li class="mb-4">
                <a href="{{ route('profiles.show',$user) }}"
                    class="flex items-center text-sm">
                    <img
                        class="rounded-full mr-2"
                        width="40"
                        height="40"
                        src="{{ $user->avatar }}"
                        alt="">

                    {{ $user->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
