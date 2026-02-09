<?php
/**
 * Poppyrose front page template.
 */
get_header();
?>

<section class="poppyrose-hero">
  <div class="poppyrose-container poppyrose-hero-grid">
    <div>
      <span class="poppyrose-badge">Collezione 2026</span>
      <h1>Regala emozioni che durano a lungo</h1>
      <p>Un tema originale e raffinato per brand floreali moderni. Crea un’esperienza elegante con sezioni curate e call-to-action efficaci.</p>
      <div style="display:flex; gap:1rem; flex-wrap:wrap;">
        <a class="poppyrose-button primary" href="<?php echo esc_url( home_url( '/shop' ) ); ?>">Scopri le collezioni</a>
        <a class="poppyrose-button secondary" href="<?php echo esc_url( home_url( '/personalizza' ) ); ?>">Personalizza il regalo</a>
      </div>
      <div class="poppyrose-highlight">
        <div class="poppyrose-highlight-card">
          <h3>Eleganza senza tempo</h3>
          <p>Palette sofisticata e layout moderni per mettere al centro il prodotto.</p>
        </div>
        <div class="poppyrose-highlight-card">
          <h3>Messaggi personalizzati</h3>
          <p>Spazio dedicato a dediche, note e dettagli che valorizzano il brand.</p>
        </div>
      </div>
    </div>
    <div class="poppyrose-hero-card">
      <h2>Focus collezione</h2>
      <p>Presenta un prodotto in evidenza con una descrizione breve e coinvolgente.</p>
      <div class="poppyrose-products">
        <div class="poppyrose-product-card">
          <strong>Signature Box</strong>
          <span>Rose, carta velluto, nastri</span>
          <div class="poppyrose-product-price">€89</div>
        </div>
        <div class="poppyrose-product-card">
          <strong>Petal Bloom</strong>
          <span>Delicato, minimal, chic</span>
          <div class="poppyrose-product-price">€64</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="poppyrose-section">
  <div class="poppyrose-container">
    <h2 class="poppyrose-section-title">Collezioni in primo piano</h2>
    <p class="poppyrose-section-subtitle">Inserisci qui i tuoi prodotti principali o categorie stagionali con un layout a card elegante.</p>
    <div class="poppyrose-products">
      <article class="poppyrose-product-card">
        <img src="https://images.unsplash.com/photo-1526047932273-341f2a7631f9?auto=format&fit=crop&w=600&q=80" alt="Bouquet moderno">
        <strong>Velvet Rouge</strong>
        <span>Rose intense con finiture oro.</span>
        <div class="poppyrose-product-price">€120</div>
      </article>
      <article class="poppyrose-product-card">
        <img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?auto=format&fit=crop&w=600&q=80" alt="Rose delicate">
        <strong>Rose Blush</strong>
        <span>Toni cipria per occasioni speciali.</span>
        <div class="poppyrose-product-price">€98</div>
      </article>
      <article class="poppyrose-product-card">
        <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=600&q=80" alt="Box floreale">
        <strong>Golden Bloom</strong>
        <span>Dettagli dorati e texture vellutate.</span>
        <div class="poppyrose-product-price">€145</div>
      </article>
      <article class="poppyrose-product-card">
        <img src="https://images.unsplash.com/photo-1468327768560-75b778cbb551?auto=format&fit=crop&w=600&q=80" alt="Composizione floreale">
        <strong>Signature Noir</strong>
        <span>Eleganza dark per regali unici.</span>
        <div class="poppyrose-product-price">€132</div>
      </article>
    </div>
  </div>
</section>

<section class="poppyrose-section">
  <div class="poppyrose-container poppyrose-story">
    <div>
      <h2 class="poppyrose-section-title">La nostra storia</h2>
      <p>Racconta la filosofia del brand: dedizione artigianale, materiali premium e cura dei dettagli che trasformano ogni regalo in un’esperienza.</p>
    </div>
    <div class="poppyrose-steps">
      <div class="poppyrose-step-card">
        <h4>1. Seleziona</h4>
        <p>Scegli colori, profumi e composizioni uniche.</p>
      </div>
      <div class="poppyrose-step-card">
        <h4>2. Personalizza</h4>
        <p>Aggiungi un messaggio o una dedica speciale.</p>
      </div>
      <div class="poppyrose-step-card">
        <h4>3. Sorprendi</h4>
        <p>Consegne curate per un effetto wow immediato.</p>
      </div>
    </div>
  </div>
</section>

<section class="poppyrose-section">
  <div class="poppyrose-container">
    <h2 class="poppyrose-section-title">Cosa dicono i clienti</h2>
    <p class="poppyrose-section-subtitle">Raccolta di feedback e recensioni per costruire fiducia.</p>
    <div class="poppyrose-testimonials">
      <article class="poppyrose-testimonial-card">
        <p>“Un’esperienza raffinata dall’ordine alla consegna. Il packaging è spettacolare.”</p>
        <strong>Giulia R.</strong>
      </article>
      <article class="poppyrose-testimonial-card">
        <p>“Design elegante e ottima qualità. Ho ricevuto complimenti da tutti.”</p>
        <strong>Alessandro M.</strong>
      </article>
      <article class="poppyrose-testimonial-card">
        <p>“Il tema mette subito in risalto la collezione e rende facile acquistare.”</p>
        <strong>Chiara P.</strong>
      </article>
    </div>
  </div>
</section>

<section class="poppyrose-cta">
  <div class="poppyrose-container">
    <h2>Pronta a creare la tua collezione?</h2>
    <p>Personalizza testi, colori e immagini per raccontare il tuo brand in modo unico.</p>
    <a class="poppyrose-button secondary" href="<?php echo esc_url( home_url( '/contatti' ) ); ?>">Parliamone</a>
  </div>
</section>

<?php
get_footer();
