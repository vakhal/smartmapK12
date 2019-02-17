<?php
    $levels=[];
    $menu=[];
    $menu[]=['name'=>'Объект ','id'=>1];
    $menu[]=['name'=>'Объект ','id'=>2];
    $menu[]=['name'=>'Объект ','id'=>3];
    $levels[]=['level'=>1,'name'=>'Первый','menu'=>$menu];
    $levels[]=['level'=>2,'name'=>'Второй','menu'=>$menu];
    $levels[]=['level'=>3,'name'=>'Третий','menu'=>$menu];

?>
<aside class="spaces-list" id="spaces-list">
    <div class="search">
        <input class="search__input" placeholder="Поиск..." />
        <button class="boxbutton boxbutton--darker close-search" aria-label="Close details"><svg class="icon icon--cross"><use xlink:href="#icon-cross"></use></svg></button>
    </div>

    <ul class="levels__menu">
        <?foreach ($levels as $level):?>
            <li class="levels__menu_item" data-level="<?=$level['level']?>">
                <span><?=$level['name']?></span>
                <?if($level['menu']):?>
                    <ul class="dropdawn">
                        <?foreach ($level['menu'] as $item):?>
                            <li class="dropdawn__item" data-id="<?=$item['id']?>"><?=$item['name']?></li>
                        <?endforeach?>
                    </ul>
                <?endif?>
            </li>
        <?endforeach;?>
    </ul>
</aside>
