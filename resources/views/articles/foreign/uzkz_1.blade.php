@extends('layouts.app')
@section('title', 'おとくい！プラッツカルト！_海外鉄入門１落単①【旅行記】_отаку_и_плацкарт!!')
@section('content')

    <div class="flex flex-col items-center text-center py-20">
        <div class="relative w-[22em] h-[16em] text-[clamp(0.7em,3.5vw,2.5em)]">
            <img class="w-full h-full object-cover [clip-path:url(#wavyPhoto)]" src="https://dencha-platkart.sakura.ne.jp/images/uzbkkzqh2023/KIIP5143_s.jpg" alt="海外鉄入門１落単①【旅行記】">
            <svg width="0" height="0" class="absolute">
                <defs>
                    <clipPath id="wavyPhoto" clipPathUnits="objectBoundingBox">
                        <path transform="scale(0.0454, 0.0625)" d="M12.85.57c.74.46 1.16-.23 1.95.02.8.24 1.9.82 2.79 1.42.89.6 1.96.6 2.55 1.18.6.58.67 1.45.98 2.3.3.87.82 1.66.88 2.85.06 1.2-.69 1.64-1.23 3.08-.54 1.45-.12 1.04-.9 1.63-.79.6-1.23.11-1.91.74-.69.62-1.05.9-2.2 1.32-1.14.42-1.96-.38-2.86.19-.9.57-1.58.74-2.53.7-.94-.05-2.2-.98-3.14-.98-.94 0-1.6-.03-2.64-.23-1.04-.2-1.63-1.4-2.25-2.19-.62-.78-1.3-.24-1.98-1.15-.67-.91.08-2.18-.23-3.13-.3-.94 0-1.76.07-2.53s.35-.72.86-1.07c.52-.36.73-1.47 1.39-2.25.66-.78 1.53-.56 2.4-.74C5.73 1.55 5.94 1 6.7.56 7.46.12 8.15.24 9.1.26c.93.03.78-.25 1.93-.26 1.15 0 1.09.1 1.82.57z" />
                    </clipPath>
                </defs>
            </svg>
        </div>

        <div class="py-8 px-4 leading-loose">
            <h2 class="font-bold text-[clamp(1.5rem,5vw,2rem)] mb-1">海外鉄入門１落単①【旅行記】</h2>
            <time datetime="2024-12-26">2024.12.26更新</time>
            <p class="text-lg mt-4">ウズベク入国。バザール見物と一瞬だけ撮り鉄。</p>
        </div>
    </div>

    @include('components.pager-btn', ['prev' => route('uzkz_matome'), 'next' => route('honhol_spot'),])

    <main class="article">

        <section>
            <h2>まえがき（読まなくていい）</h2>
            <p>
                とち狂った海外鉄諸氏によって海の向こうの鉄道に魅力に気が付いたのは２０１９年、高校生の頃のことである。<br>
                北海道の北の北、サハリンを行く無骨な気動車Д2、極東ウラジオストクから７日間ひた走るシベリア鉄道。どうやら乗り継げば鉄路でユーラシアを制覇できるらしい。しかもそこには ワインレッドが美しいソビエト電機、丸い頭のエレクとリーチカ、高原を行くM62。なんと素晴らしいことか！<br>
                高校の卒業旅行は近場のサハリンと決めた矢先にコロナ禍である。気が付けばД2は退役していた。大学入学後も海外など行ける情勢ではなくもっぱら部活に明け暮れていた。<br>
                2022年にはロシアはウクライナに侵攻を開始した。渡航などとてもできなくなってしまった。このままでは死ぬまでどこにも行けなくなる。被写体も 旅行先も逃げるのだ。俺にも素晴らしい鉄道情景を見せろ！<br>
                そんなわけで20233年3月、大学の春休みを利用して初海外鉄を敢行した。行先はウズベキスタンをはじめとした中央アジア諸国だ。ウズベキスタン に残る丸顔エレクとリーチカを激写、タジキスタンの山奥を行く寝台車を堪能し、カザフスタンのьл80で鉄分を過剰摂取する。完璧な計画であった。<br>
                実態はホームシックによるモチベーション消失、現地でのコロナ観戦、渡航直前の丸顔エレクとリーチカ退役と撮り鉄としては非常に非常 になさけない結果に終わった。<br>
                よって、これらの記事にはあまり鉄道は登場しない。Vなカットもない。有益な旅行情報もない。<br>
                しかし、海外旅行としては１２０点。得難い素晴らしい経験ができた。後にも先にもこれ以上の旅はなかなかないだろう。
            </p>
            <h3>旅行記：ウズベキスタンに行こう（今回は電車でてこないよ）</h3>
            <p>
                初めての海外に胸を躍らせ安い航空券を探すも面倒になり、無難にアシアナ航空で発見した矢先のことである。SNSにウズベキスタンの丸顔エレクト リーチカ退役の知らせが入った。鉄オタなら一度は考える”あと１０年早く生まれていれば…”である。<br>
                気を落としつつ使いもしない荷でパンパンの登山用60Lザックとともにアシアナ航空に乗り込んだ。
            </p>
            <div>
                <img src="https://dencha-platkart.sakura.ne.jp/images/uzbkkzqh2023/DSC_0961.jpg">
            </div>
            {{-- <img src="{{ asset('images/uzbkkzqh2023/DSC_0961.jpg') }}" alt="写真1"> --}}
        </section>

        <section>
            <p>
                乗り継ぎのソウルからタシケントまで隣席の彼はウズベク人だった。日本留学から帰国するところだという。<br>
                ２２時頃ウズベキスタンの首都、タシケントに到着した。「welcome! uzbekistan!」彼 から歓迎を受けた。次は緊張のイミグレーション。<br>
                特に並ぶこともなく自分の番がきた。審査官は眠くて不機嫌そうだ。「目的は？」「ｻｯ、さいとしーいんぐ」「何日滞在する？」「ﾂｯ、つーうぃーく」バン！スタンプゲット。一番後ろのページの左上。<br>
                両替を済ませてsimカードを買った。通信会社はbeeline。日本で使っているプランよりいい プランにした。それでも半額以下だったと思う。<br>
                空港を出ると排気ガスの匂いがする。（後から知ったがこの国の車はメタンガス？で走る。）そこに数人のソビエト運ちゃん（この地域を旅した方ならわかるだろう。よくいるおっちゃんだ。）による客引き。<br>
                正直ビビった。だって新宿にいないじゃん。
            </p>

            <div>
                <img src="https://dencha-platkart.sakura.ne.jp/images/uzbkkzqh2023/DSC_0980.jpg">
                {{-- <img src="{{ asset('images/uzbkkzqh2023/DSC_0980.jpg') }}" alt="写真1"> --}}
            </div>
            <p>
                「ﾍｲﾐｽﾀｰ、ﾀｸｼｨｰﾀｸｽｨｰ、5ﾄﾞﾙ！」無視して予約したドミトリーまで徒歩移動を試みる。
            </p>

            <p>
                <h3>初遭遇</h3>
            </p>
            <div>
                <img src="https://dencha-platkart.sakura.ne.jp/images/uzbkkzqh2023/DSC_0982.jpg">
                {{-- <img src="{{ asset('images/uzbkkzqh2023/DSC_0982.jpg') }}" alt="写真1"> --}}
            </div>
            <p>
                歩いていると轟音とともにやってきた中華製巨大電機。側面が面一でなんか変
            </p>

            <p>
                この後は疲れて結局タクシーにぼられた。50000スム成。この時はyandexGOの使い方を知らなかった。（一敗）<br>
                タクシーから眺める夜のタシケントは意外なほど明るく、美しかった。
            </p>
        </section>

        <section>
            <p>
                ドミトリー<a href="https://www.booking.com/hotel/uz/amp-hostel-gallery.ja.html">Hotel & Hostel Gallery</a>に宿泊。<br>
                かなり親切なうえ、オーナーは少し日本語ができる。この旅行中何泊か利用した。<br>
                地下鉄Oybek駅が近い。国鉄タシケント中央駅も徒歩で行ける距離。<br>
                当たり前だがウズベクニキがたくさんいた。ビビった。
            </p>

            <div>
                <img src="https://dencha-platkart.sakura.ne.jp/images/uzbkkzqh2023/DSC_0985.jpg" alt="写真1">
                {{-- <img src="{{ asset('images/uzbkkzqh2023/DSC_0985.jpg') }}" alt="写真1"> --}}
            </div>
            <p>
                夜が明けてドミトリーで朝食。あまりに緊張していて食べきれなかった。ごめんよ。<br>
                本来なら速攻ホジェンドからタジキスタン入りの予定だったがこの時点で諦めた。
            </p>
        </section>

        <section>
            <h3>たのしいチョルスーバザール</h3>
            <div>
                <img src="{{ asset('images/uzbkkzqh2023/KIIP5128.jpg') }}" alt="写真1">
            </div>
            <p>
                とりあえずバザールに行ってみることにした。地球の歩き方片手に地下鉄に乗る。
            </p>

            <p>
                路線図を見ていると「いまここだよ」と親切なウズベクニキが教えてくれた。ありがとう見知らぬウズベクニキ<br>
                おばちゃんは私の大きなザックをみて席を譲ってくれた。ありがとう見知らぬおばちゃん。<br>
                タシケント地下鉄は中央アジア初の地下鉄ということでやたらと豪華だ。<br>
                駅ごとに意匠が違うのできっと数少ない読者の健常者諸君も楽しめるだろう。<br>
                このころは警備員にビビり散らかしているのでまともな写真がない。残念
            </p>

            <div class="grid grid-cols-2 mt-8">
                <img src="https://dencha-platkart.sakura.ne.jp/images/uzbkkzqh2023/mdm_003907_s.jpg" alt="写真1">
                <img src="https://dencha-platkart.sakura.ne.jp/images/uzbkkzqh2023/mdm_003894_s.jpg" alt="写真2">
                <img src="https://dencha-platkart.sakura.ne.jp/images/uzbkkzqh2023/mdm_003893.jpg" alt="写真3">
                <img src="https://dencha-platkart.sakura.ne.jp/images/uzbkkzqh2023/mdm_003897_s.jpg" alt="写真4">
                {{--
                <img src="{{ asset('images/uzbkkzqh2023/mdm_003907_s.jpg') }}" alt="写真1">
                <img src="{{ asset('images/uzbkkzqh2023/mdm_003894_s.jpg') }}" alt="写真2">
                <img src="{{ asset('images/uzbkkzqh2023/mdm_003893.jpg') }}" alt="写真3">
                <img src="{{ asset('images/uzbkkzqh2023/mdm_003897_s.jpg') }}" alt="写真4">
                --}}
            </div>
            <p>
                なんでも売ってる。にぎやかで楽しい。
            </p>

            <div class="mt-8">
                <img src="{{ asset('images/uzbkkzqh2023/mdm_003910_s.jpg') }}" alt="写真1">
            </div>
            <p>
                屋外は果物やらドライフルーツやら衣類、陶器など腐らないもの、屋内は漬物や肉などの生ものらしい。<br>
                独特の匂いがした。
            </p>

            <div class="mt-8">
                <img src="{{ asset('images/uzbkkzqh2023/mdm_003912.jpg') }}" alt="写真1">
            </div>
            <p>
                どこの市場にも漬物がある。いいよね漬物
            </p>

            <div class="grid grid-cols-2 mt-8">
                <img src="{{ asset('images/uzbkkzqh2023/mdm_003917_s.jpg') }}" alt="写真1">
                <img src="{{ asset('images/uzbkkzqh2023/mdm_003919_s.jpg') }}" alt="写真2">
                <img src="{{ asset('images/uzbkkzqh2023/mdm_003918_s.jpg') }}" alt="写真3">
                <img src="{{ asset('images/uzbkkzqh2023/KIIP5139_s.jpg') }}" alt="写真4">
            </div>
            <p>
                みんなポーズ取ってくれた。金にならない旅人でごめんよ。
            </p>
        </srction>

        <section>
            <div>
                <img src="{{ asset('images/uzbkkzqh2023/KIIP5143_s.jpg') }}" alt="写真1">
            </div>
            <p>
                おなかが減ったところにサムサ屋が現れた。焼き立てのサムサとチャイをいただいた。<br>
                相席のおっちゃんがチャイの飲み方を教えてくれた。ありがとうおっちゃん。<br>
                案の定「お前、家族は？一人できたのか？お前！この国で結婚しろ！次は奥さん連れてこい！」とのこと<br>
                サッカー好きの気さくなおっちゃんだった。日本のサッカー選手も詳しかった。仲よくセルフィーを取って解散。<br>
            </p>

            <div class="grid grid-cols-3 mt-8">
                <img src="{{ asset('images/uzbkkzqh2023/KIIP5148_s.jpg') }}" alt="写真1">
                <img src="{{ asset('images/uzbkkzqh2023/KIIP5150_s.jpg') }}" alt="写真2">
                <img src="{{ asset('images/uzbkkzqh2023/KIIP5147_s.jpg') }}" alt="写真3">
            </div>
            <p>
                チャイの湯呑を返したら窯を見学させてくれた。<br>
                次から次へサムサが落成していく、見事な職人技だった。
            </p>
        </section>

        <section>
            <div>
                <img src="{{ asset('images/uzbkkzqh2023/KIIP5206_s.jpg') }}" alt="写真1">
            </div>
            <p>
                この後は地下鉄で両替に行き
            </p>

            <div class="mt-8">
                <img src="{{ asset('images/uzbkkzqh2023/KIIP5263.jpg') }}" alt="写真1">
            </div>
            <p>
                タシケント遊園地カーブで撮り鉄して終了。後追い以外は見事にピン甘。人生初海外撮り鉄惨敗。
            </p>

        </section>
    </main>

    @include('components.pager-btn', ['prev' => route('uzkz_matome'), 'next' => route('honhol_spot'),])

@endsection