<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        table {
            width: 100%;
            border: 1px solid black;
        }

        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h2>Laporan Data</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Avatar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $i => $d)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $d->username }}</td>
                <td>{{ $d->password }}</td>
                <td>{{ $d->email }}</td>
                <td><img src="{{ url('/storage/app/public/'.$d->avatar) }}" alt="" width="100px"><br></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>