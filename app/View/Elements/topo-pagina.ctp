<div class="row">
	<div class="col-md-12">
		<h2 class="page-header">
			<?php echo isset($controllerName) ? $controllerName : "" ; ?><small><?php echo isset($action) ? " - " . $action : ""; ?></small>
			<small>
				<a href="<?php echo $this->base . '/' . $controller ;?>/adicionar" class="btn btn-primary pull-right">Adicionar</a>
			</small>
		</h2>
	</div>
</div>