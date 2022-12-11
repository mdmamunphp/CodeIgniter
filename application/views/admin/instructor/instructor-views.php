<div class="page ">



				<div class="container page__container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Home</a></li>
						<li class="breadcrumb-item">Components</li>
						<li class="breadcrumb-item active">Tables</li>
					</ol>

					<h1 class="h2">Instructor Tables</h1>

					<div class="card">
						<div class="card-body">
						
						


									<div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>

										<table class="table mb-0">
											<thead>
												<tr>

												
													<th>ID</th>
													<th>Instructor Name</th>


													<th style="width: 100px;">Active</th>
													<th style="width: 51px;">Earnings</th>
													<th style="width: 24px;"> Action</th>
												</tr>
											</thead>
											<tbody class="list" id="staff">
												<?php
                                                foreach ($instructor_views as $instructor) {
                                                    ?>
												

												<tr class="selected">
												<!-- <tr> -->
													<td>
													<?php echo $instructor['id'];?>
													</td>

													<td>

														<div class="media align-items-center">
															<div class="avatar avatar-sm mr-3">
																<img src="<?php echo base_url(); ?>dassets/images/256_rsz_nicolas-horn-689011-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
															</div>
															<div class="media-body">

																<span class="js-lists-values-employee-name"><?php echo $instructor['name'];?></span>

															</div>
														</div>

													</td>


													<td><small class="text-muted">3 days ago</small></td>
													<td>&dollar;12,402</td>
													<td>
														<div class="btn-group">
															<a href="<?php echo base_url('admin/instructor-edit/').$instructor['id'];?>" class="text-muted"><button type="button" class="btn btn-sm btn-info">edit</button></a>
															<a href="<?php echo base_url('admin/instructor-singleviews/').$instructor['id'];?>" class="text-muted"><button type="button" class="btn btn-sm btn-success">view</button></a>
															<a href="<?php echo base_url('admin/instructor-delete/').$instructor['id'];?>" class="text-muted"><button type="button" class="btn btn-danger btn-sm">delete</button></a>
														</div>
												   </td>
													<!-- <td><a href="#" class="text-muted"><i class="material-icons">more_vert</i></a></td> -->
												</tr>
														<?php
                                                }
												?>
												<!-- <tr>

													<td>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_2">
															<label class="custom-control-label" for="customCheck1_2"><span class="text-hide">Check</span></label>
														</div>
													</td>

													<td>

														<div class="media align-items-center">
															<div class="avatar avatar-sm mr-3">
																<img src="<?php echo base_url();?>dassets/images/256_rsz_sharina-mae-agellon-377466-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
															</div>
															<div class="media-body">

																<span class="js-lists-values-employee-name">Helen Mcdaniel</span>

															</div>
														</div>

													</td>


													<td><small class="text-muted">2 days ago</small></td>
													<td>&dollar;48,108</td>
													<td><a href="#" class="text-muted"><i class="material-icons">more_vert</i></a></td>
												</tr> -->

												<!-- <tr>

													<td>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_3">
															<label class="custom-control-label" for="customCheck1_3"><span class="text-hide">Check</span></label>
														</div>
													</td>

													<td>

														<div class="media align-items-center">
															<div class="avatar avatar-sm mr-3">
																<img src="<?php echo base_url();?>dassets/images/256_rsz_karl-s-973833-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
															</div>
															<div class="media-body">

																<span class="js-lists-values-employee-name">Karim Hicks</span>

															</div>
														</div>

													</td>


													<td><small class="text-muted">1 hour ago</small></td>
													<td>&dollar;11,802</td>
													<td><a href="#" class="text-muted"><i class="material-icons">more_vert</i></a></td>
												</tr> -->

												<tr>

													<td>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_4">
															<label class="custom-control-label" for="customCheck1_4"><span class="text-hide">Check</span></label>
														</div>
													</td>

													<td>

														<div class="media align-items-center">
															<div class="avatar avatar-sm mr-3">
																<img src="<?php echo base_url();?>dassets/images/256_rsz_90-jiang-640827-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
															</div>
															<div class="media-body">

																<span class="js-lists-values-employee-name">Clifford Burgess</span>

															</div>
														</div>

													</td>


													<td><small class="text-muted">2 hours ago</small></td>
													<td>&dollar;84,401</td>
													<td><a href="#" class="text-muted"><i class="material-icons">more_vert</i></a></td>
												</tr>

											</tbody>
										</table>
									</div>


								</div>
							
					
					</div>
				</div>
</div>
