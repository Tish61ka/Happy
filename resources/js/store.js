import { createStore } from 'vuex';

export default createStore({
   state(){
       return {
            user: {},
            isAuth: false,
       }
   }
});
