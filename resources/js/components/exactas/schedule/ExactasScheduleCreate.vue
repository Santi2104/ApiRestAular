<template>
  <div class="card-body">
    <div class="form-group">
      <label for="exampleInputEmail1">Seleccione el periodo del horario</label>
      <select name="period_id" class="form-control">
        <option
          v-for="periodo in periodos"
          :key="periodo.id"
          :value="periodo.id"
        >
          {{ periodo.display_name }}
        </option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Seleccione un dia</label>
      <select name="day" id="day" class="form-control">
        <option value="0">Lunes</option>
        <option value="1">Martes</option>
        <option value="2">Miercoles</option>
        <option value="3">Jueves</option>
        <option value="4">Viernes</option>
        <option value="5">Sabado</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Seleccione el aula</label>
      <select name="classroom_id" id="classroom_id" class="form-control">
        <option v-for="aula in aulas" :key="aula.id" :value="aula.id">
          {{ aula.name }}
        </option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Seleccione la carrera</label>
      <select
        name="career_id"
        v-model="carrera_seleccionada"
        class="form-control"
        @change="getMaterias"
      >
        <option
          v-for="carrera in carreras"
          :key="carrera.id"
          :value="carrera.id"
        >
          {{ carrera.name }}
        </option>
      </select>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Seleccione la materia</label>
      <select name="course_id" class="form-control">
        <option
          v-for="materia in materias"
          :key="materia.id"
          :value="materia.id"
        >
          {{ materia.title }}
        </option>
      </select>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Seleccione el tipo de clase</label>
      <select name="class_type_id" class="form-control">
        <option
          v-for="tipoClase in tipoClases"
          :key="tipoClase.id"
          :value="tipoClase.id"
        >
          {{ tipoClase.name }}
        </option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1"
        >Elija un color para identificar el horario</label
      >
      <input type="color" class="form-control" id="color" name="color" />
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Hora de inicio</label>
      <input type="time" class="form-control" id="start1" name="start1" />
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Hora de fin</label>
      <input type="time" class="form-control" id="end1" name="end1" />
    </div>
  </div>
</template>

<script>
export default {
  props: ["periodo", "aula", "tipo_clase", "carrera"],
  mounted() {
    //console.log(this.tipoClases);
    //this.getMaterias();
  },
  data() {
    return {
      periodos: JSON.parse(this.periodo),
      aulas: JSON.parse(this.aula),
      tipoClases: JSON.parse(this.tipo_clase),
      carreras: JSON.parse(this.carrera),
      carrera_seleccionada: null,
      materias: [],
    };
  },
  methods: {
    getMaterias() {
      axios
        .get(`/api/bedel-exactas/schedule-search/${this.carrera_seleccionada}`)
        .then((response) => {
          this.materias = response.data;
        });
    },
  },
};
</script>

<style>
</style>