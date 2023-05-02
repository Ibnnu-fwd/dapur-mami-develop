<x-app-layout>
    <x-breadcrumbs name="transaction-history" />
    <h1 class="font-semibold text-2xl my-8">Riwayat Transaksi</h1>

    <div class="overflow-x-auto">
        <table class="w-full" id="transactionTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Invoice</th>
                    <th>Pelanggan</th>
                    <th>Menu</th>
                    <th>Qty</th>
                    {{-- <th>Jumlah</th> --}}
                    <th>Total</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th>Kasir</th>
                </tr>
            </thead>
        </table>
    </div>

    @push('js-internal')
        <script>
            function btnPrint() {
                window.print();
            }

            $(function() {

                $('#transactionTable').DataTable({
                    processing: true,
                    serverSide: true,
                    autoWidth: false,
                    ajax: "{{ route('admin.transaction-history') }}",
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex'
                        },
                        {
                            data: 'invoice',
                            name: 'invoice'
                        },
                        {
                            data: 'customer',
                            name: 'customer'
                        },
                        {
                            data: 'menu',
                            name: 'menu'
                        },
                        {
                            data: 'quantity',
                            name: 'quantity'
                        },
                        {
                            data: 'total',
                            name: 'total'
                        },
                        {
                            data: 'status',
                            name: 'status'
                        },
                        {
                            data: 'created_at',
                            name: 'created_at'
                        },
                        {
                            data: 'user',
                            name: 'user'
                        }
                    ],
                    dom: 'Bfrtip',
                    buttons: [{
                        extend: 'excelHtml5',
                        title: 'Data export'
                    }, {
                        extend: 'pdfHtml5',
                        title: 'Data export'
                    }, {
                        // filter status
                        extend: 'collection',
                        text: 'Filter Status',
                        buttons: [{
                                text: 'Semua',
                                action: function(e, dt, node, config) {
                                    dt.search('').draw();
                                }
                            },
                            {
                                text: 'Menunggu',
                                action: function(e, dt, node, config) {
                                    dt.search('Menunggu').draw();
                                }
                            },
                            {
                                text: 'Dibayar',
                                action: function(e, dt, node, config) {
                                    dt.search('Dibayar').draw();
                                }
                            },
                            {
                                text: 'Dibatalkan',
                                action: function(e, dt, node, config) {
                                    dt.search('Dibatalkan').draw();
                                }
                            }
                        ]
                    }]
                });
            });
        </script>
    @endpush
</x-app-layout>
