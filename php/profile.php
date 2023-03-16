<?php

// Define MongoDB connection URL and database name
$url = 'mongodb://localhost:27017';
$dbName = 'Profile_Info';

// Connect to mongdb.Seeing th comment don't judge i'm copying code.It's for my understanding.
$client = new Mongodb\Client($url);

// Get the "users" collection
$users = $client->createCollection($dbName, 'users');

// Check if the signup form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the user data from the request body
  $userData = [
    'firstname' => $_POST['firstname'],
    'lastname' => $_POST['lastname'],
    'Mobile_Number' => $_POST['Mobile_Number'],
    'DOB' => $_POST['DOB'],
    'country' => $_POST['country'],
    'state' => $_POST['state'],
  ];

  // Insert the new user
  $result = $users->insertOne($userData);

  if ($result->getInsertedCount() === 1) {
    echo 'User created successfully';
  } else {
    echo 'Failed to create user';
  }
}
?>
