<?php
    function error($err, $link){
        echo '
            <script>
            // <div class="alert alert-danger d-flex align-items-center" role="alert">
            //     <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            //     <div>
            //         An example danger alert with an icon
            //     </div>
            // </div>
                alert ("'.$err.'");
                window.location ="'.$link.'";
            </script>';
    }
    
    function success($succ, $link){
        echo '<script>
                alert ("'.$succ.'");
                window.location ="'.$link.'";
            </script>';
    }
    
?>