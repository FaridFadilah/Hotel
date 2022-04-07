<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset("storage/CSS/frontend/style.css") }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&display=swap');
        *{
            font-family: 'Fredoka', sans-serif;
        }
        body {
            min-height: 100vh;
            padding: 0;margin: 0;
            position: relative;
            background-color: #E1E8EE;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="main">
        <input type="checkbox" aria-hidden="true" id="check">
        <div class="login">
            <form action="{{ route("login") }}" method="POST">
                @csrf
                <label for="check" aria-hidden="true">Sign In</label>
                <input type="text" name="username" placeholder="User name" required>
                <input type="password" name="password" placeholder="Password" required>
                <button class="btn">Sign In</button>
            </form>
            <p >Jika tidak memiliki akun, click tulisan signup</p>
        </div>
        <div class="signup">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <label for="check" aria-hidden="true">Sign up</label>
                <input type="text" name="name" placeholder="name" required>
                <input type="text" name="username" placeholder="User name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                <button class="btn">Sign up</button>
            </form>
        </div>
    </div>
</body>
</html>