<div class="page ">



				<div class="container page__container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Home</a></li>
						<li class="breadcrumb-item">Components</li>
						<li class="breadcrumb-item active">Tables</li>
					</ol>

					<h1 class="h2">question Tables</h1>

					<div class="card">
						<div class="card-body">
						
						


									<div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>

										<table class="table mb-0">
											<thead>
												<tr>

												
												    <th>ID</th>
													<th>option Name</th>
													
												
													
													<th style="width: 51px;">is_correct</th>
													<th style="width: 24px;"> question_id</th>
													<th style="width: 20px;"> actione</th>
												</tr>
											</thead>
											<tbody class="list" id="staff">
												<?php
                                                foreach ($questions_bank as $questions) {
                                                    ?>
												

												<tr class="selected">
												<!-- <tr> -->
												<td>
													<?php echo $questions['id'];?>
													</td>

													<td>

														<div class="media align-items-center">
															
															<div class="media-body">

																<span class="js-lists-values-employee-name"><?php echo $questions['options'];?></span>

															</div>
														</div>

													</td>


													<td><small class="text-muted"><?php echo $questions['is_correct'];?></small></td>
													<td><?php echo $questions['question_id'];?></td>
													<td>
														<div class="btn-group">
															<a href="<?php echo base_url('admin/questions_bank_details-edit/').$questions['id'];?>" class="text-muted"><button type="button" class="btn btn-sm btn-info">edit</button></a>
															<a href="<?php echo base_url('admin/questions_bank_details-singleviews/').$questions['id'];?>" class="text-muted"><button type="button" class="btn btn-sm btn-success">view</button></a>
															<a href="<?php echo base_url('admin/questions_bank_details-delete/').$questions['id'];?>" class="text-muted"><button type="button" class="btn btn-danger btn-sm">delete</button></a>
														</div>
												   </td>
													<!-- <td><a href="#" class="text-muted"><i class="material-icons">more_vert</i></a></td> -->
												</tr>
														<?php
                                                }
												?>
											
											
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
