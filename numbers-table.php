<?php

/**
 * Created by Hugo Castelani
 * Date: 23/06/17
 * Time: 16:44
 */

echo("<ul class='collection'>");
$querySelect = mysqli_query($con, "select * from phone order by id");

while ($resSelect = mysqli_fetch_array($querySelect)) {
    echo("<li class='collection-item waves-effect waves-grey'>
            <div>
                " . $resSelect['number'] . "
                <a href='#main-modal' class='secondary-content'>  
                    <strong>INFORMAÇÕES</strong>
                </a>
            </div>
        </li>
    ");
}

echo("</ul>");