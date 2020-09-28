<template>
            <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered" id="materias">
                            <thead>
                                <tr>
                                    <th style="width: 30px">Codigo</th>
                                    <th>Nombre</th>
                                    <th>Carrera</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="materia in materias" :key="materia.id">
                                    <th>{{materia.code}}</th>
                                    <th>{{materia.title}}</th>
                                    <th>{{materia.career.name}}</th>
                                    <th><a :href="setUrl(materia.id)" type="button"
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
  props: ["data","ruta"],
  mounted() {
    this.setTabla();
  },
  data() {
    return {
      materias: JSON.parse(this.data),
    };
  },
  methods: {
    setTabla: function () {
      $("#materias").DataTable({
        paging: true,
        lengthChange: false,
        searching: true,
        ordering: true,
        info: true,
        autoWidth: false,
        responsive: true,
      });
    },
    setUrl: function (id) {
      return `${this.ruta}/admin/courses/${id}/edit`;
    },
  },
};
</script>
