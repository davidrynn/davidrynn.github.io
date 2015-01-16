<?php 
require_once('inc/config.php');
$pageTitle = "David Rynn - Home";
$page = "home";
include(ROOT_PATH . 'inc/header.php');
 ?>

 <div id="contain" class="contain">

 	<div class="intro">
 		 	<h1>David Rynn</h1>
		<div class="intro__content">    
			<h2 class="intro__title">Web Developer & More...</h2>

			<div class="intro__subtitle">
						<div class="codrops-links">
						</div>
						<div class="intro__description">

						</div>

				<button class="trigger hvr-pulse">
		
					<svg width="100%" height="100%" viewBox="0 0 60 60" preserveAspectRation="none">
<!-- 						<g class="icon icon--grid">
							<rect x="32.5" y="5.5" width="22" height="22"/>
							<rect x="4.5" y="5.5" width="22" height="22"/>
							<rect x="32.5" y="33.5" width="22" height="22"/>
							<rect x="4.5" y="33.5" width="22" height="22"/>
						</g> -->
						<g class="icon icon--grid">
							<circle class="outer" cx="29" cy="30" r="28" />
							<circle cx="29" cy="30" r="20" />
						</g> 
						<g class="icon icon--cross">
							<line x1="4.5" y1="55.5" x2="54.953" y2="5.046"/>
							<line x1="54.953" y1="55.5" x2="4.5" y2="5.047"/>
						</g>
					</svg>
					<span>View content</span>
				</button><!-- /trigger -->
			</div><!-- /subtitle -->
		</div><!-- /intro__content -->
	</div><!-- /intro -->
	<section class="items-wrap">
		    <a href="#" class="item">
					<img class="item__image" src="../img/wordatic.gif" alt="item01"/>
					<h2 class="item__title">Wordatic</h2>
			</a>
			<a href="#" class="item">
					<img class="item__image" src="../img/semRater.gif" alt="item02"/>
					<h2 class="item__title">Seminar Rater</h2>
			</a>
	</section><!-- /items wrap -->

</div><!-- /contain -->

<script src="js/classie.js"></script>
<script>
    (function() {
 
        var container = document.getElementById( 'contain' ),
        trigger = container.querySelector( 'button.trigger' );
 
        function toggleContent() {
            if( classie.has( container, 'contain--open' ) ) {
                classie.remove( container, 'contain--open' );
                classie.remove( trigger, 'trigger--active' );
                window.addEventListener( 'scroll', noscroll );
            }
            else {
                classie.add( container, 'contain--open' );
                classie.add( trigger, 'trigger--active' );
                window.removeEventListener( 'scroll', noscroll );
            }
        }
 
        function noscroll() {
            window.scrollTo( 0, 0 );
        }
 
        // reset scrolling position
        document.body.scrollTop = document.documentElement.scrollTop = 0;
 
        // disable scrolling
        window.addEventListener( 'scroll', noscroll );
 
        trigger.addEventListener( 'click', toggleContent );


				// For Demo purposes only (prevent jump on click)
				[].slice.call( document.querySelectorAll('.items-wrap a') ).forEach( function(el) { el.onclick = function() { return false; } } );

 
    })();
</script>
<?php  include(ROOT_PATH . 'inc/footer.php'); ?>
</body>
</html>