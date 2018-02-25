var TableAdvanced = function () {

    var initTable = function () {

        var table = $('#products');

        /* Fixed header extension: http://datatables.net/extensions/keytable/ */

        var oTable = table.dataTable({
            // Internationalisation. For more info refer to http://datatables.net/manual/i18n
            "language": {
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                },
                "emptyTable": "No data available in table",
                "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                "infoEmpty": "No entries found",
                "infoFiltered": "(filtered1 from _MAX_ total entries)",
                "lengthMenu": "Show _MENU_ entries",
                "search": "Search:",
                "zeroRecords": "No matching records found"
            },
            "ajax": {
                "type": "POST", // request type
                "timeout": 20000,
                "url": "/api/tableproducts",

            },

            "columns": [

                    {data: null, defaultContent: '<input class="checker" type="checkbox" name="id[]" value="">' },

                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'category', name: 'category'},
                    {data: 'price', name: 'price'},
                    {data: 'quantity', name: 'quantity'},
                    {data: 'created_at', name: 'created_at'},

                    {data: null, defaultContent: '<span class="label label-sm label-success">Active</span>'},
                    {data: null, defaultContent: '<a href="/products/" class="btn btn-xs default btn-editable"><i class="fa fa-pencil"></i> Edit</a>'}
                ],   

            "order": [
                [0, 'asc']
            ],
            "lengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] // change per page values here
            ],
            "pageLength": 15, // set the initial value,
            "columnDefs": [{  // set default column settings
                'orderable': false,
                'targets': [0]
            }, {
                "searchable": false,
                "targets": [0]
            }],
            "order": [
                [1, "asc"]
            ]           
        });

        var oTableColReorder = new $.fn.dataTable.ColReorder( oTable );

        var tableWrapper = $('#products_wrapper'); // datatable creates the table wrapper by adding with id {your_table_jd}_wrapper
        //tableWrapper.find('.dataTables_length select').select2(); // initialize select2 dropdown
    }

    return {

        //main function to initiate the module
        init: function () {

            if (!jQuery().dataTable) {
                return;
            }

            initTable();

        }

    };

}();