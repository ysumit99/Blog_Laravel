

   
 @extends('main')     
      
 @section('title','| Homepage')

@section('content')

          <div class="row">
            <div class="col-md-12">
                      <div class="jumbotron">
                        <center>
                          <h1>Welcome to My Blog!  <span class="glyphicon glyphicon-globe" aria-hidden="true"></span></h1>
                          <p class="lead">This blog features all technology and computer science related stuff! <span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span></p>
                        </center>
                      
                      </div>
            </div>
          
          </div> <!--end of header .row -->
          <br>
          <div>
                <center>
                <h3>Latest Posts <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></h3>
                </center>
          </div>
          <br>
          <div class="row">
              <div class="col-md-10 col-md-offset-2">

              
                @foreach($posts as $post)
                <div class="row">

                  <div class="post">
                    <div class="col-md-8">
                      <h3><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> {{ $post->title }}</h3>
                      <p>{{ substr(strip_tags($post->body), 0, 300) }}{{  strlen(strip_tags($post->body)) > 300 ? "..." : "" }}</p>
                    </div>
                    <div class="col-md-2 ">
                      <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-success btn-block " style="margin-top: 25px;">Read More</a>
                    </div>
                  </div>

                  
                </div>
                  <hr>
                @endforeach

              </div>


              
          </div>
   

   @endsection  

   
   