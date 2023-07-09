<div class="mobile_catalog_menu">
    <div class="mobMenuWrappe">
        <div class ="cat_navigation">
            <ul>
                <?php 
                    $args = array(
                            'child_of' => 247,
                            'depth' => 2,
                            'title_li' => ""
        
                    );
                    wp_list_categories($args);
                ?>
            </ul>
        </div>
    </div>
</div>