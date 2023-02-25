const { createApp } = Vue;

createApp({
    data() {
        return {
            toDoList: [],
            newTask: {
                todo: '',
                done: false,
            }
        };
    },
    methods: {
        addTask(){
            console.log(this.newTask);

            axios
                .post('create.php', {
                    task: this.newTask
                },{
                    headers:{
                        'Content-type': 'multipart/form-data' //con questa si simula la sottomissione di un form
                    }
                })
                .then((response) => {
                    console.log(response);

                    this.toDoList.push({
                        todo: this.newTask.todo,
                        done: this.newTask
                    })

                    this.newTask.todo = ' ';
                })
        },
    },
    created() {
        axios
        .get('api.php')
        .then((response) => {
            this.toDoList = response.data.toDos
        })
    }
}).mount('#app');
