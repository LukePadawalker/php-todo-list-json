const { createApp } = Vue;

const endpoint = 'http://localhost:8888/php-todo-list-json/tasks/'

const app = createApp({
    data: () => ({
        tasks: [],
        newTask: ''
    }),
    methods: {
        addTask() {
            const data = { task: this.newTask }
            const config = {
                headers: { 'Content-type': 'multipart/form-data' }
            }
            axios.post(endpoint, data, config).then(res => {
                this.tasks = res.data
            })

        }
    },
    created() {
        axios.get(endpoint).then(res => [
            this.tasks = res.data
        ])

    }
})


app.mount('#root');
