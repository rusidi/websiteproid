<div class="row">
	<div class="col-md-12">
		<div class="box">
            <div class="box-header">
                <h3 class="box-title">Front Page [ Company Overview ]</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
            	<?php echo $this->session->flashdata('message');?>
            	<p><a class="btn btn-default" href="<?php echo site_url('admin/frontpage/add_company_overview')?>">New Company Overview</a></p>
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Icon</th>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Description</th>
                        <th>Action</th>                       
                        <th>Status</th>
                        <th style="width: 100px">Action</th>
                    </tr>
                    <?php if(!empty($data)):?>
                    	<?php foreach($data as $row):?>
		                    <tr>
		                        <td><?php echo $row['id']?></td>		                       
		                        <td><?php echo $row['icon']?></td>
                                <td><?php echo $row['title']?></td>
                                <td><?php echo $row['subtitle']?></td>
                                <td><?php echo $row['description']?></td>   
                                <td><?php echo $row['action']?></td>
		                        <td><?php echo ($row['is_active'] == 1)?"Yes":"No";?></td>
		                        <td>
		                        	<a href="<?php echo site_url('admin/frontpage/edit_company_overview/'.$row['id'])?>"><span class="badge bg-green">edit</span></a>
		                        	<a href="<?php echo site_url('admin/frontpage/delete_company_overview/'.$row['id'])?>" onclick="return confirm('Are you sure?')"><span class="badge bg-red">delete</span></a>
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