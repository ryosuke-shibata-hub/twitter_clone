<h3 class="font-bold text-xl mb-4">Friends</h3>

<ul>
    @foreach(range(1,8) as $index)
        <li>
            <div class="flex items-center text-sm mb-4">
                <img class="rounded-full mr-4" src="https://picsum.photos/40" alt="">

                John Doe
            </div>
        </li>
    @endforeach
</ul>
