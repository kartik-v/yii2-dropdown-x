/*!
 * @copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2022
 * @version 1.2.1
 *
 * Dropdown menu for Bootstrap 3 supporting submenu drilldown.
 * 
 * For more JQuery plugins visit http://plugins.krajee.com
 * For more Yii related demos visit http://demos.krajee.com
 */
(function ($) {
    $(document).ready(function () {
        $('body').on('click', 'ul.dropdown-menu [data-toggle=dropdown]', function (event) {
            event.preventDefault();
            event.stopPropagation();
            $(this).parent().siblings().removeClass('open');
            $(this).parent().toggleClass('open');
        });
    });
})(jQuery);