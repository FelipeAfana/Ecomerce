@extends("layots.app")


<link rel="stylesheet" href="{{asset('css/style_index.css')}}">

@section("content")
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TiendaOnline - Compra en Línea</title>
    <style>
       
    </style>
</head>
<body>
    

   

    <!-- Hero Banner -->
    <section class="hero-banner">
        <div class="banner-content">
            <h1>Bienvenido a TiendaOnline</h1>
            <p>Descubre las mejores ofertas en miles de productos</p>
            <button class="cta-button">Explorar Ofertas</button>
        </div>
    </section>

    <!-- Categories -->
    <section class="categories">
        <div class="categories-grid">
            <div class="category-card">
                <h3>Electrónica</h3>
                <div class="category-image">💻</div>
                <a href="#" class="category-link">Ver más</a>
            </div>
            <div class="category-card">
                <h3>Moda</h3>
                <div class="category-image">👕</div>
                <a href="#" class="category-link">Ver más</a>
            </div>
            <div class="category-card">
                <h3>Hogar y Cocina</h3>
                <div class="category-image">🏠</div>
                <a href="#" class="category-link">Ver más</a>
            </div>
            <div class="category-card">
                <h3>Deportes</h3>
                <div class="category-image">⚽</div>
                <a href="#" class="category-link">Ver más</a>
            </div>
        </div>
    </section>

    <!-- Products -->
    <section class="products">
        <h2>Productos Destacados</h2>
        <div class="products-grid">
            <div class="product-card">
                <div class="product-image">📱</div>
                <div class="product-title">Smartphone Premium 128GB</div>
                <div class="product-rating">★★★★★ (1,234)</div>
                <div class="product-price">$599.99</div>
            </div>
            <div class="product-card">
                <div class="product-image">🎧</div>
                <div class="product-title">Audífonos Inalámbricos Bluetooth</div>
                <div class="product-rating">★★★★☆ (856)</div>
                <div class="product-price">$89.99</div>
            </div>
            <div class="product-card">
                <div class="product-image">⌚</div>
                <div class="product-title">Smartwatch Deportivo GPS</div>
                <div class="product-rating">★★★★★ (2,103)</div>
                <div class="product-price">$249.99</div>
            </div>
            <div class="product-card">
                <div class="product-image">💼</div>
                <div class="product-title">Mochila para Laptop 15"</div>
                <div class="product-rating">★★★★☆ (543)</div>
                <div class="product-price">$45.99</div>
            </div>
            <div class="product-card">
                <div class="product-image">📷</div>
                <div class="product-title">Cámara Digital 24MP</div>
                <div class="product-rating">★★★★★ (789)</div>
                <div class="product-price">$399.99</div>
            </div>
            <div class="product-card">
                <div class="product-image">🎮</div>
                <div class="product-title">Consola de Videojuegos + 2 Controles</div>
                <div class="product-rating">★★★★★ (3,456)</div>
                <div class="product-price">$499.99</div>
            </div>
        </div>
    </section>

  
</body>
</html>

@endsection

