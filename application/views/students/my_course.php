<div class="container-fluid page__container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
                            <li class="breadcrumb-item active">My Courses</li>
                        </ol>
                        <div class="media mb-headings align-items-center">
                            <div class="media-body">
                                <h1 class="h2">My Courses</h1>
                            </div>
                            <div class="media-right">
                                <div class="btn-group btn-group-sm">
                                    <a href="#" class="btn btn-white active"><i class="material-icons">list</i></a>
                                    <a href="#" class="btn btn-white"><i class="material-icons">dashboard</i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-columns">

                        <?php
                           
                            $count =count($mycourse);
                        foreach($mycourse as $course){
                            // $cid=$course['category_id'];

                            $id=$course['post_course_id'];

                            // $s=$this->db->query("select sum(category_id) from lession where category_id='$cid'");
                          
                            ?>
                        
                            <div class="card">
                                <div class="card-header">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="student-student-take-course.html">
                                                <img src="<?php echo base_url();?>dassets/images/vuejs.png" alt="Card image cap" width="100" class="rounded">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="card-title m-0"><a href="student-take-course.html"> <?php echo $course['title'] ;?></a></h4>
                                            <small class="text-muted">lession
                                          <?php
                                                // echo $this->Course->countRow($course['student_id']);
                                                 $row=$this->Course->countRow($course['post_course_id']);
                                                // print_r($this->Course->countRow($course['post_course_id']))
                                                 echo $row['total'];
                                          ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress rounded-0">
                                    <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="card-footer bg-white">
                                    <a href="<?php echo base_url("students/lessionview/$id") ;?>" class="btn btn-primary btn-sm">Continue <i class="material-icons btn__icon--right">play_circle_outline</i></a>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                            <div class="card">
                                <div class="card-header">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="student-student-take-course.html">
                                                <img src="<?php echo base_url();?>dassets/images/gulp.png" alt="Card image cap" width="100" class="rounded">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="card-title m-0"><a href="#">Npm &amp; Gulp Advanced Workflow</a></h4>
                                            <small class="text-muted">Lessons: 7 of 7</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress rounded-0">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="card-footer bg-white ">
                                    <a href="student-take-course.html" class="btn btn-success btn-sm">Completed <i class="material-icons btn__icon--right">check</i></a>
                                    <a href="student-take-course.html" class="btn btn-white btn-sm">Restart <i class="material-icons btn__icon--right">replay</i> </a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="student-student-take-course.html">
                                                <img src="<?php echo base_url();?>dassets/images/github.png" alt="Card image cap" width="100" class="rounded">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="card-title m-0"><a href="#">Github Webhooks for Beginners</a></h4>
                                            <small class="text-muted">Lessons: 8 of 10</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress rounded-0">
                                    <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="card-footer bg-white">
                                    <a href="student-take-course.html" class="btn btn-primary btn-sm">Continue <i class="material-icons btn__icon--right">play_circle_outline</i></a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="student-student-take-course.html">
                                                <img src="<?php echo base_url();?>dassets/images/gulp.png" alt="Card image cap" width="100" class="rounded">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="card-title m-0"><a href="#">Gulp and Slush</a></h4>
                                            <small class="text-muted">Lessons: 5 of 7</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress rounded-0">
                                    <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="card-footer bg-white">
                                    <a href="student-take-course.html" class="btn btn-primary btn-sm">Continue <i class="material-icons btn__icon--right">play_circle_outline</i></a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header ">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="student-student-take-course.html">
                                                <img src="<?php echo base_url();?>dassets/images/vuejs.png" alt="Card image cap" width="100" class="rounded">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="card-title m-0"><a href="#">VueJs</a></h4>
                                            <small class="text-muted">Lessons: 3 of 7</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress rounded-0">
                                    <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="card-footer bg-white">
                                    <a href="student-take-course.html" class="btn btn-primary btn-sm">Continue <i class="material-icons btn__icon--right">play_circle_outline</i></a>
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