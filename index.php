<?php
/* 
   Place your output code inside the HTML list items for 
   each question comment.

   Non-output PHP logic & values can be placed underneath  
   the questions near the top of the file. 
   
   Do not change any of the other code in this file.
*/

/* 01: Create a class named Vehicle that is initialized
with a $type value passed to the constructor. Also, add
a get_type method to the class. 

This problem has no output.
*/


/* 02: Create an instance of Vehicle named
$myVehicle and pass in the value "electric"
to the constructor. Call the get_type function on the
instance and output the result. */


/* 03: Decode the following $jsonObj and store it
in a $postObj variable. Output the title and body 
values from $postObj. Put your title output in list 
item 3a and your body output in list item 3b. */
$jsonObj = '{
    "userId": 1,
    "id": 1,
    "title": "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
    "body": "quia et suscipit suscipit recusandae consequuntur expedita et cum reprehenderit molestiae ut ut quas totam nostrum rerum est autem sunt rem eveniet architecto"
  }';
/* Do not change the above object */


/* 04: This line of code is reading the posts.json file: */
$postsJSON = file_get_contents('posts.json');
/* Decode $postsJSON and output the title from the
third element in the resulting array. */


/* 05: This line of code is reading the users.json file: */
$usersJSON = file_get_contents('users.json');
/* Decode $usersJSON into an associative array.
- Do you have one array or many?
- Loop through the decode result and output the email of
each user in a new list item. Your list items will be 
nested inside the list item with the id of 5. */


/* 06: Create a new Vehicle instance named myTruck
from the Vehicle class you created in #01. Pass in the
value "gasoline" to the constructor. Output the
result of using json_encode on $myTruck  */


/* 07: Create a new class named Pet.
The constructor should accept a $name
value and a $sound value.
- $sound should be a private property and
- $name can be a public property.
- There should also be a public property
called $species.
- Add a get_name method to the class.
- Also, add get and set species methods to the
class. 
- Finally, add a speak method that outputs
the value of the $sound property.

This problem has no output.
*/


/* 08: Create three instances of the Pet
class. $pet1, $pet2, and $pet3.
- $pet1 should be named "Spot" and makes the sound "Moo!"
- $pet2 should be named "Lucky" and makes the sound "Bark!"
- $pet3 should be named "Daisy" and makes the sound "Quack!"
Call the speak method for each Pet instance and output
the result. Put the output for Spot in 8a, Lucky in 8b 
and Daisy in 8c. */


/* 09: Use the set_species method on each pet
instance from above.
- $pet1 is a "Cow"
- $pet2 is a "Dog"
- $pet3 is a "Duck"

Afterwards, create a $petArray that contains
all 3 pet instances.

Loop through the array in reverse order
and output the name value for each pet
object in the array in a list item nested 
inside of the list item with id of 9.

Not sure about the reverse?
Look at the PHP docs.
*/


/* 10: Take the $petArray from above
(not the reverse one!), and encode it as JSON.
Output the result in list item 10a.

Now take the $myVehicle and $myTruck instances
of the Vehicle class and create a $rides array.

Encode the $rides array to JSON and output
the result in list item 10b. */


?>

<html>

<head>
    <title>INF653 Practice 05</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mocha/8.1.1/mocha.css"
        integrity="sha512-Ytt2foRGKdIInPXwyS3gxRvfTv4n2wi7uB7neCLH1LjExT+PKBeQu6LNVB4QpHaJqx7m2btagBs4kqxYC1QNFg=="
        crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <p>
            🚨 You need to <span id="createUser">create a user</span> before you can submit your project.
        </p>
        <p>
            👉 You may need to enable pop-ups for this site if your browser blocks them.
        </p>
        <section id="newUserSection">
            <label for="newUser">
                <span class="honey">This is your User ID.</span>
                Copy, paste, and save it somewhere safe. You'll need it to submit this assignment and all future
                assignments and projects this semester! And it will NOT be available to view again.
            </label>
            <input type="text" id="newUser" />
        </section>
        <p>
            Did you:
        </p>
        <ul>
            <li>Create a User ID?</li>
            <li>Complete Your Assignment?</li>
            <li>If so, you are ready to click submit.</li>
        </ul>
        <button id="submitButton">Submit Your Assignment</button>
        <p>Your output should only be in the ordered list below.</p>
        <ul>
          2. <li id="2"><?php /* #2 output here */ ?></li>
          3a. <li id="3a"><?php /* #3a output here */ ?></li>
          3b. <li id="3b"><?php /* #3b output here */ ?></li>
          4. <li id="4"><?php /* #4 output here */ ?></li>
          5. <li id="5"> 
              <ul><?php
                /* #5 output here */
              ?></ul>
            </li>
          6. <li id="6"><?php /* #6 output here */ ?></li>
          8a. <li id="8a"><?php /* #8a output here */ ?></li>
          8b. <li id="8b"><?php /* #8b output here */ ?></li>
          8c. <li id="8c"><?php /* #8c output here */ ?></li>
          9. <li id="9"> 
              <ul><?php 
                /* #9 output here */
              ?></ul>
            </li>
          10a. <li id="10a"><?php /* #10a output here */ ?></li>
          10b. <li id="10b"><?php /* #10b output here */ ?></li>
        </ul>
    </main>

    <div id="mocha"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mocha/8.1.1/mocha.min.js"
        integrity="sha512-vOMXB+Rjob/NIG88cgEK+t6Uuf0zJIzQrfKH8VFc7AW18y/rzszRXaKPNAPf1ePv2hQ3eYR8yEu4S85Np3DhLA=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chai/4.2.0/chai.min.js"
        integrity="sha512-x3BwhuxT44pOQZanacQyDnrB2r1L1AUfjUaefYArTHR9sHEvvy3NSnnm5Z7GAl5YPc3+GEWFT0S34obDSzUvaQ=="
        crossorigin="anonymous"></script>
    <script>
    mocha.setup("bdd");
    </script>
    <script src="https://serene-roentgen-345cd7.netlify.app/tests/inf653_php_practice05Test.min.js"></script>
    <script>
    mocha.run();
    </script>
    <script src="https://serene-roentgen-345cd7.netlify.app/util/inf653_php_signup_util.min.js"></script>
    <script src="https://serene-roentgen-345cd7.netlify.app/util/inf653_php_util.min.js"></script>

</body>

</html>