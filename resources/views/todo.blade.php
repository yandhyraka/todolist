<!DOCTYPE html>
<html>

<head>
    <title>ToDo List</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>ToDo List</h1>
                <ol>
                    @foreach($todo as $td)
                    <form action="{{ url('todo/'.$td->id_todo) }}" method="POST">
                        {{ csrf_field() }} {{ method_field('DELETE') }}
                        <li>{{ $td->item }}&nbsp;&nbsp;&nbsp;
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" name="delete" class="btn btn-danger">X</button>
                        </li>
                    </form>
                    @endforeach
                </ol>
                <form action="todo" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <input type="text" class="form-control" name="todo_item" placeholder="Item baru...">
                    </div>
                    <button type="submit" class="btn btn-success">Add</button>
                </form>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
