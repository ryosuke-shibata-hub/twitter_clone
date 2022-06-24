<ul>
    <li>
        <a href="{{ route('home') }}"
            class="font-bold text-lg mb-4 block">Home
        </a>
    </li>
    <li>
        <a href="/explore" class="font-bold text-lg mb-4 block">explore</a>
    </li>
    <li>
        <a href="{{ route('profiles.show',auth()->user()) }}" class="font-bold text-lg mb-4 block">Profile</a>
    </li>
    <li>
        <form action="/logout" method="POST">
            @csrf
            <button class="font-bold text-lg">
                Logout
            </button>
        </form>
    </li>
</ul>
