<div class="container-fluid page__container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="instructor-dashboard.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="instructor-quizzes.html">Quiz Manager</a></li>
                            <li class="breadcrumb-item active">Quiz Review</li>
                        </ol>

                        <div class="media flex-wrap align-items-center mb-headings">
                            <div class="media-left avatar avatar-lg avatar-4by3">
                                <img src="assets/images/vuejs.png" alt="" class="avatar-img rounded">
                            </div>
                            <div class="media-body mb-3 mb-sm-0">
                                <h1 class="h2 mb-0">Vue.js Deploy Quiz</h1>
                                <span class="text-muted">submited by</span> <a href="instructor-profile.html">Adrian Demian</a>
                            </div>
                            <div class="text-left text-sm-right w-100 w-sm-auto">
                                <a href="#" class="btn btn-white btn-sm"><i class="material-icons">keyboard_arrow_left</i></a>
                                <a href="#" class="btn btn-primary btn-sm"><i class="material-icons">keyboard_arrow_right</i></a>
                            </div>
                        </div>

                        <div class="card">
                            <ul class="nav nav-tabs nav-tabs-card">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#first" data-toggle="tab">Review</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#second" data-toggle="tab">All Questions</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#third" data-toggle="tab">php</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="first">
                                    <ul class="list-group mb-0 list-group-fit">
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <p><strong>#9. What are the first three steps?</strong></p>
                                                    <small class="text-muted">ANSWER:</small>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati temporibus blanditiis iste itaque deleniti minima.
                                                    </p>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group d-flex flex-column">
                                                        <label class="form-label" for="customRange2">Score</label>
                                                        <input type="range" class="custom-range" min="0" max="5" id="customRange2">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="2" placeholder="Write comment"></textarea>
                                                    </div>
                                                    <a href="#" class="btn btn-success float-right">Save review <i class="material-icons btn__icon--right">check</i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#"><strong>#12.</strong> How do you deploy?</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="second">
                                    <ul class="list-group mb-0 list-group-fit">
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="text-muted-light">1.</div>
                                                </div>
                                                <div class="media-body">Installation</div>
                                                <div class="media-right"><strong class="text-primary">8</strong></div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="text-muted-light">2.</div>
                                                </div>
                                                <div class="media-body">The MVC architectural pattern</div>
                                                <div class="media-right"><strong class="text-primary">7</strong></div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="text-muted-light">3.</div>
                                                </div>
                                                <div class="media-body">Database Models</div>
                                                <div class="media-right"><strong class="text-primary">9</strong></div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="text-muted-light">4.</div>
                                                </div>
                                                <div class="media-body">Database Access</div>
                                                <div class="media-right"><strong class="text-primary">10</strong></div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="text-muted-light">5.</div>
                                                </div>
                                                <div class="media-body"><a href="#">Eloquent Basics</a></div>
                                                <div class="media-right"><span class="badge badge-success ">Pending Review</span></div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="text-muted-light">6.</div>
                                                </div>
                                                <div class="media-body">Take Quiz</div>
                                                <div class="media-right"><strong class="text-primary">12</strong></div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="card card-footer">
                                        Total Score: <span class="h5 text-primary"><strong>340</strong></span>
                                    </div>
                                </div>

      <!-- start 2nd part -->
                         <div class="card tab-pane" id="third">
                            <div class="card-header form-inline">
                                <div class="form-group ml-auto">
                                    <label for="flatpickrSample02" class="form-label mr-3">Date</label>
                                    <input id="flatpickrSample02" type="text" class="form-control" placeholder="Select dates" data-toggle="flatpickr" data-flatpickr-mode="range" data-flatpickr-alt-input="false" value="2018-10-07 to 2018-10-15">
                                </div>
                            </div>

                              <div data-toggle="lists" data-lists-values='[
                                        "js-lists-values-course", 
                                        "js-lists-values-document",
                                        "js-lists-values-amount",
                                        "js-lists-values-date"
                                    ]' data-lists-sort-by="js-lists-values-date" data-lists-sort-desc="true" class="table-responsive">
                                <table class="table table-nowrap m-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th colspan="2">
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-course">Course</a>
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-document">Document</a>
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-amount">Amount</a>
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-date">Date</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">

                                    <?php
                                                  
                                                  $results = $this->om->view('*', "question");
                                                        foreach($results as $result){
                                                        
                                                      //  echo "<option value='{$result->id}'>{$result->name}</option>";

                                                      
                                            ?>


                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <a href="instructor-course-edit.html" class="avatar avatar-4by3 avatar-sm mr-3">
                                                        <img src="<?php echo base_url();?>dassets/images/vuejs.png" alt="course" class="avatar-img rounded">
                                                    </a>
                                                    <div class="media-body">
                                                        <a class="text-body js-lists-values-course" href="instructor-course-edit.html"><strong> <?php echo $result->title;?>Angular Routing In-Depth</strong></a><br>
                                                        <small class="text-muted mr-1">                                                           
                                                           
                                                            <button type="button" class="btn btn-light">
                                                            <i class="material-icons">home</i><?php echo $result->correct;?>:</button>
                                                               

                                                        </small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <small class="text-muted text-uppercase js-lists-values-date">
                                                <a href="<?php echo base_url('admin/question-edit/').$result->id;?>" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="<?php echo base_url('admin/questionsingle-view/').$result->id;?>" class="btn btn-sm btn-success">View</a>
                                                <a href="<?php echo base_url('admin/question-delete/').$result->id;?>"  class="btn btn-sm btn-danger">Delete</a>
                                                
                                                </small>
                                            </td>
                                        </tr>

                                        <?php

                                                        }

                                        ?>

                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <a href="instructor-course-edit.html" class="avatar avatar-4by3 avatar-sm mr-3">
                                                        <img src="<?php echo base_url();?>dassets/images/vuejs.png" alt="course" class="avatar-img rounded">
                                                    </a>
                                                    <div class="media-body">
                                                        <a class="text-body js-lists-values-course" href="instructor-course-edit.html"><strong>Angular Unit Testing</strong></a><br>
                                                        <small class="text-muted mr-1">
                                                            Invoice
                                                            <a href="instructor-invoice.html" style="color: inherit;" class="js-lists-values-document">#8735</a> -
                                                            &dollar;<span class="js-lists-values-amount">89</span> USD
                                                        </small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <small class="text-muted text-uppercase js-lists-values-date">13 Nov 2018</small>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <a href="instructor-course-edit.html" class="avatar avatar-4by3 avatar-sm mr-3">
                                                        <img src="<?php echo base_url();?>dassets/images/github.png" alt="course" class="avatar-img rounded">
                                                    </a>
                                                    <div class="media-body">
                                                        <a class="text-body js-lists-values-course" href="instructor-course-edit.html"><strong>Introduction to TypeScript</strong></a><br>
                                                        <small class="text-muted mr-1">
                                                            Invoice
                                                            <a href="instructor-invoice.html" style="color: inherit;" class="js-lists-values-document">#8736</a> -
                                                            &dollar;<span class="js-lists-values-amount">89</span> USD
                                                        </small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <small class="text-muted text-uppercase js-lists-values-date">14 Nov 2018</small>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <a href="instructor-course-edit.html" class="avatar avatar-4by3 avatar-sm mr-3">
                                                        <img src="<?php echo base_url();?>dassets/images/gulp.png" alt="course" class="avatar-img rounded">
                                                    </a>
                                                    <div class="media-body">
                                                        <a class="text-body js-lists-values-course" href="instructor-course-edit.html"><strong>Learn Angular Fundamentals</strong></a><br>
                                                        <small class="text-muted mr-1">
                                                            Invoice
                                                            <a href="instructor-invoice.html" style="color: inherit;" class="js-lists-values-document">#8737</a> -
                                                            &dollar;<span class="js-lists-values-amount">89</span> USD
                                                        </small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <small class="text-muted text-uppercase js-lists-values-date">15 Nov 2018</small>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- end 2nd part -->
                            </div>
                        </div>

                        <h4>Review History</h4>
                        <div class="table-responsive">
                            <table class="table table-sm table-middle">
                                <thead>
                                    <tr>
                                        <th style="width: 120px">Submitted</th>
                                        <th>Student</th>
                                        <th class="text-center">Score</th>
                                        <th>Reviewed</th>
                                        <th style="width: 80px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="badge badge-light ">Feb 17th, 2016</span></td>
                                        <td><a href="#">John Smith</a></td>
                                        <td class="text-center"><span class="text-muted">n/a</span></td>
                                        <td><span class="text-muted">PENDING</span></td>
                                        <td class="right"><a href="#" class="btn btn-sm btn-primary">Review</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-light ">Feb 17th, 2016</span></td>
                                        <td><a href="#">Andrew Brain</a>
                                        </td>
                                        <td class="text-center">512</td>
                                        <td class="text-muted">Feb 17th, 2016 by <a href="instructor-profile.html">Adrian D.</a></td>
                                        <td class="right"><a href="#" class="btn btn-sm btn-default">Results</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-light ">Feb 17th, 2016</span></td>
                                        <td><a href="#">Samantha Doe</a></td>
                                        <td class="text-center">123</td>
                                        <td class="text-muted">Feb 17th, 2016 by <a href="instructor-profile.html">Adrian D.</a></td>
                                        <td class="right"><a href="#" class="btn btn-sm btn-default">Results</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


          


                       
                    </div>
