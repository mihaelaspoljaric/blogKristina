@extends('main')

@section('title', '| Blog Post')

@section('stylesheets')

{!! Html::style('css/select2.min.css') !!}
<script src="{{ URL::to('/js/tinymce/tinymce.min.js') }}"></script>
@section('content')
	
	<div class="row">
			{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' =>'PUT']) !!}
		<div class="col-md-8">
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title', null, ["class" => 'form-control input-lg']) }}

			{{ Form::label('slug', 'Slug:', ['class' => 'form-spacing-top']) }}
			{{ Form::text('slug', null, ['class' => 'form-control']) }}

			{{ Form::label('category_id', 'Category:', ['class' =>'form-spacing-top']) }}
			{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}

			{{ Form::label('tags', 'Tags:', ['class' => 'form-spacing-top']) }}
			{{ Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}

		{{ Form::label('body', 'Blog post:') }}                  
          {{ Form::textarea('body', null, array('class' => 'form-control'))}}
		</div>
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created at:</dt>
					<dd>{{ date('j M, Y H:i', strtotime($post->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last updated:</dt>
					<dd>{{ date('j M, Y H:i', strtotime($post->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
					{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}					
					</div>
					
					<div class="col-sm-6">

						{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
										
					</div>
					
				</div>
			</div>
		</div>
		 <input type="hidden" name="_method" value="PUT"> 
		 <input type="hidden" name="_token" value="{{ Session::token() }}">
		{!! Form::close() !!}
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