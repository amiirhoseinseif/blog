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
                        post id
                    </td>
                    <td>
                        post title
                    </td>
                    <td>
                        post caption
                    </td>
                    <td>
                        category id
                    </td>
                    <td>
                        category name
                    </td>
                    <td>
                        post date
                    </td>
                </tr>
                <?php
                    for( $x=0 ; $x < $PostCount ; $x++ )
                    {
                        echo "<tr><td><a href='localhost:8000/post/{$post[$x][0]->id}/'>{$post[$x][0]->id}</a></td><td>{$post[$x][0]->title}</td><td>{$post[$x][0]->caption}</td><td><a href='localhost:8000/category/{$post[$x][0]->category_id}}/'>{$post[$x][0]->category_id}</a></td><td>{$post[$x][0]->name}</td><td>";
                        echo \Morilog\Jalali\Jalalian::forge($post[$x][0]->date);
                        echo "</tr>";
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
