<input type="radio" name="lenguaje" id="" value="todos">Todos<br>
<input type="radio" name="lenguaje" id="" value="algunos">Algunos<br>
<input type="radio" name="lenguaje" id="" value="ninguno">Ninguno<br>


<style type="text/css">
	*{
	margin: 0px;
	padding: 0px;
	font-family: arial;
}

p#texto{
	text-align: center;
	color: white;
}

div#boton{
		position: relative;
		margin: 50px;
		padding: 10px;
		width: 150px;
		background-color: #024959;
		-webkit-border-radius: 5px;
		-webkit-box-shadow: 0px 3px 0px #000;
	}

input#Aceptar{
	position: absolute;
	top: 0px;
	left: 0px;
	right: 0px;
	bottom: 0px;
	width: 100%;
	height: 100%;
	opacity: 0;
}
</style>
<div id="boton">
	<p id="texto">Aceptar</p>
<input type="submit" id="Aceptar">
</div>
