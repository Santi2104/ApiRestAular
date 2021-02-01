<template>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered" id="horarios">
                <thead>
                    <tr>
                        <th>Materia</th>
                        <th>Carrera</th>
                        <th>Aula</th>
                        <th>Tipo de clase</th>
                        <th>fecha</th>
                        <th>Mas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="horario in horarios" :key="horario.id">
                        <th>{{ horario.title }}</th>
                        <th>{{ horario.name }}</th>
                        <th>{{ horario.aula }}</th>
                        <th>{{ horario.tipo_clase }}</th>
                        <th>
                            {{ horario.day }} {{ horario.start }} -
                            {{ horario.end }}
                        </th>
                        <th>
                            <a :href="setShowUrl(horario.id)" class="text-muted"
                                ><i class="fas fa-search"></i
                            ></a>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    props: ["data", "ruta"],
    mounted() {
        console.log(this.horarios);
        this.setTable();
    },
    data() {
        return {
            horarios: JSON.parse(this.data)
        };
    },
    methods: {
        setTable: function() {
            $("#horarios").DataTable({
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
            return `${this.ruta}/${id}`;
        }
    }
};
</script>

<style></style>
