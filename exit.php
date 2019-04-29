<?php
	@ob_start();
    session_start();
    session_unset();
    session_destroy();
    header("Location: http://sai9/");// - это ссылка на страницу, которая откроется после выхода
    exit;
?>