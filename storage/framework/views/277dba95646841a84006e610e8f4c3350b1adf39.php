<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>CapabilityHR Account approval</title>
    <style>
    .body-wrap {
    background-color: #f6f6f6;
    width: 100%;
}
* {
    margin: 0;
    padding: 0;
    font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
    box-sizing: border-box;
    font-size: 14px;
}
table td {
    vertical-align: top;
}
.container {
    display: block !important;
    max-width: 600px !important;
    margin: 0 auto !important;
    clear: both !important;
}
.content {
    max-width: 600px;
    margin: 0 auto;
    display: block;
    padding: 20px;
}
.main {
    background: #fff;
    border: 1px solid #e9e9e9;
    border-radius: 3px;
}
.content-wrap {
    padding: 20px;
}
img {
    max-width: 100%;
}
.content-block {
    padding: 0 0 20px;
}
h3 {
    font-size: 18px;
}
h1, h2, h3 {
    font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    color: #000;
    margin: 40px 0 0;
    line-height: 1.2;
    font-weight: 400;
}
.aligncenter {
    text-align: center;
}
.btn-primary {
    text-decoration: none;
    color: #FFF;
    background-color: #1ab394;
    border: solid #1ab394;
        border-top-width: medium;
        border-right-width: medium;
        border-bottom-width: medium;
        border-left-width: medium;
    border-width: 5px 10px;
    line-height: 2;
    font-weight: bold;
    text-align: center;
    cursor: pointer;
    display: inline-block;
    border-radius: 5px;
    text-transform: capitalize;
}
a {
    color: #1ab394;
    text-decoration: underline;
}
</style>
</head>

<body>

<table class="body-wrap">
    <tr>
        <td></td>
        <td class="container" width="600">
            <div class="content">
                <table class="main" width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="content-wrap">
                            <table  cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>
                                        <img class="img-fluid" src="https://capabilityhr.co.za/img/logo.jpg"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <h3>Account Approved</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <?php echo e($name); ?> <?php echo e($surname); ?> your account for our course programs has been approved, and we are delighted to welcome you to our course program. you can take courses that you so desire.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        To get started, copy this link and paste it on your browser <a href="">http://http://127.0.0.1:8000/user/signup/session/<?php echo e($link); ?></a>, or follow the button below, which you'll be enabled to create a password for your account to get you started.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block aligncenter">
                                        <a href="http://http://127.0.0.1:8000/user/signup/session/<?php echo e($link); ?>" class="btn-primary">Complete Signup</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        If you do find issues with the link, please do email us at: <br/><br/>
                                         support@capabilityhr.co.za
                                    </td>
                                </tr>
                              </table>
                        </td>
                    </tr>
                </table>
                <div class="footer">
                    <table width="100%">
                        <tr>
                            <td class="aligncenter content-block">CapabilityHR</td>
                        </tr>
                    </table>
                </div></div>
        </td>
        <td></td>
    </tr>
</table>

</body>
</html>
