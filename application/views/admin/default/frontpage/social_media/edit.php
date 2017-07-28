<div class="row">
    <div class="col-md-12">
         <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit Social Media</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url('admin/frontpage/edit_social_media')?>" method="post">
            <?php echo form_hidden('id', $data['id']) ?>
                <div class="box-body">
                    <?php echo message_box(validation_errors(),'danger'); ?>
                    
                     <div class="form-group">
                        <label for="category_name">Name</label>
                        <?php echo form_input(array('name' => 'email_address','class' => 'form-control', 'value' => set_value('name', isset($data['email_address']) ? $data['email_address'] : ''))); ?>
                    </div>
                     <div class="form-group">
                        <label for="category_name">Phone</label>
                        <?php echo form_input(array('name' => 'phone','class' => 'form-control', 'value' => set_value('name', isset($data['phone']) ? $data['phone'] : ''))); ?>
                    </div>
                    <div class="form-group">
                        <label for="category_name">Show Logo</label>
                        <?php echo form_checkbox(array('name' => 'show_logo','class' => '', 'value' => 1,'checked' => set_value('name', ($data['show_logo'] == 1) ? 'checked' : ''))); ?>
                    </div>
                    <div class="form-group">
                        <label for="category_name">Active?</label>
                        <?php echo form_checkbox(array('name' => 'is_active','class' => '', 'value' => 1,'checked' => set_value('name', ($data['is_active'] == 1) ? 'checked' : ''))); ?>
                    </div>
                    <div class="form-group">
                        <label for="category_name">Facebook</label>
                        <?php echo form_input(array('name' => 'facebook','class' => 'form-control', 'value' => set_value('name', isset($data['facebook']) ? $data['facebook'] : ''))); ?>
                    </div>
                    <div class="form-group">
                        <label for="category_name">Twitter</label>
                        <?php echo form_input(array('name' => 'twitter','class' => 'form-control', 'value' => set_value('name', isset($data['twitter']) ? $data['twitter'] : ''))); ?>
                    </div>
                    <div class="form-group">
                        <label for="category_name">Google plus</label>
                        <?php echo form_input(array('name' => 'google_plus','class' => 'form-control', 'value' => set_value('name', isset($data['google_plus']) ? $data['google_plus'] : ''))); ?>
                    </div>
                    <div class="form-group">
                        <label for="category_name">Instagram</label>
                        <?php echo form_input(array('name' => 'instagram','class' => 'form-control', 'value' => set_value('name', isset($data['instagram']) ? $data['instagram'] : ''))); ?>
                    </div>
                    <div class="form-group">
                        <label for="category_name">Linkedin</label>
                        <?php echo form_input(array('name' => 'linkedin','class' => 'form-control', 'value' => set_value('name', isset($data['linkedin']) ? $data['linkedin'] : ''))); ?>
                    </div>

                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button> 
                    <button type="button" class="btn btn-default" onclick="javascript:history.back()">Back</button>
                </div>
            </form>
        </div><!-- /.box -->
    </div>
</div>
