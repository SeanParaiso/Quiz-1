<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="design.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel="stylesheet">
    <title>Fitness</title>
</head>

<body>
    <a href="" class="scroll-up">
        <i class="bx bx-chevron-up bx-md"></i>
    </a>
    <header class="scroll">
        <nav class="headerWraper layout">
            <div class="logo">
                <a href="">FITology</a>
            </div>

            <div>
                <ul class="nav">
                    <li><a href="#home" class="nav-link link-active">Home</a></li>
                    <li><a href="#about" class="nav-link">About</a></li>
                    <li><a href="#courses" class="nav-link">Courses</a></li>
                    <li><a href="#schedules" class="nav-link">Schedules</a></li>
                    <li><a href="logout.php" class="nav-link">Logout</a></li>
                </ul>
            </div>

            <div class="menu">
                <i class="bx bx-menu bx-md"></i>
            </div>
        </nav>
    </header>

    <section class="bg" id="home">
        <div class="home layout">
            <div class="content">
                <h1 class="title"> Best Fitness</span> Center</h1>
                <p class="description"> Choose from hundreds of workouts, 
                      relaxing meditations, and expert articles, for a whole body and mind 
                     approach to feeling great.</p>
                     <div class="btn">
                        <a href="" class="get">Get Started</a>
                        <a href="" class="learn">Learn More</a>
                     </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="about layout">
            <div class="content">
                <h3>About Us</span></h3>
                <p>Gym and Fitness has a growing team of 60+ awesome superstars and 
                    we owe our success to each and every one of them!
                    We have some pretty amazing people working with us, who hustle everyday to 
                    give you the best possible experience! You can find them in areas such as sales, 
                    marketing and e-commerce, customer service, warehousing, finance, 
                    human resources and management.If you're looking for an opportunity to
                    grow at a company that's empowered, inclusive, and values great work—you should work with us. 
                    </p>
                    <a href="" class="aboutBtn">Read More</a>
            </div>

            <div class="img-section">
                <img src="images/abtbg.jfif" alt="about img">
            </div>
        </div>
    </section>

    <section id="courses">
        <div class="layout">
            <div class="section-title-name">
                <h2>Courses</h2>
            </div>
            <div class="course">
                <div class="course-wraper-one">
                    <div class="box">
                        <div class="img-section">
                            <span>
                                <img src="" alt="">
                            </span>
                        </div>
                    </div>

                    <div class="content">
                        <h3>Strength Training</h3>
                        <p> also known as weight or resistance training 
                            — is physical activity designed to improve muscular 
                            strength and fitness by exercising a specific muscle
                            or muscle group against external resistance, including 
                            free-weights, weight machines, or your own body weight, 
                            according to the American Heart Association.

                            <h4>Exercises: <br></h4> 
                            <h6>Weight-Bearing Exercise <br>Non-Weight-Bearing Exercise <br>
                            Calisthenics <br>Weightlifting</h6>
                        </p>
                    </div>
                        
                    </div>

                    <div class="box">
                        <div class="img-section">
                            <span>
                                <img src="" alt="">
                            </span>
                        </div>
                    </div>
                    
                    <div class="content">
                        <h3>Aerobic Training</h3>
                        <p>Aerobic training is doing activities that usually involve 
                            large muscle groups like walking, jogging, cycling, 
                            or swimming. It's a great way to burn calories, help your 
                            blood flow, and exercise your heart.

                            <h4>Activity: <br></h4>
                            <h6>Aerobic Intervals</h6>
                        </p>
                    </div>

                    <div class="box">
                        <div class="img-section">
                            <span>
                                <img src="" alt="">
                            </span>
                        </div>
                    </div>
                    
                    <div class="content">
                        <h3>Balance and Stability Training</h3>
                        <p>Balance training involves doing exercises that strengthen the muscles
                            that help keep you upright, including your legs and core. These kinds 
                            of exercises can improve stability and help prevent falls.
                            Doing balance exercises can be intense, like some very challenging 
                            yoga poses. Others are as simple as standing on one leg for a few seconds.

                            <h4>Excercises: <br></h4>
                            <h6>Split squats <br> Tai chi <br> Single-leg deadlifts <br>
                            Stability ball excercises <br> Single-leg yoga poses</h6>
                        </p>
                    </div>

                    <div class="box">
                        <div class="img-section">
                            <span>
                                <img src="" alt="">
                            </span>
                        </div>
                    </div>
                    
                    <div class="content">
                        <h3>Coordination and Agility Training</h3>
                        <p>Agility is the ability to move quickly and easily, but this type of 
                            fitness training isn't just for athletes. It also helps prevent falls
                            and injuries by improving your reflexes, coordination and focus.
                            In everyday life, it's being able to avoid an object before you trip 
                            over it or hop out of the way when your fellow gym-goer almost drops a weight on your foot.     
                            Agility training can be an entire workout on its own that also builds 
                            endurance and strength. Or you can add a few agility exercises to 
                            your strength and cardio workouts.

                            <h4>Excercises: <br></h4>
                            <h6>Quick feet <br> Side steps <br> Grapevines <br>
                            High Knees <br> Lateral crossovers</h6>
                        </p>
                    </div>

                    <div class="box">
                        <div class="img-section">
                            <span>
                                <img src="" alt="">
                            </span>
                        </div>
                    </div>
                    
                    <div class="content">
                        <h3>Flexibility and Mobility  Training</h3>
                        <p>The ability of a muscle or muscle groups to lengthen passively through a range of motion, 
                            whereas mobility is the “ability of a joint to move actively through a range of motion”. 
                            Many additional structures define how good a person’s mobility is. It is not only the
                            muscles stretching over a joint but also how far the joint moves within the joint 
                            capsule. Mobility also takes into account the component of motor control within the 
                            nervous system.

                            <h4>Excercises: <br></h4>
                            <h6>Dynamic stretching <br> Static stretching </h6>
                        </p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <section class="Schedules-bg-img" id="schedules">
        <div class="layout schedules">
        <div class="section-title-name">
            <h2>Schedules</h2>
        </div>

        <div class="schedules-wraper">
            <div class="schedulesBox">
                <p>0.1</p>
                <p>Monday 6:00 AM-12:00 AM</p>
                <h3> <a href="#">Cardio Workout</a>
                </h3>
            </div>

            <div class="schedulesBox">
                <p>0.1</p> 
                <p>Tuesday 6:00 AM-12:00 AM</p>
                <h3> <a href="#">Weight Workout</a>
                </h3>
            </div>

            <div class="schedulesBox">
                <p>0.1</p>
                <p>Wednesday 6:00 AM-12:00 AM</p>
                <h3> <a href="#"> Stability training</a>
                </h3>
            </div>

            <div class="schedulesBox">
                <p>0.1</p>
                <p>Thursday 6:00 AM-12:00 AM</p>
                <h3> <a href="#">Cardio Workout</a>
                </h3>
            </div>

            <div class="schedulesBox">
                <p>0.1</p>
                <p>Friday 6:00 AM-12:00 AM</p>
                <h3> <a href="#">Flexibility training</a>
                </h3>
            </div>

            <div class="schedulesBox">
                <p>0.1</p>
                <p>Saturday 6:00 AM-12:00 AM</p>
                <h3> <a href="#">Agility Workout</a>
                </h3>
            </div>

            </div>
            </div>
        </div>
    </section>


    <script src="main.js"></script>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>