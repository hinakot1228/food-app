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
                <a href="index" class="header-logo">アプリ名</a>
            </div>
        </header>

        <main>
            <div class="wrapper">
                <div class="container">
                    <div class="main-heading">
                        <h2>(店名)の詳細情報</h2>
                    </div>

                    <div class="stores">
                      <div class="store">
                          <div class="store-menu">
                              <img src="http://placehold.jp/70x70.png" alt="" class="store-img">
                              <div class="store-name">
                                  <h3>店名</h3>
                              </div>
                          </div>
                          <div class="store-btns">
                              <a class="btn" href="">目玉商品</a>
                              <a class="btn" href="">予算</a>
                              <a class="btn" href="">リンク</a>
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
                        <div class="detail-box">
                            <div class="detail-top">
                                <div class="detail-img">
                                    <img class="review-img" src="http://placehold.jp/70x70.png" alt="">
                                </div>
                                <div class="detail-text">
                                    <p>名前</p>
                                    <p>来店日</p>
                                </div>
                            </div>
                            <div class="detail-bottom">
                                <div class="detail-star">
                                    <p>☆☆☆☆☆</p>       
                                </div>
                                <div class="detail-comment">
                                    <p>コメントコメントコメント</p>
                                </div>
                            </div>
                        </div>
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