<?php echo strtolower($model) ;?>

<?php if(isset($lista)) { ?>
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
		<?php foreach ($lista as $item) { ?>
		<tr>
			<td><?php echo $item['Usuario']['id'] ?></td>
			<td><?php echo $item['Usuario']['nome'] ?></td>
			<td><?php echo $item['Usuario']['email'] ?></td>
			<td><?php echo $item['Usuario']['login'] ?></td>
			<td><?php echo $item['Usuario']['ramal'] ?></td>
			<td>
				<a href="<?php echo $this->Html->url(array("controller" => "usuarios", "action" => "alterar"));?>/<?php echo $item["Usuario"]["id"];?>">
					<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
				</a> |
				<?php //echo $this->Form->postLink(
					//'<i class="fa fa-trash-o" aria-hidden="true"></i>',
					//array('escape' => false),
					//array('action' => 'excluir', $item['Usuario']['id']),
					//array('confirm' => 'Tem certeza que deseja excluir o registro ' . $item['Usuario']['id'] . '?'))?>

					<?php echo $this->Html->link(
					'<i class="fa fa-trash-o" aria-hidden="true"></i>',
					array("controller" => "usuarios", 'action' => 'excluir', $item['Usuario']['id']),
					array('confirm' => 'Tem certeza que deseja excluir o registro ' . $item['Usuario']['id'] . '?')
					);?>

				<!-- <a href="<?php echo $this->Html->url(array("controller" => "usuarios", "action" => "excluir"));?>/<?php echo $item["Usuario"]["id"];?>">
					
				</a> -->
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<?php echo $this->Paginator->numbers(array('first' => 'Primeira Página'));?>
<?php } ?>