<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="icon" href="{{ asset(path: 'img/logo jvs.png')}}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>JvS</title>
</head>
<body>
    
 <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <div class="app-container">
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <div class="logo">JvS</div>
                <div class="logo-text">Sistema JvS</div>
            </div>
            
            <div class="sidebar-menu">
                <a href="{{ route('dashboard') }}" class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <i class="fas fa-home"></i>
                    <span class="menu-text">Dashboard</span>
                </a>
                
                <a href="#" class="menu-item {{ request()->routeIs('pacientes.*') ? 'active' : '' }}">
                    <i class="fas fa-user-injured"></i>
                    <span class="menu-text">Pacientes</span>
                </a>
                
                
                <a href="{{ route('dashboard.questionario') }}" class="menu-item {{ request()->routeIs('questionarios.*') ? 'active' : '' }}">
                    <i class="fas fa-file-medical"></i>
                    <span class="menu-text">Questionários</span>
                </a>
                
                <div class="menu-divider"></div>
                
                <!-- Menu de Usuário (Breeze) -->
                <a href="#" class="menu-item {{ request()->routeIs('profile.edit') ? 'active' : '' }}">
                    <i class="fas fa-user"></i>
                    <span class="menu-text">Perfil</span>
                </a>
                
                <!-- Formulário de Logout (Breeze) -->
                <form method="POST" action="{{ route('logout') }}" class="menu-item" style="padding: 0;">
                    @csrf
                    <button type="submit" style="background: none; border: none; color: inherit; width: 100%; text-align: left; padding: 12px 20px; display: flex; align-items: center; gap: 12px; cursor: pointer;">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="menu-text">Sair</span>
                    </button>
                </form>
            </div>
        </div>
        
        <!-- Conteúdo Principal -->
        <div class="main-content" id="mainContent">
            <!-- Top Header -->
            <div class="top-header">
                <div class="header-left">
                    <button class="toggle-sidebar" id="toggleSidebar">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h1 class="page-title">@yield('page-title', 'Dashboard')</h1>
                </div>
                
                <div class="header-right">
                    <!-- Menu do Usuário (Breeze) -->
                    <div class="user-menu" id="userMenu">
                        <div class="user-avatar">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </div>
                        <span>{{ Auth::user()->name }}</span>
                        
                        <!-- Dropdown Menu -->
                        <div class="dropdown-menu" id="dropdownMenu">
                            <a href="{{ route('profile.edit') }}" class="dropdown-item">
                                <i class="fas fa-user"></i>
                                Perfil
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item" style="background: none; border: none; width: 100%; text-align: left; cursor: pointer;">
                                    <i class="fas fa-sign-out-alt"></i>
                                    Sair
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>