(function (window, jquery) {
    "use strict";
    jquery(document).ready(function () {
        jquery(".image").each(function (index, el) {
            var w, h, bw, bh;
            w = jquery(el).width();
            h = jquery(el).height();
            if (w > h) {
                jquery(el).css({height: '100%'});
            } else {
                jquery(el).css({width: '100%'});
            }
            bw = jquery(el.parentNode).width();
            jquery(el.parentNode).height(bw);
            w = jquery(el).width();
            h = jquery(el).height();
            jquery(el).css({left: (bw - w) / 2 + 'px'});
            jquery(el).css({top: (bw - h) / 2 + 'px'});
        });
        jquery(window).resize(function () {
            jquery(".image").each(function (index, el) {
                var w, h, bw, bh;
                w = jquery(el).width();
                h = jquery(el).height();
                bw = jquery(el.parentNode).width();
                jquery(el.parentNode).height(bw);
                jquery(el).css({top: (bw - h) / 2 + 'px'});
                jquery(el).css({left: (bw - w) / 2 + 'px'});
            });
        });
    });
}(this, window.$ || window.jQuery))