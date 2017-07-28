<div class="row">
    <div class="col-md-12">
         <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">New Testimoni</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url('admin/frontpage/add_testimoni')?>" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <?php echo message_box(validation_errors(),'danger'); ?>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <?php echo form_input(array('name' => 'name','class' => 'form-control', 'value' => set_value('name'))); ?>
                    </div>
                     <div class="form-group">
                        <label for="job_title">Job Title</label>
                        <?php echo form_input(array('name' => 'job_title','class' => 'form-control', 'value' => set_value('job_title'))); ?>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <?php echo form_input(array('name' => 'description','class' => 'form-control', 'value' => set_value('description'))); ?>
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <?php echo form_upload(array('name' => 'photo','class' => 'form-control')); ?>
                    </div>
                     <div class="form-group">
                        <label for="is_active">Active?</label>
                        <?php echo form_checkbox(array('name' => 'is_active','class' => '', 'value' => 1)); ?>
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