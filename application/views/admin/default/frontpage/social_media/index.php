<div class="row">
	<div class="col-md-12">
		<div class="box">
            <div class="box-header">
                <h3 class="box-title">Front Page [ Social Mendia ]</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
            	<?php echo $this->session->flashdata('message');?>
            	<p><a class="btn btn-default" href="<?php echo site_url('admin/frontpage/add_social_media')?>">New Social Media</a></p>
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Show Logo</th>
                        <th>Email Address</th>
                        <th>Phone</th>   

                        <th>Facebook</th>
                        <th>Twitter</th>
                        <th>Google Plus</th>
                        <th>Instagram</th>
                        <th>LinkedIn</th>                        

                        <th>Status</th>
                        <th style="width: 100px">Action</th>
                    </tr>
                    <?php if(!empty($data)):?>
                    	<?php foreach($data as $row):?>
		                    <tr>
		                        <td><?php echo $row['id']?></td>
		                        <td><?php echo ($row['show_logo'] == 1)?"Yes":"No";?></td>
		                        <td><?php echo $row['email_address']?></td>
                                <td><?php echo $row['phone']?></td>
                                <td><?php echo $row['facebook']?></td>
                                <td><?php echo $row['twitter']?></td>
                                <td><?php echo $row['google_plus']?></td>
                                <td><?php echo $row['instagram']?></td>
                                <td><?php echo $row['linkedin']?></td>
		                        <td><?php echo ($row['is_active'] == 1)?"Yes":"No";?></td>
		                        <td>
		                        	<a href="<?php echo site_url('admin/frontpage/edit_social_media/'.$row['id'])?>"><span class="badge bg-green">edit</span></a>
		                        	<a href="<?php echo site_url('admin/frontpage/delete_social_media/'.$row['id'])?>" onclick="return confirm('Are you sure?')"><span class="badge bg-red">delete</span></a>
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