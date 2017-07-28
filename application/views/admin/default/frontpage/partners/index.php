<div class="row">
	<div class="col-md-12">
		<div class="box">
            <div class="box-header">
                <h3 class="box-title">Front Page [ Brand & Partners ]</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
            	<?php echo $this->session->flashdata('message');?>
            	<p><a class="btn btn-default" href="<?php echo site_url('admin/frontpage/add_partners')?>">New Brand & Partners</a></p>
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image1</th>
                        <th>Image2</th>
                        <th>Image3</th>
                        <th>Image4</th>
                        <th>Image5</th>
                        <th>Image6</th>
                        <th>Image7</th>
                        <th>Image8</th>     
                        <th>Status</th>
                        <th style="width: 100px">Action</th>
                    </tr>
                    <?php if(!empty($data)):?>
                    	<?php foreach($data as $row):?>
		                    <tr>
		                        <td><?php echo $row['id']?></td>		                       
		                        <td><?php echo $row['title']?></td>
                                <td><?php echo $row['description']?></td>                                
                                <td>
                                <?php echo $row['client1']?>
                                <?php if( $row['client1'] !=''){ ?>
                                <img src="<?php echo base_url();?>assets/uploads/partners/<?php echo $row['client1']?>" style="width:30px;height: 30px">
                                <a href="<?php echo site_url('admin/frontpage/delete_file_partners/'.$row['id'].'/client1')?>" >delete</a>
                                <?php }else{ ?>
                                 <form role="form" action="<?php echo site_url('admin/frontpage/upload_file_partners/client1')?>" method="post" enctype="multipart/form-data">
                                 <input type="hidden" value="<?php echo $row['id']?>" name="id">
                                 <?php echo form_upload(array('name' => 'client1','class' => 'form-control','style'=>'border:0px;padding:0px')); ?>
                                 <button type="submit" class="btn btn-sm btn-primary">Submit</button> 
                                 </form>
                                <?php } ?>
                                </td>
                                <td>
                                <?php echo $row['client2']?>
                                <?php if( $row['client2'] !=''){ ?>
                                <img src="<?php echo base_url();?>assets/uploads/partners/<?php echo $row['client2']?>" style="width:30px;height: 30px">
                                <a href="<?php echo site_url('admin/frontpage/delete_file_partners/'.$row['id'].'/client2')?>" >delete</a>
                                <?php }else{ ?>
                                 <form role="form" action="<?php echo site_url('admin/frontpage/upload_file_partners/client2')?>" method="post" enctype="multipart/form-data">
                                 <input type="hidden" value="<?php echo $row['id']?>" name="id">
                                 <?php echo form_upload(array('name' => 'client2','class' => 'form-control','style'=>'border:0px;padding:0px')); ?>
                                 <button type="submit" class="btn btn-sm btn-primary">Submit</button> 
                                 </form>
                                <?php } ?>
                                 
                                </td>
                                <td>
                                <?php echo $row['client3']?>
                                <?php if( $row['client3'] !=''){ ?>
                                <img src="<?php echo base_url();?>assets/uploads/partners/<?php echo $row['client3']?>" style="width:30px;height: 30px">
                                <a href="<?php echo site_url('admin/frontpage/delete_file_partners/'.$row['id'].'/client3')?>" >delete</a>
                                <?php }else{ ?>
                                 <form role="form" action="<?php echo site_url('admin/frontpage/upload_file_partners/client3')?>" method="post" enctype="multipart/form-data">
                                 <input type="hidden" value="<?php echo $row['id']?>" name="id">
                                 <?php echo form_upload(array('name' => 'client3','class' => 'form-control','style'=>'border:0px;padding:0px')); ?>
                                 <button type="submit" class="btn btn-sm btn-primary">Submit</button> 
                                 </form>
                                <?php } ?>
                                </td>
                                <td><?php echo $row['client4']?>
                                    <?php if( $row['client4'] !=''){ ?>
                                <img src="<?php echo base_url();?>assets/uploads/partners/<?php echo $row['client4']?>" style="width:30px;height: 30px">
                                <a href="<?php echo site_url('admin/frontpage/delete_file_partners/'.$row['id'].'/client4')?>" >delete</a>
                                <?php }else{ ?>
                                 <form role="form" action="<?php echo site_url('admin/frontpage/upload_file_partners/client4')?>" method="post" enctype="multipart/form-data">
                                 <input type="hidden" value="<?php echo $row['id']?>" name="id">
                                 <?php echo form_upload(array('name' => 'client4','class' => 'form-control','style'=>'border:0px;padding:0px')); ?>
                                 <button type="submit" class="btn btn-sm btn-primary">Submit</button> 
                                 </form>
                                <?php } ?>
                                </td>
                                <td>
                                <?php echo $row['client5']?>
                                    <?php if( $row['client5'] !=''){ ?>
                                <img src="<?php echo base_url();?>assets/uploads/partners/<?php echo $row['client5']?>" style="width:30px;height: 30px">
                                <a href="<?php echo site_url('admin/frontpage/delete_file_partners/'.$row['id'].'/client5')?>" >delete</a>
                                <?php }else{ ?>
                                 <form role="form" action="<?php echo site_url('admin/frontpage/upload_file_partners/client5')?>" method="post" enctype="multipart/form-data">
                                 <input type="hidden" value="<?php echo $row['id']?>" name="id">
                                 <?php echo form_upload(array('name' => 'client5','class' => 'form-control','style'=>'border:0px;padding:0px')); ?>
                                 <button type="submit" class="btn btn-sm btn-primary">Submit</button> 
                                 </form>
                                <?php } ?>
                                </td>
                                <td><?php echo $row['client6']?>
                                   <?php if( $row['client6'] !=''){ ?>
                                <img src="<?php echo base_url();?>assets/uploads/partners/<?php echo $row['client6']?>" style="width:30px;height: 30px">
                                <a href="<?php echo site_url('admin/frontpage/delete_file_partners/'.$row['id'].'/client6')?>" >delete</a>
                                <?php }else{ ?>
                                 <form role="form" action="<?php echo site_url('admin/frontpage/upload_file_partners/client6')?>" method="post" enctype="multipart/form-data">
                                 <input type="hidden" value="<?php echo $row['id']?>" name="id">
                                 <?php echo form_upload(array('name' => 'client6','class' => 'form-control','style'=>'border:0px;padding:0px')); ?>
                                 <button type="submit" class="btn btn-sm btn-primary">Submit</button> 
                                 </form>
                                <?php } ?>
                                </td>
                                <td><?php echo $row['client7']?>
                                   <?php if( $row['client7'] !=''){ ?>
                                <img src="<?php echo base_url();?>assets/uploads/partners/<?php echo $row['client7']?>" style="width:30px;height: 30px">
                                <a href="<?php echo site_url('admin/frontpage/delete_file_partners/'.$row['id'].'/client7')?>" >delete</a>
                                <?php }else{ ?>
                                 <form role="form" action="<?php echo site_url('admin/frontpage/upload_file_partners/client7')?>" method="post" enctype="multipart/form-data">
                                 <input type="hidden" value="<?php echo $row['id']?>" name="id">
                                 <?php echo form_upload(array('name' => 'client7','class' => 'form-control','style'=>'border:0px;padding:0px')); ?>
                                 <button type="submit" class="btn btn-sm btn-primary">Submit</button> 
                                 </form>
                                <?php } ?>
                                </td>
                                <td><?php echo $row['client8']?>
                                    <?php if( $row['client8'] !=''){ ?>
                                <img src="<?php echo base_url();?>assets/uploads/partners/<?php echo $row['client8']?>" style="width:30px;height: 30px">
                                <a href="<?php echo site_url('admin/frontpage/delete_file_partners/'.$row['id'].'/client8')?>" >delete</a>
                                <?php }else{ ?>
                                 <form role="form" action="<?php echo site_url('admin/frontpage/upload_file_partners/client8')?>" method="post" enctype="multipart/form-data">
                                 <input type="hidden" value="<?php echo $row['id']?>" name="id">
                                 <?php echo form_upload(array('name' => 'client8','class' => 'form-control','style'=>'border:0px;padding:0px')); ?>
                                 <button type="submit" class="btn btn-sm btn-primary">Submit</button> 
                                 </form>
                                <?php } ?>
                                </td>
		                        <td><?php echo ($row['is_active'] == 1)?"Yes":"No";?></td>
		                        <td>
		                        	<a href="<?php echo site_url('admin/frontpage/edit_partners/'.$row['id'])?>"><span class="badge bg-green">edit</span></a>
		                        	<a href="<?php echo site_url('admin/frontpage/delete_partners/'.$row['id'])?>" onclick="return confirm('Are you sure?')"><span class="badge bg-red">delete</span></a>
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