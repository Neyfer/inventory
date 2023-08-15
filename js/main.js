var categoria = "";

    switch (true) {
        case document.URL.includes("computadoras.php"):
            categoria = "Computadoras"
            break;

        case document.URL.includes("monitores.php"):
            categoria = "Monitores"
            break;

        case document.URL.includes("perifericos.php"):
            categoria = "Perifericos"
            break;

        case document.URL.includes("todos_tech.php"):
            categoria = "todos_tech"
            break;

        case document.URL.includes("proyectores.php"):
            categoria = "Proyectores"
            break;
    
        default:
            break;
    }

    console.log(categoria)
   
    function filtrar(){
        let estado = $("#estado");
        let fecha1 = $("#fecha1");
        let fecha2 = $("#fecha2");
        let nombre = $("#nombre");

        if(estado[0].value == 0 && fecha2[0].value == "" && nombre[0].value == ""){
            location.reload()
        }else{
            $.ajax({
                url: "../php/server.php?compu_filter",
                type: "post",
                data: {"categoria": categoria, "estado": estado[0].value, "fecha1": fecha1[0].value, "fecha2": fecha2[0].value, "nombre": nombre[0].value},
                success : function(data){
                    console.log(data)
                    $("#table-c-body").html(data);
                }
            })
        }
    }

    $("#nombre").keyup(filtrar);
    $("#estado").change(filtrar);
    $("#fecha2").change(()=>{
        console.log("date1")
        if(fecha1.value != ""){
            filtrar()
        }
    });

    $("#fecha1").change(()=>{
        console.log("date2")
        if(fecha2.value != ""){
            filtrar()
        }
    });


    //LLENAR DATOS DEL FORMULARIO DE EDICION DEL ELEMENTO
    let edit_btn = $(".edit");

    edit_btn.click(function(){
        let name = $("#name")[0];
        let type = $("#type")[0];
        let brand = $("#brand")[0];
        let model = $("#model")[0];
        let ammount = $("#ammount")[0];
        let state = $("#state")[0];
        let date = $("#date")[0];
        let comments = $("#comments")[0];
        let id_input = $("#id")[0];

        let id = this.id;


        $.ajax(`../php/server.php?item_data=${id}`, {
            success: function(data){
                let info = JSON.parse(data);

                console.log(info);

                name.value = info.nombre;
                type.value = info.tipo;
                brand.value = info.marca;
                model.value = info.modelo;
                ammount.value = info.cantidad;
                state.value = info.estado;
                date.value = info.fecha;
                comments.value = info.comentarios;
                id_input.value = info.id;
             }
        })
    })

    //MOSTRAR COMENTARIOS
    $(".show").click(function(){
        let id = this.id;
        $.ajax(`../php/server.php?content=${id}`, {
            success: function(data){
                let info = JSON.parse(data);
                console.log(info.comentarios)
                $(".content").html(info.comentarios);
            }
    })
})

    //ELIMINAR DATOS

    $(".delete").click(function(){
        console.log(this.id)
        $("#delete_id")[0].value = this.id;
    })
