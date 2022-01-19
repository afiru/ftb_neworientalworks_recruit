<div class="staffLoop">
    <?php 
        $args = array('cat'=>14,'posts_per_page'=>6,'order'=>'ASC','orderby'=>'menu_order');
        $query1 = new WP_Query( $args );
        if ( $query1->have_posts() ): 
    ?>
    <?php $i=1; while ( $query1->have_posts() ):$query1->the_post(); if($i%2===0){ $class='Even'; }else{$class='Odd';} ?>
        <div class="staffLoopLxc staffLoopLxc<?php echo $class; ?> staffLoopLxc_<?php echo $i; ?>">
            <div class="wapper display_flex_stretch display_row staffLoopTop staffLoopTop<?php echo $class; ?>">
                <figure class="photoStaffLoopTop photoStaffLoopTop<?php echo $class; ?>">
                    <?php
                        $pc_img = get_scf_img_url('imgStaffPc');
                        $sp_img = get_scf_img_url('imgStaffSp');
                    ?>
                    <picture>
                        <source media="(min-width: 768px)" srcset="<?php echo $pc_img[0]; ?>"><!--PC画像-->
                        <source media="(max-width: 768px)" srcset="<?php echo $sp_img[0]; ?>"><!--SP画像-->
                        <img loading="lazy" src="<?php echo $pc_img[0]; ?>" alt="<?php echo get_the_title($post->ID); ?>のサムネイル" width="<?php echo $pc_img[1]; ?>" height="<?php echo $pc_img[2]; ?>" />
                    </picture>
                </figure>
                
                <section class="secStaffLoopTop secStaffLoopTop<?php echo $class; ?>">
                    <h2 class="cl_006FDB titleSecStaffLoopTop"><?php echo nl2br(scf::get('titleStaffMain')); ?></h2>
                    <p class="txtSecStaffLoopTop"><?php echo nl2br(scf::get('txtStaffMain')); ?></p>
                </section>
            </div>
            
            <div class="wapper display_flex_stretch display_row staffBottom staffLoopBottom<?php echo $class; ?>">
                <?php foreach( scf::get('StaffLoop') as $field ): ?>
                    <div class="staffBottomBox">
                        <figure class="photoStaffBottomBox">
                            <?php $img = get_scf_img_loop_url($field['imgStaffLoop']); ?>
                            <img loading="lazy" src="<?php echo $img[0]; ?>" alt="<?php echo get_the_title($post->ID).$field['titleStaffLoop'];  ?>サムネイル" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>" />
                        </figure>
                        <h3 class="h3StaffBottomBox"><?php echo $field['titleStaffLoop']; ?></h3>
                        <p class="txtStaffBottomBox"><?php echo $field['txtStaffLoop']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>    
    <?php $i++; endwhile; wp_reset_postdata(); ?>
    <?php endif; ?>
</div>