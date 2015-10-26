<?php global $base_path; ?>
<div class="product-list">
<div class="row">
<?php //var_dump($element); ?>  
    <?php if ($element): ?>
        <?php foreach ($element as $photo): ?>
            <?php
            // var_dump($photo);die;
            $file = file_load($photo->fid);
            $image = image_load($file->uri);
            $image_content = array(
                'file' => array(
                    '#theme' => 'image_style',
                    '#style_name' => 'large',
                    '#path' => $image->source,
                    '#width' => $image->info['width'],
                    '#height' => $image->info['height'],
                ),
            );
            // $city_obj = taxonomy_term_load($photo->city);
            $location_obj = taxonomy_term_load($photo->location);

            $pg_obj = node_load($photo->pgrapher);
            ?>
            
                <div class="col-sm-6 col-md-4">

                    <div class="thumbnail">
                        <figure>
                            <?php print '<a href="' . $base_path . 'node/' . $photo->nid . '">' . drupal_render($image_content) . '</a>'; ?>
                        </figure>
                        <div class="caption">
                            <h3><?php print l($photo->title, 'node/'.$photo->nid); ?></h3>
                            <!-- <p><?php //print l($city_obj->name, 'city/'.$photo->city); ?></p> -->
                            <!-- <p><?php print l($location_obj->name, 'location/'.$photo->location); ?></p> -->
                            <p><?php print $photo->locations; ?></p>
                            <p><?php print 'by ' . l($pg_obj->title, 'photographer/'.$photo->pgrapher); ?></p>
                        </div>
                    </div>
                    
                </div>
            
        <?php endforeach ?>
    <?php endif; ?>
</div>
</div>
<?php print theme('pager', array('tags' => array('', 'Prev', NULL, 'Next', ''))); ?>
