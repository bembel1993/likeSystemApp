<?php
$servername = "localhost";
$username = "sqluser";
$password = "password";
$dbname = "systemlike";

$conn = new mysqli($servername, $username, $password, $dbname);
?>
<!DOCTYPE html>
<html>

<head>
    <title>News</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div class="block1">
        <div class="block2forHeader">
            <p class="nameDescribesHeader">
                Header
            </p>
            <div class="block10">
                <div class="block101">
                    <b>Главная</b>
                </div>
                <div class="block102">
                    <b>Статьи</b>
                </div>
                <div class="block103">
                    <b>Новости</b>
                </div>
            </div>
            <br>
        </div>

        <div class="block2">
            <div class="article">
                <p class="nameDescribesArticle">
                    Статьи
                </p>
            </div>
            <br>
            <div class="block11">
                <div class="block111">
                    <img class="likediss" src="img/1work.png" align="center">
                </div>

                <div class="block113">
                    <div class="block112">
                        <p class="nameOfArticle">
                            <b>GoPractice разработали симулятор работы с SQL для продактов</b>
                        </p>
                    </div>
                    <div class="block1121">
                        <p class="nameDescribes1">
                            Зачем он нужен и чем может быть полезен профессионалу
                        </p>
                    </div>
                    <div class="block1122">
                        <p class="nameDescribes2">
                            Автор: <b>GoPractice</b> <!--<p class="nameDescribes3">GoPractice</p>-->
                        </p>
                    </div>
                    <div class="block114like" id="likeShow">
                        <?php
                        $sqlFromTable = "SELECT likes FROM liked WHERE articleId=1 ORDER BY likes DESC";
                        $result1 = $conn->query($sqlFromTable);
                        $row = $result1->fetch_assoc();
                        $like = $row['likes'];
                        echo "<p class='nameDescribes1'><b>" . $like . "</b></p>";
                        ?>
                    </div>
                    <form id="likeSend" method="post" action="likedislike.php">
                        <?php
                        $sqlArticle = "SELECT id, articlename FROM article WHERE id = 1";
                        $result2 = $conn->query($sqlArticle);
                        $row = $result2->fetch_assoc();
                        $id = $row['id'];
                     //   echo $id;
                        ?>
                        <div class="block114" id="like" name="like">

                            <button class="noborder" type="submit" id="like" name="like">
                                <img align="right" class="likediss" src="img/plus.png" align="center">
                            </button>
                        </div>
                    </form>

                    <form id="dislikeSend" method="post" action="likedislike.php">
                        <div class="block115">
                            <button class="noborder" type="" id="dislike" name="dislike">
                                <img align="right" class="likediss" src="img/minus.png" align="center">
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!--///////////////////////////////////////////////////////////////////////////////////////////////////////-->
            <div class="block11">
                <div class="block111">
                    <img class="likediss" src="img/calend.png" align="center">
                </div>

                <div class="block113">
                    <div class="block112">
                        <p class="nameOfArticle">
                            <b>Как agile coach помогает полностью оптимизировать процессы в
                                одной отдельно взятой команде
                            </b>
                        </p>
                    </div>
                    <div class="block1121">
                        <p class="nameDescribes1">
                            Кейс "Магнита"
                        </p>
                    </div>
                    <div class="block1122">
                        <p class="nameDescribes2">
                            Автор: <b>Magnit IT</b> <!--<p class="nameDescribes3">GoPractice</p>-->
                        </p>
                    </div>
                    <div class="block114like" id="likeShow">
                        <?php
                        $sqlFromTable = "SELECT count(likes) AS sum FROM liked WHERE articleId=2 ORDER BY likes DESC";
                        $result1 = $conn->query($sqlFromTable);
                        $row = $result1->fetch_assoc();
                        $like = $row['sum'];
                        echo "<p class='nameDescribes1'><b>" . $like . "</b></p>";
                        ?>
                    </div>
                    <form id="likeSend" method="post" action="likedislike.php">
                    <?php
                        $sqlArticle = "SELECT id, articlename FROM article WHERE id = 2";
                        $result2 = $conn->query($sqlArticle);
                        $row = $result2->fetch_assoc();
                        $id = $row['id'];
                     //   echo $id;
                        ?>
                        <div class="block114" id="like" name="like">
                            <button class="noborder" type="submit" id="like" name="like">
                                <img align="right" class="likediss" src="img/plus.png" align="center">
                            </button>
                        </div>
                    </form>
                    <!--  <div class="block115diss">
                </div>-->
                    <form id="dislikeSend" method="post" action="likedislike.php">
                        <div class="block115">
                            <button class="noborder" type="" id="dislike" name="dislike">
                                <img align="right" class="likediss" src="img/minus.png" align="center">
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!--///////////////////////////////////////////////////////////////////////////////////////////////////////-->

            <!--///////////////////////////////////////////////////////////////////////////////////////////////////////-->
        </div>
        <!--///////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div class="block2forFooter">
            <p class="nameDescribesHeader">
                Footer
            </p>
        </div>

        <div class="block22">
            <div class="article2">
                <p class="nameDescribesArticle">Sidebar</p>
            </div>
        </div>
    </div>
    <script>
        /*         $('#like').click(function() {
                $.post(
                    'likedislike.php',
                    $("#likeSend").serialize(),
                    function(data) {
                        console.log(data);
                        $('#likeShow').html(data);
                    }
                );
            });*/
        /*      $('#dislike').click(function() {
                  $.post(
                      'likedislike.php',
                      $("#dislikeForm").serialize(),
                      function(data) {
                          console.log(data);
                          $('#dislikeShow').html(data);
                      }
                  );
              });*/
    </script>
</body>

</html>