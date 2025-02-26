<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logIn</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
    }

    .main {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .width {
        width: 300px;
    }

    .coloss {
        background-color: #2f2f2f;
        color: white;
    }

    .form-floating input {
        background: none;
        border: 1px solid #353535;
        padding: 15px 5px;
        font-size: 16px;
        border-radius: 8px;
        color: #979797;
        width: 100%;
        box-shadow: rgb(136 136 136 / 17%) 0px -23px 25px 0px inset,
            rgb(81 81 81 / 23%) 0px -36px 30px 0px inset,
            rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px,
            rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px,
            rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
        margin-bottom: 10px;
    }

    .form-floating input:focus {
        border-color: #0173ed;
        outline: none;
    }

    .shadow {
        background-color: #444242;
        border-radius: 18px;
        box-shadow:
            rgb(31 31 31 / 17%) 0px -23px 25px 0px inset,
            rgb(108 108 108 / 23%) 0px -36px 30px 0px inset,
            rgba(147, 142, 142, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px,
            rgba(212, 198, 198, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px,
            rgba(131, 125, 125, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
        padding: 25px 35px;
    }
</style>
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<body>
    <div class="main  coloss">
        <div class="shadow">
            <form class="width" method="post" action="dologin.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" fill="currentColor"
                    class="bi bi-shop text-info text-light" viewBox="0 0 16 16">
                    <path
                        d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z" />
                </svg>
                <br><br>
                <h1 class="h3 mb-3 fw-normal "><b>Please sign Up</b></h1>
                <div class="form-floating">
                    <input type="Text" class="form-control" id="floatingPassword" name="username"
                        placeholder="Password" require>
                    <label for="floatingPassword">UserName</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" name="password"
                        placeholder="Password" require>
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="form-check text-start my-3">
                    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                    </label>
                </div>

                <button class="btn btn-info w-100 py-2 text-white" type="submit">Log In</button>
            </form>
        </div>
    </div>
</body>

</html>