
        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">

            <div data-push data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">
                <div class="mdk-drawer-layout__content page ">

                    <div class="container-fluid page__container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
                            <li class="breadcrumb-item active">Quiz</li>
                        </ol>
                        <div class="card-group">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h4 class="mb-0"><strong>25</strong></h4>
                                    <small class="text-muted-light">TOTAL</small>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body text-center">
                                    <h4 class="text-success mb-0"><strong>3</strong></h4>
                                    <small class="text-muted-light">CORECT</small>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body text-center">
                                    <h4 class="text-danger mb-0"><strong>5</strong></h4>
                                    <small class="text-muted-light">WRONG</small>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body text-center">
                                    <h4 class="text-primary mb-0"><strong>17</strong></h4> 
                                    <small class="text-muted-light">LEFT</small>
                                </div>
                            </div>
						</div>
					
                        <div class="card">
						<?php

					// echo "<form action='base_url("students/quiz_insert")' method='post'>";


					foreach($post_course as $post){
						$question_id=$post['id'];
					?>
							<div class="card-header">
                                <div class="media align-items-center">
                                    <div class="media-left">
										<h4 class="mb-0"><strong>#<?php echo $question_id;?></strong></h4>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="card-title">
										<?php echo $post['question'];?>
                                        </h4>
                                    </div>
                                </div>
							</div>
							<!-- <?php echo validation_errors(); ?> -->
							<?php echo form_open(base_url('students/quiz_insert')); ?> 
							<?php
						
							

								//echo "<div><strong>".$post['id']. $post['question']."</strong></div>";
								//$results[]="";
								// $option_result=$db->query("select id,options,is_correct from question_bank_details where question_id='$question_id'");
								
								$results = $this->om->view('id,options,is_correct', "questions_bank_details",['question_id'=>$question_id]);

							//	print_r($results);
							
								foreach($results as $result){
		 
								
									 $option=$result->options;
									
										$option_id=$result->id;
										 $is_correct=$result->is_correct;
										
									
										       

									  echo "     
									  <div class='form-group'>
										<div class='custom-control custom-checkbox'>
											<div class='input-group'>
													<div class='input-group-prepend'>
														<div class='input-group-text' style='margin-top:5px'>
																<input type='radio' value='$question_id,$option_id,$option,$is_correct' name='question[$question_id]' >
														</div>
												</div>
													<p style='margin:10px;'> $option </p>
											</div>
										</div>
									  </div>
									  ";

									 
								 }
								
							
						

							}
							?>
							<div class="card-footer">
							<a href="#" class="btn btn-white">Skip</a>
							<button type="submit"  class="btn btn-success" value="send">Submit <i class="material-icons btn__icon--right">send</i></button>
							</div>
							<?php
						echo "</form>";
						?>
						</div>
					
					</div>
	<!-- navigation -->
				<nav aria-label="Page navigation example" style="margin: 100px;">
				<ul class="pagination pagination-sm ">
					<li class="page-item disabled">
					<a class="page-link" href="#" aria-label="Previous">
						<span aria-hidden="true" class="material-icons">first_page</span>
						<span class="sr-only">First</span>
					</a>
					</li>
					
					<li class="page-item disabled">
					<a class="page-link" href="#" aria-label="Previous">
						<span aria-hidden="true" class="material-icons">chevron_left</span>
						<span class="sr-only">Prev</span>
					</a>
					</li>
				
				
					<li class="page-item">
						<a class="page-link" href="">
					
							<span></span>
						</a>
					</li>
				
					
					<!-- <li class="page-item">
					<a class="page-link" href="#" aria-label="2">
						<span>2</span>
					</a>
					</li> -->
					
					<li class="page-item">
					<a class="page-link" href="#" aria-label="Next">
						<span class="sr-only">Next</span>
						<span aria-hidden="true" class="material-icons">chevron_right</span>
					</a>
					</li>
					
					<li class="page-item">
					<a class="page-link" href="#" aria-label="Next">
						<span class="sr-only">Last</span>
						<span aria-hidden="true" class="material-icons">last_page</span>
					</a>
					</li>
				</ul>
			</nav>
	<!-- navigation -->
			
			</div>
				




                <div class="mdk-drawer js-mdk-drawer" data-align="end">
                    <div class="mdk-drawer__content ">
                        <div class="sidebar sidebar-right sidebar-light bg-white o-hidden" data-perfect-scrollbar>
                            <div class="sidebar-p-y">
                                <div class="sidebar-heading">Time left</div>
                                <div class="countdown sidebar-p-x" data-value="4" id="demo" data-unit="hour"></div>

                                <div class="sidebar-heading">Pending</div>
                                <ul class="list-group list-group-fit">
                       
						
                                
                                    <li class="list-group-item">
                                        <a href="#">
                                            <span class="media align-items-center">
                                                <span class="media-left">
                                                    <span class="btn btn-white btn-circle">#name</span>
                                                </span>
                                                <span class="media-body">
                                             
                                                </span>
                                            </span>
                                        </a>
                                    </li>
									<script>
                                        $(document).ready(function(){
                                            $(".m<?php echo $course['id'] ;?>").click(function(){
                                                // $("iframe").attr("src", "https://www.youtube.com/embed/qhHwnv2Q2JA");
                                                    $("iframe").attr("src", "<?php echo $course['upvideo'] ;?>");
                                                    
                                                   
                                                        // $("#m<?php echo $course['id'] ;?>").attr("class", "list-group-item active");
                                                   
                                                                                     
                                            });


                                            // $("#btn2").click(function(){

                                            //     $("#test2").html("<h2>Hello world!</h2>");
                                            // });
                                                                                    


                                        });
                                  </script>
                                   
                                    <li class="list-group-item">
                                        <a href="#">
                                            <span class="media align-items-center">
                                                <span class="media-left">
                                                    <span class="btn btn-white btn-circle">#10</span>
                                                </span>
                                                <span class="media-body">
                                                    What's the difference between private and public repos?
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">
                                            <span class="media align-items-center">
                                                <span class="media-left">
                                                    <span class="btn btn-white btn-circle">#11</span>
                                                </span>
                                                <span class="media-body">
                                                    What is the purpose of a branch?
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">
                                            <span class="media align-items-center">
                                                <span class="media-left">
                                                    <span class="btn btn-white btn-circle">#12</span>
                                                </span>
                                                <span class="media-body">
                                                    Final Question?
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

          
                <script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds

  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML =hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
            

        </div>
    </div>



