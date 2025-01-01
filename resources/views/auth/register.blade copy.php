<!DOCTYPE html>

<html lang="en" dir="ltr" style="margin-top: -71px;">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>AYUSH </title>
        
     
 <link rel="shortcut icon" type="image/x-icon" href="" style="margin-top: 20px;margin-left:20px;">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body style="">

  <div class="container">
    <div class="wrapper" style="max-width: 640px;
                        background: white;
                        min-height:385px;
                        width: 113%;
                        box-shadow:0px 0 23px -1px #000;
                        padding: 58px;
                        border-radius: 10px;
                        overflow: hidden;
                        margin-left: -110px;
                        height: 300px;
                        margin-top: 96px;">
          <br>
          <form action="{{ route('store') }}" method="post">
            @csrf
            <div class="title">CREATE ACCOUNT</div>
            <div class="row">
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Username" id="name" required>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="row">
                <input type="text" id="email" name="email" value="{{ old('email') }}" placeholder="Email Id" required>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="row">
                <input type="text" id="number" name="number" value="{{ old('number') }}" placeholder="Phone" required>
                @error('number')
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
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Your Password" required>
            
            </div>

            

            <div class="row">
                <select name="user_type" id="user_type" required>
                    <option value="" disabled selected>Select Role Type</option>
                    <option value="mentor" {{ old('user_type') == 'mentor' ? 'selected' : '' }}>Mentor</option>
                    <option value="investor" {{ old('user_type') == 'investor' ? 'selected' : '' }}>Investor</option>
                    <option value="incubator" {{ old('user_type') == 'incubator' ? 'selected' : '' }}>Incubator</option>
                    <option value="public" {{ old('user_type') == 'public' ? 'selected' : '' }}>Public User</option>
                </select>
                @error('user_type')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="row button">
                <input type="submit" value="Register">
            </div>
            <div class="signup-link" style="color: black;">Already a member? <a href="{{ route('login') }}">Login now</a></div>
        </form>
        

		
      </div>
    </div>
 </body>
<style>
                    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
                *{
                margin: 0;
                padding: 0;
                font-family: 'Poppins',sans-serif;
                }

                body{
                background:#eee;
                overflow: hidden;
                }
                ::selection{
                background: rgba(26,188,156,0.3);
                }
                .container{
                max-width: 440px;
                padding: 0 20px;
                margin: 119px auto;
                
                }

                .wrapper .title{
                height: 90px;
                background: transparent;
                border-radius: 5px 5px 0 0;
                color:BLACK;
                font-size: 30px;
                font-weight: 600;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-top: -59px;
                margin-left:10px;
                }
                .wrapper form{
                padding: 0px 25px 25px 25px;
                }
                .wrapper form .row{
                height: 45px;
                margin-bottom: 15px;
                position: relative;
                }
                .wrapper form .row input{
                height: 100%;
                width: 82%;
                outline: none;
                padding-left: 60px;
                border-radius: 15px;
                border: 1px solid lightgrey;
                font-size: 16px;
                transition: all 0.3s ease;
                }
                form .row input:focus{
                border-color: #16a085;
                box-shadow: inset 0px 0px 2px 2px rgba(26,188,156,0.25);
                }
                form .row input::placeholder{
                color: #999;
                }
                .wrapper form .row i{
                position: absolute;
                width: 47px;
                height: 100%;
                color: black;
                font-size: 18px;
                display: flex;
                align-items: center;
                justify-content: center;
                }
                .wrapper form .pass{
                margin: -8px 0 20px 0;
                }
                .wrapper form .pass a{
                color: #16a085;
                font-size: 17px;
                text-decoration: none;
                }
                .wrapper form .pass a:hover{
                text-decoration: underline;
                }
                .wrapper form .button input{
                color: white;
                font-size: 20px;
                font-weight: 500;
                padding-left: 0px;
                background:#00b074;
                border: 1px solid lightgrey;
                cursor: pointer;
                width: 50%;
                margin-left: 106px;
                }
                form .button input:hover{
                background: white;
                color: black;
                }
                .wrapper form .signup-link{
                text-align: center;
                margin-top: 20px;
                font-size: 17px;
                }
                .wrapper form .signup-link a{
                color:BLACK;
                text-decoration: none;
                }
                form .signup-link a:hover{
                text-decoration: underline;
                }
                  .wrapper form .row select {
                  height: 100%;
                  width: 96%; /* Adjust the width as needed */
                  outline: none;
                  padding-left: 10px; /* Adjust padding as needed */
                  border-radius: 15px;
                  border: 1px solid lightgrey;
                  font-size: 16px;
                  transition: all 0.3s ease;
                  /* Add any additional styling properties here */
              }

              form .row select:focus {
                  border-color: #16a085; /* Change color on focus as needed */
                  box-shadow: inset 0px 0px 2px 2px rgba(26, 188, 156, 0.25);
              }

    </style>
      
</html>