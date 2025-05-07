<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Project</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php 
        $users =[
            ["id" =>1, "name" => "Sabuj","email" => "sabuj@gmail.com", "age" => 23 ],
            ["id" =>2, "name" => "Ali","email" => "ali@gmail.com", "age" => 21 ],
            ["id" =>3, "name" => "farhan","email" => "farhan@gmail.com", "age" => 20 ],
            ["id" =>4, "name" => "Rakib","email" => "rakib@gmail.com", "age" => 21 ],
            ["id" =>5, "name" => "Shakil","email" => "shakil@gmail.com", "age" => 25 ],
        ];
    ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($users as $user):?>
                <tr>
                    <td><?php echo htmlspecialchars($user['id']);?></td>
                    <td><?php echo htmlspecialchars($user['name']);?></td>
                    <td><?php echo htmlspecialchars($user['email']);?></td>
                    <td><?php echo htmlspecialchars($user['age']);?></td>
                </tr>
                <?php endforeach;?>
        </tbody>
    </table>
</body>

</html>