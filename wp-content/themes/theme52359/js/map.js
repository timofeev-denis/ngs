    var contentString =	'<h5>Офис в Тюмени:</h5>' +
						'625019, г. Тюмень, <br>ул. Республики, д. 211, офис 403а.<br>' + 
						'тел/факс: (3452) 27-36-22<br>' + 
						'тел: (909) 183-99-00';
    var locations = [
      ['<h5>Офис в Тюмени:</h5>' +
		'625019, г. Тюмень, <br>ул. Республики, д. 211, офис 403а.<br>' + 
		'тел/факс: (3452) 27-36-22<br>' + 
		'тел: (909) 183-99-00', 57.123114, 65.606274, 4],
      ['<h5>Склад в Москве</h5>' + 
		'МО, Одинцовский р-н, пгт Новоивановское,<br>ул. Калинина, д. 1, стр. 4.<br>' + 
		'телефон: +7 (495) 921-40-67<br>', 55.708115, 37.371443, 5],
      ['Офис в Самаре', 53.198829, 50.258198, 3],
      ['<h5>Офис в Москве</h5>' +
		'105512, г. Москва,<br>ул.9-я Парковая, д.60<br>' + 
		'телефон: +7 (495) 921-40-67<br>' + 
		'факс: +7 (495) 921-40-67', 55.804415, 37.800793, 2]
    ];

    var map = new google.maps.Map(document.getElementById('offices'), {
      zoom: 4,
      center: new google.maps.LatLng(56.92, 50.25),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }