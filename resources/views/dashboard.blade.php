@include('components.header')   

@section('title', 'JvS - Dashboard')
@section('page-title', 'Dashboard')

@section('content')

            <!-- Conteúdo da Página -->
            <div class="page-content">
                <!-- Estatísticas -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon" style="background-color: rgba(59, 130, 246, 0.1); color: #3b82f6;">
                            <i class="fas fa-user-injured"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-value">24</div>
                            <div class="stat-label">Pacientes Ativos</div>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon" style="background-color: rgba(16, 185, 129, 0.1); color: #10b981;">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-value">18</div>
                            <div class="stat-label">Atendimentos Concluídos</div>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon" style="background-color: rgba(245, 158, 11, 0.1); color: #f59e0b;">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-value">6</div>
                            <div class="stat-label">Pendentes</div>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon" style="background-color: rgba(239, 68, 68, 0.1); color: #ef4444;">
                            <i class="fas fa-exclamation-circle"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-value">2</div>
                            <div class="stat-label">Urgências</div>
                        </div>
                    </div>
                </div>
                
                <!-- Tabela de Pacientes -->
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Pacientes em Atendimento</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-container">
                            <table class="custom-table">
                                <thead>
                                    <tr>
                                        <th style="text-align: left;"><b>NOME DO PACIENTE</b></th>
                                        <th><b>FICHA DO PACIENTE</b></th>
                                        <th><b>CONCLUIR</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $Allquestionarios as $questio)
                                    <tr>
                                        <td class="primeiro_tabela">{{ $questio->nome }}</td>
                                        <td><a class="btn-custom btn-warning" href="#" role="button">Visualizar Ficha</a></td>
                                        <td><a class="btn-custom btn-success" href="#" role="button">Concluir Atendimento</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // SIMPLIFICADO - Toggle da sidebar
        document.getElementById('toggleSidebar').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebarOverlay');
            
            // Verifica se é mobile
            if (window.innerWidth <= 768) {
                // Mobile - toggle simples
                sidebar.classList.toggle('mobile-visible');
                overlay.classList.toggle('active');
            } else {
                // Desktop - toggle entre collapsed e normal
                sidebar.classList.toggle('collapsed');
                document.getElementById('mainContent').classList.toggle('expanded');
            }
        });

        // Fechar sidebar ao clicar no overlay (mobile)
        document.getElementById('sidebarOverlay').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebarOverlay');
            
            sidebar.classList.remove('mobile-visible');
            overlay.classList.remove('active');
        });

        // Dropdown do usuário
        document.getElementById('userMenu').addEventListener('click', function(e) {
            e.stopPropagation();
            document.getElementById('dropdownMenu').classList.toggle('show');
        });

        // Fechar dropdown ao clicar fora
        document.addEventListener('click', function() {
            document.getElementById('dropdownMenu').classList.remove('show');
        });

        // Inicialização para mobile
        if (window.innerWidth <= 768) {
            document.getElementById('sidebar').classList.remove('mobile-visible');
        }
    </script>

@include('components.footer')