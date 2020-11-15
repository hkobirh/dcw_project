<?php 

require_once 'inc/header.php';


use App\Classes\Slider;

$slider = new Slider();

$result = $slider->slider_data_get();

?>


<section class="p-2 slider_min_section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-6">
                <h3> Manage Slider</h3>
            </div>
            <div class="col-6 text-right">
                <a href="addslider.php" class="btn btn-primary"> <i class="fa fa-plus"> </i> Add New Slider</a>
            </div>
        </div>
        <hr>
        <div class="table-responsive">
            <table id="slidermanage" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>S.L</th>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Image</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  while ($slider_row = $result->fetch_assoc()) { ?>
                     <tr class="remove-row-<?= $slider_row['id'] ?>">
                        <td><?= $slider_row['id'] ?></td>
                        <td><?= $slider_row['title'] ?></td>
                        <td><?= $slider_row['sub_title'] ?></td>
                        <td><img src="<?= $slider->base_url.'img/slider/'.$slider_row['image'] ?>" alt="" class="slider_image"></td>
                        <td><?= $slider_row['start_date'] . ' To ' . $slider_row['end_date'] ?></td>
                        <td><?php 
                                if ( $slider_row['status'] == 1){
                                    echo 'Active';
                                }else{
                                    echo 'Inactive';
                                };
                            ?>
                        </td>
                        <td>

                            <a href="update_slider.php?edit=<?=$slider_row['id']?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <button id="Slider-Delete" class="btn Slider-Delete btn-danger" data-id="<?= $slider_row['id'] ?>" ><i class="fa fa-trash"></i></button>


                            <!-- <-<button id="Slider-Delete" class="btn btn-sm btn-danger slider-delete" data-id="<?= $slider_row['id'] ?>"> <i class="fa-trash"></i></button> -->
                            <!-- <button class="btn btn-danger remove-slider" id="Slider-Delete" data-id="<?= $slider_row['id'] ?>"><i class="fa fa-trash"></i> </button> -->
                            
                            <?php 
                            if ( $slider_row['status'] == 1){
                                echo '<a href="" class="btn btn-warning"><i class="fa fa-arrow-down"></i></a>' ;
                            }else{
                                echo '<a href="" class="btn btn-sm btn-success"><i class="fa fa-arrow-up"></i></a>' ;
                            };
                        ?>

                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th class="s" >Sl No</th>
                        <th class="t" >Totel</th>
                        <th class="st">Sub Totel</th>
                        <th class="i">Image</th>
                        <th class="tl">Time Limit</th>
                        <th class="ss">Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>
</section>




<?php require_once 'inc/footer.php' ?>