<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html,
    body {
        height: 100%;
    }

    html {
        background: linear-gradient(to right bottom, #fbdb89, #f48982);
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 100%;
        background-attachment: fixed;
    }

    body {
        font-family: sans-serif;
        line-height: 1.4;
        display: flex;
    }

    .container {
        width: 430px;
        margin: auto;
        padding: 36px 48px 48px 48px;
        background-color: #f2efee;

        border-radius: 11px;
        box-shadow: 0 2.4rem 4.8rem rgba(0, 0, 0, 0.15);
    }

    .login-title {
        padding: 15px;
        font-size: 22px;
        font-weight: 600;
        text-align: center;
    }

    .txt-center {
        text-align: center;
    }

    .login-form {
        display: grid;
        grid-template-columns: 1fr;
        row-gap: 16px;
    }

    .login-form label {
        display: block;
        margin-bottom: 8px;
    }

    .login-form input[type="text"],.login-form input[type="email"],.login-form input[type="tel"],.login-form input[type="password"] {
        width: 100%;
        padding: 1.2rem;
        border-radius: 9px;
        border: none;
    }

    .login-form input:focus {
        outline: none;
        box-shadow: 0 0 0 4px rgba(253, 242, 233, 0.5);
    }

    .btn--form {
        background-color: #f48982;
        color: #fdf2e9;
        align-self: end;
        padding: 8px;
    }

    .btn,
    .btn:link,
    .btn:visited {
        display: inline-block;
        text-decoration: none;
        font-size: 20px;
        font-weight: 600;
        border-radius: 9px;
        border: none;

        cursor: pointer;
        font-family: inherit;

        transition: all 0.3s;
    }

    button {
        outline: 1px solid #f48982;
    }

    .btn--form:hover {
        background-color: #fdf2e9;
        color: #f48982;
    }
    .disp-in-b{
        display: inline-block !important;
    }
    /* .login-form input{

    } */
</style>
<div class="container">
    <h2 class="login-title">Registration</h2>

    <form class="login-form" method="post">
        <div>
            <label for="username">User Name </label>
            <input id="username" type="text" placeholder="Enter user name" name="username" required />
        </div>
        <div>
            <label for="password">Password </label>
            <input id="password" type="password" placeholder="password" name="password" required />
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" id=""email  placeholder="Enter ur email" name="email" />
        </div>
        <div>
            <label for="">Mobile </label>
            <input type="tel" id="mobile"  placeholder="Enter ur Mobile" name="mobile" />
        </div>
        <div>
            <label for="">Gedner</label>
            <input type="radio" id="Male" value="Male" name="gender" /> 
            <label class="disp-in-b" for="Male">Male</label>
            <input type="radio" id="Female" value="Female" name="gender" /> 
            <label class="disp-in-b" for="Female">Female</label>
        </div>
        <div>
            <label for="">Hobbies</label>
            <input type="checkbox" name="chk[]" id="Cricket" value="Cricket" /> <label for="Cricket" class="disp-in-b">Cricket</label>
            <input type="checkbox" name="chk[]" id="Music" value="Music" /> <label for="Music" class="disp-in-b">Music</label>
            <input type="checkbox" name="chk[]" id="Reading" value="Reading" /> <label for="Reading" class="disp-in-b">Reading</label>
            <input type="checkbox" name="chk[]" id="Travellling" value="Travellling" /> <label for="Travellling" class="disp-in-b">Travellling</label>
        </div>
        <!-- <div>
            <label for=""> </label>
            <input type="" id=""  placeholder="" name="" />
        </div> -->

        <button class="btn btn--form" type="submit" name="registration" value="Registration">
            Registration
        </button>
        <a class="txt-center" href="home">Home</a>
    </form>
</div>