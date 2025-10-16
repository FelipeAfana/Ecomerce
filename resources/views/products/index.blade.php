@extends("layots.app")

>
<link rel="stylesheet" href="{{asset('css/style_index.css')}}">

@section("content")
<div class="container">
        <!-- Sidebar Menu -->
        <nav class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <h2>Todas las categorías</h2>
            </div>

            <div class="menu-section">
                <div class="section-title">Productos Destacados</div>
                
                <div class="menu-item">
                    <img src="https://alfagresalfa.vtexassets.com/arquivos/ids/374636/IMG01.jpg?v=638779612906230000" alt="Lavadora">
                    <div class="item-info">
                        <div class="item-name">Lavadora Automática LG</div>
                        <div class="item-price">$899.99</div>
                        <div class="item-rating">⭐⭐⭐⭐⭐ (1,234)</div>
                    </div>
                    <span class="prime-badge">Prime</span>
                </div>

                <div class="menu-item">
                    <img src="https://panamericana.vtexassets.com/arquivos/ids/533202/consola-digital-2-juegos-ps5-711719570820.jpg?v=638448315434670000" alt="PlayStation 5">
                    <div class="item-info">
                        <div class="item-name">PlayStation 5 Console</div>
                        <div class="item-price">$499.99</div>
                        <div class="item-rating">⭐⭐⭐⭐⭐ (2,856)</div>
                    </div>
                    <span class="deal-badge">Oferta</span>
                </div>

                <div class="menu-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_AzUcT_8FkwVaiRGi7hCTJJLYX9DAmC_EGg&s" alt="Pingüino de peluche">
                    <div class="item-info">
                        <div class="item-name">Pingüino de Peluche</div>
                        <div class="item-price">$24.99</div>
                        <div class="item-rating">⭐⭐⭐⭐☆ (567)</div>
                    </div>
                    <span class="prime-badge">Prime</span>
                </div>

                <div class="menu-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvnUXzw0pz-1DYsFtECB8sxQYQqd9rR91V6A&s" alt="Silla ergonómica">
                    <div class="item-info">
                        <div class="item-name">Silla Ergonómica</div>
                        <div class="item-price">$299.99</div>
                        <div class="item-rating">⭐⭐⭐⭐☆ (892)</div>
                    </div>
                    <span class="badge">Nuevo</span>
                </div>
            </div>

            <div class="menu-section">
                <div class="section-title expandable" onclick="toggleSubmenu(this)">
                    Categorías Principales
                </div>
                <div class="category-submenu">
                    <div class="category-item">Electrodomésticos</div>
                    <div class="category-item">Videojuegos y Consolas</div>
                    <div class="category-item">Juguetes y Peluches</div>
                    <div class="category-item">Muebles y Decoración</div>
                    <div class="category-item">Electrónicos</div>
                    <div class="category-item">Hogar y Jardín</div>
                </div>
            </div>

            <div class="menu-section">
                <div class="section-title expandable" onclick="toggleSubmenu(this)">
                    Ofertas y Promociones
                </div>
                <div class="category-submenu">
                    <div class="category-item">Ofertas del Día</div>
                    <div class="category-item">Ofertas Relámpago</div>
                    <div class="category-item">Cupones</div>
                    <div class="category-item">Liquidación</div>
                </div>
            </div>

            <div class="menu-section">
                <div class="section-title">Servicios</div>
                <div class="menu-item">
                    <span>Amazon Prime</span>
                    <span class="prime-badge">Prime</span>
                </div>
                <div class="menu-item">
                    <span>Envío Gratuito</span>
                </div>
                <div class="menu-item">
                    <span>Devoluciones</span>
                </div>
                <div class="menu-item">
                    <span>Atención al Cliente</span>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="main-content">
            <button class="menu-toggle" onclick="toggleSidebar()" style="display: none;">☰</button>
            
            <div class="content-header">
                <h1>Tienda Online</h1>
                <p>Encuentra los mejores productos al mejor precio</p>
            </div>

            <div class="product-grid">
                <div class="product-card">
                    <h3>🏠 Electrodomésticos</h3>
                    <p>Lavadoras, refrigeradores, y más electrodomésticos para tu hogar con la mejor calidad y garantía.</p>
                </div>
                
                <div class="product-card">
                    <h3>🎮 Gaming</h3>
                    <p>Las últimas consolas, videojuegos y accesorios para una experiencia de juego increíble.</p>
                </div>
                
                <div class="product-card">
                    <h3>🧸 Juguetes</h3>
                    <p>Peluches adorables y juguetes educativos para niños de todas las edades.</p>
                </div>
                
                <div class="product-card">
                    <h3>🪑 Muebles</h3>
                    <p>Sillas ergonómicas, escritorios y muebles de oficina para mayor comodidad y productividad.</p>
                </div>
            </div>
        </main>
    </div>


@endsection

