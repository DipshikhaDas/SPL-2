<!-- Custom Account Created Notification Template -->
<div style="text-align: center;">
    <a href="{{ route('home') }}" style="max-width: 180px; display: inline-block; padding-bottom: 5%; padding-top: 3%">
        <img class="bd-placeholder-img" style="height: 60px; width: 180px; display: block; margin: 0 auto;"
            src="{{ asset('duLogo2.png') }}" alt="">
    </a>
    <div class="container" style="padding-left: 5%">
        <h1>New Account Created</h1>
        <p>An account has been created for you in the Dhaka University Journal Publications with the following details:
        </p>
        <ul>
            <li>Email: {{ $email }}</li>
            <li>Password: {{ $password }}</li>
            <li>Assigned Roles: {{ $roles }}</li>
        </ul>
        <p>Login Url:   <a href="{{ route('login') }}"><button class="btn btn-primary">Login</button></a></p>
        <p>Website Url: <a href="{{ route('home') }}"><button class="btn btn-primary">Home</button></a></p>
        <p>Please change your password after logging in for the first time.</p>
        <p>If you have any questions, feel free to contact us.</p>
        <p>Thank you for using our application!</p>
    </div>
</div>
