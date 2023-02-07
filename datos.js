const url = 'datos.json';
const solicitud = new XMLHttpRequest();
solicitud.open('POST',url); 

solicitud.responseType = 'json';
solicitud.send();


solicitud.onload = ()=>{
    const usuarios = solicitud.response;
    tablaUsuarios(usuarios);
}

function tablaUsuarios(jsonObj){

    var tabla = document.querySelector("#tabla");
    var tablaU = "";


    for (var index = 0; index < jsonObj.length; index++) {

        console.log(jsonObj[index].nombre);
        var col = document.createElement("tr");
        var cel7 = document.createElement("td");
        var texCel7 = document.createTextNode(jsonObj[index].Producto);
        cel7.appendChild(texCel7);
        var cel = document.createElement("td");
        var texCel = document.createTextNode(jsonObj[index].Nombre);
        cel.appendChild(texCel);
        var cel2 = document.createElement("td");
        var texCel2 = document.createTextNode(jsonObj[index].Marca);
        cel2.appendChild(texCel2);
        var cel3 = document.createElement("td");
        var texCel3 = document.createTextNode(jsonObj[index].Talla);
        cel3.appendChild(texCel3);

        var cel4 = document.createElement("td");
        var texCel4 = document.createTextNode(jsonObj[index].Color);
        cel4.appendChild(texCel4);

        var cel5 = document.createElement("td");
        var texCel5 = document.createTextNode(jsonObj[index].Precio);
        cel5.appendChild(texCel5);

        var cel6 = document.createElement("td");
        var texCel6 = document.createTextNode(jsonObj[index].Genero);
        cel6.appendChild(texCel6);

        
        col.appendChild(cel7);
        col.appendChild(cel);
        col.appendChild(cel2);
        col.appendChild(cel3);
        col.appendChild(cel4);
        col.appendChild(cel5);
        col.appendChild(cel6);
       
      

        tabla.appendChild(col);
        
    }
    //tabla.innerHTML = tablaU;
}
