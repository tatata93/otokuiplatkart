@extends('layouts.app')
@section('title', 'おとくい！プラッツカルト！_神経衰弱_отаку_и_плацкарт!!')
@section('content')

    <div class="flex flex-col items-center text-center py-20">
        <div class="relative w-[22em] h-[16em] text-[clamp(0.7em,3.5vw,2.5em)]">
            <img class="w-full h-full object-cover [clip-path:url(#wavyPhoto)]" src="https://dencha-platkart.sakura.ne.jp/images/uzbkkzqh2023/mdm_004652_s.jpg" alt="ギャラリー">
            <svg width="0" height="0" class="absolute">
                <defs>
                    <clipPath id="wavyPhoto" clipPathUnits="objectBoundingBox">
                        <path transform="scale(0.0454, 0.0625)" d="M12.85.57c.74.46 1.16-.23 1.95.02.8.24 1.9.82 2.79 1.42.89.6 1.96.6 2.55 1.18.6.58.67 1.45.98 2.3.3.87.82 1.66.88 2.85.06 1.2-.69 1.64-1.23 3.08-.54 1.45-.12 1.04-.9 1.63-.79.6-1.23.11-1.91.74-.69.62-1.05.9-2.2 1.32-1.14.42-1.96-.38-2.86.19-.9.57-1.58.74-2.53.7-.94-.05-2.2-.98-3.14-.98-.94 0-1.6-.03-2.64-.23-1.04-.2-1.63-1.4-2.25-2.19-.62-.78-1.3-.24-1.98-1.15-.67-.91.08-2.18-.23-3.13-.3-.94 0-1.76.07-2.53s.35-.72.86-1.07c.52-.36.73-1.47 1.39-2.25.66-.78 1.53-.56 2.4-.74C5.73 1.55 5.94 1 6.7.56 7.46.12 8.15.24 9.1.26c.93.03.78-.25 1.93-.26 1.15 0 1.09.1 1.82.57z" />
                    </clipPath>
                </defs>
            </svg>
        </div>

        <div class="py-8 px-4 leading-loose">
            <h2 class="font-bold text-[clamp(1.5rem,5vw,2rem)] mb-1">神経衰弱</h2>
            <time datetime="2025-10-06">投稿:2025/10/06</time>
            <p class="text-lg mt-4">
                同じ写真のカードを探そう
            </p>
        </div>
    </div>

    @include('components.pager-btn', ['prev' => route('honhol_spot'), 'next' => route('uzkz_2'),])


    <main class="py-20">

        <p id="countmessage" class="text-3xl">目指せ！１５枚以内！</p>

        <div id="trumptable" class="grid w-full gap-[3em] py-16 px-5 place-content-center place-items-center grid-cols-[repeat(auto-fit,minmax(min(100%,15em),15em))] text-[clamp(0.1em,1.5vw,1em)]">
            @php
                $photos = ['memory_dog.jpg', 'memory_train.jpg', 'memory_vase.jpg', 'memory_sophia.jpg', 'memory_Thalgo.jpg', 'memory_train2.jpg']
            @endphp
            @foreach($photos as $photo)
                <div class="trump relative w-full aspect-3/4 perspective-[1000px] transform-3d">
                    <div class="absolute inset-0 w-full h-full backface-hidden rounded-lg shadow-md transition-transform duration-1000 in-[.is-flipped]:transform-[rotateY(180deg)] cursor-pointer bg-[color-mix(in_srgb,var(--color-main),var(--color-base)_80%)] grid place-content-center gap-[1em]">
                        <span class="material-symbols-outlined text-[1.5em]!">train</span><span><br>отаку<br>и<br>плацкарт</span>
                    </div>
                    <div class="absolute inset-0 w-full h-full backface-hidden rounded-lg shadow-md transition-transform duration-1000 transform-[rotateY(180deg)] in-[.is-flipped]:transform-[rotateY(360deg)]">
                        <img class="w-full h-full object-cover" src="{{ asset('images/' . $photo) }}">
                    </div>
                </div>
            @endforeach
        </div>

        <div class="cursor-pointer text-2xl">
            <p id="reset">reset</p>
        </div>

    </main>

    @include('components.pager-btn', ['prev' => route('honhol_spot'), 'next' => route('uzkz_2'),])


@endsection
@push('scripts')
  <script>
    window.onload =function() {
      const trumps = document.querySelectorAll('.trump')
			for (let i = 0 ; i < trumps.length ; i++) {
				let trump_clone = trumps[i].cloneNode(true);
        trump_clone.classList.add('trump');
				document.getElementById('trumptable').appendChild(trump_clone);
			}

      const allTrumps = document.querySelectorAll('.trump');
      let selections = [];
      let cnt = 0;
      let clearcnt = 0;
      let isProcessing = false;

      shuffle(allTrumps);

        allTrumps.forEach((card) => {
            card.addEventListener("click", () => {
            if (isProcessing) return;
            if (card.classList.contains("is-flipped")) return;
            if ( selections.length === 0 ) {
                card.classList.add("is-flipped");
                selections.push(card);
                cnt++;
            } else {
                card.classList.add("is-flipped");
                selections.push(card);
                cnt += 1;
                if ( selections[0].querySelector("img").src === selections[1].querySelector("img").src ) {
                selections = [];
                clearcnt += 2;
                } else {
                isProcessing = true;
                setTimeout(() => {
                    selections[0].classList.remove("is-flipped");
                    selections[1].classList.remove("is-flipped");
                    selections = [];
                    isProcessing = false;
                }, 700);
                }
            }
            if (clearcnt === allTrumps.length) {
                document.getElementById('countmessage').textContent = cnt + "枚目でクリア！";
            } else {
                document.getElementById('countmessage').textContent = cnt + "枚目";
            }
            });
        });

        const reset = document.getElementById('reset');
        reset.addEventListener("click", () => {
            allTrumps.forEach(card => {
                card.classList.remove('is-flipped');
            });
            document.getElementById('countmessage').textContent = "目指せ！１５枚以内！";
            selections = [];
            cnt = 0;
            clearcnt = 0;
            isProcessing = false;
            shuffle(allTrumps);
        })

        function shuffle(allTrumps) {
            const list = document.getElementById('trumptable');
            const shuffleitems = Array.from(allTrumps);
            for (let i = shuffleitems.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [shuffleitems[i], shuffleitems[j]] = [shuffleitems[j], shuffleitems[i]];
            }
            shuffleitems.forEach(item => list.appendChild(item));
		}
    }
  </script>
@endpush