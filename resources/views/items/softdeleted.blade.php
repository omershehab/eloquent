<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SOFT DELETED</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>SOFT DELETED ITEMS PAGE</h1>
        <br><br><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">titel</th>
                    <th scope="col">body</th>
                    <th scope="col">deleted At</th>
                    <th scope="col"> action</th>
                </tr>
            </thead>
            <tbody>


                @foreach ($items as $item)
                    <tr>

                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->body }}</td>
                        <td>{{ $item->deleted_at }}</td>
                        <td>  <a href="{{route('item.restore', $item->id) }}" class="">restore</a>  </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</body>

</html>
