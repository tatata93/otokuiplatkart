@extends('layouts.app')
@section('title', 'おとくい！プラッツカルト！_海外鉄入門１落単まとめ_отаку_и_плацкарт!!')
@section('content')

<main>
    <div style="width: 100dvw; height: auto; aspect-ratio: 3 / 2; margin-top: calc(-100dvw / 301 * 16); overflow-x: hidden; z-index: -1;">
        <img src="{{ asset('images/5.jpg') }}" style="width: 100%; height: 100%; object-fit: cover;" />
    </div>

    <div style="margin-top: calc(-100dvw / 301 * 16); filter: url(#shadow);">
        <div><svg style="width: 100dvw; height: auto; aspect-ratio: 301 / 16; color: var(--color-main); transform: scale(-1,-1); overflow-x-hidden;"><use xlink:href="#headerWave" /></svg></div>
        <div class="bg-main flex flex-col items-center justify-center text-center">

            <div class="grid grid-cols-1 min-[700px]:grid-cols-[21em_21em] min-[1030px]:grid-cols-[21em_21em_21em] px-2 py-3 mt-10">
                <div class="relative">
                    <svg class="text-base w-[21em] h-[15em] filter-[url(#shadow)]"><use xlink:href="#wavyFrame" /></svg> 
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-[calc(50%+2em)] font-bold text-[1.5em]">訪問国</div>
                    <div class="absolute top-1/2 left-1/2 -translate-x-[calc(50%-2.5em)] -translate-y-[calc(50%-1.6em)]">ウズベキスタン<br>カザフスタン</div>
                </div>

                <div class="relative">
                    <svg class="text-base w-[21em] h-[15em] filter-[url(#shadow)]"><use xlink:href="#wavyFrame" /></svg> 
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-[calc(50%+2em)] font-bold text-[1.5em]">旅行期間</div>
                    <div class="absolute top-1/2 left-1/2 -translate-x-[calc(50%-2.5em)] -translate-y-[calc(50%-1.6em)]">2023/03/08<br><span class="-rotate-90 inline-block translate-x-[0.1em]">～</span><br>2023/03/25</div>
                </div>

                <div class="min-[700px]:max-[1040px]:col-span-2 relative flex justify-center">
                    <svg class="text-base w-[21em] h-[15em] filter-[url(#shadow)]"><use xlink:href="#wavyFrame" /></svg> 
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-[calc(50%+2em)] font-bold text-[1.5em]">撮影機材</div>
                    <div class="absolute top-1/2 left-1/2 -translate-x-[calc(50%-2.5em)] -translate-y-[calc(50%-1.6em)] whitespace-nowrap">Mamiya645DF+ Mamiya DM22<br>PENTAX K-1 改<br>xperia xz3</div>
                </div>
            </div>

            <div class="relative py-3">
                <svg class="text-base w-[21em] h-[38em] filter-[url(#shadow)]"><use xlink:href="#wavyFrame2" /></svg>
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-[calc(50%+9.5em)] font-bold text-[1.5em]">ルート</div>
                <div class="absolute top-1/2 left-1/2 -translate-x-[calc(50%-1.2em)] -translate-y-[calc(50%-3em)]">
                    <ul>
                        @php
                            $spots = ['成田', '仁川', 'タシケント', 'サマルカンド', 'ミスキン', 'ブハラ',
                                    'サマルカンド', 'タシケント', 'アルマータ', 'タラズ', 'タシケント', '仁川', '羽田']
                        @endphp
                        @foreach($spots as $spot)
                        <li class="flex gap-4">
                            <div class="flex flex-col items-center shrink-0 w-5">
                                <div class="size-5 rounded-full bg-yellow z-10"></div>
                                @if (!$loop->last)
                                    <div class="flex-1 w-0.75 bg-yellow -mt-1"></div>
                                @endif
                            </div>
                            <div class="pb-4 leading-tight">{{ $spot }}</div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="relative py-3 mb-10">
                <svg class="text-[clamp(1em,4vw,2em)] text-base w-[21em] h-[15em] filter-[url(#shadow)]"><use xlink:href="#wavyFrame" /></svg> 
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[70%]">
                    <p>
                        初めての海外旅行。ホームシック、モチベーション消失、<span class="whitespace-nowrap">コロナ感染。</span>素晴らしい出会いと体験。<br>
                        撮り鉄としては０点。旅としては１２０点。
                    </p>
                </div>
            </div>
        </div>
        <div><svg style="width: 100dvw; height: auto; aspect-ratio: 301 / 16; color: var(--color-main); overflow-x-hidden;"><use xlink:href="#headerWave" /></svg></div>
    </div>

    @include('components.pager-btn', ['prev' => route('uzkz_1'), 'next' => route('uzkz_2'),])

    <section>
        <div class="flex items-center gap-[1.2em] text-[clamp(0.3em,3vw,1em)]">
            <div><svg class="w-[8em] h-[6.4em] text-font [--parts-color:var(--color-base)] animate-[kakukakuMirror_1.4s_steps(1)_infinite] filter-[url(#shadow)]"><use xlink:href="#azarashi" /></svg></div>
            <h1 class="text-[2.5em] font-bold filter-[url(#shadow)]">ギャラリー</h1>
            <div><svg class="w-[8em] h-[6.4em] text-font [--parts-color:var(--color-base)] animate-[kakukaku_1.4s_steps(1)_infinite] filter-[url(#shadow)]"><use xlink:href="#azarashi" /></svg></div>
        </div>
        <div style="display: grid; justify-content: center; grid-template-columns: 18em 15em 6em 21em; grid-template-rows: 12em 12em 12em; gap: 0.7em; font-size: clamp(3px, 1.2vw, 16px);">
            <img src="{{ asset('images/album/3.jpg') }}" alt="アルマータ2駅" style="grid-column:2/4; grid-row:1/2;">
            <img src="{{ asset('images/album/11.jpg') }}" alt="タルゴの車掌さん" style="grid-column:1/2; grid-row:1/3;">
            <img src="{{ asset('images/uzbkkzqh2023/mdm_003902_s.jpg') }}" alt="そにぃ" style="grid-column:1/2; grid-row:3/4;">
            <img src="{{ asset('images/uzbkkzqh2023/mdm_004652_s.jpg') }}" alt="わんちゃん" style="grid-column:2/3; grid-row:2/4;">
            <img src="{{ asset('images/uzbkkzqh2023/mdm_004719_1_s.jpg') }}" alt="アルマリクGMK" style="grid-column:3/5; grid-row:2/4; object-position:5% center;">
            <img src="{{ asset('images/uzbkkzqh2023/mdm_004072_s.jpg') }}" alt="陶器を持つおばちゃん" style="grid-column:4/5; grid-row:1/2;">
        </div>
    </section>

    <section class="md:px-[clamp(0px,10px-0.1vw,10px)]">
        <div class="flex items-center gap-[1.2em] text-[clamp(0.3em,3vw,1em)]">
            <div><svg class="w-[8em] h-[6.4em] text-font [--parts-color:var(--color-base)] animate-[kakukakuMirror_1.4s_steps(1)_infinite] filter-[url(#shadow)]"><use xlink:href="#azarashi" /></svg></div>
            <h1 class="text-[2.5em] font-bold filter-[url(#shadow)]">利用した宿</h1>
            <div><svg class="w-[8em] h-[6.4em] text-font [--parts-color:var(--color-base)] animate-[kakukaku_1.4s_steps(1)_infinite] filter-[url(#shadow)]"><use xlink:href="#azarashi" /></svg></div>
        </div>

        @php
            $hotels = [
                'Hotel & Hostel Gallery' => [
                    'link'    => 'https://www.booking.com/hotel/uz/amp-hostel-gallery.ja.html',
                    'map'     => 'https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d4423.310318811124!2d69.26341180468974!3d41.2937242234847!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDHCsDE3JzMwLjkiTiA2OcKwMTUnNTcuMiJF!5e1!3m2!1sja!2sjp!4v1759463741753!5m2!1sja!2sjp',
                    'address' => 'улица Минглар 10 , Тошкент, 100015, ウズベキスタン',
                    'phone'   => '+998 88 976 04 21',
                    'GPS'     => 'N 041° 17.515, E 69° 15.954',
                    'desc'    => 'オーナーが少し日本語できる。親切。<br>タシケント地下鉄oubek駅が最寄。国鉄駅も徒歩圏内',
                ],
                'Amir Hostel' => [
                    'link'    => 'https://www.booking.com/hotel/uz/amir-hostel.ja.html',
                    'map'     => 'https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d4147.6646344595165!2d66.94966773765681!3d39.65657244846791!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMznCsDM5JzE3LjMiTiA2NsKwNTcnMTMuNiJF!5e1!3m2!1sja!2sjp!4v1759463773238!5m2!1sja!2sjp',
                    'address' => 'A.Jomiy 45, Самарканд, 140100, ウズベキスタン',
                    'phone'   => '+998 97 916 88 99',
                    'GPS'     => 'N 039° 39.289, E 66° 57.226',
                    'desc'    => '人生初外人と下ネタ。<br>国鉄駅からは歩けるが距離はある、yandexが楽',
                ],
                'Payrabiy' => [
                    'link'    => 'https://www.booking.com/hotel/uz/payraviy.ja.html',
                    'map'     => 'https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d1960.99437444679!2d64.41718959932525!3d39.777288376334816!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMznCsDQ2JzM2LjIiTiA2NMKwMjUnMDguNSJF!5e1!3m2!1sja!2sjp!4v1759464081280!5m2!1sja!2sjp',
                    'address' => 'M.Payraviy 38, Buxoro, 200100, ウズベキスタン',
                    'phone'   => '+998 91 446 72 55',
                    'GPS'     => 'N 039° 46.603, E 64° 25.142',
                    'desc'    => '旧市街にあるのでバスかyandex推奨。<br>駅に夜着の場合はオーナーにyandexをお願いしよう。',
                ],
                'DA Hostel Almaty' => [
                    'link'    => null,
                    'map'     => 'https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d3201.9252523381865!2d76.95996545264396!3d43.27123829276687!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDPCsDE2JzExLjgiTiA3NsKwNTcnNDcuMiJF!5e1!3m2!1sja!2sjp!4v1759464124892!5m2!1sja!2sjp',
                    'address' => 'Mukhamedzhanova Street 33, Almaty, 050002, カザフスタン',
                    'phone'   => '+7 7273975332',
                    'GPS'     => 'N 043° 16.197, E 76° 57.786',
                    'desc'    => null,
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 justify-center">
        @foreach($hotels as $name => $hotel)
            <div class="bg-base flex flex-col max-w-sm h-full shadow-[1px_1px_30px_rgba(170,153,138,0.2)]">
                <iframe src="{{ $hotel['map'] }}" class="sepia-40 saturate-120 contrast-80 brightness-110 h-48 w-full border-0" allowfullscreen="" loading="lazy"></iframe>
                <div class="py-5 px-8 flex flex-col flex-1 gap-6">
                    <h2 class="text-[1.5em] font-bold text-center leading-tight">{{ $name }}</h2>
                    <ul class="space-y-3">
                        <li class="flex gap-3 items-baseline">
                            <div class="size-4 rounded-full shrink-0 translate-y-[0.1em] bg-yellow"></div><div class="flex-1 text-left">住所: {{ $hotel['address'] }}</div>
                        </li>
                        <li class="flex gap-3 items-center">
                            <div class="size-4 rounded-full shrink-0 bg-yellow"></div><div class="flex-1 text-left">電話: {{ $hotel['phone'] }}</div>
                        </li>
                        <li class="flex gap-3 items-center">
                            <div class="size-4 rounded-full shrink-0 bg-yellow"></div><div class="flex-1 text-left">GPS： {{ $hotel['GPS'] }}</div>
                        </li>
                    </ul>
                    <div class="flex-1"><p class="text-left leading-relaxed">{!! $hotel['desc'] ?? '' !!}</p></div>
                    <div class="flex justify-center mt-auto pt-2">
                        @if(!empty($hotel['link']))
                            <a class="bg-main text-base inline-flex items-center gap-2 py-3 px-5 transition hover:brightness-90" href="{{ $hotel['link'] }}" target="_blank"><span class="material-symbols-outlined text-sm">link</span><span>{{ $name }}</span></a>
                        @else
                            <span class="bg-main text-base inline-flex items-center py-3 px-8">廃業済み</span>
                        @endif
                    </div>

                </div>
            </div>
        @endforeach
        </div>
    </section>

    @include('components.pager-btn', ['prev' => route('uzkz_1'), 'next' => route('uzkz_2'),])
</main>

@endsection
@push('scripts')
<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="display: none;">
    <symbol id="wavyFrame" viewBox="0 0 7 5" preserveAspectRatio="none">
        <path fill="currentColor" d="M1.41.52c.34-.15.48.01.8-.05.34-.05.77-.3 1.17-.3.4.02.9.39 1.26.35.34-.02.59-.02.85.13.26.15.49.66.7.78.21.12.52.12.72.5.2.37.02.8-.08 1.07-.12.28-.08.22-.11.7-.04.48-.57.5-.86.7-.27.18-.47.47-.82.44-.36-.03-.37-.1-.69-.07-.3.03-.84.25-1.15.23-.31-.02-.42-.23-.71-.33-.3-.09-.78-.06-1.05-.22-.29-.16-.39-.54-.64-.73-.27-.19-.36-.08-.56-.4-.2-.31.1-.64.04-.95-.07-.3-.2-.56-.04-.84.15-.27.47-.31.66-.48.2-.17.17-.38.52-.53z" fill-rule="evenodd"/>
    </symbol>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="display: none;">
    <symbol id="wavyFrame2" viewBox="0 0 16 23" preserveAspectRatio="none">
        <path fill="currentColor" d="M.56 9.56c.47-.76-.21-1.2.02-2.04.25-.82.83-1.97 1.43-2.9.6-.93.6-2.06 1.18-2.67.57-.62 1.45-.7 2.3-1.03C6.37.6 7.16.07 8.35 0c1.2-.06 1.64.73 3.08 1.29 1.45.56 1.04.13 1.63.94.6.82.11 1.28.74 2a5.63 5.63 0 0 1 1.32 2.3c.42 1.2-.38 2.04.18 2.98.58.94.75 1.66.7 2.65-.05.99-.97 2.3-.97 3.29 0 .97-.03 1.68-.23 2.76s-1.4 1.7-2.2 2.35c-.77.64-.23 1.36-1.14 2.06-.91.7-2.19-.07-3.13.24-.94.32-1.76 0-2.53-.06-.77-.08-.72-.37-1.07-.91-.36-.53-1.47-.76-2.25-1.45-.79-.69-.57-1.6-.74-2.52C1.56 17.02 1 16.8.56 16c-.44-.8-.32-1.52-.3-2.5.03-.99-.25-.83-.26-2.03 0-1.2.1-1.14.56-1.9z" fill-rule="evenodd"/>
    </symbol>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="display: none;">
    <symbol id="azarashi" viewBox="0 0 10 8">
        <path fill="currentColor" d="M11.9 2.96h.13c.32.06.64.56.74.8.1.23-.23.46-.13.62.1.15.53.12.73.32.13.3.23.78.07 1.07-.16.29-.61.58-1.04.66-1.05.17-1.11-.13-1.84.21-.45.22-.86.8-1.31 1.32l-.19.2.05.07c.14.21.24.56.3.85.1.4 0 .86-.34 1.04-.34.18-.74-.39-.93-.63a.94.94 0 0 1-.17-.42l-.02-.17-.2.06c-.66.16-1.36.13-1.88.1-.69-.03-2.27-.73-2.28-1.46 0-.74.76-1.96 1.28-2.49.58-.46 1.3-.65 1.87-.83.57-.18 1.5.13 2 .44.51.3 1.13.45 1.53.45.48-.03.62-.1.86-.42.16-.4-.38-.99-.23-1.29.13-.26.66-.48 1-.5z" fill-rule="evenodd" transform="matrix(1 0 0 1.11211 -3.52113 -3.29514)"/>
        <path fill="var(--parts-color, var(--color-font))" d="M6.12 6.65c0-.17.07-.3.16-.3.09 0 .16.13.16.3 0 .17-.05.28-.16.31-.11.03-.16-.14-.16-.3z" fill-rule="evenodd" transform="matrix(1 0 0 1.11211 -3.52113 -3.29514)"/>
        <path fill="var(--parts-color, var(--color-font))" d="M4.72 6.25c.05-.08.22-.24.27-.16.05.08.04.22-.04.34-.08.12-.2.21-.27.15-.07-.06-.01-.25.04-.33z" fill-rule="evenodd" transform="matrix(1 0 0 1.11211 -3.52113 -3.29514)"/>
        <path stroke="var(--parts-color, var(--color-font))" d="M4.31403 7.41784C4.40001 7.55561 4.51842 7.62952 4.63767 7.65571 4.75693 7.68185 4.90714 7.68451 5.02956 7.57491 5.04419 7.53959 5.04472 7.43891 5.04284 7.4469 5.04096 7.45488 5.01014 7.58722 5.01827 7.62285 4.94558 7.70902 4.95778 7.72707 4.98388 7.80329 5.00998 7.87955 5.06305 8.03902 5.17487 8.08023 5.25675 8.13636 5.33005 8.14403 5.45123 8.14283" stroke-width="0.143453" stroke-linecap="round" stroke-miterlimit="8" fill="none" fill-rule="evenodd" transform="matrix(1 0 0 1.11211 -3.52113 -3.29514)"/>
        <path stroke="var(--parts-color, var(--color-font))" d="M6.16 7.58c.15-.09.33-.07.5-.04" stroke-width="0.143453" stroke-linecap="round" stroke-miterlimit="8" fill="none" transform="matrix(1 0 0 1.11211 -3.52113 -3.29514)"/>
        <path stroke="var(--parts-color, var(--color-font))" d="M6.33 7.97c.15-.03.31.22.48.3h0" stroke-width="0.143453" stroke-linecap="round" stroke-miterlimit="8" fill="none" transform="matrix(1 0 0 1.11211 -3.52113 -3.29514)"/>
        <path stroke="var(--parts-color, var(--color-font))" d="M6.47 8.48c.01.15.01.3.08.42" stroke-width="0.143453" stroke-linecap="round" stroke-miterlimit="8" fill="none" transform="matrix(1 0 0 1.11211 -3.52113 -3.29514)"/>
        <path stroke="var(--parts-color, var(--color-font))" d="M4.11 6.53c.19.15.34.36.43.58" stroke-width="0.143453" stroke-linecap="round" stroke-miterlimit="8" fill="none" transform="matrix(1 0 0 1.11211 -3.52113 -3.29514)"/>
        <path stroke="var(--parts-color, var(--color-font))" d="M4 7.05c.01.08.04.07.09.07a.9.9 0 0 1 .32.08" stroke-width="0.143453" stroke-linecap="round" stroke-miterlimit="8" fill="none" transform="matrix(1 0 0 1.11211 -3.52113 -3.29514)"/>
        <path stroke="var(--parts-color, var(--color-font))" d="M4.07 7.34c-.2.13-.32.3-.48.44" stroke-width="0.143453" stroke-linecap="round" stroke-miterlimit="8" fill="none" transform="matrix(1 0 0 1.11211 -3.52113 -3.29514)"/>
    </symbol>
</svg>

@endpush