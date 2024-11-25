<?php

function my_reset_session()
{
    session_destroy();
    session_unset();
    session_reset();
}
