<div class="container-fluid page__container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
                            <li class="breadcrumb-item active">Edit Account</li>
                        </ol>
                        <h1 class="h2">Edit Account</h1>

                        <div class="card">
                            <ul class="nav nav-tabs nav-tabs-card">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#first" data-toggle="tab">Account</a>
                                </li>
                               
                            </ul>
                            <div class="tab-content card-body">
                                <div class="tab-pane active" id="first">
                                    <form action="<?php echo base_url("admin/instructor-update/{$instructor['id']}") ;?>" enctype="multipart/form-data" method="post" class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="avatar" class="col-sm-3 col-form-label form-label">Avatar</label>
                                            <div class="col-sm-9">
                                                <div class="media align-items-center">
                                                    <div class="media-left">
                                                        <div class="icon-block rounded">
                                                            <i class="material-icons text-muted-light md-36">photo</i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="custom-file" style="width: auto;">
                                                            <input type="file" id="avatar" name="images" class="custom-file-input">
                                                            <label for="avatar" class="custom-file-label">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-3 col-form-label form-label">Full Name</label>
                                            <div class="col-sm-8">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input id="name" type="text" class="form-control" placeholder="Name" name="name" value="<?php echo $instructor['name'];?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="Last Name"name="last_name" value="<?php echo $instructor['last_name'];?>" >
													</div>												
												
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-3 col-form-label form-label">Email</label>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="material-icons md-18 text-muted">mail</i>
                                                        </div>
                                                    </div>
                                                    <input type="text" id="email" class="form-control" placeholder="Email Address" name="email" value="<?php echo $instructor['email'];?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="website" class="col-sm-3 col-form-label form-label">Website</label>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="material-icons md-18 text-muted">language</i>
                                                        </div>
                                                    </div>
                                                    <input type="text" id="website" class="form-control" placeholder="www." name="contact"value="<?php echo $instructor['contact'];?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password" class="col-sm-3 col-form-label form-label">Change Password</label>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="material-icons md-18 text-muted">lock</i>
                                                        </div>
                                                    </div>
                                                    <input type="password" id="password"value="<?php echo $instructor['password'];?>"name="password" class="form-control" placeholder="Enter new password">
                                                </div>
                                            </div>
										</div>
										<div class="form-group row">
                                            <label for="password" class="col-sm-3 col-form-label form-label">type</label>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="material-icons md-18 text-muted">lock</i>
                                                        </div>
													</div>												
													<input type="text" id="password"  name="type" value="<?php echo $instructor['type'];?>" class="form-control" >
													<input type="hidden" name="id" value="<?php echo $instructor['id'];?>" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-8 offset-sm-3">
                                                <div class="media align-items-center">
                                                    <div class="media-left">													
														<input type="submit" value="Save Changes" class="btn btn-success">
                                                    </div>
                                                    <div class="media-body pl-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input id="subscribe" type="checkbox" class="custom-control-input" checked>
                                                            <label for="subscribe" class="custom-control-label">Subscribe to Newsletter</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
