<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <title>Apartments</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <a class="navbar-brand" href="#"><i class="fab fa-angrycreative fa-4x"></i></a>
        <div class="text-muted">Sweet Home</div>
    </div>
    <div class="row">

    </div>
</div>
<div class="container-fluid">
    <ul>
        @foreach($list_obj as $item)
            <li>
                <a href="/admin/article/{{$item -> id}}">{{$item -> name}}</a>
                <img src="{{$item -> images}}" alt="" style="width: 100px; border-radius: 50%">
                <a href="/admin/article/{{$item -> id}}/edit">Edit</a>&nbsp;&nbsp;
                <span class="btn-delete" id="{{$item-> id}}">Delete With Ajax</span>
            </li>
        @endforeach
    </ul>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>