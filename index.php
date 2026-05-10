<?php
// index.php - QuickPOS Landing Page
$success = isset($_GET['success']) ? $_GET['success'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>QuickPOS — The Last POS System You'll Ever Need</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet" />
</head>
<body>

<!-- ========== NAVIGATION ========== -->
<nav class="navbar" id="navbar">
  <div class="nav-inner">
    <a href="#" class="logo">
      <span class="logo-icon">⚡</span>
      Quick<span class="logo-accent">POS</span>
    </a>
    <ul class="nav-links">
      <li><a href="#features">Features</a></li>
      <li><a href="#pricing">Pricing</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <a href="#contact" class="btn-signup">Sign Up Free</a>
    <button class="hamburger" id="hamburger" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobile-menu">
  <ul>
    <li><a href="#features" onclick="closeMobile()">Features</a></li>
    <li><a href="#pricing" onclick="closeMobile()">Pricing</a></li>
    <li><a href="#contact" onclick="closeMobile()">Contact</a></li>
    <li><a href="#contact" class="btn-signup" onclick="closeMobile()">Sign Up Free</a></li>
  </ul>
</div>

<!-- ========== HERO SECTION ========== -->
<section class="hero" id="home">
  <div class="hero-bg">
    <div class="hero-orb orb1"></div>
    <div class="hero-orb orb2"></div>
    <div class="hero-orb orb3"></div>
    <div class="grid-lines"></div>
  </div>
  <div class="hero-inner">
    <div class="hero-text">
      <div class="hero-badge">🚀 Trusted by 12,000+ Businesses</div>
      <h1 class="hero-title">The Last POS System<br/><span class="gradient-text">You'll Ever Need</span></h1>
      <p class="hero-sub">QuickPOS is a blazing-fast, cloud-native point of sale platform designed to scale with your business — from day one to a thousand locations.</p>
      <div class="hero-actions">
        <a href="#contact" class="btn-primary">Get Started for Free</a>
        <a href="#features" class="btn-ghost">See How It Works →</a>
      </div>
      <div class="hero-stats">
        <div class="stat"><span class="stat-num">99.9%</span><span class="stat-label">Uptime</span></div>
        <div class="stat-divider"></div>
        <div class="stat"><span class="stat-num">2.3s</span><span class="stat-label">Avg. Transaction</span></div>
        <div class="stat-divider"></div>
        <div class="stat"><span class="stat-num">50+</span><span class="stat-label">Integrations</span></div>
      </div>
    </div>
    <div class="hero-visual">
      <div class="mockup-wrapper">
        <div class="mockup-screen">
          <div class="screen-header">
            <span class="dot red"></span><span class="dot yellow"></span><span class="dot green"></span>
            <span class="screen-title">QuickPOS Dashboard</span>
          </div>
          <div class="screen-body">
            <div class="dash-sidebar">
              <div class="dash-nav-item active">📊 Dashboard</div>
              <div class="dash-nav-item">🛒 Sales</div>
              <div class="dash-nav-item">📦 Inventory</div>
              <div class="dash-nav-item">📈 Analytics</div>
              <div class="dash-nav-item">⚙️ Settings</div>
            </div>
            <div class="dash-main">
              <div class="dash-metric-row">
                <div class="dash-metric">
                  <div class="metric-label">Today's Revenue</div>
                  <div class="metric-value">$8,420</div>
                  <div class="metric-change positive">↑ 12.4%</div>
                </div>
                <div class="dash-metric">
                  <div class="metric-label">Orders</div>
                  <div class="metric-value">284</div>
                  <div class="metric-change positive">↑ 8.1%</div>
                </div>
                <div class="dash-metric">
                  <div class="metric-label">Avg. Order</div>
                  <div class="metric-value">$29.6</div>
                  <div class="metric-change negative">↓ 2.3%</div>
                </div>
              </div>
              <div class="dash-chart-area">
                <div class="chart-label">Sales This Week</div>
                <div class="chart-bars">
                  <div class="bar" style="height:45%"><span>M</span></div>
                  <div class="bar" style="height:70%"><span>T</span></div>
                  <div class="bar" style="height:55%"><span>W</span></div>
                  <div class="bar" style="height:85%"><span>T</span></div>
                  <div class="bar active-bar" style="height:95%"><span>F</span></div>
                  <div class="bar" style="height:60%"><span>S</span></div>
                  <div class="bar" style="height:40%"><span>S</span></div>
                </div>
              </div>
              <div class="dash-orders">
                <div class="order-row"><span class="order-id">#4821</span><span class="order-item">Latte × 2</span><span class="order-price">$12.00</span></div>
                <div class="order-row"><span class="order-id">#4820</span><span class="order-item">Burger Meal</span><span class="order-price">$18.50</span></div>
                <div class="order-row"><span class="order-id">#4819</span><span class="order-item">T-Shirt (L)</span><span class="order-price">$29.99</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="mockup-shadow"></div>
        <div class="floating-card card1">💳 Payment Processed</div>
        <div class="floating-card card2">📦 Low Stock Alert</div>
      </div>
    </div>
  </div>
  <div class="hero-scroll-hint">
    <span>Scroll to explore</span>
    <div class="scroll-arrow">↓</div>
  </div>
</section>

<!-- ========== FEATURES SECTION ========== -->
<section class="features" id="features">
  <div class="section-inner">
    <div class="section-tag">What We Offer</div>
    <h2 class="section-title">Everything Your Business Needs,<br/><em>Nothing It Doesn't</em></h2>
    <p class="section-sub">Four pillars that make QuickPOS the most complete retail and hospitality solution on the market.</p>
    <div class="features-grid">

      <div class="feature-card">
        <div class="feature-icon-wrap" style="--accent:#F59E0B">
          <span class="feature-icon">📦</span>
        </div>
        <h3>Inventory Management</h3>
        <p>Track every SKU in real time. Automated restock alerts, supplier management, and barcode scanning built right in — no plugins required.</p>
        <ul class="feature-bullets">
          <li>✓ Real-time stock levels</li>
          <li>✓ Barcode & QR scanning</li>
          <li>✓ Automated reorder triggers</li>
        </ul>
      </div>

      <div class="feature-card featured">
        <div class="featured-badge">Most Popular</div>
        <div class="feature-icon-wrap" style="--accent:#6366F1">
          <span class="feature-icon">📈</span>
        </div>
        <h3>Sales Analytics</h3>
        <p>Real-time dashboards, custom reports, and AI-powered forecasting. Know what's selling, what's not, and what's next — before your competitors do.</p>
        <ul class="feature-bullets">
          <li>✓ Live sales dashboards</li>
          <li>✓ AI demand forecasting</li>
          <li>✓ Export to CSV / PDF</li>
        </ul>
      </div>

      <div class="feature-card">
        <div class="feature-icon-wrap" style="--accent:#10B981">
          <span class="feature-icon">🔗</span>
        </div>
        <h3>Easy Integration</h3>
        <p>Connect with Shopify, WooCommerce, QuickBooks, Stripe, and 50+ other tools. One-click setup, no developer needed.</p>
        <ul class="feature-bullets">
          <li>✓ 50+ native integrations</li>
          <li>✓ REST API access</li>
          <li>✓ Webhook support</li>
        </ul>
      </div>

      <div class="feature-card">
        <div class="feature-icon-wrap" style="--accent:#EF4444">
          <span class="feature-icon">☁️</span>
        </div>
        <h3>Cloud-Native & Offline</h3>
        <p>Works perfectly with or without internet. All data syncs instantly when you're back online. Your business never stops — even when the Wi-Fi does.</p>
        <ul class="feature-bullets">
          <li>✓ Offline-first architecture</li>
          <li>✓ Auto cloud sync</li>
          <li>✓ 99.9% uptime SLA</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- ========== PRICING SECTION ========== -->
<section class="pricing" id="pricing">
  <div class="section-inner">
    <div class="section-tag">Simple Pricing</div>
    <h2 class="section-title">Transparent Plans,<br/><em>No Surprises</em></h2>
    <p class="section-sub">Start free. Scale as you grow. Cancel anytime.</p>
    <div class="pricing-grid">

      <div class="pricing-card">
        <div class="plan-name">Basic</div>
        <div class="plan-desc">Perfect for small shops just starting out</div>
        <div class="plan-price"><span class="currency">$</span>0<span class="period">/mo</span></div>
        <ul class="plan-features">
          <li><span class="check">✓</span> 1 Register Terminal</li>
          <li><span class="check">✓</span> Up to 500 Products</li>
          <li><span class="check">✓</span> Basic Sales Reports</li>
          <li><span class="check">✓</span> Email Support</li>
          <li><span class="cross">✗</span> Advanced Analytics</li>
          <li><span class="cross">✗</span> Multi-location</li>
          <li><span class="cross">✗</span> API Access</li>
        </ul>
        <a href="#contact" class="btn-plan">Get Started Free</a>
      </div>

      <div class="pricing-card pro">
        <div class="plan-badge">Most Popular</div>
        <div class="plan-name">Pro</div>
        <div class="plan-desc">For growing businesses that need more power</div>
        <div class="plan-price"><span class="currency">$</span>49<span class="period">/mo</span></div>
        <ul class="plan-features">
          <li><span class="check">✓</span> 5 Register Terminals</li>
          <li><span class="check">✓</span> Unlimited Products</li>
          <li><span class="check">✓</span> Advanced Analytics</li>
          <li><span class="check">✓</span> Priority Support</li>
          <li><span class="check">✓</span> 20+ Integrations</li>
          <li><span class="check">✓</span> Staff Management</li>
          <li><span class="cross">✗</span> White Label</li>
        </ul>
        <a href="#contact" class="btn-plan-pro">Start Pro Trial</a>
      </div>

      <div class="pricing-card">
        <div class="plan-name">Enterprise</div>
        <div class="plan-desc">For large chains and high-volume retailers</div>
        <div class="plan-price"><span class="currency">$</span>199<span class="period">/mo</span></div>
        <ul class="plan-features">
          <li><span class="check">✓</span> Unlimited Terminals</li>
          <li><span class="check">✓</span> Unlimited Products</li>
          <li><span class="check">✓</span> AI Forecasting</li>
          <li><span class="check">✓</span> 24/7 Dedicated Support</li>
          <li><span class="check">✓</span> All 50+ Integrations</li>
          <li><span class="check">✓</span> Multi-location</li>
          <li><span class="check">✓</span> White Label & API</li>
        </ul>
        <a href="#contact" class="btn-plan">Contact Sales</a>
      </div>

    </div>
  </div>
</section>

<!-- ========== CONTACT SECTION ========== -->
<section class="contact" id="contact">
  <div class="section-inner contact-inner">
    <div class="contact-text">
      <div class="section-tag">Get In Touch</div>
      <h2 class="section-title" style="text-align:left">Ready to Transform<br/><em>Your Business?</em></h2>
      <p class="section-sub" style="text-align:left">Drop us a message and our team will get back to you within 24 hours.</p>
      <div class="contact-perks">
        <div class="perk">🎯 Free 30-day trial — no credit card</div>
        <div class="perk">⚡ Setup in under 10 minutes</div>
        <div class="perk">🛡️ SOC 2 Type II certified</div>
      </div>
    </div>
    <div class="contact-form-wrap">
      <?php if ($success === '1'): ?>
        <div class="form-success">
          <div class="success-icon">✅</div>
          <h3>Message Sent!</h3>
          <p>We'll be in touch within 24 hours.</p>
        </div>
      <?php else: ?>
      <form class="contact-form" action="contact.php" method="POST">
        <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" id="name" name="name" placeholder="John Doe" required />
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" placeholder="john@company.com" required />
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="5" placeholder="Tell us about your business..." required></textarea>
        </div>
        <button type="submit" class="btn-submit">Send Message →</button>
      </form>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ========== FOOTER ========== -->
<footer class="footer">
  <div class="footer-inner">
    <div class="footer-brand">
      <a href="#" class="logo footer-logo">⚡ Quick<span class="logo-accent">POS</span></a>
      <p>The last POS system you'll ever need. Built for speed, reliability, and growth.</p>
      <div class="social-links">
        <a href="#" class="social-link" aria-label="Twitter">𝕏</a>
        <a href="#" class="social-link" aria-label="LinkedIn">in</a>
        <a href="#" class="social-link" aria-label="Facebook">f</a>
        <a href="#" class="social-link" aria-label="Instagram">📷</a>
      </div>
    </div>
    <div class="footer-links">
      <div class="footer-col">
        <h4>Product</h4>
        <ul>
          <li><a href="#features">Features</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li><a href="#">Changelog</a></li>
          <li><a href="#">Roadmap</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Company</h4>
        <ul>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">Press</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Support</h4>
        <ul>
          <li><a href="#">Documentation</a></li>
          <li><a href="#">API Reference</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#">Status Page</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <span>&copy; <?php echo date('Y'); ?> QuickPOS. All rights reserved.</span>
    <div class="footer-legal">
      <a href="#">Privacy Policy</a>
      <a href="#">Terms of Service</a>
      <a href="#">Cookie Settings</a>
    </div>
  </div>
</footer>

<script src="script.js"></script>
</body>
</html>
