<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>     
    <center>
    <div class="card w-75" style="top:100px">    
        <div style="font-weight:bolder;font-size:22px">Clients Email Subscription</div>
<table border="1"  style="align-items: center">
    <tr style="color:blue">
        <th>No</th>
        <th>Email</th>
        <th>Subscribed on</th>
        
</tr>
<hr>

<tr >
@foreach($emailsub as $emailsubs)
        <td>{{$emailsubs->id}}</td>
        <td>{{$emailsubs->email}}</td>
        <td>{{$emailsubs->created_at->diffForHumans()}}</td>
</tr>
@endforeach
</table>
</div>
</center> 

</body>
</html>
   






 