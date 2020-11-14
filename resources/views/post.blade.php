<html>
    <head>
        <header>
            <?php
                echo view ('header',['pagename'=>"post"]);
            ?>
        </header>
    </head>
    <div>
        <table>
            <tr>
                <td>
                    title
                </td>
                <td>
                    caption
                </td>
                <td>
                    category name
                </td>
                <td>
                    date
                </td>
            </tr>
            <tr>
                <td>
                    {{$post[0]->title}}
                </td>
                <td>
                    {{$post[0]->caption}}
                </td>
                <td>
                    {{$post[0]->name}}
                </td>
                <td>
                    <?php
                        echo \Morilog\Jalali\Jalalian::forge($post[0]->date);
                    ?>
                </td>
            </tr>
        </table>
    </div>
    <footer>
        <?php
            echo view ('footer');
        ?>
    </footer>
</html>
