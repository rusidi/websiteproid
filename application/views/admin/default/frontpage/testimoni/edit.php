<div class="row">
    <div class="col-md-12">
         <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit Testimoni</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url('admin/frontpage/edit_testimoni')?>" method="post" enctype="multipart/form-data">
            <?php echo form_hidden('id', $data['id']) ?>
                <div class="box-body">
                    <?php echo message_box(validation_errors(),'danger'); ?>
                                        
                    <div class="form-group">
                        <label for="name">Name</label>
                        <?php echo form_input(array('name' => 'name','id'=>'icon-list','class' => 'form-control', 'value' => set_value('name', isset($data['name']) ? $data['name'] : ''))); ?>
                    </div>
                     <div class="form-group">
                        <label for="job_title">Job Title</label>
                        <?php echo form_input(array('name' => 'job_title','class' => 'form-control', 'value' => set_value('job_title', isset($data['job_title']) ? $data['job_title'] : ''))); ?>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <?php echo form_input(array('name' => 'description','class' => 'form-control', 'value' => set_value('description', isset($data['description']) ? $data['description'] : ''))); ?>
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <?php echo form_upload(array('name' => 'photo','class' => 'form-control')); ?>
                         <img src="<?php echo base_url();?>assets/uploads/testimoni/<?php echo $data['photo']?>" style="width:100px;height: 100px">                        
                    </div>
                     <div class="form-group">
                        <label for="is_active">Active?</label>
                        <?php echo form_checkbox(array('name' => 'is_active','class' => '', 'value' => 1,'checked' => set_value('is_active', ($data['is_active'] == 1) ? 'checked' : ''))); ?>
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