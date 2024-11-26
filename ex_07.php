<?php

function my_reset_session()
{
    if (session_status() != 1) {
        session_destroy();
        session_unset();
        session_reset();
    }
}
