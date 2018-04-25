@extends('main')
@section('title', '| Homepage')

@section('ActiveHome','active')
@section('content')
    <div class="container">

     

      <div class="row">
        <div class="col-md-8">

          @foreach($posts as $post)

            <div class="post">
              <h3>{{ $post->title }}</h3>
              <p> {{ substr(strip_tags($post->body), 0, 300) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : ""}}</p>
              <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
            </div>

          <hr>
          @endforeach
        </div>

     
      </div>

    </div>
    <!-- end of .container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  </body>

</html>
@endsection