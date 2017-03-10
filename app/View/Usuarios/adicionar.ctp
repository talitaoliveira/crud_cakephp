<div class="row">
	<div class="col-lg-6">

		<?php
			echo $this->Form->create( "Usuario", 		array( 'id' => 'form', 'role' => 'form', 'inputDefaults' => array( 'error' => array( 'attributes' => array('class' => 'msg msg-falha clearfix meia-largura') ) ) ) );
			echo $this->Form->input( "Usuario.nome",  	array( 'class' => 'form-control', 'div' => 'form-group'));
			echo $this->Form->input( "Usuario.login",  	array( 'type' => 'text', 'class' => 'form-control', 'div' => 'form-group'));
			echo $this->Form->input( "Usuario.email",  	array( 'type' => 'email', 'class' => 'form-control', 'div' => '
				form-group'));
			echo $this->Form->input( "Usuario.ramal",  	array( 'type' => 'text', 'class' => 'form-control', 'div' => 'form-group'));
			echo $this->Form->submit( "Salvar", 		array( 'class' => 'btn btn-primary btn-large'));
			echo $this->Form->end();
		?>

	</div>
</div>