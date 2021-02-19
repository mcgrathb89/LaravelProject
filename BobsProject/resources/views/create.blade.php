@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <h1 class="text-center">{{ Auth::user()->name }}'s Blog</h1>
          <br/>
          <div class="card">
              <div class="card-header">Add a New Blog Post</div>
              <div class="card-body">


    <form method="POST" action="/blogaction">

        {{ csrf_field() }}

        <div>
          <strong><label for="usr">&nbspTitle</label></strong>
          <input type="text" name="title" placeholder="Enter your post title here..." class="form-control" >
          <br>
        </div>
        <div>
          <strong><label for="usr">&nbspBody</label></strong>
          <textarea  type="text" name="body" placeholder="Whats on your mind today..." class="form-control" ></textarea>
        </div>
        <div>
          <br/>
  
        </div>
            <div>
                <input type="submit" class="btn btn-primary" value="Post">
              </div>
    </form>  
              
    <br/><br/> 
    <hr>  
    <h3 class="text-center text-secondary">Recent Blog Posts</h1>
    <hr>

    <div class="card-body">
      @foreach($posts as $post)
      <h5>{{ $post->title }}</h5>
      {{ $post->body }}
      <br/>
      <small>Posted on: {{ $post->created_at->format('d/m/Y')}}</small>
      <hr>
      @endforeach
      </div>

 </div>   

</body>
</html>
@endsection