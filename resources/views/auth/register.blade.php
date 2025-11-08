@extends('layots.app')

@section('content')

<style>
.auth-container {
    min-height: 100vh;
    background: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 2rem;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.auth-wrapper {
    width: 100%;
    max-width: 550px;
}

.auth-card {
    background: white;
    border: 4px solid #000000;
    border-radius: 30px;
    padding: 2.5rem 3rem;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
}

.auth-logo {
    text-align: center;
    margin-bottom: 1.5rem;
}

.auth-logo img {
    height: 100px;
    width: auto;
}

.auth-title {
    text-align: center;
    color: #000000;
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 2rem;
}

.auth-form {
    width: 100%;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-label {
    display: block;
    color: #000000;
    font-weight: 600;
    font-size: 0.95rem;
    margin-bottom: 0.5rem;
}

.form-input {
    width: 100%;
    padding: 0.75rem 1rem;
    border: 2px solid #ddd;
    border-radius: 8px;
    font-size: 0.95rem;
    transition: all 0.3s ease;
    background: white;
}

.form-input:focus {
    outline: none;
    border-color: #000000;
    box-shadow: 0 0 0 3px rgba(124, 47, 230, 0.1);
}

.form-input.is-invalid {
    border-color: #dc3545;
}

.form-input::placeholder {
    color: #999;
}

.error-message {
    display: block;
    color: #dc3545;
    font-size: 0.85rem;
    margin-top: 0.5rem;
}

.form-check-group {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 1.5rem;
}

.form-checkbox {
    width: 18px;
    height: 18px;
    cursor: pointer;
    accent-color: #7C2FE6;
}

.form-check-label {
    color: #666;
    font-size: 0.9rem;
    cursor: pointer;
    user-select: none;
}

.form-actions {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    align-items: center;
}

.btn-submit {
    width: 100%;
    max-width: 280px;
    background: #c1baba;
    color: #333;
    border: none;
    padding: 0.9rem 2rem;
    border-radius: 25px;
    font-weight: 700;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(160, 255, 63, 0.3);
}

.btn-submit:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(160, 255, 63, 0.4);
    filter: brightness(1.05);
}

.btn-submit:active {
    transform: translateY(0);
}

.link-forgot {
    color: #000000;
    text-decoration: none;
    font-size: 0.9rem;
    transition: color 0.3s ease;
}

.link-forgot:hover {
    color: #000000;
    text-decoration: underline;
}

/* Responsive */
@media (max-width: 640px) {
    .auth-card {
        padding: 2rem 1.5rem;
    }

    .auth-title {
        font-size: 1.6rem;
    }

    .auth-logo img {
        height: 80px;
    }

    .form-group {
        margin-bottom: 1.2rem;
    }
}
</style>
<div class="auth-container">
    <div class="auth-wrapper">
        <div class="auth-card">
         
            <!-- Título -->
            <h2 class="auth-title">Registrarse</h2>

            <!-- Formulario -->
            <form method="POST" action="{{ route('register') }}" class="auth-form">
                @csrf

                <!-- Nombre -->
                <div class="form-group">
                    <label for="name" class="form-label">Nombre:</label>
                    <input 
                        id="name" 
                        type="text" 
                        class="form-input @error('name') is-invalid @enderror" 
                        name="name" 
                        value="{{ old('name') }}" 
                        placeholder="Tu nombre completo"
                        required 
                        autocomplete="name" 
                        autofocus
                    >
                    @error('name')
                        <span class="error-message">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email" class="form-label">Correo Electrónico:</label>
                    <input 
                        id="email" 
                        type="email" 
                        class="form-input @error('email') is-invalid @enderror" 
                        name="email" 
                        value="{{ old('email') }}" 
                        placeholder="Ejemplo@gmail.com"
                        required 
                        autocomplete="email"
                    >
                    @error('email')
                        <span class="error-message">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input 
                        id="password" 
                        type="password" 
                        class="form-input @error('password') is-invalid @enderror" 
                        name="password"
                        placeholder="**********"
                        required 
                        autocomplete="new-password"
                    >
                    @error('password')
                        <span class="error-message">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <label for="password-confirm" class="form-label">Confirmar contraseña:</label>
                    <input 
                        id="password-confirm" 
                        type="password" 
                        class="form-input" 
                        name="password_confirmation"
                        placeholder="**********"
                        required 
                        autocomplete="new-password"
                    >
                </div>

                <!-- Checkbox de términos (opcional) -->
                <div class="form-check-group">
                    <input 
                        class="form-checkbox" 
                        type="checkbox" 
                        name="terms" 
                        id="terms"
                    >
                    <label class="form-check-label" for="terms">
                        Recuérdame
                    </label>
                </div>

                <!-- Botones -->
                <div class="form-actions">
                    <button type="submit" class="btn-submit">
                        Crear Cuenta
                    </button>

                    <a class="link-forgot" href="{{ route('login') }}">
                        ¿Ya tienes cuenta? Inicia sesión
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
