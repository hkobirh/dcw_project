<?php

namespace App\Classes;



class Slider extends Config
{ 
    //slider save all function
    public function slider_save( $titel , $subtitel , $start_date , $end_date , $url_1 , $status , $image){
//        session_start();
//        $id = $_SESSION['user_id'];
    
        $result = $this->conn->query("INSERT INTO `sliders`( `title`,`sub_title`,`start_date`,`end_date`,`url_1`,`image`,`status`) VALUES ( '$titel','$subtitel','$start_date','$end_date','$url_1','$image','$status')");
        
        return $result ? true : false ;
    }
    public function slider_update($titel , $subtitel , $start_date , $end_date , $url_1 ,$image,$status,$id){

        $result = $this->conn->query("UPDATE `sliders` SET `title`='$titel',`sub_title`='$subtitel',`start_date`='$start_date',`end_date`='$end_date',`url_1`='$url_1',`image`='$image',`status`='$status' WHERE `id`='$id'");

        return $result ? true : false ;
    }

    // slider data get all function
    public function slider_data_get(){

        return  $this->conn->query("SELECT * FROM `sliders` ORDER BY `id` DESC");

    }
    public function getSlider($id){

        return $this->conn->query("SELECT * FROM `sliders` WHERE `id`='$id' ");
    }


    // Slider Delete all function

    public function sliderdelete($id)
    {
        return $this->conn->query(" DELETE FROM `sliders` WHERE `id`='$id'");
    }








}