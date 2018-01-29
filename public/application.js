
var data = {};

$(document).ready(function() {

	// Document is ready.

	console.log('log');

	$('.tile').bind('click', addOrder);

});

$(document).on('click', '.delItem', function(e) {

	e.preventDefault();

	var row = $(this).parent().parent();

	row.remove();
	console.log(row);

});

$(document).on('change', '.quantity', function() {

	console.log('quantity change event');

	var val = $(this).val();
	var rows = $('#orders tr');

	data.total_quantity = val;

	inputTotal(data);

	console.log(val + ' - ' + data.total_price);

	// Input Total calc

	var sumPoint = $('.sum');
	var sum = 0.00;

	console.log(sum);

	$.each(rows, function(k, v) {

		var quantity = $(this).find('.quantity').val();
		var price = $(this).find('.price').html();
		var total = $(this).find('.tot');
		var out = quantity * price;

		console.log(quantity + ' - ' + price + ' = ' + total + ' -- ' + out);

		total.html(out);

		sum = sum + out;

	});

});

$(document).on('click', '.sum', function(e) {

	var sumPoint = $('.sum');
  	var rows = $('#orders tr');
  	var sum =  0;

  	console.log(sum);

  	$.each(rows, function(k, v) {

  		var q = $(this).find('.quantity').val();
  		var p = $(this).find('.price').html();

  		var total = q * p;

  		sum = sum + total;

  		console.log(total + ' - ' + sum);

  		sumPoint.html( sum + ' KM');


  	});

  	console.log(sum);
});

function addOrder() {

  	var anchor_id = $(this).children('div').find('.id > input').val();
  	var anchor_name = $(this).children('div').find('.name').html();
  	var anchor_price = $(this).children('div').find('.price').html();
  	var anchor_number = $(this).children('div').find('.number').html();

  	data = {
  		'product_id':  anchor_id,
  		'product_name': anchor_name,
  		'product_price': anchor_price,
  		'product_quantity': anchor_number,
  		'total_price': anchor_price,
  		'total_quantity': 1,
  	}

  	var rows = $('#orders tr');

  	var check = checkTableItems(data);

  	if( !check ) {

  		populateTable(data);

  	} else {

  		console.log('value increased!');
  		inputTotal(data);

  	}

}

function inputTotal(data) {

	var total = data.total_quantity * data.product_price;

	console.log('Total Quantity: ' + data.total_quantity + ' - Product Price' + data.product_price);
	console.log(total + ' - Total');

	data.total_price = total;

	return true;

}

function checkTableItems(data) {

	var b = false;
	var rows_count = $('#orders tr').length;

	console.log('row count: ' +rows_count);
	console.log('selected item id: ' +data.product_id);

	if ( rows_count == 0 ) {

		b = false;
		console.log('first item');

	} else {

		console.log('checkingTable');

		for( var i = 0; i <= rows_count; i++ ) {

			console.log('number of row ' + i);

			row_value = $('#orders > tr > td > input')[i];

			if( row_value == undefined ) {
				continue;
			}

			if( row_value.value == data.product_id ) {

				console.log('found item, increasing value');

				$('input[name="demo1"]')[i].value = +$('input[name="demo1"]')[i].value + 1;

				data.total_quantity++;

				$('.quantity:eq('+i+')').trigger('change');

				b = true;
			}

			if(b) {

				return true;
				break;

			}

		}

	}

	if(!b) {
		console.log('New item in table');
		return false;
	}

}



function populateTable(data) {

	var value = '<input value="'+data.product_id+'" />';

	var order_id = '<td style="display:none" class="productID">'+value+'</td>';
	var order_close = '<td><button href="#" class="delItem btn default red-stripe"><i class="fa fa-close"></i></button></td>';
  	var order_name = '<td class="productname">'+data.product_name+'</td>';
  	var order_price = '<td class="productprice"><span class="price">'+data.product_price+'</span> KM</td>';
  	var order_quantity = '<td class="hidden-xs" ><div class="form-group"><div class="input-inline input-small"><input type="text" value="1" name="demo1" class="quantity form-control touchspin_demo1" ></div></div></td>';

  	$('#orders').append('<tr>'+order_id+order_close+order_name+order_quantity+order_price+'<td class="total"><span class="tot">'+data.total_price+'</span> KM</td></tr>');

  	ComponentsFormTools.init();	

  	return false;
}
