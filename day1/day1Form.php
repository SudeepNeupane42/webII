<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="day1.css">
</head>

<body>

    <div class="login-box">
        <h2>Sign up</h2>
        <form>
            <div class="user-box">
                <input type="text" name="" required="">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="" required="">
                <label>Password</label>
            </div>
            <div class="user-box">
                <input type="email" name="" required="">
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="Number" name="" required="">
                <label>Number</label>
            </div>
            <div class="user-box">
                <input type="Address" name="" required="">
                <label>Address</label>
            </div>
            <button type="submit">Submit</button>


        </form>
    </div>
</body>
<script>
document.querySelector('button').addEventListener('click', function clickHandler(e) {

    this.removeEventListener('click', clickHandler, false);

    e.preventDefault();
    var self = this;
    setTimeout(function() {
        self.className = 'loading';
    }, 125);

    setTimeout(function() {
        self.className = 'ready';
    }, 4300);

}, false);
</script>

</html>