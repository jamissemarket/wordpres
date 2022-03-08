jQuery(document).ready(function ($) {
    "use strict";
    
    function ecome_editor_block_align_full() {
        var $editor = $('.edit-post-visual-editor.editor-styles-wrapper');
        if (!$editor) {
            return false;
        }
        
        if (!$editor.find('.wp-block[data-align="full"]').length) {
            return false;
        }
        
        if (!$('.fami-gutenberg-editor-force-style').length) {
            $('head').append('<style class="fami-gutenberg-editor-force-style" type="text/css"></style>');
        }
        var $styleWrap = $('head .fami-gutenberg-editor-force-style');
        
        var $thisEditorWritingFlow = $editor.find('.editor-writing-flow');
        var this_editor_w = $editor.outerWidth();
        var editor_wtf_w = $thisEditorWritingFlow.outerWidth();
        var editor_wtf_left = (this_editor_w - editor_wtf_w) / 2;
        var selector_align_full = '.editor-styles-wrapper .wp-block[data-align="full"]';
        var css = selector_align_full + ' {width: ' + (this_editor_w - 18) + 'px !important; max-width: ' + (this_editor_w - 19) + 'px !important; left: -' + editor_wtf_left + 'px !important; }';
        $styleWrap.html(css);
    }
    
    $(document).on('click', 'button', function () {
        ecome_editor_block_align_full();
    });
    
    $(window).on('load', function () {
        ecome_editor_block_align_full();
    });
    
    $(window).on('resize', function () {
        ecome_editor_block_align_full();
    });
    
});