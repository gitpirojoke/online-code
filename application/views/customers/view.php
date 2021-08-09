
<h1><?php echo $title ?></h1>
<?php
//
//echo $customer_item['name'] . ' ' . $customer_item['surname'] . ' ' . $customer_item['middle_name']; ?>

<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-right">
			<p><a class="btn btn-success" href="<?php echo base_url('customers/edit/'.$customer_item['id']) ?>"> Редактировать</a></p>
		</div>
	</div>
</div>

<div class="row">
	<div class="col">
		<?php foreach ($customer_item as $value): ?>

			<p><?php echo $value ;?></p>

		<?php endforeach; ?>
	</div>
	<div class="col" id="map" style="width: 400px;height: 400px">

	</div>

</div>


<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

<script type="text/javascript">
	ymaps.ready(init);
	function init(){
		var myMap = new ymaps.Map("map", {
			center: [56.039017, 92.894853],
			zoom: 16
		});

		var marker = new ymaps.Placemark([56.039017, 92.894853], {
			hintContent: 'Расположение',
			balloonContent: 'Это наша организация'
		});
		myMap.geoObjects.add(marker);
	}
</script>
