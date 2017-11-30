<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 27/11/2017
 * Time: 16:20
 */

?>

<section class="container list">
    <?php for($i = 0; $i < 9; $i++) { ?>
        <article>
            <a href="/blog/show.php"><img src="../assets/img/téléchargement.jpeg"></a>
            <a href="/blog/show.php"><h2>Voyage à la mer</h2></a>
            <p>Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
            <a href="/blog/show.php">Lire la suite</a>
        </article>
    <?php } ?>

    <div class="pagination">
        <a href="#" class="prev">Prev</a>
        <?php for($i = 1; $i < 5; $i++) { ?>
            <a href="#" class="paginationNumber"><?php echo $i; ?></a>
        <?php } ?>
        <a href="#" class="next">Next</a>
    </div>
</section>