<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Setting Page UI Design</title>
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/profile.css" />
  </head>
  <body>
    <div class="container">
      <div id="logo">
        <h1 class="logo">Fitness</h1>
        <div class="CTA" onclick="location.href='index.php'">
          <h1>Back</h1>
        </div>
      </div>

      <div class="leftbox">
        <nav>
          <a href="#" class="active">
            <i class="fa fa-user"></i>
          </a>
         
        </nav>
      </div>

      <div class="rightbox">
        <div class="profile">
          <h1>Personal Info</h1>
          <h2>Username</h2>
          <input style="border: none; width: 20rem;" type="text" name="Username" class="input" id="Username"><button class="btn">update</button>
          <hr>
          <h2>Age</h2>
          <input style="border: none; width: 20rem" type="text" name="Username" class="input" id="Username"><button class="btn">update</button>
          <hr>
          <h2>Gender</h2>
          <input style="border: none; width: 20rem" type="text" name="Username" class="input" id="Username"><button class="btn">update</button>
          <hr>
          <h2>Email</h2>
          <input style="border: none; width: 20rem" type="text" name="Username" class="input" id="Username"><button class="btn">update</button>
          <hr>
          <h2>Password</h2>
          <input style="border: none; width: 20rem" type="text" name="Username" class="input" id="Username"><button class="btn">update</button>
          <hr>
          </div>
      </div>
    </div>

    <script>
      // Select all the buttons
const buttons = document.querySelectorAll('.btn');

// Add a click event listener to each button
buttons.forEach((button) => {
  button.addEventListener('click', (event) => {
    // Prevent the form from submitting
    event.preventDefault();

    // Get the input field associated with this button
    const inputField = button.previousElementSibling;

    // Store the value of the input field in a variable
    const value = inputField.value;

    // Log the value to the console
    console.log(value);
  });
});
    </script>
  </body>
</html>
