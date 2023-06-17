<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo $this->baseURL ?>assets/login/fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"> -->

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo $this->baseURL ?>assets/login/css/style.css">
    <script>
        // if (window.history.replaceState) {
        //     window.history.replaceState(null, null, window.location.href);
        // }
    </script>
    <style>
        .row {
            display: flex;
        }

        .just-spc {
            justify-content: space-between;
        }

        .col {
            flex: 0 0 auto;
        }

        .select-list {
            margin-bottom: 5px;
        }

        input[type="radio"] {
            display: inline-block;
            width: auto;
        }
        input[type="file"] {
            border: 0;
        }

        .txt-dark {
            color: darkslategrey;
        }

        input[type=checkbox] {
            display: inline-block !important;
        }
    </style>
</head>

<body>

    <a href="home">
        <i class="zmdi zmdi-home cust-class"></i>
    </a>
    <div class="main">

        <div class="container">


            <form method="POST" class="appointment-form" id="appointment-form">
                <h2>education appointment form</h2>
                <div class="form-group-1">
                    <input type="text" name="username" id="username" placeholder="Enter User Name" required />

                    <div class="row just-spc">
                        <div class="col">
                            <input type="text" name="fname" id="fname" placeholder="Enter Your First Name" required />
                        </div>
                        <div class="col">
                            <input type="text" name="lname" id="lname" placeholder="Enter Your Last Name" required />
                        </div>
                    </div>
                    <input type="email" name="email" id="email" placeholder="Enter Your Email" required />
                    <input type="number" name="mobile" id="mobile" placeholder="Enter Your Mobile Number" required />
                    <input type="password" name="password" id="password" placeholder="Enter Your Password" required />
                    <input type="file" name="prof_pic" id="prof_pic" accept="image/*" />
                    <div class="select-list">
                        <select name="city" id="city">
                            <option slected value="">-- Select City --</option>
                            <option value="1">Ahmedabad</option>
                            <option value="2">Baroda</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="radio" name="gender" id="Male" value="Male" /> <label class="txt-dark" for="Male">Male</label>
                        </div>
                        <div class="col">
                            <input type="radio" name="gender" id="Female" value="Female" /> <label class="txt-dark" for="Female">Female</label>
                        </div>
                        <div class="col"></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="checkbox" name="hobby[]" id="Cricket" value="Cricket" /> <label class="txt-dark" for="Cricket">Cricket</label>
                        </div>
                        <div class="col">
                            <input type="checkbox" name="hobby[]" id="Music" value="Music" /> <label class="txt-dark" for="Music">Music</label>
                        </div>
                        <div class="col">
                            <input type="checkbox" name="hobby[]" id="Reading" value="Reading" /> <label class="txt-dark" for="Reading">Reading</label>
                        </div>
                    </div>
                </div>
                <!-- <div class="form-group-2">
                    <h3>How would you like to bo located ?</h3>
                    <div class="select-list">
                        <select name="confirm_type" id="confirm_type">
                            <option seleected value="">By phone</option>
                            <option value="by_email">By email</option>
                        </select>
                    </div>
                    <div class="select-list">
                        <select name="hour_appointment" id="hour_appointment">
                            <option seleected value="">Hours : 8am 10pm</option>
                            <option value="9h-11h">Hours : 9am 11pm</option>
                        </select>
                    </div>
                </div> -->
                <!-- <div class="form-check">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to the <a href="#" class="term-service">Terms and Conditions</a></label>
                </div> -->
                <div class="form-submit">
                    <input type="submit" name="regist" id="regist" class="submit" value="New Reagistration" />
                </div>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="<?php echo $this->baseURL ?>assets/login/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo $this->baseURL ?>assets/login/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>