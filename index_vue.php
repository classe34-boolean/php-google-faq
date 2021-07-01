<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <title>Google Faq</title>
</head>
<body>
    
    <?php include __DIR__ . '/partials/header.php'; ?>

    <section id="app">
        <div class="question-container">
            <div class="question" v-for="faq in faqs">
                <h2>{{ faq.question }}</h2>
                <div v-html="faq.answer"></div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/partials/footer.php'; ?>

    <script src="js/script.js"></script>

</body>
</html>
