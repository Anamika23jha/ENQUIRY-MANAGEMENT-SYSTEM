<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>query page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
     integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="stylesheet" href=../css/userquery.css>
</head>

<body>
    <?php
    include"../indexx/header.html";
    ?>
    <section class="contact">
        <div class="content">
            <h2>Enquiry</h2>
            <p1>Here you can get all information related to our organization</p1>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>ADDRESS</h3>
                        <P>NIELIT Patna</P>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <P>anamikaanand37@gmail.com</P>
                    </div>
                </div>
                <div class="box">
                <div class="icon"><i class="fas fa-phone prefix grey-text"></i></div>
                    <div class="text">
                        <h3>phone</h3>
                        <P>##########</P>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form method="POST" action="../php/userquery.php">
                    <h2>Send message</h2>
                    <div class="inputBox">
                        <input type="text" name="Name" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="Email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="">
                    <tr>
                <td><label>Select gender</label><br>
                    <input type="radio" name="gender" value="male" required>Male
                    <input type="radio" name="gender" value="female" required>Female
                    <input type="radio" name="gender" value="others" required>others
                </td>
            </tr>
                        </div>
                        <div class="inputBox">
                            select Courses
                            <select name="Courses">
                                <option value="PCB Designing">PCB Designing</option>
                                <option value="EPT">EPT</option>
                                <option value="EPT">Solar Pannel Designing</option>
                                <option value="Data entry">Data entry</option>
                                <option value="IOT">IOT</option>
                                <option value="KYP">KYP</option>
                                <option value="Media content Developer">Media content Developer</option>
                                <option value="O Level"> O Level</option>
                                <option value="A Level">A Level</option>
                                <option value="python">python</option>
                                <option value="Internship">Internship</option>
                                <option value="ML in python"> ML in python</option>
                                <option value="ADHNS">ADHNS </option>
                            </select>
                        </div>
                        <div class="inputBox">
                            <textarea  name="Query"></textarea>
                            <span>Type your Message...</span>
                        </div>
                        <div class="inputBox">
                            <input type="submit" name="submit" value="send">

                        </div>
                        
                </form>
            </div>
        </div>
    </section>
</body>

</html>