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
    ClassicEditor.create(document.querySelector(".ckeditor"))
        .then((editor) => {})
        .catch((error) => {
            if (error) {
                console.error(error);
            }
        });

    ClassicEditor.create(document.querySelector(".ckeditor1"))
        .then((editor) => {})
        .catch((error) => {
            if (error) {
                console.error(error);
            }
        });

    /* SESSION MSG CLOSE ICON */
    $(".card-alert .close").click(function () {
        $(this).closest(".card-alert").fadeOut("slow");
    });

    /* SWEETALERT DELETE BUTTON */
    $(".delete-submit-btn").bind("click", function (e) {
        e.preventDefault();
        swal({
            title: "Are you sure?",
            text: "You want to delete this!",
            icon: "warning",
            dangerMode: true,
            buttons: {
                cancel: "No, Please!",
                delete: "Yes, Delete It",
            },
        }).then((result) => {
            if (result) {
                $(this).parent("form").submit();
            }
        });
    });

    /* SWEETALERT ADD NEW PLAYER BUTTON */

    $(".create-player").bind("click", function (e) {});

    $("#create-team-player-form").submit(function (event) {
        event.preventDefault();
        var form_data = new FormData($("#create-team-player-form")[0]);
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            url: team_player_url,
            type: "POST",
            data: form_data,
            dataType: "JSON",
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function () {
                $(".create-player").attr("disabled", true).text("Loading....");
                $("#organizer-form .form-error").html("");
            },
            success: function (resp) {
                if (resp.type == "success") {
                    $("#create-team-player-form")[0].reset();
                    $("#create-team-player-form .form-error").html("");
                    // $('.team-player-table > tbody:last-child').append(resp.data);
                    $("#addplayermodal").modal("toggle");
                    window.location.reload();
                } else {
                }
                $(".create-player").attr("disabled", false).text("Save");
            },
            error: function (response) {
                var respObj = response.responseJSON;
                // showToaster('error', respObj.message);
                errors = respObj.errors;
                var keys = Object.keys(errors);
                var count = keys.length;
                for (var i = 0; i < count; i++) {
                    $("." + keys[i])
                        .html(errors[keys[i]])
                        .focus();
                }
                $(".create-player").attr("disabled", false).text("Save");
            },
        });
    });

    let selected = [];

    var selectAllItems = "#check_all";
    var checkboxItem = ":checkbox";

    $(selectAllItems).click(function () {
        if (this.checked) {
            $(checkboxItem).each(function () {
                this.checked = true;
                if ($(".select_row").is(":checked")) {
                    selected.push($(this).val());
                } else {
                    selected = [];
                }
            });
        } else {
            $(checkboxItem).each(function () {
                this.checked = false;
                selected = [];
            });
        }
    });

    $(document).on('click', ".check-box-checked", function () {
        let id = $(this).attr("id");
        if ($("#" + id).is(":checked")) {
            $("#" + id).attr("checked", true);
            value = $(this).val();
            selected.push(value);
        } else {
            $("#" + id).attr("checked", false);
            value = $(this).val();
            const index = selected.indexOf(value);
            if (index > -1) {
                selected.splice(index, 1);
            }
        }
    });

    $("#selectType").change(function (e) {
        let type = $(this).val();
        if (type === "approve") {
            type = 1;
        }
        if (type === "decline") {
            type = 0;
        }
        if (type === "delete") {
            type = 2;
        }

        e.preventDefault();
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            type: "POST",
            url: "/admin/players-bulk-action",
            data: {
                selected: selected,
                type: type,
            },
            success: function (response) {
             $('#selectType option').prop('selected', function() {
                  return this.defaultSelected;
             });
              if(response > 0){
                    location.reload();
              }
            }
        });

    });
});
