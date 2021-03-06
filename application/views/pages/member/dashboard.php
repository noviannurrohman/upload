	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');   ?>
	<section class="content">
	 	<div class="container-fluid">
	 		<!-- Basic Examples -->
	 		<div class="row clearfix">
	 			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	 				<div class="card">
		 				<?php
		                    if(!empty($_SESSION['flash_messsage'])){
		                        $html = '<div class="alert alert-danger alert-dismissible">';
		                        $html .= $_SESSION['flash_messsage']; 
		                        $html .= '</div>';
		                        echo $html;
		                    }
		                ?>
	 					<div class="header">
	 						<h1><center>ORDERS OVERVIEW</center></h1>
	 					</div>
	 					<div class="body">
	 						<button data-color="red" type="button" class="btn bg-red waves-effect m-r-20" data-toggle="modal" data-target="#myModal">Order!</button>

	 						<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
	 							<thead>
	 								<tr>
	 									<th>Id Order</th>
	 									<th>Domain</th>
	 									<th>API Key</th>
	 									<th>Date</th>
	 									<th>Price</th>
	 									<th>Status</th>
	 								</tr>
	 							</thead>
	 							<tbody>
							 <!--    <?php  
											for ($i=0; $i < sizeof($hasil2); $i++) {
													echo '<tr>'; 
													for ($j=0; $j < sizeof($col2); $j++) {
															echo '<td>'.$hasil2[$i][$col2[$j]].'</td>';
													}
													echo '</tr>';
											}
											?> -->
											<?php  
											for ($i=0; $i < sizeof($hasil2); $i++) {
												echo '<tr>'; 
												for ($j=0; $j < sizeof($col2); $j++) {
													if ($j == 0) {
														$val = $hasil2[$i][$col2[$j]];
														echo '<td><a <a href="'.site_url().'member/invoice/'.$val.'">ORD-'.$val.'</a></td>';
													}elseif ($j==2 && $hasil2[$i][$col2[$j]] =='') 
													echo "<td>While shown after payment</td>";
													else{
														if($j == sizeof($col2)-1){
															if ($hasil2[$i][$col2[$j]] == 1) 
																echo '<td><span style = "color:#2196F3" class="label bg-green">Verified</span></td>';
															elseif($hasil2[$i][$col2[$j]] == 0)  
																echo '<td><span style = "color:#2196F3" class="label bg-yellow">Pending</span></td>';               
														}
														else
															echo '<td>'.$hasil2[$i][$col2[$j]].'</td>';
													}
												}
												echo '</tr>';
											}
											?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- #END# Basic Examples -->
				<!-- Exportable Table -->
				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="card">
							<div class="header">
								<h1><center>AVAILABLE API</center></h1>
							</div>
							<div class="body">
								<table class="table table-bordered table-striped table-hover dataTable js-exportable">
									<thead>
										<tr>
											<th>Id Order</th>
											<th>Owner</th>
											<th>Domain</th>
											<th>API Key</th>
											<th>Last Used</th>
											<th>Last IP</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<?php  
										for ($i=0; $i < sizeof($hasil); $i++) {
											echo '<tr>'; 
											for ($j=0; $j < sizeof($col); $j++) {
												if ($j == 0){
													$val = $hasil[$i][$col[$j]];
													echo '<td> <a href="'.site_url().'member/invoice/'.$val.'">ORD-'.$val.'</a></td>';
												} 
												else{
													if($j == sizeof($col)-1)
														echo '<td><span class="label bg-blue">Ready</span></td>';
													else
														echo '<td>'.$hasil[$i][$col[$j]].'</td>';
												}
											}
											echo '</tr>';
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
				<?php echo form_open('member/submit_form', array('id' => 'form', 'role' => 'form', 'onsubmit' => 'return formValidation()')) ?>
				<div style="display:none">
					<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
				</div>
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<h3><center>Request new API for your site</center></h3>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<div class="form-line">
								<input type="text" id="input_domain" name="input_domain" class="form-control" placeholder="Your domain name">
							</div>
						</div>
						<div class="error"></div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Close
						</button>
						<button id="btnSave" type="submit" class="btn btn-primary">
							Save 
						</button>
					</div>
				</div> 
				<?php echo form_close() ?>

			</div>
		</div>
