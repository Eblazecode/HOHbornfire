<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOH</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <meta name="application-name" content="&nbsp;"/>

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style2.css')); ?>">
    <script src="<?php echo e(asset('assets/js/styles.js')); ?>" type="text/javascript"></script>
    <style>
        h1{color: black;
        font-family: "Poppins", sans-serif;}
        a{color: #ffFFFF;}
        p{color: #fff;
            text-align: center;
        }
        .textinput {
            float: left;
            width: 100%;
            min-height: 75px;
            outline: none;
            resize: none;
            border: 1px solid grey;
        }

    </style>
</head>
<!--<body onload="load()">-->
<body style="background-image: url(<?php echo e(asset('assets/hohimages/bornfire.jpg')); ?>); background-size: cover;">
<div class="spinner"></div>
<div class="container">
    <div class="left">
        <h1 style="  font-family: Poppins sans-serif; color: white"> Get Customized Your <span style="color: white">David's Dance</span>
            Badge</h1>
        <h5 >Simply add your picture to the frame. Screen grab or download through the preview button and
            Share on all social media platform, lets spread the word.</h5>
        <img src="<?php echo e(asset('assets/hohimages/yellow.png')); ?>" alt="" id="arrow">
    </div>


    <div class="right">
        <div id="badge">
            <img src="<?php echo e(asset('assets/hohimages/attending.jpg')); ?>" id="voltage-badge" alt="Personalized IV" width="520" height="480">
            <label for="user_profile" id="imgSelector">
                <div id="placeholder" style="margin-top: 50px;background-color:cornsilk">
                    <h2 id="placeholder-text" style="color: #1d2124">click to upload</h2>
                    <input type="file" id="user_profile"  class="rounded" name="profile" accept=".jpg, .jpeg, .png" hidden>
                    <!--  <input type="text" id="attendee-name"  placeholder=""
                             style="color: rgb(248, 252, 251);padding-bottom:5%; font-size: medium; text-align:
                left; text-transform: initial;font-weight: bold;" rows="10" cols="80" class="form-control textinput" />-->

                </div>
            </label>
            <br>



            <div id="control">
                <p id="tooltip">*Use the slider to rotate the image on the frame</p>
            </div>
        </div>
        <button class="btn" id="preview-btn" onclick="createBadge()">Preview</button>
    </div>
</div>
<div class="modal">
    <button class="modal-btn" onclick="closeModal()">&times;</button>
    <div id="my-badge">
        <button class="btn" id="download-btn" onclick="downloadBadge()">Download</button>
    </div>
</div>
<script src="<?php echo e(asset('assets/js/html2canvas.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/js/FileSaver.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/js/function.js')); ?>" type="text/javascript"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\HOH\bornfire\resources\views/ivbadge.blade.php ENDPATH**/ ?>