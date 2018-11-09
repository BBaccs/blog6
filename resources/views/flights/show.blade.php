<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>All Flights Page</title>
    </head>
    <body>


       <ul>
            <?php foreach ($flights as $flight) : ?>

           <li>
                 <?= $flight->body; ?>
           </li>

           <?php endforeach; ?>
       </ul>


        


    </body>
</html>