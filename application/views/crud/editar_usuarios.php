<html>
	<head>
		<style>
			.formulario h2 {
			    background: none repeat scroll 0 0 #F3F3F3;
			    border-radius: 5px;
			    color: #5CD053;
			    display: block;
			    font-family: sans-serif;
			    font-size: 20px;
			    padding: 5px;
			    text-shadow: 1px 1px 1px #CCCCCC;
			    width: 433px;
			}

			/*--- estilos para los ul y li del formulario ---*/
			.formulario ul {
			    width:750px;
			    list-style-type:none;
			    margin:0px;
			    padding:0px;
			}
			.formulario li{
			    padding:12px;
			    border-bottom:1px solid #eee;
			    position:relative;
			}


			.formulario label {
			    color: #555555;
			    display: inline-block;
			    float: left;
			    font-family: sans-serif;
			    font-size: 13px;
			    font-weight: bold;
			    margin-top: 3px;
			    padding: 3px;
			    width: 90px;
			}


			.formulario input {
			    height:37px;
			    width:310px;
			    padding:5px 8px;
			}
			.formulario textarea {
			    padding:8px;
			    width:300px;
			}
			.formulario button {
			    margin-left:288px;
			    width: 116px;
			    padding: 10px;
			}


			/*----- estilos visuales de los elementos --------*/
			.formulario input, .formulario textarea {
			    border:1px solid #aaa;
			    box-shadow: 0px 0px 3px #ccc, 0 10px 15px #eee inset;
			    border-radius:2px;
			    color: #888;
			    font-size: 12px;
			    padding-right:30px;
			    -moz-transition: padding .25s;
			    -webkit-transition: padding .25s;
			    -o-transition: padding .25s;
			    transition: padding .25s;
			}
			.formulario input:focus, .formulario textarea:focus {
			    background: #fff;
			    border:1px solid #555;
			    box-shadow: 0 0 3px #aaa;
			    padding-right:80px;
			}
			a{
				text-decoration: none;
			}
			a .back {
				width: 96px;
				height: 54px;
			}
		</style>
	</head>
	<body>		
		<form class="formulario" action="<?php echo base_url(); ?>users/edit/<?php echo $usuario[0]->id_user; ?>" method="post">
		    <ul>
		       <li>
		            <h2><?php echo ($msg=="")?"Datos del Usuario":$msg; ?></h2>
		       </li>
		       <li>
		           <label for="name">Nombre completo:</label>
		           <input type="text"  name="name" placeholder="HelpersPHP"  value="<?php echo $usuario[0]->name; ?>" required/>
		       </li>
		       <li>
		           <label for="email">Correo electronico:</label>
		           <input type="email" name="email" placeholder="contacto@helpersphp.com"  value="<?php echo $usuario[0]->email; ?>" required/>
		       </li>
		       <li>
		           <label for="website">Sitio Web:</label>
		           <input type="url" name="web" placeholder="http://helpersphp.com/"  value="<?php echo $usuario[0]->web; ?>" required/>
		       </li>
		        <li>
		          <label for="website"><a href="<?php echo base_url(); ?>users/">
		          <img class="back" src="<?php echo base_url(); ?>/assets/regresar.gif">
		          </a></label>
		          <button class="submit" type="submit">Enviar</button>
		        </li>
		    </ul>
		</form>
	</body>
</html>