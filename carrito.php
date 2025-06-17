<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Viajaconmigo - Carrito</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background: #f0f4ff;
      margin: 0;
      padding: 0;
      color: #333;
    }
    header {
      background: #0a58ca;
      color: white;
      padding: 30px 20px;
      text-align: center;
    }
    h1 {
      margin: 0;
    }
    main {
      max-width: 800px;
      margin: 0 auto;
      padding: 40px 20px;
    }
    .item-carrito {
      background: white;
      border-radius: 8px;
      padding: 16px;
      margin-bottom: 12px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .item-carrito button {
      background: #e3342f;
      color: white;
      border: none;
      padding: 6px 12px;
      border-radius: 6px;
      cursor: pointer;
    }
    .total {
      font-size: 1.2em;
      font-weight: bold;
      margin-top: 20px;
      color: #0a58ca;
    }
    footer {
      background: #0a58ca;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 40px;
    }
  </style>
</head>
<body>
  <header>
    <h1>Viajaconmigo - Carrito de Compras</h1>
  </header>

  <main>
    <div id="contenido"></div>
    <div class="total" id="total"></div>
  </main>

  <footer>
    <p>&copy; 2025 Viajaconmigo. Todos los derechos reservados.</p>
  </footer>

  <script>
    let carrito = JSON.parse(localStorage.getItem("carrito")) || [];

    function mostrarCarrito() {
      const cont = document.getElementById("contenido");
      const totalDiv = document.getElementById("total");

      cont.innerHTML = "";
      let total = 0;

      if (carrito.length === 0) {
        cont.innerHTML = "<p>Tu carrito está vacío.</p>";
        totalDiv.innerHTML = "";
        return;
      }

      carrito.forEach((item, index) => {
        const div = document.createElement("div");
        div.className = "item-carrito";
        div.innerHTML = `
          <span>${item.nombre} - $${item.precio}</span>
          <button onclick="eliminar(${index})">Quitar</button>
        `;
        cont.appendChild(div);
        total += item.precio;
      });

      totalDiv.innerText = `Total: $${total}`;
    }

    function eliminar(i) {
      carrito.splice(i, 1);
      localStorage.setItem("carrito", JSON.stringify(carrito));
      mostrarCarrito();
    }

    mostrarCarrito();
  </script>
</body>
</html>
