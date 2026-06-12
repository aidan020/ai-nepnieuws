<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vergelijking - AI Nepnieuws Info</title>
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">
</head>
<body>

<?php get_header(); ?>

  <div class="page-header">
    <h1>Echt vs. AI Gegenereerd</h1>
    <p>Leer het verschil te zien tussen echt nieuws en AI-gecreëerde desinformatie.</p>
  </div>

  <div class="section">
    <div class="cards-grid" style="grid-template-columns: 1fr;">
      <div class="info-card">
        <p>Op deze pagina zie je 4 voorbeelden van nieuws dat door AI is aangepast of volledig is gegenereerd. Let op de verschillen in taalgebruik, bronnen, datums en logica.</p>
      </div>
    </div>
  </div>

  <!-- EXAMPLE 1 -->
  <div class="section">
    <div class="section-title">Voorbeeld 1 — Politiek Nieuws</div>
    
    <div class="tiles-grid" style="grid-template-columns: repeat(2, 1fr);">
      <div class="info-card" style="border-left: 3px solid var(--red);">
        <div class="card-number">AI Gegenereerd</div>
        <div style="margin-bottom: 12px; font-size: 0.75rem; color: var(--muted);">
          "Politiek Dagblad" | 15 april 2026
        </div>
        <h3>EU-Stemming: Nederland stemt voor algehele pandemiewet</h3>
        <p>Het Nederlandse parliament heeft gisteren unaniem gestemd voor een nieuwe pandemiewet die alle burgerrechten tijdens noodsituaties volledig opschort. Minister van Volksgezondheid Janssen noemde dit "een historische dag voor de volksgezondheid."</p>
        <div style="margin-top: 16px; padding-top: 12px; border-top: 1px solid var(--border); font-size: 0.75rem; color: var(--red);">
          — Geen bronverwijzing<br>
          — Extreme bewering zonder nuancering
        </div>
      </div>

      <div class="info-card" style="border-left: 3px solid #27ae60;">
        <div class="card-number" style="color: #27ae60;">Echt Nieuws</div>
        <div style="margin-bottom: 12px; font-size: 0.75rem; color: var(--muted);">
          NOS / ANP | 15 april 2026
        </div>
        <h3>Tweede Kamer debatteert over pandemiewetgeving</h3>
        <p>De Tweede Kamer debatteert vandaag over nieuwe wetgeving rond pandemiemaatregelen. De wet is nog in behandeling en er zijn geen plannen om burgerrechten op te schorten. Verschillende partijen hebben amendementen ingediend.</p>
        <div style="margin-top: 16px; padding-top: 12px; border-top: 1px solid var(--border); font-size: 0.75rem; color: #27ae60;">
          — Concrete bron (NOS/ANP)<br>
          — Specifiek detail
        </div>
      </div>
    </div>

    <div class="info-card" style="background: var(--bg);">
      <h4 style="font-family: 'Syne', sans-serif; font-size: 0.85rem; margin-bottom: 8px; color: var(--dark);">Analyse</h4>
      <p style="font-size: 0.85rem;">Het AI-nieuws gebruikt extreme woorden als "unaniem" en "volledig opschort" zonder bronverwijzing. Het echte nieuws is genuanceerd, noemt specifieke bronnen en vermeldt dat het een debat betreft, niet een definitieve stem.</p>
    </div>
  </div>

  <!-- EXAMPLE 2 -->
  <div class="section">
    <div class="section-title">Voorbeeld 2 — Deepfake Video</div>
    
    <div class="tiles-grid" style="grid-template-columns: repeat(2, 1fr);">
      <div class="info-card" style="border-left: 3px solid var(--red);">
        <div class="card-number">AI Gegenereerd</div>
        <div style="margin-bottom: 12px; font-size: 0.75rem; color: var(--muted);">
          "Tech Watch" | 18 april 2026
        </div>
        <h3>CEO van TechGiant geeft toe aan illegale praktijken in nieuwe video</h3>
        <p>In een recent gelekte video is te zien hoe de CEO van een groot technologiebedrijf toegeeft aan illegale praktijken. De video is volgens bronnen "100% authentiek" en toont een bekentenis van twaalf minuten.</p>
        <div style="margin-top: 16px; padding-top: 12px; border-top: 1px solid var(--border); font-size: 0.75rem; color: var(--red);">
          — Geen extern bewijs<br>
          — "100% authentiek" taal wijst op manipulatie
        </div>
      </div>

      <div class="info-card" style="border-left: 3px solid #27ae60;">
        <div class="card-number" style="color: #27ae60;">Echt Nieuws</div>
        <div style="margin-bottom: 12px; font-size: 0.75rem; color: var(--muted);">
          Reuters | 18 april 2026
        </div>
        <h3>Techbedrijf ontkent beschuldigingen na geruchten over gelekte video</h3>
        <p>Een techbedrijf ontkent categorisch dat een gelekte video authentiek is. Onafhankelijke onderzoekers wijzen op inconsistenties in gezichtsanimatie en lip-sync. Het bedrijf overweegt juridische stappen.</p>
        <div style="margin-top: 16px; padding-top: 12px; border-top: 1px solid var(--border); font-size: 0.75rem; color: #27ae60;">
          — Onafhankelijke analyse<br>
          — Nuance over authenticiteit
        </div>
      </div>
    </div>

    <div class="info-card" style="background: var(--bg);">
      <h4 style="font-family: 'Syne', sans-serif; font-size: 0.85rem; margin-bottom: 8px; color: var(--dark);">Analyse</h4>
      <p style="font-size: 0.85rem;">Het AI-nieuws beweert "100% authentiek" — echte journalistiek betwijfelt altijd. Het echte nieuws vermeldt dat onafhankelijke onderzoekers inconsistenties hebben gevonden.</p>
    </div>
  </div>

  <!-- EXAMPLE 3 -->
  <div class="section">
    <div class="section-title">Voorbeeld 3 — Sociale Media</div>
    
    <div class="tiles-grid" style="grid-template-columns: repeat(2, 1fr);">
      <div class="info-card" style="border-left: 3px solid var(--red);">
        <div class="card-number">AI Gegenereerd</div>
        <div style="margin-bottom: 12px; font-size: 0.75rem; color: var(--muted);">
          "AlertNederland" @alert_nl | 20 april 2026
        </div>
        <h3>Grote stroomstoring in heel Amsterdam - 2 miljoen getroffen</h3>
        <p>EXCLUSIEF: Er is een massive stroomstoring gemeld in de hele regio Amsterdam. Bijna alle huishoudens zitten zonder stroom. Overal zie je mensen in paniek op straat. Dit is nog nooit eerder gebeurd.</p>
        <div style="margin-top: 16px; padding-top: 12px; border-top: 1px solid var(--border); font-size: 0.75rem; color: var(--red);">
          — Geen bron vermeld<br>
          — Alarmistische taal, hoofdletters<br>
          — Onrealistische cijfers (2 miljoen)
        </div>
      </div>

      <div class="info-card" style="border-left: 3px solid #27ae60;">
        <div class="card-number" style="color: #27ae60;">Echt Nieuws</div>
        <div style="margin-bottom: 12px; font-size: 0.75rem; color: var(--muted);">
          Liander / NU.nl | 20 april 2026
        </div>
        <h3>Stroomstoring in Amsterdam-West: 1.200 huishoudens getroffen</h3>
        <p>Liander meldt een stroomstoring in Amsterdam-West. Circa 1.200 huishoudens zijn getroffen. De oorzaak is een defecte kabel. Herstel wordt verwacht binnen enkele uren. Hulpdiensten hebben geen noodsituatie gemeld.</p>
        <div style="margin-top: 16px; padding-top: 12px; border-top: 1px solid var(--border); font-size: 0.75rem; color: #27ae60;">
          — Specifieke bron (Liander)<br>
          — Concrete cijfers, rustige toon
        </div>
      </div>
    </div>

    <div class="info-card" style="background: var(--bg);">
      <h4 style="font-family: 'Syne', sans-serif; font-size: 0.85rem; margin-bottom: 8px; color: var(--dark);">Analyse</h4>
      <p style="font-size: 0.85rem;">Het AI-nieuws gebruikt alarmistische taal ("EXCLUSIEF", "paniek", "nog nooit"), overreacteert (2 miljoen vs 1.200), en noemt geen officiële bron. Echt nieuws citeert de netbeheerder met specifieke aantallen.</p>
    </div>
  </div>

  <!-- EXAMPLE 4 -->
  <div class="section">
    <div class="section-title">Voorbeeld 4 — Gezondheidsnieuws</div>
    
    <div class="tiles-grid" style="grid-template-columns: repeat(2, 1fr);">
      <div class="info-card" style="border-left: 3px solid var(--red);">
        <div class="card-number">AI Gegenereerd</div>
        <div style="margin-bottom: 12px; font-size: 0.75rem; color: var(--muted);">
          "Wetenschappelijk Nieuws" | 22 april 2026
        </div>
        <h3>Doorbraak: Nieuw medicijn geneest alle vormen van kanker definitief</h3>
        <p>Wetenschappers hebben een revolutionair medicijn ontdekt dat iedere vorm van kanker kan genezen. Het medicijn is al getest en werkt perfect. Grote farmaceutische bedrijven verbergen dit medicijn omdat ze geld willen blijven verdienen aan chemotherapie.</p>
        <div style="margin-top: 16px; padding-top: 12px; border-top: 1px solid var(--border); font-size: 0.75rem; color: var(--red);">
          — Conspiratie-element<br>
          — Onmogelijke claim<br>
          — Geen wetenschappelijke bron
        </div>
      </div>

      <div class="info-card" style="border-left: 3px solid #27ae60;">
        <div class="card-number" style="color: #27ae60;">Echt Nieuws</div>
        <div style="margin-bottom: 12px; font-size: 0.75rem; color: var(--muted);">
          Volkskrant / ANP | 22 april 2026
        </div>
        <h3>Nieuw kankermedicijn toont veelbelovende resultaten in fase 2 trial</h3>
        <p>Een experimenteel kankermedicijn toont veelbelovende resultaten bij bepaalde vormen van kanker in de fase 2 trials. Het medicijn moet nog door grotere trials en goedkeuringsprocessen. Resultaten zijn gepubliceerd in Nature Medicine.</p>
        <div style="margin-top: 16px; padding-top: 12px; border-top: 1px solid var(--border); font-size: 0.75rem; color: #27ae60;">
          — Specifiek tijdschrift<br>
          — Realistische verwachting<br>
          — Trial-fase benoemd
        </div>
      </div>
    </div>

    <div class="info-card" style="background: var(--bg); margin-bottom: 48px;">
      <h4 style="font-family: 'Syne', sans-serif; font-size: 0.85rem; margin-bottom: 8px; color: var(--dark);">Analyse</h4>
      <p style="font-size: 0.85rem;">Het AI-nieuws bevat klassieke desinformatie-patronen: een "Doorbaak" die alles geneest, een conspiratie dat pharma het verbergt, en geen wetenschappelijke bron. Echt nieuws noemt het vakblad, de trial-fase, en is genuanceerd.</p>
    </div>
  </div>

  <!-- TIPS -->
  <div class="section">
    <div class="tiles-grid" style="grid-template-columns: 1fr;">
      <div class="info-card">
        <h2 style="font-family: 'Syne', sans-serif; font-size: 1rem; font-weight: 700; color: var(--dark); margin-bottom: 20px;">Snelle herkenningstips</h2>
        <ul style="list-style: none; display: grid; gap: 12px;">
          <li style="font-size: 0.85rem; color: var(--text); padding-left: 20px; position: relative;">
            <strong style="color: var(--dark);">Controleer de bron</strong> — Ken je de nieuwssite? Zoek apart op
          </li>
          <li style="font-size: 0.85rem; color: var(--text); padding-left: 20px; position: relative;">
            <strong style="color: var(--dark);">Google het verhaal</strong> — Staat het ergens anders?
          </li>
          <li style="font-size: 0.85rem; color: var(--text); padding-left: 20px; position: relative;">
            <strong style="color: var(--dark);">Let op opvallende woorden</strong> — "Doorbraak", "Exclusief", historisch"
          </li>
          <li style="font-size: 0.85rem; color: var(--text); padding-left: 20px; position: relative;">
            <strong style="color: var(--dark);">Check de feiten</strong> — Zijn cijfers realistisch?
          </li>
          <li style="font-size: 0.85rem; color: var(--text); padding-left: 20px; position: relative;">
            <strong style="color: var(--dark);">Pas op voor conspiratie-logica</strong> — "Ze verbergen het"
          </li>
        </ul>
      </div>
    </div>
  </div>

<?php get_footer(); ?>

</body>
</html>