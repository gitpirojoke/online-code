
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

		<h4><?php echo $customer_item['surname'] . ' ' . $customer_item['name'] . ' ' . $customer_item['middle_name'];?></h4>
		<p>Дата рождения:<br/>
			<?php echo date("d.m.Y",strtotime($customer_item['birth_date']));?>
		</p>

		<p>Адрес:<br/>
			<?php echo $customer_item['city'] . ', ' . $customer_item['street'] . ', ' . $customer_item['building'] . ', ' . $customer_item['apartment'];?>
		</p>Количество веников:<br/>
		<?php echo $customer_item['broom_counter'];?>

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
			hintContent: '<?php echo $customer_item['surname'] . ' ' . $customer_item['name'];?>'
		});
		myMap.geoObjects.add(marker);
	}
</script>
