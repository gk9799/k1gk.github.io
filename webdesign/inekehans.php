<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>k1gk&#9836; Portfolio</title>
        <link rel="stylesheet" href="/PHPportfolio/css/normalize.css">
        <link rel="stylesheet" href="/PHPportfolio/css/main.css">
    </head>

    <body>
        <!-- header -->
        <?php
        require('../default/nav.php');
        require('../default/header.php');
        ?>
        <!-- header end -->

        <!-- project title -->
        <div ="pName">
        <a href="/PHPportfolio/webdesign.php"><h2 class="category">Web Design</h2></a>
            <h2>Designer Microsite - Ineke Hans</h2>
        </div>

        <div class= "img">
            <img class="pimg" src="/PHPportfolio/img/IH1.png" alt="The Project Description Page of the Designer Microsite" width=80% oncontextmenu="return false;">
        </div>

        <!-- project summary -->
        <div class="summary">

            <div class="summary_obj">
                <h3>Role</h3>
                <p>Web Designer</p>
            </div>

            <div class="summary_obj">
                <h3>Timeline</h3>
                <p>March 2021 - April 2021 (4 weeks)</p>
            </div>

            <div class="summary_obj">
                <h3>Tool(s)</h3>
                <p>HTML&CSS, Adobe InDesign</p>
            </div>

            <!-- horizontal line for division -->
            <hr>

        </div>

        <!-- project details -->
        <div class="content">
            <h3>Overview</h3>
                <p>
                Ineke Hans is a Dutch industrial designer and one of the Netherlands' leading designers. As the final project for the Information Design course, I created a micro-website about Ineke Hans to introduce her as a hypothetical guest speaker for DesignTalk from Salone del Mobile design festival.​​​​​​​</p>

                <!-- content in sections -->
                <div class="content_obj">
                    <h4>Process</h4>
                    <p>
                    I started to build a micro-website by creating a blueprint and a mockup. Creating those files allowed me to ideate the website's visual design effectively and structurally. For example, I could see how many pages were necessary and what colours fit the best at a glance. Then I started to write codes using HTML and CSS for the website's contents and visuals to look as I intended. 
                    </p>
                </div>

                <div class= "img_grid_row">

                    <div class= "img_grid_column">

                        <img class="pimg" src="/PHPportfolio/img/IH2-1.png" alt="The Style Guide of the Designer Microsite" width=45% oncontextmenu="return false;">

                        <img class="pimg" src="/PHPportfolio/img/IH2-2.png" alt="The Wireframe of the Designer Microsite" width=45% oncontextmenu="return false;">

                    </div>

                </div>

                <div class="content_obj">
                    <h4>Challenge</h4>
                    <p>
                    One of the challenges I faced is that this website is desktop-friendly only (only for desktops with a width of 1440px) but is not responsive for other screens. As Ineke Hans micro-site is the first project I used HTML and CSS, I lacked the understanding of the tools I used. However, I learned more about the tools later and practiced how to make a responsive website with the <a href="webdesign/saje.php">Saje Redesign Project (2022)</a>. This project of creating a website about a designer inspired me for the first time to aspire to become a designer who designs user-friendly products.
                    ​​​​</p>
                </div>

                <div class= "img">
                    <img class="pimg" src="/PHPportfolio/img/IH3.gif" alt="The About Page of the Designer Microsite" width=80% oncontextmenu="return false;">
                </div>

        </div>

        <?php
        require('../default/footer.php');
        ?>

    </body>
</html>