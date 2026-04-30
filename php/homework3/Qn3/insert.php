<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
</head>

<body>

    <main>

        <h1 class="text-center">Create Project</h1>
        <div class="container border shadow p-4 mt-5 mb-4">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="" class="form-label">Project Name</label>
                    <input type="text" class="form-control" name="project_name" id="" aria-describedby="helpId"
                        placeholder="" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Project Description</label>
                    <input type="text" class="form-control" name="project_description" id="" aria-describedby="helpId"
                        placeholder="" />
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label> <select class="form-select" name="status">
                        <option value="pending">Pending</option>
                        <option value="in-progress">In Progress</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>


                <div class="mb-3">
                    <label for="" class="form-label">Start Date</label>
                    <input type="date" class="form-control" name="start_date" id="" aria-describedby="helpId"
                        placeholder="" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">End Date</label>
                    <input type="date" class="form-control" name="end_date" id="" aria-describedby="helpId"
                        placeholder="" />
                </div>

                <button type="submit" class="btn btn-primary">
                    Submit
                </button>



            </form>
        </div>


    </main>

    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>


<?php
include "db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $project_name = $_POST['project_name'];
    $project_description = $_POST['project_description'];
    $status = $_POST['status'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $sql = $conn->prepare('insert into projects (project_name, project_description, status, start_date, end_date) values (?,?,?,?,?)');
    $sql->bind_param('sssss', $project_name, $project_description, $status, $start_date, $end_date);

    if ($sql->execute()) {
        echo "data inserted...";
    } else {
        echo "not inserted..";
    }
}
?>