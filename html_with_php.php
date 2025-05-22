<!doctype html>
<html>
    <head>
        <title>htmlwithphp</title>
    </head>
    <body>
        <?php $name= $_POST['name']; ?>
        <h1>My name is <?php echo $name; ?></h1>
        
        <p>Here I am trying to use html and php tags together</p>
        
        <p>In our php code I have declared a variable named $name and it has a value as <?php echo $name ?></p>
        
        <pre>
           Hey
                My name is
                            <?php echo $name ?>
        </pre>

    </body>
</html>
