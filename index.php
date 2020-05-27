<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="Librerias/bootstrap-4.3.1/css/bootstrap.css">
</head>
<script src="Librerias/jquery-3.3.1.min.js"></script>
<script src="Librerias/bootstrap-4.3.1/js/bootstrap.bundle.js"></script>
<script src="Librerias/bootstrap-4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="Librerias/bootstrap-4.3.1/js/bootstrap.js"></script>
<script src="JS/index.js"></script>

<body>
    <h1 class="text-center">Pagination</h1>
    <div class="container ">

    </div>
    <div class="container ">
        <!-- Table structure here -->
        <table class="table table-hover" id="our-table">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>First</th>
                    <th>Last</th>
                </tr>
            </thead>
            <tbody id="table-body">

            </tbody>
        </table>
    </div>

    <div class="container ">
        <div class="text-center" id="pagination-wrapper"></div>
    </div>
</body>

</html>