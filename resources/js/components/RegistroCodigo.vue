<template>
    <div class="container">
        <div class="input-registro-codigo-container">
            <input v-model="codigo_colaborador" type="text" class="input-registro" 
            placeholder="Ingrese el código del colaborador aquí"/>
            <button @click="saveRegistroColaborador()" class="btn-registro">Registrar hora de ingreso</button>
        </div>
    </div>
</template>

<style>
    .btn-registro{
        font-weight: bold;
        cursor: pointer;
        padding: 10px;
        margin: 0 10px 20px 0;
        border: 1px solid #ccc;
        background: rgb(196, 84, 183);
        color: #fff;
    }

    .input-registro{
        padding: 10px;
        border-top: none;
        border-left: none;
        border-right: none;
        outline: none;
        border-bottom: 1px #595959 solid;
        width: 320px;
    }
</style>

<script>
    export default {
        data(){
            return{
                codigo_colaborador: ""
            }
        },

        methods:{
            //Petición para guardar los registros 
            saveRegistroColaborador(){
                let me = this;
                let url = '/';

                axios.post(url,{
                    'codigo_colaborador': this.codigo_colaborador
                }).then(function(response){
                    console.log(response);
                    alert("Se ha ingresado el registro con éxito.");
                    this.clearFields();
                }).catch(function (error) {
                    console.log(error);
                });   
            },
            //Limpiar los campos del input
            clearFields(){
                this.codigo_colaborador = "";
            }
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
