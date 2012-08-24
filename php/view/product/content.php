<?

$generator = new LoremIpsumGenerator;
//100 words in html format
$txt=$generator->getContent(rand(100,400),'plain');

$title=$generator->getContent(rand(1,4), "plain", false);
//100 words without any formatting
//$generator->getContent(100, 'plain');
//100 words with 'text' formatting
//$generator->getContent(100, 'txt');
?>

	

<div class="pb1 " data-section="section-<?=$id?>" >
    <h3  class="section-title"><?=$title?></h3>
    <div class="row">
	<div class="span9">
	    <p class="mt1">
		<?=$txt?>
	    </p>
	</div>
    </div>
</div>
