
	function getFile(){
	   $(".imgLink").click();
	}

	function sub(obj){
	    var file = obj.value;
	    $('.imgLink').val(file);
	    event.preventDefault();
	}

	$(document).ready(function(){

		$('.modifyElement').click(function(event){
			event.preventDefault();

			$('#myModalLabel').html("Modification de : "+$(this).parent().data('element'));
			element=$(this).parent().data('element');
			element=element.substring(0,element.indexOf("n°"));

			var texte = ""
			switch(element){
				case "Utilisateur " :
					/*texte = '<p><label for="userNom" class="control-label">Nom</label><input type="text" class="form-control" id="userNom" value="Nom" required></p><p><label for="userPrenom" class="control-label">Prénom</label><input type="text" class="form-control" id="userPrenom" value="Prénom" required></p><p><label for="userGroupe" class="control-label">Groupe</label><select class="form-control" id="userGroupe" required><option>Sélectionner un groupe</option><option>Groupe n°0</option><option>Groupe n°1</option><option>Groupe n°2</option><option>Groupe n°3</option></select></p><p><label for="userEmail" class="control-label">E-mail</label><input type="email" class="form-control" id="userEmail" value="E-mail" required></p><p><label for="userInformation" class="control-label">Informations</label><textarea name="textarea" id="userInformation" class="form-control" cols="50" value="Saisissez les informations relatives à l\'utilisateur."></textarea></p>';*/
					texte = "Formulaire de modification d'un utilisateur (égal au formulaire de création d'un utilisateur sauf que les champs seront pré-remplis).";
					break;

				case "Alerte " :
					/*texte = '<p><label for="alertTitle" class="control-label">Titre</label><input type="text" class="form-control" id="alertTitle" value="Titre" required></p><p><label for="alertZone" class="control-label">Zone</label><select class="form-control" id="alertZone" required><option>Sélectionner une zone</option><option>Zone n°0</option><option>Zone n°1</option><option>Zone n°2</option><option>Zone n°3</option><option>Zone n°4</option><option>Zone n°5</option></select></p><p><label for="alertInformation" class="control-label">Informations</label><textarea name="alertInformation" id="alertInformation" class="form-control" cols="50" placeholder="Saisissez les informations relatives au cambriolage." required></textarea></p>'*/
					texte = "Formulaire de modification d'une alerte (égal au formulaire de création d'une alerte sauf que les champs seront pré-remplis).";
					break;

				case "Information " :
					/*texte = '<p><label for="infoTitle" class="control-label">Titre</label><input type="text" class="form-control" id="infoTitle" value="Titre" required></p><p><label for="infoInformation" class="control-label">Informations</label><textarea name="infoInformation" id="infoInformation" class="form-control" cols="50" value="Saisissez les informations relatives à la nouvelle procédure." required></textarea></p>';*/
					texte = "Formulaire de modification d'un message (égal au formulaire de création d'un message sauf que les champs seront pré-remplis).";
					break;

				case "Groupe " :
					/*texte = '<p><label for="groupeName" class="control-label">Nom</label><input type="text" class="form-control" id="groupeName" value="Nom" required></p><p><label>Administration</label><table class="table table-hover"><tr><td>Gestion des groupes</td><td style="text-align: right;"><input type="checkbox" id="groupeCheck1" value="groupeCheck1"></td></tr><tr><td>Gestion des utilisateurs</td><td style="text-align: right;"><input type="checkbox" id="groupeCheck2" value="groupeCheck2"></td></tr></table></p><p><label>Messages et notifications</label><table class="table table-hover"><tr><td>Gestion des alertes</td><td style="text-align: right;"><input type="checkbox" id="groupeCheck3" value="groupeCheck3"></td></tr><tr><td>Gestion des procédures</td><td style="text-align: right;"><input type="checkbox" id="groupeCheck4" value="groupeCheck4"></td></tr><tr><td>Gestion des conseils</td><td style="text-align: right;"><input type="checkbox" id="groupeCheck5" value="groupeCheck5"></td></tr></table></p><p><label for="groupeInformation" class="control-label">Informations</label><textarea name="textarea" id="groupeInformation" class="form-control" cols="50" value="Saisissez les informations relatives au groupe."></textarea></p>'*/
					texte = "Formulaire de modification d'un groupe (égal au formulaire de création d'un groupe sauf que les champs seront pré-remplis).";
					break;

				case "Zone " :
					/*texte = '<p><label for="zoneTitle" class="control-label">Nom de la zone</label><input type="text" class="form-control" id="zoneTitle" value="Nom de la zone" required></p><p><label for="zoneRadius" class="control-label">Rayon de la zone</label><input type="text" class="form-control" id="zoneRadius" value="Rayon de la zone"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d42625.3730448933!2d-1.6534355791015165!3d48.10858027061948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1393770463548" width="100%" height="450" frameborder="0" style="border:0"></iframe></p>'*/
					texte = "Formulaire de modification d'une zone (égal au formulaire de création d'une zone sauf que les champs seront pré-remplis).";
					break;

				default :
					console.log(element);
					break;
			}
			$('#myModalBody').html(texte);
			$('#viewInfoModal').modal('show');
		});

		$('.removeElement').click(function(event){
			event.preventDefault();
			$('#myModalLabel').html("Suppression de : "+$(this).parent().data('element'));
			$('#myModalBody').html("Etes-vous sur de vouloir supprimer : "+$(this).parent().data('element'));
			$('#viewInfoModal').modal('show');
		});

		$('.showElement').click(function(event){
			event.preventDefault();
			$('#myModalLabel').html($(this).parent().data('element'));
			$('#myModalBody').html("Visualisation des informations de : "+$(this).parent().data('element'));
			$('#viewInfoModal').modal('show');
		});

		$('.form-control, .list-form-control').hover(function(){
			$(this).tooltip('show');
		});

		$('.imgJoin').click(function(event){
			event.preventDefault();
		    $(".imgLink").click();
		});

		$('.imgView').click(function(event){
			event.preventDefault();
			
			if(!$(this).parent().prev().val()){
				alert("Veuillez coller un lien d'image");
				return false;
			}else if($(this).parent().prev().val().substring(0,4) != "http"){
				alert("Le fichier n'est pas un lien d'image");
				return false;
			}

			$('#myModalLabel').html("Visualisation de l'image");
			texte="<img src='"+$(this).parent().prev().val()+"' class='img-rounded' width='100%' />";
			$('#myModalBody').html(texte);
			$('#viewInfoModal').modal('show');
		});

		$('#alertZone').change(function(){
			if($(this).val()!="Sélectionner une zone")
				$('.MapSelected').html('Aperçu de la zone<br><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d42625.3730448933!2d-1.6534355791015165!3d48.10858027061948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1393770463548" width="100%" height="450" frameborder="0" style="border:0"></iframe>');
			else $('.MapSelected').html('');
		})

		$(function() {
			$.datepicker.setDefaults( $.datepicker.regional[ "" ] );
			$( ".elmDateValid" ).datepicker( $.datepicker.regional[ "fr" ] );
		});

	});