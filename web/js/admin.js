$(function () {
    $('.main-sidebar a').each(function () {
        let location = window.location.protocol + '//' + window.location.host + window.location.pathname;
        let link = this.href;
        if (link == location) {
            $('.nav-treeview li').removeClass('active');
            $(this).parent().addClass('active');
            $(this).closest('.nav-item').addClass(' active');
        }
    })
});