$(document).ready(function(){
    if(window.jQuery){
        if($.fn.DataTable){
            $('.dts').DataTable(opts, {
                language: {
                    url: '/libs/datatables/spanish.json'
                }
            });
        }
    }   
});