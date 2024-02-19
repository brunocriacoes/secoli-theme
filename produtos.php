

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
						<ul id="listaCategorias" style="display: none;">
							<li id="categoriaMae">
								<span style="cursor:pointer;">Categoria Mãe <i class="fa-solid fa-plus"
										id="iconCategoriaMae"></i></span>
								<ul class="subcategorias" style="display: none;">
									<li><a href="#"><span>Categoria 1</span></a></li>
									<li><a href="#"><span>Categoria 2</span></a></li>
									<li><a href="#"><span>Categoria 3</span></a></li>
								</ul>
							</li>
						</ul>
					</div>

					<div>
						<div class="produtos">
							<div class="grid c-1 lg-c-4">
								<div class="produto" app-repeat="produtos">
									<a href="./produto.html">
										<img src="./media/catalogo/AGE-1901A.jpg" alt="" />
									</a>
									<small> AGE-1901A </small>
									<strong>
										Bolsa Feminina em couro com alça
										duas cores
									</strong>
									<span class="space"></span>
									<a class="btn gradient-1 btn__orcamento"  onclick="return cart.add('{{sku}}', '{{title}}', '{{img}}', '{{sku}}', 'description', 'color', '{{cat_prod}}')" href="./carrinho.html">
										<i class="fa-solid fa-cart-plus"></i>
										<span>ORÇAR ESTE PRODUTO</span>
									</a>
								</div>
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

		