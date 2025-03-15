<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page formulaire</title>

	<!-- linking fontawesome --> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css" integrity="sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy" crossorigin="anonymous">

	<link rel="stylesheet" href="essai2.css">
</head>
<body>

    <section class="contact">
   	<div class="content">
   		<h2>Contacter moi</h2>
   		<p>Pour plus d'informations à mon sujet, vous pouvez remplir ce formulaire juste en bas et j'y répondrais dans 
   		les meilleurs délai.</p>
   	</div>


   		<div class="contactForm">
   			<form action="essai3.php" method="POST">
   				<h2>Send Message</h2>
   				<div class="inputBox">
   					<input type="text" name="name" id="name" required>
   					<span>Nom complet</span>
   				</div>

   				<div class="inputBox">
   					<input type="text" name="email" id="email" required>
   					<span>Email</span>
   				</div>

   				<div class="inputBox">
   					<textarea name="message" id="message" required></textarea>
   					<span>Tapez votre message...</span>
   				</div>

   				<div class="inputBox">
   					<button>Envoyer</button>
   				</div>
   			</form>
   	</div>
   </section>

</body>
</html>