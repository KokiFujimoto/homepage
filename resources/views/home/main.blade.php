@extends('layouts.app')

@section('title', 'ホーム｜HAIR SALON ◯◯◯◯')

@section('content')

<section class="title">
    <div class="logo">
        <h1 class="logo-font">HAIR SALON</h1>
        <h1 class="logo-font">◯◯◯◯</h1>
    </div>
    <div class="time-char">
        <p><u>open 9:00</u></p>
        <p><u>closed 18:30</u></p>
    </div>
</section>
<section class="salon-view">
    <img class="salon" src="salon-view.jpg" alt="店内画像">
</section>
<section class="menu">
    <img class="cat col-sm-6" src="scissors_etc.png" alt="ハサミと肉球">
    <div class="charcters col-sm-6">
        <h1 class="color-#DBC8BE">メニュー</h1>
        <p>ご期待以上の満足のために</p>
        <p>すべて税込の価格表示です</p>
        <h2 class="color-#DBC8BE">カット料金</h2>
        <ul class="no-padding">
            <li><p>育毛スパコース<span class="right-margin">5700円</span></p></li>
            <li><p><span class="right-margin">炭酸スパコース</span>5400円</p></li>
            <li><p><span class="right-margin">カット＆シェーブ</span>4500円</p></li>
            <li><p><span class="right-margin">カットシェーブ無</span>3700円</p></li>
        </ul>
        <p><span>イヤーシェーブ200円</span>アイブローシェーブ300円</p>
        <p>育毛剤配合のシャンプー＆トリートメン＆アデノシン配合育毛剤</p>
        <p>炭酸効果で老廃物　血行の促進</p>
        <p>耳まで剃るシェービングを味わってください</p>
        <h2 class="color-#DBC8BE">​​学生カット料金</h2>
        <ul class="no-padding">
            <li><p><span>大学</span>3700円<span>シェーブ無</span>3400円</p></li>
            <li><p><span>高校生</span>3300円<span>シェーブ無</span>3000円</p></li>
            <li><p><span>中学生</span>2700円<span>シェーブ無</span>2400円</p></li>
            <li><p><span>小学生</span>2200円</p></li>
            <li><p><span>幼児</span>1800</p></li>
        </ul>
        <p>幼児はシャンプー無しのお値段です</p>
        <p>＋300円でシャンプ―リンス出来ます</p>
        <p>中高生の規制を理解しながらおしゃれなヘアカットをご提供します</p>
        <h2 class="color-#DBC8BE">バリカン丸刈り</h2>
        <p>おとな<span>3100円</span>学生は基本料金から500円引き</p>
        <p>０.7ｍｍから２３ｍｍまで可能です</p>
        <p>長さと技術内容で料金が変わります</p>
        <h2 class="color-#DBC8BE">パーマ＆カラー</h2>
        <ul class="no-padding">
            <li><p><span>パーマ</span>6000円～</p></li>
            <li><p><span>ストパー</span>7300円～</p></li>
            <li><p><span>カラー</span>7000円～</p></li>
            <li><p><span>白髪ぼかし</span>5500円～</p></li>
            <li><p><span>白髪染め</span>6300円～</p></li>
        </ul>
        <h2 class="color-#DBC8BE">​リラクゼーション</h2>
        <p>確かな成果</p>
        <ul class="no-padding">
            <li><p>ヘッドスパ<span>炭酸</span>1700円</p></li>
            <li><p>ヘッドスパ<span>育毛</span>2300円</p></li>
            <li><p><span>メンズシェービング</span>1800円</p></li>
            <li><p><span>レディースシェービング</span>2900円</p></li>
            <p><span>マッサージパック付き</span>3300円</p>
            <li><p><span>シャンプーリンス</span>1000円</p></li>
            <li><p><span>ヘッドマッサージ</span>500円</p></li>
            <li><p><span>前髪カット</span>500円</p></li>
        </ul>
    </div>
</section>
<section class="picture-group d-flex">
    <div class="pic-group1">
        <img class="holiday" src="holiday.jpeg" alt="">
        <img class="wax" src="original-wax.jpg" alt="">
    </div>
    <div class="pic-group2">
        <img class="spa" src="spa.jpg" alt="">
        <img class="silk" src="silk-shampoo.jpg" alt="">
        <img class="color-perm" src="color-perm.jpg" alt="">
    </div>
    <div class="pic-group3">
        <img class="adeno" src="adeno.jpg" alt="">
        <img class="baby" src="baby.png" alt="">
    </div>
    <div class="pic-group4">
        <img class="shampoo" src="shampoo.jpg" alt="">
        <img class="picture" src="picture.jpg" alt="">
    </div>
</section>
<section class="infomation">
    <div class="form-group-1">
        <div class="explanation">
            <h1 class="inquiry-color">お問い合わせemail</h1>
            <p class="shigematsu">HAIR SALON ◯◯◯◯</p>
            <p class="shigematsu">お問い合わせフォームよりご連絡ください</p>
            <p class="address">愛媛県松山市岩崎町◯◯◯◯</p>
            <p class="our-email">test@example.com</p>
        </div>
        <div class="form">
            <form action="{{ route('confirm') }}" method="post">
                @csrf
                <div class="form-input">
                    <input class="name" type="text" name="name" placeholder="名前">
                    <input class="email" type="email" name="email" placeholder="メールアドレス">
                    <input class="subject" type="text" name="title" placeholder="件名">
                    <textarea class="body" name="body" cols="30" rows="10" placeholder="メッセージを入力してください"></textarea>
                </div>
                <button class="send" type="submit">送信</button>
            </form>
        </div>
    </div>
    <div class="scissors">
        <img class="one-scissor" src="one-scissor.png" alt="横向きのハサミ">
    </div>
    <div id="map" style="height:500px"> 
        <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyBXA_DD2O2z069Rzy5H-DACvu6CvX3sB1c&callback=initMap" async defer>
	</script>
    </div>
</section>

@endsection