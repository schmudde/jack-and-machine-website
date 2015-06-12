<html>
<body>

<p>Mailchimp Test</p>
<?php

    require __DIR__ . '/../../bin/vendor/autoload.php';
    use Drewm\MailChimp;

    $MailChimp = new MailChimp('e380a781106d4a1f1905b2e412a7103c-us6');
    print_r ($MailChimp->call('lists/list', 
                               array('filters' => array('list_id' => '37d2c184d6'))
             ));

    echo "<br /><br/>";

    $result = $MailChimp->call('lists/subscribe', array(
                   'id' => '37d2c184d6',
                 'email' => array('email'=>'nospam@nospam.com'),
                 'merge_vars' => array('FNAME'=>'Davy', 'LNAME'=>'Jones'),
                 'double_optin' => false,
                 'update_existing' => true,
                 'replace_interests' => false,
                 'send_welcome' => false,
                 ));
   echo "<br /><br/>";
   print_r($result);

?>

</body>
</html>
