<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formación de Seguidores de Jesús</title>

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="manifest" href="manifest.json">

    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600&family=Nunito:wght@400;600;700&display=swap"
        rel="stylesheet">

    <meta name="theme-color" content="#8ED1FC">

</head>

<body>

    <header class="hero">

        ```
        <div class="logo-container">

            <img src="assets/images/logo.png" alt="Logo FSJ" class="logo">

            <h1>Formación de Seguidores de Jesús</h1>

            <p>Aprendiendo a seguir a Jesús cada día</p>

        </div>
        ```

    </header>

    <main>

        <section class="today-card">

            <h2>📅 Clase de Hoy</h2>

            <p>Semana 1 - Dios me creó con propósito</p>

        </section>

        <section class="group-card">

            <h2>🐑 Descubridores</h2>

            <p>3 a 5 años</p>

            <button class="btn-primary">
                Entrar
            </button>

        </section>

        <section class="group-card">

            <h2>🦁 Exploradores</h2>

            <p>6 a 9 años</p>

            <button class="btn-primary">
                Entrar
            </button>

        </section>

        <section class="group-card">

            <h2>🦅 Investigadores</h2>

            <p>10 a 13 años</p>

            <button class="btn-primary">
                Entrar
            </button>

        </section>

        <section class="menu-grid">

            <div class="menu-item">
                📚 Biblioteca
            </div>

            <div class="menu-item">
                🎵 Música
            </div>

        </section>

    </main>

    <script src="assets/js/app.js"></script>

<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html>