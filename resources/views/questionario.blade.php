@include('components.header')

@section('title', 'JvS - Novo Questionário')
@section('page-title', 'Novo Questionário')

<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-12 col-xl-10">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white py-3">
                    <h4 class="card-title mb-0">
                        <i class="fas fa-file-medical me-2"></i>
                        Novo Questionário de Saúde
                    </h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('dashboard.store') }}" method="POST" class="needs-validation" novalidate>
                        @csrf

                        <!-- Seção: Informações Pessoais -->
                        <div class="section-card mb-4">
                            <div class="section-header bg-light py-3 px-4 border-bottom">
                                <h5 class="section-title mb-0 text-primary">
                                    <i class="fas fa-user me-2"></i>
                                    Informações Pessoais
                                </h5>
                            </div>
                            <div class="section-body p-4">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="nome" class="form-label fw-semibold">Nome completo <span class="text-danger">*</span></label>
                                        <input type="text" name="nome" id="nome" class="form-control form-control-lg" placeholder="Digite seu nome completo" required>
                                        <div class="invalid-feedback">
                                            Por favor, informe o nome completo.
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="idade" class="form-label fw-semibold">Idade <span class="text-danger">*</span></label>
                                        <input type="number" name="idade" id="idade" class="form-control form-control-lg" placeholder="Digite sua idade" min="1" max="120" required>
                                        <div class="invalid-feedback">
                                            Por favor, informe uma idade válida.
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="sexo" class="form-label fw-semibold">Sexo <span class="text-danger">*</span></label>
                                        <select name="sexo" id="sexo" class="form-select form-select-lg" required>
                                            <option value="">Selecione o sexo</option>
                                            <option value="masculino">Masculino</option>
                                            <option value="feminino">Feminino</option>
                                            <option value="outro">Outro</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Por favor, selecione o sexo.
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="altura_peso" class="form-label fw-semibold">Altura e Peso <span class="text-danger">*</span></label>
                                        <input type="text" name="altura_peso" id="altura_peso" class="form-control form-control-lg" placeholder="Ex: 1,70m / 70kg" required>
                                        <div class="form-text">Formato: Altura em metros / Peso em kg</div>
                                        <div class="invalid-feedback">
                                            Por favor, informe altura e peso.
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="contato" class="form-label fw-semibold">Contato <span class="text-danger">*</span></label>
                                        <input type="text" name="contato" id="contato" class="form-control form-control-lg" placeholder="Telefone ou e-mail" required>
                                        <div class="invalid-feedback">
                                            Por favor, informe um contato.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Seção: Saúde -->
                        <div class="section-card mb-4">
                            <div class="section-header bg-light py-3 px-4 border-bottom">
                                <h5 class="section-title mb-0 text-primary">
                                    <i class="fas fa-heartbeat me-2"></i>
                                    Saúde
                                </h5>
                            </div>
                            <div class="section-body p-4">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label for="doenca" class="form-label fw-semibold">Você possui alguma doença crônica? Qual? <span class="text-danger">*</span></label>
                                        <input type="text" name="doenca" id="doenca" class="form-control form-control-lg" placeholder="Descreva as doenças crônicas, se houver" required>
                                        <div class="invalid-feedback">
                                            Por favor, informe sobre doenças crônicas.
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="medicamento" class="form-label fw-semibold">Você faz uso contínuo de algum medicamento? Qual? <span class="text-danger">*</span></label>
                                        <input type="text" name="medicamento" id="medicamento" class="form-control form-control-lg" placeholder="Liste os medicamentos em uso" required>
                                        <div class="invalid-feedback">
                                            Por favor, informe sobre medicamentos em uso.
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="hospitalizacao" class="form-label fw-semibold">Teve alguma hospitalização recente? <span class="text-danger">*</span></label>
                                        <input type="text" name="hospitalizacao" id="hospitalizacao" class="form-control form-control-lg" placeholder="Descreva hospitalizações recentes" required>
                                        <div class="invalid-feedback">
                                            Por favor, informe sobre hospitalizações.
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="alergias" class="form-label fw-semibold">Possui alergias? <span class="text-danger">*</span></label>
                                        <input type="text" name="alergias" id="alergias" class="form-control form-control-lg" placeholder="Descreva alergias conhecidas" required>
                                        <div class="invalid-feedback">
                                            Por favor, informe sobre alergias.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Seção: Hábitos -->
                        <div class="section-card mb-4">
                            <div class="section-header bg-light py-3 px-4 border-bottom">
                                <h5 class="section-title mb-0 text-primary">
                                    <i class="fas fa-running me-2"></i>
                                    Hábitos
                                </h5>
                            </div>
                            <div class="section-body p-4">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="atividade_fisica" class="form-label fw-semibold">Você pratica atividade física regularmente? <span class="text-danger">*</span></label>
                                        <select name="atividade_fisica" id="atividade_fisica" class="form-select form-select-lg" required>
                                            <option value="">Selecione uma opção</option>
                                            <option value="sim">Sim</option>
                                            <option value="não">Não</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Por favor, selecione uma opção.
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="alimentacao" class="form-label fw-semibold">Como você classifica sua alimentação? <span class="text-danger">*</span></label>
                                        <select name="alimentacao" id="alimentacao" class="form-select form-select-lg" required>
                                            <option value="">Selecione uma opção</option>
                                            <option value="saudavel">Saudável</option>
                                            <option value="parcialmente_saudavel">Parcialmente saudável</option>
                                            <option value="pouco_saudavel">Pouco saudável</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Por favor, selecione uma opção.
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="fumante" class="form-label fw-semibold">Você fuma ou já fumou? <span class="text-danger">*</span></label>
                                        <select name="fumante" id="fumante" class="form-select form-select-lg" required>
                                            <option value="">Selecione uma opção</option>
                                            <option value="sim">Sim</option>
                                            <option value="não">Não</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Por favor, selecione uma opção.
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="alcool" class="form-label fw-semibold">Você consome bebidas alcoólicas? <span class="text-danger">*</span></label>
                                        <select name="alcool" id="alcool" class="form-select form-select-lg" required>
                                            <option value="">Selecione uma opção</option>
                                            <option value="nunca">Nunca</option>
                                            <option value="ocasional">Ocasional</option>
                                            <option value="regular">Regular</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Por favor, selecione uma opção.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Botões de Ação -->
                        <div class="d-flex justify-content-between align-items-center pt-4 border-top">
                            <button type="submit" class="btn btn-primary btn-lg px-5">
                                <i class="fas fa-paper-plane me-2"></i>
                                Enviar Questionário
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.section-card {
    border: 1px solid #dee2e6;
    border-radius: 0.75rem;
    overflow: hidden;
    background: #fff;
}

.section-header {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.section-title {
    font-weight: 600;
    font-size: 1.1rem;
}

.form-control-lg, .form-select-lg {
    border-radius: 0.5rem;
    border: 2px solid #e9ecef;
    transition: all 0.2s ease-in-out;
}

.form-control-lg:focus, .form-select-lg:focus {
    border-color: #3b82f6;
    box-shadow: 0 0 0 0.2rem rgba(59, 130, 246, 0.25);
}

.form-label {
    color: #495057;
    margin-bottom: 0.5rem;
}

.btn-lg {
    border-radius: 0.5rem;
    padding: 0.75rem 1.5rem;
    font-weight: 500;
}

.invalid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 0.875em;
    color: #dc3545;
}

.was-validated .form-control:invalid,
.was-validated .form-select:invalid {
    border-color: #dc3545;
}

.was-validated .form-control:invalid:focus,
.was-validated .form-select:invalid:focus {
    border-color: #dc3545;
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated .form-control:invalid ~ .invalid-feedback,
.was-validated .form-select:invalid ~ .invalid-feedback {
    display: block;
}

.card {
    border: none;
    border-radius: 1rem;
}

.card-header {
    border-radius: 1rem 1rem 0 0 !important;
}

@media (max-width: 768px) {
    .card-body {
        padding: 1.5rem !important;
    }
    
    .section-body {
        padding: 1.5rem !important;
    }
    
    .btn-lg {
        width: 100%;
        margin-bottom: 0.5rem;
    }
    
    .d-flex {
        flex-direction: column;
    }
}
</style>

<script>
// Validação do formulário
(function() {
    'use strict'
    
    var forms = document.querySelectorAll('.needs-validation')
    
    Array.prototype.slice.call(forms).forEach(function(form) {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }
            
            form.classList.add('was-validated')
        }, false)
    })
})()

// Máscaras e validações adicionais
document.addEventListener('DOMContentLoaded', function() {
    // Máscara para altura e peso
    const alturaPesoInput = document.getElementById('altura_peso');
    if (alturaPesoInput) {
        alturaPesoInput.addEventListener('blur', function() {
            const value = this.value.trim();
            if (value && !value.match(/^\d+([,.]\d+)?\s*m\s*\/\s*\d+([,.]\d+)?\s*kg$/i)) {
                this.classList.add('is-invalid');
            } else {
                this.classList.remove('is-invalid');
            }
        });
    }
    
    // Validação de idade
    const idadeInput = document.getElementById('idade');
    if (idadeInput) {
        idadeInput.addEventListener('blur', function() {
            const age = parseInt(this.value);
            if (age < 1 || age > 120) {
                this.classList.add('is-invalid');
            } else {
                this.classList.remove('is-invalid');
            }
        });
    }
});
</script>

@include('components.footer')