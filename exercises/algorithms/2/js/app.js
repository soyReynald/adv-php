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
    /*
    var request = new XMLHttpRequest();
    request.open('GET', 'API/clientes.php', true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    var data = {usuario: user}
    
    request.onload = function() {
        if (this.status >= 200 && this.status < 400) {
        // Success!
        var obj = JSON.parse(this.response);
        obj.forEach(element => {
            var body = document.querySelector('table tbody');
            body.append(
                "<tr>"+
                    "<td>"+element.nombre+'</td>'+
                "</tr>"
            );
        });
        } else {
            alert("An error");
    
        }
    };

    request.send(data);
    
    /*** Error: Uncaught SyntaxError: Unexpected end of JSON input
     * at JSON.parse (<anonymous>) at XMLHttpRequest.request.onload
     * 
     */
}