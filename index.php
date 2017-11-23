<!DOCTYPE html>
<html>
	<head>
	    <title>37º Enaj - Encontro Nacional das Juntas Comerciais</title>
	    <link rel="shortcut icon" href="img/enaj-logo.png">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	    <link rel="stylesheet" type="text/css" href="css/style.css">
	    
	</head>

	<body>
		<section>
			<div class="container-fluid content">

				<div class="middle">

					<div id="tab1" class="tab"></div>
				  		
				  	<div class="loading">Em Breve</div>

					<div>
			            <div id="contagem">
			                <div class="contador" id="dias"></div>
			                <div class="contador" id="horas"></div>
			                <div class="contador" id="minutos"></div>
			                <div class="contador" id="segundos"></div>
			            </div>
			        </div>
				</div>

				<div id="tab1show" class="tab-content"></div>

				<div class="middle-content">
					<div id="tab2show" class="tab-content about-enaj">
						<h3>Sobre</h3>
					 	<hr>
					  	<p style="text-align: justify;">
					  	O <strong>37º Encontro Nacional da Juntas Comerciais do Brasil</strong> (ENAJ) acontece entre os dias 28 de novembro de 2017 e 03 de dezembro de 2017, em Maceió-AL, reunindo dirigentes e representantes das 27 Juntas Comerciais da federação, com o objetivo de discutir “10 anos de Redesim: a integração nacional do projeto para melhoria do ambiente brasileiro de negócios”.
					</div>

					<div id="tab3show" class="tab-content">
						<h3>Contato</h3>
					  	<hr>

					  	<div class="col-get-in-touch">
							<!--			
							<address>
								<i class="fa fa-map-marker"></i> <span>Av. Fernandes Lima, 1681 - Pinheiro<br/>Maceió - AL, 57055-000</span>
							</address>-->
							<h5>Comissão Técnica:</h5><br>
							<p><a href="mailto:enajalagoas@gmail.com"><i class="fa fa-envelope"></i>enajalagoas@gmail.com</a></p>
							<ul class="list-unstyled" id="phones">
								<li><a href="tel:(82)98884-6655"><i class="fa fa-mobile"></i>(82) 9 8884-6655</a></li>
								<li><a href="tel:(82)98752-7503"><i class="fa fa-mobile"></i>(82) 9 8752-7503</a></li>
							</ul>
							

							<ul class="list-unstyled list-socials">
								<li>
									<a href="http://www.juceal.al.gov.br/site/pt-br/" target="_blank"><i class="fa fa-chrome"></i></a>
								</li>
								<li>
									<a href="https://www.facebook.com/Juceal/" target="_blank"><i class="fa fa-facebook-official"></i></a>
								</li>
								<li>
									<a href="https://www.instagram.com/juntacomercial_al/" target="_blank"><i class="fa fa-instagram"></i></a>
								</li>

							</ul>

						</div>

					</div>
				</div>

				<div class="container-fluid" style="float: right; display: inline-block;">

					<div class="float-right" style="float: right; width: 50px;">
						
						<div style="float: right;">
							<div id="tab2" class="tab">Sobre</div>
						</div>
						<div style="float: right; ">
							<div id="tab3" class="tab">Contato</div>
						</div>
						
					</div>

				</div>

			</div>

		</section>

		<footer>

			<div>

				<form action="insert.php" method="POST" class="form-inline" name="formEmail" onSubmit="return enviaremail();">
		          <input name="email" class="form-control" id="email" style="width: 75%;" type="email" placeholder="Digite seu e-mail para ser notificado" aria-label="E-mail">
		          <button class="btn btn-outline-success btn-notify" type="submit">Notifique-me</button>
		        </form> 

			</div>

		</footer>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	
		<script>
		    $(document).ready(function(){
			    var $contents = $('.tab-content');
					$contents.slice(1).hide(4000);
					$('.tab').click(function() {
					  var $target = $('#' + this.id + 'show').show(8000);
					  $contents.not($target).hide(4000);
					});
				});
			
	  		//Contador
	        var countDownDate = new Date("Nov 28, 2017 08:00:00").getTime();

	        // Update the count down every 1 second
	        var x = setInterval(function() {

	        // Get todays date and time
	        var now = new Date().getTime();

	        // Find the distance between now an the count down date
	        var distance = countDownDate - now;

	        // Time calculations for days, hours, minutes and seconds
	        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	        var seconds = Math.floor((distance % (1000 * 60)) / 1000);


	        var vD,vH, vM, vS;

	        if(days > 1){
	        	vD = 'Dias ';
	        } else {
	        	vD = 'Dia ';
	        }
	        if (hours > 1) {
	        	vH = 'Horas ';
	        } else {
	        	vH = 'Hora ';
	        }
	        if (minutes > 1){
	        	vM = 'Minutos ';
	        } else {
	        	vM = 'Minuto ';
	        }
	        if(seconds > 1){
	        	vS = 'Segundos ';
	        } else {
	        	vS = 'Segundo ';
	        }


	        // Display the result in an element with id="demo"
	        document.getElementById("dias").innerHTML = days+"<br>"+vD;
	        document.getElementById("horas").innerHTML = hours+"<br>"+vH;
	        document.getElementById("minutos").innerHTML = minutes+"<br>"+vM;
	        document.getElementById("segundos").innerHTML = seconds+"<br>"+vS;
	        // If the count down is finished, write some text 
	        if (distance < 0) {
	            clearInterval(x);
	            document.getElementById("demo").innerHTML = "EXPIRED";
	          }
	        }, 1000);

			function enviaremail(){
			 
			if( document.formEmail.email.value=="" || document.formEmail.email.value.indexOf('@')==-1 || document.formEmail.email.value.indexOf('.')==-1 ){
				alert( "Preencha campo o e-mail corretamente!" );
				document.formEmail.email.focus();
				return false;
			} 
				alert( "Email enviado com sucesso!" );
				return true;
			}
		</script>

	</body>
</html>
