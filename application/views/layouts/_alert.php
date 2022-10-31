<?php
$success    = $this->session->flashdata('success');
$error      = $this->session->flashdata('error');
$warning    = $this->session->flashdata('warning');

if ($success) {
    $alert_status   = 'alert-success';
    $status         = 'Success!';
    $message        = $success;
}

if ($error) {
    $alert_status   = 'alert-danger';
    $status         = 'Error!';
    $message        = $error;
}

if ($warning) {
    $alert_status   = 'alert-warning';
    $status         = 'Warning!';
    $message        = $warning;
}
?>

<?php if ($success || $error || $warning) : ?>
    <script>
        swal("<?= $status ?>", "<?= $message ?>");
    </script>
<?php endif ?>