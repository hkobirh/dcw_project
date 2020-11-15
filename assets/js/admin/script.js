// image preview
function imageview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(event) {
            $('.image_preview').attr('src', event.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }

}


$(document).ready(function() {
    $('#slidermanage').DataTable();

    const site_url = "http://localhost/ssit_dcw/";


    $('#create-form').on('submit', function(event) {
        event.preventDefault();
        $('.loaderm').show();
        var formData = new FormData(this);
        formData.append('action', $(this).data('url'));
        $.ajax({
            url: site_url + "admin/slider/action.php",
            method: 'post',
            processData: false,
            contentType: false,
            // dataType: 'json',
            data: formData,
            success: function(result) {
                $('.loaderm').hide();
                if (!result.error) {
                    $('#create-form')[0].reset();
                    //$('.image_preview').attr('src', "https://via.placeholder.com/80");
                    toastr.success(result.message);
                } else {
                    toastr.error(result.message);
                }
            }
        });
    });
    // slider update
    $('#update_slider_form').on('submit', function(event) {
        event.preventDefault();
        $('.loaderm').show();
        var formData = new FormData(this);
        formData.append('action', $(this).data('url'));
        $.ajax({
            url: site_url + "admin/slider/action.php",
            method: 'post',
            processData: false,
            contentType: false,
            // dataType: 'json',
            data: formData,
            success: function(result) {
                console.log('ok');
                $('.loaderm').hide();
                if (!result.error) {
                    //$('.image_preview').attr('src', "https://via.placeholder.com/80");
                    toastr.success(result.message);
                } else {
                    toastr.error(result.message);
                }
            }
        });
    });
    // slider delete


    $('.Slider-Delete').on('click', function() {
        const Site_url = "http://localhost/ssit_dcw/admin/";

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $(".loaderm").show();
                let id = $(this).data('id');
                $.ajax({
                    url: Site_url + 'slider/action.php',
                    method: 'POST',
                    dataType: 'json',
                    data: { id: id, action: 'Slider_Delete_id' },
                    success: function(result) {
                        $(".loaderm").hide();
                        if (!result.error) {
                            $('.remove-row-' + id).hide();
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                        } else {
                            toastr.error(result.message);
                        }
                    }
                });
            }
        })
    });

    // $('.Slider-Delete').on('click', function() {
    //     const Site_url = "http://localhost/ssit-new-project/admin/";
    //     let id = $(this).data('id');
    //     $('.loaderm').show();
    //     $.ajax({
    //         url: Site_url + 'slider/action.php',
    //         method: 'POST',
    //         data: { id: id, action: 'Slider_Delete_id' },
    //         success: function(result) {
    //             console.log(result);
    //             $('.loaderm').hide();
    //         }
    //     });
    // });

    // datepicker

    $('.datepick').datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        autoclose: true,

    });









});