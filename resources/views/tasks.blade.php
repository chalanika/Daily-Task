<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="text-center">
            <h1>Daily Task</h1>
            <div class="row">
                <div class="col-md-12">
                <form method="post" action="/saveTask">
                    <input type="text" class="form-control" name="task" placeholder="Enter your task here">
                    {{csrf_field()}}
                    <br>
                    <input type="submit" class="btn btn-primary" value="save">
                    <input type="button" class="btn btn-warning" value="clear">
                </form>
                    <br>
                    <table class="table table-dark mt-5">
                        <th>ID</th>
                        <th>Task</th>
                        <th>Completed</th>
                        <tr>
                            <td>1</td>
                            <td>Ihave to learn laravel today</td>
                            <td>Not yet</td>
                        </tr>
                    </table>
               
                </div>
            </div>
        </div>
    </div>
</body>
</html>