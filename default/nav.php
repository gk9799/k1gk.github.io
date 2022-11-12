<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/PHPportfolio/css/nav.css">
    </head>

    <body>
        <!-- below code from: https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_sidenav_push_opacity -->
        <div id="defaultNav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <a href="/PHPportfolio/home.php#about"><br><br>About</a>
        <a href="/PHPportfolio/uxui.php">UX/UI Design</a>
        <a href="/PHPportfolio/webdesign.php">Web Design</a>
        </div>

        <div class="navbar">
        <span class="menu" style="font-size:40px; color:#D52427;cursor:pointer" onclick="openNav()">&#9776; </span>
        </div>
        <!--end of side nav bar-->

        <script>
        function openNav() {
        document.getElementById("defaultNav").style.width = "225px";
        document.getElementById("navbar").style.marginRight = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() {
        document.getElementById("defaultNav").style.width = "0";
        document.getElementById("navbar").style.marginRight= "0";
        document.body.style.backgroundColor = "white";
        }
        </script>

    </body>
</html>