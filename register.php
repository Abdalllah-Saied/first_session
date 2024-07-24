<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $image=$_FILES['image'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    if($image['size']>1048576){
        header('location: index.php?error=image greater than 1M');
        exit();
    }
    //check if image png\
    if($image['type']!='image/png'){
        header('location: index.php?error=image not png');
        exit();
    }
    if (!is_dir('uploads')){
        mkdir('uploads',0777);
    }
   $unique= uniqid();
    //move image
    move_uploaded_file($image['tmp_name'],'uploads/'.$unique.'.png');
    $imagePath="uploads/$unique.png";
    $data=[
        'name'=>$name,
        'email'=>$email,
        'password'=>$password,
        'image'=>$imagePath
    ];
    $fileName='database.json';
    $users=file_get_contents($fileName);
    $users=json_decode($users,true);
    $users[]=$data;
    $users_data=$users;
    file_put_contents($fileName,json_encode($users));
//    header('location: users.php');
//    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registered Users</title>
</head>
<body>
<h2>Registered Users</h2>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Image</th>
    </tr>
        <?php foreach ($users_data as $user){ ?>
    <tr>
        <td><?php echo $user['name'] ?></td>
        <td><?php echo $user['email'] ?></td>
        <td><img src="<?php echo $user['image'] ?>" alt="User Image" style="width:100px;"></td>
    </tr>
        <?php }; ?>
</table>
</body>
</html>
