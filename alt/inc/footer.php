
		
		<nav class="menu">
			<ul>
				<li><a href="../web_development/index.php">Web Development</a></li>
				<li><a href="#">About</a></li>
				<li><a href="../contact/index.php">Acting</a></li>
				<li><a href="#">Blogs</a></li>
			</ul>
		</nav>
		/div><!-- /contain -->

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
	<div class="footer <?php echo $page ?>">
		<div class="wrapper">
			<ul>
				<li><a href="https://twitter.com/davidrynn" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
				<li><a href="https://www.facebook.com/david.rynn.3" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
				<li><a href="https://www.linkedin.com/pub/david-rynn/2/54b/6b9" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
				<li><a href="https://www.github.com/davidrynn" target="_blank"><i class="fa fa-github-square"></i></a></li>
			</ul>
			<p>&copy;<?php echo date('Y'); ?> David Rynn</p>

		</div>

	</div>

	
