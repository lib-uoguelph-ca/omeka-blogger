<?php

function getFeedItemBody($item, $display) {
    if($display == "short") {
        return $item->description;
    }

    return $item->content;
}

function getFeedLink($feed) {
    $xml = simplexml_load_string($feed->saveXML());
    $query = "//channel/link";
    $result = $xml->xpath($query);
    if(!empty($result)) {
        return (string)$result[0];
    }

    return null;
}

