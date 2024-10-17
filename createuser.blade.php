<!DOCTYPE html>
<html lang="en">

<head>
    <title>Validation Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
        }

        h3 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        p {
            margin: 0;
        }

        p[style="color:red;"] {
            font-size: 0.9em;
            margin-top: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #f26cad;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #ee124d;
        }

    </style>
</head>

<body>
    <h3>Create User</h3>
    <form action="{{ route('validate.store') }}" method="POST">
        @csrf
        <div>
            <label>الاسم</label>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>البريد الإلكتروني</label>
            <input type="text" name="email" value="{{ old('email') }}">
            @error('email')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>كلمة المرور</label>
            <input type="password" name="password">
            @error('password')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>تأكيد كلمة المرور</label>
            <input type="password" name="password_confirmation">
          
        </div>

        <div>
            <button type="submit">إرسال</button>
        </div>
    </form>

</body>

</html>