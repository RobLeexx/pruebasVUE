<template>
    <div>
        <h1 ref="myref" >Hook Tutorial</h1>
        <h2>My nombre es: {{name}}</h2>
    </div>
</template>

<script>
export default {
    data(){
        return{
            name: 'nombre1'
        }
    },

    beforeCreate()
    {
        console.log(this.name)
    },

    created()
    {
        console.log('cositas de prueba'. this.name)
    },
    mounted()
    {
        console.log(this.$refs.myref)
    }
}
</script>