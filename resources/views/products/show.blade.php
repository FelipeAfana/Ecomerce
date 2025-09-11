<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayStation 5 Digital Edition - Detalles del Producto</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Amazon Ember", Arial, sans-serif;
            background-color: #ffffff;
            color: #0f1111;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .breadcrumb {
            font-size: 12px;
            color: #565959;
            margin-bottom: 20px;
        }

        .breadcrumb a {
            color: #007185;
            text-decoration: none;
        }

        .breadcrumb a:hover {
            color: #c7511f;
            text-decoration: underline;
        }

        .product-main {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        .product-images {
            position: relative;
        }

        .main-image {
            width: 100%;
            border-radius: 10px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }

        .thumbnail-gallery {
            display: flex;
            gap: 10px;
            overflow-x: auto;
        }

        .thumbnail {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border: 2px solid #ddd;
            border-radius: 5px;
            cursor: pointer;
            transition: border-color 0.3s ease;
        }

        .thumbnail.active,
        .thumbnail:hover {
            border-color: #ff9900;
        }

        .product-info {
            padding-left: 20px;
        }

        .product-title {
            font-size: 24px;
            font-weight: 400;
            color: #0f1111;
            margin-bottom: 10px;
            line-height: 1.3;
        }

        .brand {
            color: #007185;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .brand a {
            color: inherit;
            text-decoration: none;
        }

        .rating-section {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }

        .stars {
            color: #ffa500;
            font-size: 16px;
        }

        .rating-text {
            color: #007185;
            font-size: 14px;
            text-decoration: none;
        }

        .rating-count {
            color: #565959;
            font-size: 14px;
        }

        .price-section {
            margin: 20px 0;
            padding: 15px 0;
            border-bottom: 1px solid #e7e7e7;
        }

        .price {
            font-size: 28px;
            color: #b12704;
            font-weight: 400;
        }

        .original-price {
            color: #565959;
            text-decoration: line-through;
            font-size: 14px;
            margin-right: 10px;
        }

        .savings {
            color: #cc0c39;
            font-size: 14px;
            font-weight: 700;
        }

        .prime-banner {
            background-color: #e8f5fa;
            border: 1px solid #007eb9;
            border-radius: 5px;
            padding: 10px;
            margin: 15px 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .prime-logo {
            background: #00a8cc;
            color: white;
            padding: 3px 8px;
            border-radius: 3px;
            font-size: 12px;
            font-weight: bold;
        }

        .availability {
            color: #007600;
            font-size: 18px;
            font-weight: 700;
            margin: 10px 0;
        }

        .delivery-info {
            background-color: #f7f8f8;
            border: 1px solid #d5d9d9;
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
        }

        .add-to-cart-section {
            background-color: #f7f8f8;
            border: 1px solid #d5d9d9;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }

        .quantity-selector {
            margin-bottom: 15px;
        }

        .quantity-selector select {
            padding: 8px;
            border: 1px solid #888c8c;
            border-radius: 3px;
            margin-left: 10px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 400;
            transition: all 0.2s ease;
            width: 100%;
            margin-bottom: 10px;
        }

        .btn-primary {
            background-color: #ff9900;
            color: #0f1111;
        }

        .btn-primary:hover {
            background-color: #fa8900;
        }

        .btn-secondary {
            background-color: #ffa41c;
            color: #0f1111;
        }

        .btn-secondary:hover {
            background-color: #ff8f00;
        }

        .product-details {
            margin-top: 40px;
        }

        .details-tabs {
            display: flex;
            border-bottom: 1px solid #ddd;
            margin-bottom: 20px;
        }

        .tab-button {
            padding: 15px 20px;
            border: none;
            background: none;
            font-size: 16px;
            cursor: pointer;
            border-bottom: 2px solid transparent;
            transition: all 0.3s ease;
        }

        .tab-button.active {
            border-bottom-color: #ff9900;
            color: #ff9900;
            font-weight: 600;
        }

        .tab-content {
            display: none;
            animation: fadeIn 0.3s ease;
        }

        .tab-content.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .specs-grid {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 10px;
            margin-bottom: 10px;
        }

        .spec-label {
            font-weight: 600;
            color: #565959;
        }

        .spec-value {
            color: #0f1111;
        }

        .features-list {
            list-style: none;
            padding: 0;
        }

        .features-list li {
            padding: 10px 0;
            border-bottom: 1px solid #f0f0f0;
            position: relative;
            padding-left: 25px;
        }

        .features-list li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #007600;
            font-weight: bold;
        }

        .highlight-box {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
        }

        .highlight-box h3 {
            margin-bottom: 10px;
        }

        .badge-container {
            display: flex;
            gap: 10px;
            margin: 15px 0;
        }

        .badge {
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 12px;
            font-weight: bold;
        }

        .badge-bestseller {
            background-color: #ff4757;
            color: white;
        }

        .badge-choice {
            background-color: #ff6b35;
            color: white;
        }

        .badge-new {
            background-color: #5f27cd;
            color: white;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }

            .product-main {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .product-info {
                padding-left: 0;
            }

            .product-title {
                font-size: 20px;
            }

            .details-tabs {
                overflow-x: auto;
            }

            .tab-button {
                white-space: nowrap;
                min-width: 120px;
            }
        }

        .related-products {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #e7e7e7;
        }

        .related-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .related-item {
            border: 1px solid #e7e7e7;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .related-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .related-item img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <a href="#">Inicio</a> > <a href="#">Videojuegos</a> > <a href="#">Consolas</a> > <a href="#">PlayStation</a> > PlayStation 5 Digital Edition
        </div>

        <!-- Product Main Section -->
        <div class="product-main">
            <!-- Product Images -->
            <div class="product-images">
                <img id="mainImage" class="main-image" src="https://panamericana.vtexassets.com/arquivos/ids/533202/consola-digital-2-juegos-ps5-711719570820.jpg?v=638448315434670000" alt="PlayStation 5 Digital Edition">
                
                <div class="thumbnail-gallery">
                    <img class="thumbnail active" src="https://panamericana.vtexassets.com/arquivos/ids/533202/consola-digital-2-juegos-ps5-711719570820.jpg?v=638448315434670000" alt="PS5 Vista Principal" onclick="changeImage(this.src)">
                    <img class="thumbnail" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvGJ8bV8UsJqVVchK8h0mqWX4EI1pCZ_2Xxw&s" alt="PS5 Lateral" onclick="changeImage(this.src)">
                    <img class="thumbnail" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9qjKrI6SxGnVQ8LPpH-4Sq5wQFYpXu3WZYQ&s" alt="PS5 DualSense" onclick="changeImage(this.src)">
                    <img class="thumbnail" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmTbmNqLrKuFLT8Sxb4X8y2N2lZJ5lYJ7NmA&s" alt="PS5 Accesorios" onclick="changeImage(this.src)">
                </div>
            </div>

            <!-- Product Info -->
            <div class="product-info">
                <div class="brand">Marca: <a href="#">PlayStation</a></div>
                
                <h1 class="product-title">PlayStation 5 Digital Edition Console - SSD Ultra-rápido 825GB, GPU AMD con Ray Tracing, Audio 3D, 4K/8K Gaming, 120Hz, DualSense Controller</h1>

                <div class="badge-container">
                    <span class="badge badge-bestseller">#1 Más Vendido</span>
                    <span class="badge badge-choice">Elección de Amazon</span>
                    <span class="badge badge-new">Nuevo</span>
                </div>

                <div class="rating-section">
                    <div class="stars">⭐⭐⭐⭐⭐</div>
                    <a href="#" class="rating-text">4.8 de 5 estrellas</a>
                    <span class="rating-count">2,856 calificaciones</span>
                </div>

                <div class="price-section">
                    <span class="original-price">$599.99</span>
                    <span class="price">$499.99</span>
                    <div class="savings">Ahorras $100.00 (17%)</div>
                </div>

                <div class="prime-banner">
                    <span class="prime-logo">prime</span>
                    <span>Envío GRATIS con Prime. Detalles</span>
                </div>

                <div class="availability">En stock</div>

                <div class="delivery-info">
                    <strong>Envío:</strong> Llegará el martes, 17 de septiembre<br>
                    <strong>Entrega más rápida:</strong> Mañana 11 AM - 3 PM. Ordena en las próximas 4 horas
                </div>

                <div class="add-to-cart-section">
                    <div class="quantity-selector">
                        <label for="quantity">Cantidad:</label>
                        <select id="quantity">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    
                    <button class="btn btn-primary">Agregar al carrito</button>
                    <button class="btn btn-secondary">Comprar ahora</button>
                    
                    <div style="font-size: 12px; color: #565959; margin-top: 10px;">
                        🔒 Transacción segura<br>
                        📦 Enviado por Amazon<br>
                        ↩️ Devoluciones gratuitas
                    </div>
                </div>
            </div>
        </div>

        <div class="highlight-box">
            <h3>🎮 Experimenta la Próxima Generación del Gaming</h3>
            <p>Disfruta de tiempos de carga ultrarrápidos con el SSD de alta velocidad, una inmersión más profunda con retroalimentación háptica y audio 3D, además de una nueva generación de increíbles juegos PlayStation®.</p>
        </div>

        <!-- Product Details Tabs -->
        <div class="product-details">
            <div class="details-tabs">
                <button class="tab-button active" onclick="openTab(event, 'specifications')">Especificaciones</button>
                <button class="tab-button" onclick="openTab(event, 'features')">Características</button>
                <button class="tab-button" onclick="openTab(event, 'description')">Descripción</button>
                <button class="tab-button" onclick="openTab(event, 'reviews')">Reseñas</button>
            </div>

            <!-- Specifications Tab -->
            <div id="specifications" class="tab-content active">
                <h3>Especificaciones Técnicas</h3>
                <div class="specs-grid">
                    <div class="spec-label">CPU</div>
                    <div class="spec-value">AMD Zen 2, 8 núcleos, 3.5 GHz</div>
                    
                    <div class="spec-label">GPU</div>
                    <div class="spec-value">AMD RDNA 2, Ray Tracing, 10.28 TFLOPs</div>
                    
                    <div class="spec-label">RAM</div>
                    <div class="spec-value">16 GB GDDR6</div>
                    
                    <div class="spec-label">Almacenamiento</div>
                    <div class="spec-value">SSD NVMe personalizado de 825 GB</div>
                    
                    <div class="spec-label">Resolución</div>
                    <div class="spec-value">4K UHD, hasta 8K</div>
                    
                    <div class="spec-label">Frame Rate</div>
                    <div class="spec-value">Hasta 120 fps</div>
                    
                    <div class="spec-label">Audio</div>
                    <div class="spec-value">Audio 3D "Tempest" Engine</div>
                    
                    <div class="spec-label">Conectividad</div>
                    <div class="spec-value">Wi-Fi 6, Bluetooth 5.1, USB-A, USB-C</div>
                    
                    <div class="spec-label">Dimensiones</div>
                    <div class="spec-value">390 x 104 x 260 mm</div>
                    
                    <div class="spec-label">Peso</div>
                    <div class="spec-value">3.9 kg</div>
                </div>
            </div>

            <!-- Features Tab -->
            <div id="features" class="tab-content">
                <h3>Características Principales</h3>
                <ul class="features-list">
                    <li><strong>SSD Ultra-rápido:</strong> Los tiempos de carga se reducen drasticamente con el SSD personalizado de alta velocidad</li>
                    <li><strong>Ray Tracing en Tiempo Real:</strong> Gráficos más realistas con iluminación y reflejos naturales</li>
                    <li><strong>Audio 3D Immersivo:</strong> Experimenta sonido envolvente desde todas las direcciones</li>
                    <li><strong>DualSense Controller:</strong> Retroalimentación háptica y gatillos adaptativos para mayor inmersión</li>
                    <li><strong>Retrocompatibilidad:</strong> Juega miles de títulos de PS4 con mejoras</li>
                    <li><strong>Gaming 4K/8K:</strong> Resolución ultra alta definición hasta 8K</li>
                    <li><strong>120 FPS:</strong> Frame rate súper suave para gaming competitivo</li>
                    <li><strong>Edición Digital:</strong> Todo tu contenido en formato digital, sin discos</li>
                    <li><strong>PlayStation Plus:</strong> Acceso a biblioteca de juegos exclusivos</li>
                    <li><strong>Streaming 4K:</strong> Disfruta contenido multimedia en ultra alta definición</li>
                </ul>
            </div>

            <!-- Description Tab -->
            <div id="description" class="tab-content">
                <h3>Descripción del Producto</h3>
                <p>La PlayStation 5 Digital Edition redefine lo que significa ser una consola de videojuegos. Con tecnología de vanguardia, esta consola ofrece una experiencia de juego completamente inmersiva que te transportará a mundos virtuales como nunca antes.</p>
                
                <p><strong>Rendimiento Revolucionario:</strong> El procesador AMD Zen 2 de 8 núcleos y la GPU AMD RDNA 2 con Ray Tracing hardware proporcionan un rendimiento excepcional, permitiendo gráficos fotorrealistas y tiempos de carga casi instantáneos.</p>
                
                <p><strong>Experiencia Sensorial Completa:</strong> El controlador DualSense wireless introduce retroalimentación háptica avanzada y gatillos adaptativos que te permiten sentir la tensión de cada acción. Combinado con el audio 3D Tempest Engine, cada juego cobra vida de manera extraordinaria.</p>
                
                <p><strong>Biblioteca Infinita:</strong> Como edición digital, tienes acceso instantáneo a miles de juegos a través de PlayStation Store, además de retrocompatibilidad con la mayoría de títulos de PS4, muchos de ellos con mejoras de rendimiento.</p>
                
                <p><strong>Diseño Futurista:</strong> Su distintivo diseño blanco y negro no solo es visualmente impactante, sino también funcional, optimizado para el flujo de aire y la refrigeración silenciosa.</p>
            </div>

            <!-- Reviews Tab -->
            <div id="reviews" class="tab-content">
                <h3>Reseñas de Clientes</h3>
                <div style="border: 1px solid #e7e7e7; border-radius: 8px; padding: 20px; margin: 15px 0;">
                    <div class="rating-section">
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <strong>Gaming extraordinario</strong>
                    </div>
                    <p><em>"Los tiempos de carga son increíbles, literalmente segundos para cargar juegos que antes tomaban minutos. Los gráficos son impresionantes y el DualSense realmente cambia la experiencia de juego."</em></p>
                    <small>Por Carlos M. - Verificado</small>
                </div>
                
                <div style="border: 1px solid #e7e7e7; border-radius: 8px; padding: 20px; margin: 15px 0;">
                    <div class="rating-section">
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <strong>Valió la pena la espera</strong>
                    </div>
                    <p><em>"La diferencia con PS4 es abismal. El ray tracing hace que los juegos se vean increíbles y el audio 3D es una experiencia completamente nueva. 100% recomendada."</em></p>
                    <small>Por Ana L. - Verificado</small>
                </div>
                
                <div style="border: 1px solid #e7e7e7; border-radius: 8px; padding: 20px; margin: 15px 0;">
                    <div class="rating-section">
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <strong>Perfecta para gaming digital</strong>
                    </div>
                    <p><em>"Como alguien que compra todos los juegos digitalmente, esta versión es perfecta. Sin ruido de disco, más espacio, y todos mis juegos siempre disponibles."</em></p>
                    <small>Por Miguel R. - Verificado</small>
                </div>
            </div>
        </div>

        <!-- Related Products -->
        <div class="related-products">
            <h3>Productos relacionados</h3>
            <div class="related-grid">
                <div class="related-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvnUXzw0pz-1DYsFtECB8sxQYQqd9rR91V6A&s" alt="Silla Gaming">
                    <h4>Silla Gaming Ergonómica</h4>
                    <div class="price">$299.99</div>
                </div>
                
                <div class="related-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_AzUcT_8FkwVaiRGi7hCTJJLYX9DAmC_EGg&s" alt="Peluche">
                    <h4>Pingüino de Peluche</h4>
                    <div class="price">$24.99</div>
                </div>
                
                <div class="related-item">
                    <img src="https://alfagresalfa.vtexassets.com/arquivos/ids/374636/IMG01.jpg?v=638779612906230000" alt="Lavadora">
                    <h4>Lavadora Automática</h4>
                    <div class="price">$899.99</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function changeImage(newSrc) {
            document.getElementById('mainImage').src = newSrc;
            
            // Update active thumbnail
            document.querySelectorAll('.thumbnail').forEach(thumb => {
                thumb.classList.remove('active');
            });
            event.target.classList.add('active');
        }

        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            
            // Hide all tab content
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].classList.remove("active");
            }
            
            // Remove active class from all tab buttons
            tablinks = document.getElementsByClassName("tab-button");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].classList.remove("active");
            }
            
            // Show the selected tab content and mark button as active
            document.getElementById(tabName).classList.add("active");
            evt.currentTarget.classList.add("active");
        }

        // Smooth scroll for internal links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>