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
                    <iframe src="https://www.youtube.com/embed/7C8uDuhLqvg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

            <a href=""></a>
            <h1>Would you like to know what your party is</h1>
            <a href="compare.php">Compare Parties</a>

        </section>
        <section class="sect-one">
            <img src="img/vote.svg" alt=""/>
            <article>
                <h2>comparing parties</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <a class="btn" href="compare.php">See More</a>
            </article>
        </section>
        <section class="sect-two">
            <article>
                <h2>parties</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <a class="btn" href="parties.php">See More</a>
            </article>
            <img src="img/politics.svg" alt=""/>
        </section>
        <section class="sect-three">
            <img src="img/question.svg" alt=""/>
            <article>
                <h2>who's my mp</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <a class="btn" href="mp.php">See More</a>
            </article>
        </section>
    </main>
</body>
<?php include "partials/footer.php" ?>
