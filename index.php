<?php 
/*
    Riscrivere questa pagina del sito google
    https://policies.google.com/faq.
    Ci sono diverse domande con relative risposte.
    Gestire il "Database" e la visualizzazione di queste domande e risposte con PHP.
*/

    require __DIR__ . '/db/database.php';

    // var_dump($faqs);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Google Faq</title>
</head>
<body>
    
    <?php include __DIR__ . '/partials/header.php'; ?>

    <section>
        <div class="question-container">
            <?php foreach($faqs as $faq) { ?>
                <div class="question">
                    <h2><?= $faq["question"]; ?></h2>
                    <div><?= $faq["answer"]; ?></div>
                </div>    
            <?php } ?>
        </div>
    </section>

    <?php include __DIR__ . '/partials/footer.php'; ?>

</body>
</html>
