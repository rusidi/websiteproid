<div class="row">
    <div class="col-md-12">
         <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">New Social Media</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url('admin/frontpage/add_social_media')?>" method="post">
                <div class="box-body">
                    <?php echo message_box(validation_errors(),'danger'); ?>
                    <div class="form-group">
                        <label for="category_name">Email Address</label>
                        <?php echo form_input(array('name' => 'email_address','class' => 'form-control', 'value' => set_value('email_address'))); ?>
                    </div>
                     <div class="form-group">
                        <label for="category_name">Phone</label>
                        <?php echo form_input(array('name' => 'phone','class' => 'form-control', 'value' => set_value('phone'))); ?>
                    </div>
                    <div class="form-group">
                        <label for="category_name">Show Logo</label>
                        <?php echo form_checkbox(array('name' => 'show_logo','class' => '', 'value' => 1)); ?>
                    </div>
                    <div class="form-group">
                        <label for="category_name">Active?</label>
                        <?php echo form_checkbox(array('name' => 'is_active','class' => '', 'value' => 1)); ?>
                    </div>
                    <div class="form-group">
                        <label for="category_name">Facebook</label>
                        <?php echo form_input(array('name' => 'facebook','class' => 'form-control', 'value' => set_value('facebook'))); ?>
                    </div>
                    <div class="form-group">
                        <label for="category_name">Twitter</label>
                        <?php echo form_input(array('name' => 'twitter','class' => 'form-control', 'value' => set_value('twitter'))); ?>
                    </div>
                    <div class="form-group">
                        <label for="category_name">Google plus</label>
                        <?php echo form_input(array('name' => 'google_plus','class' => 'form-control', 'value' => set_value('google_plus'))); ?>
                    </div>
                     <div class="form-group">
                        <label for="category_name">Instagram</label>
                        <?php echo form_input(array('name' => 'instagram','class' => 'form-control', 'value' => set_value('instagram'))); ?>
                    </div>
                     <div class="form-group">
                        <label for="category_name">Linkedin</label>
                        <?php echo form_input(array('name' => 'linkedin','class' => 'form-control', 'value' => set_value('linkedin'))); ?>
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