<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title('｜', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <!-- Bootstrap -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body data-spy="scroll" data-target="#na" data-offset="30">
      <div id="na">
          <nav class="navar navbar-default navbar-fixed-top">
              <div class="navbar-header" style="float:right;">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			    </button>
              </div>
              <a class="navbar-brand" href="#home">リラクル延岡店</a>
              <div class="collapse navbar-collapse" id="nav">
                  <ul class="nav navbar-nav">
                      <li><a href="#home">ホーム</a></li>
                      <li><a href="#course">コースと料金</a></li>
                      <li><a href="#su">スタッフ紹介</a></li>
                      <li><a href="#yoy">予約</a></li>
                      <li><a href="#ac">場所</a></li>
                  </ul>
              </div>
          </nav>
      </div>
      <div class="container-fluid">
      　　<div class="main" id="home">
              <div class="mainue">
                  <h1 style="padding-top:50px;">リラクルは全国に<br>５００店舗以上も展開するもみほぐしチェーン店です。<br>安心してお気軽にご来店ください。</h1>
              </div>
          　　<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000">

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php bloginfo('template_url' ); ?>/img/rira.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="<?php bloginfo('template_url' ); ?>/img/slid.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
  </div>
</div>
              <div class="mainsita">
                  <h1>疲れたあなたのからだに、ご褒美を。</h1>
                  <p>こんな人に<br>＊肩こりが辛い。　＊腰が重い　＊座りっぱなしの仕事の方　＊力仕事の方　＊とにかく疲れている方　</p>
              </div>
          </div>
          <div id="course">
            <h2>コースと料金</h2>
            <div class="momi">
              <h3>もみほぐしコース</h3>
              <div class="row">
              <div class="col-sm-5 col-md-4"><div class="fig"><img src="<?php bloginfo('template_url' ); ?>/img/first_course.jpg" alt=""><h4>ベッドにうつ伏せになってもらい、施術を行います。全身疲れている、ここを重点的にして欲しいなど、ご要望があれば、できる限りお受けします。</h4></div></div>
              <div class="col-sm-7 col-md-8">
              <table border="1">
                <tr>
                  <th>15分</th><th>30分</th><th>45分</th><th>60分</th><th>75分</th>
                </tr>
                <tr>
                  <td>970円</td><td>1,720円</td><td>2,480円</td><td>3,210円</td><td>3,880円</td>
                </tr>
                <tr>
                  <th>90分</th><th>105分</th><th>120分</th><th>150分</th><th>180分</th>
                </tr>
                <tr>
                  <td>4,750円</td><td>5,500円</td><td>6,370円</td><td>8,100円</td><td>9,820円</td>
                </tr>
              </table>
              </div>
              </div>
            </div>  
            <div class="momi">
              <h3>足つぼコース</h3>
              <div class="row">
              <div class="col-sm-5 col-md-4"><div class="fig"><img src="<?php bloginfo('template_url' ); ?>/img/second_course.jpg" alt=""><h4>ベッドにうつ伏せになってもらい、施術を行います。全身疲れている、ここを重点的にして欲しいなど、ご要望があれば、できる限りお受けします。</h4></div></div>
              <div class="col-sm-7 col-md-8">
              <table border="1">
                <tr>
                  <th>30分</th><th>45分</th><th>60分</th><th>75分</th><th>90分</th>
                </tr>
                <tr>
                  <td>2,260円</td><td>3,020円</td><td>3,670円</td><td>4,530円</td><td>5,500円</td>
                </tr>
                <tr>
                  <th>105分</th><th>120分</th><th>150分</th><th>180分</th>
                </tr>
                <tr>
                  <td>6,370円</td><td>7,340円</td><td>9,070円</td><td>10,690円</td>
                </tr>
              </table><p>（価格は税込み価格です。）</p>
              </div>
              </div>
            </div>
            <div class="momi">
              <h3>ほぐし＆足つぼコース</h3>
              <div class="row">
              <div class="col-sm-5 col-md-4"><div class="fig"><img src="<?php bloginfo('template_url' ); ?>/img/second_course.jpg" alt=""><h4>ベッドにうつ伏せになってもらい、施術を行います。全身疲れている、ここを重点的にして欲しいなど、ご要望があれば、できる限りお受けします。</h4></div></div>
              <div class="col-sm-7 col-md-8">
              <table border="1">
                <tr>
                  <th>45分</th><th>60分</th><th>75分</th><th>90分</th>
                </tr>
                <tr>
                  <td>2,800円</td><td>3,450円</td><td>4,210円</td><td>5,070円</td>
                </tr>
                <tr>
                  <th>105分</th><th>120分</th><th>150分</th><th>180分</th>
                </tr>
                <tr>
                  <td>5,940円</td><td>6,800円</td><td>8,530円</td><td>10,260円</td>
                </tr>
              </table><p>(価格は税込み価格です。)</p>
              </div>
              </div>
            </div>
            <div class="momi">
              <h3>ヘッド＆ハンドコース</h3>
              <div class="row">
              <div class="col-sm-5 col-md-4"><div class="fig"><img src="<?php bloginfo('template_url' ); ?>/img/second_course.jpg" alt=""><h4>ベッドにうつ伏せになってもらい、施術を行います。全身疲れている、ここを重点的にして欲しいなど、ご要望があれば、できる限りお受けします。</h4></div></div>
              <div class="col-sm-7 col-md-8">
              <table border="1">
                <tr>
                  <th>75分</th><th>90分</th>
                </tr>
                <tr>
                  <td>4,210円</td><td>5,070円</td>
                </tr>
              </table><p>価格は税込み価格です。</p>
              </div>
              </div>
            </div> 
          </div>
          <div id="su">
            <h2>スタッフ紹介</h2>
            <ul class="nav nav-tabs st" style="padding-right:90px; position:relative; margin-bottom:20px; border-bottom:0;">
	　　　　　　　<li class="active"><a href="#su1" data-toggle="tab"><img src="<?php bloginfo('template_url' ); ?>/img/a.jpg"></a></li>
	　　　　　　　<li><a href="#su2" data-toggle="tab"><img src="<?php bloginfo('template_url' ); ?>/img/d.jpg"></a></li>
	　　　　　　　<li><a href="#su3" data-toggle="tab"><img src="<?php bloginfo('template_url' ); ?>/img/c.jpg"></a></li>
	　　　　　　　<li><a href="#su4" data-toggle="tab"><img src="<?php bloginfo('template_url' ); ?>/img/b.jpg"></a></li>
	　　　　　　　<li><a href="#su5" data-toggle="tab"><img src="<?php bloginfo('template_url' ); ?>/img/f.jpg"></a></li>
	　　　　　　　<li><a href="#su6" data-toggle="tab"><img src="<?php bloginfo('template_url' ); ?>/img/e.jpg"></a></li>
            </ul>
            <div class="tab-content">
	            <div class="tab-pane active" id="su1">
	              <div class="row">
	                <div class="col-xs-10 col-sm-4 col-sm-offset-2">
	                  <img src="<?php bloginfo('template_url' ); ?>/img/a.jpg" style="width:100%; border-radius:100px;">
	                </div>
	                <div class="col-xs-10 col-sm-4">
	                  <h3>田中</h3>
	                  <p>こんにちは。普段はおっちょこっちょいで、よく笑われます。趣味は居所寝、好きな食べ物は生春巻きです。丁寧な施術を心がけています。</p>
	                  <hr>
                    <div class="am">休み</div><div class="am">火曜日</div><br>
                    <div class="am">時間</div><div class="am">12:00~18:00</div>
                    <br><div class="am">指名料金</div><div class="am">200えん</div>
	                </div>
	              </div>
            	</div>
	            <div class="tab-pane" id="su2">
	              <div class="row">
	                <div class="col-xs-10 col-sm-4 col-sm-offset-2">
	                  <img src="<?php bloginfo('template_url' ); ?>/img/first_course.jpg" style="width:100%;">
	                </div>
	                <div class="col-xs-10 col-sm-4">
	                  <h3>こだま</h3>
	                  <p>こんにちは。普段はおっちょこっちょいで、よく笑われます。趣味は居所寝、好きな食べ物は生春巻きです。丁寧な施術を心がけています。</p>
	                  <div class="am">休み</div><div class="am">火曜日</div><br>
                    <div class="am">時間</div><div class="am">12:00~18:00</div>
                    <br><div class="am">指名料金</div><div class="am">200えん</div>
	                </div>
	              </div>
            	</div>
	            <div class="tab-pane" id="su3">
	              <div class="row">
	                <div class="col-xs-10 col-sm-4 col-sm-offset-2">
	                  <img src="<?php bloginfo('template_url' ); ?>/img/first_course.jpg" style="width:100%;">
	                </div>
	                <div class="col-xs-10 col-sm-4">
	                  <h3>盛岡</h3>
	                  <p>こんにちは。普段はおっちょこっちょいで、よく笑われます。趣味は居所寝、好きな食べ物は生春巻きです。丁寧な施術を心がけています。</p>
	                  <div class="am">休み</div><div class="am">火曜日</div><br>
                    <div class="am">時間</div><div class="am">12:00~18:00</div>
                    <br><div class="am">指名料金</div><div class="am">200えん</div>
	                </div>
	              </div>
            	</div>
	            <div class="tab-pane" id="su4">aa
            	</div>
	            <div class="tab-pane" id="su5">
	              <div class="row">
	                <div class="col-xs-10 col-sm-4 col-sm-offset-2">
	                  <img src="<?php bloginfo('template_url' ); ?>/img/first_course.jpg" style="width:100%;">
	                </div>
	                <div class="col-xs-10 col-sm-4">
	                  <h2>アミ</h2>
	                  <p>こんにちは。普段はおっちょこっちょいで、よく笑われます。趣味は居所寝、好きな食べ物は生春巻きです。丁寧な施術を心がけています。</p>
	                  <dl class="dl-horizontal">
	                    <dt>休み</dt><dd>火曜日</dd><dt>時間</dt><dd>12:00~18:00</dd><dt>指名料金</dt><dd>200円</dd>
	                  </dl>
	                </div>
	              </div>
            	</div>
	            <div class="tab-pane" id="su6">
	              <div class="row">
	                <div class="col-xs-10 col-sm-4 col-sm-offset-2">
	                  <img src="<?php bloginfo('template_url' ); ?>/img/first_course.jpg" style="width:100%;">
	                </div>
	                <div class="col-xs-10 col-sm-4">
	                  <h2>アミ</h2>
	                  <p>こんにちは。普段はおっちょこっちょいで、よく笑われます。趣味は居所寝、好きな食べ物は生春巻きです。丁寧な施術を心がけています。</p>
	                  <dl class="dl-horizontal">
	                    <dt>休み</dt><dd>火曜日</dd><dt>時間</dt><dd>12:00~18:00</dd><dt>指名料金</dt><dd>200円</dd>
	                  </dl>
	                </div>
	              </div>
            	</div>
            </div>	
          </div>
          <div id="yoy">
            <h2>予約</h2>
            <div class="y" style="margin-left:10%;">
              <h3>電話で予約する<br><span class="glyphicon glyphicon-arrow-down"></span><br><small><span class="glyphicon glyphicon-phone-alt"></span></small>0982-26-0005</h3>
            </div>
            <div class="y">
              <h3>ネットで予約する<br><span class="glyphicon glyphicon-arrow-down"></span><br><a href="<?php echo home_url(); ?>/yoya">こちらをクリック</a></h3>
            </div>
          </div>
          <div class="sc">
          <div id="ac">
            <h2>場所</h2>
            <h3><span class="glyphicon glyphicon-map-marker"></span>宮崎県延岡市昭和町４ー４３３５<br><br><span class="glyphicon glyphicon-phone-alt"></span>0982-26-0005</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d214964.29906745823!2d131.5171711037148!3d32.664309040381895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35471e20dd68b5bf%3A0x54a75f44f4ab4678!2z5a6u5bSO55yM5bu25bKh5biC!5e0!3m2!1sja!2sjp!4v1480043588280" width="100%" height="300" frameborder="0" style="border:0; -webkit-filter:grayscale(80%);" allowfullscreen></iframe>
        <div class="foot"><h5>2016yamatokoakito-allrightsreserved</h5></div>
      </div></div>
      </div>
  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url' ); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url' ); ?>/js/bootstrap.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>  