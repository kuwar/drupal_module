<?php
    //API Key - see http://admin.mailchimp.com/account/api
    $apikey = '7f29a87166da18c983c4c6399d5a1374-us8';
    
    // A List Id to run examples against. use lists() to view all
    // Also, login to MC account, go to List, then List Tools, and look for the List ID entry
    $listId = '49cca9e139';
    
    // A Campaign Id to run examples against. use campaigns() to view all
    $campaignId = 'YOUR MAILCHIMP CAMPAIGN ID - see campaigns() method';

    //some email addresses used in the examples:
    $my_email = '';
    $boss_man_email = 'INVALID@example.com';

    //just used in xml-rpc examples
    $apiUrl = 'http://api.mailchimp.com/1.3/';
    
?>
