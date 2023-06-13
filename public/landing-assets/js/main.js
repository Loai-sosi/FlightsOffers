/*global $, jQuery, console, alert, prompt */
$(window).on('load', function () {
    "use strict";
    $(".se-pre-con,.pre-loader").delay(500).fadeOut("slow");
    new WOW().init(
        {
            mobile: false,
            live: true
        });
});

$(document).ready(function () {
    "use strict";

    $('[placeholder]').focus(function () { // Placeholder
        $(this).attr('data-place', $(this).attr('placeholder'));
        $(this).attr('placeholder', '');
    }).blur(function () {
        $(this).attr('placeholder', $(this).attr('data-place'));
    });

    $(document).on('click', '.h-notification .cs-close', function (event) {
        event.preventDefault();
        $(this).closest('.h-notification').remove();
    });




    ///// profile image upload //
    $(document).on('click', '.upload-img', function () {
        let fileInput = $('#upload-image')[0].click();
        $('#upload-image').on('change', function (e) {
            previewFile($(this));
            $('.upload-img figure').children().addClass('d-none');
            $(this).children('i').addClass('d-none');
        });
    })
    function previewFile(input) {
        var file = input.get(0).files[0];
        var parent = $('#preview');
        if (file) {
            var reader = new FileReader();
            reader.onload = function () {
                parent.attr("src", reader.result);
                parent.removeClass('d-none');
            }
            reader.readAsDataURL(file);
        }
    }
    ///// profile image upload //

    /*************************/
    /********* drag drop file uploda *********/
    $(document).on('click', '.cs-upload-file .wrapper', function (e) {
        e.preventDefault();
        e.stopPropagation();
        let fileInput = $(this).closest('.cs-upload-file').find('input[type="file"]');
        fileInput.click();
    });
    $('.cs-upload-file input[type="file"]').change(function (e) {
        $(this).closest('.cs-upload-file').find('p').text(e.target.files[0].name);
        // $(this).closest('.cs-upload-file').find('h4').addClass('d-none');
    });


    $(document).on("dragover", '.cs-upload-file', function (e) {
        e.preventDefault();
        e.stopPropagation();
    });
    $(document).on("dragleave", '.cs-upload-file', function (e) {
        e.preventDefault();
        e.stopPropagation();
    });
    $(document).on("drop", '.cs-upload-file', function (e) {
        e.preventDefault();
        e.stopPropagation();
        // console.log( e.originalEvent.dataTransfer.files);
        $(this).find('input[type="file"]')[0].files = e.originalEvent.dataTransfer.files;
        $(this).find('input[type="file"]').change();

    });
    /*************************/

    /*************************/
    /******** copy link *********/
    $('.copylink').on('click', function (e) {
        e.preventDefault();
        navigator.clipboard.writeText($(this).attr('href'));
    });
    /*************************/

    // search model
    $('.main-header .search-btn').on('click', function (event) {
        event.preventDefault();
        $('#search').addClass('open');
        $('#search > form > input[type="search"]').focus();
    });
    //#search,
    $(' #search .close_btn').on('click', function (event) {
        event.preventDefault();
        // if (event.target == this || event.target.className == 'close_btn' || event.keyCode == 27) {
        $(this).closest('#search').removeClass('open');
        // }
    });

    // custom owl nav
    $(document).on('click', '.sec-header .cs-nav i', function (event) {
        event.preventDefault();
        let _this = $(this).parent();
        let _target = _this.data('target');
        if (_this.hasClass('next')) {
            $(_target).trigger('next.owl.carousel', [1000]);
        } else {
            $(_target).trigger('prev.owl.carousel', [1000]);
        }
    });
    $('.copylink').on('click', function (e) {
        e.preventDefault();
        navigator.clipboard.writeText($(this).attr('href'));
    });
    $('.scroll-to-top').on('click', function () {
        window.scrollTo(0, 0);
    });

    $(document).on('click', '.add', function () {
        let count = parseInt($(this).siblings('.count').children('input').val()) ?? 0;
        if (!Number.isInteger(count)) {
            count = 0;
        }
        $(this).siblings('.count').children('input').val(++count);
        $(this).siblings('.count').children('span').html(count);
        $(this).siblings('.count').css('display', 'flex');
        $(this).siblings('.remove').css('display', 'flex');
    });
    $(document).on('click', '.remove', function () {
        let count = parseInt($(this).siblings('.count').children('input').val()) ?? 0;
        if (!Number.isInteger(count)) {
            count = 0;
        }
        $(this).siblings('.count').children('input').val(--count);
        $(this).siblings('.count').children('span').html(count);
        if (count <= 0) {
            $(this).siblings('.count').css('display', 'none');
            $(this).css('display', 'none');
        }
    });
    $(document).on('click', '.show-password', function () {
        $(this).toggle();
        $(this).siblings('svg').toggle();
        if ($(this).closest('.icon-input').children('input').attr('type') == 'text') {
            $(this).closest('.icon-input').children('input').attr('type', 'password');
        } else {
            $(this).closest('.icon-input').children('input').attr('type', 'text');
        }

    });
}); 