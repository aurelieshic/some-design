<?=$this->inside("layout/layout-html")?>
<?

$nbRub=7;

?>


<?/*----------big photo--------------*/?>

<div class="top-full-screen">
    <div class="big-image">
	<img src="<?=  Site::$root."/media/test-img/big-G0A34001.png"?>"/>
    </div>
</div>


<?/*----------after screen--------------*/?>

<div class="after-top-full-screen">
    <div class="container">





	<div class="row">
	    
	    <?=$this->render("product/main-infos")?>
	    
	    <?/*----------content menu--------------*/?>
	    
	    <div class="span3">
		<div class="" data-ui-fixed="true" data-ui-top="10" data-ui-bottom="10">
		    <div class="row">
			<div class="span3">
			    <ul class="tab-menu">
				<?for($i=0;$i<$nbRub;$i++):?>
				    <li class="tab-button span3" data-section-target="section-<?=$i?>">
					<a href="#" class="in"> Menu <?=$i?> </a>
					<div class="bg"></div>
				    </li>
				<?endfor?>

			    </ul>
			</div>
		    </div>

		</div>
		&nbsp;
	    </div>
	    
	    
	    <?/*------------content-----------*/?>
	    
	    
	    <div class="span9">
		
		<?for($i=0;$i<$nbRub;$i++):?>
		<?=$this->render("product/content",array("id"=>$i))?>
		<?endfor?>
		
	    </div>
	    
	    
	    
	</div>
    </div> <!-- /after top -->
    
		
		
    <?=$this->render("layout/footer")?>
    
    
</div> 