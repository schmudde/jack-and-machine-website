<html>
<body>

<p>Mailchimp Test</p>
<?php

    require __DIR__ . '/../../bin/vendor/autoload.php';
    use Mailchimp\Mailchimp;

    $mc = new Mailchimp('e380a781106d4a1f1905b2e412a7103c-us6');

    $lists = $mc->request('lists', [
        'fields' => 'lists.id, lists.name, lists.stats.member_count',
        'count' => 30
    ]);

    echo "test";

?>

</body>
</html>
