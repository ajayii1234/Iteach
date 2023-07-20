
<?php


  require_once("guard/customerguard.php");

  require_once("classes/User.php"); //to get the details of the user

$user_id = $_SESSION["user_id"];

$userone = new User();
$user = $userone->getUserDetails($user_id);

//print_r($user);
//die();

?>

<?php require_once("partials/header1.php");?>
   
<?php require_once("partials/sidebar.php");?>
       

    <style>
        .chat-box {
            width: 660px;
            height: 150px;
            border: 1px solid #ccc;
            padding: 10px;
            overflow-y: scroll;
        }
    </style>
</head>
<body>
    <h2>Learn words and their meanings with I-Teach</h2>
    <div class="chat-box mb-3" id="chatBox"></div>

    <form method="post">
        <input type="text" name="searchTerm" class="form-control mb-3" placeholder="Enter a Word and get its meaning">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Check if the form was submitted

        // API endpoint URL
        $apiUrl = 'https://en.wikipedia.org/api/rest_v1/page/summary/';

        // Search term or article title
        $searchTerm = $_POST['searchTerm'];

        // Create the full API URL
        $fullUrl = $apiUrl . urlencode($searchTerm);

        // Initialize cURL session
        $curl = curl_init($fullUrl);

        // Set cURL options
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

        // Execute the request
        $response = curl_exec($curl);

        // Close cURL session
        curl_close($curl);

        // Check for errors
        if ($response === false) {
            die('Error: ' . curl_error($curl));
        }

        // Decode the JSON response
        $data = json_decode($response, true);

        // Access the desired information
        $title = $data['title'];
        $summary = $data['extract'];

        // Output the result in the chat box
        echo "<script>
            var chatBox = document.getElementById('chatBox');
            chatBox.innerHTML += '<strong>User:</strong> $searchTerm<br>';
            chatBox.innerHTML += '<strong>Wikipedia:</strong><br>';
            chatBox.innerHTML += '<em>Title:</em> $title<br>';
            chatBox.innerHTML += '<em>Summary:</em> $summary<br><br>';
            chatBox.scrollTop = chatBox.scrollHeight;
        </script>";
    }
    ?>
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