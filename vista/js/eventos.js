$(document).ready(function () {
    var click=0;
    $('#li4').click(function () {
        if(click==0){
            $('#li4 ul').css('visibility', 'visible');
            $('#flecha').css('transform', 'rotate(90deg)');
            $('#li4').css('transform', 'scale(1.1)');
            click=1;
        }else{
            $('#li4 ul').css('visibility', 'hidden');
            $('#flecha').css('transform', 'rotate(0deg)');
            $('#li4').css('transform', 'scale(1)');
            $('#li4').hover(function () {
                $('#li4').css('transform', 'scale(1.1)');
                }, function () {
                $('#li4').css('transform', 'scale(1)');
                }
            );
            click=0;
        }
      });
     
});
