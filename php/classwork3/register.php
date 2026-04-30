<?php
include 'db.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $pass = password_hash($_POST["pass"],PASSWORD_BCRYPT);

    $sql = $conn->prepare("insert into users values (?,?,?,?,?,?)");
    $sql->bind_param('isisss',$id,$name,$age,$address,$email,$pass);

    if ($sql->execute()) {
        echo "New record created successfully";
        header("location:login.php");
    } else {
        echo "Error: ";
    }
}
?>
<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <div
            class="container"
        >
           <h1 >registration</h1>
        </div>
        
        <div
            class="container"
        >
            <form action="" method="POST" >
                <div class="mb-3">
                    <label for="formId1" class="form-label">id</label>
                    <input
                        type="number"
                        class="form-control"
                        name="id"
                        id="formId1"
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="formName1" class="form-label">Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        id="formName1"
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="formAge1" class="form-label">age</label>
                    <input
                        type="number"
                        class="form-control"
                        name="age"
                        id="formAge1"
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="formAddress1" class="form-label">address</label>
                    <input
                        type="text"
                        class="form-control"
                        name="address"
                        id="formAddress1"
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="formEmail1" class="form-label">email</label>
                    <input
                        type="email"
                        class="form-control"
                        name="email"
                        id="formEmail1"
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="formPass1" class="form-label">password</label>
                    <input
                        type="text"
                        class="form-control"
                        name="pass"
                        id="formPass1"
                        placeholder=""
                    />      
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
