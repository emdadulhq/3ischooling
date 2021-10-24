
             $(document).on('click', '#delete-btn', function(e) {
                e.preventDefault();
                var form =  $(this).closest("form");
                swal({
                    title: `Are you sure?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                    form.submit();
                    }
                });
            });


            $(document).on('click', '#delete_btn', function (event) {
                event.preventDefault();
                const url = $(this).attr('href');
                swal({
                    title: 'Are you sure?',
                    text: 'This record and it`s details will be permanantly deleted!',
                    icon: 'warning',
                    buttons: ["Cancel", "Yes!"],
                    dangerMode: true
                }).then(function(value) {
                    if (value) {
                        window.location.href = url;
                        swal("Your imaginary file has been deleted!", {
                            icon: "success",
                          });
                    } else {
                        swal("Your imaginary file is safe!");
                      }
                });
            });


            //Featured Image Load
            $(document).on('change', "input#ftd_img", function (e) {
                e.preventDefault();


                let post_image_url = URL.createObjectURL(e.target.files[0]);
                $('img#post_ftd_img_load').attr('src', post_image_url);

                });

                //Featured Image Edit Load
$(document).on('change', "input#ftd_img_edit", function (e) {
    e.preventDefault();


    let post_image_url = URL.createObjectURL(e.target.files[0]);
    $('img#post_ftd_img_edit_load').attr('src', post_image_url);

    });


