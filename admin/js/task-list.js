$(function(){
    "use strict";
    
    // Tasks List
    $('input.line-style-blue').each(function(){
        var self = $(this),
        label = self.next(),
        label_text = label.text();

        label.remove();
        self.iCheck({
            checkboxClass: 'icheckbox_line-blue',
            radioClass: 'iradio_line-blue',
            insert: '<div class="icheck_line-icon"></div>' + label_text
        });
    });
    $('input.line-style-red').each(function(){
        var self = $(this),
        label = self.next(),
        label_text = label.text();

        label.remove();
        self.iCheck({
            checkboxClass: 'icheckbox_line-red',
            radioClass: 'iradio_line-red',
            insert: '<div class="icheck_line-icon"></div>' + label_text
        });
    });
    $('input.line-style-green').each(function(){
        var self = $(this),
        label = self.next(),
        label_text = label.text();

        label.remove();
        self.iCheck({
            checkboxClass: 'icheckbox_line-green',
            radioClass: 'iradio_line-green',
            insert: '<div class="icheck_line-icon"></div>' + label_text
        });
    });
});
