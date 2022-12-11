
                <div class="mdk-drawer-layout__content page ">
                 <form action="<?php echo base_url("admin/sectionpost-confirm") ;?>" enctype="multipart/form-data" method="post">
                    <div class="container-fluid page__container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="instructor-dashboard.html">Home</a></li>
                            <li class="breadcrumb-item active">Courses</li>
                        </ol>
                        <h1 class="h2">Add Section</h1>
                        
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
                                        <label for="course" class="col-md-3 col-form-label form-label">category</label>
                                        <div class="col-md-4">
                                            <select id="course" name="category_id" class="custom-control custom-select form-control">
                                                <option value="0">select category</option>
                                                  <?php
                                                    $results = $this->om->view('*', "category");
                                                            foreach($results as $result){
                                                            
                                                            echo "<option value='{$result->id}'>{$result->name}</option>";
                                                        }
                                                    ?>
                                            </select>
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

