<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes | View</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/viewQuote.css">
</head>

<body>
    <h1 style="text-align: center;">View Quotes</h1>
    <hr><br>
    <a href="<?php echo base_url() ?>index.php/User/create"> <button class="add-quote">Add Quotes</button> </a><br><br>
    <?php
    if (!empty('quotes')) {
        foreach ($quotes as $quote) {
            echo "<div class='quote-view' >
             <span class='quote-id'>Q-ID: {$quote['quote_id']} </span><br><br>
             <span class='quote-body'>\"{$quote['quote_body']}\"</span><br>
              <span class='quote-author'> -{$quote['quote_author']}</span><br>
                Posted at: {$quote['created_at']}<br><br>
              <a href='http://localhost/projects/Avinash/crud/index.php/user/edit/{$quote['quote_id']}'> <button class='edit'>Edit</button> </a> &nbsp;&nbsp; <a href='http://localhost/projects/Avinash/crud/index.php/user/delete/{$quote['quote_id']}'> <button class='del'>Delete</button> </a>
            </div><br><br>";
        }
    }
    ?>
</body>

</html>