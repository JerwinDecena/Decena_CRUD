<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    +
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
</head>
<body>
    <div>
        <div class="container" >
            <div class="row">
                <div class="col-12" >
                    <table clas="table table-hover table-stripped">
                        <thead>
                            <tr>
                                <th>Fullname</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Province</th>
                                <th>Zip</th>
                                <th>Birthdate</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                                <td>{{ $students->Fullname }}</td>
                                <td>{{ $students->Email }}</td>
                                <td>{{ $students->Phone }}</td>
                                <td>{{ $students->Address }}</td>
                                <td>{{ $students->City }}</td>
                                <td>{{ $students->Province }}</td>
                                <td>{{ $students->Zip }}</td>
                                <td>{{ $students->Birthdate }}</td>
                                <td>
                                    <a href="{{ url('student', $student->id}}/edit" class="btn btn-outline-success-btn-sm">edit</a>
                                    <form action="{{ url('student', $student->id) }}" method="post">
                                        @method('method')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure, you want to delete')">Delete</button>
                                    </form>
                                </td>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</body>
</html>