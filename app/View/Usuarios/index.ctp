<?php echo strtolower($model) ;?>

<?php if(isset($usuarios)) { ?>
<table class="table table-hover">
	<thead>
		<tr>
			<th></th>
			<th>Nome</th>
			<th>Email</th>
			<th>Login</th>
			<th>Telefone</th>
			<th>Ações</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($usuarios as $usuario) { ?>
		<tr>
			<td><?php echo $usuario['Usuario']['id'] ?></td>
			<td><?php echo $usuario['Usuario']['nome'] ?></td>
			<td><?php echo $usuario['Usuario']['email'] ?></td>
			<td><?php echo $usuario['Usuario']['login'] ?></td>
			<td><?php echo $usuario['Usuario']['ramal'] ?></td>
			<td>
				<a href="<?php echo "ola" ;?>/alterar/<?php echo $usuario["Usuario"]["id"];?>">
					<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
				</a> |
				<a href="<?php echo strtolower($model) ;?>/excluir/<?php echo $usuario["Usuario"]["id"];?>">
					<i class="fa fa-trash-o" aria-hidden="true"></i>
				</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<?php echo $this->Paginator->numbers(array('first' => 'Primeira Página'));?>
<?php } ?>