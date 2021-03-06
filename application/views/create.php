<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes | Add Quotes</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.css">
</head>

<body>
    <h1>Add Quotes</h1>
    <hr><br><br>
    <div class="container">
        <form method="post" name="createUser" action="<?php echo base_url() . 'index.php/User/create'; ?>">
            <div class="quote-body">
                <textarea type="text" rows="5" cols="50" name="quote" value="<?php echo set_value('quote'); ?>" id="quote" placeholder="write your quote here!"></textarea>
                <div class="error"><?php echo form_error('quote'); ?></div>
            </div><br>
            <div class="quote-author">
                <input type="text" name="author" value="<?php echo set_value('author'); ?>" id="author" placeholder="write your name here!">
                <div class="error"><?php echo form_error('author'); ?></div>
            </div><br><br><br>
            <button type="submit" id="submit" name="submit">Add Quote</button>
        </form><br>
        <a href="<?php echo base_url() ?>index.php/User/index"><button id="cancel">Cancel</button></a>

    </div>
</body>

</html>