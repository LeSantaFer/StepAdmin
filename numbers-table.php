<?php

/**
 * Created by Hugo Castelani
 * Date: 23/06/17
 * Time: 16:44
 */

echo("<table class='centered responsive-table'>");

$query = ("select p.id, p.idUser, c.code, p.areaCode, p.number
  from phone p
  inner join area_code a
    on p.areaCode = a.code
  inner join state s
    on a.idState = s.id
  inner join country_code c
    on s.idCountry = c.idCountry");

$querySelect = mysqli_query($con, $query);

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
                <td style='width: 40%'>+" . $resSelect['code'] . " (" . $resSelect['areaCode'] . ") ". $resSelect['number'] . "</td>
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