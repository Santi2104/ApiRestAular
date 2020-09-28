<template>
    <div class="container">
        <div class="row justify-content-center">
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Codigo</th>
                      <th>Carrera</th>
                      <th>Departamento</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr v-for="carrera in carreras" :key="carrera.id">
                          <th>{{carrera.id}}</th>
                          <th>{{carrera.code}}</th>
                          <th>{{carrera.name}}</th>
                          <th>{{carrera.department.name}}</th>
                      </tr>
                  </tbody>
                </table>
              </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['datos'],
    mounted() {
        console.log("Component mounted.");
        console.log(this.carreras);
    },
    data(){
        return {
            carreras: JSON.parse(this.datos),
        }
    }

};
</script>
