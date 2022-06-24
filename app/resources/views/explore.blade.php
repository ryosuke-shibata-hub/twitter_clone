@component('components.app')
    <div>
        @foreach($users as $user)
            <a href="{{ $user->path() }}" class="flex items-center mb-5">
                <img class="rounded mr-4" src="{{ $user->avatar }}"
                alt="{{ $user->username }} ' avatar"
                width="60">

            <div>
                <h4 class="font-bold">{{ '@'.$user->username }}</h4>
            </div>
            </a>
        @endforeach
    </div>
@endcomponent
