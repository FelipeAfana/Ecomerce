@extends("layots.app")


@section("css")
<style>
        * {
            margin: 0
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Amazon Ember", Arial, sans-serif;
            background-color: #f3f3f3;
            color: #0f1111;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 320px;
            background-color: #232f3e;
            color: white;
            overflow-y: auto;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            height: 100vh;
            z-index: 1000;
        }

        .sidebar-header {
            background-color: #37475a;
            padding: 20px;
            border-bottom: 1px solid #3a4553;
        }

        .sidebar-header h2 {
            font-size: 18px;
            font-weight: 700;
            display: flex;
            align-items: center;
        }

        .sidebar-header::before {
            content: "☰";
            margin-right: 10px;
            font-size: 20px;
        }

        .menu-section {
            border-bottom: 1px solid #3a4553;
        }

        .section-title {
            padding: 15px 20px;
            background-color: #37475a;
            font-size: 16px;
            font-weight: 700;
            border-bottom: 1px solid #3a4553;
        }

        .menu-item {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            text-decoration: none;
            color: #cccccc;
            transition: all 0.2s ease;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            cursor: pointer;
        }

        .menu-item:hover {
            background-color: #37475a;
            color: #ffffff;
            padding-left: 25px;
        }

        .menu-item img {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 6px;
            margin-right: 15px;
            border: 1px solid #3a4553;
        }

        .item-info {
            flex: 1;
        }

        .item-name {
            font-size: 14px;
            font-weight: 400;
            margin-bottom: 2px;
        }

        .item-price {
            font-size: 16px;
            font-weight: 700;
            color: #ff9900;
        }

        .item-rating {
            font-size: 12px;
            color: #ffa500;
            margin-top: 2px;
        }

        .prime-badge {
            background-color: #00a8cc;
            color: white;
            font-size: 10px;
            padding: 2px 6px;
            border-radius: 3px;
            margin-left: 8px;
        }

        /* Main content */
        .main-content {
            margin-left: 320px;
            padding: 20px;
            flex: 1;
            background-color: #ffffff;
        }

        .content-header {
            background: linear-gradient(135deg, #232f3e, #37475a);
            color: white;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
            text-align: center;
        }

        .content-header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            font-weight: 300;
        }

        .content-header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .product-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        /* Categories submenu */
        .category-submenu {
            background-color: #2a3441;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .category-submenu.active {
            max-height: 300px;
        }

        .category-item {
            padding: 10px 40px;
            font-size: 13px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .category-item:hover {
            background-color: #37475a;
        }

        .expandable {
            position: relative;
        }

        .expandable::after {
            content: "▶";
            position: absolute;
            right: 20px;
            transition: transform 0.3s ease;
            font-size: 12px;
        }

        .expandable.active::after {
            transform: rotate(90deg);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                width: 280px;
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
            }

            .menu-toggle {
                position: fixed;
                top: 20px;
                left: 20px;
                background: #232f3e;
                color: white;
                border: none;
                padding: 10px;
                border-radius: 5px;
                cursor: pointer;
                z-index: 1001;
            }
        }

        .badge {
            background-color: #ff4757;
            color: white;
            font-size: 10px;
            padding: 2px 6px;
            border-radius: 10px;
            margin-left: auto;
        }

        .deal-badge {
            background-color: #ff6b35;
            color: white;
            font-size: 10px;
            padding: 2px 6px;
            border-radius: 3px;
            margin-left: 5px;
        }
    </style>
@endsection

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

