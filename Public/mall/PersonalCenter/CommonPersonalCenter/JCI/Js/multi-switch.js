/* 
    Created on : 15/04/2016, 14:11:50
    Author     : tcavalin
*/

(function ($) {
    $.fn.multiSwitch = function (options) {

        var settings = $.extend({
            textChecked: 'Deferir',
            textNotChecked: 'Indeferir',
            functionOnChange: function ($element) {
            }
        }, options);

        // Create de base element
        var element = $('<div />').addClass('multi-switch');
        // Set width in the base element
        element.css('width', settings.width);
        // Create de content element
        var content = $('<div />').addClass('switch-content');
        // Insert a circle element
        content.append($('<div />').addClass('switch-circle'));
        // Append to base element
        element.append(content);

        // Store de main object
        var cheslides = this;

        cheslides.each(function () {

            var uelement = element.clone();

            var eventClick = true;

            if ($(this).attr('checked-value') && !$(this).is(":disabled")) {

                var classe = 'initial';
                if ($(this).val() == $(this).attr('checked-value')) {
                    classe = 'active';
                } else
                if ($(this).val() == $(this).attr('unchecked-value')) {
                    classe = 'disable';
                }
            
                if (classe == 'initial') {
                    var infoDeferido = $('<span class="info-slide disable" title="' + settings.textNotChecked + '"/>');
                    var infoIndeferido = $('<span class="info-slide active" title="' + settings.textChecked + '"/>');
                    uelement.find('.switch-content').append(infoDeferido);
                    uelement.find('.switch-content').append(infoIndeferido);
                    
                    infoDeferido.click(function(){
                        var checkbox = $(uelement).find('input');                        
                        checkbox.val($(checkbox).attr('checked-value'));
                        
                        $(uelement).find('span').html(settings.textChecked);
                        $(uelement).find('.switch-content').addClass('active');
                        $(uelement).find('.switch-content').removeClass('disable');
                        
                        eventClick = true;
                        
                        $(uelement).find('.info-slide').remove();
                    });
                    
                    infoDeferido.hover(function(){
                        $(uelement).find('.switch-content').addClass('disable');
                        $(uelement).find('.switch-content').removeClass('initial');
                    }, function(){
                        $(uelement).find('.switch-content').addClass('initial');
                        $(uelement).find('.switch-content').removeClass('disable');
                    });
                    
                    infoIndeferido.click(function(){
                        var checkbox = $(uelement).find('input');                        
                        checkbox.val($(checkbox).attr('unchecked-value'));
                        
                        $(uelement).find('span').html(settings.textChecked);
                        $(uelement).find('.switch-content').addClass('disable');
                        $(uelement).find('.switch-content').removeClass('active');
                        
                        eventClick = true;
                        
                        $(uelement).find('.info-slide').remove();
                    });
                    
                    infoIndeferido.hover(function(){
                        $(uelement).find('.switch-content').addClass('active');
                        $(uelement).find('.switch-content').removeClass('initial');
                    }, function(){
                        $(uelement).find('.switch-content').addClass('initial');
                        $(uelement).find('.switch-content').removeClass('active');
                    });
                    
                    eventClick = false;
                }

                uelement.find('.switch-content')
                        .addClass(classe)
                        .addClass($(this).is(":disabled") ? 'disabled' : '');
                uelement.append($(this).clone());

            } else {
                var isChecked = $(this).is(":checked");

                uelement.find('span').html(isChecked ? settings.textChecked : settings.textNotChecked);
                uelement.find('.switch-content')
                        .addClass(isChecked ? 'active' : 'disable')
                        .addClass($(this).is(":disabled") ? 'disabled' : '');
                uelement.append($(this).clone());
            }

            uelement.click(function () {
                
                if (!eventClick)
                    return;

                var checkbox = $(this).find('input');

                if (checkbox.is(":disabled"))
                    return;

                if ($(checkbox).attr('checked-value')) {
                    var checked = $(this).find('.switch-content').hasClass('active');
                    var status = !checked;
                    if (checked) {
                        checkbox.val($(checkbox).attr('unchecked-value'));
                    } else {
                        checkbox.val($(checkbox).attr('checked-value'));
                    }
                } else {
                    var status = !checkbox.is(":checked");
                    
                    checkbox.prop('checked', status);
                }

                settings.functionOnChange(checkbox);
                $(this).find('.switch-content').removeClass('initial');
                if (status) {
                    $(this).find('span').html(settings.textChecked);
                    $(this).find('.switch-content').addClass('active');
                    $(this).find('.switch-content').removeClass('disable');
                } else {
                    $(this).find('span').html(settings.textNotChecked);
                    $(this).find('.switch-content').addClass('disable');
                    $(this).find('.switch-content').removeClass('active');
                }

            });
            uelement.change(function () {

                var checkbox = $(this).find('input');
                if (checkbox.is(":disabled"))
                    return;

                if ($(checkbox).attr('checked-value')) {
                    var checked = $(this).find('.switch-content').hasClass('active');
                    var status = !checked;

                    if (checked) {
                        checkbox.val($(checkbox).attr('unchecked-value'));
                    } else {
                        checkbox.val($(checkbox).attr('checked-value'));
                    }
                } else {
                    var status = !checkbox.is(":checked");
                    checkbox.prop('checked', status);
                }

                settings.functionOnChange(checkbox);
                $(this).find('.switch-content').removeClass('initial');
                if (status) {
                    $(this).find('span').html(settings.textChecked);
                    $(this).find('.switch-content').addClass('active');
                    $(this).find('.switch-content').removeClass('disable');
                } else {
                    $(this).find('span').html(settings.textNotChecked);
                    $(this).find('.switch-content').addClass('disable');
                    $(this).find('.switch-content').removeClass('active');
                }
            });

            $(this).after(uelement);
            $(this).remove();
        });
    };
}(jQuery));
