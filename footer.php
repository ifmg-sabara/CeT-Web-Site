	<footer class="rodape">

			<div class="mapa">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3751.876965650253!2d-43.80654708508609!3d-19.887416486627565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa69d459241affd%3A0x1ae90f8dc056e57b!2sEE+Dona+Bilu+Figueiredo!5e0!3m2!1sen!2sbr!4v1505150647904" width="100%" height="200" frameborder="0" allowfullscreen></iframe>
			</div>


			<div class="rodape-contato pull-left">
				<i class="fa fa-envelope icone-rodape"></i> <span>ensino.sabara@ifmg.edu.br</span> <br />
				<i class="fa fa-map-marker icone-rodape"></i> <span><strong>EE Dona Bilu Figueiredo</strong>,  R. Floriano Peixoto Viterbo, 1 - Centro, Sabará - MG, 34505-790</span>
			</div>

			<ul class="redes-sociais pull-right">
				<li>
					<i class="fa fa-facebook"></i>
				</li>
			</ul>
			<div class="clearfix"></div>
		</footer>
	</div>


	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
<?php
function UrlAtual(){
 $dominio= $_SERVER['HTTP_HOST'];
 $url = "http://" . $dominio. $_SERVER['REQUEST_URI'];
 return $url;
 }
 ?>