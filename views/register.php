<?php $form = \app\core\form\Form::begin('', 'POST'); ?>
<?php echo $form->field($model, 'firstName'); ?>
<?php echo $form->field($model, 'lastName'); ?>
<?php echo $form->field($model, 'email'); ?>
<?php echo $form->field($model, 'password')->passwordField(); ?>
<?php echo $form->field($model, 'passwordConfirm')->passwordField(); ?>
<button type="submit" class='btn btn-primary'>Submit</button>
<?php \app\core\form\Form::end(); ?>