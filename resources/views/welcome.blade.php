<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>The Coding Pit — Developer Tools That Work</title>
<meta name="description" content="Small, sharp developer tools. Built by Jeff Rosenthal.">
<style>
  * { margin: 0; padding: 0; box-sizing: border-box; }
  body {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Inter, sans-serif;
    background: #0a0a0a;
    color: #e4e4e7;
    line-height: 1.7;
    -webkit-font-smoothing: antialiased;
  }

  /* Nav */
  .nav {
    display: flex; justify-content: space-between; align-items: center;
    padding: 20px 40px; max-width: 1000px; margin: 0 auto;
  }
  .nav-brand {
    font-size: 18px; font-weight: 800; color: #fff;
    text-decoration: none; letter-spacing: -0.5px;
  }
  .nav-brand span { color: #a78bfa; }
  .nav-links { display: flex; gap: 24px; }
  .nav-links a {
    font-size: 14px; color: #71717a; text-decoration: none;
    transition: color 0.2s;
  }
  .nav-links a:hover { color: #fff; }

  /* Hero */
  .hero {
    max-width: 700px; margin: 80px auto 0; padding: 0 40px; text-align: center;
  }
  .hero h1 {
    font-size: 48px; font-weight: 800; color: #fff;
    line-height: 1.1; letter-spacing: -1.5px; margin-bottom: 20px;
  }
  .hero h1 em {
    font-style: normal;
    background: linear-gradient(135deg, #a78bfa, #c084fc);
    -webkit-background-clip: text; -webkit-text-fill-color: transparent;
  }
  .hero p {
    font-size: 18px; color: #a1a1aa; max-width: 500px; margin: 0 auto 48px;
  }

  /* Products */
  .products {
    max-width: 900px; margin: 0 auto 80px; padding: 0 40px;
  }
  .products-label {
    font-size: 10px; font-weight: 700; text-transform: uppercase;
    letter-spacing: 1.5px; color: #52525b; text-align: center; margin-bottom: 32px;
  }

  .product-card {
    background: #18181b; border: 1px solid #27272a; border-radius: 16px;
    padding: 40px; margin-bottom: 24px;
    display: flex; gap: 40px; align-items: center;
    transition: border-color 0.3s;
  }
  .product-card:hover { border-color: #3f3f46; }

  .product-icon {
    width: 80px; height: 80px; border-radius: 16px; flex-shrink: 0;
    display: flex; align-items: center; justify-content: center;
    font-size: 36px;
  }
  .product-info { flex: 1; }
  .product-info h2 {
    font-size: 22px; font-weight: 800; color: #fff; margin-bottom: 4px;
    letter-spacing: -0.3px;
  }
  .product-tagline {
    font-size: 14px; color: #a78bfa; font-weight: 600; margin-bottom: 10px;
  }
  .product-info p {
    font-size: 14px; color: #71717a; line-height: 1.6; margin-bottom: 16px;
  }
  .product-features {
    display: flex; flex-wrap: wrap; gap: 6px; margin-bottom: 18px;
  }
  .product-tag {
    font-size: 11px; padding: 3px 10px; background: #27272a;
    border-radius: 20px; color: #a1a1aa;
  }
  .product-actions { display: flex; gap: 12px; flex-wrap: wrap; }
  .btn-product {
    display: inline-block; padding: 10px 24px; font-size: 13px; font-weight: 700;
    border-radius: 8px; text-decoration: none; transition: all 0.2s;
  }
  .btn-primary {
    background: #a78bfa; color: #000;
  }
  .btn-primary:hover { background: #8b5cf6; transform: translateY(-1px); }
  .btn-ghost {
    background: transparent; border: 1px solid #27272a; color: #a1a1aa;
  }
  .btn-ghost:hover { border-color: #a78bfa; color: #fff; }

  .product-badge {
    display: inline-block; padding: 3px 10px; background: #1e1b4b;
    border: 1px solid #312e81; border-radius: 12px;
    font-size: 10px; color: #a78bfa; font-weight: 600;
  }

  /* Coming soon card */
  .coming-soon {
    background: #18181b; border: 1px solid #27272a; border-radius: 16px;
    padding: 32px 40px; text-align: center;
  }
  .coming-soon h3 {
    font-size: 16px; font-weight: 700; color: #fff; margin-bottom: 6px;
  }
  .coming-soon p { font-size: 13px; color: #52525b; }

  /* About */
  .about {
    max-width: 600px; margin: 0 auto 80px; padding: 0 40px; text-align: center;
  }
  .about h2 {
    font-size: 28px; font-weight: 800; color: #fff; margin-bottom: 16px;
    letter-spacing: -0.5px;
  }
  .about p {
    font-size: 15px; color: #71717a; line-height: 1.8; margin-bottom: 12px;
  }
  .about a { color: #a78bfa; text-decoration: none; }
  .about a:hover { text-decoration: underline; }

  /* Footer */
  .footer {
    padding: 40px; text-align: center; font-size: 13px; color: #3f3f46;
    border-top: 1px solid #1c1c1e;
  }
  .footer a { color: #52525b; text-decoration: none; }
  .footer a:hover { color: #a78bfa; }

  @media (max-width: 700px) {
    .hero h1 { font-size: 32px; }
    .product-card { flex-direction: column; text-align: center; gap: 20px; }
    .product-features { justify-content: center; }
    .product-actions { justify-content: center; }
    .nav { padding: 16px 20px; }
    .hero, .products, .about { padding: 0 20px; }
  }
</style>
</head>
<body>

<nav class="nav">
  <a href="/" class="nav-brand">The<span>Coding</span>Pit</a>
  <div class="nav-links">
    <a href="#products">Products</a>
    <a href="mailto:jeff@thecodingpit.com">Contact</a>
  </div>
</nav>

<section class="hero">
  <h1>Small, sharp <em>developer tools</em></h1>
  <p>We build focused tools that solve one problem well. No bloat, no accounts, no subscriptions.</p>
</section>

<section class="products" id="products">
  <div class="products-label">Products</div>

  <div class="product-card">
    <div class="product-icon" style="background: linear-gradient(135deg, #a78bfa, #7c3aed);">
      <span>&#127912;</span>
    </div>
    <div class="product-info">
      <h2>DesignGrab</h2>
      <div class="product-tagline">Extract any website's design system in one click</div>
      <p>Chrome extension that pulls colors, fonts, and spacing from any website. Hover to highlight, click to copy, pick any element to reverse-lookup its styles. Export as CSS Variables, Tailwind config, or JSON.</p>
      <div class="product-features">
        <span class="product-tag">Chrome Extension</span>
        <span class="product-tag">Color Extraction</span>
        <span class="product-tag">Typography</span>
        <span class="product-tag">Spacing Scale</span>
        <span class="product-tag">Element Picker</span>
        <span class="product-tag">CSS / Tailwind / JSON Export</span>
      </div>
      <div class="product-actions">
        <a href="https://jeffrosenthal.github.io/designgrab/" class="btn-product btn-primary">Get DesignGrab — $29</a>
        <a href="https://jeffrosenthal.github.io/designgrab/" class="btn-product btn-ghost">Learn More</a>
      </div>
    </div>
  </div>

  <div class="coming-soon">
    <h3>More tools coming</h3>
    <p>We're building the next one. Stay tuned.</p>
  </div>
</section>

<section class="about" id="about">
  <h2>Built by Jeff Rosenthal</h2>
  <p>Solo developer building tools I wish existed. Every product ships lean — one thing, done right, priced fairly.</p>
  <p><a href="mailto:jeff@thecodingpit.com">jeff@thecodingpit.com</a></p>
</section>

<footer class="footer">
  <p>The Coding Pit &middot; <a href="mailto:jeff@thecodingpit.com">jeff@thecodingpit.com</a></p>
</footer>

</body>
</html>
