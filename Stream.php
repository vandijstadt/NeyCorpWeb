<!DOCTYPE html>
<html lang="fr">
    <head>
        <!--En-tête de notre site web-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Site Vitrine de la NeyCorp</title>
    </head>
    <body>
        <header> <!-- MENU -->
            <?php include("menu.php"); ?>
        </header>
        <section> <!-- Page -->
            <h1>Stream NeyCorp</h1>
            
            <!-- https://dev.twitch.tv/docs/embed -->
            <!-- Add a placeholder for the Twitch embed -->
            <div id="twitch-embed"></div>

            <!-- Load the Twitch embed JavaScript file -->
            <script src="https://embed.twitch.tv/embed/v1.js"></script>

            <!-- Create a Twitch.Embed object that will render within the "twitch-embed" element -->
            <script type="text/javascript">
            new Twitch.Embed("twitch-embed", {
                width: 100%,
                height: 480,
                allowfullscreen : true,
                muted : true,
                theme : dark,
                channel: "neycorp",
            });
            </script>

        </section>
    </body>
</html>