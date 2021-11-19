{{--
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
    <link rel="shortcut icon" type="image/x-icon" href="./clientCss/newsEvents/img/لوگوی-وسط-سایت.png">
    <link rel="stylesheet" href="./clientCss/newsEvents/css/News&EventsCss.css">
    <link rel="stylesheet" href="./clientCss/newsEvents/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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
                <div class="serviceDivIcon"><i class='fas fa-video serviceIcon'></i>
                    <p class="serviceText">{{$subjectlist[0]->Subject}}</p></div>
                <div class="serviceDivIcon"><i class='fas fa-code serviceIcon'></i>
                    <p class="serviceText">{{$subjectlist[1]->Subject}}</p></div>
                <div class="serviceDivIcon"><i class='fas fa-slash serviceIcon' style="transform: rotate(90deg);"></i>
                    <p class="serviceText">{{$subjectlist[2]->Subject}}</p></div>
                <div class="serviceDivIcon"><i class='fas fa-shopping-bag serviceIcon'></i>
                    <p class="serviceText">{{$subjectlist[3]->Subject}}</p></div>
                <div class="serviceDivIcon"><i class='fas fa-user-alt serviceIcon'></i>
                    <p class="serviceText">{{$subjectlist[4]->Subject}}</p></div>
                <div class="serviceDivIcon"><i class='fas fa-keyboard serviceIcon'></i>
                    <p class="serviceText">{{$subjectlist[5]->Subject}}</p></div>
            </div>
            <div class="serviceHashatg">
                <p class="serviceHashatgTitle">هشتگ های مهم</p>
                <div class="serviceHashatgContentBox">
                    <P class="serviceHashatgContent">{{$hashtaglist[0]->Hashtag}}</P>
                    <P class="serviceHashatgContent">{{$hashtaglist[1]->Hashtag}}</P>
                </div>
            </div>
        </div>
        <?php
        $newsArray = array();
        ?>
        @foreach($newsList as $nl)
            <?php
            array_push($newsArray, $nl);
            ?>
        @endforeach
        <div class="lastNews">
            <div class="lastNewsDivSlider">
                <p class="lastNewsTitle">آخرین خبر ها</p>
                <div class="slideAll">
                    <div class="slideBox">
                        <?php
                        $lenght = count($newsArray) - 1
                        ?>
                        <div class="mySlides">
                            <a style="text-decoration: none" href="{{route('newsPageViewRoute',$newsArray[$lenght]->id)}}">
                                <div class="newsBox">
                                    <div class="newsUp">
                                        <img src="{{$newsArray[$lenght]->NewsImg}}" class="imgNews" alt="">
                                        <div class="newsUPContent">
                                            <b>{{$newsArray[$lenght]->Title}}</b>
                                            <p>{{$newsArray[$lenght]->Text}}</p>
                                        </div>
                                    </div>
                                    <div class="newsDown">
                                        <div class="newsDownAuthor"><img src="{{$newsArray[$lenght]->AuthorImg}}"
                                                                         class="newsDownAuthorImg" alt="">
                                            <p class="newsDownAuthorName">{{$newsArray[$lenght]->Author}}</p></div>
                                        <p class="newsDownDivTime-Date"><span
                                                    class="newsDownTimeSpanTime-Date">{{$newsArray[$lenght]->Time}}</span>
                                        </p>
                                        <p class="newsDownDivTime-Date"><span
                                                    class="newsDownTimeSpanTime-Date">{{$newsArray[$lenght]->Date}}</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a style="text-decoration: none" href="{{route('newsPageViewRoute',$newsArray[$lenght-1]->id)}}">
                                <div class="newsBox">
                                    <div class="newsUp">
                                        <img src="{{$newsArray[$lenght-1]->NewsImg}}" class="imgNews" alt="">
                                        <div class="newsUPContent">
                                            <b>{{$newsArray[$lenght-1]->Title}}</b>
                                            <p>{{$newsArray[$lenght-1]->Text}}</p>
                                        </div>
                                    </div>
                                    <div class="newsDown">
                                        <div class="newsDownAuthor"><img src="{{$newsArray[$lenght-1]->AuthorImg}}"
                                                                         class="newsDownAuthorImg" alt="">
                                            <p class="newsDownAuthorName">{{$newsArray[$lenght-1]->Author}}</p></div>
                                        <p class="newsDownDivTime-Date"><span
                                                    class="newsDownTimeSpanTime-Date">{{$newsArray[$lenght-1]->Time}}</span>
                                        </p>
                                        <p class="newsDownDivTime-Date"><span
                                                    class="newsDownTimeSpanTime-Date">{{$newsArray[$lenght-1]->Date}}</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="mySlides">
                            <a style="text-decoration: none" href="{{route('newsPageViewRoute',$newsArray[$lenght-2]->id)}}">
                                <div class="newsBox">
                                    <div class="newsUp">
                                        <img src="{{$newsArray[$lenght-2]->NewsImg}}" class="imgNews" alt="">
                                        <div class="newsUPContent">
                                            <b>{{$newsArray[$lenght-2]->Title}}</b>
                                            <p>{{$newsArray[$lenght-2]->Text}}</p>
                                        </div>
                                    </div>
                                    <div class="newsDown">
                                        <div class="newsDownAuthor"><img src="{{$newsArray[$lenght-2]->AuthorImg}}"
                                                                         class="newsDownAuthorImg" alt="">
                                            <p class="newsDownAuthorName">{{$newsArray[$lenght-2]->Author}}</p></div>
                                        <p class="newsDownDivTime-Date"><span
                                                    class="newsDownTimeSpanTime-Date">{{$newsArray[$lenght-2]->Time}}</span>
                                        </p>
                                        <p class="newsDownDivTime-Date"><span
                                                    class="newsDownTimeSpanTime-Date">{{$newsArray[$lenght-2]->Date}}</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a style="text-decoration: none" href="{{route('newsPageViewRoute',$newsArray[$lenght-3]->id)}}">
                                <div class="newsBox">
                                    <div class="newsUp">
                                        <img src="{{$newsArray[$lenght-3]->NewsImg}}" class="imgNews" alt="">
                                        <div class="newsUPContent">
                                            <b>{{$newsArray[$lenght-3]->Title}}</b>
                                            <p>{{$newsArray[$lenght-3]->Text}}</p>
                                        </div>
                                    </div>
                                    <div class="newsDown">
                                        <div class="newsDownAuthor"><img src="{{$newsArray[$lenght-3]->AuthorImg}}"
                                                                         class="newsDownAuthorImg" alt="">
                                            <p class="newsDownAuthorName">{{$newsArray[$lenght-3]->Author}}</p></div>
                                        <p class="newsDownDivTime-Date"><span
                                                    class="newsDownTimeSpanTime-Date">{{$newsArray[$lenght-3]->Time}}</span>
                                        </p>
                                        <p class="newsDownDivTime-Date"><span
                                                    class="newsDownTimeSpanTime-Date">{{$newsArray[$lenght-3]->Date}}</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="mySlides">
                            <a style="text-decoration: none" href="{{route('newsPageViewRoute',$newsArray[$lenght-4]->id)}}">
                                <div class="newsBox">
                                    <div class="newsUp">
                                        <img src="{{$newsArray[$lenght-4]->NewsImg}}" class="imgNews" alt="">
                                        <div class="newsUPContent">
                                            <b>{{$newsArray[$lenght-4]->Title}}</b>
                                            <p>{{$newsArray[$lenght-4]->Text}}</p>
                                        </div>
                                    </div>
                                    <div class="newsDown">
                                        <div class="newsDownAuthor"><img src="{{$newsArray[$lenght-4]->AuthorImg}}"
                                                                         class="newsDownAuthorImg" alt="">
                                            <p class="newsDownAuthorName">{{$newsArray[$lenght-4]->Author}}</p></div>
                                        <p class="newsDownDivTime-Date"><span
                                                    class="newsDownTimeSpanTime-Date">{{$newsArray[$lenght-4]->Time}}</span>
                                        </p>
                                        <p class="newsDownDivTime-Date"><span
                                                    class="newsDownTimeSpanTime-Date">{{$newsArray[$lenght-4]->Date}}</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a style="text-decoration: none" href="{{route('newsPageViewRoute',$newsArray[$lenght-5]->id)}}">
                                <div class="newsBox">
                                    <div class="newsUp">
                                        <img src="{{$newsArray[$lenght-5]->NewsImg}}" class="imgNews" alt="">
                                        <div class="newsUPContent">
                                            <b>{{$newsArray[$lenght-5]->Title}}</b>
                                            <p>{{$newsArray[$lenght-5]->Text}}</p>
                                        </div>
                                    </div>
                                    <div class="newsDown">
                                        <div class="newsDownAuthor"><img src="{{$newsArray[$lenght-5]->AuthorImg}}"
                                                                         class="newsDownAuthorImg" alt="">
                                            <p class="newsDownAuthorName">{{$newsArray[$lenght-5]->Author}}</p></div>
                                        <p class="newsDownDivTime-Date"><span
                                                    class="newsDownTimeSpanTime-Date">{{$newsArray[$lenght-5]->Time}}</span>
                                        </p>
                                        <p class="newsDownDivTime-Date"><span
                                                    class="newsDownTimeSpanTime-Date">{{$newsArray[$lenght-5]->Date}}</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="mySlides">
                            <a style="text-decoration: none" href="{{route('newsPageViewRoute',$newsArray[$lenght-6]->id)}}">
                                <div class="newsBox">
                                    <div class="newsUp">
                                        <img src="{{$newsArray[$lenght-6]->NewsImg}}" class="imgNews" alt="">
                                        <div class="newsUPContent">
                                            <b>{{$newsArray[$lenght-6]->Title}}</b>
                                            <p>{{$newsArray[$lenght-6]->Text}}</p>
                                        </div>
                                    </div>
                                    <div class="newsDown">
                                        <div class="newsDownAuthor"><img src="{{$newsArray[$lenght-6]->AuthorImg}}"
                                                                         class="newsDownAuthorImg" alt="">
                                            <p class="newsDownAuthorName">{{$newsArray[$lenght-6]->Author}}</p></div>
                                        <p class="newsDownDivTime-Date"><span
                                                    class="newsDownTimeSpanTime-Date">{{$newsArray[$lenght-6]->Time}}</span>
                                        </p>
                                        <p class="newsDownDivTime-Date"><span
                                                    class="newsDownTimeSpanTime-Date">{{$newsArray[$lenght-6]->Date}}</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a style="text-decoration: none" href="{{route('newsPageViewRoute',$newsArray[$lenght-7]->id)}}">
                                <div class="newsBox">
                                    <div class="newsUp">
                                        <img src="{{$newsArray[$lenght-7]->NewsImg}}" class="imgNews" alt="">
                                        <div class="newsUPContent">
                                            <b>{{$newsArray[$lenght-7]->Title}}</b>
                                            <p>{{$newsArray[$lenght-7]->Text}}</p>
                                        </div>
                                    </div>
                                    <div class="newsDown">
                                        <div class="newsDownAuthor"><img src="{{$newsArray[$lenght-7]->AuthorImg}}"
                                                                         class="newsDownAuthorImg" alt="">
                                            <p class="newsDownAuthorName">{{$newsArray[$lenght-7]->Author}}</p></div>
                                        <p class="newsDownDivTime-Date"><span
                                                    class="newsDownTimeSpanTime-Date">{{$newsArray[$lenght-7]->Time}}</span>
                                        </p>
                                        <p class="newsDownDivTime-Date"><span
                                                    class="newsDownTimeSpanTime-Date">{{$newsArray[$lenght-7]->Date}}</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="numberSlide">
                        <div class="w3-section">
                            <button class="w3-button w3-light-grey" onclick="plusDivs(-1)"><i class='fas fa-play'></i>
                            </button>
                            <button class="w3-button demo" onclick="currentDiv(1)">1</button>
                            <button class="w3-button demo" onclick="currentDiv(2)">2</button>
                            <button class="w3-button demo" onclick="currentDiv(3)">3</button>
                            <button class="w3-button demo" onclick="currentDiv(4)">4</button>
                            <button class="w3-button w3-light-grey" onclick="plusDivs(1)"><i class='fas fa-play'
                                                                                             style="transform: rotate(180deg);"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="importantNewsBox">
                <p class="importantNewsTitle">مهم ترین خبرها</p>
                <div class="importantNewsContent">
                    <div class="importantNews"><span class="importantNewsNumber">1</span>
                        <p class="importantNewsText">لورم اپیسوم یا طرح نما، صفحه آرایی</p></div>
                    <div class="importantNews"><span class="importantNewsNumber">2</span>
                        <p class="importantNewsText">لورم اپیسوم یا طرح نما، صفحه آرایی</p></div>
                    <div class="importantNews"><span class="importantNewsNumber">3</span>
                        <p class="importantNewsText">لورم اپیسوم یا طرح نما، صفحه آرایی</p></div>
                    <div class="importantNews"><span class="importantNewsNumber">4</span>
                        <p class="importantNewsText">لورم اپیسوم یا طرح نما، صفحه آرایی</p></div>
                    <div class="importantNews"><span class="importantNewsNumber">5</span>
                        <p class="importantNewsText">لورم اپیسوم یا طرح نما، صفحه آرایی</p></div>
                    <div class="importantNews"><span class="importantNewsNumber">6</span>
                        <p class="importantNewsText">لورم اپیسوم یا طرح نما، صفحه آرایی</p></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
function debug_to_console($data)
{
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);
    $arrayCount = count($data);
    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    echo "<script>console.log($arrayCount);</script>";
}
debug_to_console($newsArray);
?>

<script src="./clientCss/newsEvents/js/News&EventsJs.js"></script>
</body>
</html>
--}}
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
    <link rel="shortcut icon" type="image/x-icon" href="./clientCss/newsEvents/img/لوگوی-وسط-سایت.png">
    <link rel="stylesheet" href="./clientCss/newsEvents/css/News&EventsCss.css">
    <link rel="stylesheet" href="./clientCss/newsEvents/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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
        <?php
        $newsArray = array();
        ?>
        @foreach($newsList as $nl)
            <?php
            array_push($newsArray, $nl);
            ?>
        @endforeach
        <div class="lastNews">
            <div class="lastNewsDivSlider">
                <p class="lastNewsTitle">آخرین خبر ها</p>
                <div class="slideAll">
                    <div class="slideBox">
                        <?php
                        $lenght = count($newsList);
                        $z = 1;
                        if ($lenght / 2 != 0) {
                            $y = ($lenght / 2) + 1;
                        } else {
                            $y = ($lenght / 2);
                        }
                        for ($x = 1; $x < $y; $x++) {
                            echo "<div class='mySlides'>";
                            if ($z <= $lenght) {
                                echo "<a style='text-decoration: none' href='" . route('newsPageViewRoute', $newsList[$lenght - $z]->id) . "'>";
                                echo "<div class='newsBox'>";
                                echo "<div class='newsUp'>";
                                echo "<img src='" . $newsList[$lenght - $z]->NewsImg . "' class='imgNews' alt=''>";
                                echo "<div class='newsUPContent'>";
                                echo "<b>" . $newsList[$lenght - $z]->Title . "</b>";
                                echo "<div>" . $newsList[$lenght - $z]->Text . "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "<div class='newsDown'>";
                                echo "<div class='newsDownAuthor'>";
                                echo "<img src='" . $newsList[$lenght - $z]->AuthorImg . "'class='newsDownAuthorImg' alt=''>";
                                echo "<p class='newsDownAuthorName'>" . $newsList[$lenght - $z]->Author . "</p>";
                                echo "</div>";
                                echo "<p class='newsDownDivTime-Date'><span
                                                class='newsDownTimeSpanTime-Date'>" . $newsList[$lenght - $z]->Time . "</span></p>";
                                echo "<p class='newsDownDivTime-Date'><span
                                                class='newsDownTimeSpanTime-Date'>" . $newsList[$lenght - $z]->Date . "</span></p>";
                                echo "</div>";
                                echo "</div>";
                                echo "</a>";
                                $z += 1;
                                }
                            if ($z <= $lenght) {
                                echo "<a style='text-decoration: none' href='" . route('newsPageViewRoute', $newsList[$lenght - $z]->id) . "'>";
                                echo "<div class='newsBox'>";
                                echo "<div class='newsUp'>";
                                echo "<img src='" . $newsList[$lenght - $z]->NewsImg . "' class='imgNews' alt=''>";
                                echo "<div class='newsUPContent'>";
                                echo "<b>" . $newsList[$lenght - $z]->Title . "</b>";
                                echo "<div>" . $newsList[$lenght - $z]->Text . "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "<div class='newsDown'>";
                                echo "<div class='newsDownAuthor'>";
                                echo "<img src='" . $newsList[$lenght - $z]->AuthorImg . "'class='newsDownAuthorImg' alt=''>";
                                echo "<p class='newsDownAuthorName'>" . $newsList[$lenght - $z]->Author . "</p>";
                                echo "</div>";
                                echo "<p class='newsDownDivTime-Date'><span
                                                class='newsDownTimeSpanTime-Date'>" . $newsList[$lenght - $z]->Time . "</span></p>";
                                echo "<p class='newsDownDivTime-Date'><span
                                                class='newsDownTimeSpanTime-Date'>" . $newsList[$lenght - $z]->Date . "</span></p>";
                                echo "</div>";
                                echo "</div>";
                                echo "</a>";
                                $z += 1;
                            }
                            echo "</div>";
                        }
                        ?>
                    </div>

                    <div class="numberSlide">
                        <div class="w3-section">
                            <button class="w3-button w3-light-grey" onclick="plusDivs(-1)"><i class='fas fa-play'></i>
                            </button>
                            @for($x = 1; $x < $y; $x++)
                                <button class="w3-button demo" onclick="currentDiv({{$x}})">{{$x}}</button>
                            @endfor
                                <button class="w3-button w3-light-grey" onclick="plusDivs(1)"><i class='fas fa-play'
                                                                                                 style="transform: rotate(180deg);"></i>
                                </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="importantNewsBox">
                <p class="importantNewsTitle">مهم ترین خبرها</p>
                <div class="importantNewsContent">
                    <div class="importantNews"><span class="importantNewsNumber">1</span>
                        <p class="importantNewsText">لورم اپیسوم یا طرح نما، صفحه آرایی</p></div>
                    <div class="importantNews"><span class="importantNewsNumber">2</span>
                        <p class="importantNewsText">لورم اپیسوم یا طرح نما، صفحه آرایی</p></div>
                    <div class="importantNews"><span class="importantNewsNumber">3</span>
                        <p class="importantNewsText">لورم اپیسوم یا طرح نما، صفحه آرایی</p></div>
                    <div class="importantNews"><span class="importantNewsNumber">4</span>
                        <p class="importantNewsText">لورم اپیسوم یا طرح نما، صفحه آرایی</p></div>
                    <div class="importantNews"><span class="importantNewsNumber">5</span>
                        <p class="importantNewsText">لورم اپیسوم یا طرح نما، صفحه آرایی</p></div>
                    <div class="importantNews"><span class="importantNewsNumber">6</span>
                        <p class="importantNewsText">لورم اپیسوم یا طرح نما، صفحه آرایی</p></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
function debug_to_console($data)
{
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);
    $arrayCount = count($data);
    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    echo "<script>console.log($arrayCount);</script>";
}
debug_to_console($newsArray);
?>

<script src="./clientCss/newsEvents/js/News&EventsJs.js"></script>
</body>
</html>
