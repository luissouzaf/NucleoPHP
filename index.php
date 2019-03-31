<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Núcleo Cultural é uma startup voltada à elaboração e desenvolvimento de projetos
		 culturais. Sua atuação engloba diferentes fases produtivas do setor: criação e inscrição
		 de propostas em editais e leis de incentivo cultural; captação de recursos; execução dos
		 projetos; prestação de contas; divulgação de ações culturais; agenciamento de artistas.">
		<meta name="author" content="Luana Menezes e Luís Fernando">

		<title><?php bloginfo('name');?></title>
		<!-- Núcleo Cultural Produções -->
		<link rel="canonical" href="https://nucleocultural.com">

		<!-- 
		<link rel="stylesheet" href="css/bootstrap.min.css">


		<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:100" rel="stylesheet">


		<link rel="stylesheet" href="css/style.css">
		

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
		
	<?php wp_head(); ?>  
	</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
	<div class="container">

		
		<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img id="logo" src="<?php echo get_theme_mod( 'm1_logo' ); ?>" alt="Núcleo Cultural Logo"></a>

		<!-- <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img id="logo" src="<?php bloginfo('template_directory'); ?>/images/logo-horizontal.svg" alt="Núcleo Cultural Logo"></a> -->

		<!-- <a class="navbar-brand" href="#"><img id="logo" src="images/logo-horizontal.svg" alt="Núcleo Cultural Logo"></a> -->

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<?php
				wp_nav_menu( array(
					'theme_location'    => 'primary',
					'depth'             => 1,
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'navbarResponsive',
					'menu_class'        => 'navbar-nav ml-auto text-uppercase justify-content-center',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
			) );
		?>

		<!-- <div class="collapse navbar-collapse " id="navbarResponsive">

			<ul class="navbar-nav ml-auto text-uppercase justify-content-center">
				<li class="nav-item">
					<a class="nav-link" href="#home">Home
								<span class="sr-only">(current)</span>
							</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#O-Nucleo">Quem somos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#servicos">Serviços</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#projetos">Projetos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#parceiros">Parceiros</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#contato">Contato</a>
				</li>
			</ul>
		</div> -->

	</div>
</nav>
<!-- ./Navigation -->

<!-- Slider -->
<header id="home">
	<div id="carousel-header" class="carousel slide" data-ride="carousel-header">
		<!-- <ol class="carousel-indicators">
			<li data-target="#carousel-header" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-header" data-slide-to="1"></li>
			<li data-target="#carousel-header" data-slide-to="2"></li>
			<li data-target="#carousel-header" data-slide-to="3"></li>
			<li data-target="#carousel-header" data-slide-to="4"></li>
		</ol> -->
		<div class="carousel-inner" role="listbox">

		<?php 
		// args
		$my_args_slider_home = array(
			'post_type' => 'Slider Home',
			'posts_per_page' => 5,
		);
		// query
		$my_query_slider_home = new WP_Query ( $my_args_slider_home );
		?>

		<?php if( $my_query_slider_home->have_posts()) : 
		$slider_home = $slider_home_array[0];
		$c = 0;
		while( $my_query_slider_home->have_posts() ) : 
		$my_query_slider_home->the_post(); 
		?>	

		<?php $slider_home_img_url = get_the_post_thumbnail_url(get_the_ID(),'post-thumbnail');?>

		<div class="carousel-item <?php $c++; if($c == 1) { echo ' active'; } ?>" style="background-image: url('<?php echo $slider_home_img_url ?>')">

			<div class="carousel-caption">
				<h2 class="display-4"><?php the_title(); ?></h2>
				<p class="lead"><?php the_content(); ?></p>
			</div>
		</div>

		<?php endwhile; endif; ?>

		<?php wp_reset_query(); ?>

			<!-- // Slide One
			<div class="carousel-item active" style="background-image: url('https://source.unsplash.com/1920x1080/?show,event')">
				// <img class="d-block w-100" src="https://source.unsplash.com/1920x1080/?show,event"" alt="Slide One">
				<div class="carousel-caption">
					<h2 class="display-4">FUTURO</h2>
					<p class="lead">Invista em arte e tranforme o futuro</p>
				</div>
			</div>
			// Slide Two
			<div class="carousel-item" style="background-image: url('https://source.unsplash.com/1920x1080/?museum,painting')">
				c <img class="d-block w-100" src="https://source.unsplash.com/1920x1080/?museum,painting"" alt="Slide Two">
				<div class="carousel-caption">
					<h2 class="display-4">FUTURO</h2>
					<p class="lead">Invista em arte e tranforme o futuro</p>
				</div>
			</div>

			// Slide Three
			<div class="carousel-item" style="background-image: url('https://source.unsplash.com/1920x1080/?library,art')">
				// <img class="d-block w-100" src="https://source.unsplash.com/1920x1080/?library,art" alt="Slide Three">
				<div class="carousel-caption">
					<h2 class="display-4">FUTURO</h2>
					<p class="lead">Invista em arte e tranforme o futuro.</p>
				</div>
			</div>
			// Slide Four
			<div class="carousel-item" style="background-image: url('https://source.unsplash.com/1920x1080/?singer,band')">
				// <img class="d-block w-100" src="https://source.unsplash.com/1920x1080/?singer,band" alt="Slide Four">
				<div class="carousel-caption">
					<h2 class="display-4">FUTURO</h2>
					<p class="lead">Invista em arte e tranforme o futuro.</p>
				</div>
			</div>
			// Slide Five
			<div class="carousel-item" style="background-image: url('https://source.unsplash.com/1920x1080/?books,magazines')" >
				// <img class="d-block w-100" src="https://source.unsplash.com/1920x1080/?books,magazines" alt="Slide Five"> 
				<div class="carousel-caption">
					<h2 class="display-4">FUTURO</h2>
					<p class="lead">Invista em arte e tranforme o futuro.</p>
				</div>
			</div> -->

		</div>

		<a class="carousel-control-prev" href="#carousel-header" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Anterior</span>
		</a>
		<a class="carousel-control-next" href="#carousel-header" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Próximo</span>
		</a>
	</div>
</header>
<!-- /.Slider -->

<main role="main">
<!-- --------------------------------------------------- O Núcleo --------------------------------------------------------------------------- -->

	<section id="nucleo" class=" container-fluid bg-laranja">
		<div class="container">
			<div class="row">

				<div class="col-2 p-0">
					<div class="title-aside-wrapper">
						<h1 class="text-uppercase title-aside m-0 p-0">

							<?php 
							        if( is_active_sidebar( 'banner' ) ){
							          dynamic_sidebar( 'banner' );
							        }
							        ?>


						</h1>
					</div>
				</div>
				<!--------------------------------------- Quem Somos ----------------------------------------------->
				<div class="col-10 col-lg-10">
					<div class="row cards">
						<div class="fundo-quemsomos col-12 col-lg-7" >
							<div class="text-align ">
								<p><b>O Núcleo</b></p>
								<h2>QUEM SOMOS</h2>
								<p><b>Núcleo Cultural</b> é uma startup voltada à elaboração e desenvolvimento de projetos culturais. Sua atuação engloba diferentes fases produtivas do setor: criação e inscrição de propostas em editais e leis de incentivo cultural; captação de recursos; execução dos projetos; prestação de contas; divulgação de ações culturais; agenciamento de artistas.</p>
									
								<div class="row">
									<div class="col-3 col-md-2 imagem-redesociais">
										<a href="https://www.facebook.com/nucleoculturalbrasil" target="_blank">
											<!--<img src="images/facebook.svg" alt="Facebook">-->
											<span style="font-size: 2.3rem; color: #fe7e00;">
												<i class="fab fa-facebook-square"></i>
											</span>
										</a>
									</div>
									<div class="col-3 col-md-2 imagem-redesociais">
										<a href="https://www.instagram.com/nucleocultralbrasil/" target="_blank">
											<!--<img src="images/instagram.svg" alt="Instagram">-->
											<span style="font-size: 2.3rem; color: #fe7e00;">
												<i class="fab fa-instagram"></i>
											</span>
										</a>
									</div>
									<div class="col-3 col-md-2 imagem-redesociais">
										<a href="https://www.youtube.com/channel/UCHaG5NCZR07j8255sZCYcyA/featured" target="_blank">
											<!--<img src="images/youtube.svg" alt="Youtube">-->
											<span style="font-size: 2.3rem; color: #fe7e00;">
												<i class="fab fa-youtube-square"></i>
											</span>
										</a>
									</div>
									<div class="col-3 col-md-2 imagem-redesociais">
										<a href="https://pt.linkedin.com/company/nucleoculturalproducoes" target="_blank">
											<!--<img src="images/linkedin.svg" alt="Linkedin">-->
											<span style="font-size: 2.3rem; color: #fe7e00;">
												<i class="fab fa-linkedin"></i>
											</span>
										</a>
									</div><!--/.col-4 col-md-2 imagem-->
								</div><!--/.row-->
								
								<div class="row">
									<div class="col-3 col-md-2 seta-baixo">
										<a href="#texto-missao">
											<span style="font-size: 3rem; color: #fe7e00;">
												<i class="fas fa-angle-double-down"></i>
											</span>
										</a>
									</div>
								</div><!--/.row-->
								
							</div><!--/.text-align-->

						</div><!--/.fundo-quemsomos-->
						
						<div class="col-12 col-lg-6">
							<div class="zoom">
								<img id="imagem-quemsomos" src="images/Imagem_QuemSomos.png" alt="O Nucleo">
							</div><!--/.zoom-->
						</div><!--/.col-md-5-->
					</div><!--/.row-->

				<!---------------------------------- Missão e Diferencial ------------------------------------------->
					<div class="row">
						<div class=" col-12 col-lg-10" id="texto-missao">
							<h2>Missão e Diferencial</h2>
						</div><!--/.col-10 col-lg-6-->
						
						<div class="bg-escuro col-12 col-lg-12">
							<div class="row">
								<div class="col-12 col-lg-8 texto-branco">
									<p>Com a missão de valorizar e difundir bens culturais, democratizando seu acesso e estimulando a pluralidade de ideias, investimos numa abordagem original: apresentamos projetos de impacto social e de comunicação direta com públicos expressivos e diversificados, mas que, ao mesmo tempo, não abrem mão do valor cultural e de acreditar em obras que contam com espaço restrito de veiculação.</p>
									<p><b> Mas como pretendemos unir essas duas realidades do universo cultural?</b></p> 
									<p><b>Como popularizar práticas culturais socialmente desprestigiadas?</b></p>
									
									<div class="row">
									<div class="col-6 col-sm-4 col-md-2 seta-baixo">
										<a href="#texto-criatividade">
											<span style="font-size: 4rem; color: #fe7e00;">
												<i class="fas fa-arrow-down"></i>
											</span>
										</a>
									</div>
									
									</div><!--/.row-->
								</div><!--/.col-10-->
								
								<div class=" col-10 col-lg-4 img-redonda">
									<div class="zoom ">
										<img  class="rounded-circle" src="images/missao-diferencial.png" alt="Criatividade e Estratégia">
									</div><!--/.zoom-->
								</div><!--/.col-10 col-lg-4-->
							</div><!--/.row-->
						</div><!--/.bg-escuro-->
					</div><!--/.row-->
					
				<!---------------------------------- Criatividade e Estratégia ------------------------------------------->
					<div class="row">
						<div class=" col-12 col-lg-10" id="texto-criatividade">
							<h2>Criatividade e Estratégia</h2>
						</div><!--/.col-10 col-lg-6-->
						
						<div class="bg-escuro col-12 col-lg-12">
							<div class="row">
								<div class=" col-10 col-lg-4 img-redonda">
									<div class="zoom ">
										<img  class="rounded-circle" src="images/criatividade-estrategia.png" alt="Criatividade e Estratégia">
									</div><!--/.zoom-->
								</div><!--/.col-10 col-lg-4-->
								<div class="col-12 col-lg-8 text-align texto-branco">
									<p>Do impulso criativo é que vem a capacidade de conquistar atenção e atrair novos olhares. Entretanto, sem uma estrutura profissional implantada, a consolidação de ideias inovadoras permanece inviabilizada. Nossa proposta, portanto, é potencializar o alcance de bens culturais a partir de uma estratégia de mediação – analisando cada território a ser impactado – e de um suporte administrativo profissional, contemplando diferentes perfis de público, além de firmar confiabilidade perante clientes, parceiros e investidores.</p>
									
								</div><!--/.col-10-->	
							</div><!--/.row-->	
						</div><!--/.bg-escuro-->
					</div><!--/.row-->
					
				<!---------------------------------- Patrocine Projetos ------------------------------------------->
					<div class="row">
						<div class=" col-12 col-lg-10 text-center texto-branco" id="texto-patrocine">
							<h2>Patrocine nossos projetos e valorize sua marca</h2>
							<p>Promover arte é transformar: tem a ver com mobilizar sonhos e paixões, tem a ver com inspirar; tem tudo a ver com parceria.</p>
						</div><!--/.col-10 col-lg-10-->
						
						<div class="bg-patrocine col-12 col-lg-12">
							<div class="row">
								<div class="col-12 col-lg-12 text-align">
									<h4 class="laranja">BOA AÇÃO, BOM NEGÓCIO</h4>
									<p>Só em 2018, mais de 3 mil organizações investiram perto de 1,3 bilhões em cultura via Lei Rouanet. E mais: o setor cultural nos últimos anos registra crescimento (9,1%) mais elevado do que a média da economia brasileira.</p>
									<p>Principais vantagens: </p>
									<ul>
									  <li><span style="display:inline; color: #fe7e00;"> <i class="fas fa-check-double"></i><b> Valorização da imagem institucional: </b></span></li>
									  <p>Relacionar o nome da empresa a ações publicamente admiradas;</p>
									  <li><span style="display:inline; color: #fe7e00;"> <i class="fas fa-check-double"></i><b> Aproximação com o público: </b></span></li>
									  <p>Estabelecer uma relação de identidade entre organização e sociedade, impactando comunidades locais;</p>
									  <li><span style="display:inline; color: #fe7e00;"> <i class="fas fa-check-double"></i><b> Expansão da marca: </b></span></li>
									  <p>Divulgar a atuação da organização por meio de ações publicitárias envolvidas no projeto patrocinado;</p>
									  <li><span style="display:inline; color: #fe7e00;"> <i class="fas fa-check-double"></i><b> Dedução de impostos: </b></span></li>
									  <p>A Lei Rouanet garante o abatimento total ou parcial do valor investido no projeto cultural via isenção fiscal.</p>
									</ul>
								</div><!--/.col-10-->	
							</div><!--/.row-->	
						</div><!--/.bg-escuro-->
					</div><!--/.row-->
				</div><!--/.col 10-->
			</div><!--/.row-->

		</div><!--/.container-->
	</section>
	
	<!-- ------------------------------------------------------------------------------------------------------------------------------ -->

<!-- Serviços -->
<section id="servicos">
	<div class="container">
		<div class="row">
			<div class="col-2 p-0" id="aside">
				<div class="title-aside-wrapper">
					<h1 class="title-aside m-0 p-0">serviços</h1>
				</div>
					
			</div> <!--/.col-2-->

			<div class="col-10 col-lg-10">
				<div class="row">
					<div class="col-12 col-lg-4 text-center servicos-item hyphenate">
						<img  class="" src="images/editais-e-leis-de-incentivo.svg" alt="">
						<h2 class="texto-laranja"><?php echo get_theme_mod('services-item-title-1'); ?></h2>
						<p><?php echo get_theme_mod('services-item-text-1'); ?></p>

						<!-- <img  class="" src="images/editais-e-leis-de-incentivo.svg" alt="">
						<h2 class="texto-laranja">Editais e Leis de Incentivo</h2>
						<p>criamos e/ou formatamos projetos concorrentes a seleções públicas e privadas, via edital ou leis de incentivo à cultura.</p> -->
					</div>

					<div class="col-12 col-lg-4 text-center servicos-item hyphenate">
						<img  class="" src="images/desenvolvimento-de-projetos-culturais.svg" alt="">
						<h2 class="texto-laranja"><?php echo get_theme_mod('services-item-title-2'); ?></h2>
						<p><?php echo get_theme_mod('services-item-text-2'); ?></p>

						<!-- <img  class="" src="images/desenvolvimento-de-projetos-culturais.svg" alt="">
						<h2 class="texto-laranja">Desenvolvimento de Projetos Culturais</h2>
						<p>executamos projetos de impacto social através da cultura, coordenando todas as fases produtivas (pré-produção, produção e pós-produção).</p> -->
					</div>

					<div class="col-12 col-lg-4 text-center servicos-item hyphenate">
						<img  class="" src="images/marketing-cultural.svg" alt="">
						<h2 class="texto-laranja"><?php echo get_theme_mod('services-item-title-3'); ?></h2>
						<p><?php echo get_theme_mod('services-item-text-3'); ?></p>

						<!-- <img  class="" src="images/marketing-cultural.svg" alt="">
						<h2 class="texto-laranja">Marketing Cultural</h2>
						<p>realizamos planejamento de mídia a partir da configuração de cada projeto cultural e dos objetivos específicos do patrocinador.</p> -->
					</div>
				</div><!--/.row-->

				<div class="row">
					<div class="col-12 col-lg-4 text-center servicos-item hyphenate">
						<img  class="" src="images/gestao-de-responsabilidade-social.svg" alt="">
						<h2 class="texto-laranja"><?php echo get_theme_mod('services-item-title-4'); ?></h2>
						<p><?php echo get_theme_mod('services-item-text-4'); ?></p>

						<!-- <img  class="" src="images/gestao-de-responsabilidade-social.svg" alt="">
						<h2 class="texto-laranja">Gestão de Responsabilidade Social</h2>
						<p>gerenciamento estratégico do setor, planejando as áreas de atuação e selecionando projetos de acordo com os princípios das organizações parceiras.</p> -->
					</div>

					<div class="col-12 col-lg-4 text-center servicos-item hyphenate">
						<img  class="" src="images/divulgacao-de-eventos-culturais.svg" alt="">
						<h2 class="texto-laranja"><?php echo get_theme_mod('services-item-title-5'); ?></h2>
						<p><?php echo get_theme_mod('services-item-text-5'); ?></p>

						<!-- <img  class="" src="images/divulgacao-de-eventos-culturais.svg" alt="">
						<h2 class="texto-laranja">Divulgação de Eventos Culturais</h2>
						<p>veiculação por meio de mídias sociais, a fim de promover ações voltadas à cultura.</p> -->
					</div>

					<div class="col-12 col-lg-4 text-center servicos-item hyphenate">
						<img  class="rounded-circle" src="images/agenciamento-de-artistas.svg" alt="">
						<h2 class="texto-laranja"><?php echo get_theme_mod('services-item-title-6'); ?></h2>
						<p><?php echo get_theme_mod('services-item-text-6'); ?></p>

						<!-- <img  class="rounded-circle" src="images/ agenciamento-de-artistas.svg" alt="">
						<h2 class="texto-laranja">Agenciamento de Artistas</h2>
						<p>captação de recursos, elaboração de portfólios e releases, suporte administrativo, divulgação das obras, produção de eventos.</p> -->
					</div>
				</div><!--/.row-->
			</div><!--/.col-10-->
	</div><!--/.row-->
	</div> <!--/.container-->
</section>
<!-- /.Serviços -->

<!-- Projetos -->
<section id="projetos" class="bg-laranja">
	<div class="container">
		<div class="row">

			<div class="col-2 p-0">
				<div class="title-aside-wrapper">
					<h1 class="title-aside m-0 p-0">projetos</h1>
				</div>	
			</div> <!--/.col-2-->

			<div class="col-10 col-lg-10">
				<div class="tablet bg-dark">
					<!--Carousel Wrapper-->
					<div id="carousel-projetos" class="carousel slide" data-ride="carousel-projetos">
						<ol class="carousel-indicators d-none">
						      <!-- <li data-target="#carousel-projetos" data-slide-to="0" class="active"></li>
						      <li data-target="#carousel-projetos" data-slide-to="1"></li>
						      <li data-target="#carousel-projetos" data-slide-to="2"></li> -->
						</ol>
						<div class="carousel-inner">
						    <div class="carousel-item active">
						    	<img class="d-block w-100" src="https://source.unsplash.com/1920x1080/?brand,brands" alt="Slide One">
						    	<div class="carousel-caption">
						    	    <button type="button" class="btn btn-projetos btn-sm" data-toggle="modal" data-target="#gridSystemModal">
									Mais informações</button>
						    	</div>

						    	<!-- Modal -->
						    	<div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel">
						    	  <div class="modal-dialog modal-xl texto-branco" role="document">
						    	    <div class="modal-content bg-laranja">

						    	      <div class="modal-header text-center">
						    	        <h4 class="col-12 modal-title text-center" id="gridModalLabel">Jackson do Pandeiro – 100 anos</h4>
						    	        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
						    	          <span aria-hidden="true">×</span> 
						    	        </button> -->
						    	      </div>

						    	      <div class="modal-body">
						    	        <div class="container-fluid">
						    	          <div class="row">
						    	            <div class="col-12 col-xl-5">
						    	            	<h5> Perfil do projeto</h5>
						    					<p>Turnê musical por 10 cidades brasileiras de diferentes regiões, em homenagem ao centenário de um dos grandes nomes da música popular brasileira e da cultura nordestina – Jackson do Pandeiro.</p>
						    					<h5>Enfoque</h5>
						    					<p>O repertório de Jackson do Pandeiro, neste projeto, receberá novas roupagens, da tradição à modernidade, conectando-se não só ao público apreciador de sua música, mas também atraindo novas plateias e ampliando o alcance do projeto.</p>
						    					<h5>Diferencial</h5>
						    					<p> Convidando jovens artistas e propondo um modelo de show inovador, o projeto busca impactar um público diversificado, envolvendo comunidades locais das regiões que receberão os shows. </p>
						    	            </div>
						    	            <div class="col-12  col-xl-7 ml-auto">
						    	            	<div class="embed-responsive embed-responsive-16by9">
						    	  					<!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=0hsowC5JuvI" allowfullscreen></iframe> -->

						    	  					<iframe  class="embed-responsive-item"  src="https://www.youtube.com/embed/0hsowC5JuvI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						    					</div>
						    	            </div>
						    	          </div>
						    	        </div>
						    	      </div>

						    	      <div class="modal-footer">
						    	        <button type="button" class="btn btn-default waves-effect waves-light texto-branco bg-dark" data-dismiss="modal">Close</button>
						    	      </div>
						    	    </div>
						    	  </div>
						    	</div>
						    	<!-- /.Modal -->
						    </div>

						<div class="carousel-item" >
						        <img class="d-block w-100" src="https://source.unsplash.com/1920x1080/?brand,brands" alt="Slide Two">

						        <div class="carousel-caption">
						        	<button type="button" class="btn btn-projetos btn-sm" data-toggle="modal" data-target="#gridSystemModal">
						        		Mais informações</button>
						        </div>
						  
						</div>
						    <div class="carousel-item">
						        <img class="d-block w-100" src="https://source.unsplash.com/1920x1080/?brand,brands" alt="Slide Three">

						        <div class="carousel-caption">
						        	<button type="button" class="btn btn-projetos btn-sm" data-toggle="modal" data-target="#gridSystemModal">
						        		Mais informações</button>
						        </div>
							</div>


						<a class="carousel-control-prev" href="#carousel-projetos" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carousel-projetos" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						</a>
					</div>
					<!--/.Carousel Wrapper-->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.Projetos -->

<!-- Modal -->
<div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel">
  <div class="modal-dialog modal-xl texto-branco" role="document">
    <div class="modal-content bg-laranja">

      <div class="modal-header text-center">
        <h4 class="col-12 modal-title text-center" id="gridModalLabel">Jackson do Pandeiro – 100 anos</h4>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
          <span aria-hidden="true">×</span> 
        </button> -->
      </div>

      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 col-xl-5">
            	<h5> Perfil do projeto</h5>
				<p>Turnê musical por 10 cidades brasileiras de diferentes regiões, em homenagem ao centenário de um dos grandes nomes da música popular brasileira e da cultura nordestina – Jackson do Pandeiro.</p>
				<h5>Enfoque</h5>
				<p>O repertório de Jackson do Pandeiro, neste projeto, receberá novas roupagens, da tradição à modernidade, conectando-se não só ao público apreciador de sua música, mas também atraindo novas plateias e ampliando o alcance do projeto.</p>
				<h5>Diferencial</h5>
				<p> Convidando jovens artistas e propondo um modelo de show inovador, o projeto busca impactar um público diversificado, envolvendo comunidades locais das regiões que receberão os shows. </p>
            </div>
            <div class="col-12  col-xl-7 ml-auto">
            	<div class="embed-responsive embed-responsive-16by9">
  					<!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=0hsowC5JuvI" allowfullscreen></iframe> -->

  					<iframe  class="embed-responsive-item"  src="https://www.youtube.com/embed/0hsowC5JuvI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default waves-effect waves-light texto-branco bg-dark" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- /.Modal -->

<!-- Parceiros -->
<section id="parceiros">
	<div class="container">
		<div class="row">

			<div class="col-2 p-0">
				<div class="title-aside-wrapper">
					<h1 class="text-uppercase title-aside m-0 p-0">parceiros</h1>
				</div>
			</div>

			<div class="col-10">
				<div class="row">
					<div class="col-12 col-lg-3">
						<h2 class="text-center">CLIENTES E PARCEIROS</h2>
					</div><!--/.container-->
					

					<div class="col-md-12 col-lg-9 d-none d-lg-block d-md-block margin-auto">

						<div class="carousel slide media-carousel" id="media">
							<div class="carousel-inner">
							  <div class="carousel-item  active">
								<div class="row">
								  <div class="col-md-4 margin-auto">
									<img alt="" src="http://placehold.it/150x150">
								  </div>          
								  <div class="col-md-4 margin-auto">
									<img alt="" src="http://placehold.it/150x150">
								  </div>
								  <div class="col-md-4 margin-auto">
									<img alt="" src="http://placehold.it/150x150">
								  </div>        
								</div>
							  </div>
							  <div class="carousel-item">
								<div class="row">
								  <div class="col-md-4 ">
									<img alt="" src="http://placehold.it/150x150">
								  </div>          
								  <div class="col-md-4 ">
									<img alt="" src="http://placehold.it/150x150">
								  </div>

								</div>
							  </div>

							</div>
						</div>
						<a data-slide="prev" href="#media" class="left carousel-control"><span style="display:inline; color: #fe7e00;"><i class="fas fa-chevron-circle-left"></i></span></a>
						<a data-slide="next" href="#media" class="right carousel-control"><span style="display:inline; color: #fe7e00;"><i class="fas fa-chevron-circle-right"></i></span></a>
					</div>
					
					<div class="col-sm-12  d-none d-sm-block d-md-none">
					
						<div class="carousel slide media-carousel" id="media2">
							<div class="carousel-inner">
							  <div class="carousel-item  active ">
								<div class="row">
								  <div class="col-sm-5 margin-auto">
									<img alt="" src="http://placehold.it/150x150">
								  </div>          
								  <div class="col-sm-5 margin-auto">
									<img alt="" src="http://placehold.it/150x150">
								  </div>     
								</div>
							  </div>
							  <div class="carousel-item">
								<div class="row ">
								  <div class="col-sm-5 margin-auto">
									<img alt="" src="http://placehold.it/150x150">
								  </div>          
								  <div class="col-sm-5 margin-auto">
									<img alt="" src="http://placehold.it/150x150">
								  </div> 
								</div>
							  </div>
							  
							  <div class="carousel-item">
								  <div class="col-sm-5 margin-auto">
									<img alt="" src="http://placehold.it/150x150">
								  </div>          
							  </div>

							</div>
						</div>
						<a data-slide="prev" href="#media2" class="left carousel-control"><span style="display:inline; color: #fe7e00;"><i class="fas fa-chevron-circle-left"></i></span></a>
						<a data-slide="next" href="#media2" class="right carousel-control"><span style="display:inline; color: #fe7e00;"><i class="fas fa-chevron-circle-right"></i></span></a>

					</div>
					
					<div class="col-12  d-block d-sm-none ">
					
						<div class="carousel slide media-carousel" id="media3">
							<div class="carousel-inner">
							  <div class="carousel-item  active">
								  <div class="col-12 margin-auto">
									<img alt="" src="http://placehold.it/150x150">
								  </div>                
							  </div>
							  
							  <div class="carousel-item">
								  <div class="col-12 margin-auto">
									<img alt="" src="http://placehold.it/150x150">
								  </div>             
							  </div>
							  
							  <div class="carousel-item">
								  <div class="col-12 margin-auto">
									<img alt="" src="http://placehold.it/150x150">
								  </div>             
							  </div>
							  
							  <div class="carousel-item">
								  <div class="col-12 margin-auto">
									<img alt="" src="http://placehold.it/150x150">
								  </div>             
							  </div>
							  
							  <div class="carousel-item">
								  <div class="col-12 margin-auto">
									<img alt="" src="http://placehold.it/150x150">
								  </div>             
							  </div>
							  
							  <div class="carousel-item">
								  <div class="col-12 margin-auto">
									<img alt="" src="http://placehold.it/150x150">            
								</div>
							  </div>

							</div>
						</div>
						<a data-slide="prev" href="#media3" class="left carousel-control"><span style="display:inline; color: #fe7e00;"><i class="fas fa-chevron-circle-left"></i></span></a>
						<a data-slide="next" href="#media3" class="right carousel-control"><span style="display:inline; color: #fe7e00;"><i class="fas fa-chevron-circle-right"></i></span></a>

					</div>
				</div>
			</div><!--/.col-10-->
		
		</div><!--/.row-->

	</div><!--/.container-->
</section>
<!-- /.Parceiros -->

<!-- Contato -->
<section id="contato" class="bg-laranja">
	<div class="container">
		<div class="row">
			<div class="col-2 p-0"> 
				<div class="title-aside-wrapper"> 
					<h1 class="text-uppercase title-aside m-0 p-0">contato</h1>
				</div>
			</div> 

			<div class="col-10">

				<p class="text-center branco">fale conosco</p>
				<h2 class="text-center branco">Interessado em falar com a gente?</h2>
				<p class="text-center branco">Tire suas dúvidas conosco e fique a um pequeno passo de transformar o futuro através da arte!<p>


				<form>
					<div class="form-row">
						<div class="col-10 col-lg-6 margin-auto">
						  <input type="text" class="formulario form-control mensagem-margin " placeholder="Nome" class="cor-branca">
						</div>
						<div class="col-10 col-lg-6 margin-auto">
						  <input type="email" class="formulario form-control mensagem-margin" placeholder="Email">
						</div>
						<textarea class="formulario form-control mensagem-margin" placeholder="Mensagem" rows="12"></textarea>
						<div class="row margin-auto">
							<button type="submit"  id="enviar" class="mensagem-margin btn btn-primary">Enviar</button>
						</div>
					</div>


				</form>

				
			</div>

		</div>
		

		
	</div>
</section>
<!-- /.Contato -->
	<!-- 
	================================================== -->
	
</main>
	<!-- FOOTER -->
		<footer class="rodape container bg-dark col-12">
			<div class="row">
				<div class="col-4 col-sm-3 col-lg-3" >
					<img id="logo-vertical" src="images/logo-vertical.svg" alt="Núcleo Cultural">
				</div><!--col-10 col-lg-3-->
				
				<div class="col-8 col-sm-9 col-lg-4 rodape">
					<ul>
						<li><span style="display:inline; color: #fff;"> <i class="fas fa-phone laranja"></i>55 (11) 9.6381-8720</span></li>
						<li><span style="display:inline; color: #fff;"> <i class="fas fa-phone laranja"></i>55 (11) 9.7289-4967</span></li>
					</ul>
					
					<ul>
						<li><span style="display:inline; color: #fff;"> <i class="fas fa-map-marker-alt laranja"></i> Rua Francisco Alves, 31</span></li>
						<p><span style="display:inline; color: #fff;">  Suzano</span></p>
						<p><span style="display:inline; color: #fff;">  São Paulo, Brasil</span></p>
					</ul>
					
				</div><!--col-3 col-lg-3-->
					
				<div class="col-7 col-lg-4">
					<p class="text-center rodape branco"> Siga-nos nas redes sociais </p>
					<div class="row rodape">
						<div class="col-3 col-md-2 imagem-redesociais">
							<a href="https://www.facebook.com/nucleoculturalbrasil/" target="_blank">
								<!--<img src="images/facebook.svg" alt="Facebook">-->
								<span style="font-size: 2.5rem; color: #fe7e00;">
									<i class="fab fa-facebook-square"></i>
								</span>
							</a>
						</div>
						<div class="col-3 col-md-2 imagem-redesociais">
							<a href="https://www.instagram.com/nucleocultralbrasil/" target="_blank">
								<!--<img src="images/instagram.svg" alt="Instagram">-->
								<span style="font-size: 2.5rem; color: #fe7e00;">
									<i class="fab fa-instagram"></i>
								</span>
							</a>
						</div>
						<div class="col-3 col-md-2 imagem-redesociais">
							<a href="https://www.youtube.com/channel/UCHaG5NCZR07j8255sZCYcyA/featured" target="_blank">
								<!--<img src="images/youtube.svg" alt="Youtube">-->
								<span style="font-size: 2.5rem; color: #fe7e00;">
									<i class="fab fa-youtube-square"></i>
								</span>
							</a>
						</div>
						<div class="col-3 col-md-2 imagem-redesociais">
							<a href="https://pt.linkedin.com/company/nucleoculturalproducoes" target="_blank">
								<!--<img src="images/linkedin.svg" alt="Linkedin">-->
								<span style="font-size: 2.5rem; color: #fe7e00;">
									<i class="fab fa-linkedin"></i>
								</span>
							</a>
						</div><!--/.col-4 col-md-2 imagem-->
					</div><!--/.row-->
					<p class="text-center rodape branco">contato@nucleocultural.com </p>
				</div><!--col-6 col-lg-6-->
				
				<a href="#" ><span style="font-size: 4rem; color: #808080;"><i class="fas fa-arrow-circle-up"></i></span></a>
				
				<div class="col-12">
					<!--<div class="row">-->
						<p class="text-center branco">&copy; 2018-2019 Núcleo Cultural, Inc. &middot; </p>
					<!--</div>	-->
				</div>
			</div><!--row-->
		</footer>
</main>

	<!-- JS FILES -->


	<!-- <script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/parceiros.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script> -->

	<?php wp_footer(); ?>
	</body>
</html>