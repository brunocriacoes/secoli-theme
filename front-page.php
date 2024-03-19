<?php
/*
Template Name: Página HOME
*/
?>

<?php get_header() ?>

<?php

$opcoes = get_option('secoli_theme_info');

?>
	<?php include __DIR__ . '/parts/banner.php' ?>

	<div class="long-space"></div>

	<div class="full personalizados__bg">
		<div class="container">
			<h2 class="title text-center ">
				Surpreenda seus clientes e seja lembrado
			</h2>
			<span class="long-space"></span>
			<div class="grid c-1 lg-c-2 v-center">
				<div>
					<h2 class="title ">
						Conheça a nossa linha de brindes e presentes personalizados.
					</h2>
					<span class="space"></span>
					<p class="text">
						Presenteie seus clientes com produtos exclusivos,
						de qualidade superior e alto nível de customização.
					</p>
					<span class="long-space"></span>
					<a class="btn gradient-1" href="./produtos.html">
						SAIBA MAIS
					</a>
				</div>
				<div class="grid c-3 personalizados__img">
					<?php foreach([
						 "Porta-Cartao-10417-114115.jpg",
						 "Agenda-7681d1-1533567506.jpg",
						 "Caderno-AMARELA-902-1508516757.png",
						 "PBL-803.jpg",
						 "Necessaire-10847-174021.jpg",
						 "Porta-documento-7624-141922.jpg"
					] as $photo){ ?>
						<div>
							<img src="<?php __F("media/catalogo/{$photo}") ?>">
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

	<?php # include __DIR__ . '/parts/anuncio.php' ?>

	<?php include __DIR__ . '/parts/destaque.php' ?>

	<div class="full idealize__bg">
		<div class="container">
			<h3 class="title text-center">
				Procurando algo mais específico?
			</h3>
			<span class="long-space"></span>
			<span class="long-space"></span>
			<div class="grid c-1 lg-c-2">
				<div></div>
				<div>
					<h3 class="title">
						Idealize e realize seu <br>
						projeto com a Secoli.
					</h3>
					<span class="space"></span>
					<p class="text">
						Somos especialistas no desenvolvimento
						de projetos especiais.
					</p>
					<span class="long-space"></span>
					<span class="long-space"></span>
					<a class="btn gradient-1">
						FALE COM UM DOS NOSSOS ESPECIALISTAS
					</a>
				</div>
			</div>
		</div>
	</div>

	<span class="long-space"></span>

	<?php include __DIR__ . '/parts/anuncio.php' ?>

	<div class="full">
		<div class="container">
			<div class="long-space"></div>
			<div class="long-space"></div>
			<div class="grid c-1 md-c-2  v-center">
				<div>
					<h2 class="title">
						Porque escolher a Secoli?
					</h2>
					<span class="space"></span>
					<p class="text">
						Conquistado o equilíbrio entre a mais moderna tecnologia e o cuidado da manufatura
						artesanal, a Secoli se diferencia também por sua versatilidade e especialidade
						em criar produtos personalizados exclusivos
					</p>
					<span class="long-space"></span>
					<a class="btn gradient-1" href="">SAIBA MAIS</a>
				</div>
				<div class="text-center">
					<div class="video-mask">
						<video autoplay loop muted class="video">
							<source src="<?php __F('assets/images/video.mp4') ?>" type="video/mp4">
						</video>
					</div>
					<div class="text-center">
						<span class="space"></span>
						<img src="<?php __F('assets/images/logo.svg') ?>" height="50" alt="secoli">
					</div>
				</div>
			</div>
			<div class="long-space"></div>
			<div class="long-space"></div>
		</div>
	</div>

	<?php include __DIR__ . '/parts/empresas.php' ?>

	<?php include __DIR__ . '/parts/equipe.php' ?>

	<div class="full gradient-1 contact__bg">
		<div class="container">
			<div class="grid c-1 lg-c-2 v-center">
				<div>
					<h3 class="title">
						Ainda tem dúvidas?
					</h3>
					<p class="text">
						Clique no botão e agende uma conversa com um de
						nossos consultores especialistas em brindes personalizados.
					</p>
				</div>
				<div class="contact__btn">
					<a class="btn btn__black" href="javascript:void(0)" onclick="agendar_contato()">
						<b>
							AGENDAR CONTATO
						</b>
					</a>
				</div>
			</div>
		</div>
	</div>

	<dialog class="dialog__bg" close id="favDialog">
		<form method="dialog">
			<h3 class="title">
				Você tem um projeto especial?
			</h3>
			<span class="space"></span>
			<p class="text">
				Preencha o formulário para solicitar um atendimento de um de
				nossos especialistas. Retornaremos o mais rápido possível.
			</p>
			<span class="space"></span>
			<label class="dialog__lb">
				<i class="fa-solid fa-user"></i>
				<input type="text" name="name" placeholder="Nome completo">
			</label>
			<label class="dialog__lb">
				<i class="fa-solid fa-phone"></i>
				<input type="tel" name="tel" placeholder="Telefone">
			</label>
			<label class="dialog__lb">
				<i class="fa-solid fa-envelope"></i>
				<input type="email" name="email" placeholder="error@mail.com">
			</label>
			<label class="dialog__lb">
				<i class="fa-solid fa-building"></i>
				<input type="text" name="empresa" placeholder="Nome da empresa">
			</label>
			<label class="dialog__lb">
				<i class="fa-solid fa-wallet"></i>
				<input type="text" name="cnpj" placeholder="CNPJ">
			</label>
			<label class="dialog__lb">
				<i></i>
				<textarea name="desc" rows="3" placeholder="Descreva brevemente sobre seu projeto...."></textarea>
			</label>
			<div class="text__right">
				<span class="long-space"></span>
				<button class="btn gradient-1" onclick="close_contato()" type="submit">SOLICITAR AGORA</button>
			</div>
		</form>
	</dialog>

	<div class="full">
		<span class="long-space"></span>
		<div class="container">
			<div class="text__right">
				<a class="btn gradient-1 " target="_blank" rel="noopener noreferrer" href="">
					Siga a Secoli no Instagram
				</a>
				<span class="long-space"></span>
			</div>
			<div class="grid c-1 lg-c-2">
				<div>
					<h3 class="title">
						Siga a Secoli nas redes.
					</h3>
					<p class="text">
						Acompanhe conteúdos atualizados em nossas redes sociais.
					</p>
					<span class="long-space"></span>
					<div>
						<a class="social__link" href="<?php echo $opcoes['facebook'] ?>" target="_blank" rel="noopener noreferrer">
							<i class="fa-brands fa-instagram"></i>
						</a>
						<a class="social__link" href="<?php echo $opcoes['twitter'] ?>" target="_blank" rel="noopener noreferrer">
							<i class="fa-brands fa-twitter"></i>
						</a>
						<a class="social__link" href="<?php echo $opcoes['instagram'] ?>" target="_blank" rel="noopener noreferrer">
							<i class="fa-brands fa-facebook"></i>
						</a>
					</div>
				</div>
				<div class="grid c-3">
				<?php
					if ( is_active_sidebar( 'secoli-widget-footer' ) ) { 
						dynamic_sidebar( 'secoli-widget-footer' ); 
					}
				?>
				</div>
			</div>
		</div>
		<span class="long-space"></span>
	</div>

<?php get_footer() ?>