<div class="row">
	<div class="col-md-12">
		<div class="box">
            <div class="box-header">
                <h3 class="box-title">Front Page [ Company Address ]</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
            	<?php echo $this->session->flashdata('message');?>
            	<p><a class="btn btn-default" href="<?php echo site_url('admin/frontpage/add_testimoni')?>">New Testimoni</a></p>
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Title</th>
                        <th>Email</th>                       
                        <th>Phone</th>
                        <th>Fax</th>                       
                        <th>Address</th>
                        <th>Google API Key</th>
                        <th>Lokasi Koordinat X</th>
                        <th>Lokasi Koordinat Y</th>   
                        <th>Aktif/Tidak</th>                     
                        <th style="width: 100px">Action</th>
                    </tr>
                    <?php if(!empty($data)):?>
                    	<?php foreach($data as $row):?>
		                    <tr>
		                        <td><?php echo $row['id']?></td>		                       
		                        <td><?php echo $row['title']?></td>
                                <td><?php echo $row['email']?></td>                               
                                <td><?php echo $row['phone']?></td>   
                                <td><?php echo $row['fax']?></td>
                                <td><?php echo $row['address']?></td>
                                <td><?php echo $row['google_map_api']?></td>
                                 <td><?php echo $row['koordinat_x']?></td>
                                 <td><?php echo $row['koordinat_y']?></td>
		                        <td><?php echo ($row['is_active'] == 1)?"Yes":"No";?></td>
		                        <td>
		                        	<a href="<?php echo site_url('admin/frontpage/edit_address/'.$row['id'])?>"><span class="badge bg-green">edit</span></a>
		                        	<a href="<?php echo site_url('admin/frontpage/delete_address/'.$row['id'])?>" onclick="return confirm('Are you sure?')"><span class="badge bg-red">delete</span></a>
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