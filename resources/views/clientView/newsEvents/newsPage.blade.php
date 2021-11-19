<!DOCTYPE html>
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
    <link rel="shortcut icon" type="image/x-icon" href="/clientCss/newsEvents/img/لوگوی-وسط-سایت.png">
    <link rel="stylesheet" href="/clientCss/newsEvents/css/News&EventsCss.css">
    <link rel="stylesheet" href="/clientCss/newsEvents/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<header>
    <!--nav start-->
    <div class="mobile-container" id="mobilenav">

        <!-- Top Navigation Menu -->
        <div class="topnav" id="asd" style="height: 50px;">
            <div id="myLinks">
                <a href="#">ارتباط با ما</a>
                <a href="#">درباره ما</a>
                <a href="#">گالری تصاویر</a>
                <a href="#">اخبار و رویدادها</a>
                <a href="#">خدمات و محصولات</a>
                <a href="#">صفحه نخست</a>
            </div>

            <div class="container" style="float: left;width: 50px;margin-left: 20px;margin-top: 5px"
                 onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </div>


        <!---------------------------------Start Pop Up--------------------------------->


        <div class="containerPopUp" style="float: left;width: 50px;margin-left: 20px;margin-top: 5px"
             onclick="openNav()">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>

        <div id="myNav" class="overlay3">
            <!-- Button to close the overlay navigation -->
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

            <!-- Overlay content -->
            <div class="overlay3-content">
                <a href="#">ارتباط با ما</a>
                <a href="#">درباره ما</a>
                <a href="#">گالری تصاویر</a>
                <a href="#">اخبار و رویدادها</a>
                <a href="#">خدمات و محصولات</a>
                <a href="#">صفحه نخست</a>
            </div>

        </div>


        <!---------------------------------End Pop Up--------------------------------->

    </div>
    <!--nav end -->
</header>

<section>
    <!-- start searchBox -->
    <div class="searchBox"><p class="searchBoxText">اخبار و رویدادها</p></div>
    <!-- end searchBox -->

    <div class="news">
        <div class="serviceDiv">
            <div class="serviceDivIconBox">
                <?php
                $lenghtSubject = count($subjectlist);
                ?>
                @for($p = 0; $p < 6; $p++)
                    <div class="serviceDivIcon"><img src="{{$subjectlist[$p]->SubjectImg}}" class="serviceIcon" alt="">
                        <p class="serviceText">{{$subjectlist[$p]->Subject}}</p></div>
                @endfor
            </div>
            <div class="serviceHashatg">
                <p class="serviceHashatgTitle">هشتگ های مهم</p>
                <div class="serviceHashatgContentBox">
                    <?php
                    $lenghtHashtag = count($hashtaglist);
                    ?>
                    @for($o = 0; $o < $lenghtHashtag; $o++)
                            <P class="serviceHashatgContent">{{$hashtaglist[$o]->Hashtag}}</P>
                    @endfor
                </div>
            </div>
        </div>
        <div class="lastNews2">
            <div class="boxNews2">
                <div class="contentNewsUp2">
                    <div class="contentNewsUpText2">
                        <p class="contentNewsUpTitle2">{{$newsData[0]->Title}}</p>
                        <div class="contentNewsUpP2">
                            <?php
                            echo $newsData[0]->Text;
                            ?>
                        </div>
                    </div>
                    <div class="contentNewsUpImgBox2">
                        <img src="{{$newsData[0]->NewsImg}}" alt="" class="contentNewsUpImg2">
                        <p class="contentNewsUpImgTitle2">لورم اپیسوم یا طرح نما به متنی آزمایشی و بی معنی در لورم ایپسوم یا طرح نما صنعت چاپ، صفحه آرایی و طراحی گرافیک گفته می شود.</p>
                    </div>
                </div>
                <div class="contentNewsDown2">
                    <div class="contentNewsDownAuthor2">
                        <img class="contentNewsDownAuthorImg2" src="{{$newsData[0]->AuthorImg}}" alt="">
                        <p class="contentNewsDownAuthorName2">
                            نویسنده :
                            <span style="color: #fec90b;">{{$newsData[0]->Author}}</span>
                        </p>
                    </div>
                    <div class="contentNewsDownShare2"><i class='fas fa-share-alt contentNewsDownShareIcon2'></i></div>
                    <div class="contentNewsDownTime2"><p>{{$newsData[0]->Time}}</p></div>
                    <div class="contentNewsDownDate2"><p>{{$newsData[0]->Date}}</p></div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="/clientCss/newsEvents/js/News&EventsJs.js"></script>
</body>
</html>