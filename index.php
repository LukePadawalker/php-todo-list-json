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
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Todo list</title>
</head>

<body>
    <main id="root">
        <div class="container">
            <p class="h1 pt-4 pb-4 white-text d-flex justify-content-center">Todo List</p>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">An item<button
                        type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">A second item<button
                        type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">A third item<button
                        type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">A fourth item<button
                        type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">And a fifth one<button
                        type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                </li>
            </ul>

            <div class="input-group mb-3 mt-4">
                <input type="text" class="form-control" placeholder="Inserisci task" aria-label="Recipient's username"
                    aria-describedby="button-addon2">
                <button class="btn btn-primary" type="button" id="button-addon2">Inserisci</button>
            </div>
        </div>
    </main>

</body>

</html>