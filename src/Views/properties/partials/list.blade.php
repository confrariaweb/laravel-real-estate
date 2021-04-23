<table class="table align-items-center table-flush table-striped table-hover" id="properties-table">
    <thead class="thead-light">
        <tr>
            <th>Titulo</th>
            <th>Tipo</th>
            <th>Criado</th>
            <th>Atualizado</th>
            <th>#</th>
        </tr>
    </thead>
</table>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#properties-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route("dashboard.properties.datatables") }}',
                keys: !0,
                select: {
                    style: "multi"
                },
                lengthChange: !1,
                dom: "Bfrtip",
                buttons: ["copy", "print"],
                language: {
                    paginate: {
                        previous: "<i class='fas fa-angle-left'>",
                        next: "<i class='fas fa-angle-right'>"
                    }
                },
                columns: [{
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'type',
                        name: 'type'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'updated_at',
                        name: 'updated_at'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });
            $("div.dataTables_length select").removeClass("custom-select custom-select-sm");
            $(".dt-buttons .btn").removeClass("btn-secondary").addClass("btn-sm btn-default");
        });
    </script>
@endpush