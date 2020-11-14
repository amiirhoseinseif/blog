<html>
    <head>
        <header>
            <?php
                echo view ('header',['pagename'=>"category"]);
            ?>
        </header>
    </head>
    <div>
        <h1>
            {{$post[0][0]->name}}
        </h1>
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
                    date
                </td>
            </tr>
            <?php
                for( $x=0 ; $x < $PostCount ; $x++ )
                    {
                        echo "<tr><td><a href='localhost:8000/post/{$post[$x][0]->id}/'>{$post[$x][0]->id}</a></td><td>{$post[$x][0]->title}</td><td>{$post[$x][0]->caption}</td><td>";
                        echo \Morilog\Jalali\Jalalian::forge($post[0][0]->date);
                        echo"</td></tr>";
                    }
            ?>
        </table>
    </div>
    <footer>
        <?php
            echo view ('footer');
        ?>
    </footer>
</html>
