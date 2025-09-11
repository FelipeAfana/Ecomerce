<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amazon Seller Central - Agregar Producto</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Amazon Ember", "Helvetica Neue", Roboto, Arial, sans-serif;
            background-color: #f3f3f3;
            color: #0f1111;
            line-height: 1.6;
        }

        .header {
            background-color: #232f3e;
            color: white;
            padding: 15px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .amazon-logo {
            font-size: 24px;
            font-weight: bold;
            color: #ff9900;
        }

        .header-title {
            font-size: 16px;
            font-weight: normal;
        }

        .breadcrumb {
            background-color: #e3e6e6;
            padding: 10px 0;
            font-size: 12px;
            color: #565959;
        }

        .breadcrumb-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .breadcrumb a {
            color: #007185;
            text-decoration: none;
        }

        .breadcrumb a:hover {
            color: #c7511f;
            text-decoration: underline;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 30px 20px;
        }

        .form-header {
            background: white;
            border: 1px solid #d5d9d9;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .form-title {
            font-size: 28px;
            font-weight: 400;
            color: #0f1111;
            margin-bottom: 8px;
        }

        .form-subtitle {
            color: #565959;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background-color: #e7e7e7;
            border-radius: 4px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #ff9900, #ffad33);
            width: 60%;
            border-radius: 4px;
            animation: progressAnimation 2s ease-out;
        }

        @keyframes progressAnimation {
            from { width: 0%; }
            to { width: 60%; }
        }

        .form-container {
            background: white;
            border: 1px solid #d5d9d9;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .form-section {
            margin-bottom: 30px;
            padding-bottom: 25px;
            border-bottom: 1px solid #e7e7e7;
        }

        .form-section:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            color: #0f1111;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-label {
            display: block;
            font-weight: 600;
            color: #0f1111;
            margin-bottom: 6px;
            font-size: 14px;
        }

        .required {
            color: #cc0c39;
            margin-left: 4px;
        }

        .form-input {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid #888c8c;
            border-radius: 4px;
            font-size: 14px;
            transition: all 0.2s ease;
            background-color: #ffffff;
        }

        .form-input:focus {
            border-color: #007185;
            box-shadow: 0 0 0 3px rgba(0, 113, 133, 0.1);
            outline: none;
        }

        .form-input:hover {
            border-color: #007185;
        }

        .form-textarea {
            min-height: 100px;
            resize: vertical;
            font-family: inherit;
        }

        .form-select {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid #888c8c;
            border-radius: 4px;
            font-size: 14px;
            background-color: #ffffff;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .form-select:focus {
            border-color: #007185;
            box-shadow: 0 0 0 3px rgba(0, 113, 133, 0.1);
            outline: none;
        }

        .form-select:hover {
            border-color: #007185;
        }

        .help-text {
            font-size: 12px;
            color: #565959;
            margin-top: 4px;
            line-height: 1.4;
        }

        .input-group {
            display: flex;
            gap: 15px;
        }

        .input-group .form-group {
            flex: 1;
        }

        .price-input {
            position: relative;
        }

        .currency-symbol {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #565959;
            font-weight: 600;
            z-index: 2;
        }

        .price-input .form-input {
            padding-left: 28px;
        }

        .button-group {
            display: flex;
            gap: 15px;
            justify-content: flex-end;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e7e7e7;
        }

        .btn {
            padding: 10px 16px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            border: 1px solid;
            min-width: 100px;
            text-align: center;
        }

        .btn-primary {
            background-color: #ff9900;
            border-color: #ff9900;
            color: #0f1111;
        }

        .btn-primary:hover {
            background-color: #fa8900;
            border-color: #fa8900;
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(255, 153, 0, 0.3);
        }

        .btn-secondary {
            background-color: #ffffff;
            border-color: #d5d9d9;
            color: #0f1111;
        }

        .btn-secondary:hover {
            background-color: #f7f8f8;
            border-color: #007185;
        }

        .info-box {
            background-color: #e8f4f8;
            border: 1px solid #007eb9;
            border-left: 4px solid #007185;
            border-radius: 4px;
            padding: 15px;
            margin: 20px 0;
            font-size: 13px;
            color: #0f1111;
        }

        .info-icon {
            color: #007185;
            font-weight: bold;
            margin-right: 8px;
        }

        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-top: 10px;
        }

        .category-option {
            border: 1px solid #d5d9d9;
            border-radius: 6px;
            padding: 15px;
            cursor: pointer;
            transition: all 0.2s ease;
            text-align: center;
        }

        .category-option:hover {
            border-color: #007185;
            background-color: #f0f8ff;
        }

        .category-option.selected {
            border-color: #ff9900;
            background-color: #fff8e7;
        }

        .category-icon {
            font-size: 24px;
            margin-bottom: 8px;
            display: block;
        }

        .category-name {
            font-size: 13px;
            font-weight: 600;
            color: #0f1111;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 20px 10px;
            }

            .form-container {
                padding: 20px;
            }

            .input-group {
                flex-direction: column;
                gap: 0;
            }

            .button-group {
                flex-direction: column;
            }

            .category-grid {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                gap: 10px;
            }

            .header-content {
                padding: 0 10px;
            }

            .breadcrumb-content {
                padding: 0 10px;
            }
        }

        /* Loading animation */
        .loading {
            opacity: 0.6;
            pointer-events: none;
        }

        .form-input.error {
            border-color: #cc0c39;
            background-color: #fff5f5;
        }

        .error-message {
            color: #cc0c39;
            font-size: 12px;
            margin-top: 4px;
        }

        .success-message {
            color: #007600;
            font-size: 12px;
            margin-top: 4px;
        }
    </style>
</head>
<body>
    <!-- Amazon Header -->
    <header class="header">
        <div class="header-content">
            <div class="amazon-logo">amazon</div>
            <div class="header-title">Seller Central</div>
        </div>
    </header>

    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <div class="breadcrumb-content">
            <a href="#">Inicio</a> > <a href="#">Inventario</a> > <a href="#">Agregar producto</a> > Información del producto
        </div>
    </div>

    <div class="container">
        <!-- Form Header -->
        <div class="form-header">
            <h1 class="form-title">Agregar nuevo producto</h1>
            <p class="form-subtitle">Complete toda la información requerida para listar su producto en Amazon</p>
            <div class="progress-bar">
                <div class="progress-fill"></div>
            </div>
            <div style="font-size: 12px; color: #565959; margin-top: 8px;">
                Paso 2 de 3: Información del producto
            </div>
        </div>

        <!-- Main Form -->
        <div class="form-container">
            <form action="" method="post" id="productForm">
                
                <!-- Información Básica -->
                <div class="form-section">
                    <h2 class="section-title">
                        📝 Información básica del producto
                    </h2>

                    <div class="form-group">
                        <label for="nombre" class="form-label">
                            Nombre del producto<span class="required">*</span>
                        </label>
                        <input type="text" id="nombre" name="nombre" class="form-input" placeholder="Ej: iPhone 15 Pro Max 256GB Titanio Natural" maxlength="200" required>
                        <div class="help-text">Incluya marca, modelo y características principales (máx. 200 caracteres)</div>
                    </div>

                    <div class="form-group">
                        <label for="descripcion" class="form-label">
                            Descripción detallada<span class="required">*</span>
                        </label>
                        <textarea id="descripcion" name="descripcion" class="form-input form-textarea" placeholder="Describa las características, beneficios y especificaciones técnicas del producto..." required></textarea>
                        <div class="help-text">Proporcione una descripción completa que ayude a los clientes a entender el producto</div>
                    </div>
                </div>

                <!-- Categoría del Producto -->
                <div class="form-section">
                    <h2 class="section-title">
                        📂 Categoría del producto
                    </h2>

                    <div class="form-group">
                        <label class="form-label">
                            Seleccione la categoría principal<span class="required">*</span>
                        </label>
                        <div class="category-grid">
                            <div class="category-option" onclick="selectCategory(this, 'electrodomesticos')">
                                <span class="category-icon">🏠</span>
                                <div class="category-name">Electrodomésticos</div>
                            </div>
                            <div class="category-option" onclick="selectCategory(this, 'gaming')">
                                <span class="category-icon">🎮</span>
                                <div class="category-name">Gaming & Consolas</div>
                            </div>
                            <div class="category-option" onclick="selectCategory(this, 'juguetes')">
                                <span class="category-icon">🧸</span>
                                <div class="category-name">Juguetes</div>
                            </div>
                            <div class="category-option" onclick="selectCategory(this, 'muebles')">
                                <span class="category-icon">🪑</span>
                                <div class="category-name">Muebles</div>
                            </div>
                            <div class="category-option" onclick="selectCategory(this, 'electronica')">
                                <span class="category-icon">📱</span>
                                <div class="category-name">Electrónicos</div>
                            </div>
                            <div class="category-option" onclick="selectCategory(this, 'otros')">
                                <span class="category-icon">📦</span>
                                <div class="category-name">Otros</div>
                            </div>
                        </div>
                        <input type="hidden" id="categoria" name="categoria" required>
                        <div class="help-text">Seleccione la categoría que mejor describa su producto</div>
                    </div>

                    <div class="form-group">
                        <label for="subcategoria" class="form-label">Subcategoría</label>
                        <select id="subcategoria" name="subcategoria" class="form-select">
                            <option value="">Primero seleccione una categoría principal</option>
                        </select>
                        <div class="help-text">La subcategoría ayuda a los clientes a encontrar su producto más fácilmente</div>
                    </div>
                </div>

                <!-- Información Comercial -->
                <div class="form-section">
                    <h2 class="section-title">
                        💰 Información comercial
                    </h2>

                    <div class="input-group">
                        <div class="form-group">
                            <label for="marca" class="form-label">
                                Marca<span class="required">*</span>
                            </label>
                            <input type="text" id="marca" name="marca" class="form-input" placeholder="Ej: Apple, Samsung, Sony" required>
                            <div class="help-text">Nombre oficial de la marca del producto</div>
                        </div>

                        <div class="form-group">
                            <label for="precio" class="form-label">
                                Precio<span class="required">*</span>
                            </label>
                            <div class="price-input">
                                <span class="currency-symbol">$</span>
                                <input type="number" id="precio" name="precio" class="form-input" placeholder="0.00" step="0.01" min="0" required>
                            </div>
                            <div class="help-text">Precio de venta al público (USD)</div>
                        </div>
                    </div>

                    <div class="info-box">
                        <span class="info-icon">💡</span>
                        <strong>Consejo de precios:</strong> Investigue precios de productos similares para mantenerse competitivo. Considere costos de envío y comisiones de Amazon.
                    </div>
                </div>

                <!-- Imágenes del Producto -->
                <div class="form-section">
                    <h2 class="section-title">
                        📸 Imágenes del producto
                    </h2>

                    <div class="form-group">
                        <label for="imagen" class="form-label">
                            URL de la imagen principal<span class="required">*</span>
                        </label>
                        <input type="url" id="imagen" name="imagen" class="form-input" placeholder="https://ejemplo.com/imagen-producto.jpg" required>
                        <div class="help-text">URL de la imagen principal del producto (formato JPG, PNG. Resolución mínima: 1000x1000px)</div>
                    </div>

                    <div class="info-box">
                        <span class="info-icon">📷</span>
                        <strong>Requisitos de imagen:</strong> Use imágenes de alta calidad con fondo blanco. La imagen principal debe mostrar solo el producto sin texto adicional.
                    </div>
                </div>

                <!-- Buttons -->
                <div class="button-group">
                    <button type="button" class="btn btn-secondary" onclick="saveDraft()">
                        Guardar borrador
                    </button>
                    <button type="button" class="btn btn-secondary" onclick="previewProduct()">
                        Vista previa
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Continuar al siguiente paso
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Subcategorías por categoría
        const subcategorias = {
            electrodomesticos: [
                'Lavadoras y secadoras',
                'Refrigeradores',
                'Cocinas y hornos',
                'Lavavajillas',
                'Aspiradoras',
                'Pequeños electrodomésticos'
            ],
            gaming: [
                'Consolas',
                'Videojuegos',
                'Accesorios gaming',
                'PC Gaming',
                'Gaming chairs',
                'Auriculares gaming'
            ],
            juguetes: [
                'Peluches',
                'Juegos educativos',
                'Juguetes electrónicos',
                'Juegos de mesa',
                'Muñecas y figuras',
                'Juguetes al aire libre'
            ],
            muebles: [
                'Sillas de oficina',
                'Escritorios',
                'Sofás y sillones',
                'Mesas',
                'Almacenamiento',
                'Decoración'
            ],
            electronica: [
                'Smartphones',
                'Laptops y tablets',
                'Audio y video',
                'Cámaras',
                'Accesorios electrónicos',
                'Wearables'
            ],
            otros: [
                'Hogar y jardín',
                'Deportes',
                'Salud y belleza',
                'Automotriz',
                'Libros',
                'Otros productos'
            ]
        };

        function selectCategory(element, categoryValue) {
            // Remove selection from all categories
            document.querySelectorAll('.category-option').forEach(option => {
                option.classList.remove('selected');
            });
            
            // Select clicked category
            element.classList.add('selected');
            document.getElementById('categoria').value = categoryValue;
            
            // Update subcategories
            updateSubcategories(categoryValue);
        }

        function updateSubcategories(category) {
            const subcategorySelect = document.getElementById('subcategoria');
            subcategorySelect.innerHTML = '<option value="">Seleccione una subcategoría</option>';
            
            if (subcategorias[category]) {
                subcategorias[category].forEach(subcategory => {
                    const option = document.createElement('option');
                    option.value = subcategory.toLowerCase().replace(/\s+/g, '-');
                    option.textContent = subcategory;
                    subcategorySelect.appendChild(option);
                });
            }
        }

        function saveDraft() {
            const formData = new FormData(document.getElementById('productForm'));
            // Simulate saving draft
            showMessage('Borrador guardado exitosamente', 'success');
        }

        function previewProduct() {
            // Validate required fields
            if (validateForm()) {
                // Simulate preview
                showMessage('Abriendo vista previa del producto...', 'success');
            }
        }

        function validateForm() {
            const requiredFields = document.querySelectorAll('input[required], textarea[required], select[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('error');
                    showFieldError(field, 'Este campo es requerido');
                    isValid = false;
                } else {
                    field.classList.remove('error');
                    clearFieldError(field);
                }
            });

            // Check if category is selected
            if (!document.getElementById('categoria').value) {
                showMessage('Por favor seleccione una categoría', 'error');
                isValid = false;
            }
            
            return isValid;
        }

        function showFieldError(field, message) {
            // Remove existing error message
            clearFieldError(field);
            
            const errorDiv = document.createElement('div');
            errorDiv.className = 'error-message';
            errorDiv.textContent = message;
            field.parentNode.appendChild(errorDiv);
        }

        function clearFieldError(field) {
            const existingError = field.parentNode.querySelector('.error-message');
            if (existingError) {
                existingError.remove();
            }
        }

        function showMessage(message, type) {
            // Create temporary message
            const messageDiv = document.createElement('div');
            messageDiv.className = type === 'success' ? 'success-message' : 'error-message';
            messageDiv.textContent = message;
            messageDiv.style.position = 'fixed';
            messageDiv.style.top = '20px';
            messageDiv.style.right = '20px';
            messageDiv.style.padding = '15px 20px';
            messageDiv.style.backgroundColor = type === 'success' ? '#d4edda' : '#f8d7da';
            messageDiv.style.border = '1px solid ' + (type === 'success' ? '#c3e6cb' : '#f5c6cb');
            messageDiv.style.borderRadius = '4px';
            messageDiv.style.zIndex = '1000';
            
            document.body.appendChild(messageDiv);
            
            // Remove after 3 seconds
            setTimeout(() => {
                messageDiv.remove();
            }, 3000);
        }

        // Form submission
        document.getElementById('productForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (validateForm()) {
                // Simulate form submission
                document.body.classList.add('loading');
                showMessage('Procesando información del producto...', 'success');
                
                setTimeout(() => {
                    document.body.classList.remove('loading');
                    showMessage('¡Producto agregado exitosamente!', 'success');
                }, 2000);
            }
        });

        // Real-time validation
        document.querySelectorAll('.form-input').forEach(input => {
            input.addEventListener('blur', function() {
                if (this.hasAttribute('required') && !this.value.trim()) {
                    this.classList.add('error');
                    showFieldError(this, 'Este campo es requerido');
                } else {
                    this.classList.remove('error');
                    clearFieldError(this);
                }
            });
        });
    </script>
</body>
</html>