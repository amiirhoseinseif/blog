<html>
    <head>
        <header>
            <?php
            echo view ('header',['pagename'=>" posts"]);
            ?>
        </header>
    </head>
        <div>
            <table>
                <tr>
                    <td>
                        category id
                    </td>
                    <td>
                        category name
                    </td>
                </tr>
                <?php
                    for( $x=0 ; $x < $CategoryCount ; $x++ )
                    {
                        echo "<tr><td><a href='localhost:8000/category/{$category[$x][0]->id}/'>{$category[$x][0]->id}</a></td><td>{$category[$x][0]->name}</td></tr>";
                    }
                ?>
            </table>
        </div>
    </body>
    <footer>
        <?php
        echo view ('footer');
        ?>
</footer>
</html>
