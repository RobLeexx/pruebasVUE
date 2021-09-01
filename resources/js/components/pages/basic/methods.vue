<template>
    <div>
        <h1>data disque {{views}}</h1>
        <button @click="updateCounter(1)">Aumentar</button>
        <button @click="updateCounter(-1)">Quitar</button>
        <br><br><br>

        <div v-for="(blog, i) in blogs" :key="i" v-if="blogs.length">
                <h1>{{blog.title}}</h1>
                <p>{{blog.post}}</p>
        </div>

        <br><br><br>

        <div>
            <h1 v-if="showItem">show if IF true</h1>
            <h1 v-else>show if IF false</h1>
        </div>
        
        <button @click="showItem = !showItem">Cambiar item</button>

    </div>
</template>

<script>
export default {
    data(){
        return{
            views: 0,
            blogs: [],
            showItem: false
        }
    },
    methods:{
        updateCounter(number){
            this.views += number
        },
        changeShowItem(){
            this.showItem = !this.showItem 
        }
    },
    created(){
        this.views = 100
        let posts = [{title: 'titulo 1 de prueba loops', 'post' : 'supuestamente 1', id: 1},
                {title: 'titulo 2 de prueba loops', 'post' : 'supuestamente 2', id: 2},
                {title: 'titulo 3 de prueba loops', 'post' : 'supuestamente 3', id: 3},
                {title: 'titulo 4 de prueba loops', 'post' : 'supuestamente 4', id: 4},]

            this.blogs = posts
    }
}
</script>