<?php

/*
 *  This script fetches each restaurant's data dynamically from the Yelp API.
 *  Currently, there are too many restaurants so the script will timeout.
 *
 *  Use a static method instead, view: generateVenues.py [coming soon]
 */

// template string 
$beginTemplate = '<div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <a role="button" data-toggle="collapse" data-target="#{{id}}" aria-expanded="false" aria-controls={{id}}>
                            <h4 class="panel-title">{{title}}</h4>
                        </a>
                ';

$endTemplate =  '   </div>
                    <div id="{{id}}" class="panel-collapse collapse">
                        <div class="panel-body">
                            {{description}}
                        </div>
                    </div>
                </div>';


// get json from file
$jsonFileContents = file_get_contents("./lib/geojson.geojson");
$jsonFileContents = utf8_encode($jsonFileContents);

// parse json and store results in $json
$json = json_decode($jsonFileContents, true);

$masterResult = "";

// loop through json
foreach($json as $restaurant) {
    // values extracted from json
    $id = $restaurant["ffm-properties"]["key"];
    $title = $restaurant["ffm-properties"]["title"];
    $description = $restaurant["properties"]["description"];

    // generate outerHtml by replacing values of $beginTemplate
    $outerHtml = str_replace("{{id}}", $id, $beginTemplate);
    $outerHtml = str_replace("{{title}}", $title, $outerHtml);

    // use id to generate restaurant data from the api 
    $innerHtml = getRating($id);

    // generate ending html template by replacing values of $endTemplate
    $endHtml = str_replace("{{id}}", $id, $endTemplate);
    $endHtml = str_replace("{{description}}", $description, $endHtml);

    $masterResult .= ($outerHtml . $innerHtml . $endHtml);
    $masterResult .= "\n\n";
}

echo $masterResult;
?>