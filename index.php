<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SmartResume AI</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="wrapper">

    <header>
      <div class="logo-badge">Powered by AI</div>
      <h1>SmartResume AI</h1>
      <p class="subtitle">Collez votre CV ci-dessous pour recevoir des suggestions<br>personnalisées et des formulations percutantes.</p>
      <div class="divider"><span class="divider-icon">****</span></div>
    </header>

    <div class="card">
      <label for="cv_text">Votre CV</label>
      <textarea id="cv_text" placeholder="Collez ou rédigez votre CV ici..."></textarea>

      <button class="btn-analyze" onclick="analyzeCV()">
         Analyser mon CV
      </button>
    </div>

    <div class="result-section">
      <div class="result-header">Suggestions de l'IA</div>
      <div id="result"></div>
    </div>

    <footer>SmartResume AI &nbsp;·&nbsp; <span>✦</span> &nbsp;Boostez votre carrière</footer>

  </div>

  <script src="script.js"></script>

</body>
</html>