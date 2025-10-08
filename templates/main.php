
    <section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">

            <!--заполните этот список из массива категорий-->

            <?php foreach ($categories as $item): ?>
            <li class="promo__item promo__item--boards">

                <a class="promo__link" href="pages/all-lots.html"><?php echo htmlspecialchars($item)?></a>

            </li>
            <?php endforeach; ?>

            <!--конец списка из массива категорий-->


            <li class="promo__item promo__item--boards">
                <a class="promo__link" href="pages/all-lots.html">Имя категории</a>

            </li>
        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
        <ul class="lots__list">

            <!--заполните этот список из массива с товарами-->

            <?php foreach ($lots as $lot): ?>
            <li class="lots__item lot">
                <div class="lot__image">

                    <!-- вывод имени лота -->
                                    
                    <img src="<?php echo htmlspecialchars($lot['image_url']) ?>" width="350" height="260" alt="<?= htmlspecialchars($lot['name']) ?>">
                </div>
                <div class="lot__info">

                    
                    <span class="lot__category"><?php echo htmlspecialchars($lot['category']) ?></span>
                    <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?php echo htmlspecialchars($lot['name']) ?></a></h3>

                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>

                            <!-- вызов функции форматирования цены лота, вывод цены лота -->

                            <span class="lot__cost"><?php echo formatThePrice($lot['price'])?></span>
                        </div>
                        <!--<div class="lot__timer timer">
                            
                            12:00-- вызов функции отсчёта обратного времени-->
                        <?php $time = getTimeSpan($lot['endDate']); ?>
                        <div class="lot__timer timer
                        <?php if ($time[0] < 1): ?> timer--finishing<?php endif; ?>">
                            <?php echo str_pad($time[0], 2, '0', STR_PAD_LEFT) . ' ч. : ' . str_pad($time[1], 2, '0', STR_PAD_LEFT) . ' мин.'?>

                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach ?>
        </ul>

        <!--конец списка из массива с товарами-->

    </section>