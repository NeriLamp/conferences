import './bootstrap'

document.addEventListener('DOMContentLoaded',function (){
    document.querySelectorAll('.datepicker').forEach(function (item){
        flatpickr(item,{
            mode: 'range'
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    flatpickr("#datepicker", {
        enableTime: true,
        dateFormat: "Y-m-d H:i"
    });
});
