@component('components.app')
<header class="mb-6 relative">
    <div class="relative">
        <img
        src="/images/default-profile-banner.jpg"
        alt=""
        class="mb-2">

        <img
        class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
        style="left: 50%;height:150px;"
        src="{{ $user->avatar }}"
        alt=""
        width="150"
        >
    </div>
    <div class="flex justify-between items-center mb-6">
        <div style="max-width:270px">
            <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
            <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
        </div>

        <div class="flex">
            @can('edit', $user)
                <a href="{{ $user->path('edit') }}" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">
                    Edit Profile
                </a>
            @endcan
        @component('components.follow-button',['user' => $user])@endcomponent
        </div>
    </div>
    <p class="text-sm">
        klkmか、fんkl；亜fんml；あ。・mfん。・あ、んfm。、あんflマンfぁvm・、。あv。・、あmf；lな；lんgl；あ
        ・ぁkfm・ヵmvl・あ・。vま。・、んmvl；あんv。、あ。・v・あv・、。vあ・。、v。・、あv。・あ・。。・あ、vあ
    </p>
</header>
@include('_timeline',[
    'tweets' => $tweets
])
@endcomponent
