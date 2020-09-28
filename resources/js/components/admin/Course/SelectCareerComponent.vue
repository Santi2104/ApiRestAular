<template>
    <div>
        <div class="form-group">
            <label>Carrera a la que pertenece</label>
            <select
                name="code"
                id="code"
                class="form-control select2"
                v-model="selected"
                multiple
            >
                <option
                    v-for="carrera in carreras"
                    :key="carrera.id"
                    :value="carrera.code"
                    >{{ carrera.name }}</option
                >
            </select>
        </div>
        <div class="form-group">
            <label>Codigo de carrera</label>
            <input
                type="text"
                :value="this.selected"
                class="form-control col-3"
                id=""
                name=""
                disabled
            />
                <input
                type="number"
                class="form-control col-3"
                id="number"
                name="number"
            />
        </div>
    </div>
</template>

<script>
export default {
    props: ["data", "code"],
    mounted() {
        //console.log(this.selected);
    },
    data() {
        return {
            selected: [this.code],
            carreras: JSON.parse(this.data)
        };
    }
};
</script>
