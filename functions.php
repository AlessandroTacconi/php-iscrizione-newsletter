<?php
function emailValida($email) {
    if (str_contains($email, '@') && str_contains($email, '.')) {
        // Email valida
        return '<div class="alert alert-success" role="alert">
                    Bravo, la tua e-mail è valida
                </div>';
    } else {
        // Email non valida
        return '<div class="alert alert-danger" role="alert">
                    Mi dispiace, la tua e-mail non è valida
                </div>';
    }
}
?>


