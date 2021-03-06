<div class="row">
	<div class="col-lg-12">
		<?php if ($this->session->flashdata('alert')){ ?>
			<div class="alert bg-success" role="alert"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> 
				<?php  echo $this->session->flashdata('alert'); ?>
				<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
			<?php }elseif($this->session->flashdata('alert-danger')){ ?>
				<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> 
					<?php  echo $this->session->flashdata('alert-danger'); ?>
					<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>	
				<?php }else{ ?>
					
				<?php  }?>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Manage User</div>
				
				<div class="panel-body">
					<div style="float:left">	
						<a type="button" href="<?php echo base_url(); ?>User/user" class="btn btn-primary">Add User</a>
					</div>
					<table data-toggle="table" data-show-refresh="true" data-show-columns="true" data-search="true" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						<thead>
							<tr>
								<th data-field ="id1" data-checkbox="true">NO.</th>
								<th data-field ="id2" data-sortable="true">NIK</th>
								<th data-field ="id3" data-sortable="true">NAMA</th>
								<th data-field ="id4" data-sortable="true">JABATAN</th>
								
								<?php
								$jabatan =($this->session->userdata['login_user']['jabatan']);
								if ($jabatan=='admin') { ?>	
									<th data-field ="id6" data-sortable="true">OPTION</th>
								<?php } ?>
							</tr>
						</thead>
						<tbody>
							<?php 
							$no =1;
							foreach ($user->result() as $key) : ?>
								<tr>
									<td data-field ="id1" ><?= $no++; ?></td>
									<td data-field ="id2" ><?=$key->nik; ?></td>
									<td data-field ="id3" ><?= $key->nama;  ?></td>
									<td data-field ="id4" ><?=$key->jabatan;  ?></td>
									
									<?php 
									$jabatan =($this->session->userdata['login_user']['jabatan']);
									if ($jabatan=='gudang') { ?>
										
									<?php }if ($jabatan=='admin'){ ?>
										<td data-field ="id6" >
											<?php if ($key->jabatan=='admin'){ ?>
												<a class="ubah btn btn-primary btn-xs" href="<?php echo base_url();?>User/detail/<?php echo $key->id_user;?>"><span class="glyphicon glyphicon-edit" ></span></a>
											<?php  	}elseif ($key->jabatan=='gudang'){?>
												<a class="ubah btn btn-primary btn-xs" href="<?php echo base_url();?>User/detail/<?php echo $key->id_user;?>"><span class="glyphicon glyphicon-edit" ></span></a>
												<a class="hapus btn btn-danger btn-xs" href="<?php echo base_url();?>User/delete/<?php echo $key->id_user;?>"><span class="glyphicon glyphicon-trash"></span></a>
											<?php }else{ ?>
											<?php } ?>
										<?php } ?>
										
									</td>
								</tr>
							<?php  endforeach; ?>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div><!--/.row-->
	<script>
		$(function () {
			$('#hover, #striped, #condensed').click(function () {
				var classes = 'table';
				
				if ($('#hover').prop('checked')) {
					classes += ' table-hover';
				}
				if ($('#condensed').prop('checked')) {
					classes += ' table-condensed';
				}
				$('#table-style').bootstrapTable('destroy')
				.bootstrapTable({
					classes: classes,
					striped: $('#striped').prop('checked')
				});
			});
		});
		
		function rowStyle(row, index) {
			var classes = ['active', 'success', 'info', 'warning', 'danger'];
			
			if (index % 2 === 0 && index / 2 < classes.length) {
				return {
					classes: classes[index / 2]
				};
			}
			return {};
		}
	</script>