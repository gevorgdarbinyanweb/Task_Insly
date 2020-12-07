$(document).ready(function(){
    $(document).on('click','#calculate', function(){
        var value = Number($('.value-class').val());
        var tax = Number($('.tax-class').val());
        var instalments = Number($('.instalments-class').val());
        if(!(value >= 100 && value <= 100000)){
            alert('Car value should be between 100-100000 range.');
            return false;
        }
        if(!(tax >= 0 && tax <= 100)){
            alert('Tax should be between 1-100 range.');
            return false;
        }
        if(!(instalments >= 1 && instalments <= 12)){
            alert('Instalments should be between 1-12 range.');
            return false;
        }
        $.ajax({
            url: 'calculate.php',
            type: "POST",
            data: {
                value: value,
                taxPercent: tax,
                instalments: instalments
            },
            success: function(data) {
                $('#calculation-result').html(data);
            }
        });
        return false;
    });
});