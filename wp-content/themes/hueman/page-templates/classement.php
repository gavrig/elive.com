<?php
/*
  Template Name: Classement
 */
?>
<?php get_header(); ?>
<section class="content">
    <?php
    get_template_part('inc/page-title');
//    error_reporting(E_ALL);
//    ini_set('display_errors', '1');
    ?>

    <div class="pad group">

        <?php while (have_posts()): the_post(); ?>

            <article <?php post_class('group'); ?>>

                <?php get_template_part('inc/page-image'); ?>

                <div class="entry themeform">

                    <?php the_content(); ?>
                    <div id="classement-wrapper">
                        <?php
                        // Dump contents (without tags) from HTML
                        $html = file_get_html('http://www.footendirect.com/international/euro/classement.html');

                        // Find all article blocks
                        foreach ($html->find('table.base-listing') as $article)
                        {
                            $item['head'] = $article->find('th.cell-league .stage-name', 0)->plaintext;

                            $item['participant-rank'] = $article->find('thead.legends th.participant-rank', 0)->plaintext;
                            $item['participant-name'] = $article->find('thead.legends th.participant-name', 0)->plaintext;
                            $item['points'] = $article->find('thead.legends th.standing-data', 0)->plaintext;
                            $item['joues'] = $article->find('thead.legends th.standing-data', 0)->plaintext;
                            $item['gagnes'] = $article->find('thead.legends th.standing-data', 0)->plaintext;
                            $item['nuls'] = $article->find('thead.legends th.standing-data', 0)->plaintext;
                            $item['perdus'] = $article->find('thead.legends th.standing-data', 0)->plaintext;
                            $item['marques'] = $article->find('thead.legends th.standing-data', 0)->plaintext;
                            $item['encaisses'] = $article->find('thead.legends th.standing-data', 0)->plaintext;
                            $item['difference'] = $article->find('thead.legends th.standing-data', 0)->plaintext;
                            $articles[] = $item;
                            echo '<table class="classement">'
                            . '<tr><th colspan="10" class = "">' . clean($item['head']) . '</th></tr>'
                            . '<tr class="head-row">'
                            . '<th class = "">' . $item['participant-rank'] . '</th>'
                            . '<th class = "">Équipe</th>'
                            . '<th class = "">' . $item['points'] . '</th>'
                            . '<th class = "">J</th>'
                            . '<th class = "">G</th>'
                            . '<th class = "">N</th>'
                            . '<th class = "">P</th>'
                            . '<th class = "">+</th>'
                            . '<th class = "">-</th>'
                            . '<th class = "">+/-</th>'
                            . '</tr>';
                            foreach ($article->find('tr.participant') as $participant)
                            {
                                $part['rank'] = $participant->find('td.participant-rank', 0)->plaintext;
                                $part['name'] = $participant->find('td.participant-name', 0)->plaintext;
                                $part['points'] = $participant->find('td.standing-data-points', 0)->plaintext;
                                $part['played'] = $participant->find('td.standing-data-played', 0)->plaintext;
                                $part['wins'] = $participant->find('td.standing-data-wins', 0)->plaintext;
                                $part['draws'] = $participant->find('td.standing-data-draws', 0)->plaintext;
                                $part['defeits'] = $participant->find('td.standing-data-defeits', 0)->plaintext;
                                $part['goalfor'] = $participant->find('td.standing-data-goalsfor', 0)->plaintext;
                                $part['goalsagainst'] = $participant->find('td.standing-data-goalsagainst', 0)->plaintext;
                                $part['goalsdiff'] = $participant->find('td.standing-data-goalsdiff', 0)->plaintext;

                                $participants[] = $part;
                                echo '<tr class="row-equipe">'
                                . '<td class = "">' . $part['rank'] . '</td>'
                                . '<td class = ""><a href="/' . $part['name'] . '">' . $part['name'] . '</a></td>'
                                . '<td class = " ">' . $part['points'] . '</td>'
                                . '<td class ="">' . $part['played'] . '</td>'
                                . '<td class = "">' . $part['wins'] . '</td>'
                                . '<td class = "">' . $part['draws'] . '</td>'
                                . '<td class = "">(' . $part['defeits'] . ')</td>'
                                . '<td class = "">(' . $part['goalfor'] . ')</td>'
                                . '<td class = "">(' . $part['goalsagainst'] . ')</td>'
                                . '<td class = "">(' . $part['goalsdiff'] . ')</td>'
                                . '</tr>';
                            }
                        }
                        echo '</table>';
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