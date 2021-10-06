<?php
session_start();
// if(isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
// {
//   header("location: login.php");
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>onlineenjoyment.com</title>
    <link rel="stylesheet" href="other.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#157878">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="other.css">
</head>

<body style="font-family: 'Roboto', sans-serif; background: #d7e5e7; padding:0px;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style = "padding-top: 1.9rem; ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">OnlineEnjoyment</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse respon" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="border: none;">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="homepage.php" style="color: #019d58;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="music.php" style="color: #019d58;">Music</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="movie.php" style="color: #019d58;">Movie</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="other.php" style="color: #a7d3ab;">Others</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" style="color: #019d58;">Log out</a>
                    </li>
                    

                </ul>

            </div>

        </div>
    </nav>
    <div class="container" style = "max-width: 99%;">

        <div class="image" style ="height:564px">
            <img style="padding: 10px 0px 0px 0px;" width="500" height="600" src="collage_1.webp" alt="">
        </div>
        <div class="intro">
            <p>&quot;Life before the coronavirus was not normal.&nbsp;People were unable to spare
                time for themself.&nbsp;Within the lockdown period they started to explore
                their talents,spend time with their family.&nbsp;Amidst this some of them took
                interest in cooking,&nbsp;gardening,&nbsp;and indoor-games.&quot;</p>
        </div>
        <div class="activities">
            <div class="cooking" style = "width: 22rem;">
                <!-- <div class="cook-head"> -->
                <details>
                    <summary class="cook-head">Cooking</summary>
                    <div class="cooking-writing">
                        <p>In this pandemic time we cannot go out and enjoy our favouraite dishes in
                            resturant.&nbsp We need to cook this dishes at home .&nbsp So, here we have listed some of
                            the dishses.

                        </p>
                        <!-- <div class="Non veg biryani"> -->
                        <h2>VEG BIRYANI</h2>
                        <picture>
                            <source media="(min-width:650px)" srcset="veg-biryani.webp">
                            <img width="200px" src="veg-biryani.webp">
                        </picture>

                        <h3> Ingredients:</h3>
                        <ul>
                            <li><span>1 cup basmati rice ((soaked for at least 20 mins))</span></li>
                            <li><span> 1 medium onion ((½ cup thinly sliced))</span></li>
                            <li><span>1 green chili ((slit or chopped) (skip for kids))</span></li>
                            <li><span>1 teaspoon ginger garlic paste</span></li>
                            <li> <span> 2 tablespoons mint leaves (chopped (pudina))</span></li>
                        </ul>
                        <h2>Directions: </h2>
                        <p style="font-size: large;">Preparing rice and vegetables:
                            Wash 250 grams/ 1 cup of rice in clean water twice and soak for 15 to 20 minutes

                            Wash and chop the vegetables. Keep it ready.</p>
                        <ol>
                            <li> In a thick bottom pan/ pressure cooker add 50 grams of oil in high flame.
                                Next, add 1 Bay leaf, 2 Cinnamon, 2 cardamoms, and 2 Cloves. Saute for a couple of
                                seconds.
                            </li>
                            <li>Now add 100 grams or 1/2 cup of onion and saute for a second and cook till it is halfway
                                done.

                                Next, add green chili and saute for 2 seconds.</li>
                            <li>Note: Cook the rest of the following ingredients in low to medium flame

                                At this point add 50 grams of carrot and 25 grams of beans. Mix and cook until the
                                vegetables are half cooked.
                                Now add boiled green peas and cook for 2 minutes.

                            </li>
                            <li>Now add 100 grams or 1/2 cup of tomato and cook until it is mashed.
                                Next, add 2 tbsp curd and cook for 30 seconds
                            </li>
                            <li>Now add 1 tsp red chili powder and 1 tsp salt. Mix well and cook until oil separates
                                from
                                the masala.</li>
                            <li>Next, add 2 cups of water and bring it to boil in high flame.</li>
                            <li>When it starts boiling, open the lid and add soaked basmati rice.

                                Mix well and allow it to boil again.

                                Next, close and place a bowl of water to seal the steam.</li>
                            <li>After 15 to 20 min, open and fluff the rice from the corners.</li>



                        </ol>
                        <h2>DALGONA COFFEE</h2>
                        <picture>
                            <source media="(min-width:650px )" srcset="dalgona-coffee.webp">
                            <img width="200px" src="dalgona-coffee.webp">

                        </picture>

                        <h3>Ingredients:</h3>
                        <ul>
                            <li><span>instant cofee</span></li>
                            <li><span>sugar (granulated is preferred, but brown and coconut sugar will work)</span></li>
                            <li><span>ice</span></li>
                            <li><span>cow or alternative plant-based milk</span></li>
                        </ul>
                        <h2>Directions:</h2>
                        <ol>
                            <li> Combine the instant coffee, sugar, and hot water. (Prep Time: 1 minute)
                                If you’re using a stand mixer to whisk the ingredients together, combine them in the
                                stand
                                mixer bowl. This recipe works best if you combine the dry ingredients (the instant
                                coffee
                                and sugar) first, then add the water and immediately proceed to the next step.</li>
                            <li>Whisk, whisk, whisk until the coffee is light and fluffy! (Work Time: 3 minutes)
                                If you’re using a stand or electric mixer, it’s likely that the ingredients will whip up
                                into a cream in less time, about 1 to 2 minutes. If you’re using your own man power and
                                whisking by hand (which, I see you and respect you), it’ll likely take longer, about 3
                                to 5
                                minutes. In either case, the longer and more vigorously you whisk the mixture, the
                                fluffier
                                and airier it will be.</li>
                            <li>Use a rubber spatula or cookie dough scoop to spoon the coffee cream into a glass of
                                iced
                                milk.</li>

                        </ol>
                        <h2>VEGAN CHOCLATE CAKE</h2>
                        <picture>
                            <source media="(min-width:650px)" srcset="Vegan-Chocolate-Cake1.webp">
                            <img width="200px" src="Vegan-Chocolate-Cake1.webp">

                        </picture>


                        <h3>Ingredients:</h3>
                        <ul>
                            Dry:
                            <li><span>1 cup (125 g) wheat flour</span></li>
                            <li><span>1 cup (125 g) unbleached all purpose flour</span></li>
                            <li> <span>1/2 cup (43 g) cocoa powder</span></li>
                            <li> <span>1/2 tsp (1.5 tsp) baking soda</span></li>
                            <li> <span>1/4 cup (150 g) powdered vegan sugar , 2 Tbsp more for sweeter - blend raw sugar
                                    to
                                    fine powder to use or use wholesome sweeeteners vegan powdered sugar</span></li>
                            <li><span>1/2 (0.5 ) scant tsp salt</span></li>
                            Wet:
                            <li> <span> 1 1/2 cups (366 ml) non dairy milk divided</span></li>
                            <li><span>1/3 cup (60 g) non dairy chocolate chips or bar semi sweet chips, or dark
                                    chocolate
                                    for dark/bittersweet cake</span></li>
                            <li><span> 1/4 cup (1.98 oz) oil</span></li>
                            <li><span> 1 tsp vinegar apple cider vinegar or white vinegar</span></li>
                            <li><span>1/2 tsp (1.5 tsp) vanilla extract</span></li>
                            <li><span> 3 tbsp maple syrup</span></li>
                            Glaze:
                            <li> <span>1/2 cup (122 ml) non dairy milk </span></li>
                            <li><span> 1/3-1/2 cup (40 g) powdered sugar</span></li>
                            <li><span> 2/3 cup (116.67 ml) or more non dairy semi sweet chocolate like Enjoy Life</span>
                            </li>
                            <li><span> 1/2 tsp (0.5 tsp) vanilla extract</span></li>
                            <li><span> 1/4 cup (62.5 g) smooth peanut butter or almond butter or other seed or nut
                                    butter</span></li>
                            <li><span>Fruit preserves like raspberry apricot, cherry (optional)</span></li>
                        </ul>
                        <h2>Directions:</h2>
                        <ol>
                            Cake:
                            <li>Preheat the oven to 350 degrees F / 170ºc. In a bowl, whisk all the dry ingredients for
                                the
                                cake really well.</li>
                            <li> another bowl, heat 1 cup of non dairy milk and chocolate until just about hot (heat in
                                the
                                microwave or stove top). Whisk until chocolate is melted. Add in the rest of the wet
                                ingredients and 1/2 cup non dairy milk and mix in until smooth.</li>
                            <li> the dry to the wet and mix to make a smooth batter.</li>
                            <li> batter to two greased or parchment lined 8 inch cake pans.</li>
                            <li> at 350 degrees F / 170ºc for 32 to 34 minutes. or until toothpick from the center comes
                                out
                                clean. Do not overbake as the cakes can get crusty or dry.</li>
                            <li>Let the cakes cool for 10 minutes then remove from the pan and cool on the rack
                                completely
                                before adding a glaze or ganache. Cover the cakes with a towel while it is cooling to
                                prevent drying out. To shorten the cooling time, cover the cakes with a towel or
                                parchment
                                or a lid and place in the fridge for 15-20 minutes.</li>

                            Ganache:
                            <li>the non dairy milk + sugar in a pan over medium heat, until just about hot. Mix well.
                                Add in
                                the chocolate, mix once and take the pan off heat. Keep mixing until the chocolate is
                                melted
                                and smooth.</li>
                            <li>Add in the vanilla and peanut butter or other nut butter. Mix until smooth. Chill in the
                                refrigerator for 20 to 30 minutes to thicken to desired consistency.</li>
                            <li>some of the ganache on one cake. Spread using a spatula to even out if needed. Let the
                                ganache set in the refrigerator for 15 to 20 minutes or freezer for 10.</li>
                            <li>Add a thin even layer of fruit preserves on the other cake (optional) (warm the
                                preserves to
                                make them easier to spread if needed). Place this cake on top of the cake with the
                                ganache
                                glaze. Pour the rest of the glaze over the top cake. Spread using a spatula if needed.
                                Let
                                the ganache set in the refrigerator for half an hour. If you have more ganache left,
                                pour
                                over the set glaze for another layer. Cover the cake and let it chill for a few hours
                                before
                                serving.</li>

                        </ol>
                        <h2>MANGO ICECREAM</h2>
                        <picture>
                            <source media="(min-width:650px )" srcset="Mango-icecream.webp">
                            <img width="300px" src="Mango-icecream.webp">
                        </picture>
                        <!-- <p>Source:
                            https://i1.wp.com/rumkisgoldenspoon.com/wp-content/uploads/2021/06/Mango-icecream.webp?fit=1800%2C1200&ssl=1
                        </p> -->
                        <h3>Ingredients:</h3>
                        <ul>
                            <li><span>1 tin (400 gms)Nestlé MILKMAID</span></li>
                            <li><span> RipeMangoes, pureed</span></li>
                            <li><span> 300ml Fresh Cream</span></li>

                        </ul>
                        <h2>Directions:</h2>
                        <ol>
                            <li>In a bowl, combine Nestlé MILKMAID, fresh cream and mango puree. Whisk until the mixture
                                thickens. Set it in freezer till half set. Remove and whisk again until smooth. Doing so
                                will help keep the texture of the ice cream soft and creamy while it sets.</li>
                            <li> Return to freezer and set completely. Serve chilled.</li>
                        </ol>
                        <h2>CHICKEN MOMOS</h2>
                        <picture>
                            <source media="(min-width:650px)" srcset="chicken-momos.webp">
                            <img width="300px" src="chicken-momos.webp">
                        </picture>

                        <h3>Ingredients:</h3>
                        <ul>
                            For the Dough:
                            <li><span> 120gms refined flour</span></li>
                            <li><span> 1/4 tsp baking powder</span></li>
                            <li><span> 1/2 tsp salt water (for kneading)</span></li>

                            For the Chicken Filling:
                            <li><span> 1 cup chicken (minced)</span></li>
                            <li><span>1/2 cup onions, finely chopped</span></li>
                            <li><span> 1/4 tsp black pepper powder</span></li>
                            <li><span> tbsp oil</span></li>
                            <li><span>1/2 tsp garlic paste</span></li>
                            <li><span>1/2 tsp soya sauce</span></li>
                            <li><span>Salt</span></li>
                            <li><span>1/4 tsp vinegar</span></li>
                        </ul>
                        <h2>Directions:</h2>
                        <ol>
                            Prepare Chilli Sauce:
                            <li>Cut the red chillies and soak them in water for about two hours. Cut up into small
                                pieces
                                and soak in the vinegar for one to two hours. Put all the ingredients in a mixie and
                                grind
                                to a smooth paste.</li>
                            Prepare Momos:
                            <li>In a bowl mix all the ingredients of the chicken or vegetable filling, according to your
                                choice. Keep aside.</li>
                            <li>Knead the refined flour, baking powder and salt together into firm dough. Cover and keep
                                aside for 30 minutes.</li>
                            <li>Roll the dough into very thin 4-5 inch rounds.</li>
                            <li>Take each round piece and place some filling in the center.</li>
                            <li>Bring the edges together and twist to seal it.</li>
                        </ol>



                        <!-- </div> -->


                    </div>


                </details>
                <!-- </div> -->

            </div>
            <div class="Gardening">
                <details>
                    <summary style="margin-top: 30px; width: 22rem;" class="garden-decoraction, cook-head">Gardening</summary>
                    <div class="garden-writing">
                        <p>

                        </p>
                        <h3>Some tips and tricks for gardening:</h3>
                        <picture>
                            <source media="(min-width:800px )" srcset="download (1).webp">
                            <img width="300px" src="download (1).webp">
                        </picture>

                        <ol>
                            <li>Sit it right. Starting a garden is just like real estate it's all about location.</li>
                            <li>Follow the sun.</li>
                            <li>Stay close to water.</li>
                            <li>Start with great soil.</li>
                            <li>Consider containers.</li>
                            <li>Choose the right plants.</li>
                            <li>Discover your zone.</li>
                            <li>Learn your frost dates.</li>
                        </ol>
                </details>

            </div>
            <div class="indoor-games">
                <details>
                    <summary style="margin-top: 30px; width: 22rem;" class="indoor-head, cook-head">Indoor Games</summary>
                    <p
                        style="font-size: large; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold; font-style: italic;">
                        In pandemic times, we are bored looing at our mobile screen or laptop. We should play some
                        games.
                        Since, it is not possible to play outdoor games, we should consider playing indoor games!</p>
                    <h1> Ludo</h1>
                    <picture>
                        <source media="(min-width:800px )" srcset="ludo1.webp">
                        <img width="300px" src="ludo1.webp">
                    </picture>


                    <p> you can play this game online by downloading this
                        <a style="padding: 8px; border-radius: 8px; background-color: black; color: white;"
                            href="https://play.google.com/store/apps/details?id=com.ludo.king" target="_blank">app </a>
                    </p>

                    <h2> Carrom board</h2>
                    <picture>
                        <source media="(min-width:800px )" srcset="carrom board.webp">
                        <img width="300px" src="carrom board.webp">
                    </picture>

                    <p> you can play this game online by downloading this
                        <a style="padding: 8px; border-radius: 8px; background-color: black; color: white;"
                            href="https://play.google.com/store/apps/details?id=com.miniclip.carrom" target="_blank">app
                        </a>
                    </p>

                    <h3>Chess</h3>
                    <picture>
                        <source media="(min-width:1200px )" srcset="download (2).webp">
                        <img width="300px" src="download (2).webp">
                    </picture>
                    <p> you can play this game online by downloading this
                        <a style="padding: 8px; border-radius: 8px; background-color: black; color: white;"
                            href="https://www.chess.com/" target="_blank">app </a>
                    </p>
                    <h3>Cards</h3>

                    <picture>
                        <source media="(min-width:1200px )" srcset="cards.webp">
                        <img width="300px" src="cards.webp">
                    </picture>
                    <p>You can play this game by downloading this <a
                            style="padding: 8px; border-radius: 8px; background-color: black; color: white;"
                            href="https://play.google.com/store/apps/details?id=com.betterforsol.solitaire.card.games.free"
                            target="_blank">app</a></p>
                    <h3>Uno</h3>
                    <picture>
                        <source media="(min-width:800px )" srcset="uno.webp">
                        <img width="300px" src="uno.webp">
                    </picture>
                    <p>You can play this game by downloading this <a
                            style="padding: 8px; border-radius: 8px; background-color: black; color: white;"
                            href="https://play.google.com/store/apps/details?id=com.matteljv.uno"
                            target="_blank">app</a>
                    </p>

                </details>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>

</html>