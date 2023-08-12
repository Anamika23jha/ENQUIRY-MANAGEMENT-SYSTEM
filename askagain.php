<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>query page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="stylesheet" href=../css/query.css>
</head>

<body>
    <section class="contact">
        <div class="content">
            <h2>Enquiry</h2>
            <p1>here you can get all information related to our organization</p1>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>ADDRESS</h3>
                        <P>nielit patna</P>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <P>anamikaanand37@gmail.com</P>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>phone</h3>
                        <P>8789371437</P>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form method="POST" action="">
                    <h2>send message</h2>
                    <div class="inputBox">
                        <input type="text" name="Name" required="required">
                        <span>Userid</span>
                    </div>
                   <div>
                            select your Cources
                            <select name="Cources">
                                <option value="C++">c++</option>
                                <option value="java">Java</option>
                                <option value="python">Python</option>
                                <option value="ML">ML</option>
                            </select>
                        </div>
                        <div class="inputBox">
                            <textarea required="required" name="Query"></textarea>
                            <span>Type your Message...</span>
                        </div>
                        <div class="inputBox">
                            <input type="submit" name="" value="send">

                        </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>