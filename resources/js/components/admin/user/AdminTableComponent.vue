<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <b-card>
                    <b-row>
                        <b-col md="3" class="mb-3">
                            <b-form-input
                                v-model="filter"
                                type="search"
                                placeholder="Buscar registro"
                            ></b-form-input>
                        </b-col>
                    </b-row>
                    <b-row>
                        <b-col md="12">
                            <b-table
                                hover
                                bordered
                                fixed
                                responsive
                                
                                :items="usuarios"
                                :fields="fields"
                                :filter="filter"
                                :per-page="perPage"
                                :current-page="currentPage"
                                @filtered="onFiltered"
                            >
                            </b-table>
                            <b-pagination
                                v-model="currentPage"
                                :total-rows="totalRows"
                                :per-page="perPage"
                                align="center"
                            ></b-pagination>
                        </b-col>
                    </b-row>
                </b-card>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["data"],
    mounted() {
        this.totalRows = this.usuarios.length;
    },
    data() {
        return {
            usuarios: JSON.parse(this.data),
            perPage: 5,
            currentPage: 1,
            totalRows: 1,

            fields: [
                {
                    key: "name",
                    label: "Nombre",
                    sortable: true
                },
                {
                    key: "role.display_name",
                    label: "Rol del usuario",
                    sortable: true
                },
                {
                    key: "created_at",
                    label: "Fecha de creacion",
                    sortable: true
                }
            ],
            filter: ""
        };
    },
    computed: {
        row() {
            return this.usuarios.length;
        }
    },
    methods: {
        onFiltered(filteredItems) {
        // Trigger pagination to update the number of buttons/pages due to filtering
        this.totalRows = filteredItems.length
        this.currentPage = 1
      }
    }
};
</script>

<style></style>
