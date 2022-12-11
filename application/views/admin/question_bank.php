
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
                            <form id="upform" action="<?php echo base_url("admin/question_bank-confirm") ;?>" enctype="multipart/form-data" method="post">
                                    <div class="form-group row">
                                        <label for="quiz_title" class="col-sm-3 col-form-label form-label">question :</label>
                                        <div class="col-sm-9">
                                            <input id="quiz_title" type="text" name="question" class="form-control" placeholder="question name" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="quiz_title" class="col-sm-3 col-form-label form-label">score</label>
                                        <div class="col-sm-9">
                                            <textarea id="quiz_title" type="text" name="score"class="form-control" placeholder="score" ></textarea>
                                        </div>
									</div>   
									<div class="form-group row">
                                        <label for="quiz_title" class="col-sm-3 col-form-label form-label">inactive</label>
                                        <div class="col-sm-9">
                                            <textarea id="quiz_title" type="text" name="inactive"class="form-control" placeholder="inactive" ></textarea>
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
