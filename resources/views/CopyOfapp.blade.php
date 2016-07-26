
    @include('cabezaA')

        @if(Route::current()->getName() == 'home')

<!--
            <div class="hero-area">
                Start Hero Slider
                <div class="hero-slider heroflex flexslider clearfix" data-autoplay="yes" data-pagination="no" data-arrows="yes" data-style="fade" data-speed="7000" data-pause="yes">
                    <ul class="slides">
                        <li class="parallax" style="background-image:url({{ asset('autostars/images/slide2.jpg') }});"></li>
                        
                        <li class="parallax" style="background-image:url({{ asset('autostars/images/slide3_.jpg') }});"></li>
                        <li class="parallax" style="background-image:url({{ asset('autostars/images/slide4_.jpg') }});"></li>
                         
                    </ul>
                </div>
                End Hero Slider
            </div>
-->


            <div class="page-header parallax" style="background-image:url({{ asset('autostars/images/slide3_.jpg') }});">
                <div class="container">
        
                    <h1 class="page-title"><!--<Sell your car--></h1>
                  </div>
            </div>
           
            
<br>

        @elseif(Route::current()->getName() == 'nosotros')

            <div class="page-header parallax" style="background-image:url({{ asset('autostars/images/page_header4.jpg') }});">
                <div class="container">
                    <h1 class="page-title"><!--<Sell your car--></h1>
                </div>
            </div>

       @elseif(Route::current()->getName() == 'publicar')

            <div class="page-header parallax" style="background-image:url({{ asset('autostars/images/header_dealer.jpg') }});">
                <div class="container">
                    <h1 class="page-title"><!--<Sell your car--></h1>
                </div>
            </div>

        @else

            <div class="page-header parallax" style="background-image:url({{ asset('autostars/images/page_header3.jpg') }});">
                <div class="container">
                    <h1 class="page-title"><!--<Sell your car--></h1>
                </div>
            </div>

        @endif

   @include('cabezaB')