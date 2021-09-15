<style>
    @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,300&display=swap');

    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    .header-paralax {
        background-image: url('');
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        position: fixed;
        height: 600px;
    }

    .header-paralax h1 {
        text-align: center;
        color: #fff;
        text-shadow: 2px 3px 1px #111111;
        font-family: 'Ubuntu', sans-serif;
        font-weight: 900;
        letter-spacing: 0.12em;
        font-size: 6em;
        color: #ccac00;
    }

    .header-paralax h2 {
        text-align: center;
        color: #fff;
        text-shadow: 2px 3px 1px #111111;
        font-family: 'Ubuntu', sans-serif;
        font-weight: 900;
        letter-spacing: 0.16em;
        font-size: 6em;
        padding: 210px 0;
    }

    main {
        background: #f5f5f5;
        position: relative;
        top: 600px;
        font-family: 'Raleway', sans-serif;
        color: #111111;
    }

    .container {
        padding: 0 2% 5%;
    }

    .container p {
        padding: 10px 50px 20px;
        font-size: 1em;
        line-height: normal;
        color: #212121;
    }
</style>
<header class="header-paralax">
    <h1 class>SCOUTING
        <image src="assets/logo/SCOUTING.png">
    </h1>
</header>
<main>
    <!-- <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="liens-pages">
                    <a href="?register.php" class="btn btn-light">
                        <i class="fa fa-user-plus fa-5x"></i><br>
                        <p>S'enregistrer</p>
                    </a>
                    <a href="?login.php" class="btn btn-light">
                        <i class="fa fa-users fa-5x"></i><br />
                        <p>S'identiifer</p>
                    </a>
                </div>
            </div>
        </div>
    </div> -->
    <?php
    include 'footer.php';
    ?>