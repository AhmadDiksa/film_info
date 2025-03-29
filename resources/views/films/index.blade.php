<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Film</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }
        .table-container {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .table thead {
            background: #007bff;
            color: white;
        }
        .table tbody tr:hover {
            background: #f1f1f1;
        }
        .badge {
            font-size: 14px;
            font-weight: 600;
        }
        h2 {
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="table-container">
            <h2 class="mb-4 text-center text-primary">Daftar Film</h2>
            <table class="table table-striped table-hover text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Genre</th>
                        <th>Director</th>
                        <th>Tahun Rilis</th>
                        <th>Rating</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($films as $index => $film)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $film->title }}</td>
                            <td>{{ $film->genre }}</td>
                            <td>{{ $film->director }}</td>
                            <td>{{ $film->release_year }}</td>
                            <td><span class="badge bg-success">{{ $film->rating }}</span></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
