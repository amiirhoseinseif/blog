<html>
    <head>
        <header>
            <?php
                echo view ('header',['pagename'=>"home"]);
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
                if (count($category) > 3 )
                    {
                        for( $x=0 ; $x < 3 ; $x++ )
                        {
                            echo "<tr><td><a href='localhost:8000/category/{$category[$x][0]->id}/'>{$category[$x][0]->id}</a></td><td>{$category[$x][0]->name}</td></tr>";
                        }
                    }
                else
                    {
                        for( $x=0 ; $x < count($category) ; $x++ )
                            {
                                echo "<tr><td><a href='localhost:8000/category/{$category[$x][0]->id}/'>{$category[$x][0]->id}</a></td><td>{$category[$x][0]->name}</td></tr>";
                            }
                    }
            ?>
        </table>
        <table>
            <tr>
                <td>
                    post id
                </td>
                <td>
                    category id
                </td>
                <td>
                    post title
                </td>
                <td>
                    post caption
                </td>
                <td>
                    category name
                </td>
                <td>
                    date
                </td>
            </tr>
            <?php
            if (count($post) > 5 )
            {
                for( $x=0 ; $x < 5 ; $x++ )
                {
                    echo "<tr><td><a href='localhost:8000/post/{$post[$x][0]->id}/'>{$post[$x][0]->id}</a></td><td><a href='localhost:8000/category/{$post[$x][0]->category_id}}/'>{$post[$x][0]->category_id}</a></td><td>{$post[$x][0]->title}</td><td>{$post[$x][0]->caption}</td><td>{$post[$x][0]->name}</td><td>";
                    echo \Morilog\Jalali\Jalalian::forge($post[$x][0]->date);
                    echo "</tr>";
                }
            }
            else
            {
                for( $x=0 ; $x < count($post) ; $x++ )
                {
                    echo "<tr><td><a href='localhost:8000/post/{$post[$x][0]->id}/'>{$post[$x][0]->id}</a></td><td><a href='localhost:8000/category/{$post[$x][0]->category_id}}/'>{$post[$x][0]->category_id}</a></td><td>{$post[$x][0]->title}</td><td>{$post[$x][0]->caption}</td><td>{$post[$x][0]->name}</td><td>";
                    echo \Morilog\Jalali\Jalalian::forge($post[$x][0]->date);
                    echo "</tr>";
                }
            }
            ?>
        </table>
    {{--    $date = \Morilog\Jalali\Jalalian::now()--}}
    {{--    // OR--}}
    {{--    $date = jdate();--}}

    {{--    // pass timestamps--}}
    {{--    $date = Jalalian::forge(1333857600);--}}
    {{--    // OR--}}
    {{--    $date = jdate(1333857600);--}}

    {{--    // pass human readable strings to make timestamps--}}
    {{--    $date = Jalalian::forge('last sunday');--}}

    {{--    // get the timestamp--}}
    {{--    $date = Jalalian::forge('last sunday')->getTimestamp(); // 1333857600--}}

    {{--    // format the timestamp--}}
    {{--    $date = Jalalian::forge('last sunday')->format('%B %d، %Y'); // دی 02، 1391--}}
    {{--    $date = Jalalian::forge('today')->format('%A, %d %B %y'); // جمعه، 23 اسفند 97--}}

    {{--    // get a predefined format--}}
    {{--    $date = Jalalian::forge('last sunday')->format('datetime'); // 1391-10-02 00:00:00--}}
    {{--    $date = Jalalian::forge('last sunday')->format('date'); // 1391-10-02--}}
    {{--    $date = Jalalian::forge('last sunday')->format('time'); // 00:00:00--}}

    {{--    // get relative 'ago' format--}}
    {{--    $date = Jalalian::forge('now - 10 minutes')->ago() // 10 دقیقه پیش--}}
    {{--    // OR--}}
    {{--    $date = Jalalian::forge('now - 10 minutes')->ago()--}}
    </div>
    <footer>
        <?php
            echo view ('footer');
        ?>
    </footer>
</html>
