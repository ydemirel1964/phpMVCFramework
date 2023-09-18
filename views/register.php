<?php echo \app\core\form\Form::begin('', 'POST'); ?>
<?php ?>
<div class="form-group">
    <label for="firstName">First Name</label>
    <input type="text" name="firstName" id=""
        class="form-control<?php echo $model->hasError('firstName') ? ' is-invalid' : ''; ?> ">
    <div class="invalid_feedback">
        <?php echo $model->getFirstError('firstName'); ?>
    </div>
</div>
<div class="form-group">
    <label for="lastName">Last Name</label>
    <input type="text" name="lastName" class="form-control">
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" class="form-control">
</div>
<div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control">
</div>
<div class="form-group">
    <label for="passwordConfirm">Confirm Password</label>
    <input type="password" name="passwordConfirm" class="form-control">
</div>
<button type="submit" class='btn btn-primary'>Submit</button>
<?php echo \app\core\form\Form::end(); ?>