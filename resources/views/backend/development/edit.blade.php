@extends('backend.layout.master-backend')

@section('title')
    <title>Edit Development Detail| Admin Panel</title>
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
                    <h5 class="breadcrumbs-title mt-0 mb-0">Edit Development Detail</h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('development.index')}}">Development List</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Development Detail
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

                                @include('frontend.partials.session-messages')

                                <form class="col s12" method="POST" action="{{route('development.update', $development->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    @if(file_exists(public_path('storage/uploads/development/'.$development->image)))
                                        <div class="row">
                                            <div class="col m6 s6 offset-m6 mb-1 right-align">
                                                <img class="dummy_photo news-featured-image" src="{{asset('storage/uploads/development/'.$development->image)}}">
                                            </div>
                                        </div>
                                    @endif

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="first_name01" type="text" name="title" class="validate @error('title') invalid @enderror" value="{{$development->title}}">
                                            <label for="first_name01">Title</label>

                                            @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="message5" name="heading" class="ckeditor1 validate @error('heading') invalid @enderror">{{$development->heading}}</textarea>

                                            @error('heading')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="message5" class="ckeditor" name="description" rows="15" placeholder="Type your reply in here...">{!! $development->description ?: '' !!}</textarea>

                                            @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <input type="file" name="image" />

                                            @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light right" type="submit">Update Development
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
        var uploaded_path = "{{asset('storage/uploads/development/'.$development->id.'/')}}"
        let storage_path = "{{public_path('storage/uploads/development/'.$development->id.'/')}}"
        var uploadedDocumentMap = {}
        Dropzone.options.imageDropzone = {
            url: '{{ route('image.upload') }}',
            params: {'path':storage_path},
            maxFilesize: 5, // MB
            addRemoveLinks: true,
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
                    url: '{{ route('image.delete') }}',
                    data: {filename: name, filepath: storage_path, deleteFromDB: true},
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
                @if(isset($development) && $development->images)
                let imageDropzone = this;

                var files =
                {!! json_encode($development->images) !!}
                    for (var i in files) {
                    var file = files[i]
                    var filename = files[i].name
                    var filepath = uploaded_path + '/' + filename

                    imageDropzone.displayExistingFile(file, filepath);
                    $('form').append('<input type="hidden" name="images[]" value="' + file.name + '">')
                }
                @endif
            }
        }
    </script>
@endsection
