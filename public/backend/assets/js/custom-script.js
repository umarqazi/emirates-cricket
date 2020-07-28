/*================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 5.0
	Author: PIXINVENT
	Author URL: https://themeforest.net/user/pixinvent/portfolio
================================================================================

NOTE:
------
PLACE HERE YOUR OWN JS CODES AND IF NEEDED.
WE WILL RELEASE FUTURE UPDATES SO IN ORDER TO NOT OVERWRITE YOUR CUSTOM SCRIPT IT'S BETTER LIKE THIS. */

$(document).ready(function () {

    /* INITIALIZE CKEDITOR */
    ClassicEditor
        .create( document.querySelector( '.ckeditor' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            if(error) {
                console.error( error );
            }
        } );

    /* SESSION MSG CLOSE ICON */
    $(".card-alert .close").click(function(){
        $(this).closest(".card-alert").fadeOut("slow")
    });

    /* SWEETALERT DELETE BUTTON */
    $(".delete-submit-btn").bind("click", function(e){
        e.preventDefault();
        swal({
            title: 'Are you sure?',
            text: "You want to delete this!",
            icon: 'warning',
            dangerMode: true,
            buttons: {
                cancel: 'No, Please!',
                delete: 'Yes, Delete It'
            },
        }).then((result) => {
            if (result) {
                $(this).parent('form').submit();
            }
        })
    });
});
