<!DOCTYPE html>
<html>
<head>
    <title>Request for Job Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-size: 17px; 
        }

        .form-container {
            background: #fff;
            padding: 40px 45px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 400px; 
        }

        h2 {
            text-align: center;
            color: #333;
            font-size: 22px;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px 12px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        button {
            width: 100%;
            background-color: #7661af;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 15px;
        }

        button:hover {
            background-color: #6651a1;
        }

        p {
            margin-top: 18px;
            font-weight: bold;
            font-size: 17px;
        }

        label {
            display: block;
            margin: 6px 0;
            font-size: 16px;
        }

        input[type="radio"] {
            transform: scale(1.2); 
            margin-right: 6px;
        }

        .success {
            color: green;
            text-align: center;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .error {
            color: red;
            font-size: 0.95em;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Request for Job Form</h2>

        @if(session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        <form method="POST" action="{{ route('jobrequests.store') }}">
            @csrf

            <input type="text" name="fullname" placeholder="Full Name" value="{{ old('fullname') }}" required>
            @error('fullname') <span class="error">{{ $message }}</span><br>@enderror

            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
            @error('email') <span class="error">{{ $message }}</span><br>@enderror

            <input type="text" name="address" placeholder="Address" value="{{ old('address') }}" required>
            @error('address') <span class="error">{{ $message }}</span><br>@enderror

            <input type="text" name="postalcode" placeholder="Postal Code" value="{{ old('postalcode') }}" required>
            @error('postalcode') <span class="error">{{ $message }}</span><br>@enderror

            <input type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}" required>
            @error('phone') <span class="error">{{ $message }}</span><br>@enderror

            <p>Please send me information on the following job:</p>
            @foreach($jobs as $job)
                <label>
                    <input type="radio" name="job" value="{{ $job->job }}" {{ old('job') == $job->job ? 'checked' : '' }}>
                    {{ $job->job }}
                </label>
            @endforeach
            @error('job') <span class="error">{{ $message }}</span><br>@enderror

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
