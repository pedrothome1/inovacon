$(document).ready(function () {

    // Disable and put loading icon when submitting form
    $('form').one('submit', function () {
        $(this).find('[type="submit"]').attr('disabled', true);
        $(this).find('[type="submit"]').prepend('<i class="fas fa-spinner fa-pulse fa-fw"></i>&nbsp;');
    });

    // File input
    $('.custom-file-input').each(function () {
        $(this).on('change', function () {
            $(this).next('.custom-file-label')
                .addClass("selected")
                .html($(this).val());
        });
    });

    // Tooltip activation
    $('[data-tooltip="tooltip"]').tooltip();

    // Material design inputs
    let $mdInput = $('.md-input');

    $mdInput.focus(function() {
        $(this).addClass('active');
    });

    $mdInput.focusout(function() {
        if (! $(this).val()) {
            $(this).removeClass('active');
        }
    });

});