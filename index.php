<?php
    require('head.php');
?>
		<main>
			<!-- Star Animation -->
			<div id="star-animation">
				<div id="rotate1"></div>
				<div id="rotate2"></div>
				<div id="rotate3"></div>
				<div class="particle">
					<div></div> 
				</div>
				<div class="particle">
					<div></div> 
				</div>
				<div class="particle">
					<div></div> 
				</div>
				<div class="particle">
					<div></div> 
				</div>
				<div class="particle">
					<div></div> 
				</div>
				<div class="particle">
					<div></div> 
				</div>
				<div class="particle">
					<div></div> 
				</div>
				<div class="particle">
					<div></div> 
				</div>
				<div class="particle">
					<div></div> 
				</div>
				<div class="particle">
					<div></div> 
				</div>
				<div class="particle">
					<div></div> 
				</div>
				<div class="particle">
					<div></div> 
				</div>
				<div class="particle">
					<div></div> 
				</div>
			</div> 
			<!-- End Star Animation --> 
			<div id="overlay" onclick="off()">
            	<video controls>
            		<source src="videos/overview.mp4" type="video/mp4">
            	</video>
        	</div>
			<!-- Space Ship -->
			<div class="rocket">
				<a href="#">
		       		<img src="main-images/rocket_ship.png" alt="Space Ship" id="spaceship" onclick="on()">
					<p onclick="on()">Click Us!</p>
		        </a>
        	</div>
			 
			<section class="classes-wrapper">
				<a href="detail.php?class=rich&name=Rich Media"><div class="rich-planet"><span>Planet Rich</span></div></a>
				<a href="detail.php?class=visual&name=Visual Communications"><div class="vis-planet"><span>Planet Visual</span></div></a>
				<a href="detail.php?class=web&name=Web Communications"><div class="web-planet"><span>Planet Web</span></div></a>
				<a href="detail.php?class=business&name=Business of New Media"><div class="bus-planet"><span>Planet Business</span></div></a>
				<a href="detail.php?class=production&name=Production Company"><div class="pro-planet"><span>Planet Production</span></div></a>
			</section>
			<section>
			<?php 
				require('main-description.php');
			?>
			</section>
		</main>
<?php 
    require('footer.php');
?>