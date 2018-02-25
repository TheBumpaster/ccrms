var EcommerceOrders = function () {

    var initPickers = function () {
        //init date pickers
        $('.date-picker').datepicker({
            rtl: Metronic.isRTL(),
            autoclose: true
        });
    }

    var handleOrders = function () {

        var grid = $('#datatable_orders');

        grid.dataTable( {

            // here you can define a typical datatable settings from http://datatables.net/usage/options 
            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/scripts/datatable.js). 
            // So when dropdowns used the scrollable div should be removed. 
            //"dom": "<'row'<'col-md-8 col-sm-12'pli><'col-md-4 col-sm-12'<'table-group-actions pull-right'>>r>t<'row'<'col-md-8 col-sm-12'pli><'col-md-4 col-sm-12'>>",
            "bStateSave": true,

            "lengthMenu": [
                [10, 20, 50, 100, 150, -1],
                [10, 20, 50, 100, 150, "All"] // change per page values here
            ],
            "pageLength": 10, // default record count per page
            "ajax": {
                'type': 'POST',
                "url": "/api/tableorders", // ajax source
            },

            "columns": [
                {'orderable': false, data:null, defaultContent: '<input class="checkboxes" type="checkbox" name="id[]" value="">'},
                {'orderable': true, data: 'id', name: 'id'},
                {'orderable': true, data: 'purchased_on', name: 'purchased_on'},
                {'orderable': true, data: 'user', name: 'user'},
                {'orderable': false, data: 'base_price', name: 'base_price'},
                {'orderable': false, data: 'purchased_price', name: 'purchased_price'},
                {'orderable': true, data: 'status', name: 'purchased_price'},
                {'orderable': false, data: null, defaultContent: '<a href="/products/" class="btn btn-xs default btn-editable"><i class="fa fa-pencil"></i> Edit</a><a href="#delete" class="btn btn-xs red btn-editable"><i class="fa fa-cross"></i> Delete</a>'}
            ],

            "columnDefs": [{  // set default column settings
                'orderable': false,
                'targets': [0]
            }, {
            "searchable": false,
            "targets": [0]
            },
            {
                "targets":[7],
                "data": 'id',
                "searchable": false,
                "render" : function(data) {
                    return '<a href="/products/'+data.id+'" class="btn btn-xs default btn-editable"><i class="fa fa-pencil"></i> Edit</a><a href="#delete" class="btn btn-xs red btn-editable"><i class="fa fa-cross"></i> Delete</a>';
                }
            }
            ],

            "order": [
                [1, "asc"]
            ] // set first column as a default sort by asc
        });

        // handle group actionsubmit button click
        var tableWrapper = $('#datatable_orders_wrapper');
        var checkboxes = $('.checkboxes');

        $('.group-checkable').on('click', function () {

            console.log("all checked");

            if($(this).is(':checked')) {
                checkboxes.prop('checked', true);
            } else {
                checkboxes.prop('checked', false);
            }
        
        });

        grid.on('change', 'tbody tr .checkboxes', function() {
            $(this).parents('tr').toggleClass("warning");
        })



        Metronic.alert({
            type: 'danger',
            icon: 'warning',
            message: 'Please select an action',
            container: tableWrapper,
            place: 'prepend'
        });

       

    }

    return {

        //main function to initiate the module
        init: function () {

            initPickers();
            handleOrders();
        }

    };

}();