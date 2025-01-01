<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AYUSH</title>
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>

<div class="container">
    <div class="wrapper">
        <form action="{{ route('store') }}" method="post">
            @csrf
            <div class="title">CREATE A NEW ACCOUNT</div>
            
            <div class="row">
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Username" id="name" required>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="row">
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email Id" required>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="row">
                <input type="tel" id="number" name="number" value="{{ old('number') }}" placeholder="Phone" required>
                @error('number')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="row">
                <input type="text" name="city" value="{{ old('city') }}" placeholder="City" required>
                @error('city')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="row">
                <input type="text" name="state" value="{{ old('state') }}" placeholder="State" required>
                @error('state')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="row">
                <textarea name="about" placeholder="About You" required>{{ old('about') }}</textarea>
                @error('about')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="row">
                <input type="password" id="password" name="password" placeholder="Your Password" required>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="row">
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
            </div>

            <div class="row">
                <select name="user_type" id="user_type" required>
                    <option value="" disabled selected>Select User Type</option>
                    <option value="mentor" {{ old('user_type') == 'mentor' ? 'selected' : '' }}>Mentor</option>
                    <option value="investor" {{ old('user_type') == 'investor' ? 'selected' : '' }}>Investor</option>
                    <option value="incubator" {{ old('user_type') == 'incubator' ? 'selected' : '' }}>Incubator</option>
                    <option value="public" {{ old('user_type') == 'public' ? 'selected' : '' }}>Public</option>
                </select>
                @error('user_type')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="row button">
                <input type="submit" value="Register">
            </div>

            <div class="signup-link">Already a member? <a href="{{ route('login') }}">Login now</a></div>
        </form>
    </div>
</div>

</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    
    body {
        background: #f4f7f8;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 0;
        margin: 0;
    }
    
    .container {
        max-width: 600px;
        width: 100%;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(18, 186, 3, 0.42);
    }

    .wrapper .title {
        font-size: 24px;
        font-weight: 600;
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }
    
    .wrapper form .row {
        margin-bottom: 15px;
        position: relative;
    }

    .wrapper form .row input, 
    .wrapper form .row select, 
    .wrapper form .row textarea {
        width: 100%;
        padding: 12px 15px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid #dcdcdc;
        transition: all 0.3s ease;
    }
    
    form .row input:focus, 
    form .row select:focus, 
    form .row textarea:focus {
        border-color: #16a085;
        box-shadow: inset 0px 0px 3px rgba(26, 188, 156, 0.25);
    }

    .wrapper form .row input::placeholder, 
    .wrapper form .row textarea::placeholder {
        color: #999;
    }
    
    .wrapper form .row textarea {
        height: 80px;
        resize: none;
    }

    .wrapper form .button input {
        width: 100%;
        padding: 12px;
        font-size: 18px;
        font-weight: 500;
        background: #00b074;
        color: #fff;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        transition: background 0.3s;
    }

    .wrapper form .button input:hover {
        background: #008e5d;
    }

    .signup-link {
        text-align: center;
        margin-top: 20px;
        font-size: 15px;
    }

    .signup-link a {
        color: #00b074;
        text-decoration: none;
    }

    .signup-link a:hover {
        text-decoration: underline;
    }
    
    .text-danger {
        color: red;
        font-size: 14px;
    }
</style>
</html>
