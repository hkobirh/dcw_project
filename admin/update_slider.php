<?php
require_once 'inc/header.php';
$id = isset($_GET['edit']) ? $_GET['edit']:'';
use  App\Classes\Slider;
$slider = new Slider();
$result = $slider->getSlider($id);
if($result->num_rows == 0 ){
    header('location: ./sliders.php');
}
$row = $result->fetch_assoc();

$base_url = 'http://localhost/ssit_dcw/';

?>


    <section class="p-2 slider_min_section mb-3">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-6">
                    <h3>Slider Update</h3>
                </div>
                <div class="col-6 text-right">
                    <a href="sliders.php" class="btn btn-primary"> <i class="fas fa-tasks"></i> Update Slider</a>
                </div>
            </div>
            <hr>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3> Update Slider</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="" enctype="multipart/form-data" data-url="slider-update" id="update_slider_form">
                                <div class="form-group row">
                                    <label for="titel" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="u_title" id="titel" value="<?= $row['title'];?>">
                                        <input type="hidden" class="form-control" name="u_id" value="<?= $row['id'];?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="subtitel" class="col-sm-2 col-form-label">Sub Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="u_subtitle" id="subtitel" value="<?= $row['sub_title'];?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="startdate" class="col-sm-2 col-form-label">Start Date</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control datepick " name="u_start_date" id="startdate" value="<?= $row['start_date'];?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="enddate" class="col-sm-2 col-form-label">End Date</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control datepick" name="u_end_date" id="enddate" value="<?= $row['end_date'];?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="url_1" class="col-sm-2 col-form-label">Url 1</label>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" name="u_url_1" id="url_1" value="<?= $row['url_1'];?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="image" class="col-sm-2 col-form-label"> Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image" id="image" onchange="imageview(this)">
                                        <img src="<?= $base_url.'img/slider/'.$row['image']?>" alt="image" class="image_preview">
                                        <input type="hidden" name="old_image" id="image" value="<?= $row['image'];?>">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10 mt-1">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="active" value="1" name="u_status" checked class="custom-control-input ">
                                            <label class="custom-control-label " for="active">Active</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="inactive" value="0" name="u_status" class="custom-control-input ">
                                            <label class="custom-control-label " for="inactive">Inactive</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-right ">
                                    <button class="btn btn-primary " type="submit "><i class="fa fa-check "></i> Update Slider</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'inc/footer.php' ?>