
<!--------------     question post start      ------------>
<div class="container-fluid page__container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="instructor-dashboard.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="instructor-quizzes.html">question Manager</a></li>
                            <li class="breadcrumb-item active">Edit question</li>
                        </ol>
                        <h1 class="h2">Vue.js Deploy question</h1>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic</h4>
                            </div>
                            <div class="card-body">
                            <form id="upform" action="<?php echo base_url("admin/questionpost-confirm") ;?>" enctype="multipart/form-data" method="post">
                                    <div class="form-group row">
                                        <label for="quiz_title" class="col-sm-3 col-form-label form-label">question Title:</label>
                                        <div class="col-sm-9">
                                            <input id="quiz_title" type="text" name="title" class="form-control" placeholder="question Title" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="quiz_title" class="col-sm-3 col-form-label form-label">description</label>
                                        <div class="col-sm-9">
                                            <textarea id="quiz_title" type="text" name="description"class="form-control" placeholder="description" ></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="choose_1" class="col-sm-3 col-form-label form-label">Option-1 :</label>
                                        <div class="col-sm-9">
                                            <input id="choose_1" type="text" name="choose_1" class="form-control" placeholder="Option-1" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="choose_2" class="col-sm-3 col-form-label form-label">Option-2:</label>
                                        <div class="col-sm-9">
                                            <input id="choose_2" type="text" name="choose_2" class="form-control" placeholder="Option-2" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="choose_3" class="col-sm-3 col-form-label form-label">Option-3:</label>
                                        <div class="col-sm-9">
                                            <input id="choose_3" type="text" name="choose_3" class="form-control" placeholder="Option-3" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="choose_4" class="col-sm-3 col-form-label form-label">Option-4:</label>
                                        <div class="col-sm-9">
                                            <input id="choose_4" type="text" name="choose_4" class="form-control" placeholder="Option-3">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="correct" class="col-sm-3 col-form-label form-label">correct:</label>
                                        <div class="col-sm-9">
                                            <input id="correct" type="text" name="correct" class="form-control" placeholder="correct" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="course_title" class="col-sm-3 col-form-label form-label">Course:</label>
                                        <div class="col-sm-9 col-md-4">
                                            <select id="course_title" name="category_id" class="custom-select form-control">
                                                <!--<option value="#">HTML</option>
                                                <option value="#">Angular JS</option>
                                                <option value="#" selected>Vue.js</option>
                                                <option value="#">CSS / LESS</option>
                                                <option value="#">Design / Concept</option>-->
                                                <option value="">select Category</option> 

                                                <?php

                                                    $results = $this->om->view('*', "category");
                                                        foreach($results as $result){
                                                        
                                                        echo "<option value='{$result->id}'>{$result->name}</option>";
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="quiz_image" class="col-sm-3 col-form-label form-label">question Image:</label>
                                        <div class="col-sm-9 col-md-4">
                                            <p><img src="<?php echo base_url();?>dassets/images/vuejs.png" alt="" width="150" class="rounded"></p>
                                            <div class="custom-file">
                                                <input type="file" id="quiz_image" name="pic" class="custom-file-input">
                                                <label for="quiz_image" class="custom-file-label">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cmn-toggle" class="col-sm-3 col-form-label form-label">video duration</label>
                                        <div class="col-sm-9">
                                            <!-- <div class="form-group">
                                                <div class="custom-control custom-checkbox-toggle">
                                                    <input id="cmn-toggle" type="checkbox"  aria-checked="false" class="custom-control-input" role="switch">
                                                    <label class="custom-control-label" for="cmn-toggle"><span class="sr-only">Timeframe</span></label>
                                                </div>
                                            </div> -->
                                            <div class="form-inline">
                                                <div class="form-group mr-2">
                                                    <input type="text" name="duration" id="cmn-toggle" class="form-control text-center" value="4" style="width:50px;">
                                                </div>
                                                <!-- <div class="form-group">
                                                    <select class="custom-select">
                                                        <option value="hour" selected>Hours</option>
                                                        <option value="minutes">Minutes</option>
                                                    </select>
                                                </div> -->
                                            </div>
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
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Questions</h4>
                            </div>
                            <div class="card-header">
                                <a href="#" data-toggle="modal" data-target="#editQuiz" class="btn btn-outline-secondary">Add Question <i class="material-icons">add</i></a>
                            </div>
                            <div class="nestable" id="nestable">
                                <ul class="list-group list-group-fit nestable-list-plain mb-0">
                                    <li class="list-group-item nestable-item">
                                        <div class="media align-items-center">
                                            <div class="media-left">
                                                <a href="#" class="btn btn-default nestable-handle"><i class="material-icons">menu</i></a>
                                            </div>
                                            <div class="media-body">
                                                Installation
                                            </div>
                                            <div class="media-right text-right">
                                                <div style="width:100px">
                                                    <a href="#" data-toggle="modal" data-target="#editQuiz" class="btn btn-primary btn-sm"><i class="material-icons">edit</i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item nestable-item">
                                        <div class="media align-items-center">
                                            <div class="media-left">
                                                <a href="#" class="btn btn-default nestable-handle"><i class="material-icons">menu</i></a>
                                            </div>
                                            <div class="media-body">
                                                The MVC architectural pattern
                                            </div>
                                            <div class="media-right text-right">
                                                <div style="width:100px">
                                                    <a href="#" data-toggle="modal" data-target="#editQuiz" class="btn btn-primary btn-sm"><i class="material-icons">edit</i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item nestable-item">
                                        <div class="media align-items-center">
                                            <div class="media-left">
                                                <a href="#" class="btn btn-default nestable-handle"><i class="material-icons">menu</i></a>
                                            </div>
                                            <div class="media-body">
                                                Database Models
                                            </div>
                                            <div class="media-right text-right">
                                                <div style="width:100px">
                                                    <a href="#" data-toggle="modal" data-target="#editQuiz" class="btn btn-primary btn-sm"><i class="material-icons">edit</i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item nestable-item" data-id="4">
                                        <div class="media align-items-center">
                                            <div class="media-left">
                                                <a href="#" class="btn btn-default nestable-handle"><i class="material-icons">menu</i></a>
                                            </div>
                                            <div class="media-body">
                                                Database Access
                                            </div>
                                            <div class="media-right text-right">
                                                <div style="width:100px">
                                                    <a href="#" data-toggle="modal" data-target="#editQuiz" class="btn btn-primary btn-sm"><i class="material-icons">edit</i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item nestable-item" data-id="5">
                                        <div class="media align-items-center">
                                            <div class="media-left">
                                                <a href="#" class="btn btn-default nestable-handle"><i class="material-icons">menu</i></a>
                                            </div>
                                            <div class="media-body">
                                                Eloquent Basics
                                            </div>
                                            <div class="media-right text-right">
                                                <div style="width:100px">
                                                    <a href="#" data-toggle="modal" data-target="#editQuiz" class="btn btn-primary btn-sm"><i class="material-icons">edit</i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item nestable-item" data-id="6">
                                        <div class="media align-items-center">
                                            <div class="media-left">
                                                <a href="#" class="btn btn-default nestable-handle"><i class="material-icons">menu</i></a>
                                            </div>
                                            <div class="media-body">
                                                Take question
                                            </div>
                                            <div class="media-right text-right">
                                                <div style="width:100px">
                                                    <a href="#" data-toggle="modal" data-target="#editQuiz" class="btn btn-primary btn-sm"><i class="material-icons">edit</i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
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