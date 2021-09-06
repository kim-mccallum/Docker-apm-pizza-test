<?php 
    include('config/db_connect.php');

    // write query for all pizzas
    $sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';
    // make the query to get results
    $result = mysqli_query($conn, $sql);
    
    // fetch the resulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // clear the result from memory and close the connection
    mysqli_free_result($result);
    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
    <?php include('templates/header.php'); ?>

    <h4 class="center brown-text darken-3">Custom Pizzas</h4>
    <div class="container">
        <div class='row'>
            <?php foreach($pizzas as $pizza): ?>
                <div class="col s6 md3">
                    <div class='card z-depth-0'>
                        <img src="img/pizza.svg" class="pizza">
                        <div class='card-content center'>
                            <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                            <ul>
                                <?php foreach(explode(',', $pizza['ingredients']) as $ing): ?>
                                    <li><?php echo htmlspecialchars($ing); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="card-action right-align">
                            <a href="details.php?id=<?php echo $pizza['id']?>" class="brand-text">More Info</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <?php if(count($pizzas) == 0):?>
                <h5 class='center'>There are no pizzas in the database.</h5>
                <p class="center">Feel free to add one if you are feeling creative.</p>
            <?php endif; ?>
        </div>
    </div>
    
    <?php include('templates/footer.php'); ?>
</html>