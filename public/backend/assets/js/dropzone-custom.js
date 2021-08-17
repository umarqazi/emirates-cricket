// $(document).load(function () {
//     debugger
/*let storage_path = "{{public_path('storage/uploads/temp/gallery-images/')}}"
let upload_url = "{{ route('image.upload') }}"
let delete_url = "{{ route('image.delete') }}"
let addRemoveLinks = true
let uploadedDocumentMap = {}
let files = @if(isset($gallery) && $gallery->images) {!! json_encode($gallery->images) !!} @else [] @endif*/
    Dropzone.options.imageDropzone = {
        url: upload_url,
        params: {'path': storage_path},
        maxFilesize: 5, // MB
        addRemoveLinks: addRemoveLinks,
        timeout: 180000,
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
                    $('form').find('input[name="images[]"][value="' + name + '"]').remove()
                },
                error: function(e) {
                    console.log(e);
                }});
            var fileRef;
            return (fileRef = file.previewElement) != null ?
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
        },
        init: function () {
            if (files.length) {
                for (var i=0; i < files.length; i++) {
                    var file = files[i]
                    var filename = files[i].name
                    var filepath = uploaded_path + '/' + filename
                    console.log(file);
                    console.log(filepath);
                    imageDropzone.displayExistingFile(file, filepath);
                    $('form').append('<input type="hidden" name="images[]" value="' + file.name + '">')
                }
            }
        }
    }
// });
