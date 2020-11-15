<?php

header('content-type: application/json');

require_once '../../vendor/autoload.php';

use App\Classes\Slider;


$slider = new Slider();
$data = [
    'error' => false
];

if(isset($_POST['action']) && $_POST['action'] === 'slider-update'){
    $id = $_POST['u_id'];
    $titel = $_POST['u_title'];
    $subtitel = $_POST['u_subtitle'];
    $start_date = $_POST['u_start_date'];
    $end_date = $_POST['u_end_date'];
    $url_1 = $_POST['u_url_1'];
    $status = $_POST['u_status'];
    $old_image = $_POST['old_image'];

    if($_FILES['image']['name'])
    {
    $image = $_FILES['image']['name'];
    $image = explode( '.' , $image);
    $imageEx = end( $image );
    $image = uniqid() . rand(222222, 999999). '.' .$imageEx ;
    }else{
        $image = $old_image;
    }

    if($slider->slider_update( $titel , $subtitel , $start_date , $end_date , $url_1 ,$image,$status,$id )){
        if($old_image !== $image){
            move_uploaded_file($_FILES['image']['tmp_name'], '../../img/slider/' . $image);
            //file_exists('../../img/slider/' . $old_image) ? unlink('../../img/slider/' . $old_image) : '';
        }
        $data['message'] = 'Slider update success.' ;
        } else{
        $data['false'] = true ;
        $data['message'] = 'Slider not updated.' ;
        }

    echo json_encode($data);

}

// Slider Delete
if(isset($_POST['action']) && $_POST['action'] === 'slider-save'){
    $titel = $_POST['titel'];
    $subtitel = $_POST['subtitel'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $url_1 = $_POST['url_1'];
    $status = $_POST['status'];

    $image = $_FILES['image']['name'];
    $image = explode( '.' , $image);
    $imageEx = end( $image );
    $image = uniqid() . rand(222222, 999999). '.' .$imageEx ;

    if($slider->slider_save( $titel , $subtitel , $start_date , $end_date , $url_1 , $status , $image )){
        move_uploaded_file($_FILES['image']['tmp_name'], '../../img/slider/' . $image);
        $data['message'] = 'Slaider save success.' ;
    }else{
        $data['false'] = true ;
        $data['message'] = 'Slaider not save.' ;
    }

    echo json_encode($data);

}

// Slider Delete


if (isset($_POST['action']) && $_POST['action'] === 'Slider_Delete_id') {
    $id     = $_POST['id'];
    $result = $slider->getSlider($id);
    $row    = $result->fetch_assoc();

    if ($slider->sliderdelete($id)) {
        file_exists('../../img/sliders/' . $row['image']) ? unlink('../../img/sliders/' . $row['image']) : '';

        $data['message'] = 'Slider delete success.';
    } else {
        $data['error']   = true;
        $data['message'] = 'Slider not deleted.';
    }

    echo json_encode($data);
}


    // if (isset($_POST['action']) && $_POST['action'] == 'Slider_Delete_id') {
    //     $id = $_POST['id'];
    //     $result = $slider->getSlider($id);
    //     $row = $result->fetch_assoc();
    //     if ($slider->sliderdelete($id)) {
    //         print_r($id);
            
    //     } else {
                
    //     }
    // }