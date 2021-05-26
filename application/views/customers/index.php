
<?php foreach ($customers as $customers_item): ?>

	<div class="main">
		<?php echo $customers_item['name'] . ' ' . $customers_item['surname'] . ' ' . $customers_item['middle_name']; ?>
	</div>

<?php endforeach; ?>

