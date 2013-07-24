       <div class="slides_container">
	   <?php
echo $this->Html->link(
    $this->Html->image('slider_1.jpg', array('alt' => 'Slide 1', 'height' => '340', 'width' => '996','title'=>'banner-1','target'=>'_blank')),'#',array('escape'=> false));
	?>
    <?php
echo $this->Html->link(
    $this->Html->image('slider_1.jpg', array('alt' => 'Slide 2', 'height' => '340', 'width' => '996','title'=>'banner-2','target'=>'_blank')),'#',array('escape'=> false));
	?>
    <?php
echo $this->Html->link(
    $this->Html->image('slider_1.jpg', array('alt' => 'Slide 3', 'height' => '340', 'width' => '996','title'=>'banner-3','target'=>'_blank')),'#',array('escape'=> false));
	?>
        </div>
		<?php
echo $this->Html->link(
    $this->Html->image('arrow-prev.png', array('alt' => 'Arrow Prev', 'height' => '43', 'width' => '24','class'=>'prev')),'#',array('escape'=> false));
	?>
    <?php
echo $this->Html->link(
    $this->Html->image('arrow-next.png', array('alt' => 'Arrow Next', 'height' => '43', 'width' => '24','class'=>'next')),'#',array('escape'=> false));
	?>
    