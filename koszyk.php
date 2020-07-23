<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sansita:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/searchScale.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
    <!--<script type="text/javascript" src="js/main.js"></script>-->
    <script type="text/javascript" src="js/cart.js"></script>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <title>Koszyk</title>
</head>

<body>
    <header class="header">
        <div class="header-up">
            <div class="row">
                <div class="header__logo col-md-3 ">
                    <a href="#"><img class="header__logo__img" src="img/logo.svg" alt="LOGO"></a>
                </div>
                <div class="header__search col-md-7">
                    <form  class="header__form active-pink-3 active-pink-4 mb-4">
                        <input class="form-control header__search__input" id="hInput" type="text" placeholder="Wyszukaj..." aria-label="Search">
                        <button class="header__form__button" type="submit"><img id="loupe" src="img/Component 17 – 1.svg"></button>
                    </form>
                </div>
                <div class="header__btn col-md-2">
                    <form class="header__form-login" action="#" target="_blank">
                        <button class="header__form-right__btn mainBtn">LogIn</button>
                    </form>
                    <form class="header__form-cart" action="#" target="_blank">
                        <button class="header__form-cart">
                            <img src="img/koszyk2.svg" alt="cart">
                        </button>
                        <div class="header__form-cart-increment">
                            <p>1</p>
                        </div>
                    </form>    
                </div>
            </div>    
        </div>
        
    </header>
    <div class="header-down">
            <nav class="header__nav">
                <ul class="header__nav__list container">
                    <li class="header__nav__list__item">
                         <a href="#"><i class="fas fa-bars"></i>  Książki</a>
                    </li>
                    <li class="header__nav__list__item"><a href="promocje.html">Promocje</a></li>
                    <li class="header__nav__list__item"><a href="authors.html">Autory</a></li>
                    <li class="header__nav__list__item"><a href="pulitzer2018.html">Ranking</a></li>
                </ul>
            </nav>
        </div>
    <section class="cart__section container">
        <div class="back">
            <a href="#">&larr;<u>powrót</u></a>
        </div>

        <div class="cart__title">
           <h1 class="">Twój aktualny koszyk</h1>
        </div>
        <div class="cart__parametrs">

            <h2>Ilość</h2>
            <h2>Cena</h2>
        </div>
        <div class="cart">

        </div>

        <div class="row ">
            <div class="col-md-10"></div>
            <div class="sum col-md-2">
                <h2 class="sum-text sub-title ">
                                Razem
                </h2>
            
                <h2 class="sum-num "><span class="sumPrice">0.00</span>  <span>zł</span> </h2>
            </div>
        </div>
        <div class="row cart__button__box">
            <div class="col-md-3"></div>
            <button class="cart__button orangeBg col-md-4">
                Kontynuuj zakupy
            </button>
            <div class="col-md-1"></div>
            <button class="cart__button col-md-4 cart-next-button">
                Przejdż do zamówienia
            </button>
        </div>

    </section>
     <section class="second-section ">
        <div class="second-wrapper ">
        <h1 class="title">NOWOŚCI!</h1>
        <h2 class="sub-title"> WYBIERZ COŚ DLA SIEBIE </h2>
            <div class="second-slider">
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div> 
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-up">
            <div class="footer-up__wrapper container">
                <h1 class="title">dołącz się do nas</h1>
                <div class="footer-up__box">
                    <a href="#" class="footer-up__link"> <div class="footer-up__icon__box"> <i class="footer-up__icon fab fa-vk"></i></div><span class="people">300 000 osób</span></a>
                    <a href="#" class="footer-up__link"> <div class="footer-up__icon__box"> <i class="footer-up__icon fab fa-facebook-f"></i></div><span class="people">300 000 osób</span></a>
                    <a href="#" class="footer-up__link"> <div class="footer-up__icon__box"> <i class="footer-up__icon fab fa-twitter"></i></div><span class="people">300 000 osób</span></a>
                    <a href="#" class="footer-up__link"> <div class="footer-up__icon__box"> <i class="footer-up__icon fab fa-instagram"></i></div><span class="people">300 000 osób</span></a>
                    <a href="#" class="footer-up__link"> <div class="footer-up__icon__box"> <i class="footer-up__icon fab fa-youtube"></i></div><span class="people">300 000 osób</span></a>
                    <a href="#" class="footer-up__link"> <div class="footer-up__icon__box"> <i class="footer-up__icon fab fa-linkedin-in"></i></div><span class="people">300 000 osób</span></a>
                </div>
            </div>    
        </div>
        <div class="footer-down">
            <div class="container">
                <div class="footer-down__wrapper ">
                    <div class="footer-down__nav">
                        <ul class="footer-down__list"> <span class="footer-down__list-mainLink"> Wspolpraca <span>
                            <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                            <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                            <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                            <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                            <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                        </ul>
                        <ul class="footer-down__list"> <span class="footer-down__list-mainLink"> Wspolpraca</span> 
                            <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                            <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                            <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                            <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                            <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                        </ul>
                    </div>
                    <div class="footer-down__nav">
                            <ul class="footer-down__list"> <span class="footer-down__list-mainLink"> Wspolpraca</span> 
                                <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                                <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                                <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                                <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                                <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                            </ul>
                            <ul class="footer-down__list"> <span class="footer-down__list-mainLink"> Wspolpraca</span> 
                                <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                                <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                                <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                                <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                                <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                            </ul>
                    </div>
               
                </div>    
                <div class="footer-down-spam ">
                    <div class="footer-down-spam-box"> 
                        <h1 class="footer-down-spam-text" >OTRZYMUJ WIĘCEJ</h1>
                        <form class="footer-down__form">
                            <div class="footer-down__form__wrapper">
                                <input type="text" class="footer-down__form__input" placeholder="Name">
                                <input type="email" class="footer-down__form__input" placeholder="Email">
                                <input type="submit" value="SUBMIT" class="footer-down__form__button">
                            </div>
                        </form>
                    
                    </div>
                </div>
            </div>
            

        </div>

        <div class="copyright">
            <h4 class="copyright-text" > @copyright </h4>
        </div>

    </footer>

   
    