<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AI Nepnieuws Info</title>
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">
</head>
<body>
<?php get_header(); ?>

  <div class="hero">
    <div class="hero-card">
      <h1>Over AI Nepnieuws</h1>
      <p>Een informatiebron over kunstmatige intelligentie en desinformatie. Leer hoe AI wordt gebruikt om nepnieuws te creëren en hoe je het kunt herkennen.</p>
      <a href="artikelen.php" class="btn-primary">Bekijk Artikelen</a>
    </div>
  </div>

  <div class="section">
    <div class="cards-grid">
      <div class="info-card">
        <h3>Wat is AI Nepnieuws?</h3>
        <p>AI-gegenereerde desinformatie gebruikt machine learning om overtuigende maar valse content te creëren. Van deepfake video's tot nep-artikelen: de mogelijkheden groeien elke dag.</p>
      </div>
      <div class="info-card">
        <h3>Herkenning</h3>
        <p>Leer signalen en patronen te herkennen die wijzen op AI-gegenereerde content. Ontdek hoe je verdachte berichten kunt identificeren voordat je ze deelt.</p>
      </div>
      <div class="info-card">
        <h3>Bescherming</h3>
        <p>Praktische tips en tools om jezelf en anderen te beschermen tegen desinformatie. Van verificatie-strategieën tot betrouwbare broncheck.</p>
      </div>
    </div>

    <div class="tiles-grid">
      <a href="artikelen.php" class="tile">
        <span class="tile-label">Deepfakes</span>
      </a>
      <a href="artikelen.html" class="tile">
        <span class="tile-label">AI Teksten</span>
      </a>
      <a href="artikelen.html" class="tile">
        <span class="tile-label">Sociale Media</span>
      </a>
      <a href="artikelen.html" class="tile">
        <span class="tile-label">Detectie</span>
      </a>
    </div>
  </div>

<?php get_footer(); ?>

</body>
</html>