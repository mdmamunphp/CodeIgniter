
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
                            <form id="upform" action="<?php echo base_url("admin/questions_bank_details-confirm") ;?>" enctype="multipart/form-data" method="post">
                                    <div class="form-group row">
                                        <label for="quiz_title" class="col-sm-3 col-form-label form-label">question id:</label>
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
                                        <label for="quiz_title" class="col-sm-3 col-form-label form-label">option</label>
                                        <div class="col-sm-9">
                                            <textarea id="quiz_title" type="text" name="options"class="form-control" placeholder="options" ></textarea>
                                        </div>
									</div>   
									<div class="form-group row">
                                        <label for="quiz_title" class="col-sm-3 col-form-label form-label">is_correct</label>
                                        <div class="col-sm-9">
                                            <textarea id="quiz_title" type="text" name="is_correct"class="form-control" placeholder="inactive" ></textarea>
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
