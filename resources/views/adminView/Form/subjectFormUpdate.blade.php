{{--
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
<form class="form row" action="{{route('subjectUpdateRoute')}}"   method="post" enctype="multipart/form-data">
    @csrf
    <input name="id" value="{{$subjectData[0]->id}}" style="display: none">
    <div class="form-group col-md-6 mb-2">
        <input type="text" class="form-control" placeholder="موضوع" name="subject" value="{{$subjectData[0]->Subject}}">
    </div>
    <div class="form-group col-md-6 mb-2">
        <img src="{{$subjectData[0]->SubjectImg}}" alt="picture" class="col-md-6 mb-2" style="width: 100px;height: 100px">
    </div>
    <div class="form-group col-md-6 mb-2">
        <input type="file" class="form-control" name="subjectImg">
    </div>
    <div>
        <button type="submit" class="btn btn-primary">
        <i class="ft-plus"></i> بروزرسانی موضوع
        </button>
    </div>
</form>

</body>
</html>--}}
{{--
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
<h2>SUBJECT</h2><br>
<form class="form row" action="{{route('addSubjectRoute')}}"   method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group col-md-6 mb-2">
        <input type="text" class="form-control" placeholder="موضوع" name="subject">
    </div>
    <div class="form-group col-md-6 mb-2">
        <input type="file" class="form-control" name="subjectImg">
    </div>
    <div>
        <button type="submit" class="btn btn-primary">
            <i class="ft-plus"></i> اضافه کردن موضوع
        </button>
    </div>
</form>
<br>
<hr>
@foreach($subjectlist as $item2)
    <h5>{{$item2->id}}===> {{$item2->Subject}}</h5>
    <br>
    <img src="{{$item2->SubjectImg}}" alt="" style="width: 100px;height: 100px">
    <a href="{{route('deleteSubjectViewRoute',$item2->id)}}"><button>delete</button></a>
    <br>
    <a href="{{route('updateSubjectViewRoute',$item2->id)}}"><button>update</button></a>
    <br>
    ---------------------------------------------------------
@endforeach

</body>
</html>--}}
        <!doctype html>
<html lang="en">
<head>
    <!--************************This website was developed by: ARMIN BAYAT MOKHTARI & MOHSEN ZAHRAEE*****************************-->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="گروه های شرکت تدبیر و تحول آینده">
    <!----------------++++++++++***********************-------------Authors-----------***********************++++++++++----------------->
    <meta name="author" content="Mohsen Zahraee & Armin Bayat Mokhtari">
    <!-------------------++++++++++***********************----------Authors---------***********************++++++++++------------------->

    <title>تدبیر و تحول آینده</title>


    <link rel="stylesheet" href="/adminCss/newsForm/css/input-option-btn.css">


    <link rel="shortcut icon" type="image/x-icon" href="./clientCss/newsEvents/img/لوگوی-وسط-سایت.png">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
          integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">


    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


    <style>
        * {
            direction: rtl;
        }
    </style>
</head>
<body style="background-image: url('/adminCss/newsForm/img/پس-زمینه-سایت.svg');background-repeat: no-repeat;background-size: cover;display: grid">

<!----------------------Start Nav----------------------------->


<nav class="nav bg-purple justify-content-center">
    <a class="nav-link text" href="#" style="color: #103b7f"><i class="fas fa-flag" aria-hidden="true"
                                                                style="color: #103b7f"></i> صفحه اصلی</a>
    <a class="nav-link text" href="#" style="color: #103b7f">خروج <i class="fa fa-sign-out" aria-hidden="true"></i></a>
</nav>

<!----------------------End Nav------------------------------->


<br>
<h3 style="text-align: center">فرم موضوعات</h3>
<p style="text-align: center;color: #fe720c">------------------------------------------------------------------</p>
<form class="form row" action="{{route('subjectUpdateRoute')}}" method="post" enctype="multipart/form-data"
      style="text-align: center;margin-top: 150px;width: 100%">
    @csrf
    <input name="id" value="{{$subjectData[0]->id}}" style="display: none">
    <div class="col-lg-6">
        <label class="field field_v3">
            <input type="text" class="field__input" placeholder="موضوع" name="subject" style="width: 500px" value="{{$subjectData[0]->Subject}}">
            <span class="field__label-wrap">
      <span class="field__label">موضوع</span>
    </span>
        </label>
    </div>
    <div class="col-lg-6" style="text-align: center;margin-top: -100px">
        <img src="{{$subjectData[0]->SubjectImg}}" alt="" style="width: 300px;height: 200px;border: 3px solid #fec90b;border-radius: 10px">
        <input type="file" class="button" name="subjectImg" style="width: 500px;background-color: #103b7f">
    </div>
    <br><br><br>
    <div class="col-lg-12" style="margin-top: 50px">
        <button type="submit" class="button btn-info">
            <span style="color: #fff"> بروزرسانی موضوع</span>
        </button>
    </div>
    <div class="col-lg-6" style="margin-top: 150px">
        <a href="{{route('addNewsRoute')}}">
            <button type="button" class="button4" style="background-color: #fe720c">
                <span style="color: #fff;">فرم اخبار</span>
            </button>
        </a>
    </div>
    <div class="col-lg-6" style="margin-top: 150px">
        <a href="{{route('subjectlistViewRoute')}}">
            <button type="button" class="button4" style="background-color: #fe720c">
                <span style="color: #fff;">لیست</span>
            </button>
        </a>
    </div>
</form>
<br>
<br>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script id="rendered-js">
    $(".custom-select").each(function () {
        var classes = $(this).attr("class"),
            id = $(this).attr("id"),
            name = $(this).attr("name");
        var template = '<div class="' + classes + '">';
        template += '<span class="custom-select-trigger">' + 'موضوع' + '</span>';
        template += '<div class="custom-options">';
        $(this).find("option").each(function () {
            template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
        });
        template += '</div></div>';

        $(this).wrap('<div class="custom-select-wrapper"></div>');
        $(this).hide();
        $(this).after(template);
    });
    $(".custom-option:first-of-type").hover(function () {
        $(this).parents(".custom-options").addClass("option-hover");
    }, function () {
        $(this).parents(".custom-options").removeClass("option-hover");
    });
    $(".custom-select-trigger").on("click", function () {
        $('html').one('click', function () {
            $(".custom-select").removeClass("opened");
        });
        $(this).parents(".custom-select").toggleClass("opened");
        event.stopPropagation();
    });
    $(".custom-option").on("click", function () {
        $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
        $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
        $(this).addClass("selection");
        $(this).parents(".custom-select").removeClass("opened");
        $(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());
    });
    //# sourceURL=pen.js
</script>
<script src='https:////cdn.ckeditor.com/4.8.0/full-all/ckeditor.js'></script>
<script id="rendered-js">
    CKEDITOR.replace('editor');
</script>
</body>
</html>


