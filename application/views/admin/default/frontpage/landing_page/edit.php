<div class="row">
    <div class="col-md-12">
         <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit Landing Page</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url('admin/frontpage/edit_landing_page')?>" method="post" enctype="multipart/form-data">
            <?php echo form_hidden('id', $data['id']) ?>
                <div class="box-body">
                    <?php echo message_box(validation_errors(),'danger'); ?>
                    
                    <div class="form-group">
                        <label for="title">Title</label>
                        <?php echo form_input(array('name' => 'title','class' => 'form-control', 'value' => set_value('name', isset($data['title']) ? $data['title'] : ''))); ?>
                    </div>
                     <div class="form-group">
                        <label for="description">Description</label>
                        <?php echo form_input(array('name' => 'description','class' => 'form-control', 'value' => set_value('name', isset($data['description']) ? $data['description'] : ''))); ?>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <?php echo form_upload(array('name' => 'image','class' => 'form-control','value' => set_value('name', isset($data['image']) ? $data['image'] : ''))); ?>                        
                        <img src="<?php echo base_url().'assets/uploads/slider/'.$data['image'];?>" alt="image" style="width:100pxpx;height:100px">                        
                    </div>
                    <div class="form-group">
                        <label for="is_active">Active?</label>
                        <?php echo form_checkbox(array('name' => 'is_active','class' => '', 'value' => 1,'checked' => set_value('name', ($data['is_active'] == 1) ? 'checked' : ''))); ?>
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
