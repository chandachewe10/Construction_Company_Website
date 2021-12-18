<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Gallery</title>
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
    <h2 style="font-weight:bold; color:royalblue">Gallery</h2>
<div class="container">
<div class="row">
@foreach($viewgallery as $viewgalleries)

      <div class="timeline-card timeline-card-primary shadow p-3 mb-5 bg-white rounded col-md-3 col-sm-3 col-xs-12">
       <img src="{{asset('app/'.$viewgalleries->photo1)}}" class="imagen__curso" width="300" height="300">
          <hr>        
          </div>

          <div class="timeline-card timeline-card-primary shadow p-3 mb-5 bg-white rounded col-md-3 col-sm-3 col-xs-12">
       <img src="{{asset('app/'.$viewgalleries->photo2)}}" class="imagen__curso" width="300" height="300">
          <hr>        
          </div>

          <div class="timeline-card timeline-card-primary shadow p-3 mb-5 bg-white rounded col-md-3 col-sm-3 col-xs-12">
       <img src="{{asset('app/'.$viewgalleries->photo3)}}" class="imagen__curso" width="300" height="300">
          <hr>        
          </div>

          <div class="timeline-card timeline-card-primary shadow p-3 mb-5 bg-white rounded col-md-3 col-sm-3 col-xs-12">
       <img src="{{asset('app/'.$viewgalleries->photo4)}}" class="imagen__curso" width="300" height="300">
          <hr>        
          </div>
          @endforeach
        
  </div>   
 
  
</div>

</center>





</body>
</html>