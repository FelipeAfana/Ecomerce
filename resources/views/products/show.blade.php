@extends("layots.app")

<link rel="stylesheet" href="{{asset('css/style_show.css')}}">

@section("content")
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PlayStation 5 - Amazon</title>

<style>
  
</style>



<!-- HEADER -->


<!-- BREADCRUMB -->
<div class="breadcrumb">
    <div class="breadcrumb-content">
        <a href="#">Inicio</a> › 
        <a href="#">Videojuegos</a> › 
        <a href="#">Consolas</a> › 
        PlayStation 5
    </div>
</div>

<!-- PRODUCT -->
<div class="container">
    <div class="product-container">
        <!-- IMAGES -->
        <div class="product-images">
            <img src="https://panamericana.vtexassets.com/arquivos/ids/533202/consola-digital-2-juegos-ps5-711719570820.jpg?v=638448315434670000" alt="PlayStation 5" class="main-image" id="mainImage">
            <div class="thumbnail-images">
                <img src="https://panamericana.vtexassets.com/arquivos/ids/533202/consola-digital-2-juegos-ps5-711719570820.jpg?v=638448315434670000    " alt="PS5 1" class="thumbnail active" onclick="changeImage(this)">
                <img src="https://www.cnet.com/a/img/resize/f898602d0b7537b2f9e9ff41aa2551705416072c/hub/2020/10/26/b60bfe6f-3193-4381-b0d4-ac628cdcc565/img-1419.jpg?auto=webp&fit=crop&height=1200&width=1200" alt="PS5 2" class="thumbnail" onclick="changeImage(this)">
                <img src="https://exitocol.vtexassets.com/arquivos/ids/22972579/consola-ps5-slim-lector-de-disco-spiderman-1-control-blanco.jpg?v=638527842783400000" alt="PS5 3" class="thumbnail" onclick="changeImage(this)">
                <img src="https://juegosdigitalescolombia.com/files/images/noticias/1726015601_aaaa.webp" alt="PS5 4" class="thumbnail" onclick="changeImage(this)">
            </div>
        </div>

        <!-- INFO -->
        <div class="product-info">
            <h1 class="product-title">PlayStation 5 Console - Edición Digital con 2 Juegos Incluidos</h1>

            <div class="product-rating">
                <span class="stars">⭐⭐⭐⭐⭐</span>
                <span class="rating-count">2,856 valoraciones</span>
                <span>|</span>
                <span class="rating-count">1,234 vendidos</span>
            </div>

            <div class="price-section">
                <div class="price">$499<sup>.99</sup></div>
                <div class="savings">Ahorras: $100.00 (17%)</div>
                <span class="prime-badge">✓ Envío GRATIS con Prime</span>
            </div>

            <div class="features-list">
                <ul>
                    <li>Procesador AMD Ryzen Zen 2 de 8 núcleos a 3.5 GHz</li>
                    <li>GPU AMD Radeon RDNA 2 con 10.28 TFLOPS</li>
                    <li>16 GB de memoria GDDR6</li>
                    <li>SSD de 825 GB ultrarrápido</li>
                    <li>Resolución hasta 8K y soporte de ray tracing</li>
                    <li>Incluye 2 juegos digitales: Spider-Man Miles Morales y Ratchet & Clank</li>
                    <li>Control DualSense con retroalimentación háptica</li>
                </ul>
            </div>

            <div class="divider"></div>

            <div class="product-details">
                <h2 class="details-title">Detalles del Producto</h2>
                <div class="detail-item"><span class="detail-label">Marca:</span><span class="detail-value">Sony PlayStation</span></div>
                <div class="detail-item"><span class="detail-label">Modelo:</span><span class="detail-value">CFI-1215B</span></div>
                <div class="detail-item"><span class="detail-label">Color:</span><span class="detail-value">Blanco</span></div>
                <div class="detail-item"><span class="detail-label">Conectividad:</span><span class="detail-value">HDMI 2.1, USB-C, WiFi 6, Bluetooth 5.1</span></div>
                <div class="detail-item"><span class="detail-label">Dimensiones:</span><span class="detail-value">390 x 104 x 260 mm</span></div>
                <div class="detail-item"><span class="detail-label">Peso:</span><span class="detail-value">3.9 kg</span></div>
            </div>

            <div class="specifications">
                <h2 class="details-title">Especificaciones Técnicas</h2>
                <table class="spec-table">
                    <tr><td>Procesador</td><td>AMD Ryzen Zen 2 de 8 núcleos a 3.5 GHz</td></tr>
                    <tr><td>Tarjeta Gráfica</td><td>AMD Radeon RDNA 2 con 10.28 TFLOPS</td></tr>
                    <tr><td>Memoria RAM</td><td>16 GB GDDR6</td></tr>
                    <tr><td>Almacenamiento</td><td>SSD personalizado de 825 GB</td></tr>
                    <tr><td>Resolución</td><td>Hasta 8K a 60 fps</td></tr>
                    <tr><td>Ray Tracing</td><td>Sí, acelerado por hardware</td></tr>
                    <tr><td>Audio</td><td>Tempest 3D AudioTech</td></tr>
                    <tr><td>Lector de Discos</td><td>No incluido (Edición Digital)</td></tr>
                </table>
            </div>
        </div>

        <!-- BUY BOX -->
        <div class="buy-box">
            <div class="buy-price">$499.99</div>
            <div class="delivery-info"><strong>Envío GRATIS</strong> Llegada: Jueves, 17 Oct</div>
            <div class="stock-status">✓ En stock</div>
            <div class="quantity-selector">
                <label for="quantity">Cantidad:</label>
                <select id="quantity">
                    <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
                </select>
            </div>
            <button class="btn btn-primary">Añadir al carrito</button>
            <button class="btn btn-secondary">Comprar ahora</button>
            <div class="divider"></div>
            <div style="font-size: 13px; color: #565959;">
                <strong>Vendido por:</strong> Amazon.com<br>
                <strong>Garantía:</strong> 1 año del fabricante<br>
                <strong>Devoluciones:</strong> 30 días gratis
            </div>
            <div class="secure-transaction">🔒 <a href="#">Transacción segura</a></div>
        </div>
    </div>
</div>

<script>
function changeImage(thumbnail) {
    const mainImage = document.getElementById('mainImage');
    const thumbnails = document.querySelectorAll('.thumbnail');
    mainImage.src = thumbnail.src;
    thumbnails.forEach(t => t.classList.remove('active'));
    thumbnail.classList.add('active');
}
</script>

@endsection

