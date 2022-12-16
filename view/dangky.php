

<main>
    <!-- <div class="view_nike">
        <img src="./IMG/logo.png" alt="">
    </div> -->
    <div class="title">
        <h3>BECOME A NIKE MEMBER</h3>
        <p>Create your Nike Member profile and get first access to the very best of Nike products, inspiration and community.</p>
    </div>
    <div class="signup">

        <form action="./index.php?act=dangky" method="POST" class="form" id="form-1">
            <div class="form-group">

                <input id="user" name="user" type="text" placeholder="Username" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <input id="email" name="email" type="email" placeholder="Email Address" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <input id="tel" name="tel" type="text" placeholder="Phone" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <input id="password" name="pass" type="password" placeholder="Password" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <input id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" type="password" class="form-control">
                <span class="form-message"></span>
            </div>

            <p>By creating an account, you agree to Nike's <a href="#">Privacy Policy</a> and <a href="#">Terms of Use</a>.</p>

            <input type="submit" class="form-submit" name="dangky" value="Join Us">

            <p>Already a Member?<a href="./index.php?act=dangnhap">Sign In</a></p>
        </form>
    </div>
</main>



<style>
    .view_nike {
    width: 20%;
    margin: 0 auto;
}

.view_nike img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.title {
    color: #111111;
    font-size: 20px;
    font-weight: 700;
    line-height: 26px;
    margin: 0px 17.7083px 0px 17.6979px;
    padding: 10px 0px 27px;
    text-align: center
}

.title p {
    color: #8d8d8d;
    font-size: 14px;
    font-weight: 400;
    margin: 0px 17.7083px 0px 17.6979px;
    padding: 10px 0px;
    text-align: center
}

.signup form {
    color: #8d8d8d;
    font-size: 14px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.form-group input {
    background-color: #ffffff;
    border-color: #e5e5e5;
    border-radius: 3px;
    border-style: solid;
    border-width: 1px;
    color: #8d8d8d;
    font-family: Helvetica;
    font-size: 14px;
    line-height: 17px;
    width: 300px;
    margin: 15px;
    padding: 10px 20px
}

form p a {
    font-size: 13px;
    color: #9e9e9e;
    text-decoration: underline;
}

input[type=button] {
    background-color: #000000;
    color: #ffffff;
    cursor: pointer;
}

.signup {
    display: flex;
    justify-content: center;
    align-items: center;
}


/*  */

.form {
    width: 360px;
    min-height: 100px;
    text-align: center;
    background: #fff;
    border-radius: 2px;
    align-self: center;
}

.form .heading {
    font-size: 2rem;
}

.form .desc {
    text-align: center;
    color: #636d77;
    font-size: 1.6rem;
    font-weight: lighter;
    line-height: 2.4rem;
    margin-top: 16px;
    font-weight: 300;
}

.form-group {
    display: flex;
    /* margin-bottom: 16px; */
    flex-direction: column;
}

.form-label,
.form-message {
    text-align: left;
}

.form-control {
    background-color: #ffffff;
    border-color: #e5e5e5;
    border-radius: 3px;
    border-style: solid;
    border-width: 1px;
    color: #8d8d8d;
    font-family: Helvetica;
    font-size: 14px;
    line-height: 14px;
    width: 300px;
    padding: 10px 20px
}

.form-control:hover {
    border-color: #1dbfaf;
}

.form-group.invalid .form-control {
    border-color: #f33a58;
}

.form-group.invalid .form-message {
    color: #f33a58;
}

.form-message {
    font-size: 10px;
    line-height: 10px;
    padding: 0px 15px;
}

.form-submit {
    outline: none;
    background-color: #111111;
    margin: 15px 0px;
    padding: 12px 16px;
    font-weight: 700;
    color: #fff;
    border: none;
    width: 85%;
    font-size: 14px;
    border-radius: 4px;
    cursor: pointer;
}
</style>