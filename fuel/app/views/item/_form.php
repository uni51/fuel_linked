<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Item name', 'item_name', array('class'=>'control-label')); ?>

				<?php echo Form::input('item_name', Input::post('item_name', isset($item) ? $item->item_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Item name')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>