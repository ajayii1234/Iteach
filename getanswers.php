<?php

require_once("guard/customerguard.php");
  require_once("partials/header1.php");

  require_once("classes/User.php"); //to get the details of the user

$user_id = $_SESSION["user_id"];

$userone = new User();
$user = $userone->getUserDetails($user_id);

//print_r($user);
//die();
?>
   
   <?php require_once("partials/sidebar.php");?>
   
       <h2 class="text-center">Ask Questions and get Instant Answers with I-Teach</h2>
   
       <?php

// Function to send a message in the chat box
function sendMessage($message) {
    echo "<div class='message'><p>$message</p></div>";
}

// Function to get user input from the chat box
function getUserInput() {
    return isset($_POST['user_input']) ? $_POST['user_input'] : '';
}

// URL for the DuckDuckGo Instant Answers API
$apiUrl = "https://api.duckduckgo.com/";

// Check if the user has submitted a question
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the user's question
    $question = getUserInput();

    // Check if the question is not empty
    if (!empty($question)) {
        // Set the query parameters for the API request
        $params = [
            'q' => $question,
            'format' => 'json',
            'pretty' => '1'
        ];

        // Construct the API URL with the query parameters
        $url = $apiUrl . '?' . http_build_query($params);

        // Make a request to the API
        $response = file_get_contents($url);

        // Decode the JSON response
        $data = json_decode($response, true);

        // Check if there are any instant answers
        if (isset($data['Abstract'])) {
            // Display the instant answer in the chat box
            sendMessage("Instant Answer: " . $data['Abstract']);
        } else {
            // No instant answer found
            sendMessage("No instant answer found.");
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        /* Add CSS styles for the chat box */
        .message {
            background-color: #f1f1f1;
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div id="chatbox">
        <?php
        // Retrieve and display previous messages if any
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            sendMessage(getUserInput());
        }
        ?>
    </div>
    <form method="post" action="">
        <input type="text" name="user_input" placeholder="Ask a question..." autofocus />
        <input type="submit" value="Send" />
    </form>
</body>
</html>


       
      </div>
    </div>
  </div>

 
</div>
</div>
      
    <?php
      require_once("partials/footer.php");
    ?>