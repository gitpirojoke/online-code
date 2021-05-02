
<?php foreach ($customers as $customers_item): ?>

	<div class="main">
		<?php echo $customers_item['name']; ?>
	</div>

	<div class="main">
		<?php echo $customers_item['surname']; ?>
	</div>

	<div class="main">
		<?php echo $customers_item['middle_name']; ?>
	</div>



<?php endforeach; ?>

