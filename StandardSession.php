 id="m"<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logofitness.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <link rel="stylesheet" href="assets/css/workoutsesion.css">
    <title>Fitness</title>
    
</head>
<body>
    <div class="banner">
        <video src="" autoplay muted loop type="mp4"></video>
    </div>    
    
    <header>
        <h1>Workout Plan (Standard)</h1>
    </header>

    <section>
        <h3>Progress Bar</h3>
        <div id="progress-bar-container">
            <div id="progress-bar"></div>
        </div>
        <div class="toast">
            <div class="toast-content">
                <i class="fas fa-solid fa-check check"></i>
    
                <div class="message">
                    <span class="text text-1">Success</span>
                    <span class="text text-2">You've Completed the Standard Session</span>
                </div>
            </div>
            <i class="fa-solid fa-xmark close"></i>
    
            <div class="progress"></div>
        </div>
    
        <!-- <button>Show Toast</button> -->
        <br>
        <div class="monday">
            <h2>Monday Quota</h2>
            <hr>
            <div class="exercise-container">
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/Cardio/jumping_jax.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="m1" onchange="updateProgress()">
                        100 Jumping Jacks
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/SQUAT.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="m2" onchange="updateProgress()">
                        15 squats
                    </label>
                </div>

                <div class="exercise-card">
                    <label>
                        <img src="assets/img/bench-dips.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="m3" onchange="updateProgress()">
                        20 tricep dips
                    </label>
                </div>

                <div class="exercise-card">
                    <label>
                        <img src="assets/img/crunches.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="m4" onchange="updateProgress()">
                        50 crunches
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/Russian-twists.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="m5" onchange="updateProgress()">
                        70 Russian twists
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/Pushups.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="m6" onchange="updateProgress()">
                        10 Pushups
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/standing-calf-raises.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="m7" onchange="updateProgress()">
                        20 standing calf raises
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/lunge-split-jumps.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="m8" onchange="updateProgress()">
                        10 lunge split jumps
                    </label>
                </div>
                

                <!-- Add more exercises as needed -->
            </div>
        </div>
        <br>

        <div class="monday">
            <h2>Tuesday Quota</h2>
            <hr>
            <div class="exercise-container">
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/Cardio/jumping_jax.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="t1" onchange="updateProgress()">
                        100 Jumping Jacks
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/vertical-leg-crunches.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="t2" onchange="updateProgress()">
                        50 vertical leg crunches
                    </label>
                </div>

                <div class="exercise-card">
                    <label>
                        <img src="assets/img/sit-ups.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="t3" onchange="updateProgress()">
                        20 sit ups
                    </label>
                </div>

                <div class="exercise-card">
                    <label>
                        <img src="assets/img/SQUAT.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="t4" onchange="updateProgress()">
                        20 squats
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/wall-Pushups.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="t5" onchange="updateProgress()">
                        20 wall Pushups
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/leg-lifts-(each leg).gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="t6" onchange="updateProgress()">
                        15 leg lifts (each leg)
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/superman.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="t7" onchange="updateProgress()">
                        1 min superman
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/side-lunges.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="t8" onchange="updateProgress()">
                        10 side lunges (each leg)
                    </label>
                </div>
                
                

                <!-- Add more exercises as needed -->
            </div>
        </div>

        <br>
        <div class="monday">
            <h2>Wednesday Quota</h2>
            <hr>
            <div class="exercise-container">
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/Cardio/jumping_jax.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="w1" onchange="updateProgress()">
                        100 Jumping Jacks
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/bird-dogs.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="w2" onchange="updateProgress()">
                        30 bird-dogs
                    </label>
                </div>

                <div class="exercise-card">
                    <label>
                        <img src="assets/img/bench-dips.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="w3" onchange="updateProgress()">
                        20 tricep dips
                    </label>
                </div>

                <div class="exercise-card">
                    <label>
                        <img src="assets/img/sit-ups.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="w4" onchange="updateProgress()">
                        10 sit-ups
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/Flex-muscle/plank.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="w5" onchange="updateProgress()">
                        1 min plank
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/incline-pushu[.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="w6" onchange="updateProgress()">
                        15 incline Pushups
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/leg-lifts-(each leg).gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="w7" onchange="updateProgress()">
                        15 leg lifts (each leg)
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/crunches.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="w8" onchange="updateProgress()">
                        40 crunches
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/bb_oblique-v-up.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="w9" onchange="updateProgress()">
                        10 oblique crunches
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/standing-calf-raises.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="w10" onchange="updateProgress()">
                        20 standing-calf-raises
                    </label>
                </div>
            </div>
        </div>
        
        
        <br>
        <div class="monday">
            <h2>Thursday Quota</h2>
            <hr>
            <div class="exercise-container">
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/Cardio/jumping_jax.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="th1" onchange="updateProgress()">
                        100 Jumping Jacks
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/vertical-leg-crunches.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="th2" onchange="updateProgress()">
                        25 verticle leg crunches
                    </label>
                </div>

                <div class="exercise-card">
                    <label>
                        <img src="assets/img/SQUAT.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="th3" onchange="updateProgress()">
                        20 squats
                    </label>
                </div>

                <div class="exercise-card">
                    <label>
                        <img src="assets/img/crunches.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="th4" onchange="updateProgress()">
                        30 crunches
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/Russian-twists.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="th5" onchange="updateProgress()">
                        50 Russian twists
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/wall-Pushups.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="th6" onchange="updateProgress()">
                        20 wall Pushups
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/sideplank-1456956829.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="th7" onchange="updateProgress()">
                        1 min side plank
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/High-knees-exericse.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="th8" onchange="updateProgress()">
                        40 high kness
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/jump-squats.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="th9" onchange="updateProgress()">
                        10 jump squats
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/lunge-split-jumps.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="th10" onchange="updateProgress()">
                        10 lunge-split-jumps
                    </label>
                </div>
            </div>
        </div>
        
        <br>
                        
        <div class="monday">
            <h2>Friday Quota</h2>
            <hr>
            <div class="exercise-container">
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/Cardio/jumping_jax.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="f1" onchange="updateProgress()">
                        100 Jumping Jacks
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/sit-ups.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="f2" onchange="updateProgress()">
                        10 sit ups
                    </label>
                </div>

                <div class="exercise-card">
                    <label>
                        <img src="assets/img/bench-dips.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="f3" onchange="updateProgress()">
                        10 tricep dips
                    </label>
                </div>

                <div class="exercise-card">
                    <label>
                        <img src="assets/img/incline-pushu[.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="f4" onchange="updateProgress()">
                        20 incline push up
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/side-lunges.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="f5" onchange="updateProgress()">
                        20 side lunge
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/bb_oblique-v-up.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="f6" onchange="updateProgress()">
                        10 oblique lunge
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/butt-kickers.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="f7" onchange="updateProgress()">
                        30 butt kickers
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/jump-squats.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="f8" onchange="updateProgress()">
                        10 jump squats
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/jack knife sit ups.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="f9" onchange="updateProgress()">
                        15 jack knife sit ups
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/crunches.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="f10" onchange="updateProgress()">
                        40 crunches
                    </label>
                </div>
                

                <!-- Add more exercises as needed -->
            </div>
        </div>
        <br>
        <div class="monday">
            <h2>Saturday Quota</h2>
            <hr>
            <div class="exercise-container">
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/Cardio/jumping_jax.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="s1" onchange="updateProgress()">
                        50 Jumping Jacks
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/SQUAT.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="s2" onchange="updateProgress()">
                        20 squats
                    </label>
                </div>

                <div class="exercise-card">
                    <label>
                        <img src="assets/img/Russian-twists.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="s3" onchange="updateProgress()">
                        100 Russian twist
                    </label>
                </div>

                <div class="exercise-card">
                    <label>
                        <img src="assets/img/Kneeling-push-ups.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="s4" onchange="updateProgress()">
                        20 kneeling push up
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/downward-dog.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="s5" onchange="updateProgress()">
                        1 min downward dog
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/jack knife sit ups.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="s6" onchange="updateProgress()">
                        15 jack knife sit up
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/Reverse-Lunge.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="s7" onchange="updateProgress()">
                        10 lunge
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/side-lunges.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="s8" onchange="updateProgress()">
                        10 side-lunges
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/bird-dogs.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="s9" onchange="updateProgress()">
                        20 bird dogs
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/inner thigh lifts.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="s10" onchange="updateProgress()">
                        20 inner thigh lifts
                    </label>
                </div>
                

                <!-- Add more exercises as needed -->
            </div>
        </div>
        <br>
        <div class="monday">
            <h2>Sunday Quota</h2>
            <hr>
            <div class="exercise-container">
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/Cardio/jumping_jax.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="su1" onchange="updateProgress()">
                        45 Jumping Jacks
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/SQUAT.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="su2" onchange="updateProgress()">
                        15 squats
                    </label>
                </div>

                <div class="exercise-card">
                    <label>
                        <img src="assets/img/jump-squats.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="su3" onchange="updateProgress()">
                        10 jump-squats
                    </label>
                </div>

                <div class="exercise-card">
                    <label>
                        <img src="assets/img/Flex-muscle/plank.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="su4" onchange="updateProgress()">
                        1 min plank
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/Russian-twists.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="su5" onchange="updateProgress()">
                        50 Russian twists
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/Kneeling-push-ups.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="su6" onchange="updateProgress()">
                        20 kneeling Pushups
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/standing-calf-raises.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="su7" onchange="updateProgress()">
                        10 standing calf raises
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/superman.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="su8" onchange="updateProgress()">
                        30 sec superman
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/Reverse-Lunge.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="su9" onchange="updateProgress()">
                        10 lunges
                    </label>
                </div>
                <div class="exercise-card">
                    <label>
                        <img src="assets/img/crunches.gif" alt="">
                        <input type="checkbox" class="exercise-checkbox" id="su10" onchange="updateProgress()">
                        40 crunches
                    </label>
                </div>
               
                <!-- Add more exercises as needed -->
            </div>
        </div>
        <br>
        <a href="session.php" class="button">
            Exit Sessions 
        </a>
        
    </section>

    
    <script src="assets/js/workoutsession.js" defer></script>
</body>
</html>
