	var maCarte;
	var monCercle;
	var cptCercle=0;
	var mesCercle=[];

	/**
	 *	Initialisation de la map google
	 */
	function initialisation(){

		var lat = 48.113391315998626;
		var lng = -1.6743850708007812;

		var centreCarte = new google.maps.LatLng(lat, lng);
		var optionsCarte = {
			zoom: 12,
			center: centreCarte,
			disableDefaultUI: true
		}

		maCarte = new google.maps.Map(document.getElementById("MaCarteGoogle"), optionsCarte);
	}

	function circle(radius){
		var optionsCercle = {
			map: maCarte,
			center: maCarte.getCenter(),
			radius: radius,
			strokeColor: '#428BCA',
		    strokeOpacity: 1,
		    strokeWeight: 1,
		    fillColor: '#428BCA',
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

			$("#MesCercleGoogle table").append('<tr class="cercleGMap" data-cercle="'+cptCercle+'"></tr>');
			$('.cercleGMap[data-cercle='+cptCercle+']').append("<td>Cercle n°"+cptCercle+"</td>");
			$('.cercleGMap[data-cercle='+cptCercle+']').append("<td class='input-group'></td>");
			$('.cercleGMap[data-cercle='+cptCercle+'] .input-group').append("<input style='width: 100px;' type='text' data-cercle='"+cptCercle+"' class='cercleRadius pull-right form-control' value="+$('#zoneRadius').val()+" />");
			$('.cercleGMap[data-cercle='+cptCercle+'] .input-group').append('<span class="input-group-btn"><button data-cercle="'+cptCercle+'" class="btn btn-default supprCercle" type="button">x</button></span>');

			circle(parseInt($('#zoneRadius').val()));
			mesCercle[cptCercle] = monCercle;

			//Initialisation de la modifiction du rayon d'un point
			$(".cercleRadius[data-cercle="+cptCercle+"]").on("change keydown keyup", function(){
			    mesCercle[$(this).data("cercle")].setRadius(parseInt($(this).val()));
			});

			//Inatialisation de la suppression d'un point
			$(".supprCercle[data-cercle="+cptCercle+"]").click(function(){
			    mesCercle[$(this).data("cercle")].setRadius(0);			    
			    $("#MesCercleGoogle table .cercleGMap[data-cercle="+$(this).data("cercle")+"]").remove();
			    delete mesCercle[$(this).data("cercle")];
			});

			cptCercle ++;
		});
	});
		
	google.maps.event.addDomListener(window, 'load', initialisation)