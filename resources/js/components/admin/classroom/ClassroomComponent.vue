<template>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered" id="aulas">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Edificio</th>
                                <th>Tipo de aula</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="aula in aulas" :key="aula.id">
                                <th>{{ aula.name }}</th>
                                <th>{{ aula.building.name }}</th>

                                <th>{{ aula.class_room_type.name }}</th>
                                <th>
                                    <a
                                        :href="setShowUrl(aula.id)"
                                        type="button"
                                        class="btn btn-block btn-outline-primary"
                                        >Mas detalles</a
                                    >
                                    <a
                                        :href="setEditUrl(aula.id)"
                                        type="button"
                                        class="btn btn-block btn-outline-secondary"
                                        >Editar</a
                                    >
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["data", "ruta"],
    mounted() {
        console.log(this.ruta);
        this.setTable();
    },
    data() {
        return {
            aulas: JSON.parse(this.data)
        };
    },
    methods: {
        setTable: function() {
            $("#aulas").DataTable({
                paging: true,
                lengthChange: false,
                searching: true,
                ordering: true,
                info: true,
                autoWidth: false,
                responsive: true
            });
        },
        setShowUrl: function(id) {
            return `${this.ruta}/admin/classrooms/${id}`;
        },
        setEditUrl: function(id){
            return `${this.ruta}/admin/classrooms/${id}/edit`;
        }
    }
};
</script>
