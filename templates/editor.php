<?php
script('editortexto', array('script','jquery-3.3.1','editor'));
style('editortexto', 'style');
?>

<div id="app">
	<div id="app-navigation">
		<?php print_unescaped($this->inc('navigation/indice')); ?>
		<?php print_unescaped($this->inc('settings/indice')); ?>
	</div>

	<div id="app-content">
		<div id="app-content-wrapper">
			<?php print_unescaped($this->inc('content/top'));?>
			<?php print_unescaped($this->inc('content/bottom'));?>

		</div>
	</div>
</div>
