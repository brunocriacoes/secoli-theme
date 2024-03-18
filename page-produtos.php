
<?php
/*
Template Name: Smartlead lista de produtos
*/
?>

<?php get_header(); ?>
<?php 
	$url = API_SMARTLEAD . '/wp-json/smartlead-api/v1/categorias';

	$response = file_get_contents( $url );
	$response = json_decode($response, true);
	$id = $_GET['cat'];
	$url_prod = API_SMARTLEAD . '/wp-json/smartlead-api/v1/produtos-categoria-id/?categoria_id='.$id;

	$response_prod = file_get_contents( $url_prod );
	
	$response_prod = json_decode($response_prod, true);

?>
		<div class="full">
			<div class="container">
				<div class="menu__category">
					<a class="text" href="./index.html">Home</a>
					<span>/</span>
					<a class="text" href="./produtos.html">Produtos</a>
					<span>/</span>
					<a class="text" href="./produtos.html?c=Categoria X">Categoria X</a>
					<span>/</span>
				</div>

				<h3 class="title">Categoria X</h3>

				<div class="grid_produtos">
					<div class="categorias">
						<strong style="cursor:pointer;">CATEGORIAS <i class="fa-solid fa-plus" id="iconCategorias"></i></strong>
						<ul id="listaCategorias">
							<?php foreach($response as $cat){ ?>
								<li id="categoriaMae">
									<span style="cursor:pointer;">
										<a href="produtos/?cat=<?php echo $cat['id'] ?>">
											<?php echo $cat['name'] ?>
										</a>
										<i class="fa-solid fa-plus" id="iconCategoriaMae"></i>
									</span>
									<ul class="subcategorias">
										<?php foreach($cat["subcategories"] as $sub){?>
											<li><a href="produtos/?cat=<?php echo $sub['id'] ?>"><span><?php echo $sub['name'] ?></span></a></li>
										<?php } ?>
									</ul>
								</li>
							<?php } ?>
						</ul>
					</div>

					<div>
						<div class="produtos">
							<div class="grid c-1 lg-c-4">
								<?php foreach($response_prod as $produto){ ?>
									<div class="produto">
										<a href="produto?id=<?php echo $produto['id'] ?>">
											<img src="https://app.secolibrindes.com.br/<?php echo $produto['photos'][0]['path'] ?>" alt="<?php echo $produto['name'] ?>" />
										</a>
										<small> <?php echo $produto['cod'] ?> </small>
										<strong>
											<?php echo $produto['name'] ?>
										</strong>
										<span class="space"></span>
										<a class="btn gradient-1 btn__orcamento"  
											onclick="return cart.add('<?php echo $produto['id'] ?> ',
												'<?php echo $produto['name'] ?>',
												'https:\/\/app.secolibrindes.com.br\/<?php echo $produto['photos'][0]['path'] ?>', '<?php echo $produto['cod'] ?>', '', 'color', '<?php echo $_GET['cat']?>')" 
											href="carrinho">
											<i class="fa-solid fa-cart-plus"></i>
											<span>ORÇAR ESTE PRODUTO</span>
										</a>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<span class="long-space"></span>
		<div class="full">
			<div class="container">
				<div class="expand__produtos">
					<a class="text" href=""><i class="fa-regular fa-circle-down"></i><span>Expandir para mais
							produtos</span></a>
					<span class="text">Não está encontrando o que procura?</span>
					<a class="btn gradient-1" href="./media/catalogo.pdf">BAIXE O CATÁLOGO DIGITAL</a>
				</div>
			</div>
		</div>
		<span class="long-space"></span>
		<div class="full idealize__bg">
			<div class="container">
				<div class="grid c-1 lg-c-2">
					<div></div>
					<div>
						<h3 class="title">
							Especialistas na <br />
							criação de brindes <br />
							personalizados.
						</h3>
						<span class="space"></span>
						<p class="text">
							Conquistado o equilíbrio entre a mais moderna
							tecnologia e o cuidado da manufatura artesanal,
							a Secoli se diferencia também por sua
							versatilidade e especialidade em criar produtos
							personalizados exclusivos
						</p>
						<span class="long-space"></span>
						<span class="long-space"></span>
						<a class="btn gradient-1" href="./contato.html">
							AGENDAR CONTATO
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="full tecnologia__bg">
			<div class="container">
				<div class="grid c-1 lg-c-2">
					<div>
						<h2 class="title">
							Tecnologia, <br />
							modernidade e <br />
							pessoas.
						</h2>
						<span class="space"></span>
						<p class="text">
							Conquistado o equilíbrio entre a mais moderna
							tecnologia e o cuidado da manufatura artesanal,
							a Secoli se diferencia também por sua
							versatilidade e especialidade em criar produtos
							personalizados exclusivos
						</p>
						<span class="long-space"></span>
						<span class="long-space"></span>
						<a class="btn gradient-1" href="./que-somos.html">
							CONHEÇA A SECOLI
						</a>
					</div>
				</div>
			</div>
		</div>
		<span class="long-space"></span>
		<div class="full gradient-1 contact__bg">
			<div class="container">
				<div class="grid c-1 lg-c-2 v-center">
					<div>
						<h3 class="title">Ainda tem dúvidas?</h3>
						<p class="text">
							Clique no botão e agende uma conversa com um de
							nossos consultores especialistas em brindes
							personalizados.
						</p>
					</div>
					<div class="contact__btn">
						<a class="btn btn__black" href="javascript:void(0)" onclick="agendar_contato()">
							<b>AGENDAR CONTATO</b>
						</a>
					</div>
				</div>
			</div>
		</div>

		<dialog class="dialog__bg" close id="favDialog">
			<form action="javascript:void(0)" method="post">
				<h3 class="title">Você tem um projeto especial?</h3>
				<span class="space"></span>
				<p class="text">
					Preencha o formulário para solicitar um atendimento de
					um de nossos especialistas. Retornaremos o mais rápido
					possível.
				</p>
				<span class="space"></span>
				<label class="dialog__lb">
					<i class="fa-solid fa-user"></i>
					<input type="text" name="name" placeholder="Nome completo" />
				</label>
				<label class="dialog__lb">
					<i class="fa-solid fa-phone"></i>
					<input type="tel" name="tel" placeholder="Telefone" />
				</label>
				<label class="dialog__lb">
					<i class="fa-solid fa-envelope"></i>
					<input type="email" name="email" placeholder="error@mail.com" />
				</label>
				<label class="dialog__lb">
					<i class="fa-solid fa-building"></i>
					<input type="text" name="empresa" placeholder="Nome da empresa" />
				</label>
				<label class="dialog__lb">
					<i class="fa-solid fa-wallet"></i>
					<input type="text" name="cnpj" placeholder="CNPJ" />
				</label>
				<label class="dialog__lb">
					<i></i>
					<textarea name="desc" rows="3" placeholder="Descreva brevemente sobre seu projeto...."></textarea>
				</label>
				<div class="text__right">
					<span class="long-space"></span>
					<button class="btn gradient-1" onclick="close_contato()" type="submit">
						SOLICITAR AGORA
					</button>
				</div>
			</form>
		</dialog>

<?php get_footer(); ?>