<template>
    <div class="row">
        <div class="col-md-12">
            <h3>Ultimos horarios agregados</h3>
            <div class="row">
                <div
                    class="col-md-3"
                    v-for="horario in horarios"
                    :key="horario.id"
                >
                    <div class="callout callout-info">
                        <h5>{{ horario.name }}</h5>
                        <p>{{ horario.title }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["datos"],
    mounted() {
        console.log(this.horarios);
    },
    data() {
        return {
            horarios: JSON.parse(this.datos)
        };
    }
};
</script>

<style></style>
