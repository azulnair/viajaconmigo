<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Viajaconmigo - Productos</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      margin: 0;
      padding: 0;
      background: #f0f4ff;
      color: #333;
    }
    header {
      background-color: #0a58ca;
      color: white;
      padding: 30px 20px;
      text-align: center;
    }
    h1 {
      margin: 0;
      font-size: 2em;
    }
    main {
      max-width: 960px;
      margin: 0 auto;
      padding: 40px 20px;
    }
    h2 {
      margin-bottom: 20px;
      color: #0a58ca;
    }
    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }
    .producto {
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .producto h3 {
      margin: 0 0 10px;
    }
    .producto p {
      margin: 0 0 12px;
    }
    .producto button {
      background-color: #0a58ca;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: 600;
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
    <h1>Viajaconmigo</h1>
    <p>Catálogo de productos turísticos</p>
  </header>

  <main>
    <h2>Productos disponibles</h2>
    <div class="grid" id="lista-productos">
      <!-- Productos insertados con JS -->
    </div>
  </main>

  <footer>
    <p>&copy; 2025 Viajaconmigo. Todos los derechos reservados.</p>
  </footer>

  <script>
    const productos = [
      { id: 1, nombre: "Kit de Viaje Premium", descripcion: "Incluye shampoo, crema, antifaz y tapones", precio: 2500 },
      { id: 2, nombre: "Almohada de Cuello Memory Foam", descripcion: "Máxima comodidad en tus vuelos largos", precio: 3200 },
      { id: 3, nombre: "Bolso de Mano Cabina", descripcion: "Apto como equipaje de cabina en aerolíneas", precio: 4500 },
      { id: 4, nombre: "Seguro Médico Internacional", descripcion: "Cobertura médica en el exterior por 30 días", precio: 6700 }
    ];

    const contenedor = document.getElementById("lista-productos");

    productos.forEach(p => {
      const div = document.createElement("div");
      div.className = "producto";
      div.innerHTML = `
        <h3>${p.nombre}</h3>
        <p>${p.descripcion}</p>
        <strong>Precio: $${p.precio}</strong>
        <button onclick="agregarAlCarrito(${p.id})">Agregar al carrito</button>
      `;
      contenedor.appendChild(div);
    });

    function agregarAlCarrito(id) {
      const prod = productos.find(p => p.id === id);
      let carrito = JSON.parse(localStorage.getItem("carrito")) || [];
      carrito.push(prod);
      localStorage.setItem("carrito", JSON.stringify(carrito));
      alert(prod.nombre + " agregado al carrito");
    }
  </script>

</body>
</html>
