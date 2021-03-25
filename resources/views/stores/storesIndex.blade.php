<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>店一覧</title>
    <link href="{{secure_asset('/assets/css/style.css')}}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<body>
    {{-- {{ $stores }} --}}
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
                        <h2>お気に入りに登録したお店</h2>
                    </div>
                    @foreach ($favorites as $favorite)
                    <div class="stores">
                        <div class="store">
                            <div class="store-menu">
                                <img src="http://placehold.jp/70x70.png" alt="" class="store-img">
                                <div class="store-name">
                                    <h3>{{ $favorite->name }}</h3>
                                </div>
                            </div>
                            <div class="store-btns">
                                <a class="btn" href= " {{ route('stores.show', $favorite->store_id)}} ">詳細</a>
                                <a class="btn" href="">お気に入り解除</a>
                                <a class="btn" href=" {{url('reviews.create')}} ">レビューを書く</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </main>

        <footer>
            <div class="footer-wrapper">
                <small>&copy; 2021 The greatest show MEN</small>
            </div>
        </footer>

        <div class="page-top">
            <a id="page-top"><i class="fas fa-chevron-circle-up"></i></a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="{{asset('/assets/js/pagetop.js')}}"></script>
</body>
</html>