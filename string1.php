<?php
echo "this is a simple string";

echo 'You can also have embedded newlines in strings this way as it is okay to do';

//outputs: arnold once said : "I'11 be back"
echo 'arnold once said: "I\'11 be back"';

//outputs: you deleted C:\*.*?
echo 'You deleted C:\\*.*?';

//outputs: you deleted C:\*.*?
echo 'you deleted C:\*.*?';

// Outputs: This will not expand: \n a newline 
echo 'This will not expand: \n a newline';

// Outputs: Variables do not $expand $either 
echo 'Variables do not $expand $either';
?>