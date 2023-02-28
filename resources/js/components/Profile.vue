<template>
    <div>
        <a @click.prevent="logout" v-show="this.$store.state.isAuth">Выход</a> 
    </div>
</template> 

<script>

import api from "../api";
export default {
    setup () {
        

        return {}
    },
    methods:{
        logout(){
            api.get('/api/logout').then(r => {
                window.localStorage.removeItem('token');
                this.$store.state.isAuth = false;
                this.$router.push({
                    name: 'Login'
                })
            })
        },
    }
}
</script>

<style lang="scss" scoped>

</style>