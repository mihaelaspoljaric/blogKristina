@extends('main')
@section('title', '| Contact')
@section('ActiveContact','active')
@section('content')


    <div class="container" id="contact">

      <div class="row">
        <div class="col-sm-4 col-sm-pull-2">
          <h1>LET'S TALK!</h1>
      
          <ul class="social">
            <li><a href="https://www.instagram.com/kiki_sp711/?hl=hr" target="_blank"><img class="instagram" src="images/if_38-instagram_104466.png" width="64px" height="64px"></a></li>
            <li><a href="https://www.facebook.com/profile.php?id=1240106770" target="_blank"><img class="facebook" src="images/if_01_111032.png" width="64px" height="64px"></a></li>
          </ul>
        </div>
      
        <div class="col-sm-6 col-sm-push-2" id="forma">
          <h1>Contact Me</h1>
          <hr>
          <form>
            <div class="form-group">
              <label name="name">Your name:</label>
              <input id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
              <label name="email">Email:</label>
              <input id="email" name="email" class="form-control">
            </div>

            <div class="form-group">
              <label name="subject">Subject:</label>
              <input id="subject" name="subject" class="form-control">
            </div>

            <div class="form-group">
              <label name="message">Your message:</label>
              <textarea id="message" name="message" class="form-control">Type your message here...</textarea>
            </div>

            <input type="submit" value="Send Message" class="btn btn-info">
          </form>
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