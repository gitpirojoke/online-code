<h2><?php echo $title; ?></h2>

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

	<div class="main">
		<?php echo $customers_item['street']; ?>
	</div>

	<div class="main">
		<?php echo $customers_item['building']; ?>
	</div>


<?php endforeach; ?>

