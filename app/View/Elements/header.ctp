
    	<h1 class="logo">
		
		<?php
echo $this->Html->link(
    $this->Html->image('surfing_logo.png', array('alt' => 'surfing_logo', 'height' => '65', 'width' => '283')),'#',array('escape'=> false));
	?>
	
	</h1>
	
		<!--<a href="#"><img src="img/surfing_logo.png" alt="surfing_logo" title="Surfing_logo" height="65" width="283"></a>-->
		
        <div class="joinus">
        <ul>
        	<li>
			
			<!--<a href="#">Join us on Facebook<br><span class="keepup">and keep up to date with all the news</span></a>-->
			
			<?php echo $this->Html->link('Join us on Facebook and keep up to date with all the news', '#', array('class' => 'keepup'));?>
			
			</li>
            <li>
			
			<!--<a href="#"><img class="facebookicon" src="img/facebook_icon.png" alt="facebook_icon"></a>-->
			
			<?php
echo $this->Html->link(
    $this->Html->image('facebook_icon.png', array('alt' => 'facebook', 'class' => 'facebookicon')),'#',array('escape'=> false));?>
	
			</li>
        </ul>
        </div>
    