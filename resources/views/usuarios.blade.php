@include('components.header')

@section('title', 'JvS - Todos os Pacientes')
@section('page-title', 'Gestão de Pacientes')

    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-users me-2"></i>
                                Lista de Pacientes
                            </h4>
                            <a href="{{ route('dashboard') }}" class="btn btn-light btn-sm">
                                <i class="fas fa-arrow-left me-1"></i>
                                Voltar
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="custom-table">
                                <thead>
                                    <tr>
                                        <th style="text-align: left;"><b>NOME DO PACIENTE</b></th>
                                        <th><b>EMAIL DO PACIENTE</b></th>
                                        <th><b>FICHA DO PACIENTE</b></th>
                                        <th><b>CONCLUIR</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($AllUser as $user)
                                        <tr>
                                            <td class="primeiro_tabela">{{ $user->name }}</td>
                                            <td class="primeiro_tabela">{{ $user->email }}</td>

                                            <td><a class="btn-custom btn-warning"
                                                    href="{{ route('dashboard.show', $user->id) }}" role="button">Visualizar
                                                    Ficha</a>
                                            </td>

                                            <td><a class="btn-custom btn-success" href="#" role="button">Concluir
                                                    Atendimento</a>
                                            </td>

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
        // Busca em tempo real
        document.getElementById('searchInput').addEventListener('input', function () {
            const searchTerm = this.value.toLowerCase();
            const rows = document.querySelectorAll('#patientsTable tbody tr');

            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(searchTerm) ? '' : 'none';
            });
        });

        // Exportar para Excel
        function exportToExcel() {
            // Simulação de exportação - pode ser implementada com bibliotecas como SheetJS
            alert('Funcionalidade de exportação para Excel será implementada!');

            // Exemplo de implementação real:
            // const table = document.getElementById('patientsTable');
            // const wb = XLSX.utils.table_to_book(table);
            // XLSX.writeFile(wb, 'pacientes.xlsx');
        }

        // Confirmar exclusão
        function confirmDelete(id) {
            if (confirm('Tem certeza que deseja excluir este paciente?')) {
                // Implementar exclusão via AJAX ou form submission
                alert(`Paciente ${id} será excluído!`);
                // window.location.href = `/dashboard/delete/${id}`;
            }
        }

        // Ordenação da tabela
        let sortDirection = 1;
        function sortTable(columnIndex) {
            const table = document.getElementById('patientsTable');
            const tbody = table.querySelector('tbody');
            const rows = Array.from(tbody.querySelectorAll('tr'));

            rows.sort((a, b) => {
                const aValue = a.cells[columnIndex].textContent.trim();
                const bValue = b.cells[columnIndex].textContent.trim();

                return aValue.localeCompare(bValue) * sortDirection;
            });

            // Alternar direção
            sortDirection *= -1;

            // Reordenar linhas
            rows.forEach(row => tbody.appendChild(row));
        }

        // Adicionar eventos de clique aos cabeçalhos para ordenação
        document.querySelectorAll('#patientsTable thead th').forEach((th, index) => {
            th.style.cursor = 'pointer';
            th.addEventListener('click', () => sortTable(index));
        });
    </script>

    @include('components.footer')