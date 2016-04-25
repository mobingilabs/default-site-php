<!DOCTYPE html>
<html lang="utf-8">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>PHP Default App - Mobingi</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

  <!-- Custom CSS -->
  <link href="css/styles.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>

      <article>
        <div class="container-fluid">
          <div class="row">
            <section>
              <div class="col-sm-6 content1">

                <h1>おめでとうございます！</h1>
                <p>moCloudアプリケーションは現在あなた専用の環境で動作しています。</p>
                <p><?php echo ' PHP version: ' . phpversion(); ?> で動いています。</p>

              </div>
            </section>

            <section>
              <div class="col-sm-6 content2">




                <h2><i class="fa fa-files-o" aria-hidden="true"></i>
                  What's Next?</h2>
                  <ul>
                    <li><a href="http://mocloud.io/documentation_jp/overview/features" target="_blank">moCloud ドキュメント</a></li>
                    <li><a href="http://docs.mobingi.com/jp/overview/features" target="_blank">Mobingi For Enterprise ドキュメント</a></li>
                  </ul>


                  <h2><i class="fa fa-cogs" aria-hidden="true"></i>
                  </i>
                  チュートリアル</h2>
                  <ul>
                    <li><a href="http://yoshidashingo.hatenablog.com/entry/2016/01/06/200919" target="_blank">moCloudでProcfileを使ってNode.jsアプリを動かす </a></li>
                    <li><a href="https://medium.com/@waylandzhang/deploy-your-first-php-application-on-mobingi-in-5-minutes-9207ad417b21#.a6jtlo7gh" target="_blank">Deploy your first PHP application on Mobingi Cloud in 5 minutes [英語]</a></li>

                  </ul>



                  <h2><i class="fa fa-life-ring" aria-hidden="true"></i>
                    カスタマーサービス</h2>
                    <ul>
                      <li><a href="https://mocloud.io/documentation_jp/support/email" target="_blank">サポートメール</a></li>
                    </ul>


                    <h2><i class="fa fa-external-link" aria-hidden="true"></i>
                      リンク</h2>
                      <ul>
                        <li><a href="https://mobingi.co.jp/" target="_blank">mobingi.com</a></li>
                        <li><a href="https://mocloud.io/jp/" target="_blank">moCloud.io</a></li>

                      </ul>



                    </div>

                  </section>
                </div>
              </article>

              <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
              <!-- Include all compiled plugins (below), or include individual files as needed -->
              <script src="js/bootstrap.min.js"></script>
            </body>
            </html>