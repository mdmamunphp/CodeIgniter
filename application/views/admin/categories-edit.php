
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

                            <?php
                            foreach($categoriesdetails as $result){

                                ?>
                          

                            <form id="upform" action="<?php echo base_url("admin/categoriesupdate-confirm/{$result->id}") ;?>" enctype="multipart/form-data" method="post">
                                    <div class="form-group row">
                                        <label for="quiz_title" class="col-sm-3 col-form-label form-label">category Name:</label>
                                        <div class="col-sm-9">
                                            <input id="quiz_title" type="text" name="name"  value="<?php echo $result->name ;?>" class="form-control" placeholder="category name" >
                                        </div>
                                    </div>
                                   

                                    <div class="form-group row">
                                        <!-- <label for="quiz_image" class="col-sm-3 col-form-label form-label">question Image:</label> -->
                                        <div class="col-sm-9 col-md-4">
                                            <p><img src="<?php echo base_url();?>dassets/images/vuejs.png" alt="" width="150" class="rounded"></p>
                                            <!-- <div class="custom-file">
                                                <input type="file" id="quiz_image" name="pic" class="custom-file-input">
                                                <label for="quiz_image" class="custom-file-label">Choose file</label>
                                            </div> -->
                                        </div>
                                    </div>
                                  
                                    <div class="form-group row mb-0">
                                        <div class="col-sm-9 offset-sm-3">
                                            <button type="submit" class="btn btn-success">Save</button>
                                        </div>
                                    </div>
                                </form>
                                <?php
                            }

                            ?>
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
