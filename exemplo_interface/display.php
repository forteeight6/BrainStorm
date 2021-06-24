<!--
https://imasters.com.br/back-end/usando-interfaces-de-objetos-em-php

https://dev.to/phpbrasil/como-nao-desenvolver-em-php-c8h

-->
<?php

    interface oopTemplate 
    {
    
        public function methodOne( $userName );
        public function methodTwo( $userName, $password );
        
    }
   
   class oopClass implements oopTemplate 
   {
    
        public function methodOne( $userName ) 
        {
        
            echo 'The user name is '. $userName. '<br>';
        
        }
        
        public function methodTwo( $userName, $password ) 
        {
        
            echo 'The user name is '. $userName. '<br>';
            echo 'The password is '. $password. '<br>';
        
        }
    
   }
?>