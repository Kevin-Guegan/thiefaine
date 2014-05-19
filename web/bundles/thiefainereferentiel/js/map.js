	var maCarte;
	var monCercle;
	var cptCercle=0;
	var mapColor='#428BCA';
	var mesCercle=[];
	/*var mesPoints=[];*/

	var re = new RegExp("/zone/*/");

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
	}

	function circle(radius){
		var optionsCercle = {
			map: maCarte,
			center: maCarte.getCenter(),
			radius: radius,
			strokeColor: mapColor,
		    strokeOpacity: 1,
		    strokeWeight: 1,
		    fillColor: mapColor,
		    fillOpacity: 0.3,
			draggable: true
		}

		monCercle = new google.maps.Circle(optionsCercle);
	}

	$(document).ready(function(){

		//Initialisation de l'ajout un point
		$('#zoneRadiusBtn').click(function(){
			if(!$('#zoneRadius').val()){
				alert('Veuillez indiquer un rayon pour la zone');
				return false;
			}

			circle(parseInt($('#zoneRadius').val()));
			CreatPoint($(".content.zone").data('zone'), monCercle.getCenter().lat(), monCercle.getCenter().lng(), monCercle.getRadius());
		});
		
	});

	google.maps.event.addDomListener(window, 'load', initialisation);

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

				$("#MesCercleGoogle table").append('<tr class="cercleGMap" data-cercle="'+response+'"></tr>');
				$('.cercleGMap[data-cercle='+response+']').append("<td>Cercle n°"+cptCercle+"</td>");
				$('.cercleGMap[data-cercle='+response+']').append("<td class='input-group'></td>");
				$('.cercleGMap[data-cercle='+response+'] .input-group').append("<input style='width: 100px;' type='text' data-cercle='"+response+"' class='cercleRadius pull-right form-control' value="+$('#zoneRadius').val()+" />");
				$('.cercleGMap[data-cercle='+response+'] .input-group').append('<span class="input-group-btn"><button data-cercle="'+response+'" class="btn btn-default supprCercle" type="button">x</button></span>');

				mesCercle[response] = monCercle;
				mesCercle[response].idpoint = response;
				/*mesPoints[response] = monCercle.getCenter().lat() + ";";
				mesPoints[response] += monCercle.getCenter().lng() + ";";
				mesPoints[response] += monCercle.getRadius();*/

				//Si on déplace le cercle
				google.maps.event.addListener(mesCercle[response], 'dragend', function() {
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
								/*mesPoints[i] = mesCercle[i].getCenter().lat() + ";";
								mesPoints[i] += mesCercle[i].getCenter().lng() + ";";
								mesPoints[i] += mesCercle[i].getRadius();*/
							}
						}
					}
				});

				//Initialisation de la modification du rayon d'un point
				$(".cercleRadius[data-cercle="+response+"]").on("change keydown keyup", function(){
				    mesCercle[$(this).data("cercle")].setRadius(parseInt($(this).val()));

				    var idpoint = $(this).data("cercle");
				    var lat = mesCercle[$(this).data("cercle")].getCenter().lat();
				    var lng = mesCercle[$(this).data("cercle")].getCenter().lng();
				    var rad = mesCercle[$(this).data("cercle")].getRadius();
				    ModifyPoint(idpoint, lat, lng, rad);

				    /*mesPoints[$(this).data("cercle")] = mesCercle[$(this).data("cercle")].getCenter().lat() + ";";
					mesPoints[$(this).data("cercle")] += mesCercle[$(this).data("cercle")].getCenter().lng() + ";";
					mesPoints[$(this).data("cercle")] += mesCercle[$(this).data("cercle")].getRadius();*/
				});

				//Si on focus le cercle (champ submit)
				$(".cercleRadius[data-cercle="+response+"]")
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
						})
					})

				//Inatialisation de la suppression d'un point
				$(".supprCercle[data-cercle="+response+"]").click(function(){
				    mesCercle[$(this).data("cercle")].setRadius(0);			    
				    $("#MesCercleGoogle table .cercleGMap[data-cercle="+$(this).data("cercle")+"]").remove();
				    
				    /*delete mesPoints[$(this).data("cercle")];*/
				    delete mesCercle[$(this).data("cercle")];

				    DeletPoint($(this).data("cercle"));
				});

				cptCercle ++;

			},error: function(response) {
               	console.log('CreatPoint : GET process error ');
               	console.log(response);
            }
		});

	}//end of CreatPoint

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
	}