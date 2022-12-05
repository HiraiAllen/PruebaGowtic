<template>
    <div>
        <table class="default">
            <tr>
                <th>Código</th>
                <th>Hora y fecha de Ingreso</th>
            </tr>

            <tr v-for="item in lista_colaboradores">
                <td>{{item.codigo_colaborador}}</td>
                <td>{{item.created_at}}</td>
            </tr>
        </table>
    </div>
</template>
<script>
export default {
    data(){
        return{
            'lista_colaboradores': []
        }
    },


    created() {
        let me =this;
        let url = '/resultados/' //Ruta que hemos creado para que nos devuelva todas las tareas
        axios.get(url, {
            headers: {
            'content-type': 'application/json',
            'accept': 'application/json'
            }
        }).then(function (response) {
            //creamos un array y guardamos el contenido que nos devuelve el response
            me.lista_colaboradores = response.data;
            console.log(me.lista_colaboradores);
        })
        .catch(function (error) {
            // handle error
            console.log(error);
        });
    }
}
</script>
<style>
    table {
        table-layout: fixed;
        width: 20%;
        border-collapse: collapse;
        border: 3px solid #1c1c1c;
    }

    thead th:nth-child(1) {
        width: 20%;
    }

    thead th:nth-child(2) {
        width: 80%;
    }

    td{
        text-align: center;
    }
</style>