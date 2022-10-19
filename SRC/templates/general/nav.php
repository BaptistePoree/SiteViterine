<header class="w-screen sm:w-2/6 lg:w-3/12 xl:w-2/12 bg-main sm:min-h-screen sm:fixed">
    <nav class="flex flex-col items-center" id="navbar">
        <div class="p-4 ">
            <p class="text-center text-main-dark text-2xl font-bold">
                <?= $this->titreGeneral ?>
            </p>
        </div>

        <div class="">
            <div class=" flex items-center justify-center">
                <img class="w-24 h-24 sm:w-48 sm:h-48 object-cover rounded-full shadow-sm border-bg-white border-2" src="./img/logo/BaptistePoree.png" alt="image de Moi">
            </div>
        </div>

        <div class="w-full px-8 pt-8 pb-8">
            <ul class="flex flex-row xl:gap-4 2xl-gap-8 lg:gap-4 sm:gap-2 gap-8 justify-center">
                <?php foreach ($this->reseau as $value) :?>
                <li>
                    <a href= <?= $value["UrlWeb"] ?> >
                        <?php include($value["UrlImg"]) ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <ul class="flex flex-col lg:gap-1 xl:gap-0 gap-4">
            <?php foreach($this->navigation as $value): ?>
            <li class="uppercase text-xl xl:text-lg text-center hover:bg-white hover:rounded-lg hover:bg-opacity-25 p-4 xl:p-2 2xl:p-4 <?= $value["Action"]? "text-white": "text-main-dark"; ?>">
                <a class="text-nav-custom" href=<?= $value["UrlChemin"] ?> >
                    <?= $value["Text"] ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </nav> 
</header>
