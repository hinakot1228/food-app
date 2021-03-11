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
                        <h2>サインアップ</h2>
                    </div>
                    <form method="POST" action="{{--{{ route('register') }} --}}">
                        @csrf
                        <div class="signup-form">
                            <div class="signup-left">
                                <div class="signup-img-group">
                                    <label for="image_at" class="form-label">プロフィール写真</label>
                                    <div class="signup-image">
                                        <input id="image_at" type="file" class="form-control  @error('image_at') is-invalid @enderror" name="image_at" value="{{ old('image_at') }}" required autocomplete="image_at" autofocus>
        
                                        @error('image_at')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="signup-img-preview">
                                        <img src="http://placehold.jp/150x150.png" alt="" class="img-preview">
                                    </div>
                                </div>
                            </div>
                            <div class="signup-right">
                                <div class="signup-info-group">
                                    <label for="name" class="form-label">名前</label>
        
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
                                    <label for="birth" class="form-label">生年月日</label>
        
                                    <div class="signup-info">
                                        <input id="birth" type="date" class="form-control @error('birth') is-invalid @enderror" name="birth" value="{{ old('birth') }}" required autocomplete="birth" autofocus>
        
                                        @error('birth')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="signup-info-group">
                                    <label for="sex" class="form-label">性別</label>
        
                                    <div class="signup-info">
                                        {{-- 保留 --}}
                                        {{-- <input id="sex" type="text" class="form-control @error('sex') is-invalid @enderror" name="sex" value="{{ old('sex') }}" required autocomplete="sex" autofocus> --}}

                                        <input id="male" type="radio" name="sex" value="male"><label for="male">男性</label>
                                        <input id="female" type="radio" name="sex" value="female"><label for="female">女性</label>
                                        <input id="otherSex" type="radio" name="sex" value="otherSex"><label for="otherSex">それ以外</label>
        
                                        @error('sex')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="signup-info-group">
                                    <label for="email" class="form-label">メールアドレス</label>
        
                                    <div class="signup-info">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="signup-info-group">
                                    <label for="password" class="form-label">パスワード</label>
        
                                    <div class="signup-info">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="signup-info-group">
                                    <label for="password-confirm" class="form-label">確認用パスワード</label>
        
                                    <div class="profile-info">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="signup-info-group">
                                    <label for="words" class="form-label">一言</label>
        
                                    <div class="signup-info">
                                        <input id="words" type="text" class="form-control @error('comment') is-invalid @enderror" name="words" required autocomplete="new-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="signup-btn">
                            <a type="submit" class="btn signup-submit-btn">
                                登録
                            </a>
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
    <script type="text/javascript" src="{{asset('/assets/js/profile-img-preview.js')}}"></script>
</body>
</html>