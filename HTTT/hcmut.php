<?php include('partials-front/menu.php'); ?>

<?php 
    if(isset($_SESSION['login']))
    {
        unset($_SESSION['login']);
        echo '<div style="margin-bottom: 0;" class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Login Successfully!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    }
    if(isset($_SESSION['update']))
    {
        unset($_SESSION['update']);
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Update Profile Successfully!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    }
    if(isset($_SESSION['update-failed']))
    {
        unset($_SESSION['update-failed']);
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Failed to Update Profile!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    }
    if(isset($_SESSION['user-not-found']))
    {
        unset($_SESSION['user-not-found']);
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>User not found!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    }
    if(isset($_SESSION['change-pwd']))
    {
        unset($_SESSION['change-pwd']);
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Change Password Successfully!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
    }

    if(isset($_SESSION['change-pwd-failed']))
    {
        unset($_SESSION['change-pwd-failed']);
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Failed to Change Password!</strong>Something went wrong...
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';

    }
?>

<head>
    <link href="public/css/hcmut.css" rel="stylesheet">
</head>

<body>
    <div class="hcmut">
        <a id="span">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            L???c Minh Hi???u
            1913336
        </a>
        <a id="span">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Tr???n Ti???n L???c
            1914038
        </a>
        <a id="span">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Ph??ng Minh Kh??nh
            1913756
        </a>
        <a id="span">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Nguy???n H???u Kh???i
            1913779
        </a>
    </div>
</body>
<?php include('partials-front/footer.php'); ?>