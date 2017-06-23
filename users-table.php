<?php

/**
 * Created by IntelliJ IDEA.
 * User: hugo
 * Date: 08/06/17
 * Time: 15:54
 */

echo("<ul class='collection'>");
$querySelect = mysqli_query($con, "select * from user order by id");

while ($resSelect = mysqli_fetch_array($querySelect)) {
    echo("<li class='collection-item waves-effect waves-grey'>
            <div>
                " . $resSelect['name'] . "
                <a href='#main-modal' class='secondary-content'>  
                    <strong>INFORMAÇÕES</strong>
                </a>
            </div>
        </li>
    ");
}

echo("</ul>");