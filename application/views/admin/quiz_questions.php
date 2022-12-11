
<!--------------     question post start      ------------>
<div class="container-fluid page__container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="instructor-dashboard.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="instructor-quizzes.html">question Manager</a></li>
                            <li class="breadcrumb-item active">Edit question</li>
                        </ol>
                        <h1 class="h2">categories add</h1>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic</h4>
                            </div>
                            <div class="card-body">
                            <form id="upform" action="<?php echo base_url("admin/quiz_questions-confirm") ;?>" enctype="multipart/form-data" method="post">
                                    <div class="form-group row">
                                        <label for="quiz_title" class="col-sm-3 col-form-label form-label">exam_type :</label>
                                        <div class="col-sm-9">
										<select name="exam_id" id="quiz_title"class="form-control">
												<?php
                                                foreach ($exam_type as $exam) {
					                             ?>
													<option value="<?php echo $exam['id'];?>" class="form-control"><?php echo $exam['exam_type'];?></option>
													<?php
                                                   }
													?> 
											</select>									
                                          
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="quiz_title" class="col-sm-3 col-form-label form-label">question</label>
                                        <div class="col-sm-9">
									    	<select name="question_id" id="quiz_title"class="form-control">
												<?php
                                                foreach ($questions_bank as $questions) {
												

                                                    ?>
													<option value="<?php echo $questions['id'];?>" class="form-control"><?php echo $questions['question'];?></option>
													<?php
												}
												
													?> 
											</select>
                                          
                                        </div>
									</div>   
									<div class="form-group row">
                                        <label for="quiz_title" class="col-sm-3 col-form-label form-label">score</label>
                                        <div class="col-sm-9">
											<input id="quiz_title" type="text" name="score" class="form-control" placeholder="score">
                                           
                                        </div>
                                    </div>                               
									<div class="form-group row">
                                        <label for="quiz_title" class="col-sm-3 col-form-label form-label">currect</label>
                                        <div class="col-sm-9">
										<select name="correct" id="quiz_title"class="form-control">
											<?php
                                                foreach ($questions_bank as $questions) {												

                                                    ?>
													<option value="<?php echo $questions['qbdid'];?>" class="form-control"><?php echo $questions['options'];?></option>
													<?php
													}
												
													?> 
                                           </select>
                                        </div>
									</div>       
									<div class="form-group row">
                                        <label for="quiz_title" class="col-sm-3 col-form-label form-label">post_course_id</label>
                                        <div class="col-sm-9">
										<select name="post_course_id" id="quiz_title"class="form-control">
											<?php
                                                foreach ($post_course as $post) {												

                                                    ?>
													<option value="<?php echo $post['id'];?>" class="form-control"><?php echo $post['title'];?></option>
													<?php
													}
												
													?> 
                                           </select>
                                        </div>
									</div>          
									<div class="form-group row">
                                        <label for="quiz_title" class="col-sm-3 col-form-label form-label">category</label>
                                        <div class="col-sm-9">
										<select name="category_id" id="quiz_title"class="form-control">
											<?php
                                                foreach ($category as $cate) {												

                                                    ?>
													<option value="<?php echo $cate['id'];?>" class="form-control"><?php echo $cate['name'];?></option>
													<?php
													}
												
													?> 
                                           </select>
                                        </div>
                                    </div>                                 
                                                
                         
                                    <div class="form-group row mb-0">
                                        <div class="col-sm-9 offset-sm-3">
                                            <button type="submit" class="btn btn-success">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>                       
                    </div>
















               
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#show + img').remove();
            $('#show').after('<img  src="'+e.target.result+'" style="" width="285" height="200">');
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$("#post_img").change(function(){

    filePreview(this);
})
</script>
