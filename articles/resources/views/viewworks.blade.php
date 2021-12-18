<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Article Front-End Bootstrap Template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://getbootstrap.com/examples/dashboard/dashboard.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://getbootstrap.com/examples/dashboard/dashboard.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="http://cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
    <script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
        $('#nav').load('elements/nav.html');
    });
    </script>
  </head>
  <body>





<center>
<div class="container">
<div class="row">
@foreach($viewworks as $viewwork)

      <div class="timeline-card timeline-card-primary shadow p-3 mb-5 bg-white rounded col-md-6 col-sm-6 col-xs-12">
      <h3>Article No. {{$viewwork->id}}</h3><br>
      <img src="{{asset('app/'.$viewwork->image)}}" class="imagen__curso" width="300" height="300">
          <hr>
        
          <h2 style="font-size:14px"><a href="{{'worksview/'.$viewwork->id}}" style="font-style:italic; color:royalblue; font-size:18px">{{$viewwork->title}}</a></h2>
          <p style="font-style:italic; color:gray">Posted By: Tycoon Constructions</p>
        <p style="font-style:italic; color:gray">posted on: about {{$viewwork->created_at->diffForHumans()}} </p>
          </div>

          @endforeach
        
  </div>   
 
  
</div>

</center>





</body>
</html>