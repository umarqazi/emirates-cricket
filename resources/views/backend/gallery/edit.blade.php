@extends('backend.layout.master-backend')

@section('title')
    <title>Edit Gallery| Admin Panel</title>
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/assets/css/data-tables.css')}}">
@endsection

@section('content')
    <div id="breadcrumbs-wrapper" data-image="{{url('backend/assets/images/gallery/breadcrumb-bg.jpg')}}">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="breadcrumbs-title mt-0 mb-0">Edit Gallery</h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('player.index')}}">Gallery List</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Gallery
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12">
        <div class="container">
            <div class="section">
                <!--Basic Form-->

                <!-- jQuery Plugin Initialization -->
                <div class="row">
                    <!-- Form Advance -->
                    <div class="col s12 m12 l12">
                        <div id="Form-advance" class="card card card-default scrollspy">
                            <div class="card-content">
                                <form class="col s12" method="POST" action="{{route('gallery.update', $gallery->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    @if(file_exists(public_path('storage/uploads/gallery/'.$gallery->id.'/'.$gallery->image)))
                                        <div class="row">
                                            <div class="col m4 s4 offset-m8 mb-1 right-align">
                                                <img class="dummy_photo" src="{{asset('storage/uploads/gallery/'.$gallery->id.'/'.$gallery->image)}}">
                                            </div>
                                        </div>
                                    @endif

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <input id="title" type="text" name="title" class="validate @error('title') invalid @enderror" value="{{$gallery->title}}">
                                            <label for="title">Gallery Title</label>

                                            @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col s12">Gallery Description</div>
                                        <div class="input-field col-12">
                                            <textarea id="message5" class="ckeditor @error('text') invalid @enderror" name="text" rows="15" placeholder="Type Gallery Description in here...">{!! $gallery->text !!}</textarea>

                                            @error('text')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="file-field input-field col-12">
                                            <div class="btn">
                                                <span>Featured Image</span>
                                                <input type="file" name="image" class="validate @error('image') invalid @enderror">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                            </div>

                                            @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12"><b>Upload Gallery Images</b></div>
                                        <div class="input-field col m12 s12 dropzone" id="image-dropzone">

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light right" type="submit"> Edit Gallery
                                                <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--end container-->
@endsection

@section('scripts')
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{URL::asset('backend/assets/js/form-layouts.js')}}"></script>
    <!-- END PAGE VENDOR JS-->

    <script>
        var upload_path = "{{asset('storage/uploads/gallery/'.$gallery->id.'/')}}"
        var path = "{{public_path('storage/uploads/gallery/'.$gallery->id.'/')}}"
        var uploadedDocumentMap = {}
        Dropzone.options.imageDropzone = {
            url: '{{ route('image.upload') }}',
            params: {'path':path},
            maxFilesize: 5, // MB
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (file, response) {
                $('form').append('<input type="hidden" name="gallery-images[]" value="' + response.name + '">')
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
                    url: '{{ route('image.delete') }}',
                    data: {filename: name, filepath: path, deleteFromDB: true},
                    success: function (data){
                        console.log("File has been successfully removed!!");
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
                @if(isset($gallery) && $gallery->images)
                let imageDropzone = this;

                var files =
                {!! json_encode($gallery->images) !!}
                    for (var i in files) {
                    var file = files[i]
                    var filename = files[i].name
                    var filepath = upload_path + '/' + filename

                    imageDropzone.displayExistingFile(file, filepath);
                    $('form').append('<input type="hidden" name="gallery-images[]" value="' + file.name + '">')
                }
                @endif
            }
        }
    </script>
@endsection
