	<footer id="colophon" class=" bg-white w-full mt-20" role="contentinfo">
		<!-- Boletín de noticias -->
		<section class="p-12 flex flex-col gap-y-7 lg:flex-row lg:justify-between lg:items-center bg-brandGreen">
			<div class="space-y-2 lg:w-[30%]">
				<h3 class="text-white text-2xl font-bold">Suscríbete a nuestro boletín</h3>
				<p class=" text-white">Mantente informado con las últimas noticias, anuncios y artículos.</p>
			</div>
			<form action="" class="w-full space-y-2 lg:w-auto">
				<input placeholder="Correo electrónico" type="email" class="input w-full p-6 bg-white text-gray-500">
				<button type="submit" class="btn w-full border-0 p-6 shadow-none bg-darkGreen text-white  transition-all transition-duration-150 hover:bg-darkGreen/80">Suscribirse</button>
			</form>
			</div>
		</section>
		<!-- Footer -->
		<section class="py-8 px-12 flex flex-col gap-y-5 bg-darkGreen md:flex-row md:justify-between md:items-center">
			<p class="text-white  font-light">&copy; <?php echo date_i18n( 'Y' );?> - Teleradionorte. Todos los derechos reservados.</p>
			<div class="space-x-1 text-white">
				<a href="https://x.com/teleradionorte1"><i class='bx bxl-twitter bx-sm transition-all transition-duration-300 cursor-pointer hover:text-lightGreen'></i></a>
				<a href="https://www.facebook.com/teleradionorte?ref=embed_page"><i class='bx bxl-facebook bx-sm transition-all transition-duration-300 cursor-pointer hover:text-lightGreen'></i></a>
				<a href="https://www.instagram.com/teleradionorte/"><i class='bx bxl-instagram-alt bx-sm transition-all transition-duration-300 cursor-pointer hover:text-lightGreen'></i></a>
			</div>	
		</section>
	</footer>
	<script src="<?php echo get_theme_file_uri('/resources/js/plyr.js'); ?>"></script>
	<script src="<?php echo get_theme_file_uri('/resources/js/programa-hoy.js'); ?>"></script>
	<script src="https://cdn.plyr.io/3.6.8/plyr.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
	<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
	<script type="module" src="https://unpkg.com/cally"></script>
	<script src="<?php echo get_theme_file_uri('/resources/js/contacto.js'); ?>"></script>
	<script src="<?php echo get_theme_file_uri('/resources/js/loteria.js'); ?>"></script>
	<!-- AOS LIBRARY -->
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>
