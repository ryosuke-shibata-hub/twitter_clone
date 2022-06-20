<div class="flex p-4 border-b border-gray-300">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profiles.show',$tweet->user) }}">
            <img
            class="rounded-full mr-2"
            src="{{ $tweet->user->avatar }}"
            alt=""
            width="50"
            height="50">
        </a>
    </div>
    <div>
        <h5 class="font-bold mb-4">
            <a href="{{ route('profiles.show',$tweet->user) }}">
                {{ $tweet->user->name }}
            </a>
        </h5>

        <p class="text-sm">
            {{ $tweet->body }}
        </p>
    </div>
</div>
