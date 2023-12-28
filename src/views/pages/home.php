<?=$render('header', ['loggedUser'=>$loggedUser]);?>
<section class="container main">
    <?=$render('sidebar');?>
    <section class="feed mt-10">
        <div class="row">
            <div class="column pr-5">

                <?=$render('feed-editor', ['user'=>$loggedUser]);?>

                <?=$render('feed-item');?>

            </div>
            <div class="column side pl-5">
                <div class="box banners">
                    <div class="box-header">
                        <div class="box-header-text">Patrocinios</div>
                        <div class="box-header-buttons">

                        </div>
                    </div>
                    <div class="box-body">
                        <a href=""><img src="https://kinsta.com/wp-content/uploads/2023/02/Untitled-21.png" /></a>
                        <a href=""><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png" /></a>
                    </div>
                </div>
                <div class="box">
                    <div class="box-body m-10">
                        Criado por Eduardo Araujo
                    </div>
                </div>
            </div>
        </div>

    </section>
</section>
<?=$render('footer');?>