<?php
/**
 * Created by IntelliJ IDEA.
 * User: hugo
 * Date: 08/06/17
 * Time: 15:54
 */

echo("<ul class='collection'>");

if ($page == "index") {
    include("php/nameGenerator.php");

    for ($i = 0; $i < 100; $i++) {
        $string = $names[rand(0, 99)];

        echo("<li class='collection-item waves-effect waves-grey'>
                <div>
                    $string
                    <a href='#main-modal' class='secondary-content'>  
                        <strong>INFORMAÇÕES</strong>
                    </a>
                </div>
            </li>
        ");
    }

} else {

    include("php/numberGenerator.php");

    for ($i = 0; $i < 100; $i++) {
        echo("<li class='collection-item waves-effect waves-grey'>
                <div>
                    $string
                    <a href='#main-modal' class='secondary-content'>  
                        <strong>INFORMAÇÕES</strong>
                    </a>
                </div>
            </li>
        ");
    }
}

echo("</ul>");