<div class="surfing-club">
        <h1 class="post-title"><?php echo $this->html->link('Welcome to surfing club' ,'#')?></h1>
        <p class="postimg"><?php
echo $this->Html->link(
    $this->Html->image('wecome_surf.jpg', array('alt' => 'surfing-club','title'=>'img-1')),'#',array('escape'=> false));
	?></p>
        <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua <span class="more"><?php echo $this->html->link('[+more]','#')?></span></p>
        </div> 
        <div class="about-club">
        <h1 class="post-title"><?php echo $this->html->link('About Us','#')?></h1>
        <p class="postimg"><?php
echo $this->Html->link(
    $this->Html->image('about_surf.jpg', array('alt' => 'surfing-club','title'=>'img-1')),'#',array('escape'=> false));
	?></p>     <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua <span class="more"><?php echo $this->html->link('[+more]','#')?></span></p>
        </div>
        <div class="events-club">
        <h1 class="post-title"><?php echo $this->html->link('Our Events','#')?></h1>
        <p class="postimg"><?php
echo $this->Html->link(
    $this->Html->image('events_surf.jpg', array('alt' => 'surfing-club','title'=>'img-1')),'#',array('escape'=> false));
	?></p>     <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua <span class="more"><?php echo $this->html->link('[+more]','#')?></span></p>
        </div>