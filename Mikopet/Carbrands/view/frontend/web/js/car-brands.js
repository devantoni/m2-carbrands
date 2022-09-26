define([
    'jquery',
    'Magento_Ui/js/modal/modal'
], function($, modal) {
    "use strict";
    
    var option = {
        type: 'slide',
        responsive: true,
        title: $.mage.__('Bilguide'),
        modalClass: 'car-brands-popup'
    };

    $.widget('mage.carBrands', {
        options: { 
            brands: '',
            models: ''
        },
        
        /**
         * Widget initialization
         * @private
         */

        _create: function() {
            
            const brands = this.options.brands;
            $('.models').hide();
            $("select[name='carBrands']").change(function(){
                if($.inArray($(this).val(), brands) !== -1){
                    $('#'+$(this).val()).modal(option).modal('openModal');
                }else{
                    console.log('')
                }
            })
        }
    });

    return $.mage.carBrands;
});