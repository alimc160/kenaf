
$(document).ready(function (){
    $(".switch").on('change',function (e){
        alert('ok')
        let url =e.target.getAttribute('data-url');
        let token =e.target.getAttribute('data-token');
        let option = {
            is_active : 1,
            _token : token
        }
        if (e.target.checked){
            updateStatus(url,'post',option);
        }else {
            option.is_active = 0;
            updateStatus(url,'post',option);
        }
    });
    $('input[name="image"]').on('change',function (e){
        let fullPath = $(this).val();
        let startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
        let filename = fullPath.substring(startIndex);
        if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
            filename = filename.substring(1);
        }
        if (filename){
            $(this).siblings('label').text(filename);
        }else{
            $(this).siblings('label').text("Choose file");
        }
    });
});
