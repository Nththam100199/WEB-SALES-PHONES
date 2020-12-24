$(document).ready(function(){
	$('#sort_cuahang').change(function(){
		let value = $(this).val();

		$.ajaxSetup({

        	headers: {
           		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        	}

       	});
		$.ajax({

			type:"post",

			url :"/sort/cuahang",

			data : {

				value : value,

			},

			cache:false,

			success:function(data){
				
				$('.product-container').html(data);

			}

		})
	})

	$('#sort_search').change(function(){
		let slug_product_menu = $('.slug_product_menu').val();
		let id_price = $('.id_price').val();
		let others_id = $('.others_id').val();
		let value = $(this).val();
		$.ajaxSetup({

        	headers: {
           		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        	}

       	});
		$.ajax({

			type:"post",

			url :"/sort/search",

			data : {

				slug_product_menu : slug_product_menu,
				id_price : id_price,
				others_id : others_id,
				value : value 

			},

			cache:false,

			success:function(data){
				
				$('.product-container').html(data);

			}

		})
	})
})