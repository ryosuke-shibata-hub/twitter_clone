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
        <a href="#" class="font-bold text-lg mb-4 block">Notifications</a>
    </li>
    <li>
        <a href="#" class="font-bold text-lg mb-4 block">Message</a>
    </li>
    <li>
        <a href="#" class="font-bold text-lg mb-4 block">Bookmark</a>
    </li>
    <li>
        <a href="#" class="font-bold text-lg mb-4 block">Lists</a>
    </li>
    <li>
        <a href="{{ route('profiles.show',auth()->user()) }}" class="font-bold text-lg mb-4 block">Profile</a>
    </li>
    <li>
        <a href="#" class="font-bold text-lg mb-4 block">More</a>
    </li>
</ul>
