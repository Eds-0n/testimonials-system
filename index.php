<?php include 'includes/functions.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Testemunhos</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/extra.css">
</head>

<body>
    <section class="banner">
        <div class="container">
            <div class="banner-content">
                <h1>Deixe seu Feedback</h1>
                <p>Compartilhe sua experiência conosco e ajude-nos a melhorar!</p>
                <button id="openModal" class="btn">Escrever Testemunho</button>
            </div>
            <div class="banner-image">
                <img src="assets/img/feedback-banner.png" alt="Feedback Illustration">
            </div>
        </div>
    </section>

    <div class="modal-overlay">
        <!-- <div class="modal-content">
            <form id="feedbackForm">
                <h2>Deixe seu Feedback</h2>

                <input type="text" id="name" placeholder="Seu nome" required>
                <input type="text" id="company" placeholder="Empresa (opcional)">
                <input type="email" id="email" placeholder="Seu e-mail" required>
                <textarea id="message" placeholder="Sua mensagem" rows="4" required></textarea>

                <div class="rating-stars">
                    <?php for ($i = 1; $i <= 5; $i++): ?>
                        <span class="star">★</span>
                    <?php endfor; ?>
                </div>

                <button type="submit" class="btn">Enviar Feedback</button>
            </form>
        </div> -->

        <!-- ... (código anterior mantido) ... -->
        <div class="modal-content">
            <form id="feedbackForm">
                <h2>Deixe seu Feedback</h2>

                <div class="input-group">
                    <input type="text" id="name" placeholder=" " required>
                    <label for="name">Nome completo *</label>
                    <div class="error-message">Campo obrigatório</div>
                </div>

                <div class="input-group">
                    <input type="text" id="company" placeholder=" ">
                    <label for="company">Empresa</label>
                </div>

                <div class="input-group">
                    <input type="email" id="email" placeholder=" " required>
                    <label for="email">E-mail *</label>
                    <div class="error-message">E-mail inválido</div>
                </div>

                <div class="input-group">
                    <textarea id="message" placeholder=" " rows="4" required></textarea>
                    <label for="message">Mensagem *</label>
                    <div class="error-message">Mensagem muito curta</div>
                </div>

                <div class="rating-stars">
                    <?php for ($i = 1; $i <= 5; $i++): ?>
                        <span class="star">★</span>
                    <?php endfor; ?>
                </div>

                <button type="submit" class="btn">Enviar Feedback</button>
            </form>
        </div>
        <!-- ... (restante do código mantido) ... -->

    </div>

    <section class="testimonials-grid"></section>
    <div class="pagination"></div>

    <script src="assets/js/script.js"></script>
</body>

</html>