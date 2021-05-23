<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{ secure_asset('assets/css/index.css') }}">
</head>
<body>
  <header><a name="title"></a>
    <div class="first_view">
      <div class="header-logo"><a href="">ペコログ</a></div>
      <ul class="header-right" style="list-style: none">
        <li class="how-btn"><a href="#HowTo">使い方</a></li>
        <li class="function-btn"><a href="#Function">機能</a></li>
        {{-- <li class="signup-btn"><a href="">サインアップ</a></li>
        <li class="signin-btn"><a href="">サインイン</a></li>
        <li class="mypage-btn"><a href="">マイページ</a></li> --}}
        <li class="function-btn"><a href="{{ route('stores.create') }}">お店を登録する</a></li>
      </ul class="header-menu">
    </div>
    <h1 class="introduction">“今日のごはん何でもいいや…”</h1>
    <h2 class="introduction-content">
      そんなこと言わないで！
      <br>あなたが食べてる笑顔が見たい。
      <br>はらぺこなあなたにぴったりの一皿を。
    </h2>
    <div class="find">
        <form method="post" action="/foods" }}>
            @csrf
            <select id="genre" class="genre" name="genre" @error('genre') is-invalid @enderror" required>
                <option hidden>なんとなく食べたいジャンル</option>
                <option value="western">洋食</option>
                <option value="japanese">和食</option>
                <option value="chinese">中華</option>
                <option value="italian">イタリアン</option>
                <option value="korean">韓国料理</option>
                <option value="thai">タイ料理</option>
                <option value="french">フレンチ</option>
                <option value="turkish">トルコ料理</option>
            </select>
            {{-- @error('genre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror --}}
            <select id="maindish" class="maindish" name="maindish"  @error('maindish') is-invalid @enderror" required>
                <option hidden>なんとなく食べたい主食</option>
                <option value="meat">肉</option>
                <option value="fish">魚</option>
                <option value="vegetable">野菜</option>
            </select>
            {{-- @error('maindish')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror --}}
            <input class="search" type="submit" value="検索">
        </form>
    </div>
  </header>
  <main>
    <div class="howto"><a name="HowTo"></a>
        <b class="heading-howto">使い方</b>
          <div class="small-heading-howto">食べたいものを検索する</div>
            <ul class="howto-step" style="list-style: none">
              <li>STEP1</li>
              <li>STEP2</li>
              <li>STEP3</li>
            </ul>
            <div class="text-howto">
              <div class="howto1">
                <img class="imgs-howto1"src="{{ asset('imgs/Search-cuate2.png') }}" alt="">
               <br class="description1">「なんとなく食べたいジャンル」と「なんとなく食べたい主食の種類」を選択し、検索する。
              </div>
              <div class="howto2">
                <img class="imgs-howto2" src="{{ asset('imgs/select-cuate.png') }}" alt="">
                <br class="description2">STEP1で選択したキーワードに該当するお店が一覧表示される。
              </div>
              <div class="howto3">
                <img class="imgs-howto3" src="{{ asset('imgs/Eating healthy food-cuate.png') }}">
                <br class="description3">その時の気分に合った食べたいものや行きたいお店を見つけることができる。
              </div>
            </div>
    </div>
    <div class="function">
        <b class="heading-function">機能</b><a name="Function"></a>
          <div class="small-heading-howto">会員登録特典</div>
            <ul class="howto-step" style="list-style: none">
              <li>レビューを書く</li>
              <li>お気に入りに登録する</li>
              <li>お店を登録する</li>
            </ul>
            <div class="imgs-howto">
                <img class="imgs-howto1"src="{{ asset('imgs/Online Review-cuate.png') }}" alt="">
                <img class="imgs-howto2" src="{{ asset('imgs/Followers-cuate.png') }}" alt="">
                <img class="imgs-howto3" src="{{ asset('imgs/Notes-cuate.png') }}" alt="">
            </div>
            <a href="#title">
            <div class="back">
              <div class="radius">
                <div class="title-back"></div>
              </div>
            </div>
            </a>
          </div>
    </div>
    
  </main>
  <footer>
    <div class="developer">©️ 2021 The Greatest Show MEN</div>
  </footer>
</body>
</html>

