
             <div class="container-fluid page__container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
                            <li class="breadcrumb-item active">Courses</li>
                        </ol>
                        <div class="media align-items-center mb-headings">
                            <div class="media-body">
                                <h1 class="h2">Courses</h1>
                            </div>
                            <div class="media-right">
                                <div class="btn-group btn-group-sm">
                                    <a href="#" class="btn btn-white active"><i class="material-icons">list</i></a>
                                    <a href="#" class="btn btn-white"><i class="material-icons">dashboard</i></a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="card-columns">
                        <?php
                                                  
                                                  $results = $this->om->view('*', "post_course");
                                                        foreach($results as $result){
                                                        
                                                      //  echo "<option value='{$result->id}'>{$result->name}</option>";

                                                      
                                            ?> 
                            <div class="card">
                                <div class="card-header text-center">
                                    <h4 class="card-title mb-0"><a href="student-take-course.html"><?php echo $result->title ;?>Learn VueJs</a></h4>
                                    <div class="rating">
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star_border</i>
                                    </div>
                                </div> 
                                <a href="student-take-course.html">
                                    <img src="<?php echo base_url();?>dassets/images/vuejs.png" alt="Card image cap" style="width:100%;">
                                </a>
                                <div class="card-body">
                                    <small class="text-muted">ADVANCED</small><br>
                                    Let’s start with a quick tour of Vue’s data binding features. If you are more interested in ...<br>                                   
                                    <a href="<?php echo base_url('instructor/course-edit/').$result->id;?>" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="<?php echo base_url('instructor/coursesingle-view/').$result->id;?>" class="btn btn-sm btn-success">View</a>
                                    <a href="<?php echo base_url('instructor/course-delete/').$result->id;?>"  class="btn btn-sm btn-danger">Delete</a>
                                </div>
                            </div>
                            <?php

                                                        }
                                                        ?>
                            <div class="card">
                                <div class="card-header text-center">
                                    <h4 class="card-title mb-0"><a href="student-take-course.html">Npm &amp; Gulp Advanced Workflow</a></h4>
                                    <div class="rating">
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star_half</i>
                                        <i class="material-icons">star_border</i>
                                    </div>
                                </div>
                                <a href="student-take-course.html">
                                    <img src="<?php echo base_url();?>dassets/images/nodejs.png" alt="Card image cap" style="width:100%;">
                                </a>
                                <div class="card-body">
                                    <small class="text-muted">BEGINNER</small><br>
                                    Developing static website with fast and advanced gulp setup by managing all parts...<br>
                                    <small class="badge badge-primary ">GULP</small>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header text-center">
                                    <h4 class="card-title mb-0"><a href="student-take-course.html">Github Webhooks for Beginners</a></h4>
                                    <div class="rating">
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star_border</i>
                                        <i class="material-icons">star_border</i>
                                        <i class="material-icons">star_border</i>
                                    </div>
                                </div>
                                <a href="student-take-course.html">
                                    <img src="<?php echo base_url();?>dassets/images/github.png" alt="" style="width:100%;">
                                </a>
                                <div class="card-body">
                                    <small class="text-muted">INTERMEDIATE</small><br>
                                    Learn the basics of Github and become a power Github developer.<br>
                                    <small class="badge badge-primary ">GULP</small>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header text-center">
                                    <h4 class="card-title mb-0"><a href="student-take-course.html">Gulp & Slush Workflows</a></h4>
                                    <div class="rating">
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star_border</i>
                                    </div>
                                </div>
                                <a href="student-take-course.html">
                                    <img src="<?php echo base_url();?>dassets/images/gulp.png" alt="Card image cap" style="width:100%;">
                                </a>
                                <div class="card-body">
                                    <small class="text-muted">ADVANCED</small><br>
                                    Let’s start with a quick tour of Vue’s data binding features. If you are more interested in ...<br>
                                    <span class="badge badge-primary ">GULP</span> <span class="badge badge-primary ">SLUSH</span>
                                </div>
                            </div>
                        </div>

                        <!-- Pagination -->
                        <ul class="pagination justify-content-center pagination-sm">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true" class="material-icons">chevron_left</span>
                                    <span>Prev</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#" aria-label="1">
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="1">
                                    <span>2</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span>Next</span>
                                    <span aria-hidden="true" class="material-icons">chevron_right</span>
                                </a>
                            </li>
                        </ul>
                    </div>
