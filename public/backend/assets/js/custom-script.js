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

    /* SWEETALERT ADD NEW PLAYER BUTTON */
/*
    $(".add-player-btn").bind("click", function(e) {
        swal({
            text: 'Please Enter Player Name:',
            content: "input",
            button: {
                text: "Create!",
                closeModal: false,
            },
        })
            .then(name => {
                if (!name) throw null;
            })
            .then(name => {
                return name.json();
            })
            .then(name => {
                console.log(name);
                const movie = name.results[0];

                var player_name = name;
                var type = $(this).attr('data-type');
                if (value === false) return false;
                else if (value === "") {
                    swal("You need to write something!", "", "error");
                    return false;
                } else {
                    $.ajax({
                        type: "POST",
                        url: team_player_url,
                        data: {'player_name': player_name, 'type': type},
                        success: function(result){
                            $("").html(result);
                        }
                    });
                }
            })
            .catch(err => {
                if (err) {
                    swal("Oh noes!", "The AJAX request failed!", "error");
                } else {
                    swal.stopLoading();
                    swal.close();
                }
            });
/!*
        swal("Please Enter Player Name:", {
            content: "input",
        })
            .then((value) => {
                var player_name = value;
                var type = $(this).attr('data-type');
                if (value === false) return false;
                else if (value === "") {
                    swal("You need to write something!", "", "error");
                    return false;
                } else {
                    $.ajax()
                    swal(`You typed: ${value}`);
                }
            });*!/
    });
*/
});
