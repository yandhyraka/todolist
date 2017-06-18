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
                        <li>{{ $td->item }}
                            &nbsp;&nbsp;&nbsp;<a href="{{ route('todo.edit', $td->id_todo)}}" class="btn btn-warning">edit</a>
                            &nbsp;&nbsp;&nbsp;<a href="{{ route('todo.delete', $td->id_todo)}}" class="btn btn-danger">x</a>
                        </li>
                        @endforeach
                    </ol>
                    @if(isset($todo_edit))
                    <form action="{{ route('todo.update') }}" method="post">
                        <input type="hidden" name="id_todo" value="{{ $todo_edit->id_todo}}">
                    @else
                    <form action="todo" method="post">
                    @endif
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" class="form-control" name="todo_item" placeholder="Item baru..." @if(@isset($todo_edit)) value="{{ $todo_edit->item}}" @endif>
                        </div>
                        @if(isset($todo_edit))
                        <button type="submit" class="btn btn-warning">Update</button>
                        @else
                        <button type="submit" class="btn btn-success">Add</button>
                        @endif
                    </form>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                    </div>
                </div>
            </div>
            <script src="{{ asset('js/script.js') }}"></script>
        </body>
    </html>