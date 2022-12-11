<div class="container-fluid page__container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
                            <li class="breadcrumb-item active">Forum</li>
                        </ol>

                        <div class="row">
                            <div class="col-md-8">

                                <div class="d-flex align-items-center mb-4">
                                    <h1 class="h2 flex mr-3 mb-0">Forum</h1>
                                    <a href="student-forum-ask.html" class="btn btn-success">Ask a Question</a>
                                </div>

                                <!-- Search -->
                                <div class="flex search-form form-control-rounded search-form--light mb-2" style="min-width: 200px;">
                                    <input type="text" class="form-control" placeholder="Search discussions" id="searchSample02">
                                    <button class="btn pr-3" type="button" role="button"><i class="material-icons">search</i></button>
                                </div>
                                <div class="mb-4 d-flex align-items-center">
                                    <small class="text-black-70 text-uppercase mr-3">Displaying 10 out of 5,234 discussions</small>
                                    <div class="dropdown ml-auto">
                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle text-black-70">All Topics</a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item active">All Topics</a>
                                            <a href="#" class="dropdown-item">General</a>
                                            <a href="#" class="dropdown-item">Lessons</a>
                                            <a href="#" class="dropdown-item">Customer Support</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <h4 class="card-title">category</h4>
                                                <p class="card-subtitle">All non-course topics.</p>
                                            </div>
                                            <div class="media-right">
                                                <a href="#" class="btn btn-white btn-sm"><i class="material-icons">add</i></a>
                                            </div>
                                        </div>
                                    </div>



                                    <ul class="list-group list-group-fit">

										<?php
                                        foreach ($category as $cate) {
                                            ?>
										

                                        <li class="list-group-item forum-thread">
                                            <div class="media align-items-center">
                                                <div class="media-left">
                                                    <div class="forum-icon-wrapper">
                                                        <a href="<?php echo base_url('students/quiz_papers/').$cate['id'];?>" class="forum-thread-icon">
                                                            <i class="material-icons">description</i>
                                                        </a>
                                                        <a href="student-profile.html" class="forum-thread-user">
                                                            <img src="assets/images/people/50/guy-1.jpg" alt="" width="20" class="rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex align-items-center">
                                                        <a href="<?php echo base_url('students/quiz_papers/').$cate['id'];?>" class="text-body"><strong><?php echo $cate['name'];?></strong></a>
                                                        <!-- <small class="ml-auto text-muted">5 min ago</small> -->
                                                    </div>
                                                    <!-- <a class="text-black-70" href="student-forum-thread.html">Am I learning the right way?</a> -->
                                                </div>
                                            </div>
                                        </li>
											<?php
                                        }
										?>

                                        <!-- <li class="list-group-item forum-thread">
                                            <div class="media align-items-center">
                                                <div class="media-left">
                                                    <div class="forum-icon-wrapper">
                                                        <a href="student-forum-thread.html" class="forum-thread-icon">
                                                            <i class="material-icons">description</i>
                                                        </a>
                                                        <a href="student-profile.html" class="forum-thread-user">
                                                            <img src="assets/images/people/50/guy-2.jpg" alt="" width="20" class="rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex align-items-center">
                                                        <a href="student-profile.html" class="text-body"><strong>Magnus Goldsmith</strong></a>
                                                        <small class="ml-auto text-muted">7 min ago</small>
                                                    </div>
                                                    <a class="text-black-70" href="student-forum-thread.html">Can someone help me with the basic Setup?</a>
                                                </div>
                                            </div>
                                        </li> -->

                                        <!-- <li class="list-group-item forum-thread">
                                            <div class="media align-items-center">
                                                <div class="media-left">
                                                    <div class="forum-icon-wrapper">
                                                        <a href="student-forum-thread.html" class="forum-thread-icon">
                                                            <i class="material-icons">description</i>
                                                        </a>
                                                        <a href="student-profile.html" class="forum-thread-user">
                                                            <img src="assets/images/people/50/woman-1.jpg" alt="" width="20" class="rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex align-items-center">
                                                        <a href="student-profile.html" class="text-body"><strong>Katelyn Rankin</strong></a>
                                                        <small class="ml-auto text-muted">12 min ago</small>
                                                    </div>
                                                    <a class="text-black-70" href="student-forum-thread.html">I think this is the right way?</a>
                                                </div>
                                            </div>
                                        </li> -->


                                    </ul>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <h4 class="card-title">my course</h4>
                                                <p class="card-subtitle">Course related topics.</p>
                                            </div>
                                            <div class="media-right">
                                                <a href="#" class="btn btn-white btn-sm"><i class="material-icons">add</i></a>
                                            </div>
                                        </div>
                                    </div>



                                    <ul class="list-group list-group-fit">

										<?php
                                        foreach ($post_course as $post) {
                                            ?>
                                        <li class="list-group-item forum-thread">
                                            <div class="media align-items-center">
                                                <div class="media-left">
                                                    <div class="forum-icon-wrapper">
                                                        <a href="<?php echo base_url('students/quiz_papers/').$post['id'];?>" class="forum-thread-icon">
                                                            <i class="material-icons">description</i>
                                                        </a>
                                                        <a href="<?php echo base_url('students/quiz_papers/').$post['id'];?>" class="forum-thread-user">
                                                            <img src="assets/images/256_rsz_nicolas-horn-689011-unsplash.jpg" alt="" width="20" class="rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex align-items-center">
                                                        <a href="<?php echo base_url('students/quiz_papers/').$post['id'];?>" class="text-body"><strong><?php echo $post['title'];?></strong></a>
                                                        <small class="ml-auto text-muted"><?php echo $post['id'];?></small>
                                                    </div>
                                                    <!-- <a class="text-black-70" href="student-forum-thread.html">Getting around AngularJS</a> -->
                                                </div>
                                            </div>
                                        </li>
											<?php
                                        }
										?>


                                        <!-- <li class="list-group-item forum-thread">
                                            <div class="media align-items-center">
                                                <div class="media-left">
                                                    <div class="forum-icon-wrapper">
                                                        <a href="student-forum-thread.html" class="forum-thread-icon">
                                                            <i class="material-icons">description</i>
                                                        </a>
                                                        <a href="student-profile.html" class="forum-thread-user">
                                                            <img src="assets/images/256_rsz_sharina-mae-agellon-377466-unsplash.jpg" alt="" width="20" class="rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex align-items-center">
                                                        <a href="student-profile.html" class="text-body"><strong>Sherri J. Cardenas</strong></a>
                                                        <small class="ml-auto text-muted">3 min ago</small>
                                                    </div>
                                                    <a class="text-black-70" href="student-forum-thread.html">Responsive Bootstrap Question</a>
                                                </div>
                                            </div>
                                        </li> -->

                                        <!-- <li class="list-group-item forum-thread">
                                            <div class="media align-items-center">
                                                <div class="media-left">
                                                    <div class="forum-icon-wrapper">
                                                        <a href="student-forum-thread.html" class="forum-thread-icon">
                                                            <i class="material-icons">description</i>
                                                        </a>
                                                        <a href="student-profile.html" class="forum-thread-user">
                                                            <img src="assets/images/256_rsz_karl-s-973833-unsplash.jpg" alt="" width="20" class="rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex align-items-center">
                                                        <a href="student-profile.html" class="text-body"><strong>Joseph S. Ferland</strong></a>
                                                        <small class="ml-auto text-muted">10 min ago</small>
                                                    </div>
                                                    <a class="text-black-70" href="student-forum-thread.html">Can someone help me with the basic Setup?</a>
                                                </div>
                                            </div>
                                        </li> -->


                                    </ul>
                                </div>

								<div class="card">
                                    <div class="card-header">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <h4 class="card-title">shedule quiz</h4>
                                                <p class="card-subtitle">Course related topics.</p>
                                            </div>
                                            <div class="media-right">
                                                <a href="#" class="btn btn-white btn-sm"><i class="material-icons">add</i></a>
                                            </div>
                                        </div>
                                    </div>



                                    <ul class="list-group list-group-fit">

										<?php
                                        foreach ($quiz_master as $quiz) {
                                            ?>
									

                                        <li class="list-group-item forum-thread">
                                            <div class="media align-items-center">
                                                <div class="media-left">
                                                    <div class="forum-icon-wrapper">
                                                        <a href="<?php echo base_url('students/quiz_papers/').$quiz['id'];?>" class="forum-thread-icon">
                                                            <i class="material-icons">description</i>
                                                        </a>
                                                        <a href="<?php echo base_url('students/quiz_papers/').$quiz['id'];?>" class="forum-thread-user">
                                                            <img src="assets/images/256_rsz_nicolas-horn-689011-unsplash.jpg" alt="" width="20" class="rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex align-items-center">
                                                        <a href="<?php echo base_url('students/quiz_papers/').$quiz['id'];?>" class="text-body"><strong><?php echo $quiz['exam_type'];?></strong></a>
                                                        <small class="ml-auto text-muted"><?php echo date($quiz['created_on']);?></small>
                                                    </div>
                                                    <a class="text-black-70" href="<?php echo base_url('students/quiz_papers/').$quiz['qqid'];?>"><?php echo $quiz['title'];?></a>
                                                </div>
                                            </div>
                                        </li>
											<?php
											}
											?>


                                        <!-- <li class="list-group-item forum-thread">
                                            <div class="media align-items-center">
                                                <div class="media-left">
                                                    <div class="forum-icon-wrapper">
                                                        <a href="student-forum-thread.html" class="forum-thread-icon">
                                                            <i class="material-icons">description</i>
                                                        </a>
                                                        <a href="student-profile.html" class="forum-thread-user">
                                                            <img src="assets/images/256_rsz_sharina-mae-agellon-377466-unsplash.jpg" alt="" width="20" class="rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex align-items-center">
                                                        <a href="student-profile.html" class="text-body"><strong>Sherri J. Cardenas</strong></a>
                                                        <small class="ml-auto text-muted">3 min ago</small>
                                                    </div>
                                                    <a class="text-black-70" href="student-forum-thread.html">Responsive Bootstrap Question</a>
                                                </div>
                                            </div>
                                        </li>
 -->

<!-- 
                                        <li class="list-group-item forum-thread">
                                            <div class="media align-items-center">
                                                <div class="media-left">
                                                    <div class="forum-icon-wrapper">
                                                        <a href="student-forum-thread.html" class="forum-thread-icon">
                                                            <i class="material-icons">description</i>
                                                        </a>
                                                        <a href="student-profile.html" class="forum-thread-user">
                                                            <img src="assets/images/256_rsz_karl-s-973833-unsplash.jpg" alt="" width="20" class="rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex align-items-center">
                                                        <a href="student-profile.html" class="text-body"><strong>Joseph S. Ferland</strong></a>
                                                        <small class="ml-auto text-muted">10 min ago</small>
                                                    </div>
                                                    <a class="text-black-70" href="student-forum-thread.html">Can someone help me with the basic Setup?</a>
                                                </div>
                                            </div>
                                        </li> -->


                                    </ul>
                                </div>

                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center pagination-sm ">
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
                                            <a class="page-link" href="#" aria-label="2">
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
                                </nav>


                            </div>
                            <div class="col-md-4">

                                <h4>Top Streaks</h4>
                                <p class="text-black-70">Participate on discussions on consecutive days to earn your IQ streak.</p>



                                <div class="mb-4">

                                    <div class="d-flex align-items-center mb-2">
                                        <a href="student-profile.html" class="avatar avatar-sm mr-3">
                                            <img src="assets/images/people/50/guy-1.jpg" alt="course" class="avatar-img rounded-circle">
                                        </a>
                                        <a href="student-profile.html" class="flex mr-2 text-body"><strong>Luci Bryant</strong></a>
                                        <span class="text-black-70 mr-2">1,233</span>
                                        <i class="text-muted material-icons font-size-16pt">opacity</i>
                                    </div>

                                    <div class="d-flex align-items-center mb-2">
                                        <a href="student-profile.html" class="avatar avatar-sm mr-3">
                                            <img src="assets/images/people/50/guy-2.jpg" alt="course" class="avatar-img rounded-circle">
                                        </a>
                                        <a href="student-profile.html" class="flex mr-2 text-body"><strong>Magnus Goldsmith</strong></a>
                                        <span class="text-black-70 mr-2">1,230</span>
                                        <i class="text-muted material-icons font-size-16pt">opacity</i>
                                    </div>

                                    <div class="d-flex align-items-center mb-2">
                                        <a href="student-profile.html" class="avatar avatar-sm mr-3">
                                            <img src="assets/images/people/50/woman-1.jpg" alt="course" class="avatar-img rounded-circle">
                                        </a>
                                        <a href="student-profile.html" class="flex mr-2 text-body"><strong>Katelyn Rankin</strong></a>
                                        <span class="text-black-70 mr-2">1,119</span>
                                        <i class="text-muted material-icons font-size-16pt">opacity</i>
                                    </div>

                                    <div class="d-flex align-items-center mb-2">
                                        <a href="student-profile.html" class="avatar avatar-sm mr-3">
                                            <img src="assets/images/256_rsz_nicolas-horn-689011-unsplash.jpg" alt="course" class="avatar-img rounded-circle">
                                        </a>
                                        <a href="student-profile.html" class="flex mr-2 text-body"><strong>Jenell D. Matney</strong></a>
                                        <span class="text-black-70 mr-2">998</span>
                                        <i class="text-muted material-icons font-size-16pt">opacity</i>
                                    </div>

                                    <div class="d-flex align-items-center mb-2">
                                        <a href="student-profile.html" class="avatar avatar-sm mr-3">
                                            <img src="assets/images/256_rsz_sharina-mae-agellon-377466-unsplash.jpg" alt="course" class="avatar-img rounded-circle">
                                        </a>
                                        <a href="student-profile.html" class="flex mr-2 text-body"><strong>Sherri J. Cardenas</strong></a>
                                        <span class="text-black-70 mr-2">950</span>
                                        <i class="text-muted material-icons font-size-16pt">opacity</i>
                                    </div>

                                    <div class="d-flex align-items-center mb-2">
                                        <a href="student-profile.html" class="avatar avatar-sm mr-3">
                                            <img src="assets/images/256_rsz_karl-s-973833-unsplash.jpg" alt="course" class="avatar-img rounded-circle">
                                        </a>
                                        <a href="student-profile.html" class="flex mr-2 text-body"><strong>Joseph S. Ferland</strong></a>
                                        <span class="text-black-70 mr-2">652</span>
                                        <i class="text-muted material-icons font-size-16pt">opacity</i>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
