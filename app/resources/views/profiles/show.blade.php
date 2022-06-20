@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <img
            src="/images/default-profile-banner.jpg"
            alt=""
            class="mb-2">

        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
            <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">
                Edit Profile
            </a>
            <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">
                Follow Me
            </a>
        </div>
        </div>
        <img
            class="rounded-full mr-2 absolute"
            src="{{ $user->avatar }}"
            alt=""
            style="width: 150px;left:calc(50% - 75px);top:138px;">
        <p class="text-sm">
            klkmか、fんkl；亜fんml；あ。・mfん。・あ、んfm。、あんflマンfぁvm・、。あv。・、あmf；lな；lんgl；あ
            ・ぁkfm・ヵmvl・あ・。vま。・、んmvl；あんv。、あ。・v・あv・、。vあ・。、v。・、あv。・あ・。。・あ、vあ
        </p>
    </header>
    @include('_timeline',[
        'tweets' => $user->tweets
    ])
@endsection
