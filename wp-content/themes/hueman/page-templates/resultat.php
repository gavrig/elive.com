<?php
/*
  Template Name: Resultat
 */
?>
<?php get_header(); ?>
<section class="content">
    <?php get_template_part('inc/page-title'); ?>

    <div class="pad group">

        <?php while (have_posts()): the_post(); ?>

            <article <?php post_class('group'); ?>>

                <?php get_template_part('inc/page-image'); ?>

                <div class="entry themeform">
                    <?php the_content(); ?>
                    <div id="result-wrapper">
                        <?php
                        // Dump contents (without tags) from HTML
                        $html = file_get_html('http://www.footendirect.com/international/euro/?page=resultats');

                        // Find all article blocks
                        foreach ($html->find('tr.event') as $article)
                        {
                            $item['time'] = $article->find('td.event-time', 0)->plaintext;
                            $item['status'] = $article->find('td.event-status', 0)->plaintext;
                            $item['home-team'] = $article->find('td.event-home-team', 0)->plaintext;
                            $item['runningscore'] = $article->find('td.event-score-runningscore', 0)->plaintext;
                            $item['away-team'] = $article->find('td.event-away-team', 0)->plaintext;
                            $articles[] = $item;

                            echo '<a class="result" href="' . clean($item['home-team']) . '-' . clean($item['away-team']) . '">'
                            . '<span class="time">' . $item['time'] . '</span>'
                            . '<span class="team ' . clean($item['home-team']) . '">' . clean($item['home-team']) . '</span>'
                            . '<span class="runningscore">' . $item['runningscore'] . '</span>'
                            . '<span class="team ' . clean($item['away-team']) . '">' . clean($item['away-team']) . '</span>'
                            . '<span class="status">(' . $item['status'] . ')</span>'
                            . '</a>';
                        }

                        //print_r($articles);
                        ?>

                    </div>
                    <div class="clear"></div>
                </div><!--/.entry-->

            </article>

            <?php
            if (ot_get_option('page-comments') == 'on')
            {
                comments_template('/comments.php', true);
            }
            ?>

        <?php endwhile; ?>

    </div><!--/.pad-->

</section><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>