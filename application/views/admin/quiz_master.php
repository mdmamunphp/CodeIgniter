
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
                            <form id="upform" action="<?php echo base_url("admin/quiz_master-confirm") ;?>" enctype="multipart/form-data" method="post">
                                    <div class="form-group row">
                                        <label for="quiz_title" class="col-sm-3 col-form-label form-label">exam_type :</label>
                                        <div class="col-sm-9">
                                            <input id="quiz_title" type="text" name="exam_type" class="form-control" placeholder="question name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="quiz_title" class="col-sm-3 col-form-label form-label">title</label>
                                        <div class="col-sm-9">
											<input id="quiz_title" type="text" name="title" class="form-control" placeholder="title">
                                          
                                        </div>
									</div>   
									<div class="form-group row">
                                        <label for="quiz_title" class="col-sm-3 col-form-label form-label">created_on</label>
                                        <div class="col-sm-9">
											<input id="quiz_title" type="date" name="created_on" class="form-control" placeholder="created_on">
                                           
                                        </div>
                                    </div>                               
									<div class="form-group row">
                                        <label for="quiz_title" class="col-sm-3 col-form-label form-label">active</label>
                                        <div class="col-sm-9">
											<input id="quiz_title" type="text" name="active" class="form-control" placeholder="active">
                                           
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
