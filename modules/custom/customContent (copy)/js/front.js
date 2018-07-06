function sendData(val){
    console.log(val);
    (function ($, Drupal) {

        'use strict';
        /* CODE GOES HERE */
        // console.log('start');
        $('#ak').load('update',{add: val,function(){
            console.log('completed it');
        }});
      
      })(jQuery, Drupal);
    
}

function removeData(val){
    console.log(val);
    (function ($, Drupal) {

        'use strict';
        /* CODE GOES HERE */
        console.log('start');
        $('#rm').load('update',{remove: val,function(){
            console.log('removed');
            setTimeout(location.reload(true),3);
        }});
      })(jQuery, Drupal);
 
}