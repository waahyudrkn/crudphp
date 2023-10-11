<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>list</h2>
        <a class="btn btn-primary" href="/crud/create.php" role="button">new clients</a>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>address</th>
                        <th>created_at</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                          include('koneksi.php'); 

                            //membaca data table dalam database 
                            $sql = "SELECT * FROM clients";
                            $result = $conn->query($sql);

                            if (!$result){
                                die("data salah" . $conn->error);
                            }

                            //membaca data pada baris didatabase
                            while($row = $result->fetch_assoc()) {
                                echo"

                                <tr>
                                    <td>$row[id]</td>
                                    <td>$row[name]</td>
                                    <td>$row[email]</td>
                                    <td>$row[phone]</td>
                                    <td>$row[address]</td>
                                    <td>$row[created_at]</td>
                                    
                                    <td>
                                        <a class='btn btn-primary btn-sm' href='/crud/edit.php?id=$row[id]'>edit</a>
                                        <a class='btn btn-danger btn-sm' href='/crud/delete.php?id=$row[id]'>delete</a>
                                    </td>
                                </tr>
                                ";
                            };
                    ?>
                    
                </tbody>
            </table>
    </div>
</body>
</html>