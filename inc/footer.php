				<button class="trigger hvr-pulse">
		
					<svg width="100%" height="100%" viewBox="0 0 60 60" preserveAspectRation="none">
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
	
	</div><!-- /intro -->


<div class="menu-wrap">
		<nav class="menu">
			<ul>
				<?php 

					$links = array("home" => "Home", "web_development" => "Coding", "acting" => "Other Stuff", "contact" => "Contact");
					foreach ($links as $key => $link){
					if ($link == "Home" && $pageTitle != "Home") { ?>

				<li><a href="<?php echo BASE_URL; ?>">Home</a></li>
						
					<?php		} elseif ($link != $pageTitle) {
						echo '<li><a href="' . BASE_URL . $key . '">' . $link . '</a></li>';
					} }?> 
		

			</ul>

		</nav>



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
</div>
	</div><!-- /contain -->
<script src="<?php echo BASE_URL ?>js/classie.js"></script>
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



 
    })();
</script>
