<?php include "partials/head.php";?>
<body>
    <main class="home-page">
        <?php
        include "partials/header.php";
        indexHeader(
            "home"
        );
        ?>
        <section class="landing">
            <div class="video-background">
                <div class="video-foreground">
                    <iframe src="https://www.youtube.com/embed/7C8uDuhLqvg?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1&amp;mute=1&amp;loop=1" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <h1 class="index-h1">Would you like to know what your party is</h1>
            <div class="btn-div"><a class="comp-btn" href="compare.php">Compare Parties</a></div>
        </section>
        <section class="sect-one">
            <img class="float-left img" src="img/vote.svg" alt=""/>
            <article>
                <h2 class="margin-top h2">comparing parties</h2>
                <p class="margin-top p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <div class="margin-top"><a class="btn margin-top" href="compare.php">See More</a></div>
            </article>
        </section>
        <section class="sect-two">
            <article class="float-left mid-article">
                <h2 class="margin-top h2">parties</h2>
                <p class="margin-top p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <div class="margin-top"><a class="btn" href="parties.php">See More</a></div>
            </article>
            <img class="img" src="img/politics.svg" alt=""/>
        </section>
        <section class="sect-three">
            <img class="float-left img" src="img/question.svg" alt=""/>
            <article>
                <h2 class="margin-top h2">who's my mp</h2>
                <p class="margin-top p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <div class="margin-top"><a class="btn margin-top" href="mp.php">See More</a></div>
            </article>
        </section>
    </main>
</body>
<?php include "partials/footer.php" ?>
