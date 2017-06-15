<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>PHP Default App - Mobingi</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/styles.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
    </head>
    <body>
    <script type="text/javascript">
        var userLang = navigator.language || navigator.userLanguage;
        if(userLang == 'en'){
            window.location.href = "index.php";
        }
    </script>

    <article>
        <div class="container-fluid">
            <div class="row">
                <section>
                    <div class="col-sm-6 content1">

                        <h1>おめでとうございます！</h1>
                        <p>あなたのMobingi PHP アプリケーションは現在あなた専用の環境で動作しています。</p>
                        <p><?php echo ' PHP version: ' . phpversion(); ?> で動いています。</p>

                    </div>
                </section>

                <section>
                    <div class="col-sm-6 content2">
                        <h2><i class="fa fa-files-o" aria-hidden="true"></i>What's Next?</h2>
                        <ul>
                            <li><a href="https://docs.mobingi.com/official/getting-started/jp" target="_blank">Mobingi ドキュメント</a></li>
                        </ul>

                        <h2><i class="fa fa-cogs" aria-hidden="true"></i>チュートリアル</h2>
                        <ul>
                            <li><a href="https://docs.mobingi.com/official/tutorials/jp/ssh_into_your_server" target="_blank">サーバーにSSHでログインする</a></li>
                            <li><a href="https://docs.mobingi.com/official/tutorials/jp/custom_installation_script" target="_blank">カスタムスクリプトを記述する<small>(mobingi-install.sh)</small></a></li>
                            <li><a href="http://yoshidashingo.hatenablog.com/entry/2016/01/06/200919" target="_blank">moCloudでProcfileを使ってNode.jsアプリを動かす</a></li>
                            <li><a href="https://medium.com/@waylandzhang/deploy-your-first-php-application-on-mobingi-in-5-minutes-9207ad417b21#.a6jtlo7gh" target="_blank">Deploy your first PHP application on Mobingi Cloud in 5 minutes [英語]</a></li>
                        </ul>

                        <h2><i class="fa fa-life-ring" aria-hidden="true"></i>カスタマーサービス</h2>
                        <ul>
                            <li><a href="https://docs.mobingi.com/official/support/jp" target="_blank">サポートページ</a></li>
                        </ul>
                        <br />

                        <h2><i class="fa fa-external-link" aria-hidden="true"></i>リンク</h2>
                        <ul>
                            <li><a href="https://mobingi.co.jp/" target="_blank">mobingi.com</a></li>
                        </ul>

                    </div>
                </section>
            </div>
        </div>
    </article>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
