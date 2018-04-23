<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
    <div class="box-body">
        <div class="form-group">
            <?= $form->field($model, 'email') ?>
        </div>
        <div class="form-group">
            <?= $form->field($model, 'password') ?>
        </div>
    </div>
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
<?php $form = ActiveForm::end(); ?>