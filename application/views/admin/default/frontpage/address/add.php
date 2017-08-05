<div class="row">
    <div class="col-md-12">
         <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">New Address</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url('admin/frontpage/add_address')?>" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <?php echo message_box(validation_errors(),'danger'); ?>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <?php echo form_input(array('name' => 'title','class' => 'form-control', 'value' => set_value('title'))); ?>
                    </div>
                     <div class="form-group">
                        <label for="email">Email</label>
                        <?php echo form_input(array('name' => 'email','class' => 'form-control', 'value' => set_value('email'))); ?>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <?php echo form_input(array('name' => 'phone','class' => 'form-control', 'value' => set_value('phone'))); ?>
                    </div>
                     <div class="form-group">
                        <label for="fax">Fax</label>
                        <?php echo form_input(array('name' => 'fax','class' => 'form-control', 'value' => set_value('fax'))); ?>
                    </div>
                     <div class="form-group">
                        <label for="address">Address</label>
                        <?php echo form_textarea(array('name' => 'address','class' => 'form-control', 'value' => set_value('address'))); ?>
                    </div>
                    <div class="form-group">
                        <label for="google_map_api">Google Map Key</label>
                        <?php echo form_input(array('name' => 'google_map_api','class' => 'form-control','value' => set_value('google_map_api'))); ?>
                    </div>
                    <div class="form-group">
                        <label for="koordinat_x">Coordinate X Address Google Map</label>
                        <?php echo form_input(array('name' => 'koordinat_x','class' => 'form-control','value' => set_value('koordinat_x'))); ?>
                    </div>
                    <div class="form-group">
                        <label for="koordinat_y">Coordinate Y Address Google Map</label>
                        <?php echo form_input(array('name' => 'koordinat_y','class' => 'form-control','value' => set_value('koordinat_y'))); ?>
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