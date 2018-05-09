@extends('main')
@section('title', '| Homepage')

@section('ActiveHome','active')
@section('content')

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h1>My Blog Posts</h1>
      </div>
    </div>
     
      @foreach($posts as $post)
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="post">
              <h2>{{ $post->title }}</h2>
              <h6>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h6>
      
          <p> {{ substr(strip_tags($post->body), 0, 250) }} {{ strlen(strip_tags($post->body)) > 250 ? '...' : ""}}</p>
              <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-info">Read More</a>
            </div>
            <hr>
           </div>
      </div>
      @endforeach
       
   
    <!-- end of .container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  </body>

</html>
@endsection