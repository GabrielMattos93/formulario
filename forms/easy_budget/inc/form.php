<?php

	
	if ($validFormDisplay)
	{
	

		echo '
		<div id="contactForm">
			<div class="header">Brutecode | Desenvolvimento Web.</div> 
		
			<div class="body">';
			if ($successSent) echo '<div id="successMessage">'.$successMessage.'</div>';
		
		echo '
			<div class="desc">Preencha todas as informações abaixo para agilizarmos seu atendimento. <span style="color:red">*</span></div><br />
			<form action="'.htmlspecialchars($_SERVER['PHP_SELF']).'" method="post"  '.$formEnctype.'  >';
			
			foreach ($easyForm->field as $varName => $arrValue) {
					$easyForm->displayField($varName, $successSent);
			}
		
		echo '
				
				<br/>
				<center>
				<input name="submit" type="submit" id="submit" value="Enviar Solicitação" />
				</center>
				<br/>
				<br/>
			</form>
			</div> 
		</div>';		
	
	}
	else
	{
		echo "Este não é o formulário!";
	}


?>