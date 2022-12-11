
                <div class="mdk-drawer-layout__content page ">
                 <form action="<?php echo base_url("admin/lessionpost-confirm") ;?>" enctype="multipart/form-data" method="post">
                    <div class="container-fluid page__container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="instructor-dashboard.html">Home</a></li>
                            <li class="breadcrumb-item active">Courses</li>
                        </ol>
                        <h1 class="h2">Add Lesson</h1>
                        
                        <div class="card">
                            <div class="card-body">
                              
                                    <div class="form-group row">
                                        <label for="avatar" class="col-sm-3 col-form-label form-label">Preview</label>
                                        <div class="col-sm-9">
                                            <div class="media align-items-center">
                                                <div class="media-left">
                                                    <img src="<?php echo base_url();?>dassets/images/vuejs.png" alt="" width="100" class="rounded">
                                                </div>
                                                <div class="media-body">
                                                    <div class="custom-file" style="width: auto;">
                                                        <input type="file" id="avatar"  name="preview" class="custom-file-input">
                                                        <label for="avatar" class="custom-file-label">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="media-right">
                                                    <input type="submit"  class="btn btn-success" value="send">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="title" class="col-md-3 col-form-label form-label">Title</label>
                                        <div class="col-md-6">
                                            <input id="title" type="text"  name="title"class="form-control" placeholder="Write an awesome title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="course" class="col-md-3 col-form-label form-label">Course</label>
                                        <div class="col-md-4">
                                            <select id="course" name="course_id" class="custom-control custom-select form-control">
                                                <option value="0">Select Course</option>
                                                <?php
                                                    $results = $this->om->view('*', "post_course");
                                                            foreach($results as $result){
                                                            
                                                            echo "<option value='{$result->id}'>{$result->title}</option>";
                                                        }
                                                    ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="course" class="col-md-3 col-form-label form-label">Section</label>
                                        <div class="col-md-4">
                                            <select id="course" name="category_id" class="custom-control custom-select form-control">
                                                <option value="0">select section</option>
                                                  <?php
                                                    $results = $this->om->view('*', "section");
                                                            foreach($results as $result){
                                                            
                                                            echo "<option value='{$result->id}'>{$result->title}</option>";
                                                        }
                                                    ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="title" class="col-md-3 col-form-label form-label">Duration</label>
                                        <div class="col-md-6">
                                            <input id="title" type="text"  name="duration" class="form-control" placeholder="video duration">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label form-label">Upload Video</label>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <input type="file" id="avatar"  name="upvideo" class="custom-file-input">
                                                        <label for="avatar" class="custom-file-label">Choose file</label>
                                                        <small class="form-text text-muted d-flex align-items-center">
                                                            <i class="material-icons font-size-16pt mr-1">ondemand_video</i>
                                                            <span class="icon-text">Paste Video</span>
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="embed-responsive embed-responsive-16by9">
                                                            <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/97243285?title=0&amp;byline=0&amp;portrait=0" allowfullscreen=""></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                              
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Files</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <input type="file" id="avat"  name="files" >
                                                        <!-- <label for="avat" class="custom-file-label">Choose file</label> -->
                                    </div>
                                    <div class="col-md-6">
                                        <div data-toggle="tree">
                                            <ul style="display: none;">
                                                <li class="folder expanded">
                                                    lesson files
                                                    <ul>
                                                        <li>lesson-1-install.zip</li>
                                                        <li>lesson-1-steps.zip</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </form>

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

