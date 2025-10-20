<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema JvS - Bem-vindo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/welcome.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <div class="logo-icon">JvS</div>
                    <div class="logo-text">Sistema JvS</div>
                </div>
                <div class="nav-links">
                    @auth
                        <div class="nav-links">
                            <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                        </div>
                    @else
                        <div class="nav-link login">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </div>
                        @if (Route::has('register'))
                            <div class="nav-links">
                                <a class="nav-link register" href="{{ route('register') }}">Registrar</a>
                            </div>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Bem-vindo ao Sistema JvS</h1>
                <p>Uma solução completa para gerenciar seus processos de forma eficiente e intuitiva. Simplifique suas
                    operações e aumente sua produtividade.</p>

                <div class="hero-buttons">
                    <a href="#" class="btn primary">Começar Agora</a>
                    <a href="#" class="btn secondary">Saiba Mais</a>
                </div>

                <div class="stats">
                    <div class="stat-item">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Usuários Ativos</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">99.9%</div>
                        <div class="stat-label">Disponibilidade</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">Suporte</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Recursos Principais</h2>
                <p class="section-subtitle">Descubra como o Sistema JvS pode transformar a maneira como você gerencia
                    seus processos</p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="3" y1="9" x2="21" y2="9"></line>
                            <line x1="9" y1="21" x2="9" y2="9"></line>
                        </svg>
                    </div>
                    <h3 class="feature-title">Dashboard Intuitivo</h3>
                    <p class="feature-description">Visualize todos os dados importantes em um painel centralizado e
                        fácil de usar, com gráficos e métricas em tempo real.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                    <h3 class="feature-title">Segurança Avançada</h3>
                    <p class="feature-description">Proteção de dados com criptografia de ponta a ponta e controles de
                        acesso granular para manter suas informações seguras.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                        </svg>
                    </div>
                    <h3 class="feature-title">Alta Performance</h3>
                    <p class="feature-description">Sistema otimizado para oferecer a melhor experiência e velocidade,
                        mesmo com grandes volumes de dados.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Demo Section -->
    <section class="demo">
        <div class="container">
            <div class="demo-content">
                <div class="demo-text">
                    <h2 class="demo-title">Experimente a Interface</h2>
                    <p class="demo-description">Nosso sistema foi projetado pensando na experiência do usuário, com uma
                        interface limpa, intuitiva e responsiva que se adapta a qualquer dispositivo.</p>
                    <a href="#" class="btn primary">Solicitar Demonstração</a>
                </div>
                <div class="demo-visual">
                    Interface JvS
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2 class="cta-title">Pronto para Começar?</h2>
            <p class="cta-description">Junte-se a centenas de empresas que já estão usando o Sistema JvS para otimizar
                seus processos e aumentar a produtividade.</p>
            <a href="#" class="btn primary">Criar Conta Gratuita</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <div class="footer-logo-icon">JvS</div>
                    <div class="footer-logo-text">Sistema JvS</div>
                </div>

                <div class="footer-links">
                    <a href="#" class="footer-link">Sobre</a>
                    <a href="#" class="footer-link">Recursos</a>
                    <a href="#" class="footer-link">Preços</a>
                    <a href="#" class="footer-link">Contato</a>
                    <a href="#" class="footer-link">Suporte</a>
                </div>

                <div class="copyright">
                    &copy; 2023 Sistema JvS. Todos os direitos reservados.
                </div>
            </div>
        </div>
    </footer>
</body>

</html>