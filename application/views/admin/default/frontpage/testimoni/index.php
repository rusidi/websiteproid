<div class="row">
	<div class="col-md-12">
		<div class="box">
            <div class="box-header">
                <h3 class="box-title">Front Page [ Testimoni ]</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
            	<?php echo $this->session->flashdata('message');?>
            	<p><a class="btn btn-default" href="<?php echo site_url('admin/frontpage/add_testimoni')?>">New Testimoni</a></p>
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Job Title</th>                       
                        <th>Description</th>
                        <th>Photo</th>                       
                        <th>Status</th>
                        <th style="width: 100px">Action</th>
                    </tr>
                    <?php if(!empty($data)):?>
                    	<?php foreach($data as $row):?>
		                    <tr>
		                        <td><?php echo $row['id']?></td>		                       
		                        <td><?php echo $row['name']?></td>
                                <td><?php echo $row['job_title']?></td>                               
                                <td><?php echo $row['description']?></td>   
                                <td><?php echo $row['photo']?></td>
		                        <td><?php echo ($row['is_active'] == 1)?"Yes":"No";?></td>
		                        <td>
		                        	<a href="<?php echo site_url('admin/frontpage/edit_testimoni/'.$row['id'])?>"><span class="badge bg-green">edit</span></a>
		                        	<a href="<?php echo site_url('admin/frontpage/delete_testimoni/'.$row['id'])?>" onclick="return confirm('Are you sure?')"><span class="badge bg-red">delete</span></a>
		                        </td>
		                    </tr>
                    	<?php endforeach;?>
                	<?php else:?>
                		<tr><td colspan="5">No record found</td></tr>
                	<?php endif;?>
                </table>
            </div><!-- /.box-body -->
            <div class="box-footer clearfix">
                <?php echo $pagination ?>
            </div>
        </div><!-- /.box -->
	</div>
</div>