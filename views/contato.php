<h1>Contato</h1>

<div class="msg"></div>

<form method="POST" onsubmit="return false">
	Nome:<br/>
	<input type="text" name="nome" /><br/><br/>

	E-mail:<br/>
	<input type="email" name="email" /><br/><br/>

	Mensagem:<br/>
	<textarea name="mensagem"></textarea><br/><br/>

	<input type="submit" value="Enviar Mensagem" onclick="enviarEmail()" />
</form>

