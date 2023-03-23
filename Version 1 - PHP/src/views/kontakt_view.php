﻿<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <title>Jazzman's World</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, inital-scale=0.9" />
    <link rel="stylesheet" href="index.css" />
</head>

<body>
    
    <div id="wrapper">
        <header>
            <a href="/"><h1>Jazzman's World</h1></a>
        </header>

        <div id="left">
            <div id="content">

                <section>
                    <div class="ramkaImg" style="flex: 2;">
                        <img src="img/telefon.jpg" alt="Telefon"/>
                    </div>
                    <div class="ramkaArticle" style="flex: 3;">
                        <article>
                            <h3>Formularz kontaktowy</h3>
                                <form action="contact.php" method="post" style="display: flex;">
                                    <div style="flex: 1; padding: 10px;">
                                        <label for="imie">Imię: </label><br />
                                        <input id="imie" type="text" name="imie" placeholder="Wprowadź imię" />
                                        <br /><br />

                                        <label for="nazwisko">Nazwisko: </label><br />
                                        <input id="nazwisko" type="text" name="nazwisko" placeholder="Wprowadź nazwisko" />
                                        <br /><br />

                                        Płeć:<br />
                                        <input id="man" type="radio" name="plec" value="Mężczyzna" />
                                        <label for="man">Mężczyzna </label>
                                        <br />
                                        <input id="woman" type="radio" name="plec" value="Kobieta" />
                                        <label for="woman">Kobieta </label>
                                        <br />
                                        <input id="inne" type="radio" name="plec" value="Inne" />
                                        <label for="inne">Inne </label>
                                        <br /><br />

                                        <label for="stan">Umiejętność gry na gitarze: </label><br />

                                        <select id="stan" name="Poziom">
                                            <option value="-1">Wybierz</option>
                                            <option value="0">Nie gram</option>
                                            <option value="1">Podstawowy</option>
                                            <option value="2">Zaawansowany</option>
                                            <option value="3">Profesjonalny</option>
                                        </select>

                                        <br /><br />

                                        <label for="email">Email: </label><br />
                                        <input id="email" type="email" name="email" placeholder="Wprowadź email" />
                                        <br /><br />

                                        <label for="tel">Telefon: </label><br />
                                        <input id="tel" type="tel" name="tel" placeholder="Wprowadź numer telefonu" />

                                        <br /><br />

                                        <label for="plik">Dodaj plik: </label><br />
                                        <input id="plik" type="file" name="Plik" />

                                        <br/><br />
                                        <input type="reset" value="Reset"/>
                                        <input type="submit" value="Wyślij"/>
                                    </div>
                                    <div style="flex: 1;">
                                        <label for="msg">Wiadomość: </label><br />
                                        <textarea id="msg" name="msg"></textarea>
                                    </div>
                                </form>
                        </article>
                    </div>
                </section>
            </div>

        </div>

        <div class="aside">
                <nav>
                    <div class="menu">
                        <p class="menuTitle"><b>Menu</b></p>
                        <a href="instrumenty">
                            <div class="navMenuPos">
                                Typy instrumentów
                            </div>
                        </a>

                        <hr />

                        <a href="albumy">
                            <div class="navMenuPos">
                                Albumy, których powinien posłuchać każdy
                            </div>
                        </a>

                        <hr />

                        <a href="kontakt">
                            <div class="navMenuPos" id="navActive">
                                Napisz do mnie
                            </div>
                        </a>

                        <hr />

                        <a href="galeria">
                            <div class="navMenuPos">
                                Galeria
                            </div>
                        </a>

                        <hr />
                        
                        <a href="own_gallery">
                            <div class="navMenuPos">
                                Zapamiętane obrazy
                            </div>
                        </a>

<hr />

<a href="search">
    <div class="navMenuPos">
        Przeszukaj galerię
    </div>
</a>
                        
                        <hr />

                        <?php if(isset($_SESSION['userID'])):?>
                        <a href="logout">
                            <div class="navMenuPos">
                                Wyloguj się
                            </div>
                        </a>
                        <?php else:?>
                            <a href="login">
                            <div class="navMenuPos">
                                Zaloguj się
                            </div>
                        </a>
                        <?php endif?>

                        <div id="menuOnPhone">
                            <hr />

                            <button id="phoneDDButton">
                                Legendy gitary jazzowej
                            </button>

                            <div id="phoneDDContent">
                                <hr />
                                <a href="pass">
                                    <div class="navMenuPos">
                                        Joe Pass
                                    </div>
                                </a>

                                <hr />

                                <a href="hall">
                                    <div class="navMenuPos">
                                        Jim Hall
                                    </div>
                                </a>

                                <hr />

                                <a href="wes">
                                    <div class="navMenuPos">
                                        Wes Montgomery
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>

                <nav>
                    <div class="container">

                        <div class="navMenuPosDD">
                            <div class="navMenuPos">
                                Legendy gitary jazzowej
                            </div>
                        </div>

                        <div id="slide">
                            <a href="pass">
                                <img class="menuPic" src="img/pass.jpg" alt="Joe Pass"/>
                            </a>

                            <a href="hall">
                                <img class="menuPic" src="img/hall.jpg" alt="Jim Hall"/>
                            </a>

                            <a href="wes">
                                <img class="menuPic" src="img/wes.jpg" alt="Wes Montgomery"/>
                            </a>
                        </div>

                        <div class="gridSpace">
                            <div class="gallery">
                                <p class="menuTitle"><b>Standardy tygodnia</b></p>

                                <div>
                                    <a href="img/s1.jpg" target="_blank"><img src="img/s1.jpg" alt="Music Notes" /></a>
                                    When Sunny Gets Blue
                                </div>
                                <div>
                                    <a href="img/s2.jpg" target="_blank"><img src="img/s2.jpg" alt="Music Notes" /></a>
                                    <br />Autumn Leaves
                                </div>
                                <div>
                                    <a href="img/s3.jpg" target="_blank"><img src="img/s3.jpg" alt="Music Notes" /></a>
                                    <br />Invitation
                                </div>
                                <div>
                                    <a href="img/s4.png" target="_blank"><img src="img/s4.png" alt="Music Notes" /></a>
                                    <br />Alone Together
                                </div>
                                <div>
                                    <a href="img/s5.png" target="_blank"><img src="img/s5.png" alt="Music Notes" /></a>
                                    <br />The Girl From Ipanema
                                </div>
                                <div>
                                    <a href="img/s6.jpg" target="_blank"><img src="img/s6.jpg" alt="Music Notes" /></a>
                                    <br />Misty
                                </div>
                                <div>
                                    <a href="img/s7.png" target="_blank"><img src="img/s7.png" alt="Music Notes" /></a>
                                    <br />Have You Met Miss Jones
                                </div>
                                <div>
                                    <a href="img/s8.png" target="_blank"><img src="img/s8.png" alt="Music Notes" /></a>
                                    <br />On The Sunny Side Of The Street
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

        <section id="mobileGallery">
            <p class="menuTitle"><b>Standardy tygodnia</b></p>
            <div id="pics">
                <div>
                    <a href="img/s1.jpg" target="_blank"><img src="img/s1.jpg" alt="Music Notes" /></a>
                    <br />When Sunny Gets Blue
                </div>
                <div>
                    <a href="img/s2.jpg" target="_blank"><img src="img/s2.jpg" alt="Music Notes" /></a>
                    <br />Autumn Leaves
                </div>
                <div>
                    <a href="img/s3.jpg" target="_blank"><img src="img/s3.jpg" alt="Music Notes" /></a>
                    <br />Invitation
                </div>
                <div>
                    <a href="img/s4.png" target="_blank"><img src="img/s4.png" alt="Music Notes" /></a>
                    <br />Alone Together
                </div>
                <div>
                    <a href="img/s5.png" target="_blank"><img src="img/s5.png" alt="Music Notes" /></a>
                    <br />The Girl From Ipanema
                </div>
                <div>
                    <a href="img/s6.jpg" target="_blank"><img src="img/s6.jpg" alt="Music Notes" /></a>
                    <br />Misty
                </div>
                <div>
                    <a href="img/s7.png" target="_blank"><img src="img/s7.png" alt="Music Notes" /></a>
                    <br />Have You Mey Miss Jones
                </div>
                <div>
                    <a href="img/s8.png" target="_blank"><img src="img/s8.png" alt="Music Notes" /></a>
                    <br />On The Sunny Side Of The Street
                </div>
            </div>
        </section>

        <footer>
            <svg style="width: 21px; height: 21px ; position: relative; top: 3px;">
                <polygon points="10,1 4,19.8 19,7.8 1,7.8 16,19.8" style="fill:white; stroke: white; stroke-width: 1;" />
            </svg>

            <span id="tutaj"></span><b>Jan Kaczerski, grupa 1

            <svg style="width: 21px; height: 21px; position: relative; top: 3px;">
                <polygon points="10,1 4,19.8 19,7.8 1,7.8 16,19.8" style="fill:white; stroke: white; stroke-width: 1;" />
            </svg>

            <br /><a href="#">Wróć na górę</a></b>

        </footer>
    </div>
</body>

</html>