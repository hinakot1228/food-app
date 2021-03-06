<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>(店名)の詳細情報</title>
    <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
    <div class="footerFixed">
        <header>
            <div class="header-wrapper">
                <a href="{{ url('/') }}" class="header-logo">ペコログ</a>
            </div>
        </header>

        <main>
            <div class="wrapper">
                <div class="container">
                    <div class="main-heading">
                        <h2>{{ $store->name }}の詳細情報</h2>
                    </div>

                    <div class="stores">
                      <div class="store">
                          <div class="store-menu">
                              <img src="http://placehold.jp/70x70.png" alt="" class="store-img">
                              <div class="store-name">
                                  <h3>{{ $store->name }}</h3>
                              </div>
                          </div>

                            <div class="fetured_food">目玉商品：<span>{{ $store->featured_food }}</span></div>
                            <div class="price">値段：<span>{{ $store->price }}</span></div>
                                
                          <div class="store-btns">

                              <a class="btn" href="{{ $store->link }}">リンク</a>
                              {{-- <a class="btn" href="">レビューを書く</a> --}}

                          </div>
                      </div>
                  </div>

                  <div class="container-2">
                    <div class="stores-detail">
                      <h2>レビュー</h2>
                    </div>

                    <div class="details-container">
                      <div class="detail">
                        @foreach ( $reviews as $review )
                        <div class="detail-box">
                            <div class="detail-top">
                                <div class="detail-img">
                                    <img class="review-img" src="http://placehold.jp/70x70.png" alt="">
                                </div>
                                <div class="detail-text">
                                    <p>作成者：{{ $review->user->name }}</p>
                                    <p>来店日：{{ $review->date }}</p>
                                </div>
                            </div>
                            <div class="detail-bottom">
                                <div class="detail-star">
                                    <p>
                                        <span class="star5_rating" data-rate="{{ $review->stars }}"></span>
                                    </p>       
                                </div>
                                <div class="detail-comment">
                                    <p>コメント：<br>{{ $review->comment }}</p>
                                </div>
                            </div>
                            <form action='{{ route('reviews.destroy', $review->id) }}' method='post'>
                                @csrf
                                @method('delete')
                                <input type='submit' value='削除' class="btn btn-danger" onclick='return confirm("本当に削除しますか？");'>
                            </form>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>


                </div>
            </div>
        </main>

        <footer>
            <div class="footer-wrapper">
                <small>&copy; 2021 The greatest show MEN</small>
            </div>
        </footer>
    </div>
</body>
</html>