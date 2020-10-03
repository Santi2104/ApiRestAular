<template>
    <div class="row">
        <div class="col-md-12" v-if="this.horarios == ''">
            <h4>Esta aula aun no tiene horarios asignados</h4>
        </div>
        <div class="col-md-4" v-for="horario in horarios" :key="horario.id">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        {{ horario.course.career.name }}
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <blockquote>
                        <p>{{ horario.course.code }}</p>
                        <small>{{ horario.class_type.name }} </small><br>
                        <small>{{ horario.schedule.start }} </small>
                        <small>{{ horario.schedule.end }} </small>
                    </blockquote>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- ./col -->

        <!-- ./col -->
    </div>
</template>

<script>
export default {
    props: ["aula"],
    mounted() {
        this.obtenerHorarios();
        //console.log(this.horarios);
    },
    data() {
        return {
            horarios: []
        };
    },
    methods: {
        obtenerHorarios: function() {
            axios.get(`/api/horarios/aulas/${this.aula}`).then(respuesta => {
                this.horarios = respuesta.data.data;
            });
        }
    }
};
</script>
