$(document).ready(function () {
    debugger
    Dropzone.options.imageDropzone = {
        url: upload_url,
        params: {'path': storage_path},
        maxFilesize: 5, // MB
        addRemoveLinks: addRemoveLinks,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (file, response) {
            $('form').append('<input type="hidden" name="images[]" value="' + response.name + '">')
            uploadedDocumentMap[file.name] = response.name
        },
        removedfile: function (file) {
            var name = ''
            if (typeof file.file_name !== 'undefined') {
                name = file.file_name
            } else if (typeof uploadedDocumentMap[file.name] !== 'undefined') {
                name = uploadedDocumentMap[file.name]
            } else {
                name = file.name
            }

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: delete_url,
                data: {filename: name, filepath: storage_path, deleteFromDB: false},
                success: function (data){
                    file.previewElement.remove();
                    $('form').find('input[name="gallery-images[]"][value="' + name + '"]').remove()
                },
                error: function(e) {
                    console.log(e);
                }});
            var fileRef;
            return (fileRef = file.previewElement) != null ?
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
        },
        init: function () {
            if (files.length === 0) {
                for (var i=0; i<files.length; i++) {
                    var file = files[i]
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="images[]" value="' + file.file_name + '">')
                }
            }
        }
    }
});
