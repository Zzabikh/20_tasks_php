<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
<?php 

$accounts = [
         [
        "user" => "Sunny A.",
        "work" => "UI/UX Expert",
        "destiny" => "Lead Author",
        "image" => "img/demo/authors/sunny.png",
        "twitter_link" =>  "https://twitter.com/@muplaneticket",
        "twitter_username" => "@muplaneticket",
        "email" => "https://wrapbootstrap.com/user/myorange"
         ],

         [
        "user" => "Jos K.",
        "work" => "ASP.NET Developper",
        "destiny" => "Partner Contributor",
        "image" => "img/demo/authors/josh.png",
        "twitter_link" => "https://twitter.com/@atlantez",
        "twitter_username" => "@atlantez",
        "email" => "https://wrapbootstrap.com/user/myorange"        
         ],

         [
        "user" => "Jovanni L.",
        "work" => "PHP Developper",
        "destiny" => "Partner Contributor",
        "image" => "img/demo/authors/jovanni.png",
        "twitter_link" => "https://twitter.com/@lodev99",
        "twitter_username" => "@lodev99",
        "email" => "https://wrapbootstrap.com/user/myorange"
         ],

         [
        "user" => "Roberto R.",
        "work" => "Rails Developper",
        "destiny" => "Partner Contributor",
        "image" => "img/demo/authors/roberto.png",
        "twitter_link" => "https://twitter.com/@sildur",
        "twitter_username" => "@sildur",
        "email" => "https://wrapbootstrap.com/user/myorange"
         ],
         // Выше многомерный массив из которого будем выводить информацию только уже намного больше значений
];


?>
                    <div class="panel-container show">
                        <div class="panel-content">
                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">

                        <?php foreach($accounts as $account):?>
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="<?php echo $account['image']?>" alt="<?php echo $account['user']?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                       <?php echo $account['user']?><?php echo $account['work']?>
                                        <small class="m-0 fw-300">
                                            <?php echo $account['destiny']?>
                                        </small>
                                    </h5>


                                    <a href="<?php echo $account['twitter_link']?>" class="text-info fs-sm" target="_blank">
                                    <?php echo $account['twitter_username']?></a> 

                                    -
                                    <a href="<?php echo $account['email']?>" class="text-info fs-sm" target="_blank" title="Contact Sunny">
                                    <i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                        <?php endforeach;?>
     <!-- Используя цикл foreach, мы вывели всю информцию из многомерного массива в один экземпляр аккаунта твиттера. Выводя из этого массива нужное нам значение. Скажем для ника "user", для аватарки "image", для професии "work" и т д-->
                        
                        <!--
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="img/demo/authors/josh.png" alt="Jos K." class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        Jos K. (ASP.NET Developer)
                                        <small class="m-0 fw-300">
                                            Partner &amp; Contributor
                                        </small>
                                    </h5>
                                    <a href="https://twitter.com/@atlantez" class="text-info fs-sm" target="_blank">@atlantez</a> -
                                    <a href="https://wrapbootstrap.com/user/Walapa" class="text-info fs-sm" target="_blank" title="Contact Jos"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="img/demo/authors/jovanni.png" alt="Jovanni Lo" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        Jovanni L. (PHP Developer)
                                        <small class="m-0 fw-300">
                                            Partner &amp; Contributor
                                        </small>
                                    </h5>
                                    <a href="https://twitter.com/@lodev09" class="text-info fs-sm" target="_blank">@lodev09</a> -
                                    <a href="https://wrapbootstrap.com/user/lodev09" class="text-info fs-sm" target="_blank" title="Contact Jovanni"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="img/demo/authors/roberto.png" alt="Jovanni Lo" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        Roberto R. (Rails Developer)
                                        <small class="m-0 fw-300">
                                            Partner &amp; Contributor
                                        </small>
                                    </h5>
                                    <a href="https://twitter.com/@sildur" class="text-info fs-sm" target="_blank">@sildur</a> -
                                    <a href="https://wrapbootstrap.com/user/sildur" class="text-info fs-sm" target="_blank" title="Contact Roberto"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    !-->

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
