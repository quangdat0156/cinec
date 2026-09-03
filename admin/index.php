<?php
/**
 * Gateway điều hướng quản trị CiNEC
 */
session_start();
if (isset($_SESSION['cinec_admin_logged']) && $_SESSION['cinec_admin_logged'] === true) {
    header("Location: dashboard.php");
} else {
    header("Location: login.php");
}
exit;
