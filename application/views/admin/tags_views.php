  <!-- Header Layout -->
  <div class="mdk-header-layout js-mdk-header-layout">

<!-- Header Layout Content -->
<div class="mdk-header-layout__content d-flex flex-column">



	<div class="page ">



		<div class="container page__container">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item">Components</li>
				<li class="breadcrumb-item active">Tables</li>
			</ol>

			<h1 class="h2">Tables</h1>



			<div class="card">
				<div class="card-body">
					<div class="row">                               
						<div class="col-lg-8">

							<div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>

								<div class="search-form search-form--light mb-3">
									<input type="text" class="form-control search" placeholder="Search">
									<button class="btn" type="button" role="button"><i class="material-icons">search</i></button>
								</div>

								<table class="table mb-0">
									<thead>
										<tr>
											<th style="width: auto;">id</th>
											<th style="width: auto;">tags name</th>


											<th style="width: auto;">action</th>
										 
										   
										</tr>
									</thead>
									<tbody class="list" id="search">
									<?php


											$results = $this->om->view('*', "tags");

											foreach ($results as $result) {
												?>

										<tr>

										<td>

												<span class="js-lists-values-employee-name"><?php echo $result->id ;?></span>

										</td>  
											<td>

												<span class="js-lists-values-employee-name"><?php echo $result->name ;?></span>

											</td>                                               
										   
											<td>
												<a href="<?php echo base_url('admin/tags-edit/').$result->id;?>" class="btn btn-sm btn-primary">Edit</a>
												<a href="<?php echo base_url('admin/tags-view/').$result->id;?>" class="btn btn-sm btn-success">View</a>
												<a href="<?php echo base_url('admin/tags-delete/').$result->id;?>"  class="btn btn-sm btn-danger">Delete</a>
											</td>
										</tr>
										<?php
											}
											
										?>

										<tr>

											<td>

												<span class="js-lists-values-employee-name">Helen Mcdaniel</span>

											</td>


											<td><small class="text-muted">2 days ago</small></td>
											<td>&dollar;48,108</td>
											<td>
											<a href="#" class="text-muted"><i class="material-icons">more_vert</i></a>
											
											</td>
										</tr>

										<tr>

											<td>

												<span class="js-lists-values-employee-name">Karim Hicks</span>

											</td>


											<td><small class="text-muted">1 hour ago</small></td>
											<td>&dollar;11,802</td>
											<td><a href="#" class="text-muted"><i class="material-icons">more_vert</i></a></td>
										</tr>

										<tr>

											<td>

												<span class="js-lists-values-employee-name">Clifford Burgess</span>

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

   
		</div>

	  
	</div>
</div>
<!-- // END Header Layout Content -->

</div>
<!-- // END Header Layout -->







