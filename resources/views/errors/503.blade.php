<!DOCTYPE html>
<html>
  <head>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Troovami - Vehículos</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('contador/Theme/assets/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('contador/Theme/assets/css/soon.css') }}" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  </head>
  <!-- START BODY -->
  <body class="nomobile">

    <!-- START HEADER -->
    <section id="header">
        <div class="container">
        
            <header data-animated="GoIn">
                <!-- HEADLINE -->
                <img src="{{ asset('autostars/images/trovami-logo-beta.png') }}">
                <h1>pronto estaremos en línea</h1>
                  
                 <h4><b>Síguenos en <i class="fa fa-twitter"></i> 
                      <a href="https://twitter.com/troovami" target="_blank" style="color: #FFF">@troovami</a>
                      y en <i class="fa fa-facebook-official"></i> 
                      <a href="https://www.facebook.com/Troovami-1566517207012420/" target="_blank" style="color: #FFF">facebook.com/troovami</a></b>
                  </h4>
            </header>

            <!-- START TIMER -->
            <div id="timer" data-animated="FadeIn">
                <p id="message"></p>
                <div id="days" class="timer_box"></div>
                <div id="hours" class="timer_box"></div>
                <div id="minutes" class="timer_box"></div>
                <div id="seconds" class="timer_box"></div>
            </div>
            <!-- END TIMER -->



        </div>
        <!-- LAYER OVER THE SLIDER TO MAKE THE WHITE TEXTE READABLE -->
        <div id="layer"></div>
        <!-- END LAYER -->
        <!-- START SLIDER -->
        <div id="slider" class="rev_slider">
            <ul>
              <li data-transition="slideleft" data-slotamount="1" data-thumb="{{ asset('autostars/images/slide3_.jpg') }}">
                <img src="{{ asset('autostars/images/slide3_.jpg') }}" style="width: 100%" height="auto">
              </li>
              <li data-transition="slideleft" data-slotamount="1" data-thumb="{{ asset('autostars/images/Mitsubishi-MU-2.jpg') }}">
                <img src="{{ asset('autostars/images/Mitsubishi-MU-2.jpg') }}" style="width: 100%">
              </li>
              <li data-transition="slideleft" data-slotamount="1" data-thumb="{{ asset('autostars/images/lanchas.jpg') }}">
                <img src="{{ asset('autostars/images/lanchas.jpg') }}" style="width: 100%">
              </li>
              <li data-transition="slideleft" data-slotamount="1" data-thumb="{{ asset('autostars/images/descargar-imagenes-de-motos.jpg') }}">
                <img src="{{ asset('autostars/images/descargar-imagenes-de-motos.jpg') }}" style="width: 100%">
              </li>
            </ul>
        </div>
        <div class="lead" id="clock"></div>
        <!-- END SLIDER -->
    </section>
    <!-- END HEADER -->


  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="//cdn.rawgit.com/hilios/jQuery.countdown/2.1.0/dist/jquery.countdown.min.js"></script>
    
  <script type="text/javascript">
  // Turn on Bootstrap
  $('[data-toggle="tooltip"]').tooltip();

  // 15 days from now!
  function get15dayFromNow() {

    //return new Date(new Date().valueOf() + 1 * 24 * 60 * 60 * 1000);
    return new Date(new Date('Oct 31 2016, 10:55:02').valueOf());//la fecha y la hora debo ponerla igual en el crontab
  }

  var $days = $('#days');

  $days.countdown(get15dayFromNow(), function(event) {
    //$(this).html(event.strftime('%D'));
    $(this).html('<h1>'+event.strftime('%D')+'</h1><p>Día'+(event.strftime('%D')>1?'s':''),'</p>');
  
  });  
  
  var $hours = $('#hours');

  $hours.countdown(get15dayFromNow(), function(event) {
    //$(this).html(event.strftime('%H'));
    $(this).html('<h1>'+event.strftime('%H')+'</h1><p>Hora'+(event.strftime('%H')>1?'s':''),'</p>');
    
  });

  var $minutes = $('#minutes');

  $minutes.countdown(get15dayFromNow(), function(event) {
    //$(this).html(event.strftime('%M'));
    $(this).html('<h1>'+event.strftime('%M')+'</h1><p>Minuto'+(event.strftime('%M')>1?'s':''),'</p>');
    
  });
  
  var $seconds = $('#seconds');

  $seconds.countdown(get15dayFromNow(), function(event) {
    //$(this).html(event.strftime('%S'));
    $(this).html('<h1>'+event.strftime('%S')+'</h1><p>Segundo'+(event.strftime('%S')>1?'s':''),'</p>');
    
  });
  
  var $clock = $('#clock');

  $clock.countdown(get15dayFromNow(), function(event) {
    $(this).html(event.strftime('%D días %H:%M:%S'));
    
    var $this = $(this);
    if (event.elapsed) {
      window.location.assign("http://vehiculos-troovami.got/")
      //alert('fin')
    }   
    
  });  

  /*
  $('#btn-reset').click(function() {
    $clock.countdown(get15dayFromNow());
  });

  $('#btn-pause').click(function() {
    $clock.countdown('pause');
  });

  $('#btn-resume').click(function() {
    $clock.countdown('resume');
  });
*/
 </script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-3435172-4', 'hilios.github.io');
ga('send', 'google.com');
</script> 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('contador/Theme/assets/js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('contador/Theme/assets/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('contador/Theme/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('contador/Theme/assets/js/soon/plugins.js') }}"></script>
    <script src="{{ asset('contador/Theme/assets/js/soon/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('contador/Theme/assets/js/soon/custom.js') }}"></script>
    
  </body>
  <!-- END BODY -->
</html>