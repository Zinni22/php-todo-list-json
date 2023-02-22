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
        .get('http://localhost/Boolean/67%20Lezione%20-%20API,%20To%20do%20list/php-todo-list-json/api.php')
        .then((response) => {
            this.toDoList = response.data.toDos
        })
    }
}).mount('#app');
