<?php 
session_start();
$logcheck=0;
if(isset($_SESSION['user_id'])){
    $logcheck=1;
}
    // if(dirname(__FILE__)!=="/home/c9019967/public_html/subscriptionmarket.jp"){
    // header("HTTP/1.1 301 Moved Permanently");header("Location:https://subscriptionmarket.jp");
    // }
    
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>さぶイチ公式サイト|サブスクリプションマーケット</title>
        <meta name="description" content="さぶイチ公式サイト。さぶイチは、動画配信から特産品の取り寄せまで種々なサブスクリプションを紹介しています。また、サブスクリプションをまとめて整理するためのツールも用意しています。自分だけのサブすくカレンダーを作って、より快適にさぶイチを使いこなそう。">
        <link rel="icon" href={{secure_asset('subichi.ico')}}>
        <link rel="canonical" href="https://subscriptionmarket.jp/public">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="public/css/index.css">"
    </head>
    <body>
        <header class="head">
            <div class="top"></div>
            <div class="title">
                <div class="icon">
                    <h1>サブスクリプション市場</h1>
                    <h5 class="m-txt-ttl5">
                        <a href="index.php">
                            <img src="sub2.png" alt="サブイチロゴ">
                        </a>
                    </h5>
                </div>
                <div class="search">
                    <form action="sub1.php" method="post" class="search1">
                    <div class="search-wrapper">
                    <div class="input-holder">
                    <input type="search" class="input" placeholder="何をお探しですか？" >
                    <button class="search-icon"><span></span></button>
                    </div>
                    </div>
                    </form>
                    <div class="search2">
                        <div class="search3">
                            <div class="menu1"><img src="menu.png" alt="メニュー"></div>
                            <div class="menu2"><h2>カテゴリー<br><span>から探す</span></h2></div>
                        </div>
                        <div class="search3">
                            <div class="menu1"><img src="map.png" alt="地図"></div>
                            <div class="menu2 menu4"><h2>地域<span>から探す</span></h2></span></h2></div>
                        </div>
                        <div class="search3">
                            <div class="menu1"><img src="kago.png" alt="買い物かご"></div>
                            <div class="menu2 menu3"><h2>おすすめ</h2></div>
                        </div>
                        
                    </div>
                </div>
                <div class="log">
                    <?php if($logcheck===0):?>
                    <button type="button" class="buttonb" id="login">ログイン</button>
                    <button type="button" class="buttona" id="provisional">新規登録</button>
                    <?php else:?>
                    <button type="button" class="buttonb" id="mypage">マイページ</button>
                    <button type="button" class="buttona" id="logout">ログアウト</button>
                    <?php endif?>
                </div>
            </div>
        </header>
        <main>
            <div class="pre">
                <img src="sub321.png">
        </div>
        <div class="content">
            <h2>人気のカテゴリー</h2>
            <div class="cate">
                <div class="categ"><a href="#ondemand">動画配信</a></div>
                <div class="categ"><a href="#music">音楽配信</a></div>
                <div class="categ"><a href="#biyou">美容</a></div>
                <div class="categ"><a href="#food">食べ物</a></div>
                <div class="categ"><a href="#shopping">ショッピング</a></div>
                <div class="categ catea">・・・</div>
            </div>
        </div>
        <div class="main">
            <div class="contens" id="ondemand">
                <div class="tit">
                    <h2>動画配信</h2><form action="search.php" method="post"><button class="idis">すべて表示</button></form>
                </div>
                <div class="nai">
                <div class="hscroll_wrapper">
                    <span class="arrow left"></span>
                    <div class="nakami">
                        <div class="naka">
                            <div class="aa1">
                            <div class="cimg">
                                <img src="amazon.jpg" alt="Amazon">
                            </div>
                            <div class="detail">
                                <h2>Amazonプライムビデオ</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額550円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="unext.jpg" alt="u-next">
                            </div>
                            <div class="detail">
                                <h2>U-NEXT</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額1990円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="netflix.jpg" alt="netflix">
                            </div>
                            <div class="detail">
                                <h2>NETFLIX</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額990円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="hulu.jpg" alt="hulu">
                            </div>
                            <div class="detail">
                                <h2>Hulu</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額1026円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="danime.jpg" alt="danime">
                            </div>
                            <div class="detail">
                                <h2>dアニメストア</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額440円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="fod.jpg" alt="fod">
                            </div>
                            <div class="detail">
                                <h2>FODプレミアム</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額976円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="desney.jpg" alt="disney">
                            </div>
                            <div class="detail">
                                <h2>Disneyプラス</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額770円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                    <span class="arrow right"></span>
                </div>
                </div>
            </div>
            <div class="contens" id="music">
            <div class="tit">
                    <h2>音楽配信</h2><form action="search.php" method="post"><button class="idis">すべて表示</button></form>
                </div>
                <div class="nai">
                <div class="hscroll_wrapper">
                    <span class="arrow left"></span>
                    <div class="nakami">
                        <div class="naka">
                            <div class="aa1">
                            <div class="cimg">
                                <img src="amazon.jpg" alt="Amazon">
                            </div>
                            <div class="detail">
                                <h2>Amazonプライムビデオ</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額550円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="unext.jpg" alt="u-next">
                            </div>
                            <div class="detail">
                                <h2>U-NEXT</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額1990円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="netflix.jpg" alt="Amazon">
                            </div>
                            <div class="detail">
                                <h2>NETFLIX</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額990円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="amazon.jpg" alt="Amazon">
                            </div>
                            <div class="detail">
                                <h2>Amazonプライムビデオ</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額550円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="amazon.jpg" alt="Amazon">
                            </div>
                            <div class="detail">
                                <h2>Amazonプライムビデオ</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額550円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="amazon.jpg" alt="Amazon">
                            </div>
                            <div class="detail">
                                <h2>Amazonプライムビデオ</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額550円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="amazon.jpg" alt="Amazon">
                            </div>
                            <div class="detail">
                                <h2>Amazonプライムビデオ</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額550円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                    <span class="arrow right"></span>
                </div>
                </div>
            </div>
            <div class="contens" id="biyou">
            <div class="tit">
                    <h2>美容</h2><form action="search.php" method="post"><button class="idis">すべて表示</button></form>
                </div>
                <div class="nai">
                <div class="hscroll_wrapper">
                    <span class="arrow left"></span>
                    <div class="nakami">
                        <div class="naka">
                            <div class="aa1">
                            <div class="cimg">
                                <img src="amazon.jpg" alt="Amazon">
                            </div>
                            <div class="detail">
                                <h2>Amazonプライムビデオ</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額550円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="unext.jpg" alt="u-next">
                            </div>
                            <div class="detail">
                                <h2>U-NEXT</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額1990円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="netflix.jpg" alt="Amazon">
                            </div>
                            <div class="detail">
                                <h2>NETFLIX</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額990円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="amazon.jpg" alt="Amazon">
                            </div>
                            <div class="detail">
                                <h2>Amazonプライムビデオ</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額550円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="amazon.jpg" alt="Amazon">
                            </div>
                            <div class="detail">
                                <h2>Amazonプライムビデオ</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額550円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="amazon.jpg" alt="Amazon">
                            </div>
                            <div class="detail">
                                <h2>Amazonプライムビデオ</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額550円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="amazon.jpg" alt="Amazon">
                            </div>
                            <div class="detail">
                                <h2>Amazonプライムビデオ</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額550円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                    <span class="arrow right"></span>
                </div>
                </div>
            </div>
            <div class="contens" id="food">
            <div class="tit">
                    <h2>食べ物</h2><form action="search.php" method="post"><button class="idis">すべて表示</button></form>
                </div>
                <div class="nai">
                <div class="hscroll_wrapper">
                    <span class="arrow left"></span>
                    <div class="nakami">
                        <div class="naka">
                            <div class="aa1">
                            <div class="cimg">
                                <img src="amazon.jpg" alt="Amazon">
                            </div>
                            <div class="detail">
                                <h2>Amazonプライムビデオ</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額550円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="unext.jpg" alt="u-next">
                            </div>
                            <div class="detail">
                                <h2>U-NEXT</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額1990円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="netflix.jpg" alt="Amazon">
                            </div>
                            <div class="detail">
                                <h2>NETFLIX</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額990円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="amazon.jpg" alt="Amazon">
                            </div>
                            <div class="detail">
                                <h2>Amazonプライムビデオ</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額550円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="amazon.jpg" alt="Amazon">
                            </div>
                            <div class="detail">
                                <h2>Amazonプライムビデオ</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額550円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="amazon.jpg" alt="Amazon">
                            </div>
                            <div class="detail">
                                <h2>Amazonプライムビデオ</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額550円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="amazon.jpg" alt="Amazon">
                            </div>
                            <div class="detail">
                                <h2>Amazonプライムビデオ</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額550円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                    <span class="arrow right"></span>
                </div>
                </div>
            </div>
            <div class="contens" id="shopping">
            <div class="tit">
                    <h2>ショッピング</h2><form action="search.php" method="post"><button class="idis">すべて表示</button></form>
                </div>
                <div class="nai">
                <div class="hscroll_wrapper">
                    <span class="arrow left"></span>
                    <div class="nakami">
                        <div class="naka">
                            <div class="aa1">
                            <div class="cimg">
                                <img src="amazon.jpg" alt="Amazon">
                            </div>
                            <div class="detail">
                                <h2>Amazonプライムビデオ</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額550円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="unext.jpg" alt="u-next">
                            </div>
                            <div class="detail">
                                <h2>U-NEXT</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額1990円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="netflix.jpg" alt="Amazon">
                            </div>
                            <div class="detail">
                                <h2>NETFLIX</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額990円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="amazon.jpg" alt="Amazon">
                            </div>
                            <div class="detail">
                                <h2>Amazonプライムビデオ</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額550円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="amazon.jpg" alt="Amazon">
                            </div>
                            <div class="detail">
                                <h2>Amazonプライムビデオ</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額550円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="amazon.jpg" alt="Amazon">
                            </div>
                            <div class="detail">
                                <h2>Amazonプライムビデオ</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額550円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="naka">
                        <div class="aa1">
                            <div class="cimg">
                                <img src="amazon.jpg" alt="Amazon">
                            </div>
                            <div class="detail">
                                <h2>Amazonプライムビデオ</h2>
                                <div class="detail2">
                                    <div class="detail3">
                                        <p>価格もお手軽で人気の映画やドラマ、アニメが多数見られる。Amazonオリジナル映画は名作、良作、傑作ぞろい！
                                            アカデミー賞受賞作品などが続々配信中！</p>
                                    </div>
                                </div>
                                <div class="foot">
                                    <h3>月額550円～</h3>
                                    <button><h3 class="d1">詳細</h3></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                    <span class="arrow right"></span>
                </div>
                </div>
            </div>
        </div>
        </main>
        <footer>
        <div class = "conte">
            <a href = "#">さぶイチについて</a>
            <a href="#">ヘルプと各種情報</a>
            <a href="#">プライバシーと利用規約</a>
            <a href="#">お問い合わせ</a>
        </div>
        <div class = "photo">
            <img src = "sub3.png"  width = "300" height="100"  alt = "会社マーク">
        </div>
        <ul>
            <li><span>国</span></li>
            <li>日本</li>
        </ul>
        </footer>
        <script src="https://code.jquery.com/jquery.min.js"></script>
        <script>
            //ページ内リンクのずれをなおす
            $(function () {
            var headerHight = 100; 
            $('a[href^=#]').click(function(){
                var href= $(this).attr("href");
                var target = $(href == "#" || href == "" ? 'html' : href);
                    var position = target.offset().top-headerHight; 
                $("html, body").animate({scrollTop:position}, 550, "swing");
                    return false;
            });
            });
        
            /*横スクロール*/
            document.querySelectorAll('.left').forEach(elm => {
                elm.onclick = function () {
                    let div = this.parentNode.querySelector('.hscroll_wrapper div');
                    div.scrollLeft -= (div.clientWidth / 2);
                };
            });
            document.querySelectorAll('.right').forEach(elm => {
                elm.onclick = function () {
                    let div = this.parentNode.querySelector('.hscroll_wrapper div');
                    div.scrollLeft += (div.clientWidth / 2);
                };
            });
            /*ログイン前*/
            <?php if($logcheck==0):?>
            document.getElementById('provisional').addEventListener("click",()=>{
               window.location="https://subscriptionmarket.jp/user/provisional"; 
            });
            document.getElementById('login').addEventListener("click",()=>{
               window.location="https://subscriptionmarket.jp/user/login"; 
            });
            /*ログイン後*/
            <?php else:?>
            document.getElementById('mypage').addEventListener("click",()=>{
               window.location="https://subscriptionmarket.jp/user/provisional"; 
            });
            document.getElementById('logout').addEventListener("click",()=>{
               window.location="https://subscriptionmarket.jp/user/logout"; 
            });
            <?php endif?>
        </script>
        
    </body>
</html>