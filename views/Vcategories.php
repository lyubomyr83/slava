<h3>Категории</h3>
<form method="post">
    <ul>
        <?php
        foreach ($categories as $category)
        {
            echo "<li><input type='checkbox' name='category_name[]' value='{$category['id']}'> {$category['name']}</li>";
        }
        ?>
        <li><input type="submit" value="Применить"></li>
    </ul>

</form>