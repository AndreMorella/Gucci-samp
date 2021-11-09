<?php
include 'website.config.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

  <?php echo' <title>'.$conf['Гучи Самп'].' - Добро пожаловать</title> '; ?>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/samp.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">

	<script type='text/javascript' src='http://samp-rating.ru/web/api-<?php echo $conf['samprating_id']; ?>.js'></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	#serverload {
      margin: 30px;
    width: 330px;
    height: 136px;
}</style>

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top"><?php echo $conf['server_name']; ?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#play">Начать игру</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#servers">Мониторинг</a>
                    </li>
					 <li class="page-scroll">
                        <a href="#about">О сервере</a>
                    </li>
         
					<li class="page-scroll">
                        <a href="<?php echo $conf['forum_url']; ?>">Форум сервера</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
        
                    <div class="intro-text">
                        <span class="name"><?php echo $conf['server_name']; ?></span>
                 
                        <span class="skills"><?php echo $conf['server_slogan']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
 <!-- Contact Section -->
    <section id="play">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Начать игру</h2>
                  
                </div>
            </div>
            <div class="row">
        
				  <div class="installation_content">
					<div class="installation_content_item">
						<div class="installation_content_pic1"></div>
						<h3>GTA San Andreas</h3>
						<p>Чистая игра без модификаций</p>
						<a class="btn btn-info" href="http://samp-rating.ru/download/gta_sa_clear.torrent" rel="nofollow">Скачать GTA SA</a>
					</div>
				  </div>
				  <div class="installation_content_item">
						<div class="installation_content_pic2"></div>
						<h3>клиент SA-MP</h3>
						<p>Последняя версия клиента <script type='text/javascript'>document.write(api.version);</script></p>
						<a class="btn btn-success" href="http://samp-rating.ru/download/SAMP_Last_version.exe" rel="nofollow">Скачать SA-MP</a>
				  </div>
				 
				  <div class="clearfix"></div>
				   <br />
				   <br />
				   <center>
				   <div class="page-scroll">
						<a class="btn btn-lg btn-outline" href="#servers">Подключиться к серверу</a></center>
					</div>
						
            </div>
        </div>
    </section><div style="padding-top:400px"></div>
    <!-- Play Grid Section -->
    <section id="servers">
        <div class="container">
           

            <div class="row">
				<center>
				<div id="serverload"> </div>
				<h1>Сейчас играет <font style='color: orange;'><script type='text/javascript'>document.write(api.players);</script></font> из <font style='color: orange;'><script type='text/javascript'>document.write(api.maxplayers);</script></font> игроков</h1>
				<h3><script type='text/javascript'>document.write(api.ip + ':' + api.port);</script></h3>
				<h4><script type='text/javascript'>
				if ( api.status == 1 ) 
				{
					document.write("<font style='color: green;'>Сервер онлайн</font><br /><a href='samp://"+api.ip + ':' + api.port+"' class='btn btn-lg btn-outline'>Подключиться через браузер</a>");
				} 
				else 
				{
					document.write("<font style='color: red;'>Сервер оффлайн</font><br />");
				}
				</script>
				</h4>
				</center>
	
            </div>
        </div>
    </section><div style="padding-top:400px"></div>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>О сервере</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                    <p><?php echo $conf['server_name']; ?> - <?php echo $conf['server_description']; ?> </p>
                
            </div>
        </div>
    </section><div style="padding-top:100px"></div>


    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Мы ВКонтакте</h3>
                       <center> <p><script type="text/javascript" src="//vk.com/js/api/openapi.js?125"></script>

<!-- VK Widget -->
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {redesign: 1, mode: 3, width: "280", height: "300", color1: 'F3E9E9', color2: '2A1F1F', color3: '05254B'}, <?php echo $conf['vkgroup_id'];?>);
</script></p></center>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Голосуйте за нас</h3>
						 <br />
                        <ul class="list-inline">
                           
                            <li>
                             <a style="color: #ebd900;" href="http://samp-rating.ru/server/<?php echo $conf['samprating_id']; ?>"> <span class="btn-social btn-outline"><script type='text/javascript'>document.write(api.votes);</script> </span><span style="font-size:25px"> голосов</span></a>
                            </li>
                           
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Информация</h3>
                      <iframe src="http://samp-rating.ru/web/block/<?php echo $conf['samprating_id']; ?>/?style=1" frameborder="0" width="280" height="300" scrolling="no"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; <?php echo $conf['server_name']; ?> 2016<br />
						Дизайн разработан студией <a href="http://samp-rating.ru">SAMP Rating</a> специально для <?php echo $conf['server_name']; ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
 

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/1.0.0/dist/progressbar.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/samp.min.js"></script>
	<script type="text/javascript">

var bar = new ProgressBar.SemiCircle(serverload, {
  strokeWidth: 15,
  color: '#1fc9fb',
  trailColor: '#1fc9fb',
  trailWidth: 1,
  easing: 'easeInOut',
  duration: 7000,
  svgStyle: null,
  text: {
    value: '',
    alignToBottom: false
  },
  from: {color: '#1fc9fb'},
  to: {color: '#ff6600'},
  // Set default step function for all animate calls
  step: (state, bar) => {
    bar.path.setAttribute('stroke', state.color);
    var value = Math.round(bar.value() * 100);
    if (value === 0) {
      bar.setText('');
    } else {
      bar.setText('<small>Загружен на</small><b> '+value+'%</b>');
    }

    bar.text.style.color = state.color;
  }
});
bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
bar.text.style.fontSize = '2.1rem';
var players = api.players;
var maxplayers = api.maxplayers;
var percent = Number(players) / Number(maxplayers);
	bar.animate(percent);  // Number from 0.0 to 1.0
</script>

</body>

</html>
