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
  <body>
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
                      <li><a href="<?php echo home_url(); ?>/#home">ホーム</a></li>
                      <li><a href="<?php echo home_url(); ?>/#course">コースと料金</a></li>
                      <li><a href="<?php echo home_url(); ?>/#su">スタッフ紹介</a></li>
                      <li class="active"><a href="#yoy">予約</a></li>
                      <li><a href="<?php echo home_url(); ?>/#ac">場所</a></li>
                  </ul>
              </div>
          </nav>
      </div>
    <div class="container" style="max-width:800px;">
      <h1>予約ページ</h1><br>
      <p>
        <?php while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
      </p>
    </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url' ); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url' ); ?>/js/bootstrap.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>  