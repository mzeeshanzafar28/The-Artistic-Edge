<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artists List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Varela Round', sans-serif;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 20px rgba(0,0,0,0.15);
        }
        .table-responsive {
            border-radius: 10px;
            overflow: hidden;
        }
        .table thead th {
            background-color: #343a40;
            color: white;
        }
        .action-btn {
            transition: all 0.3s ease;
            margin: 0 5px;
        }
        .action-btn:hover {
            transform: scale(1.2);
        }
        .edit-btn {
            color: #17a2b8;
        }
        .delete-btn {
            color: #dc3545;
        }
        .view-btn {
            color: #28a745;
        }
        .btn-home {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            border: none;
            transition: all 0.3s ease;
        }
        .btn-home:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <div class="container mt-5 animate__animated animate__fadeIn">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center mb-4">Artists</h2>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th style="width: 20%">Name</th>
                                <th style="width: 25%">Bio</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>{{$d->id}}</td>
                                <td>{{$d->Name}}</td>
                                <td>{{ Str::limit($d->Bio, 100) }}</td>
                                <td>
                                    <a href="{{ route('artist.show', $d->id) }}" class="action-btn view-btn" title="View" data-toggle="tooltip">
                                        <i class="material-icons">visibility</i>
                                    </a>
                                    <a href="{{ route('artist.edit', $d->id) }}" class="action-btn edit-btn" title="Edit" data-toggle="tooltip">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <a href="#" onclick="deleteArtist('{{ route('artist.destroy', $d->id) }}', '{{ csrf_token() }}')" class="action-btn delete-btn" title="Delete" data-toggle="tooltip">
                                        <i class="material-icons">delete</i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-center mt-4">
                    <a href="{{ route('homepage') }}" class="btn btn-primary btn-home">
                        <i class="material-icons">home</i> Homepage
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "language": {
                    "paginate": {
                        "previous": "<i class='material-icons'>chevron_left</i>",
                        "next": "<i class='material-icons'>chevron_right</i>"
                    }
                }
            });
            
            $('[data-toggle="tooltip"]').tooltip();
        });

        function deleteArtist(url, csrfToken) {
            if (confirm('Are you sure you want to delete this artist profile?')) {
                fetch(url, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json',
                    },
                }).then(response => {
                    if (response.ok) {
                        window.location.reload();
                    } else {
                        window.location.reload();
                    }
                });
            }
        }
    </script>
</body>
</html>