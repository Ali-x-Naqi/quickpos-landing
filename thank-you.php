<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thank You — QuickPOS</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet" />
  <style>
    .thankyou-page {
      min-height: 100vh;
      display: flex; flex-direction: column;
      align-items: center; justify-content: center;
      padding: 2rem; text-align: center;
      background: var(--bg);
      position: relative; overflow: hidden;
    }
    .thankyou-page::before {
      content: '';
      position: absolute;
      width: 700px; height: 700px;
      background: radial-gradient(circle, rgba(79,142,247,0.12), transparent);
      border-radius: 50%;
      top: 50%; left: 50%;
      transform: translate(-50%, -50%);
      pointer-events: none;
    }
    .thankyou-card {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: 24px;
      padding: 4rem 3rem;
      max-width: 500px; width: 100%;
      position: relative; z-index: 1;
      animation: fadeUp 0.6s ease both;
    }
    .ty-icon {
      font-size: 5rem; margin-bottom: 1.5rem;
      animation: pop 0.5s 0.3s ease both;
      display: block;
    }
    @keyframes pop {
      from { transform: scale(0.5); opacity: 0; }
      to   { transform: scale(1);   opacity: 1; }
    }
    .ty-title {
      font-family: var(--font-head); font-size: 2.4rem;
      font-weight: 800; letter-spacing: -1px;
      margin-bottom: 1rem; color: var(--text);
    }
    .ty-sub { color: var(--text2); font-size: 1rem; line-height: 1.7; margin-bottom: 2.5rem; }
    .ty-steps {
      display: flex; flex-direction: column; gap: 1rem;
      margin-bottom: 2.5rem; text-align: left;
    }
    .ty-step {
      display: flex; align-items: center; gap: 1rem;
      background: var(--bg2); border-radius: 12px; padding: 14px 18px;
      border: 1px solid var(--border);
    }
    .step-num {
      width: 32px; height: 32px; border-radius: 50%;
      background: linear-gradient(135deg, var(--accent), var(--accent2));
      color: #fff; display: flex; align-items: center; justify-content: center;
      font-size: 0.8rem; font-weight: 700; flex-shrink: 0;
    }
    .step-text { font-size: 0.9rem; color: var(--text2); }
    .ty-btn {
      display: inline-flex; align-items: center; gap: 8px;
      background: linear-gradient(135deg, var(--accent), var(--accent2));
      color: #fff; text-decoration: none;
      padding: 14px 32px; border-radius: 50px;
      font-size: 0.95rem; font-weight: 700;
      transition: all 0.25s;
      box-shadow: 0 0 30px var(--accent-glow);
    }
    .ty-btn:hover { transform: translateY(-2px); box-shadow: 0 8px 40px var(--accent-glow); }
  </style>
</head>
<body>
<div class="thankyou-page">
  <div class="thankyou-card">
    <span class="ty-icon">🎉</span>
    <h1 class="ty-title">You're All Set!</h1>
    <p class="ty-sub">
      Thanks for reaching out! Our team received your message and will get back to you within 24 hours.
    </p>
    <div class="ty-steps">
      <div class="ty-step">
        <div class="step-num">1</div>
        <span class="step-text">Check your inbox for our confirmation email</span>
      </div>
      <div class="ty-step">
        <div class="step-num">2</div>
        <span class="step-text">Our team reviews your request within 24 hours</span>
      </div>
      <div class="ty-step">
        <div class="step-num">3</div>
        <span class="step-text">We'll set up your free trial and walk you through it</span>
      </div>
    </div>
    <a href="index.php" class="ty-btn">← Back to QuickPOS</a>
  </div>
</div>
</body>
</html>
