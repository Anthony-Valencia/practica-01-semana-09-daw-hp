<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechConf 2026 - Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>🚀 TechConf 2026</h1>
        <p style="text-align: center; color: var(--text-muted); margin-bottom: 2rem;">Asegura tu lugar en el evento del año</p>
        
        <form action="procesar.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" required placeholder="Ej. Anthony Valencia">
            </div>
            
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required placeholder="tu@correo.com">
            </div>

            <div class="form-group">
                <label for="tecnologia">Tecnología Favorita:</label>
                <select id="tecnologia" name="tecnologia" required>
                    <option value="">Selecciona una opción</option>
                    <option value="PHP">PHP</option>
                    <option value="JSP/Java">JSP / Java</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="Python">Python</option>
                </select>
            </div>

            <div class="form-group">
                <label for="entrada">Tipo de Entrada:</label>
                <select id="entrada" name="entrada" required>
                    <option value="General">General</option>
                    <option value="VIP">VIP (Acceso Total)</option>
                    <option value="Estudiante">Estudiante</option>
                </select>
            </div>

            <button type="submit">Confirmar Registro</button>
        </form>
    </div>
</body>
</html>