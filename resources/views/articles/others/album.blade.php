@extends('layouts.app')
@section('title', 'おとくい！プラッツカルト！_ギャラリー_отаку_и_плацкарт!!')
@section('content')

    <div class="flex flex-col items-center text-center py-20">
        <div class="relative w-[22em] h-[16em] text-[clamp(0.7em,3.5vw,2.5em)]">
            <img class="w-full h-full object-cover [clip-path:url(#wavyPhoto)]" src="https://dencha-platkart.sakura.ne.jp/images/album/1.jpg" alt="ギャラリー">
            <svg width="0" height="0" class="absolute">
                <defs>
                    <clipPath id="wavyPhoto" clipPathUnits="objectBoundingBox">
                        <path transform="scale(0.0454, 0.0625)" d="M12.85.57c.74.46 1.16-.23 1.95.02.8.24 1.9.82 2.79 1.42.89.6 1.96.6 2.55 1.18.6.58.67 1.45.98 2.3.3.87.82 1.66.88 2.85.06 1.2-.69 1.64-1.23 3.08-.54 1.45-.12 1.04-.9 1.63-.79.6-1.23.11-1.91.74-.69.62-1.05.9-2.2 1.32-1.14.42-1.96-.38-2.86.19-.9.57-1.58.74-2.53.7-.94-.05-2.2-.98-3.14-.98-.94 0-1.6-.03-2.64-.23-1.04-.2-1.63-1.4-2.25-2.19-.62-.78-1.3-.24-1.98-1.15-.67-.91.08-2.18-.23-3.13-.3-.94 0-1.76.07-2.53s.35-.72.86-1.07c.52-.36.73-1.47 1.39-2.25.66-.78 1.53-.56 2.4-.74C5.73 1.55 5.94 1 6.7.56 7.46.12 8.15.24 9.1.26c.93.03.78-.25 1.93-.26 1.15 0 1.09.1 1.82.57z" />
                    </clipPath>
                </defs>
            </svg>
        </div>

        <div class="py-8 px-4 leading-loose">
            <h2 class="font-bold text-[clamp(1.5rem,5vw,2rem)] mb-1">ギャラリー</h2>
            <time datetime="2024-11-13">投稿:2024/11/13</time>
            <p class="text-lg mt-4">
                旅の思い出
            </p>
        </div>
    </div>

    @include('components.pager-btn', ['next' => route('uzkz_matome'),])

    <main>

        <div class="grid justify-center grid-cols-[14em_4em_2em_14em_2em_2em_16em] grid-rows-[12em_12em_12em_14em_14em_14em_6em_22em_12em_14em_10em] gap-[0.8em] text-[clamp(0.1em,1.5vw,1em)] text-[#262626]">

            <div class="card col-[1/6] row-[1/3] relative perspective-[1000px] transform-3d">
                <div class="absolute top-0 left-0 w-full h-full transition-transform duration-1000 in-[.is-flipped]:transform-[rotateY(180deg)]"><img class="w-full h-full object-cover" src="{{ asset('images/album/1.jpg') }}"></div>
                <div class="absolute top-0 left-0 w-full h-full backface-hidden grid place-content-center transition-transform duration-1000 transform-[rotateY(180deg)] in-[.is-flipped]:transform-[rotateY(360deg)] bg-[#C7CD85]">鉱石満載</div>
            </div>
            <img class="w-full h-full object-cover col-[1/3] row-[3/4]" src="{{ asset('images/album/5.jpg') }}">
            <img class="w-full h-full object-cover col-[3/6] row-[3/4]" src="{{ asset('images/album/6.jpg') }}">
            <img class="w-full h-full object-cover col-[6/8] row-[1/2]" src="{{ asset('images/album/17.jpg') }}">
            <img class="w-full h-full object-cover col-[6/8] row-[2/4]" src="{{ asset('images/album/7.jpg') }}">

            <div class="card col-[4/8] row-[4/6] relative perspective-[1000px] transform-3d">
                <div class="absolute top-0 left-0 w-full h-full transition-transform duration-1000 in-[.is-flipped]:transform-[rotateY(180deg)]"><img class="w-full h-full object-cover" src="{{ asset('images/album/2.jpg') }}"></div>
                <div class="absolute top-0 left-0 w-full h-full backface-hidden grid place-content-center transition-transform duration-1000 transform-[rotateY(180deg)] in-[.is-flipped]:transform-[rotateY(360deg)] bg-[#F2E5B6]">ソフィアの朝</div>
            </div>
            <img class="w-full h-full object-cover col-[1/4] row-[4/5]" src="{{ asset('images/album/13.jpg') }}">
            <div class="col-[1/4] row-[5/6]"><a class="cursor-default" href="{{ asset('unko/unko.html') }}"><img class="w-full h-full object-cover" src="{{ asset('images/album/10.jpg') }}"></a></div>

            <div class="card col-[2/8] row-[7/9] relative perspective-[1000px] transform-3d">
                <div class="absolute top-0 left-0 w-full h-full transition-transform duration-1000 in-[.is-flipped]:transform-[rotateY(180deg)]"><img class="w-full h-full object-cover" src="{{ asset('images/album/3.jpg') }}" alt="アルマータ2駅"></div>
                <div class="absolute top-0 left-0 w-full h-full backface-hidden grid place-content-center gap-[3em] transition-transform duration-1000 transform-[rotateY(180deg)] in-[.is-flipped]:transform-[rotateY(360deg)] bg-[#D2B48C]"><p>東側の夜行列車</p><a class="flex justify-center gap-[0.5em] border py-2 px-4 duration-200 hover:scale-[1.08]" href="{{ route('uzkz_matome') }}"><span class="material-symbols-outlined text-[1.5em]! transform-[rotate(-45deg)]">link</span>海外鉄入門１落単まとめ</a></div>
            </div>
            <img class="w-full h-full object-cover col-[2/5] row-[6/7]" src="{{ asset('images/album/12.jpg') }}">
            <img class="w-full h-full object-cover col-[5/8] row-[6/7]" src="{{ asset('images/album/14.jpg') }}">
            <img class="w-full h-full object-cover col-[1/2] row-[6/8]" src="{{ asset('images/album/11.jpg') }}" alt="タルゴの車掌さん">
            <img class="w-full h-full object-cover col-[1/2] row-[8/9]" src="{{ asset('images/album/8.jpg') }}">

            <div class="card col-[1/6] row-[10/12] relative perspective-[1000px] transform-3d">
                <div class="absolute top-0 left-0 w-full h-full transition-transform duration-1000 in-[.is-flipped]:transform-[rotateY(180deg)]"><img class="w-full h-full object-cover" src="{{ asset('images/album/4.jpg') }}"></div>
                <div class="absolute top-0 left-0 w-full h-full backface-hidden grid place-content-center transition-transform duration-1000 transform-[rotateY(180deg)] in-[.is-flipped]:transform-[rotateY(360deg)] bg-[#E8B4B4]">красная звезда</div>
            </div>
            <img class="w-full h-full object-cover col-[1/3] row-[9/10]" src="{{ asset('images/album/16.jpg') }}">
            <img class="w-full h-full object-cover col-[3/6] row-[9/10]" src="{{ asset('images/album/15.jpg') }}">
            <img class="w-full h-full object-cover col-[6/8] row-[9/11]" src="{{ asset('images/album/9.jpg') }}">
            <div class="w-full h-full object-cover col-[6/8] row-[11/12] bg-[#C5A5A5] grid place-content-center">coming<br>soon ...</div>

        </div>

    </main>

    @include('components.pager-btn', ['next' => route('uzkz_matome'),])


@endsection
@push('scripts')
  <script>
        //めくれる写真のスクリプト
        const cards = document.querySelectorAll(".card");
        cards.forEach((card) => {
            card.addEventListener("click", () => {
                card.classList.toggle("is-flipped");
            });
        });
  </script>
@endpush