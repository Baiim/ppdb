<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f4f4f4;
}

.container {
    text-align: center;
}

.success-message {
    background-color: #fff;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.success-message h1 {
    color: #2ecc71;
    margin-bottom: 10px;
}

.success-message p {
    color: #555;
    margin-bottom: 20px;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    text-decoration: none;
    background-color: #2ecc71;
    color: #fff;
    border-radius: 3px;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #27ae60;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="success-message">
            <h1>Registration Successful!</h1>
            <p>Silahkan menunggu proses selanjutnya</p>
            <a href="{{route('home')}}" class="btn">Kembali</a>
        </div>
    </div>
</body>
</html>
