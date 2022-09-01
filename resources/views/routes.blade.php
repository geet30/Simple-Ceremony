<html>

<head>
    <title>Laravel Routes</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js">
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js">
    </script>
</head>

<body>
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col">
                <div class=" card p-3 bg-dark text-white">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0 text-capitalize">{{ $title }}</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush" id="data-table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">HTTP Method</th>
                                    <th scope="col" class="sort" data-sort="budget">Route</th>
                                    <th scope="col" class="sort" data-sort="status">Name</th>
                                    <th scope="col" class="sort" data-sort="completion">Corresponding Action</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($routeCollection as $value)
                                    <tr>
                                        <td>{{ $value->methods()[0] }}</td>
                                        <td>{{ $value->uri() }}</td>
                                        <td>{{ $value->getName() }}</td>
                                        <td>{{ $value->getActionName() }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('#data-table').DataTable();
        $('input[type="search"]')[0].focus();
    });
</script>

</html>
