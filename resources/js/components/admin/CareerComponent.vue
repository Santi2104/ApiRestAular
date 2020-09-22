<template>
    <div>
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 30px">Codigo</th>
                                    <th>Nombre</th>
                                    <th>Departamento</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="carrera in carreras" :key="carrera.id">
                                    <th>{{carrera.code}}</th>
                                    <th>{{carrera.name}}</th>
                                    <th>{{carrera.department.display_name}}</th>
                                    <th><a :href="setUrl(carrera.id)" type="button"
                                    class="btn btn-block btn-outline-primary">Editar</a></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ['data','ruta'],
    mounted() {
        //console.log(this.setUrl());
    },
    data() {
        return {
            carreras: JSON.parse(this.data),

        }
    },
    methods: {
        setUrl: function(id){
            return `${this.ruta}/admin/careers/${id}/edit`;
        }
    },

};
</script>
