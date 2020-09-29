function leer(user){
    
    $.ajax({
        method: "GET",
        url: "API/clientes.php",
        Type: "json",
        data: { usuario: user}
    }).done(function( data ) {
        var objeto= $.parseJSON(data);
        $.each(objeto,function( index, element ) {
            var body = $('table tbody');
            body.append(
                "<tr>"+
                    "<td>"+element.nombre+'</td>'+
                "</tr>"
            );
        })
    })
    // https://www.ma-no.org/en/programming/javascript/vanilla-javascript-equivalent-commands-to-jquery
}