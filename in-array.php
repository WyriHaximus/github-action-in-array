<?php

const NEEDLE = 'INPUT_NEEDLE';
const HAYSTACK = 'INPUT_HAYSTACK';

exit((function () {
    echo PHP_EOL, '::set-output name=status::', (in_array(getenv(NEEDLE), explode(',', getenv(HAYSTACK))) ? 'success' : 'failure'), PHP_EOL;
})());
