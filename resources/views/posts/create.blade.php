@extends('main')

@section('title', ' | Create New Post')

@section('stylesheets')

{!! Html::style('css/select2.min.css') !!}
<script src="{{ URL::to('/js/tinymce/tinymce.min.js') }}"></script>

@section('content')

	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
            {!! Form::open(array('route' => 'posts.store', 'method' => 'post')) !!}
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, array('class' => 'form-control'))}}

            {{ Form::label('slug', 'Slug:') }}
            {{ Form::text('slug', null, array('class' =>'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}

            {{ Form::label('category_id', 'Category:') }}
            <select class="form-control" name="category_id">
                @foreach($categories as $category)
                <option value='{{ $category->id }}'>{{ $category->name }} </option>
                @endforeach
            </select>

            {{ Form::label('tags', 'Tags:') }}
            <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                @foreach($tags as $tag)
                    <option value='{{ $tag->id }}'>{{ $tag->name }} </option>
                @endforeach
            </select>

           {{ Form::label('body', 'Blog post:') }}                  
          {{ Form::textarea('body', null, array('class' => 'form-control'))}}

         
            {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px'))}}
            {!! Form::close() !!}
        </div>
    </div>

@endsection
@section('scripts')

 {!! Html::script('js/select2.min.js') !!}
 <script type="text/javascript">
     $('.select2-multi').select2();
 </script>

<script>
    var editor_config = {
        path_absolute : "{{ URL::to('/') }}/",
        selector: "textarea",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }
            tinyMCE.activeEditor.windowManager.open({
                file : cmsURL,
                title : 'Filemanager',
                width : x * 0.8,
                height : y * 0.8,
                resizable : "yes",
                close_previous : "no"
            });
        }
    };
    tinymce.init(editor_config);
</script>


 @endsection