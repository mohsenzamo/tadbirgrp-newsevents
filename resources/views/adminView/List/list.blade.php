<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            direction: rtl;
            text-align: center;
        }
    </style>
</head>
<body>
<h2>Hashtag List</h2>
<br>
@foreach($hashtaglist as $item1)
    <h5>{{$item1->id}}===> {{$item1->Hashtag}}</h5>
    <br>
@endforeach
<hr>
<h2>Subject List</h2>
<br>
@foreach($subjectlist as $item2)
    <h5>{{$item2->id}}===> {{$item2->Subject}}</h5>
    <br>
@endforeach

</body>
</html>