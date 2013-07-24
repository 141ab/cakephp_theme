<!--<!DOCTYPE HTML>-->
<?php echo $this->Html->docType('html5'); ?>
<html lang="en">
    <head>
        <title><?php echo Configure::read('sitetitle'); ?></title>
        <?php echo $this->Html->css(array('http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,400italic,600italic,700,700italic,800,800italic', 'reset', 'demo', 'calendar', 'custom_2', 'style')); ?>
        <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,400italic,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>-->
        <!--<link href="css/reset.css" rel="stylesheet" type="text/css">
        <!------   Slider CSS START ------>
        <!--<link href="css/demo.css" rel="stylesheet" type="text/css">-->
        <!------   Clander CSS START ------>
        <!--<link rel="stylesheet" type="text/css" href="css/calendar.css" />
        <link rel="stylesheet" type="text/css" href="css/custom_2.css" />
        --> <!------   Main CSS START ------>
        <!--<link href="css/style.css" rel="stylesheet" type="text/css">-->

        <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

<!--<script src="js/jquery-latest.min.js" type="text/javascript"></script>
<script src="js/modernizr-latest.js" type="text/javascript"></script>-->


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <!------   Slide Java script ------>

        <?php echo $this->Html->script(array('slides.min.jquery', 'demofunction', 'modernizr.custom.63321', 'jquery.calendario', 'data')); ?>

        <!--<script src="js/slides.min.jquery.js"></script>
    <script src="js/demofunction.js"></script>-->
        <!------   Calander Java script START ------>
        <!--<script src="js/modernizr.custom.63321.js"></script>-->
            <!--<script type="text/javascript" src="js/jquery.calendario.js"></script>-->
                    <!--<script type="text/javascript" src="js/data.js"></script>-->
        <script type="text/javascript">	
            $(function() {
			
                var transEndEventNames = {
                    'WebkitTransition' : 'webkitTransitionEnd',
                    'MozTransition' : 'transitionend',
                    'OTransition' : 'oTransitionEnd',
                    'msTransition' : 'MSTransitionEnd',
                    'transition' : 'transitionend'
                },
                transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
                $wrapper = $( '#custom-inner' ),
                $calendar = $( '#calendar' ),
                cal = $calendar.calendario( {
                    onDayClick : function( $el, $contentEl, dateProperties ) {

                        if( $contentEl.length > 0 ) {
                            showEvents( $contentEl, dateProperties );
                        }

                    },
                    caldata : codropsEvents,
                    displayWeekAbbr : true
                } ),
                $month = $( '#custom-month' ).html( cal.getMonthName() ),
                $year = $( '#custom-year' ).html( cal.getYear() );

                $( '#custom-next' ).on( 'click', function() {
                    cal.gotoNextMonth( updateMonthYear );
                } );
                $( '#custom-prev' ).on( 'click', function() {
                    cal.gotoPreviousMonth( updateMonthYear );
                } );

                function updateMonthYear() {				
                    $month.html( cal.getMonthName() );
                    $year.html( cal.getYear() );
                }

                // just an example..
                function showEvents( $contentEl, dateProperties ) {

                    hideEvents();
					
                    var $events = $( '<div id="custom-content-reveal" class="custom-content-reveal"><h4>Events for ' + dateProperties.monthname + ' ' + dateProperties.day + ', ' + dateProperties.year + '</h4></div>' ),
                    $close = $( '<span class="custom-content-close"></span>' ).on( 'click', hideEvents );

                    $events.append( $contentEl.html() , $close ).insertAfter( $wrapper );
					
                    setTimeout( function() {
                        $events.css( 'top', '0%' );
                    }, 25 );

                }
                function hideEvents() {

                    var $events = $( '#custom-content-reveal' );
                    if( $events.length > 0 ) {
						
                        $events.css( 'top', '100%' );
                        Modernizr.csstransitions ? $events.on( transEndEventName, function() { $( this ).remove(); } ) : $events.remove();

                    }

                }
			
            });
        </script> <!------   Calander Java script END  ------>

    </head>

    <body>
        <div id="wrapper">
            <!-- start html block -->
            <header>
                <?php echo $this->element('header'); ?>
            </header>

            <nav>
                <?php echo $this->element('menu_bar'); ?> 
            </nav>
            <section class="banner">
                <div id="slides">
                    <?php echo $this->element('slides'); ?>
                </div>
            </section>

            <section class="content">

                <!-- post 1 -->
                <article class="post">
                    <?php echo $this->element('post'); ?>   
                </article>
                <!-- end post 1 -->

                <!-- post 1 -->
                <article class="post">
                    <div class="post-inner">
                        <?php echo $this->element('latest-news'); ?>
                        <?php echo $this->element('chempion-news'); ?>
                        <?php echo $this->element('clendar-news'); ?>
                    </div>
                </article>
                <!-- end post 1 -->

            </section>
            <?php echo $this->element('footer'); ?>

            <!-- end html block -->

        </div>
    </body>


</html>
