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
	<span onclick="closeAlert()" class="fechar__form"><i class="fa-solid fa-xmark"></i></span>
	<form onsubmit="addContact(event, this)" action="javascript:void(0)">
		<h3 class="title">
			Você tem um projeto<br> especial?
		</h3>
		<span class="space"></span>
		<p class="text">
			Preencha o formulário para solicitar um atendimento de um de
			nossos especialistas. Retornaremos o mais rápido possível.
		</p>
		<span class="space"></span>
		<label class="dialog__lb ">
			<i class="fa-solid fa-user"></i>
			<input class="js_dialog_name" type="text" name="name" placeholder="Nome completo" required>
		</label>
		<label class="dialog__lb ">
			<i class="fa-solid fa-phone"></i>
			<input class="js_dialog_phone" type="tel" name="tel" placeholder="Telefone" oninput="mascaraTelefone(this)" maxlength="15" required>
		</label>
		<label class="dialog__lb ">
			<i class="fa-solid fa-envelope"></i>
			<input class="js_dialog_email" type="email" name="email" placeholder="error@mail.com" required>
		</label>
		<label class="dialog__lb ">
			<i class="fa-solid fa-building"></i>
			<input class="js_dialog_empresa" type="text" name="empresa" placeholder="Nome da empresa" required>
		</label>
		<label class="dialog__lb ">
			<i class="fa-solid fa-wallet"></i>
			<input class="js_dialog_cnpj" type="text" name="cnpj" placeholder="CNPJ" oninput="mascaraCNPJ(this)" maxlength="18" required>
		</label>
		<label class="dialog__lb ">
			<i></i>
			<textarea class="js_dialog_desc" name="desc" rows="3" placeholder="Descreva brevemente sobre seu projeto...." required></textarea>
		</label>
		<span class="long-space"></span>
		<div class="text__center">
			<div>
				<div class="news__alert js_lead_alert" hidden><i class="fa-solid fa-circle-info"></i><span>Alert</span></div>
			</div>
			<button class="btn gradient-1" type="submit">SOLICITAR AGORA</button>
		</div>
	</form>
</dialog>