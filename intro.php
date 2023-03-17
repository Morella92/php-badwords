<h2>Paragrafo originale</h2>

<?php 
    $paragraph = $_GET['paragraph'];
    var_dump($paragraph);

    $censored = $_GET['censored'];
    var_dump($censored);
?>

<p>
    <?php echo $paragraph ?>
</p>
<p>
    Lunghezza: <?php echo strlen($paragraph); ?>
</p>

<h2>Paragrafo censurato</h2>

<p>
    <?php echo str_replace($censored, '***', $paragraph); ?>
</p>
<p>
    Lunghezza: <?php echo strlen(str_replace($censored, '***', $paragraph)); ?>
</p>