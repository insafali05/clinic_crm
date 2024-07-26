<!DOCTYPE html>
<html>

<head>
    <title>Clinic Admin Login</title>
</head>

<body>
    <h1>Clinic Admin Login</h1>
    <form method="POST" action="{{ url('clinicadmin/login') }}">
        @csrf
        <div>
            <label>Contact Number:</label>
            <input type="text" name="contact_number" required>
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>

</html>
