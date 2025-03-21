<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page formulaire</title>

	<!-- linking fontawesome --> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css" integrity="sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy" crossorigin="anonymous">
     
     <!-- partie CSS --->
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
*
{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
}
.contact
{
	position: relative;
	min-height: 100vh;
	padding: 50px 100px;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	background-color: #444444;
	background-size: cover;
}
.contact .content
{
	max-width: 800px;
	text-align: center;
}
.contact .content h2
{
	font-size: 36px;
	font-weight: 500;
	color: #fff;
}
.contact .content p
{
	font-weight: 300;
	color: #fff;
}
.container
{
	width: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	margin-top: 30px;
}
.container .contactInfo
{
	width: 50%;
	display: flex;
	flex-direction: column;
}
.container .contactInfo .box
{
	position: relative;
	padding: 20px 0;
	display: flex;
}
.container .contactInfo .box .icon
{
	min-width: 60px;
	height: 60px;
	background: #fff;
	display: flex;
	justify-content: center;
	align-items: center;
	border-radius: 50%;
	font-size: 22px;
}
.container .contactInfo .box .text
{
	display: flex;
	margin-left: 20px;
	font-size: 16px;
	color: #fff;
	flex-direction: column;
	font-weight: 300;
}
.container .contactInfo .box .text h3
{
	font-weight: 500;
	color: #00bcd4;
}
.contactForm
{
	width: 40%;
	padding: 40px;
	background: #fff;
}
.contactForm h2
{
	font-size: 30px;
	color: #333;
	font-weight: 500;
}
.contactForm .inputBox
{
	position: relative;
	width: 100%;
	margin-top: 10px;
}
.contactForm .inputBox input,
.contactForm .inputBox textarea
{
	width: 100%;
	padding: 5px 0;
	font-size: 16px;
	margin: 10px 0;
	border: none;
    border-bottom: 2px solid #333;
    outline: none;
    resize: none;
}
.contactForm .inputBox span
{
	position: absolute;
	left: 0;
	padding: 5px 0;
	font-size: 16px;
	margin: 10px 0;
	pointer-events: none;
	transition: 0.5s;
	color: #666;
}
.contactForm .inputBox input:focus ~ span,
.contactForm .inputBox input:valid ~ span,
.contactForm .inputBox textarea:focus ~ span,
.contactForm .inputBox textarea:valid ~ span
{
	color: #e91e63;
	font-size: 12px;
	transform: translateY(-20px);
}
.contactForm .inputBox input[type="submit"]
{
	width: 100px;
	background: #00bcd4;
	color: #fff;
	border: none;
	cursor: pointer;
	padding: 10px;
	font-size: 18px;
}

@media (max-width: 991px)
{
	.contact
	{
       padding: 50px;
	}
	.container
	{
       flex-direction: column;
	}
	.container .contactInfo
	{
		margin-bottom: 40px;
	}
	.container .contactInfo,
	.contactForm
	{
		width: 100%;
	}
}
	</style>
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