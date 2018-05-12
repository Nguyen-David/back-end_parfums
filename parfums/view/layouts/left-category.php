<!--        Меню слева       -->
<div class="sidebar">
    <div class="head-catalog ">
        <h4>Каталог</h4>
    </div>
    <div class="sidebar-menu">
        <ul class="category">
            <?php foreach ($categories_data as $categoryItem):
                if($categoryItem['sub_categories'] == 1 || $categoryItem['sub_categories']  == 2){?>
                    <li class="sidebar-category ">
                        <div class="pos-f-t">

                            <div class="navbar-toggler spirit" data-toggle="collapse" data-target="#navbarToggleExternalContent<?=$categoryItem['sub_categories'];?>" aria-controls="navbarToggleExternalContent<?=$categoryItem['sub_categories'];?>" aria-expanded="false" aria-label="Toggle navigation">
                                <a href="/category/<?= $categoryItem['id']?>" class="<?php if($categoryId == $categoryItem['id'] || $categoryItem['id'] ==  substr("$subcategoryCode",0,-1)) echo 'is_active ';?>"><?= $categoryItem['name'];?></a>
                                <div class="text-right down <?php if($categoryId == $categoryItem['id'] || $categoryItem['id'] ==  substr("$subcategoryCode",0,-1)) echo 'is_active ';?>"><i class="fa fa-sort-desc " aria-hidden="true"></i></div>
                            </div>
                            <div class="collapse <?php if($categoryId == $categoryItem['id'] || $categoryItem['id'] ==  substr("$subcategoryCode",0,-1)) echo 'show';?>" id="navbarToggleExternalContent<?=$categoryItem['sub_categories'];?>">
                                <ul class="category">
                                    <?php  foreach ($sub_categories_data as $sub_categoryItem):
                                        if($sub_categoryItem['group_sub_categories'] == 1  && $categoryItem['sub_categories'] == 1){?>

                                            <li class="sidebar-category2 "><a href="/subcategory/<?= $sub_categoryItem['code']?>" class="<?php if($subcategoryCode == $sub_categoryItem['code']) echo 'is_active ';?>"><?= $sub_categoryItem['name']?></a></li>

                                        <?php } if ($sub_categoryItem['group_sub_categories'] == 2 && $categoryItem['sub_categories']  == 2) {?>
                                        <li class="sidebar-category2"><a href="/subcategory/<?= $sub_categoryItem['code']?>" class="<?php if($subcategoryCode == $sub_categoryItem['code']) echo 'is_active ';?>"><?= $sub_categoryItem['name']?></a></li>
                                    <?php } endforeach;?>

                                </ul>
                            </div>

                        </div>
                    </li>

                <?php } if ($categoryItem['sub_categories'] == 0) {?>
                <li class="sidebar-category3">
                    <a href="/category/<?= $categoryItem['id']?>" class="<?php if($categoryId == $categoryItem['id']) echo 'is_active';?>"><?= $categoryItem['name'];?></a>
                </li>
            <?php }endforeach;?>
        </ul>
    </div>
</div>

