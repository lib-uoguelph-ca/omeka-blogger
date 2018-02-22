<?php

function getFeedLink($feed) {
    $xml = simplexml_load_string($feed->saveXML());
    $query = "//channel/link";
    $result = $xml->xpath($query);
    if(!empty($result)) {
        return (string)$result[0];
    }

    return null;
}

