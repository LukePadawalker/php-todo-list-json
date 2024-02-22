<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js"
        integrity="sha512-NQfB/bDaB8kaSXF8E77JjhHG5PM6XVRxvHzkZiwl3ddWCEPBa23T76MuWSwAJdMGJnmQqM0VeY9kFszsrBEFrQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="Vue.js" defer></script>
    <title>Todo list</title>
</head>

<body>
    <main id="root">
        <div class="container">
            <p class="h1 pt-4 pb-4 white-text d-flex justify-content-center">Todo List</p>
            <ul class="list-group">
                <li v-for="task in tasks" class="list-group-item d-flex justify-content-between align-items-center">
                    {{task.cd text}}<button type="button" class="btn btn-outline-danger"><i
                            class="fa-solid fa-trash"></i></button>
                </li>

            </ul>

            <form action="" class="input-group mb-3 mt-4" @submit.prevent="addTask">
                <input v-model.trim="newTask" name="task" type="text" class="form-control" placeholder="Inserisci task"
                    aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-primary" type="submit" id="button-addon2">Inserisci</button>
            </form>
        </div>
    </main>

</body>

</html>