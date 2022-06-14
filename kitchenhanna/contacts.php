<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contacts</title>
	
	
<?php include("header.php"); ?>	

<div class="page-contacts">

<section class="page-heading lazyload" data-bg="assets/img/bg-page-heading.jpg">
	<div class="container">
		<h1>Contacts</h1>
	</div>
</section>

<section class="block-contacts office-active">
	<div class="container">
		<div class="contacts-inner">
			<div class="contacts-tabs">
				<div class="contacts-tab contacts-tab-office">Office</div>
				<div class="contacts-tab contacts-tab-fabric">Factory</div>
			</div>
			<div class="contacts-body contacts-body-office">
				<div class="contacts-title">
					<figure class="lazyload" data-bg="assets/img/img-contacts1.jpg"></figure>
					<p>Our office <br>in USA</p>
				</div>
				<p class="title">address</p>
				<p class="text">11101 W 120th Ave #400, Broomfield</p>
				<p class="title">Phone</p>
				<p class="text"><a href="tel:+13034394200">+1 303-439-4200</a></p>
				<p class="title">Email</p>
				<p class="text"><a href="mailto:order@kitchenhanna.com">order@kitchenhanna.com</a></p>
			</div>
			<div class="contacts-body contacts-body-fabric">
				<div class="contacts-title">
					<figure class="lazyload" data-bg="assets/img/img-contacts2.jpg"></figure>
					<p>Factory <br>in USA</p>
				</div>
				<p class="title">address</p>
				<p class="text">15892 St Paul St, Thornton</p>
			</div>
		</div>
	</div>
	<div id="map1" class="map map-office"></div>
	<div id="map2" class="map map-fabric"></div>
</section>

</div>

<script src="//api-maps.yandex.ru/2.1/?load=package.standard&lang=ru_RU&coordorder=longlat"></script>
<script>
ymaps.ready(function() {

	var map = new ymaps.Map('map1', {
		center: [(39.9155164), (-105.124709)],
		zoom: 17,
		behaviors: ['default'],
		controls: ['zoomControl'],
	});
	var getPointOptions = function() {
		return {
			preset: 'islands#blueIcon'
		};
	};
	var getPointStyle_office = function() {
		var point = {
			iconLayout: 'default#image',
			iconImageHref: 'assets/img/icon-placemark.svg',
			iconImageSize: [60, 75],
			iconImageOffset: [0, 0],
		}
		return point;
	};
	var points = {
		office: [
			{coordinates: [39.9155164, -105.124709]},
		],
	};
	points.office.forEach(function(item, i) {
		var placemark = new ymaps.Placemark(item.coordinates, {}, getPointStyle_office());
		map.geoObjects.add(placemark);
	});

	map.controls.remove('zoomControl');
	map.behaviors.disable('scrollZoom');
	map.behaviors.disable('multiTouch');
	map.behaviors.disable('drag');
	var zoomControl = new ymaps.control.ZoomControl({
		options: {
			size: 'small',
			visible: true,
			position: {
				top: 50,
				left: 10,
			},
		}
	});

})

ymaps.ready(function() {

	var map = new ymaps.Map('map2', {
		center: [(39.9846217), (-104.9546805)],
		zoom: 17,
		behaviors: ['default'],
		controls: ['zoomControl'],
	});
	var getPointOptions = function() {
		return {
			preset: 'islands#blueIcon'
		};
	};
	var getPointStyle_office = function() {
		var point = {
			iconLayout: 'default#image',
			iconImageHref: 'assets/img/icon-placemark.svg',
			iconImageSize: [60, 75],
			iconImageOffset: [0, 0],
		}
		return point;
	};
	var points = {
		office: [
			{coordinates: [39.9846217, -104.9546805]},
		],
	};
	points.office.forEach(function(item, i) {
		var placemark = new ymaps.Placemark(item.coordinates, {}, getPointStyle_office());
		map.geoObjects.add(placemark);
	});

	map.controls.remove('zoomControl');
	map.behaviors.disable('scrollZoom');
	map.behaviors.disable('multiTouch');
	map.behaviors.disable('drag');
	var zoomControl = new ymaps.control.ZoomControl({
		options: {
			size: 'small',
			visible: true,
			position: {
				top: 50,
				left: 10,
			},
		}
	});

})

</script>

<?php include("footer.php"); ?>