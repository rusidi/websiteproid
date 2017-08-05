<div class="row">
    <div class="col-md-12">
         <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit Address</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url('admin/frontpage/edit_address')?>" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <?php echo message_box(validation_errors(),'danger'); ?>
                    <?php echo form_hidden('id', $data['id']) ?>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <?php echo form_input(array('name' => 'title','class' => 'form-control', 'value' => set_value('title',isset($data['title']) ? $data['title'] : ''))); ?>
                    </div>
                     <div class="form-group">
                        <label for="email">Email</label>
                        <?php echo form_input(array('name' => 'email','class' => 'form-control', 'value' => set_value('email',isset($data['email']) ? $data['email'] : ''))); ?>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <?php echo form_input(array('name' => 'phone','class' => 'form-control', 'value' => set_value('phone',isset($data['phone']) ? $data['phone'] : ''))); ?>
                    </div>
                     <div class="form-group">
                        <label for="fax">Fax</label>
                        <?php echo form_input(array('name' => 'fax','class' => 'form-control', 'value' => set_value('fax',isset($data['fax']) ? $data['fax'] : ''))); ?>
                    </div>
                     <div class="form-group">
                        <label for="address">Address</label>
                        <?php echo form_textarea(array('name' => 'address','class' => 'form-control', 'value' => set_value('address',isset($data['address']) ? $data['address'] : ''))); ?>
                    </div>
                    <div class="form-group">
                        <label for="google_map_api">Google Map Key</label>
                        <?php echo form_input(array('name' => 'google_map_api','class' => 'form-control','value' => set_value('google_map_api',isset($data['google_map_api']) ? $data['google_map_api'] : ''))); ?>
                    </div>
                    <div class="form-group">
                        <label for="koordinat_x">Coordinate X Address Google Map</label>
                        <?php echo form_input(array('name' => 'koordinat_x','class' => 'form-control','value' => set_value('koordinat_x',isset($data['koordinat_x']) ? $data['koordinat_x'] : ''))); ?>
                    </div>
                    <div class="form-group">
                        <label for="koordinat_y">Coordinate Y Address Google Map</label>
                        <?php echo form_input(array('name' => 'koordinat_y','class' => 'form-control','value' => set_value('koordinat_y',isset($data['koordinat_y']) ? $data['koordinat_y'] : ''))); ?>
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