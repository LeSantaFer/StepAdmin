<?php

/**
 * Created by Hugo Castelani
 * Date: 23/06/17
 * Time: 16:44
 */

echo("<table class='centered responsive-table'>");
$querySelect = mysqli_query($con, "select * from phone order by id");

echo("<thead>
        <tr>
            <th>ID</th>
            <th>ID do usuário</th>
            <th>Número</th>
            <th></th>
        </tr>
    </thead>"
);

while ($resSelect = mysqli_fetch_array($querySelect)) {
    echo("<tbody>
            <tr>
                <td style='width: 20%'>" . $resSelect['id'] . "</td>
                <td style='width: 20%'>" . $resSelect['idUser'] . "</td>
                <td style='width: 40%'>" . $resSelect['number'] . "</td>
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