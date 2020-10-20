<template>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Listado de horarios</h5>
            <table class="table table-bordered" id="horario">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Inicia</th>
                        <th>Finaliza</th>
                        <th>color</th>
                        <th>periodo</th>
                        <th>Mas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="horario in horarios" :key="horario.id">
                        <th>{{ horario.id }}</th>
                        <th>{{ horario.start }}</th>
                        <th>{{ horario.end }}</th>
                        <th>{{ horario.color }}</th>
                        <th>
                            {{ horario.period_id }}</th>
                        <th>
                            <a href="#" class="text-muted"
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
    props: ["data"],
    mounted() {
        this.setTable()
    },
    data() {
        return {
            horarios: JSON.parse(this.data)
        };
    },
    methods: {
        setTable: function() {
            $("#horario").DataTable({
                paging: true,
                lengthChange: false,
                searching: true,
                ordering: true,
                info: true,
                autoWidth: false,
                responsive: true
            });
        }
    }
};
</script>

<style></style>
