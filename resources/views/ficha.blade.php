@include('components.header')

@section('title', 'JvS - Ficha Clínica')
@section('page-title', 'Ficha do Paciente')

<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-12 col-xl-10">
            <!-- Header da Ficha -->
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-header bg-gradient-primary text-white py-4">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h1 class="h3 mb-1">
                                <i class="fas fa-file-medical me-3"></i>
                                FICHA CLÍNICA
                            </h1>
                            <p class="mb-0 opacity-75">Sistema de Gestão de Saúde</p>
                        </div>
                        <div class="col-md-4 text-end">
                            <div class="btn-group">
                                <button onclick="window.print()" class="btn btn-light btn-sm">
                                    <i class="fas fa-print me-2"></i>
                                    Imprimir
                                </button>
                                <a href="{{ route('dashboard') }}" class="btn btn-outline-light btn-sm">
                                    <i class="fas fa-arrow-left me-2"></i>
                                    Voltar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if(isset($questionario) && $questionario)
            <!-- Informações Principais -->
            <div class="row">
                <!-- Dados Pessoais -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-header bg-light py-3">
                            <h5 class="card-title mb-0 text-primary">
                                <i class="fas fa-user-circle me-2"></i>
                                Dados Pessoais
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                    <i class="fas fa-user fa-lg"></i>
                                </div>
                                <div>
                                    <h4 class="mb-0">{{ $questionario->nome }}</h4>
                                    <small class="text-muted">Paciente</small>
                                </div>
                            </div>
                            
                            <div class="info-list">
                                <div class="info-item d-flex align-items-center mb-2">
                                    <i class="fas fa-birthday-cake text-primary me-3"></i>
                                    <div>
                                        <small class="text-muted">Idade</small>
                                        <div class="fw-semibold">{{ $questionario->idade }} anos</div>
                                    </div>
                                </div>
                                
                                <div class="info-item d-flex align-items-center mb-2">
                                    <i class="fas fa-venus-mars text-primary me-3"></i>
                                    <div>
                                        <small class="text-muted">Sexo</small>
                                        <div class="fw-semibold">
                                            @if($questionario->sexo == 'masculino')
                                                Masculino
                                            @elseif($questionario->sexo == 'feminino')
                                                Feminino
                                            @else
                                                Outro
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="info-item d-flex align-items-center mb-2">
                                    <i class="fas fa-weight text-primary me-3"></i>
                                    <div>
                                        <small class="text-muted">Altura/Peso</small>
                                        <div class="fw-semibold">{{ $questionario->altura_peso }}</div>
                                    </div>
                                </div>
                                
                                <div class="info-item d-flex align-items-center">
                                    <i class="fas fa-phone text-primary me-3"></i>
                                    <div>
                                        <small class="text-muted">Contato</small>
                                        <div class="fw-semibold">{{ $questionario->contato }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent">
                            <small class="text-muted">
                                <i class="fas fa-calendar me-1"></i>
                                Cadastrado em: {{ $questionario->created_at->format('d/m/Y') }}
                            </small>
                        </div>
                    </div>
                </div>

                <!-- Saúde -->
                <div class="col-md-8 mb-4">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-header bg-light py-3">
                            <h5 class="card-title mb-0 text-primary">
                                <i class="fas fa-heartbeat me-2"></i>
                                Saúde
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="health-card bg-danger bg-opacity-10 p-3 rounded">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fas fa-disease text-danger me-2"></i>
                                            <h6 class="mb-0 text-danger">Doenças Crônicas</h6>
                                        </div>
                                        <p class="mb-0">{{ $questionario->doenca }}</p>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <div class="health-card bg-warning bg-opacity-10 p-3 rounded">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fas fa-pills text-warning me-2"></i>
                                            <h6 class="mb-0 text-warning">Medicamentos</h6>
                                        </div>
                                        <p class="mb-0">{{ $questionario->medicamento }}</p>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <div class="health-card bg-info bg-opacity-10 p-3 rounded">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fas fa-hospital text-info me-2"></i>
                                            <h6 class="mb-0 text-info">Hospitalizações</h6>
                                        </div>
                                        <p class="mb-0">{{ $questionario->hospitalizacao }}</p>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <div class="health-card bg-success bg-opacity-10 p-3 rounded">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fas fa-allergies text-success me-2"></i>
                                            <h6 class="mb-0 text-success">Alergias</h6>
                                        </div>
                                        <p class="mb-0">{{ $questionario->alergias }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hábitos e Estilo de Vida -->
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-light py-3">
                            <h5 class="card-title mb-0 text-primary">
                                <i class="fas fa-running me-2"></i>
                                Hábitos e Estilo de Vida
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 text-center mb-3">
                                    <div class="habit-card p-4 rounded">
                                        <div class="habit-icon mb-3">
                                            <i class="fas fa-dumbbell fa-2x text-primary"></i>
                                        </div>
                                        <h6 class="mb-2">Atividade Física</h6>
                                        <span class="badge bg-{{ $questionario->atividade_fisica == 'sim' ? 'success' : 'secondary' }} fs-6">
                                            {{ $questionario->atividade_fisica == 'sim' ? 'SIM' : 'NÃO' }}
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="col-md-3 text-center mb-3">
                                    <div class="habit-card p-4 rounded">
                                        <div class="habit-icon mb-3">
                                            <i class="fas fa-utensils fa-2x text-success"></i>
                                        </div>
                                        <h6 class="mb-2">Alimentação</h6>
                                        <span class="badge 
                                            @if($questionario->alimentacao == 'saudavel') bg-success
                                            @elseif($questionario->alimentacao == 'parcialmente_saudavel') bg-warning
                                            @elseif($questionario->alimentacao == 'pouco_saudavel') bg-danger
                                            @else bg-secondary @endif fs-6">
                                            @if($questionario->alimentacao == 'saudavel') Saudável
                                            @elseif($questionario->alimentacao == 'parcialmente_saudavel') Parcial
                                            @elseif($questionario->alimentacao == 'pouco_saudavel') Pouco Saudável
                                            @else {{ $questionario->alimentacao }} @endif
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="col-md-3 text-center mb-3">
                                    <div class="habit-card p-4 rounded">
                                        <div class="habit-icon mb-3">
                                            <i class="fas fa-smoking fa-2x text-warning"></i>
                                        </div>
                                        <h6 class="mb-2">Tabagismo</h6>
                                        <span class="badge bg-{{ $questionario->fumante == 'sim' ? 'warning' : 'success' }} fs-6">
                                            {{ $questionario->fumante == 'sim' ? 'FUMANTE' : 'NÃO FUMANTE' }}
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="col-md-3 text-center mb-3">
                                    <div class="habit-card p-4 rounded">
                                        <div class="habit-icon mb-3">
                                            <i class="fas fa-wine-glass-alt fa-2x text-info"></i>
                                        </div>
                                        <h6 class="mb-2">Álcool</h6>
                                        <span class="badge 
                                            @if($questionario->alcool == 'nunca') bg-success
                                            @elseif($questionario->alcool == 'ocasional') bg-info
                                            @elseif($questionario->alcool == 'regular') bg-warning
                                            @else bg-secondary @endif fs-6">
                                            @if($questionario->alcool == 'nunca') Nunca
                                            @elseif($questionario->alcool == 'ocasional') Ocasional
                                            @elseif($questionario->alcool == 'regular') Regular
                                            @else {{ $questionario->alcool }} @endif
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Observações e Anotações -->
            <div class="row">
                <div class="col-12">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-light py-3">
                            <h5 class="card-title mb-0 text-primary">
                                <i class="fas fa-sticky-note me-2"></i>
                                Observações e Anotações
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="notes-area p-4 rounded bg-light">
                                <div class="placeholder-text text-center text-muted">
                                    <i class="fas fa-edit fa-2x mb-3 d-block"></i>
                                    <p class="mb-0">Área para observações e anotações médicas</p>
                                    <small>Clique para adicionar notas sobre o paciente</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @else
            <!-- Erro -->
            <div class="card shadow-sm border-0">
                <div class="card-body text-center py-5">
                    <i class="fas fa-exclamation-triangle fa-3x text-warning mb-3"></i>
                    <h4 class="text-warning">Questionário não encontrado</h4>
                    <p class="text-muted">Os dados do paciente não puderam ser carregados.</p>
                    <a href="{{ route('dashboard') }}" class="btn btn-primary">
                        <i class="fas fa-arrow-left me-2"></i>
                        Voltar para Dashboard
                    </a>
                </div>
            </div>
            @endif

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Adicionar interação às áreas de notas
    const notesArea = document.querySelector('.notes-area');
    if (notesArea) {
        notesArea.addEventListener('click', function() {
            const text = prompt('Adicionar observação:');
            if (text) {
                this.innerHTML = `
                    <div class="notes-content">
                        <p class="mb-0">${text}</p>
                        <small class="text-muted">Adicionado em ${new Date().toLocaleString()}</small>
                    </div>
                `;
            }
        });
    }
    
    // Efeitos de hover para cards
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});
</script>

@include('components.footer')