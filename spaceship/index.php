<?php 
	include('head.php');
?>
	<main>
		<div>
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
        <div id="overlay" onclick="off()">
            <iframe width="70%" height="70%" src="https://www.youtube.com/embed/niKUMz0wpUQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="rocket">
        <img src="images/spaceship.png" alt="Space Ship" id="spaceship" onclick="on()">
        </div>	
		<div class="grid">			
            <figure class="planet-images">
                    <img class="reveal-content" src="images/planet1.png" alt="Planet 1">
                    <figcaption><a href="detail.php?name=planet1">Planet 1</a></figcaption>
            </figure>
            <figure class="planet-images">
                    <img class="reveal-content" src="images/planet2.png" alt="Planet 2">
                    <figcaption><a href="detail.php?name=planet2">Planet 2</a></figcaption>
            </figure>
            <figure class="planet-images">
                    <img class="reveal-content" src="images/planet3.png" alt="Planet 3">
                    <figcaption><a href="detail.php?name=planet1">Planet 3</a></figcaption>
            </figure>
            <figure class="planet-images">
                    <img class="reveal-content" src="images/planet4.png" alt="Planet 4">
                    <figcaption><a href="detail.php?name=planet1">Planet 4</a></figcaption>
            </figure>
            <figure class="planet-images">
                    <img class="reveal-content" src="images/planet5.png" alt="Planet 5">
                    <figcaption><a href="detail.php?name=planet1">Planet 5</a></figcaption>
            </figure>
        </div>
        <?php 
                include('main-description.php');
        ?> 				
	</main>
	<?php 
		include('footer.php');
	?>