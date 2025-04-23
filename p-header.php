<header class="bg-white text-black py-8 px-12">
		<nav>
			
			<section class="flex justify-between items-center">
				<!-- Logo and Mobile menu -->
				<div class="flex justify-between items-center">
					<div class="drawer lg:hidden">
						<!-- Navigation Toggle -->
						<input id="my-drawer" type="checkbox" class="drawer-toggle" />
						<div class="drawer-content">
							<label for="my-drawer" class="p-3 inline-flex bg-gray-100 opacity-50 justify-center items-center gap-x-2 align-middle rounded-lg transition-all duration-150 hover:opacity-75 focus:outline-none cursor-pointer lg:hidden"><i class="bx bx-menu text-black opacity-100 hover:opacity-50"></i></label>
						</div>
						<div class="drawer-side z-50">
							<label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
							<ul class="menu bg-white text-black min-h-full w-72 p-8 space-y-2">
								<!-- Sidebar content here -->
								<a href="<?php echo esc_url(home_url('/')); ?>">
									<img src="<?php echo get_theme_file_uri('/resources/img/logo.png'); ?>" alt="Logo de Teleradio Norte" class="ml-2 w-28 h-auto">
								</a>
								<div class="w-full border-b border-b-lightGreen my-8"></div>
								<li><a href="<?php echo esc_url(home_url('/')); ?>" class="hover:px-8 font-hanken font-light text-black text-lg rounded-full transition-all transition-duration-150 hover:bg-brandGreen hover:text-white">Inicio</a></li>
								<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('sobre-nosotros'))); ?>" class="hover:px-8 font-hanken font-light text-black text-lg rounded-full transition-all transition-duration-150 hover:bg-brandGreen hover:text-white">Sobre Nosotros</a></li>
								<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('servicios'))); ?>" class="hover:px-8 font-hanken font-light text-black text-lg rounded-full transition-all transition-duration-150 hover:bg-brandGreen hover:text-white">Servicios</a></li>
								<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('contacto'))); ?>" class="hover:px-8 font-hanken font-light text-black text-lg rounded-full transition-all transition-duration-150 hover:bg-brandGreen hover:text-white">Contacto</a></li>
								<div class="w-full border-b border-b-lightGreen my-8"></div>
								<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('noticias'))); ?>" class="hover:px-8 font-hanken font-light text-black text-lg rounded-full transition-all transition-duration-150 hover:bg-brandGreen hover:text-white">Noticias</a></li>
								<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('programa'))); ?>" class="hover:px-8 font-hanken font-light text-black text-lg rounded-full transition-all transition-duration-150 hover:bg-brandGreen hover:text-white">Programa</a></li>
								<li>
									<button class="hover:px-8 text-lg rounded-full transition-duration-150 hover:bg-brandGreen hover:text-white group relative w-full text-left pl-3 font-hanken font-light text-black transition-all transition-duration-150"> 
										Más
										<div class="w-full absolute top-full right-0 p-2 bg-lightestGreen shadow-xm text-black font-hanken font-light rounded-b-lg scale-y-0 group-hover:scale-y-100 origin-top duration-200 z-50">
											<a class="block p-2 rounded-lg transition-all transition-duration-300 hover:bg-lightGreen hover:px-8 active:bg-brandGreen active:text-white weather-btn" href="<?php echo esc_url(get_permalink(get_page_by_path('clima'))); ?>">Clima</a>
											<a class="block p-2 rounded-lg transition-all transition-duration-300 hover:bg-lightGreen hover:px-8 active:bg-brandGreen active:text-white" href="<?php echo esc_url(get_permalink(get_page_by_path('combustible'))); ?>">Combustible</a>
											<a class="block p-2 rounded-lg transition-all transition-duration-300 hover:bg-lightGreen hover:px-8 active:bg-brandGreen active:text-white" href="<?php echo esc_url(get_permalink(get_page_by_path('loteria'))); ?>">Lotería</a>
											<a class="block p-2 rounded-lg transition-all transition-duration-300 hover:bg-lightGreen hover:px-8 active:bg-brandGreen active:text-white" href="<?php echo esc_url(get_permalink(get_page_by_path('dolar'))); ?>">Dólar</a>
										</div>
									</button>
								</li>
							</ul>
						</div>
					</div>
					<!-- Teleradio Norte Logo -->
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<img src="<?php echo get_theme_file_uri('/resources/img/logo.png'); ?>" alt="Logo de Teleradio Norte" class="w-32 lg:w-20 h-auto">
					</a>
				</div>
				<!-- first menu -->
				<ul class="hidden gap-x-12 font-hanken font-light text-black lg:flex">
					<li class="transition-all transition-duration-150 hover:underline hover:text-grayTitle">
						<a href="<?php echo esc_url(get_permalink(get_page_by_path('sobre-nosotros'))); ?>">Sobre Nosotros</a>
					</li>
					<li class="transition-all transition-duration-150 hover:underline hover:text-grayTitle">
						<a href="<?php echo esc_url(get_permalink(get_page_by_path('servicios'))); ?>">Servicios</a>
					</li>
					<li class="transition-all transition-duration-150 hover:underline hover:text-grayTitle">
						<a href="<?php echo esc_url(get_permalink(get_page_by_path('contacto'))); ?>">Contacto</a>
					</li>
				</ul>
				<!-- search -->
				<form class="hidden md:flex">
					<label class="input">
						<svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none" stroke="currentColor"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></g></svg>
						<input type="search" class="grow border-stone-50 rounded-xl focus:outline-hidden" placeholder="Buscar" />
					</label>
				</form>
			</section>
			
			<div class="hidden w-full border-b border-b-lightGreen my-8 lg:block"></div>
			
			<section class="hidden w-full lg:block">
				<ul class="flex justify-between items-center">
					<a class="bg-lightGreen rounded-xl text-center w-1/5 py-2 font-hanken font-light text-black transition-all transition-duration-150 hover:bg-brandGreen hover:text-white" href="<?php echo esc_url(home_url('/')); ?>">
						<li>
							Inicio
						</li>
					</a>
					<a class="bg-lightGreen rounded-xl text-center w-1/5 py-2 font-hanken font-light text-black transition-all transition-duration-150 hover:bg-brandGreen hover:text-white" href="<?php echo esc_url(get_permalink(get_page_by_path('noticias'))); ?>">
						<li>
							Noticias
						</li>
					</a>
					<a class="bg-lightGreen rounded-xl text-center w-1/5 py-2 font-hanken font-light text-black transition-all transition-duration-150 hover:bg-brandGreen hover:text-white" href="<?php echo esc_url(get_permalink(get_page_by_path('programa'))); ?>">
						<li>
							Programa
						</li>
					</a>
					<button class="group relative w-1/5 bg-lightGreen rounded-xl text-center p-2 font-hanken font-light text-black transition-all transition-duration-150 hover:bg-brandGreen hover:text-white z-1"> 
						Más
						<div class="w-full absolute top-full right-0 p-2 bg-lightestGreen shadow-xm text-black font-hanken font-light rounded-b-lg scale-y-0 group-hover:scale-y-100 origin-top duration-200 z-50">
							<a class="block p-2 rounded-lg transition-all transition-duration-300 hover:bg-lightGreen active:bg-brandGreen active:text-white weather-btn" href="<?php echo esc_url(get_permalink(get_page_by_path('clima'))); ?>">Clima</a>
							<a class="block p-2 rounded-lg transition-all transition-duration-300 hover:bg-lightGreen active:bg-brandGreen active:text-white" href="<?php echo esc_url(get_permalink(get_page_by_path('combustible'))); ?>">Combustible</a>
							<a class="block p-2 rounded-lg transition-all transition-duration-300 hover:bg-lightGreen active:bg-brandGreen active:text-white" href="<?php echo esc_url(get_permalink(get_page_by_path('loteria'))); ?>">Lotería</a>
							<a class="block p-2 rounded-lg transition-all transition-duration-300 hover:bg-lightGreen active:bg-brandGreen active:text-white" href="<?php echo esc_url(get_permalink(get_page_by_path('dolar'))); ?>">Dólar</a>
						</div>
					</button>
				</ul>
			</section>
		</nav>
	</header>