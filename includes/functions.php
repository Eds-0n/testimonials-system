<?php
require 'config.php';

function getTestimonials($page = 1, $perPage = 10)
{
    global $pdo;
    $offset = ($page - 1) * $perPage;

    $stmt = $pdo->prepare("SELECT * FROM testimonials ORDER BY created_at DESC LIMIT :limit OFFSET :offset");
    $stmt->bindValue(':limit', $perPage, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getTotalTestimonials()
{
    global $pdo;
    $stmt = $pdo->query("SELECT COUNT(*) FROM testimonials");
    return $stmt->fetchColumn();
}

function containsBadWords($text)
{
    $badWords = [
        "merda", "porra", "caralho", "foda-se", "puta", "desgraça", "cu", "arrombado", "imbecil",
        "burro", "otário", "babaca", "trouxa", "idiota", "corno", "p0rra", "c@ralho", "f*d@-s3",
        "p#ta", "d3sgraç@", "i****a", "preto imundo", "macaco", "favelado", "chinoca", "árabe sujo",
        "cigano ladrão", "judeu nojento", "viado", "bicha", "traveco", "sapatão", "aberração",
        "doente", "mulher burra", "vagabunda", "vadia", "puta barata", "cozinha e cala a boca",
        "matar", "assassinar", "torturar", "esfaquear", "explodir", "enforcar", "mutilar",
        "tráfico", "drogas", "sequestro", "estuprar", "pedofilia", "golpe", "fraude", "crime",
        "contrabando", "corrupção", "bomba", "pistola", "AK-47", "ataque", "jihad", "tiroteio",
        "ganhe dinheiro fácil", "esquema pirâmide", "oportunidade imperdível", "investimento garantido",
        "clique aqui", "bit.ly", "tinyurl", "oferta exclusiva", "dinheiro grátis", "pagamos para você clicar",
        "compre já", "promoção imperdível", "oferta única", "estoque limitado", "sexo", "pornô", "nudes",
        "peitos", "bunda", "pau", "vagina", "anal", "oral", "gangbang", "suruba", "acompanhante",
        "garota de programa", "michê", "programa barato", "me chama no zap", "vídeos quentes",
        "conteúdo +18", "ao vivo sem censura", "comunista safado", "fascista", "bolsominion",
        "esquerdopata", "direita lixo", "governo corrupto", "golpe de estado", "blasfêmia", "herege",
        "queimar no inferno", "fanático religioso", "seita maldita", "falso profeta"
    ]; // Adicione mais palavras

    foreach ($badWords as $word) {
        if (stripos($text, $word) !== false) {
            return true;
        }
    }
    return false;
}
