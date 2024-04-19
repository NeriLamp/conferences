import './bootstrap'

document.addEventListener('DOMContentLoaded',function (){
    document.querySelectorAll('.datepicker').forEach(function (item){
        flatpickr(item,{
            mode: 'range'
        });
    });
});
document.addEventListener('DOMContentLoaded', function() {
    document.addEventListener('click', function(event) {
        var button = event.target.closest('.delete_button');
        if (button) {
            event.preventDefault();
            var confirmation = confirm('Are you sure you want to delete this article?');
            if (confirmation) {
                var form = button.closest('form');
                if (form) {
                    form.submit();
                }
            }
        }
    });
});


document.addEventListener("DOMContentLoaded", function() {
    flatpickr("#datepicker", {
        enableTime: true,
        dateFormat: "Y-m-d H:i"
    });
});
