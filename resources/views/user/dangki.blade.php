<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        form {
            border: 3px solid #f1f1f1;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<h1>Đăng ký khách hàng</h1>

<form action="/user/dang-ki" method="post">
    @csrf
    <div class="imgcontainer">

    </div>
    <div class="container">
        <label for="psw"><b>Identity Number</b></label>
        <input type="text" placeholder="Enter Identity Number" name="identityNumber">
        @error('identityNumber')
        <div style="color: red">* {{ $message }}</div>
        @enderror
        <label for="uname"><b>Fistname</b></label>
        <input type="text" placeholder="Enter Fistname" name="fistname">
        @error('fistname')
        <div style="color: red">* {{ $message }}</div>
        @enderror
        <label for=""><b>LastName</b></label>
        <input type="text" placeholder="Enter LastName" name="lastName">
        @error('lastName')
        <div style="color: red">* {{ $message }}</div>
        @enderror
        <label for="psw"><b>Phone</b></label>
        <input type="text" placeholder="Enter Phone" name="phone">
        @error('phone')
        <div style="color: red">* {{ $message }}</div>
        @enderror
        <label for="psw"><b>Gender</b></label>
        <input type="radio" name="gender" value="0"> Male
        <input type="radio" name="gender" value="1"> Female
        @error('gender')
        <div style="color: red">* {{ $message }}</div>
        @enderror
        <button type="submit">Save</button>
        <button >Reset</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>
</form>
</body>
</html>
