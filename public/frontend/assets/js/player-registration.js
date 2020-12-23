$(document).ready(function () {
    $uploadCrop = $('#select_image').croppie({
        enableExif: true,
        viewport: {
            width: 200,
            height: 200,
            type: 'square'
        },
        boundary: {
            width: 300,
            height: 300
        }
    });


    $('#upload').on('change', function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            $uploadCrop.croppie('bind', {
                url: e.target.result
            }).then(function(){
                console.log('jQuery bind complete');
            });

        }
        reader.readAsDataURL(this.files[0]);
    });


    $('.upload_result').on('click', function (ev) {
        $uploadCrop.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function (resp) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: player_registration_url,
                type: "POST",
                data: {"image":resp},
                success: function (data) {
                    $('#player_cropped_photo').val(data);
                    $('.dummy_photo').remove();
                    html = '<img class="dummy_photo" src="' + resp + '" />';
                    $("#upload_image").html(html);
                    $("#myModal").modal("hide");
                }
            });
        });
    });
});
