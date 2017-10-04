<?php include "partials/head.php";?>
<body>
    <div id='main'>
    <main class="home-page">
        <?php
        include "partials/header.php";
        indexHeader("home");
        ?>
        <article class='videoContainer'>
            <div class="video-background">
                <!-- <div class="video-foreground">
                    <iframe id="iframe" src="" frameborder="0" allowfullscreen></iframe>
                </div> -->
                <video id='partyVideo' autoplay loop></video>   
        
            </div>
            <h1 class="index-h1">Canada needs your vote!</h1>
            <div class="btn-div"><a class="comp-btn" href="compare.php">Find Your Party</a></div>
        </article>
        <!-- </section> -->


        <div class='homeContainer'>
        <section class="sect-one">

            <img class="img" src="img/scale.svg" alt=""/>
            <article>
                <h2 class="margin-top h2">compare parties</h2>
                <p class="p">View the main policies of each party. You can Compare policies of parties you are interested in. Our quiz is designed to help you decide which party you should vote for based on your personal opinions. </p>
                <div class="margin-top"><a class="btn margin-top" href="compare.php">Compare Parties</a></div>
            </article>
        </section>
        <section class="sect-two">
            <article class="float-left mid-article">
                <h2 class="h2">parties</h2>
                <p class="p">A detailed page of each parties plans for the future of Canada.   </p>
                <div class="margin-top"><a class="btn" href="parties.php">View Parties</a></div>
            </article>
            <img class="img" src="img/parties.svg" alt=""/>
        </section>
        <section class="sect-three">
            <img class="img" src="img/canada.svg" alt="An image of canada"/>
            <article>
                <h2 class="margin-top h2">who's my mp</h2>
                <p class="margin-top p">Interested to see which Members of Parliament are in charge of your area? Click here to find out. </p>
                <div class="margin-top"><a class="btn margin-top" href="mp.php">View My MP's</a></div>
            </article>
        </section>
    </div>
    </main>
</div>
</body>
<?php include "partials/footer.php" ?>
