<x-auth>

    <style>

body{
        margin: 0%;
        padding: 0%;
        background: #eeeffa;;
    }
    h3{
        color: #FFF;


font-size: 2rem;
font-style: normal;
font-weight: 400;
line-height: normal;
text-align: center
    }
    .header{
        margin-top:7% ;
            padding: 20px ;


background: linear-gradient(183deg, rgba(62, 239, 228, 0.85) -93.41%, rgba(42, 48, 96, 0.89) 103.36%, rgba(38, 45, 97, 0.85) 103.38%);

box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.30);
    }

    .custom-button{
        border: 1px solid #242b65;
        background: #2F387F;
        padding:10px
    }
    .custom-button:hover {
        background: #38449f;
    }
        .form-container {
            background: rgba(255, 255, 255, 0.654);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transform: scale(1);
            animation: scaleUp 0.5s ease-in-out forwards;
        }

        @keyframes scaleUp {
            from {
                transform: scale(0.8);
            }
            to {
                transform: scale(1);
            }
        }

        h1 {
            margin: 0 0 20px 0;
            color: #323b8c;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input[type=email], button[type=submit] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type=email] {
            box-shadow: 0 0 0 0 rgba(0, 123, 255, 0.25);
            transition: box-shadow 0.3s ease-in-out;
        }

        input[type=email]:focus {
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        button[type=submit] {
            background: #323b8c;
            color: white;
            border: none;
            margin-top: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type=submit]:hover {
            background: #0056b3;
        }

        .alert {
            display: none;
            padding: 10px;
            margin-top: 20px;
            border-radius: 5px;
            background-color: #d1e7dd;
            color: #0f5132;
        }        @import url('https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap');
        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 10px;
        }
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #0056b3;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #004095;
        }
        .text-decoration-underline {
            text-decoration: underline;
        }
    </style>



<div class="container  mt-3 mb-5">

    <div class="row align-items-center py-5">




        {{-- first part --}}


    <div class="col-md-10 col-lg-5 mx-auto">
        <div style="" class="form-container">
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <!-- Hidden Field for Token -->
                <input type="hidden" name="token" value="{{ request()->token }}">
                <h1>Reset Your Password</h1>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="{{ request()->email ?? '' }}" required {{ request()->email ? 'readonly' : '' }} placeholder="enter email">
                </div>
                <div class="form-group">
                    <label for="password">New Password:</label>
                    <input type="password" id="password" name="password" required placeholder="new password">
                </div>
                <div class="form-group">
                    <label for="password-confirm">Confirm New Password:</label>
                    <input type="password" id="password-confirm" name="password_confirmation" required placeholder="confirm password">
                </div>
                <div class="form-group">
                <button  type="submit">Reset Password</button>
            </div>
                <p class="info-text text-secondary">To reset your password for <span style="color: #0056b3;" class="text-decoration-underline">MedSky Airline</span>.</p>
            </form>
        </div>


    <div id="resetForm" class="alert">A password reset link has been sent if the email is found in our system.</div>
</div>
</div>
</div>
<script>
    document.getElementById('resetForm').addEventListener('submit', function(event) {
        event.preventDefault();
        // Here, you can implement your form submission logic, possibly using AJAX.
        // After submission logic (example):
        document.getElementById('alert').style.display = 'block';
    });
</script>


</x-auth>
