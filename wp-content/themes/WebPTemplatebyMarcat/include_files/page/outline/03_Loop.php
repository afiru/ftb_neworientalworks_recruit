<div class="wapper outlineLoopWap">
    <section class="outlineLoop brder_006FDB">
        <?php 
            $args = array('cat'=>11,'posts_per_page'=>5,'order'=>'DESC','orderby'=>'date');
            $query1 = new WP_Query( $args );
            if ( $query1->have_posts() ): 
        ?>
        <h2 class="cl_fff t_center bg_006FDB h2OutlineLoop">正社員 募集要項</h2>
            <?php $i=1; while ( $query1->have_posts() ):$query1->the_post(); ?>
                <section class="outlineLoopPost">
                    <table class="tableOutlineLoopPost">
                        <?php foreach( scf::get('outlines') as $field ): ?>
                        <tr>
                            <th class="thOutlineLoopPost"><?php echo $field['th']; ?></th>
                            <td class="tdOutlineLoopPost"><?php echo nl2br($field['td']); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </section>
            <?php $i++; endwhile; wp_reset_postdata(); ?>
        <?php endif; ?>
        
        
    </section>
    <div class="btnToEntryWap">
        <a class="btnToEntry" href="<?php echo get_permalink(37); ?>">
            <span class="arrow btnToEntryarrow01">正社員エントリー</span>
        </a>
    </div>
    
    <section class="outlineLoop brder_FFB330">
        <?php 
            $args = array('cat'=>12,'posts_per_page'=>5,'order'=>'DESC','orderby'=>'date');
            $query1 = new WP_Query( $args );
            if ( $query1->have_posts() ): 
        ?>
        <h2 class="cl_fff t_center bg_FFB330 h2OutlineLoop">アルバイト 募集要項</h2>
            <?php $i=1; while ( $query1->have_posts() ):$query1->the_post(); ?>
                <section class="outlineLoopPost">
                    <table class="tableOutlineLoopPost">
                        <?php foreach( scf::get('outlines') as $field ): ?>
                        <tr>
                            <th class="thOutlineLoopPost"><?php echo $field['th']; ?></th>
                            <td class="tdOutlineLoopPost"><?php echo nl2br($field['td']); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </section>
            <?php $i++; endwhile; wp_reset_postdata(); ?>
        <?php endif; ?>
        
       
    </section>
    <div class="btnToEntryWap">
        <a class="btnToEntry" href="<?php echo get_permalink(37); ?>">
            <span class="arrow btnToEntryarrow02">アルバイトエントリー</span>
        </a>
    </div>
</div>