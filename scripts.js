const { createApp } = Vue;

createApp({
    data() {
        return {
            toDoList: [],
        };
    },
    methods: {

    },
    created() {
        axios
        .get('api.php')
        .then((response) => {
            this.toDoList = response.data.toDos
        })
    }
}).mount('#app');
