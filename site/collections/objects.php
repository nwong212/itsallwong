<?php
return function ($site) {
    return $site->index()->filterBy('template', 'art_project')->listed();
};
?>
