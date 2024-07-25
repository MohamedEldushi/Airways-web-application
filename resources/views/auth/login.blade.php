<x-auth>
    {{-- Backend Team: --}}
    {{-- 1. Show error message from session --}}
    {{-- 2.  --}}

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
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">













        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif


    {{-- <div class="header">
        <h3>It only takes a minute to register for your account</h3>


    </div> --}}


    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif


    <div class="container ">

        <div class="row align-items-center py-5">




            {{-- first part --}}


        <div style="background-color: #f4f5ff" class="col-md-10 col-lg-5 mx-auto  rounded-4 border">
            <form class="p-4 p-md-5 rounded-3" action="{{ route('post-login') }}" method="POST">
            @csrf
            <h3 style="color: #242b65" class="col-md-3 mb-2">Log in </h3>


            <div class="form-floating mb-3">
                <input type="email" class="rounded-2 form-control shadow-sm" id="floatingInput" required name="email" placeholder="name@example.com">
                <label style="color: rgba(0, 0, 0, 0.46)"  for="floatingInput">Enter your email address</label>
            </div>

            <div class="input-group mb-3 form-floating">
                <input type="password" class="form-control shadow-sm rounded-2 border-end-0 rounded-end-0" id="password" name="password" placeholder="Password">
                <label for="password" style="color: rgba(0, 0, 0, 0.46)">Enter your password</label>
                <span class="shadow-sm input-group-text" style="background: #E8F0FE" onclick="togglePassword()">
                    <i id="password-icon" class="bi bi-eye-slash"></i>
                </span>
            </div>
<p class="mt-1"><a style="color: #262D61; font-weight: 500;" class="link-opacity-200-hover " href="{{ route('password.request') }}">Forgotten password?</a></p>

            <div class="d-flex justify-content-center">
                <button  class="shadow w-100 btn btn-lg btn-primary rounded-1 custom-button" type="submit">Log In</button>
            </div>

            <hr class="my-4">
            <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
            </form>

        </div>




{{-- right part --}}



        <div class="col-lg-6 text-center mx-auto">
            <div class="row">
            <div class="col-2 mx-auto d-none d-lg-block">
                <div style="  height: 450.168px; border-left: 1px solid #00000027;"></div>
            </div>
            <div class="col-lg-10 text-center mx-auto">
                <h1 style="font-size: 3rem; font-weight: 500; margin-top: 70px" class="display-3 lh-1 mb-4 ">Don’t have an account yet?</h1>
                <p class=" fs-4">Manage your bookings and receive our latest news and offers just for you</p>
                <div class="d-flex justify-content-center">
                    <a href="{{ url('auth/register') }}" class="shadow-sm w-30 p-3 m-2 rounded-1 border-2 btn btn-outline-info" style="border: 2px solid #36408e; color: #36408e;">Create a new account</a>
                </div>

            </div>
            </div>
        </div>
        </div>
    </div>
    <hr class="my-4">



     <!-- Include Bootstrap CSS and JavaScript as shown in the previous example -->


     <script>
        function togglePassword() {
            var passwordInput = document.getElementById('password');
            var passwordIcon = document.getElementById('password-icon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordIcon.className = 'bi bi-eye';
            } else {
                passwordInput.type = 'password';
                passwordIcon.className = 'bi bi-eye-slash';
            }
        }
        </script>


</x-auth>
