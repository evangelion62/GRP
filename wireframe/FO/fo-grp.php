<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css"/>
		<title>GPR-FO-tickets</title>
	</head>
	<body>
		<header>
			<nav class="navTicket">
				<ul>
					<li class="addTicket">Ajouter un ticket</li>
					<li class="ticketCours">Tickets en cours</li>
					<li class="ticketHistorique"><a href="GPR-FO-Historique.php">Historique des tickets</a></li>
				</ul>
			</nav>
		</header>
		<div class="formTicket">
				<h2>Ajouter un ticket</h2>
				<form action="traitement-formulaire.php" method="POST">
					<p>
						<label for="objet-ticket">Sujet du ticket :</label><input type="text" name="objet-ticket" id="objet-ticket" placeholder="sujet du ticket"/>
						</br>
						<label for="nature-ticket">Nature du ticket</label>
						<select name="ticket-nature">
							<optgroup label="Quel est votre problème ?">
								<option value="information">Information</option>
								<option value="question">Question</option>
								<option value="pb-logiciel">Problème logiciel</option>
								<option value="pb-materiel">Problème matériel</option>
								<option value="noidea">Aucune idée</option>
							</optgroup>
						</select>
						</br>
						<label for="delais-temps">Quand en avez-vous besoin ?</label>
						<select name="temps-laps">
							<optgroup label="C'est pour...">
								<option value="urgent">Une urgence</option>
								<option value="demain">Demain</option>
								<option value="deux-jours">Dans deux jours</option>
								<option value="fin-semaine">Fin de semaine</option>
							</optgroup>
						</select>
						</br>
						<label for="date">Fixer une date : </label><input type="date" name="calendar" id="calendrier"/>
						</br>
						<label for="description-pb">Décrivez votre problème :</label><br />
						<textarea name="text-aera-description" id="text-aera-description"></textarea>
					</p>
				</form>
				<div class="center">
					<input type="reset" name="reset" id="reset" value="Réinitialiser">
					<input type="submit" name="valider" id="valider" value="Valider">
				</div>
			</div>
	</body>
</html>