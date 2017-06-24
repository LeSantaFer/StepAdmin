<?php

/**
 * Created by IntelliJ IDEA.
 * User: hugo
 * Date: 08/06/17
 * Time: 15:54
 */

echo("<table class='centered responsive-table'>");
$querySelect = mysqli_query($con, "select * from user order by id");

echo("<thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th></th>
        </tr>
    </thead>"
);

while ($resSelect = mysqli_fetch_array($querySelect)) {
    echo("<tbody>
            <tr>
                <td style='width: 20%'>" . $resSelect['id'] . "</td>
                <td style='width: 60%'>" . $resSelect['name'] . "</td>
                <td style='width: 20%'>
                    <a href='#main-modal'><i class='material-icons'>edit</i></a>
                    <a href='#main-modal'><i class='material-icons'>delete</i></a>
                    <a href='#main-modal'><i class='material-icons'>assignment</i></a>
                </td>
            </tr>
        </tbody>"
    );
}

echo("</table>");