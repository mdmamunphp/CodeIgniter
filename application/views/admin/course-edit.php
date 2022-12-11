<div class="container-fluid page__container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="instructor-dashboard.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="instructor-courses.html">Courses</a></li>
                            <li class="breadcrumb-item active">Course Post</li>
                        </ol>
                          <!-- form er error check korar jonno-->
                          <?php 
                            $t =$this->session->flashdata('s');
                                $string = read_file($t);
                                if($string){

                                    echo '<p>'. $string .'</p>';
                                }
                               
                        $success =$this->session->flashdata('success');
                        if($success){
                            echo '<h2>'. $success .'</h2>';
                        }
                     
                    
                       
    

                        ?>



    <?php 
    
       foreach($coursedetails as $result){

       

    ?>
                        <form action="<?php echo base_url("admin/update-confirm/{$result->id}") ;?>" enctype="multipart/form-data" method="post">
                        <div class="media align-items-center mb-headings">
                            <div class="media-body">
                                <h1 class="h2">Course Post</h1>
                            </div>
                            <div class="media-right">
                                <input type="submit"  class="btn btn-success" value="send">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Basic Information</h4>
                                    </div>
                                    <div class="card-body">

                                        <div class="form-group">
                                            <label class="form-label" for="title">Title</label>
                                            <input type="text" name="title"  value ="<?php echo $result->title ;?>" id="title"  class="form-control" placeholder="Write a title" >
                                        </div>

                                        <div class="form-group mb-0">
                                            <label class="form-label">Description</label>
                                            <div style="height: 150px;" data-toggle="quill" >
                                                <textarea type="text" name="description" placeholder="<?php echo $result->description ;?>" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="Price">Price</label>
                                            <input type="text" name="price"value="<?php echo $result->price ;?>" id="Price" class="form-control" placeholder="Write a Price" >
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="Discount">Discount</label>
                                            <input type="text" name="discount" value="<?php echo $result->discount ;?>"id="Discount" class="form-control" placeholder="Write a Discount" >
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="requirement">Requirement </label>
                                            <input type="text" name="requirement"value="<?php echo $result->requirement ;?>" id="requirement " class="form-control" placeholder="Write a requirement " >
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Lessons</h4>
                                    </div>
                                    <div class="card-body">
                                        <p><a href="instructor-lesson-add.html" class="btn btn-primary">Add Lesson <i class="material-icons">add</i></a></p>
                                        <div class="nestable" id="nestable-handles-primary">
                                            <ul class="nestable-list">
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <!-- <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/97243285?title=0&amp;byline=0&amp;portrait=0" allowfullscreen=""></iframe> -->
                                            <iframe class="embed-responsive-item" id="" value="post_img_v" src="<?php echo base_url('assets/images/courses/courses-1.jpg') ;?>" allowfullscreen=""></iframe>
                                    </div>
                                    <div class="card-body">
                                        <input type="file" name="pic" id="post_img" class="form-control"/>
                                        <img src="<?php echo base_url('images/course_post/reg/'.$result->id.$result->images) ;?>" >
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Meta</h4>
                                        <p class="card-subtitle">Extra Options </p>
                                    </div>

                                    <!-- <form class="card-body" action="#"> -->
                                        <div class="form-group">
                                            <label class="form-label" for="category">Category</label>
                                            <select id="category" name="category_id"  class="custom-select form-control">
                                                <option value="1">HTML</option>
                                                <option value="2">Angular JS</option>
                                                <option value="3">Vue.js</option>
                                                <option value="4">CSS / LESS</option>
                                                <option value="5">Design / Concept</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="instructor_id">INSTRUCTOR</label>
                                            <select id="instructor_id" name="instructor_id" class="custom-select form-control">

                                                <option value="">select instructor</option>
                                                  <?php
                                                  
                                                  $results = $this->om->view('*', "instructor");
                                                        foreach($results as $result){
                                                        
                                                        echo "<option value='{$result->id}'>{$result->name}</option>";
                                                    }
                                                    
                                                ?>
                                               
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="duration">Duration</label>
                                            <input type="text" name="duration"  id="duration" class="form-control" placeholder="No. of Days" value="10">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="start">Start Date</label>
                                            <input id="start" type="date" name="start_time" class="form-control" placeholder="Start Date" data-toggle="flatpickr" value="01/28/2016">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="end">End Date</label>
                                            <input id="end" type="date" name="reg_last_date" class="form-control" placeholder="Start Date" data-toggle="flatpickr" value="01/28/2016">
                                        </div>

                                        <div class="form-group mb-0">
                                            <label class="form-label" for="option1">Completion Badge</label>
                                            <div>
                                                <div data-toggle="buttons">
                                                    <label class="btn btn-primary btn-circle active">
                                                        <input type="radio" class="d-none" name="options" id="option1" checked>
                                                        <i class="material-icons">person</i>
                                                    </label>
                                                    <label class="btn btn-danger btn-circle">
                                                        <input type="radio" class="d-none" name="options" id="option2">
                                                        <i class="material-icons">star</i>
                                                    </label>
                                                    <label class="btn btn-success btn-circle">
                                                        <input type="radio" class="d-none" name="options" id="option3">
                                                        <i class="material-icons">shop</i>
                                                    </label>
                                                    <label class="btn btn-warning btn-circle">
                                                        <input type="radio" class="d-none" name="options" id="option4">
                                                        <i class="material-icons">monetization_on</i>
                                                    </label>
                                                    <label class="btn btn-info btn-circle">
                                                        <input type="radio" class="d-none" name="options" id="option5">
                                                        <i class="material-icons">enhanced_encryption</i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- </form> -->
                                </div>
                            </div>
                        </div>
                     </form>

                     <?php
                }
              ?>
                </div>


<script>
jQuery(document).ready(function () {
    if (!jQuery("#header_logo_upload_text").val()) {
        jQuery("#header_logo_remove").hide();
    }
    jQuery("#header_logo_remove").click(function (e) {
        e.preventDefault();
        jQuery("#post_img_v").val("");
        jQuery("#header_logo_remove").hide();
        jQuery("#change_pic").hide();
    });



           //********************* Header Advertise end ************************

    jQuery("body").on("click", "#post_img", function (e) {
        e.preventDefault();
        var image = wp.media({
            title: 'Upload Image',
            multiple: false
        }).open()
            .on('select', function (e) {
                var uploaded_image = image.state().get('selection').first();
                //console.log(uploaded_image);
                var image_url = uploaded_image.toJSON().url;
                jQuery("#post_img").val(image_url);
                if (image_url) {
                    jQuery("#header_logo_remove").show();
                    jQuery("#change_pic").show();
                    jQuery("#change_pic").attr("src", image_url);
                }
            });
    });


 

});








</script>