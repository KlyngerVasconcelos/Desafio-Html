	$(function() {
		
    // Dispara o Autocomplete a partir do segundo caracter
    $( "#busca" ).autocomplete({
	    minLength: 2,
	    source: function( request, response ) {
	        $.ajax({
	            url: "../bd/Buscar.php",
	            dataType: "json",
	            data: {
	            	acao: 'autocomplete',
	                parametro: $('#busca').val()
	            },
	            success: function(data) {
	               response(data);
	            }
	        });
	    },
	    focus: function( event, ui ) {
	        $("#busca").val( ui.item.cod );
	        carregarDados();
	        return false;
	    },
	    select: function( event, ui ) {
	        $("#busca").val( ui.item.cod );
	        return false;
	    }
    })
	
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( item.cod )
        .appendTo( ul );
    };
});