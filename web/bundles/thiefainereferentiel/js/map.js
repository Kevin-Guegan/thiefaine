	
	//Variables globales
	var maCarte;
	var monCercle;
	var cptCercle=0;
	var mapColor='#428BCA';
	var mesCercle=[];

	var url = document.URL;
   	url = url.substring(0,url.indexOf("/zone",0));

	/**
	 *	Initialisation de la map google
	 */
	function initialisation(){

		var lat = 48.113391315998626;
		var lng = -1.6743850708007812;
		var zoom = 12;

		var latSub = $('#thiefaine_referentielbundle_zone_latitude');
		var lngSub = $('#thiefaine_referentielbundle_zone_longitude');
		var zoomSub = $('#thiefaine_referentielbundle_zone_zoom');
		var typeSub = $('#thiefaine_referentielbundle_zone_type');

		if(latSub.val())
			lat = latSub.val();
		if(lngSub.val())
			lng = lngSub.val();
		if(zoomSub.val())
			zoom = parseInt(zoomSub.val());

		var centreCarte = new google.maps.LatLng(lat, lng);
		var optionsCarte = {
			zoom: zoom,
			center: centreCarte,
			disableDefaultUI: true
		}

		maCarte = new google.maps.Map(document.getElementById("MaCarteGoogle"), optionsCarte);

		google.maps.event.addListener(maCarte, 'dragend', function() {
			latSub.val(maCarte.getCenter().lat());
			lngSub.val(maCarte.getCenter().lng());
		});

		google.maps.event.addListener(maCarte, 'zoom_changed', function() {
			zoomSub.val(maCarte.getZoom());
		});

		latSub.val(maCarte.getCenter().lat());
		lngSub.val(maCarte.getCenter().lng());
		zoomSub.val(maCarte.getZoom());
		typeSub.val(maCarte.getMapTypeId());

		for(i = 0; i < $('#mesPoints tr').length; i++){
			
			var elem = $('#mesPoints tr').eq(i);
			var id = parseInt(elem.children('.idpoint').html());
			var lat = elem.children('.latitudepoint').html();
			var lng = elem.children('.longitudepoint').html();
			var rad = parseInt(elem.children('.radiuspoint').html());

			NewPoint(id, lat, lng, rad);
		}
	}// end of initialisation

	/**
	 * Permet l'affichage d'un nouveau point pour une zone
	 *
	 * @param id integer 		id du point
	 * @param lat integer 		latitude du point
	 * @param lng integer 		longitude du point
	 * @param rad integer 		radius du point
	 */
	function NewPoint(id, lat, lng, rad){

		var optionsCercle = {
			map: maCarte,
			center: maCarte.getCenter(),
			radius: rad,
			strokeColor: mapColor,
		    strokeOpacity: 1,
		    strokeWeight: 1,
		    fillColor: mapColor,
		    fillOpacity: 0.3,
			draggable: true
		}

		//Création du cercle sur la map
		monCercle = new google.maps.Circle(optionsCercle);
		if(lat && lng){
			var latnlng = new google.maps.LatLng(lat,lng);
			var mapProp = {
			  center:latnlng
			}
			monCercle.setOptions(mapProp);
		}

		//Création du champ de saisie
		$("#MesCercleGoogle table").append('<tr class="cercleGMap" data-cercle="'+id+'"></tr>');
		$('.cercleGMap[data-cercle='+id+']').append("<td>Cercle n°"+(cptCercle+1)+"</td>");
		$('.cercleGMap[data-cercle='+id+']').append("<td class='input-group'></td>");
		$('.cercleGMap[data-cercle='+id+'] .input-group').append("<input style='width: 100px;' type='text' data-cercle='"+id+"' class='cercleRadius pull-right form-control' value='"+rad+"' />");
		$('.cercleGMap[data-cercle='+id+'] .input-group').append('<span class="input-group-btn"><button data-cercle="'+id+'" class="btn btn-default supprCercle" type="button">x</button></span>');

		//Stockage du cercle dans le tableau
		mesCercle[id] = monCercle;
		mesCercle[id].idpoint = id;

		//Initialisation pour le déplacement du cercle
		google.maps.event.addListener(mesCercle[id], 'dragend', function() {
			for(var i=0; i<mesCercle.length; i++){
				if(mesCercle[i])
				{
					if (this.__gm_id == mesCercle[i].__gm_id)
					{
						var idpoint = i;
					    var lat = mesCercle[i].getCenter().lat();
					    var lng = mesCercle[i].getCenter().lng();
					    var rad = mesCercle[i].getRadius();
					    ModifyPoint(idpoint, lat, lng, rad);
					}
				}
			}
		});

		//Initialisation de la modification du rayon d'un point
		$(".cercleRadius[data-cercle="+id+"]").on("change keydown keyup", function(){
		    mesCercle[$(this).data("cercle")].setRadius(parseInt($(this).val()));
		});

		//Initialisation pour le focus/défocus de cercle (champ submit)
		$(".cercleRadius[data-cercle="+id+"]")
			.focus(function() {
				mesCercle[$(this).data("cercle")].setOptions({
					fillColor: "#FF0000",
					strokeColor: "#FF0000"
				})
			})
			.focusout(function(){
				mesCercle[$(this).data("cercle")].setOptions({
					fillColor: mapColor,
					strokeColor: mapColor
				});

				var idpoint = $(this).data("cercle");
			    var lat = mesCercle[$(this).data("cercle")].getCenter().lat();
			    var lng = mesCercle[$(this).data("cercle")].getCenter().lng();
			    var rad = mesCercle[$(this).data("cercle")].getRadius();
			    ModifyPoint(idpoint, lat, lng, rad);
			})

		//Initialisation de la suppression d'un point
		$(".supprCercle[data-cercle="+id+"]").click(function(){
		    mesCercle[$(this).data("cercle")].setRadius(0);			    
		    $("#MesCercleGoogle table .cercleGMap[data-cercle="+$(this).data("cercle")+"]").remove();
		    
		    delete mesCercle[$(this).data("cercle")];
		    DeletPoint($(this).data("cercle"));
		});

		cptCercle ++;
	
	}// end of NewPoint	

	/**
	 * Permet la création d'un nouveau point pour une zone
	 *
	 * @param idzone integer 	id de la zone
	 * @param lat integer 		latitude de la zone
	 * @param lng integer 		longitude de la zone
	 * @param rad integer 		radius de la zone
	 */
	function CreatPoint(idzone, lat, lng, rad){
		var addr = url + "/point/new/"+ idzone +"/"+lat+"/"+lng+"/"+rad;

		$.ajax({
			url: addr,
			type: "POST",
			cache: false,
			timeout: 5000,
			xhrFields: {
			 withCredentials : true
			},success: function(response){
				NewPoint(response, "", "", rad);				

			},error: function(response) {
               	console.log('CreatPoint : GET process error ');
               	console.log(response);
            }
		});

	}//end of CreatPoint

	/**
	 * Permet la suppression d'un point pour une zone
	 *
	 * @param idpoint integer 	id du point
	 */
	function DeletPoint(idpoint){

		var addr = url + "/point/"+idpoint+"/delete";

		$.ajax({
			url: addr,
			type: "POST",
			cache: false,
			timeout: 5000,
			xhrFields: {
			 withCredentials : true
			},success: function(response){
				console.log('DeletPoint : ok ');
			},error: function(response) {
               	console.log('DeletPoint : GET process error ');
               	console.log(response);
            }
		});

	}// end of DeletPoint

	/**
	 * Permet la modification d'un point pour une zone
	 *
	 * @param idpoint integer 	id du point
	 * @param lat integer 		latitude du point
	 * @param lng integer 		longitude du point
	 * @param rad integer 		radius du point
	 */
	function ModifyPoint(idpoint, lat, lng, rad){
		var addr = url + "/point/"+idpoint+"/"+lat+"/"+lng+"/"+rad+"/update";

		$.ajax({
			url: addr,
			type: "POST",
			cache: false,
			timeout: 5000,
			xhrFields: {
			 withCredentials : true
			},success: function(response){
				console.log('ModifyPoint : ok ');
			},error: function(response) {
               	console.log('ModifyPoint : GET process error ');
               	console.log(response);
            }
		});

	}//end of ModifyPoint

	/**
	 * Une fois que le document est chargé
	 */
	$(document).ready(function(){

		//Initialisation de la google carte
		google.maps.event.addDomListener(window, 'load', initialisation);

		//Initialisation de l'ajout un point
		$('#zoneRadiusBtn').click(function(){
			if(!$('#zoneRadius').val()){
				alert('Veuillez indiquer un rayon pour la zone');
				return false;
			}

			CreatPoint($(".content.zone").data('zone'), maCarte.getCenter().lat(), maCarte.getCenter().lng(), parseInt($('#zoneRadius').val()));
		});

	});