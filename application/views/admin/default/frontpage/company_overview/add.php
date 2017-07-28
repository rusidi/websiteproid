<div class="row">
    <div class="col-md-12">
         <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">New Company Overview</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url('admin/frontpage/add_company_overview')?>" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <?php echo message_box(validation_errors(),'danger'); ?>
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <?php echo form_input(array('name' => 'icon','id'=>'icon-list','class' => 'form-control', 'value' => set_value('icon'))); ?>
                    </div>
                     <div class="form-group">
                        <label for="title">Title</label>
                        <?php echo form_input(array('name' => 'title','class' => 'form-control', 'value' => set_value('title'))); ?>
                    </div>
                    <div class="form-group">
                        <label for="subtitle">Subtitle</label>
                        <?php echo form_input(array('name' => 'subtitle','class' => 'form-control', 'value' => set_value('subtitle'))); ?>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <?php echo form_input(array('name' => 'description','class' => 'form-control', 'value' => set_value('description'))); ?>
                    </div>
                    <div class="form-group">
                        <label for="action">Action</label>
                        <?php echo form_input(array('name' => 'action','class' => 'form-control', 'value' => set_value('action'))); ?>
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