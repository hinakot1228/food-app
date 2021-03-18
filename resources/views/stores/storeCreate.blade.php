<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>サインアップ</title>
    <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
    <div class="footerFixed">
        <header>
            <div class="header-wrapper">
                <a href="#" class="header-logo">アプリ名</a>
            </div>
        </header>

        <main>
            <div class="wrapper">
                <div class="container">
                    <div class="main-heading">
                        <h2>お店の登録</h2>
                    </div>
                    <form method="POST" action="{{ route('stores.store') }}">
                        @csrf
                        <div class="signup-form">
                            <div class="signup-right">
                                <div class="signup-info-group">
                                    <label for="name" class="form-label">店名</label>
        
                                    <div class="profile-info">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="signup-info-group">
                                    <label for="featured_food" class="text">目玉商品</label>
        
                                    <div class="signup-info">
                                        <input id="featured_food" type="text" class="form-control @error('featured_food') is-invalid @enderror" name="featured_food" value="{{ old('featured_food') }}" required autocomplete="featured_food" autofocus>
        
                                        @error('featured_food')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="signup-info-group">
                                    <label for="sex" class="form-label">リンク</label>
        
                                    <div class="signup-info">
                                        {{-- 保留 --}}
                                        <input id="link" type="url" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link') }}" required autocomplete="link" autofocus>

                                        {{-- <input id="male" type="radio" name="sex" value="male"><label for="male">男性</label>
                                        <input id="female" type="radio" name="sex" value="female"><label for="female">女性</label>
                                        <input id="otherSex" type="radio" name="sex" value="otherSex"><label for="otherSex">それ以外</label> --}}
        
                                        @error('link')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="signup-info-group">
                                    <label for="price" class="form-label">予算</label>
        
                                    <div class="signup-info">
                                        {{-- <input id="price" type="select" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}" required autocomplete="number"> --}}

                                        <select name="price" >
                                            <option value="-500">500円未満</option>
                                            <option value="500-1000">500円以上1,000円未満</option>
                                            <option value="1000-2000">1,000円以上2,000円未満</option>
                                            <option value="2000-3000">2,000円以上3,000円未満</option>
                                            <option value="3000-5000">3,000円以上5,000円未満</option>
                                            <option value="5000-8000">5,000円以上8,000円未満</option>
                                            <option value="8000-10000">8,000円以上10,000円未満</option>
                                            <option value="10000-">10,000円以上</option>
                                        </select>
        
                                        @error('number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="signup-info-group">
                                    <label for="genre" class="form-label">ジャンル</label>
        
                                    <div class="signup-info">
                                        {{-- <input id="genre" type="select" class="form-control @error('genre') is-invalid @enderror" name="genre" required autocomplete="new-password"> --}}

                                        <select name="genre" >
                                            <option value="洋食">洋食</option>
                                            <option value="和食">和食</option>
                                            <option value="中華">中華</option>
                                            <option value="イタリアン">イタリアン</option>
                                            <option value="韓国">韓国</option>
                                            <option value="タイ">タイ</option>
                                            <option value="フランス">フランス</option>
                                            <option value="トルコ">トルコ</option>
                                        </select>
        
                                        @error('genre')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="signup-info-group">
                                    <label for="main-dish" class="form-label">主菜</label>
        
                                    <div class="profile-info">
                                        {{-- <input id="main-dish" type="select" class="form-control" name="main-dish" required autocomplete="new-password"> --}}

                                        <select name="main_dish" >
                                            <option value="肉">肉</option>
                                            <option value="魚">魚</option>
                                            <option value="野菜">野菜</option>
                                        </select>

                                    </div>
                                </div>
                                {{-- <div class="signup-info-group">
                                    <label for="words" class="form-label">一言</label>
        
                                    <div class="signup-info">
                                        <input id="words" type="text" class="form-control @error('comment') is-invalid @enderror" name="words" required autocomplete="new-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="signup-btn">
                            <button type="submit" class="btn signup-submit-btn" value="登録"></button>
                        </div>
                    </form>
                </div>
            </div>
        </main>

        <footer>
            <div class="footer-wrapper">
                <small>&copy; 2021 The greatest show MEN</small>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="{{asset('/assets/js/imgpreview.js')}}"></script>
</body>
</html>