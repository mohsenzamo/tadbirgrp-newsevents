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


    <link rel="shortcut icon" type="image/x-icon" href="/clientCss/newsEvents/img/لوگوی-وسط-سایت.png">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
          integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">


    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


    <style>
        * {
            direction: rtl;
        }

        .txtArea {
            border-radius: 4px;
            border: 2px solid #103b7f;
            caret-color: red;
            color: #010101;
        }

        .txtArea:focus {
            outline: none;
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
<h3 style="text-align: center">فرم بروزرسانی اخبار</h3>
<p style="text-align: center;color: #fe720c">------------------------------------------------------------------</p>

<form class="form row" action="{{route('newsUpdateRoute')}}" method="post" enctype="multipart/form-data"
      style="width: 80%;justify-self: center">
    @csrf
    <input name="id" value="{{$newsData[0]->id}}" style="display: none">
    <div class="col-lg-6">
        <label class="field field_v3">
            <input type="text" class="field__input" placeholder="عنوان" name="title" value="{{$newsData[0]->Title}}">
            <span class="field__label-wrap">
      <span class="field__label">عنوان</span>
    </span>
        </label>
    </div>
    <div class="col-lg-6" style="text-align: center">
        <b>--- عکس خبر ---</b>
        <br>
        <br>
        <img src="{{$newsData[0]->NewsImg}}" alt="picture" class="col-md-6 mb-2" style="width: 300px;height: 200px;border: 3px solid #fec90b;border-radius: 10px">
        <input type="file" class="button" name="newsImg">
    </div>
    <div style="display: grid">
        <br><br>

        <b style="justify-self: center">--- متن خبر ---</b>
        <br>
        <textarea name="text" id="editor" cols="30" rows="10" class="txtArea"
                  style="float: left">{{$newsData[0]->Text}}</textarea>
    </div>
    <div class="col-lg-6">
        <br><br>
        <label class="field field_v3">
            <input type="text" class="field__input" placeholder="نویسنده" name="author"
                   value="{{$newsData[0]->Author}}">
            <span class="field__label-wrap">
      <span class="field__label">نویسنده</span>
    </span>
        </label>
    </div>
    <div class="col-lg-6" style="text-align: center">
        <br><br>
        <b>--- عکس نویسنده ---</b>
        <br>
        <br>
        <img src="{{$newsData[0]->AuthorImg}}" alt="picture" class="col-md-6 mb-2" style="width: 100px;height: 100px;border: 3px solid #fec90b;border-radius: 10px">
        <input type="file" class="button" name="authorImg">
    </div>
    <div class="col-lg-6">
        <br><br>
        <label class="field field_v3">
            <input type="text" class="field__input" placeholder="ساعت" name="time" value="{{$newsData[0]->Time}}">
            <span class="field__label-wrap">
      <span class="field__label">ساعت</span>
    </span>
        </label>
    </div>
    <div class="col-lg-6">
        <br><br>
        <label class="field field_v3">
            <input type="text" class="field__input" placeholder="تاریخ" name="date" value="{{$newsData[0]->Date}}">
            <span class="field__label-wrap">
      <span class="field__label">تاریخ</span>
    </span>
        </label>
    </div>
    <div style="display: grid;align-items: center;justify-items: center">
        <br><br><br>
        <b>--- موضوع ---</b>
        <br>
        <b>{{$newsData[0]->Subject}}</b>
        <br>
        <select name="subject" id="sources" class="custom-select sources">
            @foreach($subjectlist as $item1)
                <option value="{{$item1->Subject}}">{{$item1->Subject}}</option>
            @endforeach
        </select>
        <br><br>
        <a href="{{route('addSubjectRoute')}}">
            <button type="button" class="button">
                <span>اضافه کردن گروه جدید</span>
            </button>
        </a>
    </div>
    <div style="display: grid;">
        <br><br><br>
        <b style="justify-self: center">--- هشتگ ---</b>
        <div style="display:flex;align-items: center">
            @foreach($hashtaglist as $item2)
                @if($item2->Hashtag==$newsData[0]->Hashtag)
                    <input style="margin-right: 10px;margin-left: 10px" type="radio" name="hashtag"
                           value="{{$item2->Hashtag}}" checked>
                    <label style="border-left:1px solid black;padding-left: 10px ">{{$item2->Hashtag}}</label><br>
                @endif
                @if($item2->Hashtag!=$newsData[0]->Hashtag)
                    <input style="margin-right: 10px;margin-left: 10px" type="radio" name="hashtag"
                           value="{{$item2->Hashtag}}">
                    <label style="border-left:1px solid black;padding-left: 10px ">{{$item2->Hashtag}}</label><br>
                @endif
            @endforeach
        </div>
        <br>
        <br>
        <a href="{{route('addHashtagRoute')}}" style="justify-self: center">
            <button type="button" class="button">
                <span>اضافه کردن هشتگ جدید</span>
            </button>
        </a>
        <br>
        <br>
    </div>
    <br><br>
    <div style="display: grid;justify-items: center">
        <button type="submit" class="button" style="width: 900px;background-color: #103b7f;">
            <span style="color: #fff">بروزرسانی خبر</span>
        </button>
    </div>
    <br><br>
    <div style="display: grid;justify-items: center">
        <a href="{{route('newsListViewRoute')}}">
            <button type="button" class="button3 btn-danger" style="width: 900px">
                <span style="color: #fff">انصراف</span>
            </button>
        </a>
    </div>
</form>
<br>
<br>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script id="rendered-js" >
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
